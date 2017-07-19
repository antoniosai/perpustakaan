<!-- menubar area start -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{ App\Info::all()->first()->name }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('home.index') }}">Beranda</a></li>
            <li><a href="{{ route('home.buku') }}">Daftar Buku</a></li>
            <li><a href="{{ route('home.user') }}">Daftar Perujuk</a></li>
            <li><a href="#">Informasi</a></li>
        </ul>
        <div class="col-sm-3 col-md-3 pull-right">
            <form action="{!! route('search') !!}" class="navbar-form" role="search" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="query" id="srch-term" required>
                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<!-- menubar area end -->