@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div vocab="http://microformats.org/wiki/h-card">
            <div class="ui card h-card">
                <div class="image">
                    {{-- [Photo] --}}
                    @if ($lead->entity->email)
                        <img class="u-photo" src="@get_gravatar_uri($lead->email)" alt="{{ $lead->entity->given_name }} {{ $lead->entity->family_name }}">
                    @else
                        <img class="u-photo" src="@get_default_gravatar_uri()" alt="{{ $lead->entity->given_name }} {{ $lead->entity->family_name }}">
                    @endif
                </div>
                <div class="content">
                    <div class="header">
                        {{-- [Family Name], [Given Name] --}}
                        <span class="p-family-name">{{ $lead->entity->family_name }}</span>, <span class="p-given-name">{{ $lead->entity->given_name }}</span>
                    </div>

                    {{-- [Title] --}}
                    <div class="meta p-job-title">
                        {{ $lead->entity->title }}
                    </div>

                    {{-- [Adr] --}}
                    <div class="description p-adr h-adr">
                        {{-- [Street Address] --}}
                        @if ($lead->entity->street_address)
                            <span class="p-street-address" contenteditable>{{ $lead->entity->street_address }}</span><br>
                        @endif

                        {{-- [Extended Address] --}}
                        @if ($lead->entity->extended_address)
                            <span class="p-extended-address">{{ $lead->entity->extended_address }}</span><br>
                        @endif

                        {{-- [Locality] --}}
                        @if ($lead->entity->locality)
                            <span class="p-locality">{{ $lead->entity->locality }}</span>,&nbsp;
                        @endif

                        {{-- [Region] --}}
                        @if ($lead->entity->region)
                            <span class="p-region">{{ $lead->entity->region }}</span>&nbsp;
                        @endif

                        {{-- [Postal Code] --}}
                        @if ($lead->entity->postal_code)
                            <span class="p-postal-code">{{ $lead->entity->postal_code }}</span><br>
                        @endif

                        {{-- [Tel] --}}
                        @if ($lead->entity->tel)
                            <a class="p-tel" href="tel:@format_tel($lead->entity->tel)">@format_tel($lead->entity->tel)</a><br>
                        @endif

                        {{-- [Email] --}}
                        @if ($lead->entity->email)
                            <a class="u-email"  href="mailto:{{ $lead->entity->email }}">{{ $lead->entity->email }}</a>
                        @endif
                    </div> <!-- .description -->
                </div> <!-- .content -->

                <div class="extra content">
                    {{-- [Org] --}}
                    @if ($lead->entity->org)
                        <span class="right floated p-org">{{ $lead->entity->org }}&nbsp;<i class="building icon"></i></span>
                    @else
                        <span class="right floated">Person&nbsp;<i class="user icon"></i></span>
                    @endif
                </div> <!-- .extra.content -->
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h3>Lead Details</h3>

        <table class="table">
            <tr>
                <td><strong>Source:</strong></td>
                <td>@titleize( $lead->source->name )</td>
            </tr>
            <tr>
                <td><strong>Status:</strong></td>
                <td>@titleize( $lead->status->name )</td>
            </tr>
            <tr>
                <td><strong>Created:</strong></td>
                <td>{{ date('F d, Y', strtotime($lead->created_at)) }}</td>
            </tr>
            <tr>
                <td><strong>Last Updated:</strong></td>
                <td>{{ date('F d, Y', strtotime($lead->updated_at)) }}</td>
            </tr>
            <tr>
                <td><strong>Email Opt-out:</strong></td>
                <td>{{ $lead->email_opt_out ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <td><strong>Include Packing:</strong></td>
                <td>{{ $lead->include_packing ? 'Yes' : 'No' }}</td>
            </tr>

        </table>
        <h5>Description</h5>
        <div class="well">
            {{ $lead->description }}
        </div>
    </div>
</div>

@endsection
