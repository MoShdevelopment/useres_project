@extends('master')

@section('content')
<h3>
you can create your own page </br>and post what you want or what in your mind <br>
</h3>
<span><b>Pages List</b></span>

@foreach ($pages as $page)
<a href="pages/{{$page->id}}">

	<div class="row list-group-item page-title-list">
	    <div class="col-xs-8">
	    {{ $page->title }}
	    </div>
	    <div class="col-xs-4">
	        <div><a href="pages/{{ $page->id }}/delete" class="btn btn-danger pull-right">Delete</a> </div>
	    </div>
	</div>
</a>
@endforeach

<div class="row list-group-item">
    <form method="post" action="pages/pagestor">

    {{ csrf_field() }}
        <div class="input-group">
          <input type="text" name="title" class="form-control" placeholder="Add Page . . .">
          <span class="input-group-btn">
          <button class="btn btn-default" type="submit">Add</button>
          </span>
        </div>
    </form>
</div>

@stop
