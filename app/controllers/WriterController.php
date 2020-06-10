<?php


class WriterController extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
    }



}