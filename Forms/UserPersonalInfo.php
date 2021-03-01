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
    <title>User Personal Information</title>

</head>

<body>
<?php 
include('../header.php');
?>
    <div class="container">
        <div class="row">
        <h3 class="text-center my-5">User Personal Information</h3>

            <div class="col-5">
   

                <form class="my-4">
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">DOB</label>
                        <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>



                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Phone No.</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Organization</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Country</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">City</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Address#1</label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>

                </form>





            </div>
            <div class="col-5">
                <form class="my-4">
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Cnic</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Retype Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Phone No.2</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Branch</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">State</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Area</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea2">Address#2</label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                </form>
            </div>

            <div class="col-2">
                <div class="row">
                    <div class="small-12 medium-2 large-2 columns">
                        <div class="circle">
                            <!-- User Profile Image -->
                            <img class="profile-pic"
                                src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                            <!-- Default Image -->
                            <!-- <i class="fa fa-user fa-5x"></i> -->
                        </div>
                        <div class="p-image"> 
                            <i class="fa fa-camera upload-button"></i> 
                            <input class="file-upload" type="file" accept="image/*" />
                           
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>


    <!-- Optional JavaScript -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/bootstrap-5.0.0-beta2-dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
        
            
                var readURL = function(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
            
                        reader.onload = function (e) {
                            $('.profile-pic').attr('src', e.target.result);
                        }
                
                        reader.readAsDataURL(input.files[0]);
                    }
                }
                
            
                $(".file-upload").on('change', function(){
                    readURL(this);
                });
                
                $(".upload-button").on('click', function() {
                   $(".file-upload").click();
                });
            });</script>
</body>

</html>