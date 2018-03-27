@component('mail::message')
# New Message From Beguide Visitor

Visitor Name : {{ $name }} <br/>
Email: {{ $email }} 	<br/> <br/>

Message : {{ $message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
