<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

        .center{
            margin: auto;
            width: 70%;
            border: 2px solid white ;
            text-align: center;
            margin-top: 40px;
        }
        .font{
            text-align: center;
            font-size: 40px
        }

        .img_size{
            width: 200px;
            height: 150px;
            margin: 10px
        }
        .th_tab{
            background: gray;
            color: black
        }
        .th_deg{

            padding: 20px;
        }
    </style>
    <!-- Required meta tags -->
   @include('admin.css')
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

                <h2 class="font">All products</h2>

                <table class="center">
                    <tr class="th_tab">
                        <th class="th_deg">Product name</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Category</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Edit</th>
                        <th class="th_deg">PDF</th>

                    </tr>
                    @foreach ( $product as $product )


                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}} MAD</td>
                        <td>{{$product->category}}</td>
                        <td>
                            <img class="img_size" src="/product/{{ $product->image }}">
                        </td>
                        <td><a class="btn btn-danger" href="{{ url('delete_product',$product->id) }}">Delete</a></td>
                        <td><a class="btn btn-success "href="{{ url('update_product',$product->id) }}">Edit</a></td>
                        <td>
                            <a href="{{ url('print_pdf',$product->id) }}" class="btn btn-secondary">Imprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </table>


                </div>
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
       @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
