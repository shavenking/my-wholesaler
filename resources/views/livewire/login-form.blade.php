<form action="{{ route('auth.login') }}" method="POST">
    @csrf

    <!-- Phone -->
    <div class="rounded w-full">
        <label for="phone" class="text-[#a3a3a3] font-bold">Phone Number</label>
        <input
                wire:keydown.enter.prevent="sendSms"
                wire:model="phone"
                id="phone"
                type="text"
                name="phone"
                class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none"/>
    </div>

    @unless($smsVerificationSent)
        <button type="button" wire:click="sendSms" class="mt-8 rounded bg-[#0076d0] text-white w-full py-2">Send SMS</button>
    @endunless

    @if ($smsVerificationSent)
        <!-- Password -->
        <div class="rounded w-full mt-4" wire>
            <label for="password" class="text-[#a3a3a3] font-bold">SMS Verification Code</label>
            <input
                    id="sms-verification-code"
                    type="password"
                    name="sms_verification_code"
                    class="w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-[#f8f8f8] bg-clip-padding border border-solid border-[#d8d8d8] rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-[#0076d0] focus:outline-none"/>
        </div>

        <button type="submit" class="mt-8 rounded bg-[#0076d0] text-white w-full py-2">Login</button>
    @endif
</form>
