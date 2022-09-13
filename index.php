<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <style>
        body{
            background: #CC4646;
            font-family:cursive;
          }
        .container{
            border-style: ridge;
            top: 50%;
            left: 50%;
            padding: 20px;
            width: 350px;
            height: 550px;
            position: absolute;
            transform: translate(-50%,-60%);
            background: #ffeecc;

        }
    </style>
    <title>Simple interest calculator</title>
</head>
<body>
   
        <form action="<?php $_PHP_SELF?>" class="container" method="POST">
        <h2 class="mt-3">Interest Calculator</h2>
            <div class="form-group mt-3">
                <lable for="principle">Principle:</lable>
                <input type="text" class="form-control" value="" name="principle" placeholder="principle Amount">
            </div>
 
            <div class="form-group mt-3">
                <lable for="roi">Rate of Interest:</lable>
                <input type="text" class="form-control" value="" name="roi" placeholder="Rate of Interest">
            </div>
 
            <div class="form-group mt-3">
                <lable for="noy">Number of Years:</lable>
                <input type="text" class="form-control"  value="" name="noy" placeholder="Number of years" >
            </div>
 
           <div class="mt-3">
           <input type="submit" id="" value="submit" name="submit" class="btn btn-primary">
           </div><br><br>

           <?php
           if(isset($_POST['submit'])){
            $principle = $_POST['principle'];
            $roi = $_POST['roi'];
            $noy = $_POST['noy'];
            $si = ($principle*$roi*$noy)/100;
            echo "Simple interest is: $si";
            }
            ?>
        </form>
 
</body>
</html>

