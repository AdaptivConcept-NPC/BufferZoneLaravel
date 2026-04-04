<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Mail\ContactFormMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Submit contact form - public endpoint
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'message' => 'required|string',
            'type' => 'in:corporate,public|default:corporate',
            'eventType' => 'nullable|string|max:100',
        ]);

        try {
            // Create submission
            $submission = ContactSubmission::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? null,
                'message' => $validated['message'],
                'type' => $validated['type'] ?? 'corporate',
                'event_type' => $validated['eventType'] ?? null,
            ]);

            // Send email notification
            Mail::to(env('NOTIFY_TO'))->send(new ContactFormMailable($submission));

            return response()->json([
                'success' => true,
                'id' => $submission->id,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error submitting form',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Get contact submissions - admin only
     */
    public function submissions(Request $request)
    {
        $page = $request->query('page', 1);
        $limit = min($request->query('limit', 20), 50); // Max 50
        $type = $request->query('type');
        $unreadOnly = $request->query('unread', false);

        $query = ContactSubmission::query();

        // Apply filters
        if ($type) {
            $query->byType($type);
        }

        if ($unreadOnly) {
            $query->unread();
        }

        // Get unread count before pagination
        $unreadCount = ContactSubmission::unread()->count();

        // Paginate
        $paginated = $query->orderBy('created_at', 'desc')->paginate($limit, ['*'], 'page', $page);

        return response()->json([
            'data' => $paginated->items(),
            'pagination' => [
                'total' => $paginated->total(),
                'page' => $paginated->currentPage(),
                'limit' => $limit,
                'pages' => $paginated->lastPage(),
            ],
            'unread' => $unreadCount,
        ]);
    }

    /**
     * Mark submission as read - admin only
     */
    public function markRead(Request $request, $id)
    {
        try {
            $submission = ContactSubmission::findOrFail($id);
            $submission->update(['is_read' => true]);

            return response()->json([
                'success' => true,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Submission not found',
            ], 404);
        }
    }

    /**
     * Delete (soft-delete) submission - admin only
     */
    public function destroy(Request $request, $id)
    {
        try {
            $submission = ContactSubmission::findOrFail($id);
            $submission->delete();

            return response()->json([
                'success' => true,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Submission not found',
            ], 404);
        }
    }
}
