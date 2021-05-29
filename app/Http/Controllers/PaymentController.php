<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PaymentModel;
use Carbon\Carbon;

class PaymentController extends Controller
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
        
        $getcartid=request('cart_id');
        $getfname=request('fname');
        $getcontactno=request('contactno');
        $getstreet=request('street');
        $getcity=request('city');
        $getstate=request('state');
        $getpostal=request('postal');
        $getcountry=request('country');
       
        $getcurrent_date_time = Carbon::now()->toDateTimeString();
        $gettamt=request('tamt');
        
        echo $getfname;
        echo $getcontactno;
        echo $getstreet;
        echo $getcity;
        echo $getstate;
        echo $getpostal;
        echo $getcountry;
        echo $gettamt;


        $pay=new PaymentModel();
        $pay->fname=$getfname;
        $pay->contactno=$getcontactno;
        $pay->street=$getstreet;
        $pay->city=$getcity;
        $pay->state=$getstate;
        $pay->postal=$getpostal;
        $pay->country=$getcountry;
      

        $pay->pdate= $getcurrent_date_time;
        $pay->tamt=$gettamt;

        $pay->save();

        return redirect('/thanku');
        
    }


/*

    public function stores(Request $request)
    {
        $getname=request('sname');
        $getcourse = request('scourse');
        $getamt=request('payamount');
        //$getcurrent_date_time = Carbon::now()->toDateTimeString();

        echo $getname;
        echo "<br>";
        echo $getcourse;
       //echo "<br>";
      //  echo $getcurrent_date_time;
          
        $pay = new PaymentModel();
       
        $pay->name=$getname;
        $pay->course=$getcourse;
        $pay->fee=$getamt;
       
        
        $pay->save();

        $logid = $request->session()->get('loggeduser');

        $stufdue = collect(DB::table('register_models')
        ->join('studentpay_models', 'register_models.lemail', '=', 'studentpay_models.lemail')
        ->select('studentpay_models.due as fdue')
        ->where('register_models.id','=',"$logid")
        ->first());

        $due=$stufdue->values();
        
     
        $new_due=$due['0']-$getamt;
        
        echo "<br>";
        echo $new_due;
        
       
            $updatedval = DB::table('register_models')
            ->join('studentpay_models', 'register_models.lemail', '=', 'studentpay_models.lemail')
            ->where('register_models.id','=',"$logid")
            ->update(['studentpay_models.due' => $new_due]);

        return redirect('/mmm');         
    }

*/

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
