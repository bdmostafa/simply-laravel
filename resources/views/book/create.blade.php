<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Book</title>
</head>
<body>
    <h1>Create New Book</h1>
    <form action="{{ route('book.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="" placeholder="Enter book name"><br>
        <input type="text" name="author_name" id="" placeholder="Enter author name"><br>
            <input type="date" name="publish_date">
            <button type="submit">Submit</button>
    </form>
</body>
</html>