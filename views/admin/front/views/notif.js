
$(document).on('ready',function()
{
	setInterval(()=>{
console.log("checking databse");
$.ajax({
	url: "userCmdNotif.php", 
	success: function(result){

		if(result=="valide")
		{
			alert(result);
		}
		else
		{
		console.log(result);

		}
  }});

},500);

});


  
