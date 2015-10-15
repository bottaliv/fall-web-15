<?php
session_start();
    $name = 'Victoria Bottali';
    $message = "Welcome, $name";
    
    $person = array( 'Name' => $name, 'Age' => 21, CalorieGoal => 2000, ExerciseGoal => 30);
    
    
    
    
    ?>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fitness Tracker</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  </head>
  <body>
    <div class="container-fluid">
    <div class="page-header">
          <h1>Fitness Tracker 
          <small>Helping you Reach Your Fitness Goals</small>
          </h1>
        </div>
       
       <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src=" https://fall-web-15-bottaliv.c9.io/PHP/food/imgs/veggies.jpg" alt="...">
      <div class="caption">
        <h3>Food</h3>
        <p>Manage and update your food intake. Input your meals and calories here.</p>
        <p><a href=" https://fall-web-15-bottaliv.c9.io/PHP/food/food.php" class="btn btn-primary" role="button">Check it out!</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="https://fall-web-15-bottaliv.c9.io/PHP/food/imgs/run.jpg" alt="...">
      <div class="caption">
        <h3>Exercise</h3>
        <p>Keep track of what activities you do, and for how long. </p>
        <p><a href="https://fall-web-15-bottaliv.c9.io/PHP/food/exercise.php" class="btn btn-primary" role="button">Check it Out!</a></p>
      </div>
    </div>
  </div>
  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <h3><?php echo($message)?></h3>
      <p><bold>Exerise Today:</bold></p>
      <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="<?php $eTotal?>" aria-valuemin="0" aria-valuemax="30" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<p><bold>Calories So Far:</bold></p>
      <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="200" style="width: 60%">
    <span class="sr-only">40% Complete</span>
  </div>
  </div>
    </a>
  </div>
</div>
       
        </div>
        
       


    
  </body>
</html>
    
    
