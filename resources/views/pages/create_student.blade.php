
<h1>Create Student </h1>

{!! Form::open(['action' => 'StudentController@store', 'method' => 'POST']) !!}
    {{Form::label('FirstName','FirstName')}}
    {{Form::text('FirstName','',['placeholder'=>'FirstName'])}}
<br>
{{Form::label('LastName','LastName')}}
{{Form::text('LastName','',['placeholder'=>'LastName'])}}

<br>
{{Form::label('EnrollmentDate','EnrollmentDate')}}
{{Form::date('EnrollmentDate','',['placeholder'=>'EnrollmentDate'])}}
<br>
{{Form::submit('Create','')}}

{!! Form::close() !!}