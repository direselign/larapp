@extends('app')

@section('title', 'About Us')

@section('content')
    <h1>Test</h1>

    @foreach ($d as $i )
        {{ $i }}

    @endforeach
@endSection



