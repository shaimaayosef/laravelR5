<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Studentcontroller extends Controller
{
    private $columns = ['studentName','age'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::get();
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student = new Student();
        // $student->studentName = $request->studentName;
        // $student->age = $request->age;
        // $student->save();
        $data = $request->validate([
            'studentName' => 'required|max:100|min:5',
            'age' => 'required|Numeric',
        ]);
        Student::create($data);
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::findOrFail($id);
        return view('showStudent', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::findOrFail($id);
        return view('editStudent', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        student::where('id', $id)->update($request->only($this->columns));
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Student::where('id',$id)->delete();
        return redirect('students');
    }
    /**
         * Force Delete.
         */
        public function forceDelete(Request $request)
        {
            $id = $request->id;
            Student::where('id',$id)->forceDelete();
            return redirect('trashedStudents');
        }

    /**
     * trush.
     */
    public function trash()
    {
        $trashed = Student::onlyTrashed()->get();
        return view('trashedStudents',compact('trashed'));
    }

    /**
     * Restore.
     */
    public function restore(string $id)
    {
        Student::where('id',$id)->restore();
        return redirect('students');
    }
}
