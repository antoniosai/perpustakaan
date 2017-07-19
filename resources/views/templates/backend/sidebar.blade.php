<ul class="nav nav-list">
    <li class="active">
        <a href="index.html">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>
    


    
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-database"></i>

            <span class="menu-text">Master Data</span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{ route('admin.buku') }}">
                    <i class="menu-icon fa fa-book"></i>
                    Data Buku
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{ route('admin.user') }}">
                    <i class="menu-icon fa fa-users"></i>
                    Data Perujuk / User
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="error-500.html">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Informasi
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{ route('admin.category') }}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Kategori
                </a>

                <b class="arrow"></b>
            </li>

        </ul>
    </li>
    <li>
        <a href="{{ route('admin.info') }}">
            <i class="menu-icon fa fa-wrench"></i>
            <span class="menu-text"> Pengaturan </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li>
        <a href="index.html">
            <i class="menu-icon fa fa-question-circle"></i>
            <span class="menu-text"> Bantuan </span>
        </a>

        <b class="arrow"></b>
    </li>
</ul><!-- /.nav-list -->
