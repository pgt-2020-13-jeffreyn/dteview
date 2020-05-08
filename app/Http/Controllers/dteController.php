<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\chartdte;

class dteController extends Controller
{
    public function index(){
        //return $nama;
        $dte3=DB::table('dte3')->get();
        $chart3 = chartdte::all();
        $categories =[];
        $Speed =[];
    $jam =[];

    foreach($dte3 as $p){
        $categories[]=$p->jam;
        $jam[]=$p->jam;
    }
    
        return view('pages/dte',['dte3'=>$dte3, 'categories'=>$categories]);

        $users = User::select(\DB::raw("COUNT(*) as count"))

        ->whereYear('created_at', date('Y'))

        ->groupBy(\DB::raw("Month(created_at)"))

        ->pluck('count');
        
        return view('chart', compact('users'));


}
    public function tambah(){
        return view ('tambah');
    }
    public function hapus($id)
    {
        DB::table('dte3')->where('id',$id)->delete();
        return redirect('pages/dte');
    }
    public function store(Request $request){
        DB::table('dte3')->insert([
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'Speed' => $request->Speed,
            'Availability' => $request->Availability
            ]);
            return redirect('/dte');
    }
    public function edit($id)
        {
        $dte3 = DB::table('dte3')->where('id',$id)->get();
        return view('edit',['dte3' => $dte3]);
        }
    public function update(Request $request)
        {
            DB::table('dte3')->insert([
                'tanggal' => $request->tanggal,
                'jam' => $request->jam,
                'Speed' => $request->Speed,
                'Availability' => $request->Availability
        ]);
        return redirect('/dte');
        }

    public function chart()
    {
    
    
}
}
