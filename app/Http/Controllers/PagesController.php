<?php

namespace App\Http\Controllers;

class PagesController extends controller {
      public function getIndex(){
        return view('pages.welcome');
      }
      public function getAbout(){
        return view('pages.about');
      }
      public function getContact(){
        return view('pages.contact');
      }
}
