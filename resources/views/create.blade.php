
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                  <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                  <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea type="comment" name="post[body]" placeholder="今日も一日お疲れ様でした。"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            </div>
            <div>
                <input type="submit" value="保存"/>
            </div>
        </form>
            <div class="back">
                [<a href='/'>Back</a>]
            </div>
        
    </body>
</html>