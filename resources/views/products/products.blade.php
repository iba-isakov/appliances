@extends('layouts.app')
@section('content')
<product-main-component
:product='@json($product)'
></product-main-component>
@endsection
