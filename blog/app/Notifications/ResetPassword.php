<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\ResetPassword as DefaultResetPassword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends DefaultResetPassword
{

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Сброс пароля')
            ->line('Вы получили это электронное письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи.')
            ->action('Сброс пароля', url(config('app.url') . route('password.reset', $this->token, false)))
            ->line('Если вы не запрашивали сброс пароля, то никаких действий предпринимать не нужно.');
    }

}
