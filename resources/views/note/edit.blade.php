@extends('partials.layout')

@section('title', 'Edit - notes')

@section('content')
    <div class="form-block center">
        <h1 class="text-center">Edit note</h1>
        <form action="{{ route('notes.update', $note) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="container">
                <div class="mb">
                    <label for="title"><b>Title</b></label>
                    <input class="form-input @error('title') form-error @enderror" type="text" placeholder="Title" name="title" id="title" value="{{ isset($note->title) ? $note->title : "" }}" />
                    @error('email')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="content-input @error('password') form-error @enderror" placeholder="Content..." value>{{ isset($note->content) ? $note->content : "" }}</textarea>
                    @error('content')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="center">
                    <button class="btn success center" type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
@endsection