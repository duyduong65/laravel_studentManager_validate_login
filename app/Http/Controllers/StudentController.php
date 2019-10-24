<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
        $students = $this->student->all();
        return view('list_student', compact("students"));
    }

    public function destroy($id)
    {
        $student = $this->student->findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }

    public function showFormCreate()
    {
        return view('formCreate');
    }

    public function create(Request $request)
    {
        $this->student->create([
            'name' => $request->name,
            'age' => $request->age,
            'class' => $request->class,
            'province' => $request->province
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
}
