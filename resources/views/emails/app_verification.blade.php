@component('mail::message')
# Hello {{ $array['name'] }}

To verify your email address, please use the following One Time Password (OTP)

@component('mail::panel')
# {{ $array['otp'] }}
@endcomponent

If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
