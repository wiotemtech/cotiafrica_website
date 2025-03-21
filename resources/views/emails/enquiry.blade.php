<x-mail::message>
# Hello,You have got an inquiry

<h2>Name:{{$data['name']}}</h2>
<h2>Email:{{$data['email']}}</h2>
<h2>Message:{{$data['messageContent']}}</h2>

<x-mail::button :url="$url">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
