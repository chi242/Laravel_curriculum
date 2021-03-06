<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
              {{ $post->title }}
        </h1>
          <!-- <form action="/posts/{{ $post->id }}" id="form_{{$post->id}}" method="POST" >
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class="delete">[<span onclick = "return deletePost(this);">delete</span>]</p>
        </form> -->
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button> 
        </form>

        <div class='content'>
            <div class='content__post'>
                <h3>本文</h3>
                <p>{{ $post->body}}</p>
            </div>
            <div>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            </div>
            <div>
                <p>{{ $post->created_at}}</p>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
        <script>
        function deletePost(e){
            'use strict';
            if(confirm('削除すると復元できません。\n 本当に削除しますか？')){
                document.getElemenById('form_delete').submit();
            }
        }
        </script>
        
    </body>
</html>

