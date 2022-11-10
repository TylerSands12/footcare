(function($) { 

    $(document).ready(function () {
        
        $(".nav_toggle").on("click", function() {
            $("#main_menu").toggleClass("active");
            $(this).toggleClass("active");
        });

    });

})(jQuery);