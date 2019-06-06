<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->_Pages = $this->model('_Pages'); //name your model
      }

      public function index() {


        $info  = $this->_Pages->GetIndex();

        $data = [
          'info' => $info
        ];

        $this->view('pages/about-template', $data);
      }

      public function about() {


        $info  = $this->_Pages->GetAbout();

        $data = [
          'info' => $info
        ];

        $this->view('pages/about-template', $data);
      }
      public function Booking() {
        $info  = $this->_Pages->GetBooking();
        $data = [
          'info' => $info
        ];

        $this->view('pages/forms-template', $data);
      }

      
      public function Contact() {


        $info  = $this->_Pages->GetContact();

        $data = [
          'info' => $info
        ];

        $this->view('pages/forms-template', $data);
      }
      public function Feedback() {

        $info  = $this->_Pages->GetFeedback();
        $data = [
          'info' => $info
        ];
        $this->view('pages/forms-template', $data);
      }
      public function modifications() {

        $info  = $this->_Pages->GetModifications();
        $data = [
          'info' => $info
        ];
        $this->view('pages/services-template', $data);
      }
      public function repairs() {

        $info  = $this->_Pages->GetRepairs();
        $data = [
          'info' => $info
        ];
        $this->view('pages/services-template', $data);
      }
      public function servicing() {

        $info  = $this->_Pages->GetServicing();
        $data = [
          'info' => $info
        ];
        $this->view('pages/services-template', $data);
      }
      public function warrants() {

        $info  = $this->_Pages->GetWarrants();
        $data = [
          'info' => $info
        ];
        $this->view('pages/services-template', $data);
      }

      public function BookIn() {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $this->_Pages->addBooking($name, $phone, $email, $subject);
        header("Location: " . URLROOT . "Pages/Booking/?formsubmitted=1");
        exit;
      }

      public function addTheFeedback() {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $this->_Pages->addFeedBack($name, $phone, $email, $subject);
        header("Location: " . URLROOT . "Pages/Feedback/?formsubmitted=1");
        exit;
      }
      public function addTheContact() {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $feedback = $_POST['subject'];
        $this->_Pages->addContactUs($name, $phone, $email, $feedback);
        header("Location: " . URLROOT . "Pages/Contact/?formsubmitted=1");
        exit;
      }
    }