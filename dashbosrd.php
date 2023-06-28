<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dash side navbar</title>
    <!-- **************css************ -->
    <link rel="stylesheet" href="css/dash_nav.css">
    <!-- *********Boxicon css********** -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="image/logo.png" alt="">
                </span>
                <div class="text header-text">
                    <span class="name">Meet Ease</span>
                </div>
            </div>

            <i class='bx bxs-chevron-right toggle' ></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                        <i class='bx bx-search icon' ></i>
                        <input type="text" placeholder="Search...">
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="appoint.html">
                            <i class='bx bxl-java icon'></i>
                            <span class="text nav-text">Appointments</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notification</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon' ></i>
                        <i class='bx bx-sun icon sun' ></i>
                    </div>
                    <span class="mode-text text">Dark Mode </span>
                    <div class="toggle-switch"><span class="switch"></span></div>
                </li>
            </div>
        </div>
    </nav>
    <section class="home">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">gender</th>
      <th scope="col">number</th>
      <th scope="col">email</th>
      <th scope="col">duration(min)</th>
      <th scope="col">Purpose</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from user";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $gender=$row['gender'];
    $number=$row['number'];
    $email=$row['email'];
    $duration=$row['duration'];
    $purpose=$row['purpose'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$gender.'</td>
    <td>'.$number.'</td>
    <td>'.$email.'</td>
    <td>'.$duration.'</td>
    <td>'.$purpose.'</td>
    <td>
        <a href="#"class="btn btn-dark">Allow</a>
        <a href="#"class="btn btn-danger">Reject</a>
    </td>
  </tr>';
    }
    ?>
    
    
  </tbody>
</table>
    </section>
    
    <script src="javascript/dash_nav.js"></script>
</body>
</html>