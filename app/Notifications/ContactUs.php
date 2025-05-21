<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUs extends Notification
{
    use Queueable;
    public $name ='';
    public $email = '';
    public $subject = '';
    public $description = '';

    /**
     * Create a new notification instance.
     */
    public function __construct($name,$email,$subject,$description)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->description = $description;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');
        $name = $this->name;
        $email = $this->email;
        $subject = $this->subject;
        $description = $this->description;
        return (new MailMessage)->view('mail/contactus',compact('name','email','subject','description'));

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
