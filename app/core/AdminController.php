<?php

class AdminController extends Controller
{
    public function __construct()
    {
        staff_only();
    }

    public function render($view, $data = [])
    {
        $this->view('templates/admin/header');
        $this->view($view,$data);
        $this->view('templates/admin/footer');
    }
}