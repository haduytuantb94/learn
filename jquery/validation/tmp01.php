<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Makes "field" required and step of 10.</title>
<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
</head>
<body>

   <form action="#" id='commentForm'>
    <input type="text" name="a" id="a">
    <input type="text" name="b" id="b">
    <button type="submit">Validate!</button>
    <div id="date" style="border:1px solid blue;"></div>
    <div id="name" style="border:1px solid red;"></div>

</form>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
 $('document').ready(function(){
    $('form').validate({
        rules: {
           a: {required:true, minlength:2},
           b: {required:true}
        },      
        messages: {
           a: {required: "enter your name!"},
           b: {required: "enter the date!"}                        
        },
        errorPlacement: function(error, element) {
        if(element.attr('name') == 'a'){
             $('#name').html(error);                
         }
         if(element.attr('name') == 'b'){
             $('#date').html(error);                
         }
        },
        success: function(label){
             label.addClass("valid2222").text("Ok!");                        
        },
        debug:true
    });
    $('#a').blur(function(){
        $("form").validate().element("#a");
    });
});
</script>
</body>
</html>