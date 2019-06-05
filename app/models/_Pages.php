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

    public function GetFeedback()
    {
      $this->db->query('SELECT * FROM Forms WHERE FormsTypeID = 1');
      return $this->db->resultSet();
    }
    public function GetBooking()
    {
      $this->db->query('SELECT * FROM Forms WHERE FormsTypeID = 2');
      return $this->db->resultSet();
    }
    public function GetContact()
    {
      $this->db->query('SELECT * FROM Forms WHERE FormsTypeID = 3');
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
    public function addBooking($name, $phone, $email, $info) {
      
      //Adding data to database
      $this->db->query('INSERT INTO  Booking (Name, PhoneNumber, Email, info) VALUES (:name, :phone, :email, :info)');

      //Binding Variables
      $this->db->bind(':name', $name);
      $this->db->bind(':phone', $phone);
      $this->db->bind(':email', $email);
      $this->db->bind(':info', $info);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function addContactUs($name, $phone, $email, $info) {
      
      //Adding data to database
      $this->db->query('INSERT INTO  Contact (Name, PhoneNumber, Email, info) VALUES (:name, :phone, :email, :info)');

      //Binding Variables
      $this->db->bind(':name', $name);
      $this->db->bind(':phone', $phone);
      $this->db->bind(':email', $email);
      $this->db->bind(':info', $info);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function addFeedBack($name, $phone, $email, $info) {
      
      //Adding data to database
      $this->db->query('INSERT INTO  Feedback (Name, PhoneNumber, Email, info) VALUES (:name, :phone, :email, :info)');

      //Binding Variables
      $this->db->bind(':name', $name);
      $this->db->bind(':phone', $phone);
      $this->db->bind(':email', $email);
      $this->db->bind(':info', $info);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }
    public function getAction() {
      $this->db->query('SELECT FormAction FROM Forms WHERE FormsTypeID = 1');

    }
  }
?>