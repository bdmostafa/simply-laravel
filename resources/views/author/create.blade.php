<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h2>Create new Author</h2>
        <form action="{{ route('author.store') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your author name">
            <br>
            <input type="email" name="email" placeholder="Enter your email">
            <br>
            <input type="date" name="dob" placeholder="Select Date of Birth">
            <br>
            <button type="submit">Store</button>
        </form>
    </body>
</html>