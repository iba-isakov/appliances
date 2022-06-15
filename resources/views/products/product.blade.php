@extends('layouts.app')
@section('content')
    <product-main-component
        :product='@json($product)'
        :categories='@json($categories)'
    ></product-main-component>
@endsection
