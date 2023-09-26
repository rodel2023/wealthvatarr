<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\UserArchetype;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $formData;
    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function build()
    {
        $user = auth()->user();
        $access_level = json_decode($user->access_level);
        $user_archetype = UserArchetype::where('email', $user->email)->orderBy('id', 'DESC')->first();
        
        $archetype = $user_archetype->archetype;

        return $this->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('Contact Support Email') // Use the subject
        // ->view('dashboard.avatar.contact', ["title"=>"Contact Us", "user" => $user]) // Blade view for your email content
        ->view('emails.contact-form')
        ->with([
            'name_form' => $this->name,
            'email_form' => $this->email,
            'message_form' => $this->message,
        ]);
    }
}
