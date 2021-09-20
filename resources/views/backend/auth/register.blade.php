@extends('backend.auth.layouts.app')
@section('title','Register')
@section('main')



    <!-- /.frm-single -->
    <form action="{{ route('register') }}" class="frm-single" method="POST">
        @csrf
        <div class="inside">
            @if(Session::has('success'))
                <p class="alert alert-info">{{ Session::get('success') }}</p>
            @endif
            <div class="title"><strong>SA Lab </strong>Admin</div>
            <!-- /.title -->
            <div class="frm-title">Register</div>
            <!-- /.frm-title -->
            <div class="frm-input"><input name="name" type="name" placeholder="name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
            <!-- /.frm-title -->
            <div class="frm-input"><input name="email" type="email" placeholder="Email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="frm-input"><input name="user_name" type="text" placeholder="Username" class="frm-inp"><i class="fa fa-user-secret frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="frm-input"><input name="password" type="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
            <!-- /.frm-input -->
            <div class="frm-input"><input name="password_confirmation" type="password" placeholder="Confirm Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
            <!-- /.frm-input -->
            <button type="submit" class="frm-submit">Register<i class="fa fa-arrow-circle-right"></i></button>
            <div class="row small-spacing">
                <div class="col-sm-12">
                    <div class="txt-login-with txt-center">or register with</div>
                    <!-- /.txt-login-with -->
                </div>
                <!-- /.col-sm-12 -->
                <div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
                <!-- /.col-sm-6 -->
                <div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>
                <!-- /.col-sm-6 -->
            </div>
            <!-- /.row -->
            <a href="{{ route('login') }}" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
            <div class="frm-footer">SALab © 2021.</div>
            <!-- /.footer -->
        </div>
        <!-- .inside -->
    </form>
    <!-- /.frm-single -->
@endsection()
