@extends('layouts.app')

@section('content')

<h1 class="text-center py-3">Crea un nuovo progetto</h1>

<main class="container py-3">
    <form action="{{route('dashboard.projects.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo</label>

            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label fw-bold">Descrizione</label>
            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

</main>
@endsection
