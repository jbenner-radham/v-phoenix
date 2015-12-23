<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($entities as $entity)
        <tr>
            <td>
                <a href="{{ route('entities.show', $entity->id) }}">
                    {!! $entity->given_name . ' ' . $entity->family_name !!}
                </a>
            </td>
            <td>{!! $entity->email !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>