@extends('layouts.base') 
@section('title','Productos') 
@section('subtitle') Gestion de productos
@endsection
 
@section('header')
<script src="{{asset('js/modalsCRUD.js')}}"></script>
<script src="{{asset('js/products.js')}}"></script>
<script src="{{asset('js/sortTable.js')}}"></script>
<script src="{{asset('js/alertify.min.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/alertify.css')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
 
@section('content')


<br/>
<button name="Create" class="btn btn-success ">@lang('products/index.createProduct')</button>

<br/>
<!-- Inicio mensajes de Alertas -->
<br/>

<div class="table-responsive">
    <table class="table" id="productTable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">
                    <div class="spinner-border invisible" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </th>
                <th scope="col" id="idRow">@lang('products/index.id') ↕</th>
                <th scope="col" id="nameRow">@lang('products/index.name') ↕</th>
                <th scope="col" id="descriptionRow">@lang('products/index.description') ↕</th>
                <th scope="col" id="stockRow">@lang('products/index.stock') ↕</th>
                <th scope="col" id="dateRow">@lang('products/index.dateCreated') ↕</th>
                <th scope="col">@lang('products/index.actions') </th>
            </tr>
        </thead>
        <tbody>


            @foreach ($products as $product)
                @include('products.layouts.tablerow',["product" => $product])
            @endforeach
        </tbody>
    </table>
</div>

@include("layouts.actions")
@endsection