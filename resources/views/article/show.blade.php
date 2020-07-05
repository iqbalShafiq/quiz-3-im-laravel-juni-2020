@extends('layouts.master')

@section('header')
    {{$article->judul}}
@endsection

@section('title')
    Details:
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <ul class="list-group w-50">
            <li class="list-group-item active">Judul</li>
            <li class="list-group-item"> {{$article->judul}} </li>
            <li class="list-group-item active">Isi</li>
            <li class="list-group-item"> {{$article->isi}} </li>
            <li class="list-group-item active">Slug</li>
            <li class="list-group-item"> {{$article->slug}} </li>
            <li class="list-group-item active">Tags</li>
            <li class="list-group-item">
                @foreach (explode(',', $article->tags) as $tag)
                    <a href="#" class="btn btn-success mt-2"> {{$tag}} </a>
                @endforeach
            </li>
            <li class="list-group-item active">User ID</li>
            <li class="list-group-item"> {{$article->user_id}} </li>
            <li class="list-group-item active">Created At</li>
            <li class="list-group-item"> {{$article->created_at}} </li>
            <li class="list-group-item active">Updated At</li>
            <li class="list-group-item"> {{$article->updated_at}} </li>
        </ul>
        
    </div>
    <div class="container">
        <a href="{{$article->id}}/edit" class="mt-5 btn btn-success w-50">Edit</a>
        <a href="/artikel" class="my-3 btn btn-dark w-50">Kembali</a>
    </div>
@endsection