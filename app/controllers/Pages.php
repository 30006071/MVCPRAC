<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->_Pages = $this->model('_Pages'); //name your model
      }

      public function index() {


        $info  = $this->_Pages->GetInfo();

        $data = [
          'info' => $info
        ];

        $this->view('pages/index', $data);
      }
    }
