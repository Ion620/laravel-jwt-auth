<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
    <style>
        caption{
            font-size: 35px;
            font-weight: 900;
        }
        table{
            table-layout: fixed;
            text-align: center;
            width: 100%;
            border-collapse: collapse;
            border: 3px solid purple;

        }
        thead th{
            background-color: red;
        }
        tbody tr {
          background-color: cadetblue;


        }
        table, th, td {
            border: 1px solid black;
        }
        th, td{
            padding: 20px;
        }
    </style>
</head>
<body>


<table>

        @foreach($rosclad as $key => $value)
            @if ($loop->first)
                <caption>{{ $value->teachers->name_teacher}}</caption>
            @endif
        @endforeach

    <thead>
    <tr>
        <th>Number lec</th>
        <th>Name Group</th>
        <th>Name Subj</th>
        <th>Name Auditorie</th>
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
            <td>{{ $item2->subjects->name_subj}} <br>{{ $item2->day}} week </td>

            <td>{{ $item2->auditoris->name_aud}}</td>
        </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
