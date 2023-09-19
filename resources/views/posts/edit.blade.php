<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>

    <body class="antialiased">
        <h1>編集画面</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method("PUT")
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}"/>
                <p class="error_title" style="color:red">{{ $errors -> first('post.title')}}</p>
            </div>
            
            <div class="Body">
                <h2>本文</h2> 
                <textarea name="post[body]" placeholder="今日も１日お疲れ様でした。">{{ $post->body }}</textarea>
                <p class="error_body" style="color:red">{{ $errors -> first('post.body')}}</p>
            </div>
            <input type="submit" value="update"/>
        </form>
        
        <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
</html>