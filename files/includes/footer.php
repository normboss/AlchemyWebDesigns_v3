        <footer id="footer" class="foot">
            <?php
            require 'small-logo.php';
            // require 'logo.php';
            ?>
            <div class="foot__text">
                Serving&nbsp;Mid&#8209;Coast&nbsp;Maine
            </div>
            <div class="foot__text">
                <a href="mailto:info@alchemywebdesigns.com">info@alchemywebdesigns.com</a>
            </div>

        </footer>

        <script>
            var foot = document.getElementById("footer");
            var logo = document.getElementById("small-logo-id");
            // var pagename = <?php //echo '"' . $_SESSION['pagename'] . '"'; ?>;

            var pagename = "<?php echo $_SESSION['pagename'] ?>";
            if (pagename == 'contact') {
                foot.style.backgroundColor = '#A8985F';
                logo.style.backgroundColor = '#A8985F';
            } else if (pagename == 'about') {
                foot.style.backgroundColor = '#454F52';
                logo.style.backgroundColor = '#454F52';
            } else {
                foot.style.backgroundColor = '#9da5b2';
            }
        </script>