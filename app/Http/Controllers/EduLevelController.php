<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EduLevelController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('edulevels')->get();

        // return $edulevels;
        return view('edulevel.data', ['edulevels' => $edulevels]);
    }

    public function add()
    {
        return view('edulevel.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('edulevels')->insert([
            'name' => $request->name, 
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil ditambah!');
    }

    public function edit($id)
    {   
        $edulevel = DB::table('edulevels')->where('id', $id)->first();
        return view('edulevel/edit', compact('edulevel'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('edulevels')->where('id', $id)
        ->update([
            'name' => $request->name, 
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('edulevels')->where('id', $id)->delete();
        return redirect('edulevels')->with('status', 'Jenjang berhasil dihapus!');
    }
}
