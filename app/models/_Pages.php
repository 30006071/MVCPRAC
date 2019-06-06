<?php
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


    public function addBooking($name, $phone, $email, $info) {
      
      $this->db->query('INSERT INTO  Booking (Name, PhoneNumber, Email, info) VALUES (:name, :phone, :email, :info)');

      $this->db->bind(':name', $name);
      $this->db->bind(':phone', $phone);
      $this->db->bind(':email', $email);
      $this->db->bind(':info', $info);

      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function addContactUs($name, $phone, $email, $enquiry) {
      
      $this->db->query('INSERT INTO  Contact (Name, PhoneNumber, Email, Enquiry) VALUES (:name, :phone, :email, :enquiry)');

      $this->db->bind(':name', $name);
      $this->db->bind(':phone', $phone);
      $this->db->bind(':email', $email);
      $this->db->bind(':enquiry', $enquiry);

      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    public function addFeedback($name, $phone, $email, $feedback) {
      
      $this->db->query('INSERT INTO  Feedback (Name, PhoneNumber, Email, Feedback) VALUES (:name, :phone, :email, :feedback)');

      $this->db->bind(':name', $name);
      $this->db->bind(':phone', $phone);
      $this->db->bind(':email', $email);
      $this->db->bind(':feedback', $feedback);

      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }
  }
?>