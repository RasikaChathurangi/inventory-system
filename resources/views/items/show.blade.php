@extends('layout')

@section('content')

    <h1>Item Details</h1>
    <div>
        <strong>Name:</strong> {{ $item->name }}
    </div>
    <div>
        <strong>Description:</strong> {{ $item->description }}
    </div>
    <div>
        <strong>Quantity:</strong> {{ $item->quantity }}
    </div>
    <div>
        <strong>Price:</strong> {{ $item->price }}
    </div>
    <a href="{{ route('items.index') }}">Back to List</a>
    

@endsection
