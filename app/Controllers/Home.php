<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('common/header');
		echo view('index');
		echo view('common/footer');
	}
}
