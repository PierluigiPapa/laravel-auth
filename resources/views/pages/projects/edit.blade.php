@extends('layouts.app')

@section('content')

<h1 class="text-center py-3">Modifica il progetto</h1>

<main class="container py-3">
    <form action="{{ route('dashboard.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') ?? $project->title }}">
            @error('title')
            <div class="text-danger text-center">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label fw-bold">Descrizione</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3">{{ old('content') ?? $project->content }}</textarea>
            @error('content')
            <div class="text-danger text-center">{{ $message }}</div>
            @enderror
        </div>

        

        <div class="mb-3">
            <label for="cover" class="form-label fw-bold">Immagine</label>
            <input type="text" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover" value="{{ old('cover') ?? $project->cover }}">
            @error('cover')
            <div class="text-danger text-center">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">AGGIORNA</button>
        </div>

    </form>
</main>
@endsection
