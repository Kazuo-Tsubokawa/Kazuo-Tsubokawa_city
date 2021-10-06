@extends('layouts.main')

@section('title', '記事編集')

@section('content')
    <div class="container"></div>
    <h1>記事編集</h1>
    <form action="/articles/{{ $article->id }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title', $article->title) }}">
        </p>
        <p>
            <label for="prefecture">県</label>
            <select name="prefecture">
                @foreach (config('prefecture') as $key => $prefecture)
                    <option value="{{ $prefecture }}" @if ($article->prefecture == $prefecture) selected @endif>{{ $prefecture }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label for="category">カテゴリー</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($article->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label for="body">本文</label>
            <textarea name="body" cols="30" rows="10">{{ old('body', $article->body) }}</textarea>
        </p>
        <input type="submit" value="更新する" class="btn btn-success rounded-pill ml-auto d-block">
    </form>
    </div>
@endsection
