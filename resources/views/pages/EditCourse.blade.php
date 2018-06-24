@extends('pages.layout');
@section('content')
<h1> Update Course {{$id}}</h1>

{!! Form::open(['action' => ['CourseController@update',$id], 'method' => 'PUT']) !!}
{{Form::label('Name','Name')}}
{{Form::text('Name','',['placeholder'=>'CourseName'])}}
<br>
{{Form::label('CreditHours','CreditHours')}}
{{Form::text('Credit_hours','',['placeholder'=>'CreditHours'])}}


<br>
{{Form::submit('Update','')}}
{!! Form::close() !!}


{!! Form::open(['action' => ['CourseController@destroy',$id], 'method' => 'DELETE']) !!}

{{Form::submit('Delete','')}}

{!! Form::close() !!}
@endsection('content')