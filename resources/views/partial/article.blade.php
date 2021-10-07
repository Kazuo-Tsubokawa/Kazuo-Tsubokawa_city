<div class="row">
    <div>
        @if ($article->img_path !== null)
            <img src="{{ url($article->img_path) }}" class="square-img">
        @endif
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $article->prefecture }}</div>
            <div>{{ $article->category->name }}</div>
        </div>
    </div>
</div>
