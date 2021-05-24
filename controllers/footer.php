<footer class="fixed-bottom footer-shadow border-top bg-white">
        <div class="text-center py-2">
            Powered By <a href=""><strong>Buzcart</strong></a>
        </div>
</footer>
<script>
        function rightMenu(open) {
            if (open) {
                $(".menu-overlay").removeClass("d-none");
                $("body").addClass("modal-open");
                $("#main-menu").removeClass("d-none");
            } else {
                $(".menu-overlay").addClass("d-none");
                $("body").removeClass("modal-open");

                $("#main-menu").addClass("d-none");
            }
        }
</script>
<script src="../assets/js/jquery(3.5.1).slim.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap4.min.js"></script>