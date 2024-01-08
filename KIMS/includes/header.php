<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kiosk Inventory Management Systems (KIMS)</title>
  <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);
  </script>

  <!-- style-CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>

<body>

  <div class="sidebar">
    
    <div class="sidebar-brand">
      <h1><a href=""><span class="lab la-swift"></span> KIMS </h1></a>
    </div>

    <!-- navbar links -->
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href=""><span class="las la-download"></span>
            <span>Instock</span></a>
        </li>
        <li>
          <a href=""><span class="las la-calculator"></span>
            <span>Closing</span></a>
        </li>
        <li>
          <a href=""><span class="las la-eye"></span>
            <span>View</span></a>
        </li>
        <li>
          <a href=""><span class="las la-chart-pie"></span>
            <span>Graphical Sale</span></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- content -->
  <div class="main-content">
    <header>
        <h1>
            <label for="">
                <span class="las la-bars"></span>
            </label>
            Welcome
        </h1>

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search Here" />
        </div>

        <!-- user photo and name // later fetch from database // user input -->
        <div class="user-wrapper">
            <img src="image/profilepic.jpg" width="40px" height="40px" alt="">
            <div>
              <h4>name</h4>
              <small>title(Admin)</small>
            </div>
        </div>
    </header>
  </div>