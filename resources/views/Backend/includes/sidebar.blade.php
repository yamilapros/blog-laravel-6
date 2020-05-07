<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu Navigation</div>
                <a class="nav-link" href="{{route('post.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle"></i></div>
                Posts
                </a>
                <a class="nav-link" href="{{route('category.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle"></i></div>
                Categories
                </a>
                <a class="nav-link" href="{{route('tag.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle"></i></div>
                Tags
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle"></i></div>
                Users
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Blog
        </div>
    </nav>
</div>