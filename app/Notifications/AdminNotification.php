<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNotification extends Notification
{
    use Queueable;
    public $name ='';
    public $email = '';
    public $password = '';

    /**
     * Create a new notification instance.
     */
    public function __construct($name,$email,$password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
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
        //             ->line('Welcome to new admin.')
        //             ->action('Notification Action', url('admin/login/'))
        //             ->line('Thank you for using our application!');
        $name = $this->name;
        $email = $this->email;
        $password = $this->password;
        return (new MailMessage)->view('mail/admin',compact('name','email','password'));

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
