<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="index.html" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong
                            class="text-primary">Bid</strong><strong>Spirit</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">B</strong><strong>S</strong></div>
                </a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <div class="right-menu list-inline no-margin-bottom">
                {{-- browser --}}
                <div class="list-inline-item"><a href="#" class="search-open nav-link"><i
                            class="icon-magnifying-glass-browser"></i></a></div>
                <!-- Log out -->
                <div class="list-inline-item logout">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            style="background-color: #64686b; color: white; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
