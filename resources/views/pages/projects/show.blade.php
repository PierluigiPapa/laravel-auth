@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 fw-bold">{{$project->title}}</h1>
    <span>{{$project->description}}</span>
</div>
@endsection
