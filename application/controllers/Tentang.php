<?php

class Tentang extends CI_controller {

  function __construct () {
  parent::__construct ();
  }

  function index () {
  $this->load->view ("header_view");
  $this->load->view ("tentang_view");
  $this->load->view ("footer_view");
  }
}