<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
     //
     public function ShowComponent1(){
       return view('tests.component-test1');
     }
     public function ShowComponent2(){
       return view('tests.component-test2');
     }
     }
