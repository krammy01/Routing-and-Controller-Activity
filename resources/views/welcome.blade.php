<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8fafc;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 1em;
        }
        a {
            text-decoration: none;
            color: #3490dc;
            font-weight: bold;
            margin: 0 1em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Website</h1>
        <p>This is a simple Laravel application to demonstrate routing and controllers.</p>
        <p>
            <a href="{{ route('aboutme') }}">About Me</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('hobbies') }}">Hobbies</a>
        </p>
    </div>
</body>
</html>
