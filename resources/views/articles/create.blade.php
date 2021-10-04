@extends('layouts.main')

@section('title', '記事投稿')

@section('content')
    <h1>記事投稿</h1>
    <form action="/articles" method="POST">
        @csrf
        <p>
            <label class="label" for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label class="label" for="prefecture">県</label>
            <input type="text" name="prefecture" value="{{ old('prefecture') }}">
        </p>
        <p>
            <label class="label" for="category">カテゴリー</label>
            <input type="text" name="category" value="{{ old('category') }}">
        </p>
        <p>
            <label class="label" for="body">本文</label>
            <textarea name="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="投稿する">
    </form>
@endsection