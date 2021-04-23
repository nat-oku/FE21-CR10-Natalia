<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Error</title>
        <!-- inserting fonts php file -->
        <?php require_once 'components/fonts.php'?>
        
        <!-- inserting Bootstrap -->
        <?php require_once 'components/boot_CSS.php'?>
        
        <!-- CSS only for this project -->
        <link rel="stylesheet" href="css/style.css">
    </head>

   <body>
       <div  class="container"> 
           <div class="mt-3 mb-3" >
               <h2 class="textColor-4">Invalid Request</h2>
           </div>
            <div class="alert bgColor-4 textColor-1" role="alert">
               <h5 class="fw-light">You've made an invalid request. Please <a href="create.php" class="fw-bold link-light textColor-1">go back</a> and try again.</h5>
           </div>
           <div class="d-flex justify-content-start fs-3 textColor-4">
            <i class="fas fa-exclamation-triangle"></i>
            <i class="far fa-sad-tear"></i>
            <i class="far fa-sad-tear"></i>
            <i class="far fa-sad-tear"></i>
            <i class="far fa-sad-tear"></i>
            <i class="far fa-sad-tear"></i>
            <i class="far fa-sad-tear"></i>
            <i class="far fa-sad-tear"></i>
            <i class="fas fa-exclamation-triangle"></i>
           </div>

        </div>

   </body>
</html>