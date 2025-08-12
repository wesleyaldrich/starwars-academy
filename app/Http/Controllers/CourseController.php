<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joinedCourseIds = Auth::user()->hero->courses()->pluck('courses.id');

        $courses = Course::query()
            ->where('role_id', Auth::user()->hero->role->id)
            ->whereNotIn('id', $joinedCourseIds)
            ->get();
            
        return view('index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course = $request->validated();
        Course::create($course);
        return redirect('/')->with('success', __('alerts.success_create_course'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('detail', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCourseRequest $request, String $id)
    {
        $course = Course::find($id);
        $input = $request->validated();
        
        $course->title = $input['title'];
        $course->force_reward = $input['force_reward'];
        $course->role_id = $input['role_id'];
        $course->save();

        return redirect()->route('indexCourse')->with('success', __('alerts.success_update_course'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect()->route('indexCourse')->with('success', __('alerts.success_delete_course'));
    }

    public function joinCourse(Course $course)
    {
        $hero = Auth::user()->hero;

        $hero->courses()->attach($course);
        $hero->increment('force_level', $course->force_reward);

        return redirect()->route('indexCourse')->with('success', 'Successfully joined course!');
    }
}
