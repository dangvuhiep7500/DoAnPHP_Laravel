
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

        <h1 class="title">Thêm thể loại</h1>
        
    
        <form action="{{url('uploadcategory')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="padding:15px;">
            <label>Tên thể loại</label>
            <input style ="width: 25%;" class="input"  type="text" name="cat_name" placeholder="Nhập tên thể loại" required="">
        </div>

        <div style="padding:15px">
            <input  class="btn btn-success" type="submit">
        </div>
        </form>
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