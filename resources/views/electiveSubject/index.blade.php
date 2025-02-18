<div class="container mt-4">
    <form action="#">
    <ul class="list-group">
        @foreach ($elective_subjects as $elective_subject)

            <li class="list-group-item d-flex justify-content-start align-items-center">
            <select class="form-select w-auto">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <span  class="ms-4">{{ $elective_subject['name'] }}</span>
        </li>
        @endforeach
        <li class="list-group-item d-flex justify-content-start align-items-center">
            <button type="submit" class="btn btn-primary">Відправити</button>
        </li>
    </ul>

    </form>
</div>
