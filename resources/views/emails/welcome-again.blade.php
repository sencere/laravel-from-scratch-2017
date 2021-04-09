@component('mail::message')
# Introduction

Thanks so much for registering!

@component('mail::button', ['url' => 'http://laracast.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some insperational quote to go here. =)
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
