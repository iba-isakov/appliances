@extends('layouts.app')
@section('content')
    @if(count($category_products) > 0)
        <subcategory-component
            :category='@json($subcategory)'
            :parent-categories='@json($parent_categories)'
        ></subcategory-component>
    @else
        <category-main-component
        :category='@json($subcategory)'
        :parent-categories='@json($parent_categories)'
        ></category-main-component>
    @endif
@endsection
