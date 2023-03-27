@component('mail::message')
# Welcome to the Nuqeiti Training Platform

{{-- Dear {{$email}}, --}}

{{$message}}<br>
For inquiries, call 0790369501
@component('mail::button', ['url' => 'http://127.0.0.1:8000/user'])
Go to the site
@endcomponent

Thanks,<br>
Nuqeiti Training
{{-- {{ config('app.name') }} --}}
@endcomponent
{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
