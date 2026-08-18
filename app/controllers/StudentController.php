<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student_home');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00097',
            'name' => 'Veronica Andulan',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F2',
            'email' => 'andulanv51@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}
?>