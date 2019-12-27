<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Mail\AdminUserCreated as Mailable;
use Illuminate\Support\Facades\Log;

class AdminUserCreated extends Notification implements ShouldQueue
{
    use Queueable;

    public $user;
    public $password;

    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"))
            ->subject('You have been registered as an Administrator')
            ->markdown('mail.admin_user.created', ["user" => $this->user, "password" =>$this->password]);
    }

    public function toDatabase($notifiable)
    {
        return [
            'invoice_id' => "Test",
            'amount' => "Test",
        ];
    }
}
