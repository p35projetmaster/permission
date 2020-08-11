@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                @can('Archive')
                <li class="nav-item">
                   <a href="{{url('/TransfertArchive')}}">
                  <span>Archive</span></a>
                </li>
  
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
