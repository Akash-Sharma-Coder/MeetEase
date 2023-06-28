<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $duration=$_POST['duration'];
    $textarea=$_POST['textarea'];

    $sql="insert into user (name,gender,number,purpose,duration,email) values('$name',' $gender','$number','$textarea','$duration','$email')";
    $result=mysqli_query($con,$sql);
    if($result){
        die(mysqli_error($con));
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Ease</title>
  
     <!-- Required library for webcam -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.24/webcam.js"></script>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/user.css">
</head>
<body>
   
   
    <div class="container">
        <h1 class="piet">Panipat institute of Engineering and Technology</h1>
        <div class="form">
            <h1>MEET EASE</h1>
            <h2>Welcome to PIET</h2>
    <form  method="post">
    <div class="inputbox">
        <span>Enter your name: </span>
        <input class="name" type="text" name="name">
       
    </div>
    <div class="gender">
        <span>Gender:</span>
        <label class="label1">Male</label>
        <input class="radio1" type="radio" name="gender" value="Male">
        <label class="label2">Female</label>
        <input class="radio2" type="radio" name="gender" value="femail">
        
        
    </div>
    <div class="inputbox">
        <span>Enter your number: </span>
        <input type="number" name="number">
        
    </div>
    <div class="inputbox">
        <span>Enter your Email: </span>
        <input class="email" type="email" name="email">
    </div>
    <div class="inputbox">
        <span class="textarea_text">Enter your purpose: </span>
        <textarea style="border-radius: 12px;" class="textarea" name="textarea" id="" cols="30" rows="2" placeholder="Enter your Purpose"></textarea>
    </div>
    <div class="inputbox">
        <span class="textarea_text">Enter Duration(min): </span>
        <input class="time" type="number" placeholder="meeting Duration" name="duration">
    </div>
    <div class="row">
        <div class="col-lg-6" align="center">
            <label>Capture live photo</label>
            <div id="my_camera" class="pre_capture_frame" ></div>
            <input type="hidden" name="captured_image_data" id="captured_image_data">
            <br>
            <input type="button" class="btn btn-info btn-round btn-file" value="Take Snapshot" onClick="take_snapshot()" >	
        </div>
        <div class="col-lg-6" align="center">
            <label>Result</label>
            <div id="results" >
                <img style="width: 350px; height: 287px;" class="after_capture_frame" src="image_placeholder.jpg" / name="image">
            </div>
            <br>
            <button type="button" class="btn btn-success" onclick="saveSnap()" name="imagetaken">Save Picture</button>
        </div>	
      </div><!--  end row -->
      <div class="submit">
        <input type="submit" value="submit" name="submit">
    </div>
    <div class="reset">
        <input type="reset" value="reset"name="reset">
    </div>
    </form>
</div>
    
    
    </div>
      <script language="JavaScript">
        // Configure a few settings and attach camera 250x187
        Webcam.set({
         width: 350,
         height: 287,
         image_format: 'jpeg',
         jpeg_quality: 90
        });	 
        Webcam.attach( '#my_camera' );
       
       function take_snapshot() {
        // play sound effect
        //shutter.play();
        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').innerHTML = 
         '<img class="after_capture_frame" src="'+data_uri+'"/>';
        $("#captured_image_data").val(data_uri);
        });	 
       }
   
       function saveSnap(){
       var base64data = $("#captured_image_data").val();
        $.ajax({
               type: "POST",
               dataType: "json",
               url: "capture_image_upload.php",
               data: {image: base64data},
               success: function(data) { 
                   alert(data);
               }
           });
       }
   </script>
</body>
</html>