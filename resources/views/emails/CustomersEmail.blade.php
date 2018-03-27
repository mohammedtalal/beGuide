@component('mail::message')
# New Message From Beguide Website Customers

Customer Name : {{ $name }} <br/>
Email: {{ $email }} 	<br/>
Message : {{ $message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
