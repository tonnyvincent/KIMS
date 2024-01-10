<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1">
  <title>Kiosk Inventory Management Systems (KIMS)</title>

  <!-- <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);
  </script> -->

  <!-- style-CSS -->
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>

<body>

  <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    
    <div class="sidebar-brand">
      <h1><a href=""><span class="lab la-swift"></span> <span>KIMS</span></h1></a>
    </div>

    <!-- navbar links -->
    <!-- <div class="sidebar-menu">
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
    </div> -->
  </div>

  <!-- content -->
  <div class="main-content">
    <header>
        <h1>
            <label for="nav-toggle">
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
            <div>
              <a href=""><h4>Register</h4></a>
              <a href=""><h4>Login</h4></a>
            </div>
        </div>
    </header>
  </div>

<div class="main-content">
        <main>

            <!-- content inside -->
            <div class="kims-info">

                <div class="kims-name">
                    <div>
                        <span>Inventory Management Systems</span>
                        <h2>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rhoncus lectus vitae nibh tincidunt, sed pellentesque arcu tempor. 
                            Fusce in pretium turpis. Sed feugiat eget elit ac luctus. Mauris porta porta egestas. Aliquam at placerat lorem. Nunc convallis 
                            sodales malesuada. Donec pharetra sapien non mi auctor, vitae molestie velit maximus. Vivamus dui ligula, pellentesque tincidunt 
                            lacus sed, condimentum laoreet ligula.
                        </h2>
                    </div>
                </div>

                 <div class="kims-pic">
                    <img src="image/FCSIT.jpg" alt>
                </div>

            </div>
          
        </main>
</div>

<!-- footer -->
<?php include 'includes/footer.php'; ?>
