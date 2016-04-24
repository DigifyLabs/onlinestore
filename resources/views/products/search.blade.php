@extends('layouts.base')

@section('body')
    @include('layouts.header')


                <div class="row">
                    {!! Former::open() !!}
                    {!! Former::text('name') !!}
                    {!! Former::number('price_from') !!}
                    {!! Former::number('price_to') !!}
                    {!! Former::select('categories')->options($categories) !!}
                    {!! Former::submit('Search') !!}
                    {!! Former::close() !!}
                </div>

@endsection