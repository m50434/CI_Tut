<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NeuerController extends CI_Controller {


	public function index()
	{
		echo "der Index";
	}

	public function einfach()
	{
		echo "EINFACH!";
	}

	public function fortgeschritten($para1, $para2)
	{
		echo "Parameter 1: ". $para1 . " und Parameter2: " . $para2;
	}
}