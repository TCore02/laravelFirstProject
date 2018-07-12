<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyncController extends Controller
{
    public function Sync()
    {
    	$numbers = array( 1, 2, 3, 4, 5);
    	echo json_encode($numbers);
    }
}
