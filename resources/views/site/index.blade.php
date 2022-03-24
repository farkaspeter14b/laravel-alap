@section("content")
    <table id="students">
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Javítás</th>
            <th>Nap</th>
            <th>Időpont</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>
                    @if($student->inproved == 1)
                        return '<p style="color: red">+</p>';
                    @else
                        return '<p>-</p>';
                    @endif
                </td>
                <td>{{$student->date}}</td>
                <td>{{$student->time}}</td>
            </tr>
        @endforeach
    </table>
@section