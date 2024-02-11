<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form method="post" {{ route('post.update', $post->id) }} enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>
        <div>
            <label for="content">Content</label>
            <textarea type="text" name="content" id="content" placeholder="Content" >{{ $post->content }}</textarea></textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" id="image" placeholder="Image" value="{{ $post->image }}">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
