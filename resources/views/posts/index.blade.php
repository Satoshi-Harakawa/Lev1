<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href='/posts/create'>作成</a>
        <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <a href="/posts/{{$post->id}}"><h2 class="title">{{$post->title}}</h2></a>
                    <p class="body">{{$post->body}}</p>
                    
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="btn" onclick="deletePost({{ $post->id }})">削除</button>
                    </form>  
                    
                </div>
            @endforeach
        </div>
        
        <div class="paginate">
            {{$posts->links()}}
        </div>
        
        <script>
            function deletePost(id){
                if(confirm("本当に削除しますか？")){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>