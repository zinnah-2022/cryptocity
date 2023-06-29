<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
            aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <h3 class="menu-title">Crypto City</h3><!-- /.menu-title -->
            <li class="active">
                <a href="{{ route('message.index') }}"> <i class="menu-icon fa fa-envelope-o"></i>Messages</a>
            </li>
            <li class="active">
                <a href="{{ route('setting.create') }}"> <i class="menu-icon fa fa-gear (alias)"></i>Setting </a>
            </li>
            <li class="active">
                <a href="{{ route('upama.index') }}"> <i class="menu-icon fa fa-bar-chart-o"></i>Up Comming AMA </a>
            </li>
            <li class="active">
                <a href="{{ route('alldone.index') }}"> <i class="menu-icon fa fa-briefcase"></i>All Done AMA </a>
            </li>
            <li class="active">
                <a href="{{ route('amarecap.index') }}"> <i class="menu-icon fa fa-edit (alias)"></i>AMA Recaps </a>
            </li>
            <li class="active">
                <a href="{{ route('team.index') }}"> <i class="menu-icon fa fa-group (alias)"></i>Team Member </a>
            </li>
            <h3 class="menu-title">Website</h3><!-- /.menu-title -->
            <li class="active">
                <a href="{{ route('mainpage') }}"> <i class="menu-icon fa fa-eye"></i>Go to Website </a>
            </li>

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>