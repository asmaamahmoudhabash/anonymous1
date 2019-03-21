@extends('dashboard.layouts.dashboard')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>News Details</h4>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">   <a href="{{url('AdminPanel/News')}}"> All News</a>
                                </li>
                                <li class="breadcrumb-item">News Details
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-body">
                        @include('flash::message')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>News Title</h5> : {{$news->title}}
                                    </div>

                                    <div class="card-header">
                                        <h5>News Category</h5> : {{$news->category->name}}
                                    </div>

                                    <div class="card-header">
                                        <h5>News Description</h5>
                                        <p>{{$news->body}}</p>
                                    </div>
                                    @if($news->image=='')
                                    @else
                                    <!-- round card start -->
                                        <div class="card-header">
                                            <h5>News Main Imag</h5>
                                            <div class="card-block">
                                                <div class="row users-card">
                                                    <div class="col-lg-6 col-xl-3 col-md-6">
                                                        <div class="card rounded-card user-card">
                                                            <div class="card-block">
                                                                <div class="img-hover">
                                                                    <img class="img-fluid img-circle" src="{{url($news->image)}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <!-- Round card end -->
                                        @endif

                                    @if($images=="")
                                    @else
                                            <!-- Blog-card start -->
                                            <div class="card blog-page" id="blog">
                                                <div class="card-block">
                                                    <div class="row">
                                                        @foreach($images as $image)
                                                            <div class="col-md-6 col-xl-4 blog-page-card">
                                                                <div class="blog-box">
                                                                    <div class="blog-img">
                                                                        <img class="img-fluid" src="{{url($image->url)}}" alt="">
                                                                        <div class="sharing">
                                                                            <br><a href="{{url('AdminPanel/delete_news_img/'.$image->id)}}" onclick="alert('Are You Sure You Want TO delete');"class="btn btn-danger btn-icon"><i class="ion-filing"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="blog-detail">
                                                                        <div class="blog-title">
                                                                            <h5>{{$news->title}}</h5>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Blog-card start -->
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            {{--<div id="styleSelector">--}}

            {{--</div>--}}
        </div>
    </div>


@stop