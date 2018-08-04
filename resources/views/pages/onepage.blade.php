@extends('master')

@section('content')

<span><b><a href="../pages">Back to Pages List ></a></b></span>

<div class="row list-group-item-info page-title">
    <div class="col-xs-12">
         <center> {{$page->title}}</center>
    </div>
</div>

@foreach ($page->notes as $note)
<div class="row list-group-item">
    <div class="col-xs-8">
     {{$note->text}}
    </div>
    <div class="col-xs-4">
        <a  href='../notes/{{$note->id}}/delete' type="button" class="btn btn-danger pull-right">Delete</a> 
        <a href='../notes/{{$note->id}}/edit'  type="button" class="btn btn-default pull-right">Edit</a> 
    </div>
</div>
@endforeach
<div class="row list-group-item">
    <form method="POST" action="../pages/{{ $page->id }}/notesstore">

    {{ csrf_field() }}
        <div class="input-group">
          <input type="text" name="text" value="{{old ('text')}}" class="form-control" placeholder="Add Note . . .">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Add</button>
          </span>
        </div>
    </form>

</div>


@if(count($errors))

<ul>
@foreach ($errors->all() as $errors)

<li>
{{$errors}}
</li>
@endforeach
</ul>

@endif
@stop﻿