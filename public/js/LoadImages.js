let $carousel = $('.main-carousel').flickity()

function getMessage() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       type:'POST',
       url:'/getmsg',
       data:{_token: CSRF_TOKEN, message:$(".getinfo").val()},
       success:function(data) {
          console.log(data.msg);
          data.msg.forEach(element => {
            //   $(".main-carousel").prepend("<div class='carousel-cell'> <img class='w-100 d-block' src="+element+"></div>");
            var $cellElems = $("<div class='carousel-cell'> <img style='height: 100%; width: 100%; object-fit: contain' src="+element+"></div>");
            $carousel.flickity( 'append', $cellElems );
        });
       }
    });
    $carousel.flickity('resize');
}

$( document ).ready(function() {
    console.log( "ready!" );
    getMessage();
});

//document.getElementById('replace').addEventListener('click', getMessage)