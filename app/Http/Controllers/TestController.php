<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;

class TestController extends Controller
{
    public function index() {
        // Eloquent
        $values = Test::all();

        $count = Test::count(); // 件数取得

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get();
        
        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
        ->select('id', 'text')
        ->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);
        

        // dd($values);
        return view('tests.test', compact('values'));
    }
}
