
function quickPanel(type, offset)
{
	
	blok=document.getElementById('bloczek');
	body=document.getElementsByTagName('body')[0];

	element= document.createElement('div');
	element.style.id="bloczek";
	element.style.background="black";
	element.style.border="5px outset green";
	element.style.left="45";
	//element.style.width=300;
	//element.style.height="200px";
	element.style.position="fixed";
	//element.style.overflow="visible";
	if (offset)
	{
	element.style.top=offset;
	}
	else
	{
	element.style.top="0px";
	}
	element.innerHTML=document.getElementById(type).innerHTML;
	element.innerHTML+="<center><br><br><a href=\"#\" onclick=\"panelClose(); return false;\">Zamknij</a></center>";
	
	body.appendChild(element);

}
function panelClose()
{
	
	if (element)
	{
	body.removeChild(body.lastChild);
	}
}