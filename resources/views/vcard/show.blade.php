@extends('layouts.app')

@section('content')

<div vocab="http://microformats.org/wiki/h-card">
    <div class="ui card h-card">
        <div class="image">
            {{-- [Photo] --}}
            @if ($vcard->email)
                <img class="u-photo" src="@get_gravatar_uri($vcard->email)" alt="{{ $vcard->given_name }} {{ $vcard->family_name }}">
            @else
                <img class="u-photo" src="@get_default_gravatar_uri()" alt="{{ $vcard->given_name }} {{ $vcard->family_name }}">
            @endif
        </div>
        <div class="content">
            <div class="header">
                {{-- [Family Name], [Given Name] --}}
                <span class="p-family-name">{{ $vcard->family_name }}</span>, <span class="p-given-name">{{ $vcard->given_name }}</span>
            </div>

            {{-- [Title] --}}
            <div class="meta p-job-title">
                {{ $vcard->title }}
            </div>

            {{-- [Adr] --}}
            <div class="description p-adr h-adr">
                {{-- [Street Address] --}}
                @if ($vcard->street_address)
                    <span class="p-street-address" contenteditable>{{ $vcard->street_address }}</span><br>
                @endif

                {{-- [Extended Address] --}}
                @if ($vcard->extended_address)
                    <span class="p-extended-address">{{ $vcard->extended_address }}</span><br>
                @endif

                {{-- [Locality] --}}
                @if ($vcard->locality)
                    <span class="p-locality">{{ $vcard->locality }}</span>,&nbsp;
                @endif

                {{-- [Region] --}}
                @if ($vcard->region)
                    <span class="p-region">{{ $vcard->region }}</span>&nbsp;
                @endif

                {{-- [Postal Code] --}}
                @if ($vcard->postal_code)
                    <span class="p-postal-code">{{ $vcard->postal_code }}</span><br>
                @endif

                {{-- [Tel] --}}
                @if ($vcard->tel)
                    <a class="p-tel" href="tel:@format_tel($vcard->tel)">@format_tel($vcard->tel)</a><br>
                @endif

                {{-- [Email] --}}
                @if ($vcard->email)
                    <a class="u-email"  href="mailto:{{ $vcard->email }}">{{ $vcard->email }}</a>
                @endif
            </div> <!-- .description -->
        </div> <!-- .content -->

        <div class="extra content">
            {{-- [Org] --}}
            @if ($vcard->org)
                <span class="right floated p-org">{{ $vcard->org }}&nbsp;<i class="building icon"></i></span>
            @else
                <span class="right floated">Person&nbsp;<i class="user icon"></i></span>
            @endif
        </div> <!-- .extra.content -->
    </div>
</div>

@endsection
