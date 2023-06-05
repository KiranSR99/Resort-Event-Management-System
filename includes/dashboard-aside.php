<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REMS Dashboard</title>

</head>

<body>

    <aside>
        <div class="side-navbar">
            <ul>
                <li><a href="dashboard.php" class="active"><span
                            class="fas fa-tachometer-alt"></span><span>Dashboard</span></a>
                </li>
                <li><a href="events.php"><span class="fa fa-calendar-days"></span><span>Events</span></a></li>
                <li><a href="#"><span class="fas fa-calendar-check"></span><span>Reservations</span></a></li>
                <li><a href="#"><span class="fas fa-box"></span><span>Packages</span></a></li>
                <li><a href="#"><span class="fas fa-chart-bar"></span><span>Analytics/Reports</span></a></li>
                <li><a href="#"><span class="fas fa-envelope"></span><span>Messages</span></a></li>
                <li><a href="#"><span class="fas fa-cog"></span><span>Settings </span></a></li>
            </ul>
        </div>
    </aside>

    <div class="main-content">
        <header class="header">
            <div class="logo"><img src="../assets/images/HillParadise.png" alt="LOGO"></div>
            <div class="search-container">
                <input type="text" class="search-input" id="search-input" placeholder="Search...">
                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                <button class="clear-button" id="clear-button" style="display: none;">
                    <img src="../assets/images/close.png" alt="Clear">
                </button>
            </div>
            <div class="admin-text">
                <p>Welcome, Admin !</p>
            </div>
        </header>

    </div>
</body>

</html>