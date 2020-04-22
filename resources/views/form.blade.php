<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h2>About Form</h2>
        <form action="{{ route('preview') }}" method="post">
            @csrf
            <input type="text" name="full_name" placeholder="Your name">
            <br>
            <input type="email" name="email_address" placeholder="Your email">
            <br>
            <input type="number" name="phone_number" placeholder="Your mobile no.">
            <br>
            <button>Preview</button>
        </form>
    </body>
</html>