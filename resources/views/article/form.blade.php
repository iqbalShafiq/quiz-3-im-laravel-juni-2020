@extends('layouts.master')

@section('header')
    Artikel baru
@endsection

@section('title')
    Buat Artikel Baru
@endsection

@section('content')
    <div class="container text-left">
        <form action="/artikel" method="post">
            @csrf
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul" id="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <input type="text" name="isi" class="form-control" placeholder="Tulis isi di sini" id="isi">
            </div>
            <div class="form-group">
                <label for="tags">Tags: ( Pisahkan dengan tanda koma (,) )</label>
                <input type="text" name="tags" class="form-control" placeholder="Tags article" id="tags">
            </div>
            <div class="form-group">
                <label for="user_id">User ID: ( Jika belum punya user, buat dulu di phpmyadmin )</label>
                <input type="text" name="user_id" class="form-control" placeholder="user_id anda" id="user_id">
            </div>
            <button type="submit" class="btn btn-primary w-25">Submit</button>
        </form>
    </div>
@endsection