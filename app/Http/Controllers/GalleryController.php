<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Get all gallery items - public
     */
    public function index()
    {
        $items = GalleryItem::ordered()->get();
        return response()->json($items);
    }

    /**
     * Upload image - admin only
     */
    public function upload(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,webp,gif|max:10240', // 10MB
        ]);

        try {
            // Store file
            $file = $request->file('image');
            $filename = 'img_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('images', $filename, 'public');

            // Create DB record
            $item = GalleryItem::create([
                'filename' => $filename,
                'caption' => '',
                'sort_order' => GalleryItem::max('sort_order') + 1 ?? 0,
            ]);

            return response()->json([
                'success' => true,
                'id' => $item->id,
                'url' => Storage::url('images/' . $filename),
                'filename' => $filename,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error uploading image',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update gallery item caption/sort - admin only
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'caption' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer',
        ]);

        try {
            $item = GalleryItem::findOrFail($id);
            $item->update($validated);

            return response()->json([
                'success' => true,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found',
            ], 404);
        }
    }

    /**
     * Reorder gallery items - admin only
     */
    public function reorder(Request $request)
    {
        $validated = $request->validate([
            'order' => 'required|array',
            'order.*.id' => 'required|integer',
            'order.*.sort_order' => 'required|integer',
        ]);

        try {
            foreach ($validated['order'] as $item) {
                GalleryItem::find($item['id'])->update(['sort_order' => $item['sort_order']]);
            }

            return response()->json([
                'success' => true,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error reordering items',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Delete gallery item - admin only
     */
    public function destroy(Request $request, $id)
    {
        try {
            $item = GalleryItem::findOrFail($id);
            
            // Delete file from storage
            Storage::disk('public')->delete('images/' . $item->filename);
            
            // Delete DB record
            $item->delete();

            return response()->json([
                'success' => true,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Item not found',
            ], 404);
        }
    }
}
