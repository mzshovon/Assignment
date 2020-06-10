<?php


class FrontendController extends Controller
{
    function __construct(){

    }

    public function index(){
        $this->view('pages/index');
    }
    public function ourTeam(){
        $this->view('pages/team');

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