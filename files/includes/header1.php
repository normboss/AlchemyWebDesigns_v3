    <header class="header">

        <?php
        if ( $_SESSION['pagename'] != "index" )
            require 'header-logo.php';
        ?>

        <div class="nav">
            <div class="nav__wide">
                <ul>
                    <span class="menu-item"><a href="<?php echo $_SESSION['root'] . '/index.php' ?>">Home</a></span>
                    <span class="menu-item"><a href=<?php echo $_SESSION['root'] . '/files/pages/portfolio.php' ?>>Portfolio</a></span>
                    <span class="menu-item"><a href=<?php echo $_SESSION['root'] . '/files/pages/about.php' ?>>About</a></span>
                    <span class="menu-item"><a href=<?php echo $_SESSION['root'] . '/files/pages/contact0.php' ?>  target="_blank">Contact</a></span>
                </ul>
            </div>

            <div class="nav__narrow">
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
                            <a href=<?php echo $_SESSION['root'] . '/files/pages/contact0.php' ?>  target="_blank">Contact</a>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <?php
        if ( $_SESSION['pagename'] != "index" )
            require 'header-logo.php';
        ?>
