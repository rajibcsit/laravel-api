<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Repository\CourseRepository;
use App\Http\Resources\CourseResource;

class CourseController extends Controller
{
    private CourseRepository $course;
    public function __construct(CourseRepository $course)
    {
        $this->course = $course;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = $this->course->allCourse();
        return CourseResource::collection($course);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $course = $this->course->create($data);

        return new CourseResource($course);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = $this->course->findOrFail($id);
        return new CourseResource($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->course->update($id, $data);

        return response()->json([
            'message' => "Course Updated Successfully",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = $this->course->findOrFail($id);
        $course->delete();
        return response()->json([
            'message' => "Course Deleted Successfully",
            "course" => $course
        ], 200);
    }
}
