<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\App;

class ForgotPasswordNotification extends Notification
{
    use Queueable;

    protected $token;
    protected $language;

    /**
     * Create a new notification instance.
     */
    public function __construct($token, $lang = 'it')
    {
        $this->token = $token;
        $this->language = $lang ?? config('app.locale');
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
        App::setLocale($this->language);

        $frontendUrl = config('app.frontend');
        $resetUrl = $frontendUrl . '/password/recovery?token=' . $this->token;

        return (new MailMessage)
            ->subject(__('forgotpassword.subject'))
            ->greeting(trans('forgotpassword.greeting', ['name' => $notifiable->name ?? '']))
            ->line(__('forgotpassword.line1'))
            ->line(__('forgotpassword.token_label'))
            ->line($this->token)
            ->line(__('forgotpassword.link_label'))
            ->action(trans('passwords.action'), $resetUrl)
            ->line(__('forgotpassword.expiry', [
                'minutes' => config('auth.forgotpassword.users.expire', 60)
            ]))
            ->line(__('forgotpassword.ignore'))
            ->salutation(trans('passwords.salutation'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'password_reset',
            'token' => $this->token,
            'email' => $notifiable->email,
            'expires_at' => now()->addMinutes(config('auth.forgotpassword.users.expire'))
        ];
    }
}
