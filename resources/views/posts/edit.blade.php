<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>編集画面</h1>
        <div class ='content'>
            <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="title">
                 <h2>Title</h2>
                 <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class="body">
                 <h2>Body</h2>
                 <input type='text' name="post[body]" value="{{ $post->body }}">
                </div>
                 <input type="submit" value="update">
            </form>
        </div>
        <div class='frooter'>
            <a href="/posts/{{ $post->id }}">back</a>
        </div>
    </body>
</html>