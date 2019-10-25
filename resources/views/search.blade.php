@extends('layouts.app')

@section('content')

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
        @foreach($dataSearch as $key => $search)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$search->name}}</td>
                <td>{{$search->age}}</td>
                <td>{{$search->class}}</td>
                <td>{{$search->province}}</td>
                <td><img src="{{ asset("storage/upload/$search->image")}}" alt=""  width="80" height="80"></td>
                <td>
                    <a href="{{route('students.delete',$search->id)}}" class="btn btn-danger">Delete</a>
                    <a href="{{route('students.edit',$search->id)}}" class="btn btn-danger">Edit</a>
                </td>
            </tr>
        @endforeach
        <tr aria-colspan="4" class="text-center">
        </tr>
        </tbody>
    </table>
@endsection
