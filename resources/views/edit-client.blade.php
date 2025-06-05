@extends('app')

@section('title', 'Edit Client')

@section('content')
<div class="container">
    <h2>Edit Client</h2>

    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $client->name }}" class="form-control mb-2">
        <textarea name="description" class="form-control mb-2">{{ $client->description }}</textarea>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
