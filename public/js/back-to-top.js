/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(function(){

    $('body').append('<div id="totop"></div>');
    
//    $('#totop').hover(function(){
//        $('#totop2').fadeIn().mouseout(function(){
//            $(this).fadeOut(200);
//        });
//    });

    var defaultTop=$(window).height()-10-249;//10 vị trí canh bottom ban đầu, 249 là chiều cao
    $(window).resize(function(){
        defaultTop=$(window).height()-10-249;//phòng trường hợp resize trình duyệt
    });

    var ranPo=['-298px 0','-447px 0','-596px 0','-745px 0'];

    $(window).scroll(function(){

        var $top=$(window).scrollTop();
        if($top>50){
            $('#totop').fadeIn(100);
            $('#totop').css('top',defaultTop);
        }else{
            $('#totop').fadeOut(100);
        }
    });

    $('#totop').click(function(){
        timeranPo=window.setInterval(function(){
           $('#totop').css({'background-position':ranPo[Math.floor(Math.random()*ranPo.length)],'display':'block'});
        },200);

        setTimeout(function(){
            $('html,body').stop().animate({scrollTop:'50px'},400,function(){
                $('#totop').stop().animate({'top':'-250px'},300,function(){
                    clearInterval(timeranPo);
                    $('#totop').css('background-position','0 0').hide();
                });
            });
        },800);
    });
});