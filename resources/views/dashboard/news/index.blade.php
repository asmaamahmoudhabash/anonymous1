@extends('dashboard.layouts.dashboard')

@section('content')


    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-header-title">
                            <a href="{{url('AdminPanel/News/create')}}">  <button class="btn btn-success btn-round">Add News</button></a>
                            {{--<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
                        </div>
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{url('AdminPanel/Dashboard')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"> <a href="{{url('AdminPanel/News/create')}}">Add  News </a>
                                </li>
                                <li class="breadcrumb-item">News Table
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">
                    @include('flash::message')
                        <!-- Basic table card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>News table</h5>
                                {{--<span>use class <code>table</code> inside table element</span>--}}
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show All</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($news as $value)
                                        <tr>
                                            <td>{{$value->title}}</td>
                                            <td>
                                                <a href="{{url('AdminPanel/News/'.$value->id.'/edit')}}">
                                                <button class="btn btn-success btn-icon"><i class="ion-edit"></i></button>
                                                </a>
                                            </td>
                                          <td>
                                              {{Form::open(array('method'=>'delete','url'=>'AdminPanel/News/'.$value->id))}}
                                                  <button   onclick="alert('Are You Sure You Want TO delete');" class="btn btn-danger btn-icon"><i class="ion-filing"></i></button>
                                              {{Form::close()}}
                                          </td>

                                          <td>
                                              <a href="{{url('AdminPanel/News/'.$value->id)}}"> <button class="btn btn-primary btn-icon"><i class="icofont icofont-eye-alt"></i></button></a>
                                          </td>

                                        </tr>
                                           @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <!-- Basic table card end -->

                    </div>
                    <!-- Page-body end -->
                    {{$news->render()}}
                </div>
            </div>
            <!-- Main-body end -->

            {{--<div id="styleSelector">--}}
               {{----}}
            {{--</div>--}}
        </div>
    </div>


@stop