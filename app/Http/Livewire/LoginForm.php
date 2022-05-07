<?php

namespace App\Http\Livewire;

use App\Models\SmsVerification;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class LoginForm extends Component
{
    use WithFaker;

    public string $phone;

    public bool $smsVerificationSent;

    public function mount()
    {
        $this->phone = '';
        $this->smsVerificationSent = false;
    }

    public function sendSms()
    {
        $phoneNumber = phone($this->phone)->formatE164();

        $smsVerification = SmsVerification::create([
            'phone' => $phoneNumber,
            'verification_code' => $this->makeFaker()->randomNumber(6, true),
        ]);

        // todo actually send sms
        Notification::route('vonage', $phoneNumber)
            ->notify(new \App\Notifications\SmsVerification($smsVerification));

        $this->smsVerificationSent = true;
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
