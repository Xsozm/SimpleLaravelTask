@extends('pages.layout');

@section('content')
<h1>Courses</h1>
<a href="/courses/create"> Add New Course</a>

@if(count($courses)>0)
    @foreach($courses as $c)
        <ul>
            <li>Course Name : {{$c->Name}} With Credit Hours  {{$c->Credit_hours }} <a href="/courses/{{$c->id}}/edit"> Update Or Delete  </a> </li>
        </ul>
    @endforeach
@else
    <p>No Courses Found</p>

@endif

@endsection('content')
