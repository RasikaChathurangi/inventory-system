@extends('layout')

@section('content')

    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label><br>
            <input type="text" name="name" value="{{ $item->name }}" required>
        </div>
        <div>
            <label>Description</label><br>
            <textarea name="description">{{ $item->description }}</textarea>
        </div>
        <div>
            <label>Quantity</label><br>
            <input type="number" name="quantity" value="{{ $item->quantity }}" required>
        </div>
        <div>
            <label>Price</label><br>
            <input type="text" name="price" value="{{ $item->price }}" required>
        </div>
        <br>
        <button type="submit">Update Item</button>
    </form>
    
@endsection
