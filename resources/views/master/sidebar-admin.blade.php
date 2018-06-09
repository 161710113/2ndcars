<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/admin/images/icon/LOGO.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{route ('berita.index')}}">
                                <i class="fas fa-newspaper"></i>Berita</a>
                        </li>
                        <li>
                            <a href="{{route ('mob.index')}}">
                                <i class="fas fa-car"></i>Mobil</a>
                        </li>
                        <li>
                            <a href="{{route ('tipe.index')}}">
                                <i class="far fa-check-square"></i>Tipe</a>
                        </li>
                        <li>
                            <a href="{{route ('merk.index')}}">
                                <i class="fas fa-star"></i>Merk</a>
                        </li>
                        <li>
                            <a href="{{route ('galeri.index')}}">
                                <i class="fas fa-photo"></i>Galeri</a>
                        </li>
                        <li>
                            <a href="{{route ('lokasi.index')}}">
                                <i class="fas fa-map-marker-alt"></i>Lokasi</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>