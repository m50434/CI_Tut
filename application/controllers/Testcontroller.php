<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testcontroller extends CI_Controller {


	public function index()
	{
		echo "Hallo Welt";
	}
	
	public function testfunktion()
	{
		echo "Siehe da!";
	}
	
	public function testfunktion2($parameter)
	{
		echo "Siehe da! " . $parameter;
	}
}