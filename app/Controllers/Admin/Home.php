<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
		];
		echo view('admin/home',$data);
	}

	//--------------------------------------------------------------------

}
