$(document).ready(function(){
    $('#insert').on("submit", function(event){  
     event.preventDefault(); 

        var name=$("#inputName").val();
        var email = $("#inputEmail").val();
        var contact = $('#inputContact').val();
        var address = $('#inputAddress').val();
        var gender = $('#gender').val();
        var message = $('#inputMessage').val();

            if($('#inputName').val() == "")  
            {  
            alert("Name is required");  
            }
            else if($('#inputEmail').val() == '')  
            {  
            alert("Email is required");  
            }
            else if($('#inputContact').val() == '')  
            {  
            alert("Contact No. is required");  
            }     
            else if($('#inputAddress').val() == '')  
            {  
            alert("Address is required");  
            }  
            else if($('#inputMessage').val() == '')
            {  
            alert("Message is required");  
            }
            
            else  
            {  
                $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{name:name,email:email,contact:contact,address:address,gender:gender,message:message},    
                success:function(data){  
                    alert ('data submitted');
                    $('#insert')[0].reset();  
                    $('#modalForm').modal('hide');  
                }  
                });  
            }  
    });
});    
   