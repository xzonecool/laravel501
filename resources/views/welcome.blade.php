@extends('layouts.master')

@section('style')
    <style>
        body {background-color: green ; color: white;} 
    </style>
@stop

@section('content')
    <h1>과연 얼마나 좋은 글을 쓸수 있을까?</h1>
    <p><h2>하지만 열심히 해야지</h2> </p>
    @include('partials.footer')
@stop
