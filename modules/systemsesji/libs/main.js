var ajaxManager = $.manageAjax.create('cacheQueue', {
    queue: true,
    maxRequests:5,
    abortOld:true,
    preventDoubbleRequests:true,
    cacheResponse: false
});

// OKIENKO
function okienko (tytul,dane,width,height,closable) {
   $.window({
   title: tytul,
   content: dane,
   x: -1,
   y: 100,
   width: width,
   height: height,
   minWidth: 500,
   minHeight: 600,
   maxWidth: 800,
   maxHeight: 600,
   resizable: false,
   scrollable: true,
   draggable: true,
   minimizable: false,
   maximizable: false,
   closable: closable
   });
}
// FUNKCJA AJAX OKIENKO
function CreateWindow(tytul,link,typy,width,height,closable) {

    ajaxManager.add({
        type: "GET",
        url: link,
        dataType: "html",
        timeout: 5000,
        data: {
            typ: typy
        },
        success: function(data){
            spo = data.split("|");
            if (spo[0] == 'ALERT') jAlert(spo[1]);
            else
            {
                okienko(tytul,data,width,height,closable);
            }
        }
    });
}

// RZUTY W CODZIENNIKACH
function mg_append(url,view,widok) {
       ajaxManager.add({
               type: "GET",
               url: url,
               data: {view:view},
               dataType: "html",
               timeout: 10000,
       	       beforeSend:function(req) {
                   $("#loader").css("visibility", "visible");
               },
               success: function(data){
                   back = data.split("|");
                   if (back[0] == 'ALERT') jAlert(back[1]);
                   else
                   {
                       $("#"+widok).append(data);
                   }
                   $("#loader").css("visibility", "hidden");
               }
       });
}

function mg_rzut(url,did,widok) {
       // Zbieram dane
       var kosc = $("#rz_kosc :selected").val();
       var rzuty = $("#rz_ilosc :selected").val();
       
       ajaxManager.add({
               type: "GET",
               url: url,
               data: {did:did, rzuty:rzuty,kosc:kosc},
               dataType: "html",
               timeout: 10000,
       	       beforeSend:function(req) {
                   $("#loader").css("visibility", "visible");
               },
               success: function(data){
                   back = data.split("|");
                   if (back[0] == 'ALERT') jAlert(back[1]);
                   else
                   {
                       $("#"+widok).append(data);
                       $.window.closeAll();
                   }
                   $("#loader").css("visibility", "hidden");
               }
       });
}

function mg_addwpis(url,did,widok) {
       // Zbieram dane
       var allInputs = $('#diary_form :input[id^="diarywpis_"], div[id^="diarywpis_"]');
       var values = {};
       var player = $("#playerid").html();
       allInputs.each(function() {
	   var input_val = $(this).val();
	   var input_name = this.name;
	   if (input_val == '') input_val = $(this).html();
	   if (!input_name) input_name = $(this).attr('name');
           values[input_name] = input_val;
       });
       console.log(values);
       ajaxManager.add({
               type: "POST",
               url: url,
               data: {did:did, dane:values, pid:player},
               dataType: "html",
               timeout: 10000,
       	       beforeSend:function(req) {
                   $("#loader").css("visibility", "visible");
               },
               success: function(data){
                   back = data.split("|");
                   if (back[0] == 'ALERT') jAlert(back[1]);
                   $("#loader").css("visibility", "hidden");
                   location.reload("#pager");
               }
       });
}

function edytuj_wpis(id) {
       // Zbieram dane
       var allInputs = $("#wyslij :input");
       var values = {};
       allInputs.each(function() {
          values[this.name] = $(this).val();
       });
       
       ajaxManager.add({
               type: "POST",
               url: "modules.php?mod=systemsesji-ajax&typ=edit&id="+id,
               dataType: "html",
               timeout: 5000,
               data: {id:id, dane:values},
       	       beforeSend:function(req) {
                   $("#loader").css("visibility", "visible");
               },
               success: function(data){
                   spo = data.split("|");
                   if (spo[0] == 'ALERT') jAlert(spo[1]);
                   else
                   {
                       $("#"+id).html(data);
                       $("#loader").css("visibility", "hidden");
                       $.window.closeAll();
                   }
               }
       });
}

function mg_podglad(url,warstwa) {
       // Zbieram dane
       var allInputs = $('#diary_form :input[id^="diarywpis_"], div[id^="diarywpis_"]');
       var values = {};
       allInputs.each(function() {
	   var input_val = $(this).val();
	   var input_name = this.name;
	   if (input_val == '') input_val = $(this).html();
	   if (!input_name) input_name = $(this).attr('name');
           values[input_name] = input_val;
       });
       
       ajaxManager.add({
               type: "POST",
               url: url,
               data: {dane:values},
               dataType: "html",
               timeout: 10000,
       	       beforeSend:function(req) {
                   $("#loader").css("visibility", "visible");
               },
               success: function(data){
                   $("#"+warstwa).html(data);
                   $("#loader").css("visibility", "hidden");
               }
       });
}

function mg_usun(id) {
    var jakisid = id;
    $("#diarywpis_"+jakisid).parent('div').remove();
}

function jsonload(url,widok,remove) {
    ajaxManager.add({
            type: "GET",
            url: url,
            dataType: "json",
            timeout: 10000,
         	beforeSend:function() {
          	  $("#loader").css("visibility", "visible");
            },
            success: function(data){
            	if (data)
            	{
                    if (data.error) jAlert(data.error);
                    if (remove == 'Y') $("#"+widok).hide();
                    else $("#"+widok).html(data.respond);
            	}
                $("#loader").css("visibility", "hidden");
            }
    });
}

$(function()
{
    

});