@extends('layouts.master')

@section('header')
    Articles
@endsection

@section('title')
    Articles
@endsection

@section('content')
<div class="container text-left">
    <h2>Kumpulan Artikel</h2>         
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $key => $article)    
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$article->judul}}</td>
                    <td>{{$article->isi}}</td>
                    <td class="text-center">
                        <a href="/artikel/{{$article->id}}" class="btn btn-primary">Show</a>
                        <a href="/artikel/{{$article->id}}/edit" class="btn btn-success">Edit</a>
                        <form action="/artikel/{{$article->id}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/artikel/create" class="btn btn-primary">Buat Artikel</a>
</div>
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush