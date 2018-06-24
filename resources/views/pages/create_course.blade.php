@extends('pages.layout');
@section('content')
{!! Form::open(['action' => 'CourseController@store', 'method' => 'POST']) !!}
{{Form::label('Name','Name')}}
{{Form::text('Name','',['placeholder'=>'CourseName'])}}
<br>
{{Form::label('CreditHours','CreditHours')}}
{{Form::text('Credit_hours','',['placeholder'=>'CreditHours'])}}


<br>
{{Form::submit('Create','')}}

@endsection('content')