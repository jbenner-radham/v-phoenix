@extends('layouts.app')

@section('content')

<div vocab="http://microformats.org/wiki/h-card">
    <div class="ui card h-card">
        <div class="image">
            {{-- [Photo] --}}
            <img class="u-photo" src="http://www.gravatar.com/avatar/{{ md5($vcard->email) }}?size=1024&default=identicon" alt="{{ $vcard->given_name }} {{ $vcard->family_name }}">
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


                {{-- [Locality], [Region] [Postal Code] --}}
                {{--<span class="p-locality">{{ $vcard->locality }}</span>, <span class="p-region">{{ $vcard->region }}</span> <span class="p-postal-code">{{ $vcard->postal_code }}</span><br>--}}

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
            <span class="right floated">IGC Software&nbsp;<i class="fa fa-building"></i></span>
        </div> <!-- .extra.content -->
    </div>
</div>

@endsection
