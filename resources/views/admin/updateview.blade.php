
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include('admin.css')
    <style type="text/css">

    .title
    {
        color:white;
        padding-top:25px;
        font-size:25px;
    }
    label{
        display: inline-block;
        width: 200px;
    }
    .input{
        color:black;
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

        <h1 class="title">Update Product</h1>




        @if(session()->has('message'))

        <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}

        </div>

        @endif



        
    
        <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        

        <div style="padding:15px">
            <label>Tên sản phẩm:</label>
            <input class="input"  type="text" name="title" value="{{$data->title}}" required="">
        </div>

        <div style="padding:15px">
            <label>Giá chính:</label>
            <input class="input" type="number" value="{{$data->price}}" name="price"  required="">
        </div>

        <div style="padding:15px">
            <label>Giá gốc:</label>
            <input class="input" type="number" value="{{$data->priceNsale}}" name="priceNsale"  required="">
        </div>

        <div style="padding:15px">
            <label>Thể loại:</label>
            <input class="input" type="text" value="{{$data->category}}" name="category"  required="">
        </div>

        <div style="padding:15px">
            <label>Mô tả:</label>
            <input class="input" type="text" value="{{$data->description}}" name="des"  required="">
        </div>
        
        <div style="padding:15px">
            <label>ID_Thể loại:</label>
            <input class="input" type="text" value="{{$data->category_id}}" name="category_id"  required="">
        </div>
        
        <div style="padding:15px">
            <label>Hình Ảnh:</label>
            <input class="input" type="text" value="{{$data->image}}" name="image"  required="">
        </div>
        
        <!-- <div style="padding:15px">
            <label>Old Image</label>
            <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
        </div>

        <div style="padding:15px">

            <label for="">Change the image</label>
            <input  type="file" name="file">

        </div> -->

        <div style="padding:15px">   
            <input  class="btn btn-success" type="submit"  >
        </div>
        </form>

        </div>

        </div>



          <!-- partial -->
        @include('admin.script')
  </body>
</html>