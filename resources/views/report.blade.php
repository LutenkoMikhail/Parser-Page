@extends('layouts.app')

@section('content')
    @if (count($products)!==0)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center"> {{ __ ('Report loading product.') }} </h1>
            </div>
            <div class="col-md-12">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date Load</th>
                        <th scope="col">Domain</th>
                        <th scope="col">Page Url</th>
                        <th scope="col">Price</th>
                        <th scope="col">Price Promotional</th>
                        <th scope="col">Price Discount Percentage</th>
                        <th scope="col">Product Name</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th>{{$product->id}}</th>
                            <th>{{$product->date_load}}</th>
                            <th>{{$product->domain_name}}</th>
                            <th>{{$product->page_url}}</th>
                            <th>{{$product->price}}</th>
                            <th>{{$product->price_promotional}}</th>
                            <th>{{$product->price_discount_percentage}}</th>
                            <th>{{$product->product_name}}</th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $products ->links() }}
            </div>
        </div>
        @else
            <h3 class="text-center">
                The list of products is empty !
            </h3>
    @endif

@endsection

