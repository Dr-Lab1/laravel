@extends('layouts.app')

@section('content')

    <h1>Liste des Articles</h1>

        @foreach($posts as $post)
            <h1>{{ $post }}</h1>
        @endforeach 

@endsection