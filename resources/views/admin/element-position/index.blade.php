@extends('admin.base.main')

@section('title') {{ $title }} @endsection

@section('content') 
<!-- Page Heading -->
<x-header title="{{ $title }}" :menus="$menus" />

<x-datatable id="datatable" :columns="$columns" route="{{ route('element-position.index') }}" />
@endsection