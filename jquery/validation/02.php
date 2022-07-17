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
        label.valid {
            background: url(images/checked.gif) no-repeat;
            display: block;
            width: 16px;
            height: 16px;
        }
        .loading-gif {
            display: none;
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
          <button class="btn-submit" type="button">Button</button>
        </div>
     </form>
     <img src="images/loading.gif" alt="loading form" class="loading-gif" />
 </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });

    jQuery.validator.addMethod('valid_username', function (value) {
        // var regex = /^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){4,30}[a-zA-Z0-9]$/;
        var regex = /^[a-zA-Z0-9]([a-zA-Z0-9]){4,30}$/;
        return value.trim().match(regex);
    });

   $('#hd-main-form').validate({
        onclick : false,
        rules: {
           "username": {
               required:true,
               minlength : 6,
               valid_username : true
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
                  minlength : "Vui longg nhap it nhat 6 ky tu.",
                  valid_username : "Nhập tối thiểu 6 ký tự không chứa các ký tự đặc biệt như #, _ vv.."
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
        success: function(label){
            label.addClass("valid2222").text("Ok!");                        
        },
        submitHandler: function(form) {
           $('.loading-gif').show();
           var username = $('#username').val();
           var password = $('#password').val();
           var email = $('#email').val();
           var formData = new FormData();
           formData.append('username',username);
           formData.append('password',password);
           formData.append('email',email);
           $.ajax({
            url  : 'process-01.php',
            type : 'POST',
            contentType: false,
            processData: false,
            data : formData,
            success : function(response) {
                if(response.trim() == "") {
                        console.log("YES");
                }else {
                        console.log("NO");
                }
            },
            error: function(xhr) {
                alert('Thất bại.VUi long lien he voi BQT Website');
            },
            complete: function() {
                $('.lading-gif').hide();
            }
          })
        }
    })
});
</script>
</body>
</html>