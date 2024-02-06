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

open-popup

data-toggle="modal" data-target="#AdditemsModal"


(function (e, t) {
    "object" == typeof module && "object" == typeof module.exports
        ? (module.exports = e.document
            ? t(e, {})
            : function (e) {
                  if (!e.document)
                      throw new Error("jQuery requires a window with a document");
                  return t(e);
              })
        : t(e);
})(typeof window !== "undefined" ? window : this, function (e, t) {
    "use strict";
    var n = [],
        r = Object.getPrototypeOf,
        i = n.slice,
        o = n.concat,
        a = n.push,
        s = n.indexOf,
        u = {},
        l = u.toString,
        c = u.hasOwnProperty,
        f = c.toString,
        p = f.call(Object),
        d = {},
        h = function (e) {
            return "function" == typeof e && "number" != typeof e.nodeType;
        },
        g = function (e) {
            return null != e && e === e.window;
        },
        v = e.document,
        m = { type: !0, src: !0, nonce: !0, noModule: !0 };
    function y(e, t, n) {
        var r = t ? t.ownerDocument || t : v;
        return (
            (e =
                e instanceof r.Element || e instanceof r.Document
                    ? e
                    : r.createElement(e)),
            n ? t.appendChild(e) : r.body.appendChild(e),
            e
        );
    }
    function x(e) {
        return e.replace(/::/g, "/").replace(/\*/g, "[\\s\\S]*");
    }
    function b(e, t, n) {
        var r = "" !== e;
        return (
            t &&
                ((n = "boolean" == typeof n ? !r : n),
                (r = r && n)),
            function (i, o) {
                if (void


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
