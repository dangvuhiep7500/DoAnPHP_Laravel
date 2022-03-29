
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

        <h1 class="title">Add product</h1>




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
            <label>Product title</label>
            <input class="input"  type="text" name="title" placeholder="give a product title" required="">
        </div>

        <div style="padding:15px">
            <label>Price</label>
            <input class="input" type="number" name="price" placeholder="give a price" required="">
        </div>

        <div style="padding:15px">
            <label>PriceNsale</label>
            <input class="input" type="number" name="priceNsale" placeholder="give a pricesSale" required="">
        </div>

        <div style="padding:15px">
            <label>Category</label>
            <input class="input" type="text" name="category" placeholder="give a category" required="">
        </div>


        <div style="padding:15px">
            <label>Description</label>
            <input class="input" type="text" name="des" placeholder="give a description" required="">
        </div>

        <div style="padding:15px">
            <label>Quantity</label>
            <input class="input" type="text" name="quantity" placeholder="give a product quantity" required="">
        </div>

        <div style="padding:15px">
            <label>Image</label>
            <input class="input" type="text" name="image" placeholder="give a product quantity" required="">
        </div>

        <!-- <div style="padding:15px">
            <input  type="file" name="file">
        </div> -->

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