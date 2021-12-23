<?php
namespace App\Controllers;

class AdminDashboardC extends BaseController {

    public function index()
    {
        echo view('layouts/AdminDashboardV');
    }
}

?>