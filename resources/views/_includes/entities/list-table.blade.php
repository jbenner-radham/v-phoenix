<a class="btn btn-default pull-right index-title" href="{{ route('entities.create') }}">Create Entity</a>

<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
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
            <td>
                <a class="btn btn-default" href="{{ route('entities.show', $entity->id) }}">View Details</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>