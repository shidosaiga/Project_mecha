@extends('layouts.app')
<title>Me'Cha</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('fontend/assets/img/icon_mecha.png' )}}" rel="icon">  
  <link href="{{asset('fontend/assets/img/icon_mecha.png' )}}" rel="apple-touch-icon">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><strong>{{ __('My Profile') }}</strong></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <strong>  Name : </strong> {{ Auth::user()->name }} <br>
                    <strong>  Email : </strong> {{ Auth::user()->email }} <br>
                    <strong>  Phone : </strong> {{ Auth::user()->phone }} <br>
                    <strong>  Address : </strong> {{ Auth::user()->address }} <br>
                   

                    <a href="{{route('index')}}" class="btn btn-primary">Product Mangements</a>
                    <a href="{{ url('/') }}" class="btn btn-success">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
