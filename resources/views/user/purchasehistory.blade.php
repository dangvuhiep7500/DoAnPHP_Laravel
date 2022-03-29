@extends('layouts/layouts')

@section('content')

<div class="container-fluid page-body-wrapper">
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
<div class="container" align="center">
    <table>
    <tr style=" color:black; text-align:center">
            <td style="padding:10px; font-size:20px ">Sản phẩm</td>
            <td style="padding:10px; font-size:20px ">Tên sản phẩm</td>
            <td style="padding:10px; font-size:20px ">Giá tiền</td>
            <td style="padding:10px; font-size:20px ">Số lượng</td>
            <td style="padding:10px; font-size:20px ">Trạng thái</td>
            

        </tr>

    @foreach($history as $orders)
    <tr style=" text-align:center">
            <td style="padding:10px"><img width="100" height="100" src={{$orders->image}} alt="">
             </td>
            <td style="padding:10px; color:black">
                {{$orders->product_name}}
            </td>
            <td style="padding:10px; color:black">
            {{number_format($orders->price, 0, '', ',');}}đ
            </td>
            <td style="padding:10px; color:black">
                {{$orders->quantity}}
            </td>
            <td style="padding:10px; color:black">
                {{$orders->status}}
            </td>

            </td>
        </tr>

    @endforeach


    </table>

</div>
</div>
    @endsection
