<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentsCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Prendo i dati
        $data = $request->all();

        // Controllo dei dati
        $request->validate($this->validateRules());

        // Inizializzazione
        $student = new Student();
        $student->fill($data);
        $saved = $student->save();

        // Controllo salvataggio + redirect
        if ($saved) {
            $newStudent = Student::find($student->id);
            return redirect()->route('students.show',  $newStudent );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->all();
        $request->validate( $this->validateRules($student->id));
        $updated = $student->update($data);

        if ($updated) {
            return redirect()->route('students.show',  $student->id );
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $ref = $student->name;
        $deleted = $student->delete();

        if($deleted) {
            return redirect()->route('students.index')->with('deleted', $ref);
        }
    }

    /**
     * Utility
     */

    private function validateRules($id = null) {
        return [
            // 'name' => 'required|string|max:20|unique:students',
            'name' => [
                'required',
                'string',
                'max:20',
                Rule::unique('students')->ignore($id)
            ],
            'age' => 'required|integer',
            'date_of_birth' => 'required',
            'birth_place' => 'required|string|max:20',
            'class' => 'required|string|max:3'
        ];
    }
}
