<nav id="sidebar-nav">

    <ul class="nav nav-pills nav-stacked" id="stacked-menu">

        <li>
            <a class="nav-container" data-toggle="collapse" data-parent="#stacked-menu" href="#entities">
                <i class="users icon"></i> Entities
                <div class="caret-container"><span class="caret arrow"></span></div>
            </a>
            <ul class="nav nav-pills nav-stacked collapse collapse-parent" id="entities">
                <li class="sub-pill" role="presentation"><a href="{{ route('entities.index') }}">All</a></li>
                <li class="sub-pill" role="presentation"><a href="{{ route('individuals') }}">Individuals</a></li>
                <li class="sub-pill" role="presentation"><a href="{{ route('groups') }}">Groups</a></li>
                <li class="sub-pill" role="presentation"><a href="{{ route('organizations') }}">Organizations</a></li>
                <li class="sub-pill" role="presentation"><a href="{{ route('locations') }}">Locations</a></li>
                <li class="sub-pill" role="presentation"><a href="{{ route('devices') }}">Devices</a></li>
            </ul>
        </li>

        <li class="" role="presentation"><a href="{{ route('events.index') }}"><i class="calendar outline icon"></i> Events</a></li>
        <li class="" role="presentation"><a href="{{ route('calendars.index') }}"><i class="calendar icon"></i> Calendar</a></li>
        <li class="" role="presentation"><a href="{{ route('leads.index') }}"><i class="fire icon"></i> Leads</a></li>
        <li class="" role="presentation"><a href="{{ route('opportunities.index') }}"><i class="money icon"></i> Opportunities</a></li>

        <li class="nav-divider">

        <li class="" role="presentation"><a href="#"><i class="options icon"></i> Admin Dashboard</a></li>

    </ul>

</nav>
