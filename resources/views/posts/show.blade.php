<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <lihk rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" >
             @csrf
             @method('DELETE')
             <input type="submit" style="display:none">
             <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        <div class="post">
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
            <p class='updated_at'>{{ $post->updated_at }}</p>
            </div>
        <div class='frooter'>
            <a href='/'>back</a>
        </div>
        <script>
           function deletePost(e){
               'use strict';
              if (confirm('本当に削除しますか？')){
                  document.getElementById('form_delete').submit();
               }
            }
        </script>
    </body>
</html>