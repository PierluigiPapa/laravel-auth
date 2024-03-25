@extends('layouts.app')

@section('content')

<main class="container">
    <h1 class="text-center py-3">PierFolio</h1>
</main>

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
        @foreach ($project as  $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->content}}</td>
            <td>{{$item->cover}}</td>
            <td>{{$item->slug}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
