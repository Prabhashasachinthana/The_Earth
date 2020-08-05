<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Earth</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
<style type="text/css">

</style><?php include 'styls.css'; ?>
</head>

<body style="background-color:#ffffb3;">
<?php include 'Heder&footer/HeadAboutUs.php';?>
<div class="adoutUsdetails">
          	<p class="aboutusPtag"><b>Hi.....
            <img style="float:right;" src="Imagers/5450516-Funny-musician-vector-and-cartoon-character-Stock-Vector-boy.jpg" width="200px" height="" />
            <br>
            How is our  web page? You have new imagers of earth you can upload our web site.</b>
           <div style="width:550px;"> 
           <marquee direction="right">
           <img src="Imagers/about us.jpg" width="200px" height="" />
           </marquee></div></p>
          </div>
<div class="aboutusHr"></div>
          
        <div class="aboutus row">
       	  <div class="aboutusrightside">
            	<h1 class="h1styleaboutus">Are you like to upload image? fill this form</h1>
            </div>
        	<div class="aboutusFormDiv ">
          	<form enctype="multipart/form-data" method='post' action="logicsearth/AboutUs-Logic.php" role="form">
  				<div class="form-group">
    				<label  class="labelstyle" for="txtname">Name:</label>
    				<input style="" class="form-control inputstyle" id="txtName" name="txtName" type="text" value="" placeholder="Your name" >
  				</div>
                  <div class="form-group">
                    <label class="labelstyle" for="txtemail">Email:</label>
                    <input type="email" class="form-control inputstyle" name="txtEmail" id="txtEmail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label class="labelstyle" for="fileimg">Your idea:</label>
                    <textarea class="form-control inputstyle"  name="txtYouIdea" placeholder="How is Our web page"></textarea>
                    
                  </div>
                  <div class="form-group">
                    <label style="margin-top:0;"class="labelstyle" for="fileimg">Earth Image:</label>
                    <input type="file"  class="form-control inputstyle" name="txtCImage" id="txtCImage">
                    
                  </div>
                  <div style="margin-left:130px;"class="">
                                    <button name="btn-post" type="submit" style="background-color:#666;color: #FFF;"
                                    class="btn ">ok</button>
                    </div>
                </form>
          </div>
          
</div>

<div class="aboutusHr"></div>




<?php
// dbconfig.php file contains database connection codes
                    include'DataBaseConnection.php';

                    $sql = "SELECT id_Custome,Name,Email,Idea,image FROM abutustable";
							
// execute the query and stores the 
//returned records in $result variable
                    $result = $conn->query($sql);

// checks whether result has one or more rows
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                           ?>
                    <div class="ideabar">
                      <div class="aboutUsImg">
                      	<img  data-src="holder.js/64x64" src="uploads/<?php echo $row['image']; ?>" 
                        width="100px" height="" data-holder-rendered="true" />
                      </div>
                      <div class="aboutUsIdea"><?php echo $row['Name'];
					  									$Y=' said web site is ';
														echo $Y;
					  								echo $row['Idea']; ?></div>
                    </div>

              
                        
                   <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>








<?php include 'Heder&footer/footer.php' ?>
<script src="jquery/jquery-1.12.2.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>