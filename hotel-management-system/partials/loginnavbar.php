<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="/">
            <h2 class="px-4"><img id="logo" src="https://img.icons8.com/cotton/64/null/hotel-building--v1.png" />Star Hotel</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light px-4" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light px-4" href="#">About</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right text-light px-2">
                <div class="px-2">
                    <i class="fa-regular fa-user"></i>
                </div>

                <?php session_start();
                echo $_SESSION['userId'];
                ?>
            </ul>
        </div>
    </div>
</nav>