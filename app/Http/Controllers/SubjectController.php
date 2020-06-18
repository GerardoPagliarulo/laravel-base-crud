<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Validation\Rule;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // All data table Subjects
        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // Valisation
        $request->validate($this->validationRules());
        // Save new Subject on DB
        $newSubject = new Subject();
        // NON necessario $fillable nel Model
        //$newSubject->name = $data['name'];
        //$newSubject->description = $data['description'];
        // NECESSARIO $fillable nel Model
        $newSubject->fill($data);
        $saved = $newSubject->save();
        // Redirect to page show
        if ($saved) {
            $newSubjectShow = Subject::find($newSubject->id);
            return redirect()->route('subjects.show', $newSubjectShow);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        $data = $request->all();
        // Validation
        $request->validate($this->validationRules($subject->id));
        // Update data DB
        $updated = $subject->update($data);
        // Redirect to page show
        if ($updated) {
            return redirect()->route('subjects.show', $subject->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        // Ref to the subject who will be eliminated
        $ref = $subject->name;
        $deleted = $subject->delete();
        if ($deleted) {
            return redirect()->route('subjects.index')->with('deleted', $ref);
        }
    }
    // UTILITIES
    // Function: Validation Rules
    private function validationRules($id = null) {
        return [
            'name' => [
                'required',
                'max:50',
                Rule::unique('subjects')->ignore($id)
            ],
            'description' => 'required'
        ];
    }
}