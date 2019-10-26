<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->middleware('auth');
        $this->student = $student;
    }

    public function index()
    {
        $students = $this->student->paginate(5);
        return view('list_student', compact("students"));
    }

    public function destroy($id)
    {
        $student = $this->student->findOrFail($id);
        if (file_exists(storage_path("/app/public/upload/$student->image"))){
            File::delete(storage_path("/app/public/upload/$student->image"));
        }
        $student->delete();

        return redirect()->route('students.index');
    }

    public function showFormCreate()
    {
        return view('formCreate');
    }

    public function create(Request $request)
    {
        $image = $request->image;
        $destinationPath = 'public/upload';
        $fileName = date('ymdhisa') . "." . $image->getClientOriginalExtension();
        $image->storeAs($destinationPath, $fileName);
        $insert['image'] = "$fileName";

        $this->student->create([
            'name' => $request->name,
            'age' => $request->age,
            'class' => $request->class,
            'province' => $request->province,
            'image' => $fileName
        ]);


        return redirect()->route('students.index');
    }

    public function formEdit($id)
    {
        $student = $this->student->findOrFail($id);
        return view('formEdit', compact('student'));
    }

    public function edit(Request $request, $id)
    {
        $student = $this->student->findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataSearch = DB::table('students')->where('name', "LIKE", "%$search%")
            ->orWhere('province', "LIKE", "%$search%")
            ->paginate(5);
        return view('search', compact('dataSearch'));
    }

}
