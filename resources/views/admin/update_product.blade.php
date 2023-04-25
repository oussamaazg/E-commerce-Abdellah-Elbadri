<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

   @include('admin.css')

   <style type="text/css">
.div_center{
    text-align: center;
    padding-top:40px;

}
.div_h{
    font-size: 40px;
    padding-bottom: 20px;
}
label{
    display: inline-block;
    width: 200px;
}

.div_design{
    padding: 10px;
}
.text_color{
    color: black;
}
   </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
           @if(session()->has('message'))

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"
                    aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>
           @endif


                <div class="div_center">
                    <h1 class="div_h">Edit product</h1>

            <form action="{{ url('/update_product_confirm',$product->id) }}" method="POST" enctype="multipart/form-data">

                @csrf

            <div class="div_design">
                 <label>Product name : </label>
                <input type="text" class="text_color" name="name" placeholder="Write product name" value="{{ $product->name }}">
            </div>

            <div class="div_design">
                <label>Description : </label>
                <input type="text" class="text_color" name="description" placeholder="Write product description"  value="{{ $product->description }}">
            </div>



            <div class="div_design">

                <label>Product price : </label>
                <input type="number" class="text_color" name="price" placeholder="Write product price"  value="{{ $product->price }}">
            </div>

            <div class="div_design">


                <label>Product category: </label>
                <select class="text_color" name="category" >

                    <option  value="{{ $product->category }}"> {{ $product->category }}</option>


                @foreach ($category as $category )
                <option>{{ $category->name }}</option>
            @endforeach
                 </select>
            </div>

            <div class="div_design">
                <label>Current Product image : </label>
                <img style="margin:auto;" height="100" width="100" src="/product/{{$product->image }}" >
            </div>


            <div class="div_design">
                <label>Product image : </label>
                <input type="file"  name="image" placeholder="choose image">
            </div>


            <div class="div_design" >
                <input type="submit" class="btn btn-primary" value="Update product">

            </div>
        </form>

        </div>


            </div >
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
