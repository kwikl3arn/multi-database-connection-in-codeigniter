<?php

class Demo_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //error_reporting(0);
        $this->db1 = $this->load->database('default', TRUE);
        $this->db2 = $this->load->database('DEMO', TRUE);
          $this->db3=$this->load->database('DEMO1', TRUE);



    }
      public function new_req_details()
    {
        $this->db1->select("*");
        $this->db1->from("employee_info");
        $this->db1->where("pmt06_emp_code", 123);
        $query = $this->db1->get();
        $this->db1->close();
        return $query->result();

    }
      public function new_books($empid)
    {
        $this->db2->select("*");
        $this->db2->from("books2019");
        $this->db2->where("book_name",'naruto');
        $query = $this->db2->get();
        $this->db2->close();
        return $query->result();

    }
      public function new_pens()
    {
        $this->db3->select("*");
        $this->db3->from("pens");
       $query = $this->db3->get();
        $this->db3->close();
        return $query->result();

    }
 }
