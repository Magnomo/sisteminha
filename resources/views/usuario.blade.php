{{$texto}}<br>
@if($checagem ==true)
 Checagem = true		
@else
Checagem = false
@endif
<br/>

@foreach($users as  $user)
{{$user }}<br/>
@endforeach