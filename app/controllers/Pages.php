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
      public function bookin() {


        $info  = $this->_Pages->GetInfo();

        $data = [
          'info' => $info
        ];

        $this->view('pages/book-in', $data);
      }
      public function contact() {


        $info  = $this->_Pages->GetInfo();

        $data = [
          'info' => $info
        ];

        $this->view('pages/contact', $data);
      }
      public function feedback() {


        $info  = $this->_Pages->GetInfo();

        $data = [
          'info' => $info
        ];

        $this->view('pages/feedback', $data);
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

    }
