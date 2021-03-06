@extends('layouts.app')

@section('content')
<div class="container">
    <x-space></x-space>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @foreach ($spaces as $space)
            <div class="card">
                <div class="card-body">
                   <h5 class="card-title">
                       {{ $space->title }}
                        <form action="#">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger float-right">Delete</button>
                            <a href="#" class="btn btn-sm btn-info float-right text-white">Edit</a>
                        </form>
                    </h5>
                   <h6 class="card-subtitle">{{ $space->address }}</h6>
                   <p class="card-text">{{ $space->description }}</p>
                   <a href="#" class="card-link">Direction</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        {{ $spaces->links() }}
    </div>
</div>
@endsection
