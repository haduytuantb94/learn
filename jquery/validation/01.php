<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Ví dụ 01</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .hd_main {
            width: 300px;
            margin: 20px auto;
            border: 2px solid #ccc;
            padding: 20px;
        }
        .hd_main div {
            margin: 10px 0px;
        }
        #hd-main-form input {
            height: 30px;
            width: 90%;
            padding: 4px;
            border-radius: 5px;
        }
        .error label , p.error {
             color:  red;
        }
    </style>
</head>
<body>
 <div class="hd_main">
     <form id="hd-main-form">
        <div>
           <p>Username</p>
           <input type="text" name="username" class="form-control" id="username"/> 
           <p class="error error_username"></p>  
        </div>
        <div>
           <p>Password</p>
           <input type="text" name="password" class="form-control" id="password"/>  
           <p class="error error_password"></p> 
        </div>
        <div>
           <p>Re-Password</p>
           <input type="text" name="repassword" class="form-control" id="repassword"/>   
           <p class="error error_repassword"></p>
        </div>
        <div>
           <p>Email</p>
           <input type="email" name="email" class="form-control" id="email"/>   
           <p class="error error_email"></p>
        </div>
        <div>
          <button class="btn-submit">Button</button>
        </div>
     </form>
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('#hd-main-form').validate({
        onclick : false,
        rules: {
           "username": {
               required:true,
               minlength : 6
           },
           "password": {
               required : true,
           },
           "repassword": {
               required : true,
               equalTo : "#password"
           },
           "email": {
               required: true
           }
        },
        messages: {
              "username": {
                  required: "Vui lòng nhập tên tài khoản.",
                  minlength : "Vui longg nhap it nhat 6 ky tu."
              },
              "password": {
                  required: 'Vui lòng nhập nhật khẩu.',
              },
              "repassword": {
                  required: "Bạn chưa nhập lại mật khẩu.",
                  equalTo: "Nhập lại mật khẩu không chính xác."
              },
              "email": {
                  required: "Vui lòng nhập email."
              }
        },
         errorPlacement: function(error, element) {
              if (element.attr("name") == "email") {
                  $(".error_email").html(error);
              }
              if (element.attr("name") == "username") {
                  $(".error_username").html(error);
              }
              if (element.attr("name") == "password") {
                  $(".error_password").html(error);
              }
              if (element.attr("name") == "repassword") {
                  $(".error_repassword").html(error);
              }
        },
        submitHandler: function() {
           var username = $('#username').val();
           var password = $('#password').val();
           var email = $('#email').val();
           // var data = new FormData();
           $.ajax({
            url  : 'process.php',
            type : 'POST',
            // dataType : 'json',
            data : {
                username : username,
                password : password,
                email : email,
                securi : 'securi'
            },
            success : function(response) {
                    if($.trim(response) != "") {
                        var result = jQuery.parseJSON(response);
                        if(result.email == 'Email existed' || result.username == 'Username existed') {
                              $(".error_email").html(result.email);
                              $(".error_username").html(result.username);
                        }
                        else {
                              alert("Vui long dang nhap lai");
                        } 
                    } else {
                        window.location.reload();
                    }
               
            },
            error: function(xhr) {
                 alert('Thất bại.VUi long lien he voi BQT Website');

            }
          })
        }
    })
});
   

</script>
</body>
</html>