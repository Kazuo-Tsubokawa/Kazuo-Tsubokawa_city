@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
<h1>記事詳細</h1>
@include('partial.article')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>タイトル</th>
                <td>{{ $article->title }}</td>
            </tr>
            <tr>
                <th>県</th>
                <td>{{ $article->prefecture }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $article->category->name }}</td>
            </tr>
            <tr>
                <th>本文</th>
                <td>{{ $article->body }}</td>
            </tr>
        </tbody>
    </table>

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
