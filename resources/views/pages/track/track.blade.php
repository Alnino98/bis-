@extends('layouts.app')

@section('content')
<style>
    ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"> </div>
            <div class="toggler-close"> </div>
        </div>
        <!-- END THEME PANEL -->\home
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Tables</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Datatables</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Track
            <small>Data Table</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h4>Latest News</h4>
            <ul class="timeline">
                <li>
                    <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                    <a href="#" class="float-right">21 March, 2014</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi
                        semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in
                        sodales vehicula....</p>
                </li>
                <li>
                    <a href="#">21 000 Job Seekers</a>
                    <a href="#" class="float-right">4 March, 2014</a>
                    <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae
                        justo accumsan, sed semper nisi sollicitudin...</p>
                </li>
                <li>
                    <a href="#">Awesome Employers</a>
                    <a href="#" class="float-right">1 April, 2014</a>
                    <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc
                        vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="text-muted mt-5 mb-5 text-center small">by : <a class="text-muted" target="_blank"
        href="http://totoprayogo.com">totoprayogo.com</a></div>
@endsection