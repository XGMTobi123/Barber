@component('mail::message')
    Dear {{$email}},
    Name = {{$name}},
    Phone = {{$phone}}

{{--    @component('mail::button', ['url' => 'enter your desired url'])--}}
{{--        Blog--}}
{{--    @endcomponent--}}

{{--    Thanks,<br>--}}
{{--    {{ config('app.name') }}--}}
@endcomponent
