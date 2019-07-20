<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function index()
	{

	
		return view('home/index');
	}

	public function about()
	{
		return view('home/about');
	}

	public function services()
	{
		return view('home/services');
	}
	public function contact()
	{
		return view('home/contact');
	}
   // public function index()
   // {
   // 	return view('home');
   // }

   // public function show($id)
   // {

   // 	$nama = "apriyadi abdullah" . $id;

   // 	$kelas = "4IA19";


   // 	$users = ['hilman','endy','tika'];

   // 	return view('home',['id' => $nama,'kelas'=>$kelas,'users'=>$users]);

   // }
}
