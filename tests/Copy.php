<!DOCTYPE html>
<html>
<li class="nav-item dropdown nav-user">
    <a class="nav-link nav-user-img nav-user-name" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/avatar-1.png')}}" class="user-avatar-md rounded-circle"></a>
    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
        <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
    </div>
</li>
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
