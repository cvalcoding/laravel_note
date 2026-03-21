@extends('partials.layout')

@section('title', 'Notes')

@section('content')
    <h1 class="text-center">Note</h1>
    <div class="mb">
        <a href="{{ route('notes.create') }}" title="Add note" class="submit-button">Add +</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th colspan="3">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>
                        {{ $note->title }}
                    </td>
                    <td>
                        {{ $note->content }}
                    </td>
                    <td>
                        <a href="{{ route('notes.show', $note) }}" title="show" class="btn info">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('notes.edit', $note) }}" title="edit" class="btn default">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @csrf
                            @method("DELETE")

                            <input type="submit" class="btn danger" value="X">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection