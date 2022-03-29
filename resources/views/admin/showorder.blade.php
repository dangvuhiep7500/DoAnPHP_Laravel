<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        td{
            padding:20px;
        }
    </style>
  </head>
  <body>
        
      <!-- partial -->
        @include('admin.sidebar')


        @include('admin.navbar')



        

        <!-- partial -->
            

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center">



        





                <table>

                <tr style="background-color:grey">

                <td style="padding:20px">Tên khách hàng</td>
                <td style="padding:20px">Số điện thoại</td>
                <td style="padding:20px">Địa chỉ</td>
                <td style="padding:20px">Tên sản phẩm</td>
                <td style="padding:20px">Giá</td>
                <td style="padding:20px">Số lượng</td>
                <td style="padding:20px">Trạng thái</td>
                <td style="padding:20px">Hoạt động</td>
                    

                </tr>

                @foreach($order as $orders)

                <tr align="center" style="background-color:black">
                
                <td>{{$orders->name}}</td>
                <td>{{$orders->phone}}</td>
                <td>{{$orders->address}}</td>
                <td>{{$orders->product_name}}</td>
                <td>{{number_format($orders->price, 0, '', ',');}}đ</td>
                <td>{{$orders->quantity}}</td>
                <td>{{$orders->status}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('updatestatus', $orders->id)}}">
                        Xác nhận giao hàng
                    </a>
                </td>
                </tr>

                @endforeach


                </table>
                @if(session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
   
        <div style="float:right; width:300px" class="alert alert-success">

        
            {{session()->get('message')}}
        </div>
        </div>
        @endif
            </div>
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>