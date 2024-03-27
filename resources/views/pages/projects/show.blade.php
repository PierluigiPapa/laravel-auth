@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 fw-bold">{{$project->title}}</h1>
    <span class="mt-2">{{$project->slug}}</span> <br>

    @if ($project->cover)
    <img src="{{ asset( '/storage/' . $project->cover) }}" alt="">
    @endif

    <br>

    <span class="mt-2">{{$project->content}}</span>
</div>
@endsection
