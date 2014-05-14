var minutes;
var seconds;
var duration;
var czas;

function OpenGrave(dur) {

chosen = 0;
len = document.form.d1.length

for (i = 0; i <len; i++) {
if (document.form.d1[i].checked) {
chosen = document.form.d1[i].value
}
}

if (chosen == 0) {
alert("Wybierz okres czasu")
}
else {
	minutes=chosen;
	duration= chosen;
	seconds=0;
	timer(); 
}	
	
}

function timer() {	
	if ((minutes==duration) && (seconds==0))
	{
		$.ajax({
  url: "kostuch_query.php?mode=open",
  beforeSend: function() { $('#mesdiv').html('Otwieranie wrót...'); },
  success: function(data){
    $('#mesdiv').html('Cmentarz otwarty'); }
 });
  }
  seconds=seconds-1;
  if (seconds < 0)
  {
  		minutes=minutes-1;
  		seconds=59;
  }
  if ((minutes == 0) && (seconds == 0))
  {
  		$.ajax({
  url: "kostuch_query.php?mode=close",
  beforeSend: function() { $('#mesdiv').html('Zamykanie wrót...'); },
  success: function(data){
    $('#mesdiv').html('Cmentarz zamknięty'); }
				});
	clearTimeout(czas);
	return;
	}
	else
	{
$('#timer').html(minutes+':'+seconds);
}

czas=setTimeout("timer();",1000)	

}
