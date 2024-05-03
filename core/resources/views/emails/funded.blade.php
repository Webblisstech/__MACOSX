<x-mail::message>
# Account funded

Hello {{ $details['name'] }}, your account has been funded successfully with the sum of {{ $details['amount'] }}


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
