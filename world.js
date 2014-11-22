window.onload = function getInfo(){
    $('lookup').observe('click', function(){ 
	var term = $("term").getValue(); 
    var check= $("check").getValue();
    new Ajax.Request("world.php", {
               method : 'GET',
			   parameters : {lookup : term},
               
               onSuccess: function(info) {
                var response = info.responseText ;
                   $('result').update(response);
              },
              
              onFailure: function() {
                  if (term===""){
                  if (check!==true);
                  {alert("no data found");}
                  }}       
     }); 
   });

};
