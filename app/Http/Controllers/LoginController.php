<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\LoginModel;

class LoginController extends Controller
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
        return view('signup_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getemail=request('lemail');
        $getpass=request('lpass');
        echo $getemail;
        echo $getpass;
        $register=new LoginModel();
        $register->lemail=$getemail;
        $register->lpass=$getpass;
        $register->save();
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
        $data=addproducts::find($id);
        $data->delete();
        return redirect('addview');
    }

    public function log(Request $request)
    {
        $getemail=$request -> input('lemail');
        $getpass=$request -> input('lpass');
        $data = DB::select('select id from login_models where lemail=? and lpass=?',[$getemail,$getpass]);

        if(count($data))
        {
            echo "You logged in successfully";
            return redirect('/addview');
        }
        else
        {
    
            echo "Invalid Username or Password";
            
        }

    }

   
}
