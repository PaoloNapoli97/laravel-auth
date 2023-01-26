@extends('layouts.admin')

@section('content')
    <h1>Modifica progetto: {{ $project->title }}</h1>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="title" class="form-control" id="title" name="title" value="{{ old('title', $project->title)}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Inserisci Il Progetto">{{ old('content', $project->content) }}</textarea>
        </div>
        <button class="btn btn-primary">Modifica</button>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
@endsection