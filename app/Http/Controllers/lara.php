<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lara extends Controller{
    //
    function index(){
    	//code
    	return view('index');
    }
    function create(){
    	echo "ini controller contoh fx tambah";

    }
    function tambah(){
    	echo "Tambah";
    }
}
