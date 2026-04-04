<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactSubmission;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $type = 'corporate';
    public $eventType = '';
    
    public $submitted = false;
    public $successMessage = '';
    public $errorMessage = '';

    protected $rules = [
        'name' => 'required|string|max:150',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:30',
        'message' => 'required|string|min:10',
        'type' => 'in:corporate,public',
        'eventType' => 'nullable|string|max:100',
    ];

    public function submit()
    {
        $this->validate();

        try {
            // Create submission
            $submission = ContactSubmission::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone ?: null,
                'message' => $this->message,
                'type' => $this->type,
                'event_type' => $this->eventType ?: null,
            ]);

            // Send email notification
            Mail::to(env('NOTIFY_TO'))->send(new ContactFormMailable($submission));

            $this->successMessage = 'Thank you! Your message has been received. We will be in touch soon.';
            $this->submitted = true;
            
            // Reset form
            $this->reset(['name', 'email', 'phone', ' message', 'type', 'eventType']);
        } catch (\Exception $e) {
            $this->errorMessage = 'An error occurred while submitting your form. Please try again.';
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
