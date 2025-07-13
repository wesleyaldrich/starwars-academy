<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = $request->validate(
            [
                'title' => 'required',
                'force_reward'=> 'required|numeric',
                'role_id' => 'required',
            ],
            [
                'title.required' => 'Title must not be empty',
                'force_reward.required' => 'Force reward must not be empty',
                'force_reward.numeric' => 'Please enter a valid number',
                'role_id.required' => 'Please select the role for course',
            ],
        );
        Course::create($course);
        return redirect()->route('course.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
