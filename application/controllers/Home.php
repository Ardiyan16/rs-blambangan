<?php

class Home extends CI_controller {

  function __construct () {
  parent::__construct ();
  }

  function index () {
  $this->load->view ("header_view");
  $this->load->view ("home_view");
  $this->load->view ("footer_view");
  }
}