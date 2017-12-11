@component('mail::message')
# Welcom to Dusk App

Thanks for signing up. **We really appreciate** it. Let us _know if we can_ do more ti plase you!


The body of your message.

@component('mail::button', ['url' => 'http://localhost/home'])
Wiev My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
