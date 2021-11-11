<script type="text/javascript">
	$(function() {
	

    $("#cmsForm").validate({
      rules: {
        title:{
          normalizer: function(value) {
            return $.trim(value);
          },
         required:true,
         minlength:3,
         maxlength:50,
          },
        content:{
          normalizer: function(value) {
            return $.trim(value);
          },
         required:true,
         minlength:3,
          },
      },
      messages: {
          name:{
            required:"Please enter your Name",
            minlength:"Please enter atleast 3 character",
          }, 
          password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              maxlength: "Your password must not be bigger than 15 characters "
          },
          email: "Please enter a valid email address"
      },
      submitHandler: function(form) {
        $('.subbtn').prop('disabled',true);
        form.submit();
      },
      // Called when the element is invalid:
      highlight: function(element) {
          $(element).css({'background':'rgba(253, 238, 238, 0.61)','border-color':'red'});
      },
      // Called when the element is valid:
      unhighlight: function(element) {
          $(element).css({'background': '#ffffff','border-color': 'green'});
      }
    });	
      $(".changePasswordForm").validate({
	    rules: {
        old_password:{
          normalizer: function(value) {
            return $.trim(value);
          },
         required:true,
	       maxlength:15,
          },
        password:{
          normalizer: function(value) {
            return $.trim(value);
          },
         required:true,
         minlength:8,
         maxlength:15,
	        },
        password_confirmation : {
          equalTo : "#newpassword"
        }
	    },
	    messages: {
          password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 8 characters long",
              maxlength: "Your password must not be bigger than 15 characters "
          },
          old_password: {
              required: "Please provide old password",
              maxlength: "Your password must not be bigger than 15 characters "
          },
	        password_confirmation: {
	            required: "Please provide confirm password",
	        },
	    },
	    submitHandler: function(form) {
	      $('.subbtn').prop('disabled',true);
	      form.submit();
	    },
	    // Called when the element is invalid:
	    highlight: function(element) {
	        $(element).css({'background':'rgba(253, 238, 238, 0.61)','border-color':'red'});
	    },
	    // Called when the element is valid:
	    unhighlight: function(element) {
	        $(element).css({'background': '#ffffff','border-color': 'green'});
	    }
	  });
  
  $("#settingForm").validate({
  	
    errorPlacement: function(error, element) {
      if (element.attr("name") == "phone_no" ){
          error.appendTo('.phoneError');
        }  else {
      error.insertAfter(element);
      }
    },
    rules: {
      name:{
        normalizer: function(value) {
          return $.trim(value);
        },
       required:true,
       minlength:3,
       maxlength:50,
        },
      email: {
        required: true,
        email: true,
        //custom validation
        // validate_email: true,
      },
      phone_no: {
        required: true,
        digits:true,
        minlength:7,
        maxlength:15,
      },
      logo:{
        accept: "image/jpg,image/jpeg,image/png"
      },
      favicon:{
        accept: "image/jpg,image/jpeg,image/png"
      },
      address:{
        normalizer: function(value) {
          return $.trim(value);
        },
       required:true,
       minlength:3,
      },
      footer:{
        normalizer: function(value) {
          return $.trim(value);
        },
       required:true,
       minlength:3,
      },
      latitude:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
      },
      longtitude:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
      },
      google_analytic_script:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
      },
      facebook:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true,
      },
      twitter:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true
      },
      linkedin:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true,
      },
      youtube:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true,
      },
      instagram:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true,
      },
      play_store:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true,
      },
      app_store:{
        normalizer: function(value) {
          return $.trim(value);
        },
        required:false,
       minlength:3,
       url: true,
      },
    },
    messages: {
        name:{
          required:"Please enter your Name",
          minlength:"Please enter atleast 3 character",
        }, 
        password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 8 characters long",
            maxlength: "Your password must not be bigger than 15 characters "
        },
        email: "Please enter a valid email address"
    },
    submitHandler: function(form) {
        var phonefull_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        var countryData = phone_number.getSelectedCountryData();
        $('#fullphone_no').val(phonefull_number);
      form.submit();
    },
    // Called when the element is invalid:
    highlight: function(element) {
        $(element).css({'background':'rgba(253, 238, 238, 0.61)','border-color':'red'});
    },
    // Called when the element is valid:
    unhighlight: function(element) {
        $(element).css({'background': '#ffffff','border-color': 'green'});
    }
  });

});

</script>