<!DOCTYPE html>
<html>
<head>
    <title>Popup Registration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".open-popup").click(function(){
                $(".popup").fadeIn(300);
            });
            $(".close-popup").click(function(){
                $(".popup").fadeOut(300);
            });
            $("#submit").click(function(){
                var name = $("#name").val();
                var email = $("#email").val();
                var password = $("#password").val();
                $.ajax({
                    url: "register.php",
                    type: "POST",
                    data: {name: name, email: email, password: password},
                    success: function(data){
                        $(".popup").fadeOut(300);
                        alert("Registration successful!");
                    },
                    error: function(){
                        alert("Registration failed!");
                    }
                });
            });
        });
    </script>
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 9999;
        }
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        #submit {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <button class="open-popup">Open Popup</button>
    <div class="popup">
        <div class="popup-content">
            <span class="close-popup">×</span>
            <h2>Registration Form</h2>
            <form>
                <input type="text" id="name" placeholder="Name">
                <input type="email" id="email" placeholder="Email">
                <input type="password" id="password" placeholder="Password">
                <input type="button" id="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
