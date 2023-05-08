<?php

namespace App\Repository;

use App\Models\Course;


class CourseRepository
{

    /**
     * Get all courses
     */
    public function allCourse()
    {
        return Course::get();
    }

    /**
     * create course
     */
    public function create($data)
    {
        return Course::create($data);
    }

    /**
     * @param  $id
     *
     */
    public function findOrFail($id)
    {
        return Course::findOrFail($id);
    }
    /**
     * @param  $id
     *
     */
    public function update($id, $data)
    {
        $course = $this->findOrFail($id);
        return  $course->update($data);
    }
}
