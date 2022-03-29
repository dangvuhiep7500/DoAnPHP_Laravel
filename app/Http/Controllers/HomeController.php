<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;



class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            $data = product::paginate(8);

            $user=auth()->user();

            $count=cart::where('phone', $user->phone)->count();

            return view('user.home', compact('data','count'));
        }
    }

    public function index(){
        if(Auth::id()){
            return redirect('redirect');
        }
        else{
            $data = product::paginate(8);
            return view('user.home', compact('data'));
        }
        
    }

    public function productdetail($id){
       
             $data= product::find($id);
             if($user=auth()->user()){
                $count=cart::where('phone', $user->phone)->count();
                return view('user.productdetail', ['product'=>$data],compact('count'));
             }
             
            return view('user.productdetail', ['product'=>$data]);

    }

    public function search(Request $request)
    {
        $search=$request->search;
        $data=product::where('title', 'Like', '%'.$search.'%')->paginate(8);
        
        if($user=auth()->user()){     
            $count=cart::where('phone', $user->phone)->count();
            return view('user.home', compact('data','count'));
            
        }
        else{
            return view('user.home', compact('data'));
        }
        
    }

    public function addcart(Request $request, $id)
    {

        if(Auth::id())
        {
            
            $user=auth()->user();

            $product=product::find($id);

            $cart=new cart;

            $cart->name=$user->name;

            $cart->phone=$user->phone;

            $cart->address=$user->address;

            $cart->product_title=$product->title;

            $cart->price=$product->price*$request->quantity;

            $cart->image=$product->image;
            
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect('showcart')->with('message', 'Sản phẩm đã được thêm thành công');
        }
        else
        {
            return redirect('login');
        }

    }

    // public function increaseQuantity($id){
    //     $product = cart::find($id);

    //     $quantity= $product->$quantity + 1;

    //     cart::update($id,$quantity);

    // }
    // public function decreaseQuantity($id){
    //     $product = cart::find($id);

    //     $quantity= $product->$quantity - 1;

    //     cart::update($id,$quantity);
    // }

    public function showcart()
    {
        
        $user=auth()->user();
        
        $total=cart::where('phone', $user->phone)->sum('price');

        $cart=cart::where('phone', $user->phone)->get();

        $count=cart::where('phone', $user->phone)->count();

        

        return view('user.showcart',compact('count','cart','total'));
    }


    public function showpurchasehistory()
    {
        $user=auth()->user();

        $history=order::all();

        $count=cart::where('phone', $user->phone)->count();

        return view('user.purchasehistory', compact('history','count'));
    }

    public function deletecart($id)
    {

        $data=cart::find($id);
        
        $data->delete();

        return redirect()->back()->with('message', 'Đã xóa sản phẩm');

    }

    public function confirmorder(Request $request)
    {

        $user = auth()->user();

        $name=$user->name;

        $phone=$user->phone;

        $address=$user->address;

        foreach($request->productname as $key=>$productname)
        {

            $order=new order;

            $order->product_name=$request->productname[$key];

            $order->price=$request->price[$key]*$request->quantity[$key];
            
            $order->quantity=$request->quantity[$key];

            $order->image=$request->productimage[$key];

            $order->name=$name;

            $order->phone=$phone;

            $order->address=$address;

            $order->status='Đơn Hàng Đang Được Giao';

            $order->save();




        }

        DB::table('carts')->where('phone', $phone)->delete();

        
        return redirect()->back()->with('message', 'Sản phẩm được đặt hàng thành công');


    }
}
