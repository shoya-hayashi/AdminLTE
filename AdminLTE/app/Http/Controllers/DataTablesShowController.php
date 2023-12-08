<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTablesShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = [
            [22, 'John Bender', '+02 (123) 123456789'], 
            [19, 'Sophia Clemens', '+99 (987) 987654321'], 
            [3, 'Peter Sousa', '+69 (555) 12367345243']
        ];
        return view('pages',compact('data',));
    }
}
