<?php
// DO NOT REMOVE!
include("includes/init.php");
$title = "Home Page";
// DO NOT REMOVE!
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?> - MindAid</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <!-- Source: Kyle Harms: Lab 1-->

  <!-- TODO: This should be your main page for your site. -->
  <?php include("includes/header.php"); ?>

  <div id="content-wrap">
    <article id="content">
      <div class="container">
      <h2>Let's Talk about Mental Health</h2>
      <img src="/images/Mental_Health.jpg" alt="Mental Health" style="width:200px; height:150px"/>
      <!-- Source: http://oregonsportsnews.com/wp-content/uploads/2018/10/MentalHealth.jpg-->
      Source: <cite><a href="http://oregonsportsnews.com/wp-content/uploads/2018/10/MentalHealth.jpg">http://oregonsportsnews.com/wp-content/uploads/2018/10/MentalHealth.jpg</a></cite>
      <h2>What is it?</h2>
      </div>

      <div class="container">
      <h2>How do I help someone in a crisis?</h2>
      <img src="/images/problem.jpg" alt= "Crisis" style="width:200px; height:150px"/>
      <!-- Source: http://www.homelessnessandhealth.co.uk/events/2017/wp-content/uploads/sites/3/2017/02/logo-crisis-main.jpg-->
      Source: <cite><a href="http://www.homelessnessandhealth.co.uk/events/2017/wp-content/uploads/sites/3/2017/02/logo-crisis-main.jpg">http://www.homelessnessandhealth.co.uk/events/2017/wp-content/uploads/sites/3/2017/02/logo-crisis-main.jpg</a></cite>
      <h2>Help Someone</h2>
      </div>

      <div class="container">
      <h2>Seek out Help</h2>
      <ul>
        <li>Crisis Text Line</li>
        <li>The Trevor Project</li>
        <li>Suicide Prevention Lifeline</li>
        <li>After Silence</li>
        <li>Inspire</li>
        <li>EARS</li>
      </ul>
      <h2>Read more</h2>
      </div>

    </article>
  </div>

  <?php include("includes/footer.php"); ?>
</body>
</html>
