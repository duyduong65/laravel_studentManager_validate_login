@extends('layouts.app')

@section('content')
    <a href="{{route('students.create')}}"  class="btn btn-primary">ADD</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Class</th>
            <th scope="col">Province</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $key => $student)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->province}}</td>
                <td>
                    <a href="{{route('students.delete',$student->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-danger">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
