
<h1>Update Or Delete Student {{$id}} </h1>

{!! Form::open(['action' => ['StudentController@update',$id], 'method' => 'PUT']) !!}
{{Form::label('FirstName','FirstName')}}
{{Form::text('FirstName','',['placeholder'=>'FirstName'])}}
<br>
{{Form::label('LastName','LastName')}}
{{Form::text('LastName','',['placeholder'=>'LastName'])}}

<br>
{{Form::label('EnrollmentDate','EnrollmentDate')}}
{{Form::date('EnrollmentDate','',['placeholder'=>'EnrollmentDate'])}}
<br>
{{Form::submit('Update','')}}

{!! Form::close() !!}
<br>


{!! Form::open(['action' => ['StudentController@destroy',$id], 'method' => 'DELETE']) !!}

{{Form::submit('Delete','')}}

{!! Form::close() !!}