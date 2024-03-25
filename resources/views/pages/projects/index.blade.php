@extends('layouts.app')

@section('content')

<main class="container">
    <h1 class="text-center py-3">PierFolio</h1>

    <div class="text-center">
        <a class="btn btn-primary mb-3 " href="{{ route('dashboard.projects.create') }}">Crea</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Cover</th>
            <th scope="col">Slug</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($project as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->content }}</td>
                <td>{{ $item->cover }}</td>
                <td>{{ $item->slug }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('dashboard.projects.edit', $item->id) }}">Modifica</a>
                    <form method="POST" action="{{ route('dashboard.projects.destroy', $item->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>

@endsection
