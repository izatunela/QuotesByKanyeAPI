<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reports</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>URL</th>
            <th>Http Code</th>
            <th>Total time</th>
            <th>Download size</th>
            <th>Download speed</th>
            <th>Created at</th>
        </tr>
        @foreach($data as $report)
        <tr>
            <td>{{$report['id']}}</td>
            <td>{{$report['url']}}</td>
            <td>{{$report['http_code']}}</td>
            <td>{{$report['total_time']}}</td>
            <td>{{$report['size_download']}}</td>
            <td>{{$report['speed_download']}}</td>
            <td>{{$report['created_at']}}</td>
        </tr>
        @endforeach
      </table>
</body>
</html>