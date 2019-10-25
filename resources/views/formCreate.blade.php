@extends('formInformation')
@section('info')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Student') }}</div>

                    <div class="card-body">
                        <form action="{{route('students.create')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Input Name">
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
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="file" name="image">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">ADD</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

