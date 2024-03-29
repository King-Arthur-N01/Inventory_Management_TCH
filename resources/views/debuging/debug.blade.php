<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/libs/css/styledebug.css') }}">
    @stack('style')
</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn" id="menu-toggle"><span
                                class="glyphicon glyphicon-menu-hamburger"></span></a>
                        <h1 class="text-center">Bootstrap Sidebar</h1>
                        <h2 class="small text-center">Second Header</h2>
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                            perferendis maiores velit ad id delectus nisi eligendi doloremque officia necessitatibus,
                            repellendus alias omnis, natus nam voluptates dolor vel minus ab?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stack('script')
    <script>
        $(document).ready(function() {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("menuDisplayed");
            });
        });
    </script>
</body>
</html>
