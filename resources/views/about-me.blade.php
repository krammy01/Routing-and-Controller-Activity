<!DOCTYPE html>
<html>
<head>
    <title>About me</title>
</head>
<body>
    <h1>{{ $data }}</h1>
    <a href="{{ route('about-me') }}"><button>About Me</button></a>
    <a href="{{ route('skills') }}"><button>Skills</button></a>
    <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>
</body>
</html>
