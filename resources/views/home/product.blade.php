<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="font-size: 50px;margin:20px">Our Products</h1>
            </div>
        </div>
        <div class="row product__filter">
            @foreach ( $product as $product )



            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="product/{{ $product->image }}">
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a href="{{ url('product_details',$product->id) }}" style="background: white ; color : black ; border-radius:10px ; padding:4px" >Details</a></li>
                                </ul>
                            </div>
                    <div class="product__item__text">
                        <h6>{{ $product->name }}</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>{{ $product->price }}MAD</h5>


                    </div>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</section>
