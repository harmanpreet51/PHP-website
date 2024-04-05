<?php

include 'dbinfo.php';

$sql_article = "SELECT * FROM articles";
$result_article = mysqli_query($con, $sql_article);
// $row_article = mysqli_fetch_assoc($result_article);

$sql_tutorial = "SELECT * FROM tutorials";
$result_tutorial = mysqli_query($con, $sql_tutorial);
// $row_tutorial = mysqli_fetch_assoc($result_tutorial);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Articles</title>
</head>
<body>
    <div class="header_tile">
        <h1 class="head_title">Home</h1>
        <nav class="head_nav">
            <ul>
            <li id="navi"><a id="nav1" href="homepage.php">Home</a></li>
            <li id="navi"><a id="nav2" href="about.php">About Us</a></li>
            <li id="navi"><a id="nav3" href="contact.php">Contact Us</a></li>
            </ul>
            
        </nav>
    </div>
    
    <div class="content">
    <div id="tut">
    <?php
        while($row_tutorial = mysqli_fetch_assoc($result_tutorial)) {?>
            <div class="tutorial">
                <div><h2><?php echo $row_tutorial['title'];?></h2></div>
                <div id="video"><?php echo $row_tutorial['video_url'];?></div>
                <div><p><?php echo $row_tutorial['description'];?></p></div> 
            </div>
    <?php } ?>
    </div>
    <div id="art">
    <?php
        while($row_article = mysqli_fetch_assoc($result_article)) {?> 
            <div class="article">
               <div><h2><?php echo $row_article['title']?></h2></div> 
                <div><img src="<?php echo $row_article['image_url']?>" alt="Title" width="400" height="300"></div>
                <div><p><?php echo $row_article['content']?></p></div>
            </div>  
    <?php } ?> 
    </div>
    </div>

    <div class="footer">
        <p>Student Name: Harmanpreet Singh  | Student ID: 202104091</p>
    </div>
</body>
</html>