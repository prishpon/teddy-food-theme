jQuery(document).ready(function ($) {
    $('#varProductTrigger').click(function(){
        $('#varProductModal').addClass("show");
        $('#varProductModal').css("display", "block");
    });

    $('#varProductClose').click(function(){
        $('#varProductModal').removeClass("show");
        $('#varProductModal').css("display", "none");
    });
});

