<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">User</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/product') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/input') }}">Inputs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/output') }}">Outputs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/stock') }}">Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/supplier') }}">Suppliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/measure') }}">Measure</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/rol') }}">Rol</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reports</a>
            </li>
        </ul>
        </div>
    </div>
</nav>