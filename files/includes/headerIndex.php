    <header class="header-index">
        <!-- <div class='elemental-shift'>Elemental Shift</div> -->

        <div class="nav-index">
            <div class="nav-index__wide">
                <ul>
                    <span class="menu-item"><a href="<?php echo $_SESSION['root'] . '/index.php' ?>">Home</a></span>
                    <span class="menu-item"><a href=<?php echo $_SESSION['root'] . '/files/pages/portfolio.php' ?>>Portfolio</a></span>
                    <span class="menu-item"><a href=<?php echo $_SESSION['root'] . '/files/pages/about.php' ?>>About</a></span>
                    <span class="menu-item"><a href=<?php echo $_SESSION['root'] . '/files/pages/contact1.php' ?>>Contact</a></span>
                </ul>
            </div>

            <div class="nav-index__narrow">
                <ul>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">
                            <div class="hamburger"></div>
                            <div class="hamburger"></div>
                            <div class="hamburger"></div>
                        </a>
                        <div class="dropdown-content">
                            <a href="<?php echo $_SESSION['root'] . '/index.php' ?>">Home</a>
                            <a href=<?php echo $_SESSION['root'] . '/files/pages/portfolio.php' ?>>Portfolio</a>
                            <a href=<?php echo $_SESSION['root'] . '/files/pages/about.php' ?>>About</a>
                            <a href=<?php echo $_SESSION['root'] . '/files/pages/contact1.php' ?>>Contact</a>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </header>