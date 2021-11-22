<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;

class CustomPassword extends ResetPassword
{

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url(route('password.reset', $this->token, false));
        return (new MailMessage)

                    ->subject('Alterar Senha')
                    ->line('Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para sua conta.')
                    ->action('Resetar Senha', $url)
                    ->line('Se você não solicitou uma alteração de senha, nenhuma ação é necessária!');
    }

}