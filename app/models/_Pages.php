<?php
  //option, but easy: classname same as controller with leading underbar
  class _Pages {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function GetModifications()
    {
      $this->db->query('SELECT * FROM Services WHERE ServiceTypeID = 1');
      return $this->db->resultSet();
    }

    public function GetServicing()
    {
      $this->db->query('SELECT * FROM Services WHERE ServiceTypeID = 2');
      return $this->db->resultSet();
    }

    public function GetRepairs()
    {
      $this->db->query('SELECT * FROM Services WHERE ServiceTypeID = 3');
      return $this->db->resultSet();
    }

    public function GetWarrants()
    {
      $this->db->query('SELECT * FROM Services WHERE ServiceTypeID = 4');
      return $this->db->resultSet();
    }



    public function GetIndex()
    {
      $this->db->query('SELECT * FROM Info WHERE InfoTypeID = 1');
      return $this->db->resultSet();
    }
    public function GetAbout()
    {
      $this->db->query('SELECT * FROM Info WHERE InfoTypeID = 2');
      return $this->db->resultSet();
    }

    public function GetServices()
    {
      $this->db->query('SELECT * FROM Services');
      return $this->db->resultSet();
    }

    public function GetForms()
    {
      $this->db->query('SELECT * FROM Forms');
      return $this->db->resultSet();
    }

    public function title() {
      return "Show All People";
    }

    //example: db data - select
    public function getAllPeople() {
      $this->db->query('SELECT * FROM tbl_people');
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function addPerson($fn, $ln, $dob) {
      
      //Adding data to database
      $this->db->query('INSERT INTO  tbl_people (FNAME, LNAME, DOB) VALUES (:fn, :ln, :dob)');

      //Binding Variables
      $this->db->bind(':fn', $fn);
      $this->db->bind(':ln', $ln);
      $this->db->bind(':dob', $dob);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }
  }
?>