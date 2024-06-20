<x-mail::message>
<div >
   Hello {{$data['name']}},
<br><br>
</div>
 
<div >
    {{$data['message']}}
</div>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>