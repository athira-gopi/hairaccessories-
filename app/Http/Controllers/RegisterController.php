<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;
use App\Models\RegisterModel;
use App\Models\LoginModel;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers=RegisterModel::all();
        return view('userview',compact('registers'));
    }

/*
    public function homeuser(){
        $registers=RegisterModel::all();
        $data=['LoggedUserinfo'=>RegisterModel::where('id','=',session('loggeduser'))->first()];
        return view('homeuser',compact('registers'),$data);

    }

*/

    public function lgout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/');
        }
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signup_user');
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'lname' => 'required',
            'lemail' => 'required|unique:App\Models\RegisterModel,lemail',
            'lpass' => 'required|min:5'
        ]);



       
        $getname=request('lname');
        $getemail=request('lemail');
        $getpass=request('lpass');
      
        echo $getname;
        echo $getemail;
        echo $getpass;
        $register=new RegisterModel();
     
        $register->lname=$getname;
        $register->lemail=$getemail;
        $register->lpass=Hash::make($request->lpass);
        
        $save=$register->save();
                if($save)
                {
                    return redirect('/addp')->with('success',"successfully registered");
                }
                else
                {
                    return back()->with('fail',"register failed");
                }

              //return redirect(/addp);
        
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
    public function deleteview($id)
    {
        $register=RegisterModel::find($id);
        return view('deleteuser',compact('register'));


    }
    public function destroy($id)
    {
        $user=RegisterModel::find($id);

        $user->delete();

        return redirect('/userview');

    }

    public function check(Request $request)
    {

        $userInfo =RegisterModel::where('lemail','=',$request->lemail)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->lpass , $userInfo->lpass))
            {
                $request-> session()->put('loggeduser', $userInfo->id);
           
                return redirect('/addp');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }
 }


        /*
        $getemail=$request -> input('lemail');
        $getpass=$request -> input('lpass');
        $data = DB::select('select id from register_models where lemail=? and lpass=?',[$getemail,$getpass]);

        if(count($data))
        {
            return redirect('/')->with('success',' Login successfully');
            
        }
        else
        {
    
            return back()->with('fail','Error: Invalid Login');
            return view('signup_user');

        }
*/


    function addpview(){
        $data=DB::table("add_models")->get();
        return view('addpview',compact('data'));
    }
    
   

}




