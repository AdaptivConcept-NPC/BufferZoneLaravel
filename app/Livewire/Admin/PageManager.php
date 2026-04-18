<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SiteContent;
use App\Models\GalleryItem;
use Illuminate\Support\Facades\File;

class PageManager extends Component
{
    use WithFileUploads;

    public $activeTab = 'content';
    public $contents = [];
    public $imageUploads = []; // Store temporary file objects
    public $newGalleryImage;
    public $galleryCaption = '';

    public function mount()
    {
        $this->loadContent();
    }

    public function loadContent()
    {
        $this->contents = SiteContent::orderBy('section')->get()->toArray();
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function saveContent()
    {
        foreach ($this->contents as $index => $item) {
            $value = $item['value'];

            // Handle boolean from toggles (Livewire sends true/false)
            if (is_bool($value)) {
                $value = $value ? '1' : '0';
            }

            $updateData = ['value' => $value];

            // Handle image upload if exists for this index
            if (isset($this->imageUploads[$index])) {
                $file = $this->imageUploads[$index];
                $filename = 'content_' . $item['key'] . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('assets/images', $filename, 'real_public');
                $updateData['value'] = 'assets/images/' . $filename;
            }

            SiteContent::where('id', $item['id'])->update($updateData);
        }

        $this->imageUploads = [];
        $this->loadContent();
        session()->flash('success', 'Site content updated successfully.');
    }

    public function uploadGalleryImage()
    {
        $this->validate([
            'newGalleryImage' => 'required|image|max:10240', // 10MB
        ]);

        $filename = 'gallery_' . time() . '.' . $this->newGalleryImage->getClientOriginalExtension();
        
        // Save to public/assets/images
        $this->newGalleryImage->storeAs('assets/images/gallery', $filename, 'real_public');

        GalleryItem::create([
            'filename' => $filename,
            'caption' => $this->galleryCaption,
            'sort_order' => GalleryItem::max('sort_order') + 1,
        ]);

        $this->reset(['newGalleryImage', 'galleryCaption']);
        session()->flash('success', 'Image added to gallery.');
    }

    public function deleteGalleryImage($id)
    {
        $item = GalleryItem::find($id);
        if ($item) {
            $filePath = public_path('assets/images/gallery/' . $item->filename);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
            $item->delete();
            session()->flash('success', 'Image removed from gallery.');
        }
    }

    public function render()
    {
        return view('livewire.admin.page-manager', [
            'gallery' => GalleryItem::ordered()->get(),
        ])->layout('layouts.admin');
    }
}
