<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Dashboard
                        </a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                        >
                            About us <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <a href="{{ route('about.index') }}" class="dropdown-item">About Us</a>
                            <a href="{{ route('gallery.index') }}" class="dropdown-item">About Us</a>
                        </div>
                    </li>
                



                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notice.index') }}">
                             Notice
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">
                            Contact
                        </a>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>
