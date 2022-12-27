@extends('layouts.main')

@section('container')
    <h1 class="text-3xl font-bold mb-4">Halaman About</h1>

    <h3 class="text-lg font-semibold mb-2">{{ $name }}</h3>
    <p class="text-md">{{ $email }}</p>
    <img src={{ $image }} alt="" width="200">
@endsection
