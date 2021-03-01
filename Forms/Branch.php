<!doctype html>
<html lang="en">

<head>
     
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font - awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
         <!-- Optional JavaScript -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    <!-- Custom Style File -->
    <link rel="stylesheet" href="UserFormstyle.css">
    <title>User Education</title>

</head>

<body>
<?php 
include('../header.php');
?>
    <div class="container">
        <div class="row">
        <h3 class="text-center my-5">Branch</h3>

            <div class="col-5">
   

                <form class="my-4">
                <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Select Organization</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                   

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Short Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
          

              

                </form>





            </div>
            <div class="col-5">
                <form class="my-4">
                <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">State Name </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
           

               
                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Description</label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                
                   
                </form>
                
            </div>
         
       
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>


 
</body>

</html>