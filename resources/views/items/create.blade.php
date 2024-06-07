@extends('layout')

@section('content')

    <h1>Add Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div>
            <label>Name</label><br>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Description</label><br>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Quantity</label><br>
            <input type="number" name="quantity" required>
        </div>
        <div>
            <label>Price</label><br>
            <input type="text" name="price" required>
        </div><br>
        <button type="submit">Add Item</button>
    </form>

@endsection
