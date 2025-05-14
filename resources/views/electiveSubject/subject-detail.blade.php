<div class="container">



    <h3 class="mt-5">Студенти за пріоритетами:</h3>
    @for ($i = 0; $i <= 5; $i++)
        <div class="mb-4">
            <h5 class="text-primary">Пріоритет {{ $i }}</h5>
            @if(isset($studentsByPriority[$i]) && $studentsByPriority[$i]->isNotEmpty())
                <table class="table table-hover table-sm">
                    <thead class="table-light">
                    <tr>
                        <th>ПІБ</th>
                        <th>Спеціальність</th>
                        <th>Група</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($studentsByPriority[$i] as $student)
                        <tr>
                            <td>{{ $student->full_name }}</td>
                            <td>{{ $student->specialty }}</td>
                            <td>{{ $student->group }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Немає студентів для цього пріоритету.</p>
            @endif
        </div>
    @endfor

</div>
