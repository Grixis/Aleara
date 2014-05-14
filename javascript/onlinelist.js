function updatelist(){
$(window).ready(function(){

  
  $.ajax({
  url: "onlinelist2.php?playerid="+$('#playerid').html(),
  beforeSend: function() { $('#mlist').html('<img src="images/misc/skull.gif" />'); },
  success: function(data){
    $('#mlist').html(data); $('#online').html($('#onlin').html()); 
  }
});

});
}
updatelist();
setInterval( function(){updatelist();}, 60000);