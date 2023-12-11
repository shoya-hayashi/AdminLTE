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
    public function administratorList(Request $request)
    {
        $data = [
            [1, '宮田　愛子', 'miyata@test.com', '管理者'], 
            [2, '沢田　啓子', 'sawada@test.com', '一般'], 
            [3, '藤原　尚子', 'hujiwara@test.com', '一般'],
            [4, '佐野　勉', 'sano@test.com', '管理者'], 
            [5, '村上　健', 'murakami@test.com', '一般']
        ];
        return view('administratorList',compact('data',));
    }
    public function newAdditionsAdministrator()
    {
        return view('newAdditionsAdministrator');
    }

}
