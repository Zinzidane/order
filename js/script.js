$(document).ready(function() {
    $('.btn-close').click(function(){
        $("#okno_owibki").css("display", "none");
    });
    $(function(){
        $(".forma").submit(function(e){
            e.preventDefault();
            var m_method=$(this).attr("method");
            var m_action=$(this).attr("action");
            var m_data=$(this).serialize();
            $.ajax({
                type: m_method,
                url: m_action,
                data: m_data,
                success: function(result){
                    $("#okno_owibki").css("display", "block");
                    $("#okno_owibki").fadeIn(3000).delay(8000).fadeOut(1000);
                    }
            });


        });

});
});