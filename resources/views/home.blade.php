@extends('layouts.app')

@section('content')
    <main-component
    :products='@json($products)'
    ></main-component>
@endsection
