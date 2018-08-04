@extends('master')

@section('content')

<span><b><a href="../../pages">Back to Pages List ></a></b></span>

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
         <center>edit note...</center>
    </div>
</div>



<div class="row list-group-item">
    <form method="POST" action="update">

    {{ csrf_field() }}
        <div class="input-group">
          <input type="text" name="text" value="{{$note->text}}" class="form-control" placeholder="Add Note . . .">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Ubdate</button>
          </span>
        </div>
    </form>
</div>

@stop﻿