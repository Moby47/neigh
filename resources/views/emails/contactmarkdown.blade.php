@component('mail::message')

@component('mail::panel')
{{$sendermsg}}
@endcomponent

@component('mail::panel')
My Number: {{$sendernum}}
@endcomponent

@endcomponent
