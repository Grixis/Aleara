//swapNews();


function swapNews()
{
	var which_one;
	amount=document.getElementById('total').innerHTML;
	which_one=Math.round((amount-1)*Math.random());
	text='oglo'+which_one;
	document.getElementById('news').innerHTML=document.getElementById(text).innerHTML;

}

setInterval("swapNews()", 10000);