@extends('layouts.app')

@section('content')

<div vocab="http://microformats.org/wiki/h-card">
    <div class="ui card h-card">
        <div class="image">
            <img class="u-photo" src="http://www.gravatar.com/avatar/{{ md5($vcard->email) }}?size=1024&default=identicon" alt="{{ $vcard->given_name }} {{ $vcard->family_name }}">
        </div>
        <div class="content">
            <div class="header">
                <span class="p-family-name">{{ $vcard->family_name }}</span>, <span class="p-given-name">{{ $vcard->given_name }}</span>
            </div>

            <div class="meta p-job-title">
                {{ $vcard->title }}
            </div>

            <div class="description">
                <!-- [Street Address] -->
                <span class="p-street-address">{{ $vcard->street_address }}</span><br>
                <!-- [Locality], [Region] [Postal Code] -->
                <span class="p-locality">{{ $vcard->locality }}</span>, <span class="p-region">{{ $vcard->region }}</span> <span class="p-postal-code">{{ $vcard->postal_code }}</span><br>
                <!-- [Tel] -->
                <a class="p-tel" href="tel:{{ $vcard->tel }}">{{ $vcard->tel }}</a><br>
                <!-- [Email] -->
                <a class="u-email"  href="mailto:{{ $vcard->email }}">{{ $vcard->email }}</a>
            </div> <!-- .description -->
        </div> <!-- .content -->

        <div class="extra content">
            <span class="right floated">IGC Software&nbsp;&nbsp;<i class="fa fa-building"></i></span>
        </div> <!-- .extra.content -->
    </div>
</div>

@endsection
