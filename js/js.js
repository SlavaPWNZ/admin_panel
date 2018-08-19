function dell(id)
{
	if (confirm("Удалить страницу?")) 
	{
		 $("#"+id).remove();    
		 $.post("index.php?dell", {id:id} , 
		   function(out) 
		   {			 
		   });
	}     
}

function create_new_page()
{   
	$.post("index.php?create_new_page", 
	function(out) 
	{
		location.reload();		
	});   
}