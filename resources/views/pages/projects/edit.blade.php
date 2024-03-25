@extends('layouts.app')

@section('content')

<h1 class="text-center py-3">MODIFICA IL PROGETTO</h1>

<main class="container py-3">
    <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') ?? $project->title }}">
            @error('title')
            <div class="bg-danger text-white text-center">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label fw-bold">Descrizione</label>
            <textarea class="form-control" name="content" id="content" rows="3" value="{{ old('title') ?? $project->content }}"></textarea>
            @error('content')
            <div class="bg-danger text-white text-center">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label fw-bold">Immagine</label>
            <input type="text" class="form-control" name="cover" id="cover" value="{{ old('cover') ?? $project->cover }}">
            @error('cover')
            <div class="bg-danger text-white text-center">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</main>
@endsection
