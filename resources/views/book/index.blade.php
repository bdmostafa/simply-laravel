<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
</head>
<body>
    <h1>Book list</h1>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publish Date</th>
            <th>Action</th>
        </tr>
    @foreach($books as $book)
    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->author_name}}</td>
        <td>{{$book->publish_date}}</td>
        <td>
            <a href="{{ route('book.edit', $book->id) }}">Edit</a>
            <form action="{{ route('book.delete', $book->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
            
            </form>
        </td>
    </tr>
    @endforeach

    </table>
</body>
</html>