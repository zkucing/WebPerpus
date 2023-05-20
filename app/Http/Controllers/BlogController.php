<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class BlogController extends Controller
{

	public function home(){
		return view('home');
	}

    public function lihat(){
		return view('lihat-peminjaman');
	}

    public function input(){
		return view('input-peminjaman');
	}
}