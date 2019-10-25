@extends('layouts.app')

@section('content')
    <a href="{{route('students.create')}}" class="btn btn-primary">ADD</a>
    <form action="{{route('students.search')}}" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Class</th>
            <th scope="col">Province</th>
            <th scope="col">Image</th>
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
                <td><img src="{{ asset("storage/upload/$student->image")}}" alt=""  width="80" height="80"></td>
                <td>
                    <a href="{{route('students.delete',$student->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-danger">Edit</a>
                </td>
            </tr>
        @endforeach
        <tr aria-colspan="4" class="text-center">
            <td>

                {{$students->links()}}

            </td>
        </tr>
        </tbody>
    </table>
@endsection
