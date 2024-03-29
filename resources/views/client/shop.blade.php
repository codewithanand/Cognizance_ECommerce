@extends('layouts.client.master')

@section('title', 'Shop - LaCommerce')

@section('content')
    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-lg-3 mb-5">
                        <a class="product-item" href="{{ route('shop.cart.add', $product->id) }}">
                            <img src="{{ asset('uploads/product/' . $product->image) }}" class="img-fluid product-thumbnail">
                            <h3 class="product-title">{{ $product->title }}</h3>
                            <strong class="product-price">₹{{ $product->discount_price }}</strong>

                            <span class="icon-cross">
                                <img src="{{ asset('client/images/cross.svg') }}" class="img-fluid">
                            </span>
                        </a>
                    </div>
                @endforeach


                <!-- Start Column 2 -->
                {{-- <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="#">
                        <img src="{{asset('client/images/product-1.png')}}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Nordic Chair</h3>
                        <strong class="product-price">$50.00</strong>

                        <span class="icon-cross">
                            <img src="{{asset('client/images/cross.svg')}}" class="img-fluid">
                        </span>
                    </a>
                </div> --}}
                <!-- End Column 2 -->

            </div>
        </div>
    </div>
@endsection
