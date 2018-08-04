@extends('master')

@section('content')

<span><b><a href="../../pages">Back to Pages List ></a></b></span>

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
    Are you sure that you want to delete all notes in <b>{{ $page->title }}</b> page.
    </div>
</div>



<div class="row list-group-item">
    <div class="col-xs-12">
        <a href="../../pages/{{$page->id}}/deleteall" type="button" class="btn btn-danger">Delete All !</button> 
        <a href="../../pages" type="button" class="btn btn-default">No Go Back</a> 
    </div>
</div>

@stop