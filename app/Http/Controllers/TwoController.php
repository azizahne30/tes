<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $a=$request->a;
        $b=$request->b;
        $op=$request->op;

        if($op=='+'){
            $hasil=$a+$b;
        }elseif($op=='_'){
            $hasil=$a-$b;
        }elseif($op=='x'){
            $hasil=$a*$b;
        }elseif($op==':'){
            if ($op !=0) {
                // }if($b>0 || $b<0) {
            $hasil=$a/$b;
            }else {
                $hasil ="TIDAK BISA MEMBAGI DENAN NOL";
        }
      
    

    }
    return view('kalkulator2.hasil', compact('hasil'));

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
