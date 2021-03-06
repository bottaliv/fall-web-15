<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Experiment Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-sm-8">
                  
              </div>
              <div class"col-sm-4"></div>
          </div>
    <div>
    <h1>Welcome!</h1>
    
    </div>
    <a href="#" class="btn btn-success">
    <i class="glyphicon glyphicon-plus"></i>    
        New Record
        </a>
    <a href="#" class="btn btn-danger">Delete All
    <i class="glyphicon glyphicon-trash"></i>
    </a>
    
    <div>
    
    <div class="hoverable-table">
      <table class="table table-hover">
        <thead>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Elijah</td>
            <td>Wood</td>
          </tr>
          <tbody>
          <tr>
            <th scope="row">2</th>
            <td>Matt</td>
            <td>Damon</td>
          </tr>
        </tbody>
        </tbody>
      </table>
    </div>
    
    <!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>
</div>

   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
    
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- animation script -->
    <script type="text/javascript">
     
      (function(){
      $(".progress-bar").animate({width: MyObject.IntendedWidth}, 2000);
      
     
         var SomeName = function () {
      $(".progress-bar").animate({width: 0}, 2000);   
      }
      
      var MyObject = {
        hello: "world",
        intendedWith: $(".progress-bar").width() * .75
      };
     
       })()
      SomeName();
    </script>
 
  </body>
</html>