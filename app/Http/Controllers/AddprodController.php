<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AddModel;
use App\Models\Cart;
use App\Models\order;
use App\Models\RegisterModel;
use Session;
use Carbon\Carbon;

class AddprodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adds=AddModel::all();
        return view('addview',compact('adds'));
    }


    
    public function search(Request $request)
    {
        $getpname=request('pname');
        $prod=AddModel::query()
        ->where('pname','LIKE',"%{$getpname}%")
        ->get();
        return view('addview',compact('prod'));
    }

    
   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproducts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getpname=request('pname');
        $getpdes=request('pdes');
        $getprice=request('price');
        $getimage=$request->file('image');
        $name=$getimage->getClientOriginalName();
        
        $getimage->move(public_path('assets/product_img'), $name);

        $add=new AddModel();
        $add->pname=$getpname;
        $add->pdes=$getpdes;
        $add->price=$getprice;
        $add->image=$name;
        $add->save();


       return redirect('/homeadmin');
      
    }


    public function addToCart(Request $request)
    {

         $cart=new Cart();
         $cart->user_id=$request->session()->get('loggeduser');
         $cart->product_id=$request->product_id;
            $cart->save();
            if($cart)
            {
                return back()->with('success','Successfuly added to cart');
            }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }

    }


    static public function CartItem(){
        $userId=Session::get('loggeduser');
        return Cart::where('user_id',$userId)->count();
    }


public function cartlist()
{
    $products=AddModel::all();
    $userId=Session::get('loggeduser');
    $products= DB::table('cart')
    ->join('add_models', 'cart.product_id', '=', 'add_models.id')
    ->where('cart.user_id', $userId)
    //->select('add_models.*')
    ->select('add_models.*','cart.id as cart_id')
    ->get();
     return view('/cartlist', compact('products'));
}




function orderplace (Request $req)
{
        $userId= Session::get('loggeduser');
        $allCart=Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart)
    {
        $order= new Order;
        $order->pid=$cart['product_id'];
        $order->userid=$cart['user_id']; 
        $order->address=$req->address;
        $order->status="pending";
        $order->paymentmethod=$req->payment; 
        $order->paymentstatus="pending";
        $order->save();
    } 
        Cart::where('user_id', $userId)->delete();
        return redirect('/addp')->with ('success','Thankyou for your order!!');
}




public function order()
{
   // $products=AddModel::all();
    $userId=Session::get('loggeduser');
    $tot= collect(DB::table('cart')
    ->join('add_models', 'cart.product_id', '=', 'add_models.id')
    ->where('cart.user_id','=', "$userId")
    ->sum('add_models.price'));
   // $stot = $tot->values();
    //dd($tot);
    $t = $tot['0']+150;
     return view('order', compact('tot','t'));
}




    public function cancelorder($id,$uid)
    {
        DB::table('orders')
        ->where('pid',$id)
        ->where('userid',$uid)
        ->delete();
        return redirect('/myorder');
    
    }



    
    public function orderedit($id)
    {
        $prod=Order::find($id);
        
        return view('editorder',compact('prod'));
    }




    public function updateorder(Request $request, $id)
    {
        $prod=Order::find($id);


        $getstatus=request('status');

        $prod->status = $getstatus;


        $prod->save();


        return redirect('/vieworders');

    }

    
    public function vieworders()
    { 
        $prod=Order::all();
        return view('vieworders',compact('prod'));

    }



    public function myorders()
    {
    
        $userId=Session::get('loggeduser');
        $orders=DB::table('orders')
        ->join('add_models', 'orders.pid', '=', 'add_models.id')
        ->where('orders.userid', $userId)
        ->get();
        return view('myorder', ['orders'=>$orders]);
    }



    public function createdetail(Request $request,$id)
    {
        // $logid = $request->session()->get('loggeduser');
        $pview = collect(DB::table('add_models')
        ->select('add_models.*')
        ->where('id','=', $id)
        ->get());
        // dd($pview);
        return view('product-details',['pview'=>$pview]);


    }



    public function removecart($id)
    {
            cart::destroy($id);

            return redirect('/cartlist');
    }


/*

function payment(Request $req)
{
    $userId=$req->session()->get('lname') ['id'];
    $total=$products=DB::table('cart')
    ->join('add_models','cart.product_id','=','add_models.id')
        ->where('cart.user_id',$userid)
    ->sum('cart.qtyprice');
    // echo "$total";
    
    return view('ordernow',['total'=>$total]);
    
}

*/

    /*
    public function addToCart(Request $request)
    {

        if($request->session()->has('loggeduser')){
            
            $cart= new Cart;
            $cart->user_id=$request->session()->get('loggeduser');
           $cart->product_id=$request->product_id;
           $cart->save();
           return redirect('/addp');
        }
        else
        {
           return redirect('/signup_user');
        }
        
    }

   
    static public function CartItem(){
        $userId=Session::get('loggeduser');
        return Cart::where('user_id',$userId)->count();
    }

    public function cartlist()
    {
        $products=AddModel::all();
        $userId=Session::get('loggeduser');
        $products= DB::table('cart')
        ->join('add_models', 'cart.product_id', '=', 'add_models.id')
        ->where('cart.user_id', $userId)
        ->select('add_models.*')
        ->get();
         return view('cartlist', compact('products'));
    }


    public function removecart($id)
    {
        Cart::destroy($id);
    
        return redirect('/cartlist');
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
        $add=AddModel::find($id);
        return view('editprod',compact('add'));

    }


   /* 
    public function createdetail($id)
    {
        $item=AddModel::find($id);
        return view('product-details',compact('item'));

    }

*/






/*
    public function buyitem($id)
    {
        $item=AddModel::find($id);
        return view('buyitem',compact('item'));

    }

*/
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $add=AddModel::find($id);
        $getpname=request('pname');
        $getpdes=request('pdes');
        $getprice=request('price');
        $getimage=$request->file('image');
        $name=$getimage->getClientOriginalName();
        
        $getimage->move(public_path('assets/product_img'), $name);

        echo $getpname;
        echo $getpdes;
        echo $getprice;
        echo $getimage;



        $add->pname=$getpname;
        $add->pdes=$getpdes;
        $add->price=$getprice;
        $add->image=$name;
        $add->save();

  

        return redirect('/addview');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteview($id)
    {
        $add=AddModel::find($id);
        return view('deleteprod',compact('add'));


    }
    public function destroy($id)
    {
        $user=AddModel::find($id);

        $user->delete();

        return redirect('/addview');

    }
  
   
}