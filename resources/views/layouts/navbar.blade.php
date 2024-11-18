<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#483d8b">
    <div class="container">
        <a class="navbar-brand fw-bold fst-italic" href="/">Downfall Music</a>
        <a class="navbar-toggler fw-bold text-white text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">☰</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase fw-bold">
                <li class="nav-item me-3"><a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item me-3"><a class="nav-link active" href="/features">Features</a></li>
                <li class="nav-item me-3"><a class="nav-link active" href="/article">Articles</a></li>
                <li class="nav-item">
                    <form action="/search" method="GET">
                            <div class="form-group ms-auto">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="Search .." value="{{ old('search') }}" class="form-control rounded-0"/>
                                        <!--<button type="submit" class="btn rounded-0" style="background-color:#483d8b">
                                                        <i class="fas fa-search"></i>
                                            </button>-->
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container py-5 col-xxl-6">
    
    <div class="col-lg-8">
        <h4 class="fw-bold text-white  text-capitalize fst-italic">@yield('page_header', 'Downfall Music')</h4>
    </div>