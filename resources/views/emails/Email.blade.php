<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>


<table>
    <thead>
    <tr>
        <th>Number lec</th>
        <th>Name Group</th>
        <th>Name Subj</th>
        <th>Name Teacher</th>
        <th>Name Adutiorie</th>
    </tr>
    </thead>
    <tbody>
{{--    @foreach ($group as $item)--}}
{{--        @foreach ($item->groups as $studenta)--}}
{{--        <tr>--}}
{{--            <td>{{ $studenta->name_student}}</td>--}}
{{--            <td>{{ $item->name_group}}</td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--    @endforeach--}}
{{--    @foreach ($student as $item1)--}}
{{--            <tr>--}}
{{--                <td>{{ $item1->name_student}}</td>--}}
{{--                <td>{{ $item1->students->name_group}}</td>--}}
{{--            </tr>--}}
{{--    @endforeach--}}
    @foreach ($rosclad as $item2)
        <tr>
            <td>{{ $item2->numb_lec}}</td>
            <td>{{ $item2->groups->name_group}}</td>
            <td>{{ $item2->subjects->name_subj}}</td>
            <td>{{ $item2->teachers->name_teacher}}</td>
            <td>{{ $item2->auditoris->name_aud}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
