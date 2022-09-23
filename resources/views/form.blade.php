@extends('layouts.app')
@section('content')
<h1>Crééer un nouveau post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title">
        <textarea name="contenu" cols="30" rows="10"></textarea>
        <button type="submit">Créér</button>
    </form>

@endsection
