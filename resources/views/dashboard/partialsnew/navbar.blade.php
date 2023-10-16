<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <ul class="navbar-nav  justify-content-start">
            <li class="nav-item d-flex align-items-center">
                <h5 class="justify-content-center mx-3 text-white mt-2">SI PERPUSTAKAAN | SMP Negeri 02 Kepahiang
                </h5>
            </li>
        </ul>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>

            <ul class="navbar-nav  justify-content-end">

                <li class="nav-item d-flex align-items-center">
                    <h5 class="justify-content-center mx-3 text-white mt-2">Hai, {{ auth()->user()->nama }}</h5>
                </li>
                <li class="nav-item d-flex align-items-center"> </li>
                <li class="nav-item d-flex align-items-center">
                    <h6 class="justify-content-center mx-3 text-white mt-2">{{ auth()->user()->jabatan }}</h5>
                </li>
                <li class="nav-item d-flex align-items-center">
                </li>
                <li class="nav-item d-flex align-items-center">
                    <div class="d-flex justify-content-center mx-2">
                        <form class="d-flex" action="/logout" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">Keluar</button>
                        </form>

                    </div>

                </li>

            </ul>
        </div>
    </div>
</nav>
