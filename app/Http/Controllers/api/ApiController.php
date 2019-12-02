<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Division;
class ApiController extends Controller
{
    public function divisions()
    {
    	$divisions=Division::all();
    	return response()->json([
             'data'=>$divisions,
             'error'=>false
    	]);
    }
}
