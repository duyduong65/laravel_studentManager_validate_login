@extends('formInformation')
@section('info')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Student') }}</div>

                    <div class="card-body">
                        <form action="{{route('students.edit',$student->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" value="{{$student->age}}">
                            </div>
                            <div class="form-group">
                                <label>Class</label>
                                <input type="text" class="form-control" name="class" value="{{$student->class}}">
                            </div>
                            <div class="form-group">
                                <label>Province</label>
                                <input type="text" class="form-control" name="province" value="{{$student->province}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
