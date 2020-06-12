<?php

class AdminController extends Controller {
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->appointments = $this->model('Appointment');
    }



//    backend logout
    public function logout(){
        session_destroy();
        header('location: /');
    }

//    public function dashboard(){
//        guestRedirect();
//        $appointments = $this->appointments->getAll();
//        $this->view('/backend/dashboard', $appointments, 'appointments');
//
//    }
     public function dashboard(){
        $this->view('/backend/dashboard');
     }
}