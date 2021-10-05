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
            <select name="prefecture">
                @foreach (config('prefecture') as $key => $prefecture)
                    <option value='' disabled selected style='display:none;'>を選択してください</option>
                    <option value="{{ $prefecture }}">{{ $prefecture }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label class="label" for="category_id">カテゴリー</label>
            <select name="category_id">
                @foreach (config('category') as $key => $category)
                    <option value='' disabled selected style='display:none;'>を選択してください</option>
                    <option value="{{ $category }}">{{ $category }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label class="label" for="body">本文</label>
            <textarea name="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="投稿する">
    </form>
@endsection
