<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/menu.js"></script>
<script src="js/materialize.js"></script>
<script src="js/tweenmax.min.js"></script>
<script src="js/slideshow.js"></script>
<script src="js/datetimepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/request-form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/lunar.js"></script>
<script src="js/wow.js"></script>

<!-- Custom Script -->
<script src="js/custom.js"></script>

<script>
    $(document).on({
        "contextmenu": function (e) {
            console.log("ctx menu button:", e.which);

            // Stop the context menu
            e.preventDefault();
        },
        "mousedown": function(e) {
            console.log("normal mouse down:", e.which);
        },
        "mouseup": function(e) {
            console.log("normal mouse up:", e.which);
        }
    });
</script>

<script>
    $(function() {
        $(".switch").click(function() {
            $("body").toggleClass("theme--dark");
        });
    });
</script>