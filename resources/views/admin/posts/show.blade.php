@extends('layouts/admin')

@section('content')
<div class="container text-center mt-4">
    <h1>{{$post->title}}</h1>
    <hr>
</div>
<p>{{$post->content}}</p>
@endsection