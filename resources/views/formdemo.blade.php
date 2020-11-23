<html>
    <head>
        <title>Add/Remove Input Fields Dynamically with jQuery</title>
    </head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  ></script>
		
	
	<script>
	$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    var x = 1; //initlal text box count
	
	
   $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
	
		     //text box increment
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            x++;
            $( 'input' ).each(function( index ) {
                console.log( index + ": " + $( this ).text() );
            }); 
	  }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       
		e.preventDefault(); 
		$(this).parent('div').remove(); 
		x--;
    });
    

    

});
	
	</script>
	<body>
    <form  method="POST">
        {{ csrf_field() }}
     <div class="input_fields_wrap">
    
    <div><input type="text" name="mytext[]"></div>
	
     </div>
     <button class="add_field_button">Add More Fields</button>
     <button type="submit">submit</button>
     </form>
</body>
</html>