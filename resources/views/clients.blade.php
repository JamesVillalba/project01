@extends('app')

@section('title', 'Clients')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Our Clients</h1>

  
    <form action="{{ route('clients.store') }}" method="POST" class="mb-4">
        @csrf
        <input type="text" name="name" placeholder="Client name" required class="form-control mb-2">
        <textarea name="description" placeholder="Project description" required class="form-control mb-2"></textarea>
        <button type="submit" class="btn btn-success">Add Client</button>
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    </form>

    <div class="row mt-5">
        @foreach($clients as $client)
        <div class="col-md-3 text-center mb-4">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h5 class="card-title">{{ $client->name }}</h5>
                    <p class="card-text">{{ $client->description }}</p>

                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
