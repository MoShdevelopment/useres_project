@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <h3>
                 User Name : {{auth::user()->name}}
                 </h3>
                 <hr>
                 <h3>
                 uUer Email : {{auth::user()->email}}
                 </h3>
                 <hr>
                 <h3>
                 user ID : {{auth::user()->id}}
                 </h3>
                 
              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection