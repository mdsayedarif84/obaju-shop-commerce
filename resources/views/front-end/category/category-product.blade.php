@extends('front-end.master')
@section('title')
    Category
@endsection
@section('body')
<div id="all">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- breadcrumb-->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <!--
                    *** MENUS AND FILTERS ***
                    _________________________________________________________
                    -->
                    <div class="card sidebar-menu mb-4">
                        <div class="card-header">
                            <h3 class="h4 card-title">Categories</h3>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column category-menu">
                                <li>
                                    <ul class="list-unstyled">
                                        @foreach($categories as $category)
                                            <li class="nav-item"><a href="{{ route('category-product',['id'=>$category->id,'name'=>$category->category_name]) }}" class="nav-link">{{ $category->category_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card sidebar-menu mb-4">
                        <div class="card-header">
                            <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills flex-column category-menu">
                                <li>
                                    <ul class="list-unstyled">
                                        @foreach($brands as $brand)
                                            <li class="nav-item"> {{ $brand->brand_name }}</li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card sidebar-menu mb-4">
                        <div class="card-header">
                            <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                    <!-- *** MENUS AND FILTERS END ***-->
                    <div class="banner"><a href="#"><img src="{{ asset('/') }}/front-end/imgs/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
                </div>
                <div class="col-lg-9">
                    <div class="box">
                        <h1>Ladies</h1>
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-md-12 col-lg-4 products-showing">Showing <strong>12</strong> of <strong>25</strong> products</div>
                            <div class="col-md-12 col-lg-7 products-number-sort">
                                <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row">
                                    <div class="products-number"><strong>Show</strong><a href="#" class="btn btn-sm btn-primary">12</a><a href="#" class="btn btn-outline-secondary btn-sm">24</a><a href="#" class="btn btn-outline-secondary btn-sm">All</a><span>products</span></div>
                                    <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
                                        <select name="sort-by" class="form-control">
                                            <option>Price</option>
                                            <option>Name</option>
                                            <option>Sales first</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row products">
                        @foreach($categoryProducts as $categoryProduct)
                        <div class="col-lg-4 col-md-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) }}">
                                                <img src="{{ asset($categoryProduct->product_image) }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) }}">
                                                <img src="{{ asset($categoryProduct->product_image) }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) }}" class="invisible">
                                    <img src="{{ asset($categoryProduct->product_image) }}" alt="" class="img-fluid">

                                </a>
                                <div class="text">
                                    <h3><a href="{{ route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) }}">
                                            {{ $categoryProduct->short_description }}</a>
                                    </h3>
                                    <p class="price">
                                        <del></del>{{ $categoryProduct->product_price }}
                                    </p>
                                    <p class="buttons">
                                        <a href="{{ route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) }}" class="btn btn-outline-secondary">View detail</a>
                                        <a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text-->
                            </div>
                            <!-- /.product            -->
                        </div>
                    @endforeach
                    <!-- /.products-->
                    </div>
                    <div class="pages">
                        <p class="loadMore"><a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a></p>
                        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                            <ul class="pagination">
                                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /.col-lg-9-->
            </div>
        </div>
    </div>
</div>
@endsection
