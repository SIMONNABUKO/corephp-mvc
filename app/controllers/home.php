<?php
class Home extends Controller
{

    public function index(){
        $db = new Database();
        $data = $db->read('select * from images');
        $this->view('home', $data);
    }
 
}