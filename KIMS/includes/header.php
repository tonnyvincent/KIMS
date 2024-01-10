<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1">
  <title>Kiosk Inventory Management Systems (KIMS)</title>

  <script>
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    document.addEventListener("DOMContentLoaded", function() {
      // Get all list items in the sidebar menu
      const sidebarItems = document.querySelectorAll(".sidebar-menu ul#menu li");

      // Add a click event listener to each list item
      sidebarItems.forEach(function(item) {
        item.addEventListener("click", function() {
          // Get the text content of the clicked list item
          const clickedText = item.querySelector("span:last-child").textContent;

          // Set the header text to the clicked text
          document.getElementById("header-text").lastElementChild.textContent = clickedText;

          // Append the selected text as a parameter in the URL
          const currentUrl = new URL(window.location.href);
          currentUrl.searchParams.set('selectedText', clickedText);
          window.history.pushState({}, '', currentUrl);
        });
      });

      // Retrieve and set the selected text from the URL parameter
      const urlSearchParams = new URLSearchParams(window.location.search);
      const storedText = urlSearchParams.get('selectedText');
      if (storedText) {
        document.getElementById("header-text").lastElementChild.textContent = storedText;
      }
    });

  </script>

  <!-- style-CSS -->
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>

<body>

  <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    
    <div class="sidebar-brand">
      <h1><a href="dashboard.php"><span class="lab la-swift"></span> <span>KIMS</span></h1></a>
    </div>

    <!-- navbar links -->
    <div class="sidebar-menu">
      <ul id="menu">
        <li>
          <a href="instock.php"><span class="las la-download"></span>
            <span>Instock</span></a>
        </li>
        <li>
          <a href="closing.php"><span class="las la-calculator"></span>
            <span>Closing</span></a>
        </li>
        <li>
          <a href="view.php"><span class="las la-eye"></span>
            <span>View</span></a>
        </li>
        <li>
          <a href="graph.php"><span class="las la-chart-pie"></span>
            <span>Graphical Sale</span></a>
        </li>
      </ul>
    </div>
  </div>

  <!-- content -->
  <div class="main-content">
    <header>

      <h1 id="header-text">
        <label for="nav-toggle">
            <span class="las la-bars"></span>
        </label>
        <span>Welcome</span>
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
