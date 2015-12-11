@extends('layouts.app')

@section('content')

<div vocab="http://microformats.org/wiki/h-card">
    <div class="ui card h-card">
        <div class="image">
            {{-- [Photo] --}}
            @if ($entity->email)
                <img class="u-photo" src="@get_gravatar_uri($entity->email)" alt="{{ $entity->given_name }} {{ $entity->family_name }}">
            @else
                <img class="u-photo" src="@get_default_gravatar_uri()" alt="{{ $entity->given_name }} {{ $entity->family_name }}">
            @endif
        </div>
        <div class="content">
            <div class="header">
                {{-- [Family Name], [Given Name] --}}
                <span class="p-family-name">{{ $entity->family_name }}</span>, <span class="p-given-name">{{ $entity->given_name }}</span>
            </div>

            {{-- [Title] --}}
            <div class="meta p-job-title">
                {{ $entity->title }}
            </div>

            {{-- [Adr] --}}
            <div class="description p-adr h-adr">
                {{-- [Street Address] --}}
                @if ($entity->street_address)
                    <span class="p-street-address" contenteditable>{{ $entity->street_address }}</span><br>
                @endif

                {{-- [Extended Address] --}}
                @if ($entity->extended_address)
                    <span class="p-extended-address">{{ $entity->extended_address }}</span><br>
                @endif

                {{-- [Locality] --}}
                @if ($entity->locality)
                    <span class="p-locality">{{ $entity->locality }}</span>,&nbsp;
                @endif

                {{-- [Region] --}}
                @if ($entity->region)
                    <span class="p-region">{{ $entity->region }}</span>&nbsp;
                @endif

                {{-- [Postal Code] --}}
                @if ($entity->postal_code)
                    <span class="p-postal-code">{{ $entity->postal_code }}</span><br>
                @endif

                {{-- [Tel] --}}
                @if ($entity->tel)
                    <a class="p-tel" href="tel:@format_tel($entity->tel)">@format_tel($entity->tel)</a><br>
                @endif

                {{-- [Email] --}}
                @if ($entity->email)
                    <a class="u-email"  href="mailto:{{ $entity->email }}">{{ $entity->email }}</a>
                @endif
            </div> <!-- .description -->
        </div> <!-- .content -->

        <div class="extra content">
            {{-- [Org] --}}
            @if ($entity->org)
                <span class="right floated p-org">{{ $entity->org }}&nbsp;<i class="building icon"></i></span>
            @else
                <span class="right floated">Person&nbsp;<i class="user icon"></i></span>
            @endif
        </div> <!-- .extra.content -->
    </div>
</div>

@endsection
