//name validation
//jQuery("#name").on("input", function() {
   // if ( jQuery(this).val().match('^[a-zA-Z]{3,16}jQuery') ) {
   //     alert( "Valid name" );
   // } else {
   //     alert("That's not a name");
   // }
//});

jQuery('#name').on('input', function() {
	var input=jQuery(this);
	var re = /^([a-zA-Z]{3,16})jQuery/;
	var is_name=re.test(input.val());
	if(is_name){
        input.removeClass("invalid").addClass("valid");
        jQuery('#errorname').hide();
        jQuery('#noerrorname').text("name verified");
             }
	else{
        input.removeClass("valid").addClass("");
        jQuery('#errorname').text("name should not be numeric") ; 
       
      }
});

//Email validation
jQuery('.reg_form').on('keyup', '#emailID', function(ev){
	const input=jQuery(this);
	const re = /^[a-zA-Z0-9.!#jQuery%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*jQuery/;
	const is_email=re.test(input.val());
  //jQuery("#phone").focus(function()
  
    if(is_email){
      jQuery("#dialog").css("style","visibility","visible");
    jQuery( "#dialog" ).dialog();
         input.removeClass("invalid").addClass("valid");
         jQuery('#erroremail').hide();
         jQuery('#noerroremail').text("ok verified email") ;
               }
	else{
    jQuery( "#dialogerr" ).dialog();
      }
  });

//phone no  validation
jQuery('#phone').on('input', function() {
	var input=jQuery(this);
	var re = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
	var is_name=re.test(input.val());
	if(is_name){
        input.removeClass("invalid").addClass("valid");
        jQuery('#errorphone').hide();
        jQuery('#noerrorphone').text("phone verified");
             }
	else{
        input.removeClass("valid").addClass("");
        jQuery('#errorphone').text("invalid phone") ; 
       
      }
});

jQuery(document).ready(function() {
    var age = "";
    jQuery('#dob').datepicker({
        onSelect: function(value, ui) {
            var today = new Date();
            age = today.getFullYear() - ui.selectedYear;
            jQuery('#age').val(age);
        },
        changeMonth: true,
        changeYear: true
    })
})

 jQuery('#profileurl').on('input', function() {

 var input=jQuery(this);
var reg = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
 var is_profileurl=reg.test(input.val());
 if(is_profileurl){

 input.removeClass("invalid").addClass("valid");
 jQuery('#errorprofileurl').hide();
 jQuery('#noerrorprofileurl').text("profileurl verified");

} else {

 input.removeClass("valid").addClass("");
 jQuery('#errorprofileurl').text("invalidprofileurl") ; 

 }
 });