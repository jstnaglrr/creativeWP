<?php wp_footer() ?>

<footer class="footer">
        <div class="container">

            <div class="footer_wrapper">
                <div class="footer_links">

                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a> </li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-solid fa-envelope"></i></i></a></li>
                    </ul>

                    <p><small>
                            Baloc Road, Brgy San ignacio San Pablo City, Laguna
                    </small></p>

                </div>

                <p><small>
                        &copy;CREATIVEVISUALDESIGN 2023
                    </small>
                </p>

            </div>
        </div>

    </footer>

    <script>
        const nav = document.querySelector(".navBar");
        const toggle_menu = document.querySelector(".toggle_menu");

        toggle_menu.addEventListener("click",()=>{
            toggle_menu.classList.toggle("open");
            nav.classList.toggle("open");
        });
    </script>

</body>
</html>