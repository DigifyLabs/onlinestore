@extends('layouts.base')

@section('body')
    @include('layouts.header')


                <div class="row">

                        <div class="col-sm-4 col-sm-offset-1">
                            @if(Session::has('message'))
                                {{ Session::get('message') }}
                            @endif
                            <div class="login-form"><!--login form-->
                                <h2>Login to your account</h2>
                                {!! Former::open() !!}
                                @if(Session::has('errors'))
                                    {!! Former::populate(old()) !!}
                                @endif
                                {!! Former::email()->name('email') !!}
                                {!! Former::password()->name('password') !!}
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                                    <button type="submit" class="btn btn-default">Login</button>
                                {!! Former::close() !!}
                            </div><!--/login form-->
                        </div>

                </div>

@endsection