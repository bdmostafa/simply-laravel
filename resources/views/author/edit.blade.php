<html>
    <head>
        <title>Edit Author</title>
    </head>
    <body>
        <h2>Edit Author</h2>
        <form action="{{ route('author.update', $author->id) }}" method="post">
            @csrf
            @method('put')
            <input type="text" name="name" value="{{ $author->name }}" placeholder="Your author name">
            <br>
            <input type="email" name="email" value="{{ $author->email }}" placeholder="Enter your email">
            <br>
            <input type="date" name="dob" value="{{ $author->dob }}" placeholder="Select Date of Birth">
            <br>
            <button type="submit">Update</button>
        </form>
    </body>
</html>