@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="{{ url('/crearcotizacion') }}">
                <img src="/images/mlogo.png" alt="logo" height="700" width="700">
                </a>

        </div>
    </div>
</div>
@endsection
  


