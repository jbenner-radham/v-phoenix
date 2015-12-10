<head>
    {{--
        <https://html.spec.whatwg.org/multipage/semantics.html#character-encoding-declaration>
    --}}
    <meta charset="utf-8">
    <meta property="og:locale" content="en_US">
    {{--
        Microsoft Corporation,
        "X-UA-Compatibility Meta Tag and HTTP Response Header", MS-IEDOCO,
        Short ID MSDN ff955275, October 2015,
        <https://msdn.microsoft.com/en-us/library/ff955275%28v=vs.85%29.aspx>.
        ---
        <https://html.spec.whatwg.org/multipage/semantics.html#pragma-directives>.
    --}}
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--
        Wolf, M. and Wicksteed, C.,
        "Date and Time Formats", W3CDTF,
        Revision 1.2, September 1997,
        <http://www.w3.org/TR/NOTE-datetime>.
    --}}
    <meta property="dcterms:date:modified" content="@yield('modifiedTime')">
    <title>@yield('title')</title>
    {{--
        Ohye, M. and J. Kupke,
        "The Canonical Link Relation", RFC 6596,
        DOI 10.17487/RFC6596, April 2012,
        <http://www.rfc-editor.org/info/rfc6596>.
    --}}
    <link rel="canonical" href="@yield('canonicalLink')">
    <link rel="stylesheet" href="/css/semantic.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">--}}
    @yield('stylesheets')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    @yield('top_scripts')
</head>