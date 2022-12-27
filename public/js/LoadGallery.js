
var $grid;

function getMessage() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
       type:'POST',
       url:'/getimg',
       data:{_token: CSRF_TOKEN, message:$(".getinfo").val()},
       success:function(data) {
          console.log(data.msg);
          data.msg.forEach(element => {
            if(element != null){
                //$(".grid").append('<div class="grid-item"><img style="width: 100%;" src="'+element+'"></div>');
                var $items = $('<div class="grid-item"><img style="width: 100%;" src="'+element+'"></div>');
                $grid.append( $items ).packery( 'appended', $items );
                $grid.imagesLoaded().progress( function() {
                    $grid.packery();
                });
            }
        });
       }
    });
}

$( document ).ready(function() {
    console.log( "ready!" );
    
    $grid = $('.grid').packery({
        // options
        itemSelector: '.grid-item',
        gutter: 10
    });
    $grid.imagesLoaded().progress( function() {
        $grid.packery();
    });
    getMessage();
});

//document.getElementById('replace').addEventListener('click', getMessage)