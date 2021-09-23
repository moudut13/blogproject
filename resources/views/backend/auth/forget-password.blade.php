@extends('backend.auth.layouts.app')
@section('title','Reset Password')
@section('main')
    <form action="{{ route('password.email') }}" method="POST" class="frm-single">
        @csrf
            <div class="inside">
                <div class="title"><strong>SA Lab </strong>Admin</div>
                <!-- /.title -->
                <div class="frm-title">Reset Password</div>
                <!-- /.frm-title -->
                <p class="text-center">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                <div class="frm-input"><input type="email" name="email" placeholder="Enter Email" class="frm-inp"><i class="fa fa-envelope frm-ico"></i></div>
                <!-- /.frm-input -->
                <button type="submit" class="frm-submit">Send Email<i class="fa fa-arrow-circle-right"></i></button>
                <a href="{{ route('login') }}" class="a-link"><i class="fa fa-sign-in"></i>Already have account? Login.</a>
                <div class="frm-footer">SA Lab © 2016.</div>
                <!-- /.footer -->
            </div>
            <!-- .inside -->
        </form>
        <!-- /.frm-single -->
@endsection()
