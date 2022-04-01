
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

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

        <h1 class="title">Thêm sản phẩm</h1>




        @if(session()->has('message'))
        <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
   
        <div style="float:right; width:300px" class="alert alert-success">

        <button  type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>
        </div>
        @endif



        
    
        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf
        

        <div style="padding:15px">
            <label>Tên sản phẩm:</label>
            <input class="input" type="text" name="title" placeholder="Nhập tên sản phẩm" required="">
        </div>

        <div style="padding:15px">
            <label>Giá chính:</label>
            <input class="input" type="number" name="price" placeholder="Nhập giá chính" required="">
        </div>

        <div style="padding:15px">
            <label>Giá gốc:</label>
            <input class="input" type="number" name="priceNsale" placeholder="Nhập giá gốc" required="">
        </div>

        <div style="padding:15px">
            <label>Mô tả:</label>
            <textarea class="input" name="des" placeholder="Nhập mô tả" maxlength="15000" rows="10" cols="30"></textarea>
            <!-- <input class="input" type="text" name="des" placeholder="Nhập mô tả" maxlength="15000" required=""> -->
        </div>

        <div style="padding:15px">
            <label>Thể loại:</label>
            <select  class="input" name="category_id" style="padding-right:7.5rem">
            <option >--chọn--</option>
            @foreach($categories as $category)
            <option value="{{($category->id)}}">{{($category->cat_name)}}</option>
            @endforeach
            </select>
        </div>
        
        <div style="padding:15px">
            <label>Hình Ảnh:</label>
            <input class="input" type="text" name="image" placeholder="Nhập link hình ảnh" required="">
        </div>

        <div style="padding:15px">
            <input  class="btn btn-success" type="submit">
        </div>
        </form>

        </div>

        </div>

          <!-- partial -->
        @include('admin.script')
  </body>
</html>