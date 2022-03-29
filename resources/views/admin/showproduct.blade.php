
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
        
      <!-- partial -->
        @include('admin.sidebar')

        @include('admin.navbar')

        <!-- partial -->
        
        <div style="padding-bottom:100px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">


            @if(session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
   
        <div style="float:right; width:300px" class="alert alert-success">

        <button  type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>
        </div>
        @endif



            <table>

            <tr style="background-color: grey;">

                <td style="padding:20px">Tên sản phẩm</td>
                <td style="padding:20px">Mô tả</td>
                <td style="padding:20px">Số lượng</td>
                <td style="padding:20px">Giá</td>
                <td style="padding:20px">Hình ảnh</td>
                <td style="padding:20px">Cập nhật</td>
                <td style="padding:20px">Xóa</td>


            </tr>

            @foreach($data as $product)

            <tr align="center" style="background-color: black; ">

                <td>{{($product->title)}}</td>
                <td>{{($product->description)}}</td>
                <td>{{($product->quantity)}}</td>
                <td> {{number_format($product->price, 0, '', ',');}}đ</td>
                <td style="padding:10px">
                    <img height="70" width="70" src="{{($product->image)}}" alt="">
                </td>

                <td style="padding:10px">
                    <a class="btn btn-primary" href="{{url('updateview', $product->id)}}">Update</a>
                </td>

                <td style="padding:10px" >
                    <a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="{{url('deleteproduct', $product->id)}}">Delete</a>
                </td>

            </tr>

            @endforeach

            </table>

            </div>
        </div>


          <!-- partial -->
        @include('admin.script')
  </body>
</html>