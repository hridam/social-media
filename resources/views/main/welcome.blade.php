<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Eywry</span>
                    <span class="profession">Social Media</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="{{url('C:\Users\hrida\example-app\resources\views\login.blade.phpphp ')}}">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">
            <table class="feed">
                <tr>
                    <th>Today I am having a wonderful time in the eywry web application.</th>
                </tr>
                <tr>
                    {{-- <td><img src="img.jpeg"></td> --}}
                    <td class="info">User Name</td>
                </tr>
            </table>
            <br>
            <table class="feed">
                <tr>
                    <th>Let me disclose the gifts reserved for age
                        To set a crown upon your lifetime’s effort.
                        First, the cold friction of expiring sense
                        Without enchantment, offering no promise
                        But bitter tastelessness of shadow fruit
                        As body and soul begin to fall asunder.
                        Second, the conscious impotence of rage
                        At human folly, and the laceration
                        Of laughter at what ceases to amuse.
                        And last, the rending pain of re-enactment
                        Of all that you have done, and been….</th>
                </tr>
                <tr>
                    {{-- <td><img src="img.jpeg"></td> --}}
                    <td class="info">User Name</td>
                </tr>
            </table>
            <br>
            <table class="feed">
                <tr>
                    <th>Today I am having a wonderful time in the eywry web application.</th>
                </tr>
                <tr>
                    {{-- <td><img src="img.jpeg"></td> --}}
                    <td class="info">User Name</td>
                </tr>
            </table>
            <br><table class="feed">
                <tr>
                    <th>Today I am having a wonderful time in the eywry web application.</th>
                </tr>
                <tr>
                    {{-- <td><img src="img.jpeg"></td> --}}
                    <td class="info">User Name</td>
                </tr>
            </table>
            <br><table class="feed">
                <tr>
                    <th>Today I am having a wonderful time in the eywry web application.</th>
                </tr>
                <tr>
                    {{-- <td><img src="img.jpeg"></td> --}}
                    <td class="info">User Name</td>
                </tr>
            </table>
            <br>
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");

    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";

    }
});
    </script>

</body>
</html>
