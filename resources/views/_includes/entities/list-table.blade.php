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
                <a class="btn btn-success" href="{{ route('entities.show', $entity->id) }}">
                    <i class="fa fa-eye"></i>
                </a>
                <a class="btn btn-warning" href="{{ route('entities.edit', $entity->id) }}">
                    <i class="fa fa-pencil"></i>
                </a>
                <form action="{{ route('delete-entity', $entity->id) }}" method="post" style="display:inline">
                    {{ csrf_field() }}
                    <button class="btn btn-danger"
                            type="button"
                            data-toggle="modal"
                            data-target="#confirm-delete"
                            data-title="Delete Entity"
                            data-message="Are you sure you want to delete this entity?">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>