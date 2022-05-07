<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Notifications\Notification;

class SmsVerification extends Notification
{
    use Queueable;

    /**
     * @var \App\Models\SmsVerification
     */
    private $smsVerification;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(\App\Models\SmsVerification $smsVerification)
    {
        $this->smsVerification = $smsVerification;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['vonage'];
    }

    /**
     * Get the Vonage / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return VonageMessage
     */
    public function toVonage($notifiable)
    {
        return (new VonageMessage())
            ->content("My-Wholesaler login code: {$this->smsVerification->verification_code}")
            ->from('123123123123')
            ->unicode();
    }
}
