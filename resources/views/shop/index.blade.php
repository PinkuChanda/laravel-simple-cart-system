@extends('layouts.master')

@section('title')

    Laravel Cart System

@endsection

@section('content')

        <div class="container">
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">

                            <div class="agile_top_brands_grids">


                                @foreach($products as $product)

                                <div style="margin: 10px 0px;" class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">

                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " src="images/1.png" /></a>
                                                            <p>{{$product->title}}</p>

                                                            <h4>${{$product->price}}</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <a href="{{route('product.addToCart', ['id' => $product->id])}}"><input type="button" value="Add to cart" class="button" /></a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                <div class="clearfix"> </div>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- //top-brands -->

@stop