@extends('formInformation')
@section('info')
    <form action="{{route('students.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label >Full Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Input Name">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age" placeholder="Input Age">
        </div>
        <div class="form-group">
            <label>Class</label>
            <input type="text" class="form-control" name="class" placeholder="Input Class">
        </div>
        <div class="form-group">
            <label>Province</label>
            <input type="text" class="form-control" name="province" placeholder="Input Province">
        </div>

        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
@endsection

