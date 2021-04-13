<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quotes</title>
</head>
<body>
    <ol>
        @foreach($data as $quote)
            <li>{{$quote}}</li>
        @endforeach
    </ol>
    <form action="{{url('/')}}" method="get">
        <button>Refresh</button>
    </form>
</body>
</html>