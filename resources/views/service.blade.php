@extends('app')

@section('title','services')

@section('content')
    <ul>

        @forelse ($services as $item)
            <li>{{ $item->name}}</li>
        @empty
            <li>There is no services</li>
        @endforelse
    </ul>

@endsection
