<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;


class AdminController extends Controller
{
    public function addproduct(){
        return view('admin.addproduct');
    }

    public function uploadproduct(Request $request)
    {
        $data=new product();

        // $image=$request->file;

        // $imagename=time().'.'.$image->getClientOriginalExtension();

        // $request->file->move('productimage', $imagename);

        // $data->image=$imagename;

        $data->title=$request->title;

        $data->priceNsale=$request->priceNsale;

        $data->category=$request->category;

        $data->price=$request->price;

        $data->description=$request->des;

        $data->quantity=$request->quantity;

        $data->image=$request->image;

        $data->save();

        return redirect('/showproduct')->with('message', 'Sản phẩm đã được thêm vào dữ liệu thành công');


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

    public function updateview($id)
    {

        $data=product::find($id);

        return view('admin.updateview', compact('data'));

    }

    public function updateproduct(Request $request, $id)
    {

        $data=product::find($id);

        $data->title=$request->title;

        $data->price=$request->price;

        $data->priceNSale=$request->priceNsale;

        $data->category=$request->category;

        $data->description=$request->des;

        $data->quantity=$request->quantity;

        $data->image=$request->image;

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
