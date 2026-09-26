<nav class="navbar navbar-expand-lg py-3">
    <div class="container" style="max-width: 1000px;">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="/user" style="color: #2b3674; font-size: 1.25rem;">
            <div class="bg-primary text-white d-flex align-items-center justify-content-center rounded-3" style="width: 40px; height: 40px; background-color: #4318ff !important;">
                <i class="bi bi-layers-fill"></i>
            </div>
            DataSpace
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center gap-3">
                <li class="nav-item">
                    <a class="nav-link fw-medium text-secondary" href="/user">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-brand px-4 py-2 d-flex align-items-center gap-2" href="{{ route('user.create') }}">
                        <i class="bi bi-plus-lg"></i> User Baru
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>