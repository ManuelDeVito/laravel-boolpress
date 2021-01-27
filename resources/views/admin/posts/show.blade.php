@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Visualizzazione Post {{ $post->id }}</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    Tutti i posts
                </a>
            </div>
            <dl>
                <dt>Titolo</dt>
                <dd>{{ $post->title }}</dd>
                <dt>Slug</dt>
                <dd>{{ $post->slug }}</dd>
                <dt>Contenuto</dt>
                <dd>{{ $post->content }}</dd>
                <dt>Categoria</dt>
                <dd>{{ $post->category ? $post->category->name : '-' }}</dd>
            </dl>
            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}"
                class="btn btn-warning">
                Modifica
            </a>
            <form method="post" class="d-inline-block" action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Elimina
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
