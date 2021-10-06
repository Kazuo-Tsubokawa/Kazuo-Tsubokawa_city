@extends('layouts.main')

@section('title', '記事投稿')

@section('content')
    <div class="container">
        <h1>記事投稿</h1>
        <form action="/articles" method="POST">
            @csrf
            <p>
                <label for="title">タイトル</label>
                <input type="text" name="title" value="{{ old('title') }}">
            </p>
            <p>
                <label for="prefecture">県</label>
                <select name="prefecture">
                    @foreach (config('prefecture') as $key => $prefecture)
                        <option value="{{ $prefecture }}">{{ $prefecture }}</option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="category">カテゴリー</label>
                <select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (old('category') == $category->id) selected  @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="body">本文</label>
                <textarea name="body" cols="30" rows="10">{{ old('body') }}</textarea>
            </p>
            <input type="submit" value="投稿する" class="btn btn-success rounded-pill ml-auto d-block">
        </form>
    </div>
@endsection
