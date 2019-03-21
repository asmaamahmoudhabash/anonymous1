@extends('dashboard.layouts.dashboard')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Category Details</h4>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">   <a href="{{url('AdminPanel/Categories')}}"> All Categories</a>
                                </li>
                                <li class="breadcrumb-item">Categor Details
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Category Name</h5> :{{$category->name}}
                                        <span></span>
                                        {{--<div class="card-header-right">--}}
                                            {{--<i class="icofont icofont-rounded-down"></i>--}}
                                            {{--<i class="icofont icofont-refresh"></i>--}}
                                            {{--<i class="icofont icofont-close-circled"></i>--}}
                                        {{--</div>--}}
                                    </div>

                                    {{--<div class="card-block">--}}
                                        {{--<p>--}}
                                            {{--"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
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