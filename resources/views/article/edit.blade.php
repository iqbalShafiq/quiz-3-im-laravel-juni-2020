@extends('layouts.master')

@section('header')
    Edit {{$article->id}}
@endsection

@section('title')
    Edit
@endsection

@section('content')
    <div class="container text-left">
            <form action="/artikel/{{$article->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" name="judul" value=" {{$article->judul}} " class="form-control" placeholder="Masukkan judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <input type="text" name="isi" value=" {{$article->isi}} " class="form-control" placeholder="Tulis isi di sini" id="isi">
            </div>
            <div class="form-group">
                <label for="tags">Tags:</label>
                <input type="text" name="tags" value=" {{$article->tags}} " class="form-control" placeholder="Tulis tags di sini" id="tags">
            </div>
            <button type="submit" class="btn btn-primary w-25">Update</button>
        </form>
    </div>
@endsection