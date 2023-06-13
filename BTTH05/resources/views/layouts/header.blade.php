<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('articles.index')}}">Manager</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex" role="search">
                <input class="form-control me-0 input-group input-group-lg " style="width:500px;margin-left:200px"
                    type="search" placeholder="Tìm kiếm" aria-label="Search">
                <button class="btn btn-outline-info" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <button class="btn btn-outline-info " style="margin-left:200px" type="submit"><i class="bi bi-person-fill">
                    Đăng
                    nhập</i></button>

            <button class="btn btn-outline-info" style="margin-left:20px" type="submit"><i class="bi bi-cart-fill"></i>
                Giỏ hàng</button>

        </div>
    </div>
</nav>