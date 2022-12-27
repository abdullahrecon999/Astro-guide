
$(document).ready(function() {
    $("#remove").click(function(){
        remove();
    });
    $("#query").click(function(){
        search($("#search").val());
    });
});

function search(query) {
    console.log(query)
    $("#search").val('');
    if(query != ""){
      $.ajax({
          url: "https://api.giphy.com/v1/gifs/search?api_key=O2OBDFDdAOTu6BegIMGSErwge5JGN2qY&q="+query+"&limit=1&offset=0&rating=g&lang=en",
          type: "GET",
          success: function(response) {
            console.log(response)
            let url = response.data[0].images.downsized_medium.url;
            console.log(url)
            let img = $('<div class="gifbox"><img style="width: 100%;" src="'+url+'"></div>').hide();
            $(".output").append(img);
            img.fadeIn(1000);
          },
          error: function(e) {
            alert(e);
          }
      });
    }
}

function remove() {
    console.log('remove')
    $("#search").val('');
    $('.output').fadeOut(500, function() {
        $(this).empty();
    });
    $('.output').fadeIn();
}