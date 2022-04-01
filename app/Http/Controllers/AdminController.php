<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use App\Models\Category;


class AdminController extends Controller
{
    public function addproduct(Request $request){
        $categories = category::all();

        $categories->cat_name=$request->cat_name;

        return view('admin.addproduct',['categories'=>$categories]);
    }

    public function uploadproduct(Request $request)
    {
        $data=new product();

        $data->title=$request->title;

        $data->priceNsale=$request->priceNsale;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->category_id=$request->category_id;

        $data->image=$request->image;

        $data->save();

        

        return redirect('/showproduct')->with('message', 'Sản phẩm đã được thêm vào dữ liệu thành công');


    }

    public function addcategory(){
        return view('admin.addcategory');
    }

    public function uploadcategory(Request $request)
    {
        $data=new category();

        $data->cat_name=$request->cat_name;

        $data->save();

        return redirect('/addcategory')->with('message', 'Thêm thể loại vào dữ liệu thành công');

    }


    public function showproduct(){
        $data=product::all();

        return view('admin.showproduct', compact('data'));
    }

    public function deleteproduct($id)
    {

        $data=product::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Đã xóa sản phẩm khỏi dữ liệu');

    }

    public function updateview(Request $request,$id)
    {

        $data=product::find($id);

        $categories = category::all();

        return view('admin.updateview', compact('data','categories'));

    }

    public function updateproduct(Request $request, $id)
    {

        $data=product::find($id);

        $data->title=$request->title;

        $data->price=$request->price;

        $data->priceNSale=$request->priceNsale;

        $data->description=$request->des;

        $data->image=$request->image;
        
        $data->category_id=$request->category_id;

        $data->save();

        return redirect('/showproduct')->with('message', 'Đã cập nhật sản phẩm thành công');

    }

    public function showorder()
    {
        $order=order::all();

        return view('admin.showorder', compact('order'));
    }

    public function updatestatus($id)
    {

        $order=order::find($id);

        $order->status='Giao Hàng Thành Công';

        $order->save();

        return redirect()->back()->with('message', 'Sản phẩm được giao thành công');

    }
}
