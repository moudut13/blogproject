@extends('backend.dashboard.layouts.app')
@section('title','Dashboard')
@section('content')
        <!-- /.main-content -->
        <div class="main-content">

            <div class="row small-spacing">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content bg-success text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-diamond"></i>
                            <p class="text text-white">SUCCESS</p>
                            <h2 class="counter">72943</h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content bg-info text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-download"></i>
                            <p class="text text-white">DOWNLOAD</p>
                            <h2 class="counter">6382</h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content bg-danger text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-bug"></i>
                            <p class="text text-white">FIXED BUG</p>
                            <h2 class="counter">12564</h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content bg-warning text-white">
                        <div class="statistics-box with-icon">
                            <i class="ico small fa fa-usd"></i>
                            <p class="text text-white">SALES</p>
                            <h2 class="counter">2,637</h2>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
            </div>
            <!-- .row -->

            <div class="row small-spacing">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> All Blog</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-xs-12 -->
            </div>
            <!-- /.row -->

            <div class="row small-spacing">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> All Users</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-xs-12 -->
            </div>
            <!-- /.row -->

            @include('backend.dashboard.footer')
        </div>
        <!-- /.main-content -->
@endsection()
