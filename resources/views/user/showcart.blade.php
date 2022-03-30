@extends('layouts/layouts')

@section('content')

<div class="container-fluid page-body-wrapper">

    <div class="mt-6 container" align="center" >
    @if($count==0)
    <h1 class=" title-card" style="font-size: 30px;">GIỎ HÀNG TRỐNG</h1></span>
    <a href="/" class="mt-4 btn btn-success" >Tiếp tục mua hàng</a>
    @else
    
    <style type="text/css">
        table, th, td{
            font-family: sans-serif,"Segoe UI", Helvetica, Arial;
            border:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
        }
        th, td{
            text-align:center;
            padding:10px;
        }
        tr:hover{
            background-color:#ddd;
            cursor:pointer;
        }
    </style>
   

    <table>
        <thead>
        <tr style=" color:black; text-align:center;" >
            <th style="padding:10px; font-size:20px ">Sản phẩm</td>
            <th style="padding:10px; font-size:20px ">Tên sản phẩm</th>
            <th style="padding:10px; font-size:20px ">Số lượng</th>
            <th style="padding:10px; font-size:20px ">Giá tiền</th>
            <th style="padding:10px; font-size:20px ">Xoá</th>

        </tr>
        </thead>
    <tbody>
        
    <form action="{{url('order')}}" method="POST" >

        @csrf

    @foreach($cart as $carts)

        <tr style="text-align:center; color:black;">
        
            <td style="padding:10px"><img width="100" height="100" src={{$carts->image}} alt="">
            <input type="text" name="productimage[]" value="{{$carts->image}} " hidden="">
             </td>
            <td style="padding:10px">

                <input type="text" name="productname[]" value="{{$carts->product_title}} " hidden="">

                {{$carts->product_title}}
            </td>
            <td style="padding:10px">
            <!-- <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden=""> -->
            <!-- <input data-id="{{$carts->quantity}}" type="number" value="{{$carts->quantity}}" name="quantity[]" class="form-control" style="width:50px; text-align:center"> -->
                <!-- {{$carts->quantity}} -->
               
	        <!-- <input type="button" value="-" class="minus" wire:click="decreaseQuantity('{{$carts->id}}')"> -->
            <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
                {{$carts->quantity}}
            <!-- <input type="button" value="+" class="plus" wire:click="increaseQuantity('{{$carts->id}}')"> -->
               
            </td>
            <td style="padding:10px">
            <input class="iprice" type="text" name="price[]" value="{{$carts->price}}" hidden="">
            {{number_format($carts->price, 0, '', ',');}}đ
            </td>
            <td style="padding:10px">
                <a class="btn btn-danger" href="{{url('delete', $carts->id)}}">Xoá</a>
            </td>
        </tr>  
    @endforeach    
            </tbody>
            <tr>
                <td colspan="2" style="font-weight: bold; font-size: 20px; text-align:center">Tổng tiền:</td>	
                <td class='itotal'colspan="3"style="font-weight: bold; font-size: 20px; text-align:center">					
                    <span>
                        {{number_format($total, 0, '', ',');}}đ
                    </span>
                </td>
            </tr>  
            </table>

            <button class="mt-4 btn btn-success">Thanh Toán</button>

            </form>
            
            <!-- <button class="mt-4 btn btn-success" >Cập Nhật</button> -->
            <a href="/" class="mt-4 btn btn-success" >Tiếp tục mua hàng</a>
    </div>
</div>
    @endif
    @endsection
