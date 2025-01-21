<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿詳細</title>
</head>
<body>
    <h1>{{ $post->name }}</h1>
    <p>{{ $post->content }}</p>
    <hr>
    <h2>Comments</h2>
    @if($post->comments->isEmpty())
        <p>コメントはありません。</p>
    @else
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>{{ $comment->author_name }}</strong>: {{ $comment->content }}
                    <br>
                    <small>投稿日時: {{ $comment->created_at->format('Y-m-d H:i') }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
