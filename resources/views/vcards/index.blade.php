@extends('layouts.app')

@section('content')

<h1>VCard Index Yoz!</h1>
<p>Fo sho yolo or bolo.</p>

@foreach($vcards as $vcard)
    <li>
        <a href="{{ route('vcards.show', $vcard->id) }}">{!! $vcard->given_name . ' ' . $vcard->family_name !!}</a>
    </li>
@endforeach

@endsection
