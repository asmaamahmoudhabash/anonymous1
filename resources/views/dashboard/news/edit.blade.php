
@extends('dashboard.layouts.dashboard')

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <h4>Edit News</h4>
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('AdminPanel/News')}}">All News</a>
                                </li>
                                <li class="breadcrumb-item">Edit News
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Form Inputs</h5>
                                        <div class="card-header-right">
                                            <i class="icofont icofont-rounded-down"></i>
                                            <i class="icofont icofont-refresh"></i>
                                            <i class="icofont icofont-close-circled"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                    <!-- form start here -->
                                        {!! Form::model($model,[

                                          'action'=>['NewsController@update',$model->id],
                                          'id'=>'myForm',
                                          'role'=>'form',
                                          'method'=>'PUT',
                                          'files'=>'true'
                                          ])!!}

                                        @include('dashboard.news.form')
                                        <button type="submit" class="form-control autonumber btn btn-success" data-a-sign="Name">Save change</button>
                                        {!! Form::close()!!}

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
        </div>
    </div>

@endsection