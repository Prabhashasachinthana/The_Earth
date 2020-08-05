<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Earth</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
 <style type="text/css">

 </style><?php include 'styls.css' ?>
</head>

<body style="background-color:#ffffb3;">
	<?php include 'Heder&footer/headerimagers.php' ?>
        <div class="imagerspage">
          <div class="imge"><img src="Imagers/3d31f504082a503778a17a506a8ffa49.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/06-770x468.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/30-fakte-qe-nuk-i-dini-per-token-1.jpg" width="240px" height="135px" /></div>
          <div  class="imge"><img src="Imagers/329050.jpg" width="240px" height="135px"/></div>
          <div class="imge"><img src="Imagers/Australian-Sea-Lions-6.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/beau-guide-nature-belle-irlande-carte-touristique-irréel-vues.jpg" width="240px" height="135px"/></div>
          <div class="imge"><img src="Imagers/Beautiful River Wallpaper (8).jpg" width="240px" height="135px"/></div>
          <div class="imge"><img src="Imagers/ab.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/earth-and-moon-2.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/z.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/vCtg1dU.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/earth-wallpapers-610x343.jpg" width="240px" height="135px" /></div> 
          <div class="imge"><img src="Imagers/g5DfUc4.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/Green-Grass-Mountains-Wallpaper-For-Desktop.jpg" width="240px" height="135px" /></div>
          <div class="imge"><img src="Imagers/images (1).jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/images.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/imgres.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/mountain_landscape_nature_by_albertjamesburleson-db79qzu.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/mountains-Kirkjufe_3374110a-large.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/mountains-wallpaper-hd-widescreen-wallpaper-2.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/nebo-oblaka-more-ozero-derevo.jpg"width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/orig_38864.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/reflective-mountains-wallpaper.preview.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/river-scenic-spot.jpg" width="240px" height="135px"  /></div>
          <div class="imge"><img src="Imagers/San-Joaquin-River-headwaters-CA-credit-J-Cook-Fisher_1600-1600x629 (1).jpg" width="240px" height="135px"  /></div>
          
          
           <?php
// dbconfig.php file contains database connection codes
                    include 'DataBaseConnection.php';
                    $sql = "SELECT 'id-Custome',Name,Email,Idea,image FROM abutustable";						
// execute the query and stores the 
//returned records in $result variable
                    $result = $conn->query($sql);
// checks whether result has one or more rows
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                           ?>
                    
                     <div class="imge">
                     <img  data-src="holder.js/64x64" src="uploads/<?php echo $row['image'];?>" width="240px" height="135px" data-holder-rendered="true" />
                     </div>
                     
                     
                            
                                 
                        
                   <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
        	
        </div>

<?php include 'Heder&footer/footer.php';?>
</body>
</html>