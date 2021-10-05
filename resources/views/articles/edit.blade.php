@extends('layouts.main')

@section('title', '記事編集')

@section('content')
    <h1>記事編集</h1>
    <form action="/articles/{{ $article->id }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label class="label" for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}">
        </p>
        <p>
            <label class="label" for="prefecture">県</label>
            <input type="text" name="prefecture" value="{{ old('prefecture', $article->prefecture) }}">
        </p>
        <p>
            <label class="label" for="category">カテゴリー</label>
            <input type="text" name="category" value="{{ old('category', $article->category->name) }}">
        </p>
        <p>
            <label class="label" for="body">本文</label>
            <textarea name="body" cols="30" rows="10">{{ old('body', $article->body) }}</textarea>
        </p>
        <input type="submit" value="更新する">
    </form>
@endsection
