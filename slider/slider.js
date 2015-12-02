/**
 * Created by mc80 on 02/12/15.
 */
$(document).ready(function(){
    //mostra os botões
    $("section#galeria").hover(
    function(){
        $("section#buttons").fadeIn();
    },
    function(){
        $("section#buttons").fadeOut();
    });

    var liWidth = $("section#galeria ul li").outerWidth();

    //Proximo
    $("a.next").click(function(e){
        e.preventDefault();

        $("section#galeria ul").css({"width":"99999%"}).animate({left  : - liWidth}, function(){
            $("section#galeria ul li").last().after($("section#galeria ul li").first());
            $(this).css({'left' : '0', 'width' : 'auto'});
        });
    });
    $("a.prev").click(function(e){
        e.preventDefault();

        $("section#galeria ul li").first().before($("section#galeria ul li").last().css({'margin-left' : -liWidth}));
        $("section#galeria ul").css({"width":"99999%"}).animate({left : liWidth}, function(){
            $("section#galeria ul li").first().css({'margin-left' : '0'});
            $(this).css({left : 0, 'width' : 'auto'});
        });
    });

    on("section#galeria section#button2 div").click(function(){
        $("section#galeria ul").hide();
    });
});