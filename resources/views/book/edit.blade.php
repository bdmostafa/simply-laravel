<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Book</title>
</head>
<body>
    <h1>Create New Book</h1>
    <form action="{{ route('book.update', $book->id) }}" method="post">
    @method('put')
    @csrf
    <input type="text" name="name" id="" value="{{$book->name}}"><br>
        <input type="text" name="author_name" id="" value="{{$book->author_name}}"><br>
            <input type="date" name="publish_date" value="{{$book->publish_date}}">
            <button type="submit">Submit</button>
    </form>
</body>
</html>