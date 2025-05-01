<div class="table-responsive mt-4">
    <table class="table table-bordered table-hover">
        <thead class="table-light">
        <tr>
            @foreach ($students[0] as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach (array_slice($students, 1) as $student)
            <tr>
                @foreach ($student as $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
