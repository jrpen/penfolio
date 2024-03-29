<!DOCTYPE html>
<html lang="nl">
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a href="#main" class="d-flex align-items-center text-center text-decoration-none">
                <img class="navbar-brand" src="../../docs/brand/penfolio-logo_transparent.png" alt="logo" width="60em" />
                <p class="navbar-brand text-white mycss-navbar-brand-text">enfolio</p>
            </a>
            <!-- Navbar toggler -->
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-evenly w-100">
                    <!-- Nav item: Over mij -->
                    <li class="nav-item text-white d-flex align-items-center text-center mycss-nav-item">
                        <i class="fa-solid fa-info fa-lg"></i>
                        <a href="#over-mij" class="ms-2 text-decoration-none text-white">Over mij</a>
                    </li>
                    <!-- Nav item: Vaardigheden -->
                    <li class="nav-item text-white d-flex align-items-center text-center mycss-nav-item">
                        <i class="fa-solid fa-code fa-lg"></i>
                        <a href="#vaardigheden" class="ms-2 text-decoration-none text-white">Vaardigheden</a>
                    </li>
                    <!-- Nav item: Projecten -->
                    <li class="nav-item text-white d-flex align-items-center text-center mycss-nav-item">
                        <i class="fa-solid fa-folder-open fa-lg"></i>
                        <a href="#projecten" class="ms-2 text-decoration-none text-white">Projecten</a>
                    </li>
                    <!-- Nav item: Contact -->
                    <li class="nav-item text-white d-flex align-items-center text-center mycss-nav-item">
                        <i class="fa-solid fa-pen-to-square fa-lg"></i>
                        <a href="#contact" class="ms-2 text-decoration-none text-white">Contact</a>
                    </li>
                    <!-- Nav item: Account -->
                    <li class="nav-item dropdown mycss-nav-item">
                        <?php 
                            if(isset($_SESSION["gebruiker"])) {
                                echo '
                                <a class="nav-link dropdown-toggle text-white d-flex align-items-center text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-regular fa-circle-user fa-lg"></i>
                                    <p class="mt-3 ms-2">Account</p>
                                </a>
                                <ul class="dropdown-menu bg-dark">
                                    <li>
                                        <a class="dropdown-item mycss-dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#settings">
                                            <i class="fa-solid fa-gear fa-lg"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider bg-light">
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger mycss-uitloggen-parent">
                                            <form method="post">
                                                <input type="hidden" name="uitloggen">
                                                <button type="submit" class="mycss-uitloggen">
                                                    <i class="fa-solid fa-arrow-right-to-bracket fa-lg"></i>
                                                    Uitloggen
                                                </button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>';
                            } else {
                                echo '
                                <a class="nav-link text-white d-flex align-items-center text-center" role="button" data-bs-toggle="modal" data-bs-target="#inloggen">
                                    <i class="fa-regular fa-circle-user fa-lg"></i>
                                    <p class="mt-3 ms-2">inloggen</p>
                                </a>';
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>