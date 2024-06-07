@extends('layout')

@section('content')
    <h1>Item List</h1>
    <div class="lee">
    <a href="{{ route('items.create') }}">Add Item</a>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif
    <table>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>
                    <a href="{{ route('items.show', $item->id) }}">View</a>
                    <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
