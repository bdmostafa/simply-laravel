<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h2>Congratulations! Your information is:</h2>
        <hr>
        

        @foreach($results as $result)
            
                <p>ID: {{ $result->id }} </p>
                <p>Name: {{ $result->name }} </p>
                <p>Email: {{ $result->email }} </p>
                <p>Mobile: {{ $result->phone }} </p>
            
        @endforeach

        <a href=" {{ route('form') }}">Back to Form Page</a>
    </body>
</html>