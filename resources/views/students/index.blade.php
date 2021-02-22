@extends('layouts.app')

@section('content')
<h1>All Students</h1>

<a href="/">Back Home</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection