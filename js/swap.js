$(document).ready(function(){
			$("#SwapButton").click(function(e) {
    			e.preventDefault(); // Prevent load page again
		    
		    //Get the values
		    var fromVal = $("#form-item-from option:selected").val();
		    var fromText = $("#form-item-from option:selected").text();
		    var toVal = $("#form-item-to option:selected").val();
		    var toText = $("#form-item-to option:selected").text();
				    
				    //Set the values
				    $("#form-item-from option:selected").val(toVal);
				    $("#form-item-from option:selected").text(toText);
				    $("#form-item-to option:selected").val(fromVal);
				    $("#form-item-to option:selected").text(fromText);
				});
		});
