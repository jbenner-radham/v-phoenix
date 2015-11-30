@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1>vCard #{{ $vcard->id }} Yoz!</h1>
    {!! dump($vcard) !!}
    <div class="h-card">
        <p style="margin-bottom: 0"><span class="p-family-name">{{ $vcard->family_name }}</span>, <span class="p-given-name">{{ $vcard->given_name }}</span></p>
        <span class="p-job-title">{{ $vcard->title }}</span><br>
        <a class="u-email"  href="mailto:{{ $vcard->email }}">{{ $vcard->email }}</a>
        <div><span class="p-street-address">{{ $vcard->street_address }}</span></div>
        <div><span class="p-locality">{{ $vcard->locality }}</span>, <span class="p-region">{{ $vcard->region }}</span></div>
    </div>
</div>

@endsection
