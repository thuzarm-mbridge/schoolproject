<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiController extends Controller
{
    public function myNewtest(Request $request){
    $result = DB::table('schools')->get();
    if ($result->count()>0) {
      return response()->json(['status_code'=>200, 'message'=>'pass', 'data'=>$result ]);
    }else{
      return response()->json(['status_code'=>500, 'message'=>'fail', 'data'=>null ]);
    }
  }
  
  public function myTesttwo(Request $request){
    $result = DB::table('users')->get();
    if ($result->count()>0) {
      return response()->json(['status_code'=>200, 'message'=>'pass', 'data'=>$result ]);
    }else{
      return response()->json(['status_code'=>500, 'message'=>'fail', 'data'=>null ]);
    }
  }
}
