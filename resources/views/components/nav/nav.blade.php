<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/storex-logo.png') }}" alt="Storex Logo">
            </a>

            <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex justify-content-sm-between text-sm-center">
                {{$slot}}
            </ul>
        </div>
    </div>
</nav>