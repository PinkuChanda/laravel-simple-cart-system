@extends('layouts.master')

@section('title')

    Product Checkout

@endsection

@section('content')


<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">

        <h1 style="margin: 40px 0px 5px 0px;">Ckeckout</h1>
        <h4 style="margin-bottom: 20px;">Total Price : $ {{$total}}</h4>

        <form action="{{route('checkout')}}" method="post">

            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Card Holder Name</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Expiration Month</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Expiration Year</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label>CVC</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
            </div>


            {{csrf_field()}}

            <button type="submit" class="btn btn-success">Buy Now</button>

        </form>
    </div>
</div>

@endsection
