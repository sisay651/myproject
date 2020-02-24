<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    //
    public function index(){
    	$title = 'welcome to internsh management system platform for Ethiopians';
    	//return view('pages.index',compact('title'));
    	return view('/pages.index')->with('title',$title);
    }
    public function about(){
    	$title = 'About Us';
    	return view('about')->with('title',$title);
    }
    public function services(){
        $data = array('title' =>'services' ,'services'=>['web design','programming','system development'] );
    	$title = 'services of the system';
    	return view('pages.services')->with($data);
    }
}
