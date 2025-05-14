<table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>Предмет</th>
        <th>Пріоритет не вибрано</th>
        <th>Пріоритет 1</th>
        <th>Пріоритет 2</th>
        <th>Пріоритет 3</th>
        <th>Пріоритет 4</th>
        <th>Пріоритет 5</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($subjects as $row)
        @php
            $total = $row->priority_0 + $row->priority_1 + $row->priority_2 +
                     $row->priority_3 + $row->priority_4 + $row->priority_5;
        @endphp
        <tr>
            <td> <a href="{{ url('/elective-subject-post/' . $postId . '/' . $row->elective_subject_id) }}">
                    {{ $row->subject_name }}
                </a></td>
            <td>{{ $row->priority_0 }}</td>
            <td>{{ $row->priority_1 }}</td>
            <td>{{ $row->priority_2 }}</td>
            <td>{{ $row->priority_3 }}</td>
            <td>{{ $row->priority_4 }}</td>
            <td>{{ $row->priority_5 }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
