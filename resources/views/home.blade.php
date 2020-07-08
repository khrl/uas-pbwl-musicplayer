@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DASHBOARD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="image/das.jpg" class="img">
                    <br>
                    <br>
                    Music Player For Free~
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
