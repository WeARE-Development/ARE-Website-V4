<footer class="container text-center">
            <span>Copyright &copy; 2016. All Right Reserved. Design_mylife</span>
        </footer>

        <!-- jQuery  -->
        <script src="main-template/js/jquery.min.js"></script>
        <script src="main-template/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            //smooth scroll
            $(document).ready(function () {
                $(function () {
                    $('.scroll-to[href*=#]:not([href=#])').click(function () {
                        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            if (target.length) {
                                $('html,body').animate({
                                    scrollTop: target.offset().top
                                }, 600);
                                return false;
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
