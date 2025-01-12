<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <!-- Logo -->
            <img src="{{ asset('tabler/static/logo.svg') }}" alt="Logo" class="navbar-brand-image">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Icon -->
                            <i class="ti ti-dashboard"></i>
                        </span>
                        <span class="nav-link-title">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="nav-link-title">
                            Usuários
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
