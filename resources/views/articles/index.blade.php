@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

    <h1>記事一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
        @endforeach
    </ul>
    <a href="/articles/create"><input type="submit" value="新規投稿"></a>
@endsection
