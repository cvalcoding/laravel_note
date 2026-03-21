@extends('partials.layout')

@section('title', 'Edit - notes')

@section('content')

    <h1>{{ $note->title }}</h1>

    <div>{{ $note->content }}</div>

    <p><a href="{{ route('notes.index') }}" title="Return">Return</a></p>
@endsection