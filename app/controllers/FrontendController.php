<?php


class FrontendController extends Controller
{
    function __construct(){

    }

    public function index(){


            //session is set
            $this->view('pages/index');


    }
    public function dashboard(){
        $this->view('backend/dashboard');

    }
    public function services(){
        $this->view('pages/services');

    }
    public function reviews(){
        $this->view('pages/reviews');

    }
    public function aboutUs(){
        $this->view('pages/aboutUs');

    }

}