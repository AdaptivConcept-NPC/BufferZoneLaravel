<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GalleryItem;

class Gallery extends Component
{
    public $items = [];

    public function mount()
    {
        $this->loadItems();
    }

    public function loadItems()
    {
        $this->items = GalleryItem::ordered()->get()->toArray();
    }

    public function render()
    {
        return view('livewire.gallery');
    }
}
