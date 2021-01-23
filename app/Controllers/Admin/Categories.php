<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category_model;

class Categories extends BaseController
{
	public function __construct()
    {
        $this->model = new Category_model();
    }

	public function index()
	{
		$data = [
			'title' 		=> 'Categories',
			'categories'	=> $this->model->getCategory(),
		];
		return view('admin/categories',$data);
	}

	public function add(){
		$data = [
			'title' 		=> 'Add Categories',
			'categories'	=> $this->model->getCategory(),
		];
		return view('admin/categories',$data);
	}

}