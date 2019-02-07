<?php
include('header.php');
include ('connect.php');
$sql = 'SELECT * FROM `team` ';
$result = mysqli_query($dbconn, $sql);



?>
<!DOCTYPE html>
<html lang='en' >

<head>
  <meta charset='UTF-8'>
  <title> Team-Drishti</title>
  
  
  
    <style type='text/css'>

        body{
            background-color:#f1f9f2 !important;
        }
            
        .our-team{
            text-align: center;
            position: relative;
            color: #fff;
        }
        .our-team img{
            

            width: 100%;
            height: 100%;
            border-radius: 50%
        }
        .our-team .content{
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            height: 100%;
            width: 100%;
            border-radius: 50%;
            left: 0;
            top: 0;
            text-align: center;
            padding-top: 30%;
            transform: perspective(400px) rotateX(-90deg);
            transform-origin: center top 0;
            transition: all 0.5s ease 0s;
            opacity: 0;
        }
        .our-team:hover .content,
        .our-team.active .content{
            opacity: 1;
            border-radius: 50%;
            transform: perspective(400px) rotateX(0deg);
        }
        .our-team .content .title{
            margin: 0 0 10px;
            display: block;
            font-size: 25px;
            font-weight: 600;
        }
        .our-team .content .post{
            margin: 0 0 25px;
            display: block;
            font-size: 15px
        }
        .our-team .social{
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        .our-team .social li{
            display: inline-block;
        }
        .our-team .social li a{
            display: block;
            color: #fff;
            font-size: 20px;
            height: 40px;
            width: 40px;
            line-height: 40px;
            border-radius: 5%;
            background-color: #F32248;
            margin-right: 5px;
            transition: all 0.5s ease 0s;
            position: relative;
        }
        .our-team .social li a:hover, .our-team.active .social li a{
            border-radius: 50%;
            text-decoration: none;
        }
        @media screen and (max-width: 990px){
            .our-team{
                margin-bottom: 30px;
            }
        }
    </style>

  
</head>

<body>

 
<head lang='en'>
    <meta charset='UTF-8'>
    <title>Team Drishti</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
     <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
</head>


<div class='container'>

    <div class='row team'   style='margin-top: 50px;margin-bottom: 100px;'>
        <?php 
if (mysqli_num_rows($result) >0 ) {
  
    while($row = mysqli_fetch_array($result)) {?>



  

        <div class='col-md-3 col-sm-6 '>
            <div class='our-team' style='width: 260px;height: 260px; margin: 30px;'>
                <div class='pic'>
                    <img src='<?php echo$row[3]; ?>' style='width: 260px;height: 260px;' alt='team member' class='img-responsive'>
                </div>
                <div class='content'>
                    <h3 class='title'><?php echo $row[1]; ?></h3>
                    <h4 style='opacity:0.8; padding-bottom: 4px;'><?php echo $row[2]; ?></h4>
                    <ul class='social'>
                        <li><a href='<?php echo $row[4]; ?>' class='fa fa-facebook'></a></li>
                         <li><a href='<?php echo $row[5]; ?>' class='fa fa-envelope'></a></li>
                        <li><a href='<?php echo $row[6]; ?>' class='fa fa-twitter'></a></li>
                       
                        <li><a href='<?php echo $row[7]; ?>' class='fa fa-linkedin'></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
       
}
}

else {
    echo "0 results";
};

?>
</div>
</div>




</body></html>
