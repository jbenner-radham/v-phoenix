<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">vPhoenix</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('vcards.index') }}">vCards</a>
                <li><a href="{{ route('events.index') }}">Events</a>
                <li><a href="{{ route('calendars.index') }}">Calendar</a>
                <li><a href="{{ route('leads.index') }}">Leads</a>
            </ul>
        </div>
    </div>
</nav>
