@extends('layouts.dashboardmaster')

@section('content')

<x-breadcum slogan="Request Page"></x-breadcum>

<div class="row my-5">
    @foreach ($requests as $req)
        <div class="col-lg-3 col-xl-3">
            <!-- Simple card -->
            <div class="card">
                @if ($req->oneuser->image == 'default.jpg')

                <img style="height: 280px; object-fit:contain;" class="card-img-top img-fluid" src="{{ asset('uploads/default') }}/{{ $req->oneuser->image }}" alt="Card image cap">
                @else
                <img style="height: 280px; object-fit:contain;" class="card-img-top img-fluid" src="{{ asset('uploads/profile') }}/{{ $req->oneuser->image }}" alt="Card image cap">

                @endif
                <div class="card-body">
                    <h5 class="card-title">Feedback</h5>
                    <p class="card-text">{{ $req->feedback }}.</p>
                    <a href="{{ route('request.cancel',$req->id) }}" class="btn btn-danger waves-effect waves-light">Cancel</a>
                    <a href="{{ route('request.accept',$req->id) }}" class="btn btn-primary waves-effect waves-light">Accept</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


@endsection
