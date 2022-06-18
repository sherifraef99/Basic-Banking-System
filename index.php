<?php
require 'connection.php';


if(isset($_POST["submit"])){
  $sender = $_POST["sender"];
  $receiver = $_POST["receiver"];
  $amount = $_POST["amount"];

  $querydata = "INSERT INTO tb_data VALUES('$sender', '$receiver', '$amount')";
  mysqli_query($conn,$querydata);
}
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "data";
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$queryuser = "SELECT * FROM `tb_user`";
$querysend="SELECT * FROM `tb_data`";
$resultsender=mysqli_query($connect,$queryuser);
$resultreceiver=mysqli_query($connect,$queryuser);




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bank System</title>
    <link rel="stylesheet" href="index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>





<!-- Navigation Bar -->
    <nav
      id="mainNavbar"
      class="navbar navbar-dark navbar-expand-md py-0 fixed-top"
    >
      <a href="#home" class="navbar-brand"><img src="logo.png"/></a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navLinks"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navLinks">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#table" class="nav-link">Customers</a>
          </li>
          <li class="nav-item">
            <a href="#send" class="nav-link">Transaction</a>
          </li>
        </ul>
      </div>
    </nav>






<!-- Home Heading    -->
    <section class="container-fluid px-0">
      <div class="row align-items-center" id="home" data-aos="fade-left">
        <div class="col-lg-6">
          <div
            id="headingGroup"
            class="text-white text-center d-none d-lg-block mt-5"
          >
            <h1>Basic Banking System</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid" src="Hero.png" alt="" />
        </div>
      </div>






<!-- Customers Heading -->
      <div class="row align-items-center content" data-aos="fade-right" id="customers">
        <div class="col-md-6">
          <img class="img-fluid" src="Customers.png" alt="" />
        </div>
        <div class="col-md-6 text-center">
          <div
            id="headingGroup"
            class="text-white text-center d-none d-lg-block mt-5">
              <h1>Customers</h1>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="#table" class="btn btn-outline-light">View Table</a>
            </div>
          </div>
        </div>
      </div>





<!-- Transaction Heading -->
    <div class="row align-items-center" data-aos="fade-left" id="transaction">
      <div class="col-lg-6">
        <div
          id="headingGroup"
          class="text-white text-center d-none d-lg-block mt-5"
        >
          <h1>Transaction</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat.
          </p>
          <a href="#send" class="btn btn-outline-light">
            Send Money
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" src="Transaction.png" alt="" />
      </div>
    </div>
    </section>
  

   
    
    
  <!-- Customers Table   -->
    <section class="container-fluid px-0">
      <div class="row align-items-center" data-aos="fade-in">
        <div class="col-lg-12" id="table">
          <section>
            <div class="tbl-header">
              <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Balance</th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="tbl-content">
              <table cellpadding="0" cellspacing="0" border="0" class="table">
                <tbody class="table-group">
                  <tr>
                    <td>Michael</td>
                    <td>michael@gmail.com</td>
                    <td class="michaelbalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Bob</td>
                    <td>bob@gmail.com</td>
                    <td class="bobbalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Jessica</td>
                    <td>jessica@yahoo.com</td>
                    <td class="jessicabalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Ahmed</td>
                    <td>ahmed@hotmail.com</td>
                    <td class="ahmedbalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Kim</td>
                    <td>kim@gmail.com</td>
                    <td class="kimbalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Alexa</td>
                    <td>alexa@gmail.com</td>
                    <td class="alexabalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Marie</td>
                    <td>marie@yahoo.com</td>
                    <td class="mariebalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Aditya</td>
                    <td>aditya@hotmail.com</td>
                    <td class="adityabalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Mark</td>
                    <td>mark@gmail.com</td>
                    <td class="markbalance">$0.00</td>
                  </tr>
                  <tr>
                    <td>Andrew</td>
                    <td>andrewco@gmail.com</td>
                    <td class="andrewbalance">$0.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
          </div>
        </div>
    </section>
  </div>

    
    


  
<!-- Send Form -->

  <section class="container-fluid px-0" id="last">
    <div class="row align-items-centers">
      <div class="col-lg-1"></div>

      <div class="col-lg-3 text-center mt-5" data-aos="fade-in">
          <form class="" action="" method="post" autocomplete="off">
        <h1 id="sendh1">Send Money</h1>
        <div id="send">
        <div class="row g-3">
          <div class="col">
          <select class="form-select" name="sender">
          <option value="" disabled selected hidden>Sender</option>
            <?php while($row1 = mysqli_fetch_array($resultsender)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
            <?php endwhile;?>
          </select>
          </div>
          <div class="col">
          <select class="form-select" name="receiver">
          <option value="" disabled selected hidden>Receiver</option>
          <?php while($row1 = mysqli_fetch_array($resultreceiver)):;?>
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
            <?php endwhile;?>
          </select>
          </div>
        </div>
        <div class="row g-3">
          <div class="col">
        <input type="number" name="amount" placeholder="Amount" class='form-control mt-4 text-center'/>
        </div>
        <button  type="submit" class="btn btn-outline-light mt-4" id="sendmoney" name="submit">Send</button>
</form>
    </div>
  </div>
  </div>




  <!-- Transaction History -->
    <div class="col-lg-7" data-aos="fade-in"> 
      <section>
        <h1 class="text-center" id="transhist">Transaction History</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            
            <thead>
              <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0" class="table">
            <tbody class="table-group">
            <?php

// Check connection
if ($connect->connect_error) {
die("Connection failed: " . $connect->connect_error);
}

// read all row from database table
$result=mysqli_query($connect,$querysend);

if (!$result) {
die("Invalid query: " . $connect->error);
}

// read data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . $row["sender"] . "</td>
        <td>" . $row["receiver"] . "</td>
        <td>" . $row["amount"] . "</td>
    </tr>";
}

$connect->close();
?>
            </tbody>
          </table>
        </div>
      </section>
    </div>
    <div class="col-lg-1"></div>
    </div>
    </section>




    <!-- Footer -->
    <section>
      <footer class="text-center">
        <p>This Website Is Made By Sherif Raef</p>
      </footer>
    </section>
 

    
    
    
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
  duration: 1000,
})
    </script>
    
          <script src="app.js"></script>
  </body>
</html>
