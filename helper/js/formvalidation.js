 $(document).ready(function(){

      jQuery.validator.addMethod("alpha", function(value, element) { 
            return this.optional(element) || /^[a-zA-Z ]*$/.test(value)
        
      },"Alphabets and space like ram rajput only");
  
    $("#giver_registration").validate({//("^[a-zA-Z]+$")
      
      rules:{
        guserfullname:{
          required: true,
          alpha:true,
          minlength:5
        },
        serviceProviding:{
          required:true,
        },
        gemail:{
          required:true,
          email:true
        },
        gmobileNumber:{
          required: true,
          number:true,
         
            minlength:10,
            maxlength:10
        },
         gaddress:{
          required: true,
          minlength:5
        },
        gpassword:{
          required:true,
          minlength:8,
          maxlength:20
        },
        cpassword:{
          required:true,
          equalTo:"#gpassword"
        },
        
      },
      messages:{
        guserfullname:{
          required:"Name is required.... Please fill it.",
          minlength:"Please Enter five characters minimum."

        },
        serviceProviding:{
          required:"Please Select One Service.",
        },
        
        gmobileNumber:{
          required:"Please Enter your Mobile number.",
          number:"Enter only numbers 0123456789.",
          minlength:" Enter minimum 10 numbers digit.",
          maxlength:"Enter maximum only 10 numbers digit."
        },
        gemail:{
          required:" Email field is required..  "
        },

        cpassword:{
          equalTo:"Confirm Password  not matched.",
          required:"Confirm Password is required"
        },


      }
    });

  $("#seeker_registration").validate({//("^[a-zA-Z]+$")
      
      rules:{
        suserfullname:{
          required: true,
          alpha:true,
          minlength:5
        },
        semail:{
          required:true,
          email:true
        },
        smobileNumber:{
          required: true,
          number:true,
         
            minlength:10,
            maxlength:10
        },
         saddress:{
          required: true,
          minlength:5
        },
        spassword:{
          required:true,
          minlength:8,
          maxlength:20
        },
        cpassword:{
          required:true,
          equalTo:"#spassword"
        },
        
      },
      messages:{
        suserfullname:{
          required:"Name is required.... Please fill it.",
          minlength:"Please Enter five characters minimum."

        },
        
        smobileNumber:{
          required:"Please Enter your Mobile number.",
          number:"Enter only numbers 0123456789.",
          minlength:" Enter minimum 10 numbers digit.",
          maxlength:"Enter maximum only 10 numbers digit."
        },
        semail:{
          required:" Email field is required..  "
        },

        cpassword:{
          equalTo:"Confirm Password  not matched.",
          required:"Confirm Password is required"
        },


      }
    });

   
    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
      });
      
});