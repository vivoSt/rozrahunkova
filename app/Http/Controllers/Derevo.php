<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Derevo extends Controller {

    public function listtrees() {

        $trees = DB::table('trees')->get();
        return view('trees1', ['trees' => $trees]);
    }

    public function listfetus() {
        $fetus = DB::table('fetus')->get();
        return view('trees2', ['fetus' => $fetus]);
    }

    public function listquality() {
        $quality = DB::table('fetus')->where('quality', 'хорошее')->get();
        return view('trees3', ['fetus' => $quality]);
    }

    public function orderby() {
        $orderby = DB::table('trees')
                ->join('fetus', function ($join) {
                    $join->on('trees.id', '=', 'fetus.id');
                })
                ->get();
        return view('trees4', ['orderby' => $orderby]);
    }

    /*
      public function () {
      $beta = DB::table('users')
      ->join('cars', function ($join) {
      $join->on('users.id', '=', 'cars.id');
      })
      ->get();
      return view('show5', ['beta' => $beta]);
      }



      public function about(){
      return view('about');
      }

     */
}
