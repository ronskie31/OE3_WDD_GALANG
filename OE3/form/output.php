<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Salary App</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme7.css">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="app.html">

            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="https://images.pexels.com/photos/5797908/pexels-photo-5797908.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>OUTPUT</h3>
                        <p>Salary calculations based on the user input data.</p>
                        <div class="page-links">
                            <a class="active">APP</a>
                        </div>
                        <form method="post" action="output.php" class="user">
                        <?php
          
          if(!empty("submit")){  
          
          
            $emID = $_POST['emID'];
            $ename = $_POST['ename'];
            $hr=$_POST['hr'];
            $rphour= $_POST['rphour'];
          
          
            $grosspay = (int)$rphour * (int)$hr;
          
            if($grosspay > 25000){
              $tax = $grosspay * 0.12;
              $netpay = $grosspay - $tax;
            }else if ($grosspay <= 25000 && $grosspay >= 15000){
              $tax = $grosspay * 0.10;
              $netpay = $grosspay - $tax;
            }else if($grosspay < 15000){
              $tax = $grosspay * 0.08;
              $netpay = $grosspay - $tax;
            }
          
            if($grosspay >25000){
              $taxrate = 12;
            }else if ($grosspay <= 25000 && $grosspay >= 15000){
              $taxrate = 10;
            }else if ($grosspay < 15000){
              $taxrate = 8;
            }
          
          echo "<p>";
          echo '<span style="color: black; font-size: 20px; text-align: center;"> ' ." <b> Employee ID </b>: $emID <br/>  ";
          echo " <b>Employee Name </b> : $ename <br/> ";
          echo " <b>Gross Pay </b> : $grosspay <br/> ";
          echo " <b>Tax rate </b> : $taxrate <br/> ";
          echo " <b>Net Pay </b> : $netpay <br/> ";
          echo "</p>";
          }
          
          ?>
          
          <a href="app.html">Try Again</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>