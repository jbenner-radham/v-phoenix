<!DOCTYPE html>
{{--
    Phillips, A. and Davis, M.,
    "Tags for Identifying Languages; Matching of Language Tags", BCP 47,
    RFC 4647, September 2009; RFC 5646, September 2006,
    <http://www.rfc-editor.org/info/bcp47>.
--}}
<html lang="en" prefix="dcterms: http://purl.org/dc/terms/ og: http://ogp.me/ns#">

@include('_includes.head')

@include('_includes.nav')

    <body>
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-md-3">
                    @include('_includes.sidebar')
                </div>
                <div id="content" class="col-md-9">
                    @include('_includes.flashes')
                    @yield('content')
                </div>
            </div>
        </div>

        @include('_includes.footer')

        <script src="/js/semantic.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        @yield('bottom_scripts')
    </body>
</html>
