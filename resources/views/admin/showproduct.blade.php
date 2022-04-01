
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


        

            <table>

            <tr style="background-color: grey;text-align: center;">
                <td style="padding:20px">Tên sản phẩm</td>
                <td style="padding:20px">Thể loại</td>
                <td style="padding:20px">Giá</td>
                <td style="padding:20px">Hình ảnh</td>
                <td style="padding:27px">Cập nhật</td>
                <td style="padding:20px">Xóa</td>
            </tr>

            @foreach($data as $product)

            <tr align="center" style="background-color: black;padding:50px  ">

                <td>{{($product->title)}}</td>
                <td style = "padding:20px">{{($product->category->cat_name)}}</td>
                <td> {{number_format($product->price, 0, '', ',');}}đ</td>
                <td style="padding:10px">
                    <img height="70" width="70" src="{{($product->image)}}" alt="">
                </td>

                <td style="padding:10px">
                    <a class="btn btn-primary" href="{{url('updateview', $product->id)}}">Cập nhật</a>
                </td>

                <td style="padding:10px" >
                    <a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="{{url('deleteproduct', $product->id)}}">Xoá</a>
                </td>

            </tr>

            @endforeach

            </table>
            @if(session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
   
        <div style="float:right; width:300px" class="alert alert-success">

        <button  type="button" class="close" data-dismiss="alert">x</button>
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