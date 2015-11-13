<!DOCTYPE html>
{{--
    Phillips, A. and Davis, M.,
    "Tags for Identifying Languages; Matching of Language Tags", BCP 47,
    RFC 4647, September 2009; RFC 5646, September 2006,
    <http://www.rfc-editor.org/info/bcp47>.
--}}
<html lang="en" prefix="dcterms: http://purl.org/dc/terms/ og: http://ogp.me/ns#">
    <head>
        {{--
            <https://html.spec.whatwg.org/multipage/semantics.html#character-encoding-declaration>
        --}}
        <meta charset="utf-8">
        {{--
            Microsoft Corporation,
            "X-UA-Compatibility Meta Tag and HTTP Response Header", MS-IEDOCO,
            Short ID MSDN ff955275, October 2015,
            <https://msdn.microsoft.com/en-us/library/ff955275%28v=vs.85%29.aspx>.
            ---
            <https://html.spec.whatwg.org/multipage/semantics.html#pragma-directives>.
        --}}
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        {{--
            Wolf, M. and Wicksteed, C.,
            "Date and Time Formats", W3CDTF,
            Revision 1.2, September 1997,
            <http://www.w3.org/TR/NOTE-datetime>.
        --}}
        <meta property="dcterms:modified" content="@yield('modifiedTime')">
        <title>@yield('title')</title>
        {{--
            Ohye, M. and J. Kupke,
            "The Canonical Link Relation", RFC 6596,
            DOI 10.17487/RFC6596, April 2012,
            <http://www.rfc-editor.org/info/rfc6596>.
        --}}
        <link rel="canonical" href="@yield('canonicalLink')">
    </head>
    <body>
        @yield('content')
    </body>
</html>
