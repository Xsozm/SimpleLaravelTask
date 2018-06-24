<h1>Students</h1>
<a href="/students/create"> Add New Student</a>
@if(count($students)>0)
    @foreach($students as $s)
        <ul>
        <li>Student Name : {{$s->FirstName}} and His LastName is {{$s->LastName }} and Enrolled In  {{$s->Enrollment_Date}} <a href="/students/{{$s->id}}/edit"> Update Or Delete  </a> &nbsp;

        </li>
        </ul>
        @endforeach
    @else
    <p>No Students Found ! </p>
@endif