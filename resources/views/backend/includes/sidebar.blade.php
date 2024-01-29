<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        {{-- {{route('dashboard')}} --}}
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            {{-- {{route('dashboard')}} --}}
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Galeri -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#collapseGaleri">
            {{-- {{route('gallery.index')}} --}}
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span>
        </a>
        <div class="collapse" id="collapseGaleri">
            <ul class="nav">
                <!-- Add Galeri related items here -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Sub Item 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Sub Item 2
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <!-- Nav Item - Kategori Galeri -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#collapseKategoriGaleri">
            {{-- {{route('gallery.index')}} --}}
            <i class="fas fa-fw fa-images"></i>
            <span>Kategori Galeri</span>
        </a>
        <div class="collapse" id="collapseKategoriGaleri">
            <ul class="nav">
                <!-- Add Kategori Galeri related items here -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Sub Item 1
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Sub Item 2
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>
