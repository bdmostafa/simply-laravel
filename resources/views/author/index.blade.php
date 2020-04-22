<html>
    <head>
        <title>Lists of Authors</title>
    </head>
    <body>
        <a href=" {{ route('author.create') }}">Back to create author page</a>
        <h2>Authors Information</h2>
        <table border="1">
            <tr>
                <th> Name</th>
                <th> Email</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->dob }}</td>
                <td>
                    <a href="{{ route('author.edit', $author->id) }}">Edit</a>
                    ||
                    <form action="{{ route('author.destroy', $author->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Destroy</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>