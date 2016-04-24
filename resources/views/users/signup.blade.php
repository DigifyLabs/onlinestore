@extends('layouts.base')

@section('body')
@include('layouts.header')
<div class="col-sm-4">
    <div class="signup-form"><!--sign up form-->
        <h2>New User Signup!</h2>
        @if(Session::has('errors'))
            <div class="row">

                @foreach(Session::get('errors')->all() as $error)
                    <div class="col-xs-12">
                     {{$error}}
                    </div>
                @endforeach

            </div>
        @endif
        <form action="" method="post">
            <input type="text" placeholder="Name" name="name"/>
            <input type="email" placeholder="Email Address" name="email"/>
            <input type="password" placeholder="Password" name="password"/>
            <input type="password" placeholder="Password confirmation" name="password_confirmation"/>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">Signup</button>
        </form>
    </div><!--/sign up form-->
</div>
@endsection