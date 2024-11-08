<li class="sidebar-header">
    Pages
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard') }}">
        <i class="align-middle" data-feather="sliders"></i> <span
            class="align-middle">Dashboard</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('dashboard.sliders.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.sliders.index') }}">
        <i class="align-middle" data-feather="image"></i> <span class="align-middle">Slider Welcome</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('dashboard.agenda.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.agenda.index') }}">
        <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Agenda</span>
    </a>
</li>


<li class="sidebar-item ">
    <a class="sidebar-link {{ request()->routeIs('dashboard.data.center.*') || request()->routeIs('dashboard.category.data.center.*') ? 'collapsed' : '' }}" href="#dataCenterDropdown" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dataCenterDropdown">
        <i class="align-middle" data-feather="database"></i> <span class="align-middle">Data Center</span>
        <i class="align-middle float-end" data-feather="chevron-right"></i>
    </a>
    <ul class="collapse list-unstyled mx-4 {{ request()->routeIs('dashboard.data.center.*') || request()->routeIs('dashboard.category.data.center.*') ? 'show' : '' }}" id="dataCenterDropdown">
        <li class="sidebar-item {{ request()->routeIs('dashboard.category.data.center.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.category.data.center.index') }}">
                <i class="align-middle" data-feather="list"></i><span class="align-middle">Kategori Data</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->routeIs('dashboard.data.center.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.data.center.index') }}">
                <i class="align-middle" data-feather="database"></i><span class="align-middle">Data Center</span>
            </a>
        </li>
    </ul>
</li>

<li class="sidebar-item ">
    <a class="sidebar-link {{ request()->routeIs('dashboard.post.*') ? 'collapsed' : '' }}" href="#post" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="post">
        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Postingan</span>
        <i class="align-middle float-end" data-feather="chevron-right"></i>
    </a>
    <ul class="collapse list-unstyled mx-4 {{ request()->routeIs('dashboard.post.*') ? 'show' : '' }}" id="post">
        <li class="sidebar-item {{ request()->routeIs('dashboard.post.category.*') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.post.category.index') }}">
                <i class="align-middle" data-feather="list"></i><span class="align-middle">Kategori Postingan</span>
            </a>
        </li>
        <li class="sidebar-item {{ request()->routeIs('dashboard.post.news.index') ? 'active' : '' }}">
            <a class="sidebar-link" href="{{ route('dashboard.post.news.index') }}">
                <i class="align-middle" data-feather="book"></i><span class="align-middle">Postingan</span>
            </a>
        </li>
    </ul>
</li>

<li class="sidebar-item {{ request()->routeIs('dashboard.penghargaan.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('dashboard.penghargaan.index') }}">
        <i class="align-middle" data-feather="award"></i> <span class="align-middle">Penghargaan</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="pages-blank.html">
        <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
    </a>
</li>

<li class="sidebar-header">
    Tools & Components
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-buttons.html">
        <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-forms.html">
        <i class="align-middle" data-feather="check-square"></i> <span
            class="align-middle">Forms</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-cards.html">
        <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="ui-typography.html">
        <i class="align-middle" data-feather="align-left"></i> <span
            class="align-middle">Typography</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="icons-feather.html">
        <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
    </a>
</li>

<li class="sidebar-header">
    Plugins & Addons
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="charts-chartjs.html">
        <i class="align-middle" data-feather="bar-chart-2"></i> <span
            class="align-middle">Charts</span>
    </a>
</li>

<li class="sidebar-item">
    <a class="sidebar-link" href="javascript:void(0)">
        <i class="align-middle"></i> <span class="align-middle">Pangaturan</span>
    </a>

    <ul class="navbar-nav">
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('dashboard.roles.index') }}">Role</a>
        </li>
    </ul>
</li>
