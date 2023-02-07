@extends('layouts.header_footer_navbar')
@section('content')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome huzaiphar Admin!</h4>
                            <p class="mb-0">Your contact dashboard</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($info as $item)

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row m-b-30">
                                    <div class="col-md-3">
                                        <div class="new-arrival-product">
                                            <div class="new-arrivals-img-contnent">
                                                <img src="/assets-3/images/info_pic.png" width="20" alt="">
                                                <img class="img-fluid" src="/assets-3/images/product/2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="new-arrival-content position-relative">
                                            <p class="price">{{$item->FirstName}} {{$item->LastName}}</p>
                                            <p>Email: <span class="item">{{$item->Email}} <i class="fa fa-check-circle text-success"></i></span></p>
                                            <p>Phone number: <span class="item">{{$item->PhoneNumber}}</span> </p>
                                            <p>Posted On: <span class="item">{{$item->created_at}}</span></p>
                                            <p>Message:</p>
                                            <p style="color: black;">{{$item->Message}}</p>
                                            <div class="comment-review star-rating text-right">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span class="review-text"> 5/5 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>

                    @endforeach
                </div>
            </div>
        </div> 
@endsection