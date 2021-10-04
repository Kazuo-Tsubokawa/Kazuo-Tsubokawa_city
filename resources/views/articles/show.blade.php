@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    <h1>記事詳細</h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>県:{{ $article->prefecture }}</p>
    <p>カテゴリー:{{ $article->category }}</p>
    <p>{{ $article->body }}</p>

    <div class="button-group">
        <input type="button" value="記事一覧へ戻る" onclick="location.href='/articles'">
        <input type="button" value="編集する" onclick="location.href='/articles/{{ $article->id }}/edit'">
        <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="記事を削除する" onclick="if(!confirm('本当に削除しますか？')){return false};">
        </form>
    </div>
@endsection