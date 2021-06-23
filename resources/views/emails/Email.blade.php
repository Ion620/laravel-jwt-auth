<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>


<table>
    <thead>
    <tr>
        <th>Name Student</th>
        <th>Name Group</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($student as $row)
        @foreach ($group as $rowe)
        <tr>
            <td>{{ $row->name_student}}</td>
            <td>{{ $rowe->name_group}}</td>
        </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
</body>
</html>
