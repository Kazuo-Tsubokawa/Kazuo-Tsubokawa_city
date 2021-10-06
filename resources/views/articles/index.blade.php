@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
    <div class="container">
        <h1>記事一覧</h1>
        <ul>
            @foreach ($articles as $article)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.article')
                </li>
            @endforeach
        </ul>
        <a href="/articles/create"><input type="submit" value="新規投稿" class="btn btn-success rounded-pill mt-5"></a>
        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
