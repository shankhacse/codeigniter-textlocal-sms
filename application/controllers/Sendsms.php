<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendsms extends CI_Controller {
 
    function index()
    {
	$this->load->library('setupfile');
	$this->setupfile->send("9000000000", "Hello there this is message");
    }
}

