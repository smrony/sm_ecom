<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false"><span data-feather="file"></span>Category</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="{{route('categories.create')}}">Add Category</a></li>
                    <li><a class="dropdown-item" href="{{route('categories.index')}}">Category List</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false"><span data-feather="file"></span>Brand</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">Add Brand</a></li>
                    <li><a class="dropdown-item" href="#">Brand List</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false"><span data-feather="shopping-cart"></span>
                    Products</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">Add Product</a></li>
                    <li><a class="dropdown-item" href="#">Product List</a></li>
                    <li><a class="dropdown-item" href="#">Product Attribute</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Coupon
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Delivery Option
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false"><span data-feather="bar-chart-2"></span>
                    Reports</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">Stock</a></li>
                    <li><a class="dropdown-item" href="#">Sales</a></li>
                    <li><a class="dropdown-item" href="#">Quick</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false"><span data-feather="shopping-cart"></span>
                    Users</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">Add User</a></li>
                    <li><a class="dropdown-item" href="#">User List</a></li>
                    <li><a class="dropdown-item" href="#">User Role</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li>
        </ul>
    </div>
</nav>