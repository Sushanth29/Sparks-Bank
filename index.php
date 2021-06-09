<!doctype html>
<html lang="en">

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Basic Banking System</title>

    <style type="text/css">
        button{
    position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color: #000000;
    
        }
h1 {
    color: black;
    font-weight: bold;
    transition: 0.3s;
    text-align: center;
}
    </style>

</head>


<body>
    <?php
  include 'navigation.php';
  ?>

    <div class="container-fluid">
        <br><br><br><br>
        <div >
            <div >
                <div >
                   <center><h1>Welcome to Sparks Bank</h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br>
                <img src="img/customer.svg" height="160" width="160" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/money-transfer.svg" height="160" width="160" class="img-fluid">
                <br><br>
                <a href="transfermoney.php"><button>Transfer Money</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transaction.svg" height="160" width="160" class="img-fluid">
                <br><br>
                <a href="transactionhistory.php"><button >View History</button></a>
            </div>
        </div>
    </div>
    
    <br><br><br><br><br>
  

</body>

</html>
