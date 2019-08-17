<?php
class Demo_controller extends CI_Controller
{

public function __construct()
    {
        parent::__construct();
    }
    
    //emp list
    public function emp()
    {
     $this->Demo_model->new_req_details();
    }
    
    //penslist
     public function new_pens()
    {
     $this->Demo_model->new_pens();
    }
    
    //books list
     public function new_books()
    {
     $this->Demo_model->new_books();
    }
}
