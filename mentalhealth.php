<?php
include("includes/init.php");
$title = "Mental Health and Mental Illnesses";
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Source: Kyle Harms: Lab 3-->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?php echo $title; ?> - MindAid</title>

  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

<body>
  <?php include("includes/header.php"); ?>

    <div id="content-wrap">
    <article id="content">
      <h1>What is Mental Health?</h1>
      <h2>Mental Health</h2>
      <img src="/images/mentalhealthinfographic.png" alt="Mental Health Infographic" style="width:500px; height:300px;">
        <!-- Source: https://www.sportengland.org/media/13350/mentalhealthinfographics_v8-29-06-18.png-->
      Source: <cite><a href="https://www.sportengland.org/media/13350/mentalhealthinfographics_v8-29-06-18.png">https://www.sportengland.org/media/13350/mentalhealthinfographics_v8-29-06-18.png</a></cite>

      <p>Mental health is a state of well-being in which every individual realizes their own potential, can cope with the normal stresses of life, can work productively and is able to make a contribution to their community.</p>

      <h3>Major Mental Health Challenges</h3>
      <ul>
      <li>Everyday Challenges</li>
        <li>Issues everyone tries to balance on a daily basis</li>


      <li>Environmental Factors</li>
        <li>Refers to how someone's upbringing affects their mental health</li>

      <li>Significant Events</li>
        <li>Experiences with loss, rejection, or change that have a tremendous impact on a person's life</li>

      <li>Mental Illnesses</li>
        <li>Any illness that can be diagnosed by a mental health professional</li>

      <li>Developmental Disabilities</li>
        <li>Disabilities that develops before someone turns 22 years old and can cause significant impairment in their life.</li>


      <!-- Source: Cornell Minds Matters
      usp=sharing-->
      <li>Source: <cite>Cornell Minds Matters</cite></li>
    </ul>

    <h2>Mental Illnesses</h2>
    <p>A mental illness is a disease that impacts a person's thought and behavior, resulting in an inability to cope with life's routines and demands.</p>


    <!-- Source: http://www.mentalhealthamerica.net/recognizing-warning-signs-->
    <p>Source: <cite><a href="http://www.mentalhealthamerica.net/recognizing-warning-signs">http://www.mentalhealthamerica.net/recognizing-warning-signs</a></cite></p>

    <h3>Categories of Mental Illnesses</h3>

    <div class="box">
    <h4>Anxiety Disorders</h4>
    <img src="/images/anxiety.jpg" alt="Anxiety" style="width:200px; height:150px;">
    <!-- Source: https://hhp-blog.s3.amazonaws.com/2016/02/Managine-worry-blog-post-image.jpg-->
     Source: <cite><a href="https://hhp-blog.s3.amazonaws.com/2016/02/Managine-worry-blog-post-image.jpg">https://hhp-blog.s3.amazonaws.com/2016/02/Managine-worry-blog-post-image.jpg</a></cite>
    <p>People with anxiety disorders respond to certain situations or objects with fear and dread, as well as with physical signs of anxiety or panic, such as a rapid heartbeat.</p>
    </div>

    <div class="box">
    <h4>Mood Disorders</h4>
    <img src="/images/mood_disorder.jpg" alt="Mood Disorder" style="width:200px; height:150px;">
    <!-- Source: https://paradigmmalibu.com/wp-content/uploads/2014/08/iStock_000009143348_Medium.jpg-->
    Source: <cite><a href="https://paradigmmalibu.com/wp-content/uploads/2014/08/iStock_000009143348_Medium.jpg">https://paradigmmalibu.com/wp-content/uploads/2014/08/iStock_000009143348_Medium.jpg</a></cite>

    <p>Mood disorders involve persistent feelings of sadness or periods of feeling overly happy, or fluctuations from extreme happiness to extreme sadness.</p>
    </div>

    <div class="box">
    <h4>Psychotic Disorders</h4>
    <img src="/images/psychotic_disorder.jpg" alt="Psychotic Disorder" style="width:200px; height:150px;">
    <!-- Source: https://www.thrivetalk.com/wp-content/uploads/2018/07/Brief-Psychotic-Disorder-1.jpg-->
    Source:<cite><a href="https://www.thrivetalk.com/wp-content/uploads/2018/07/Brief-Psychotic-Disorder-1.jpg">https://www.thrivetalk.com/wp-content/uploads/2018/07/Brief-Psychotic-Disorder-1.jpg</a></cite>
    <p>Psychotic disorders involve distorted thinking and awareness.</p>
    </div>

    <div class="box">
    <h4>Eating Disorders</h4>
    <img src="/images/eating_disorder.png" alt="Eating Disorder" style="width:200px; height:150px;">
    <!-- Source: https://i1.wp.com/feminisminindia.com/wp-content/uploads/2018/07/eatingdisordersMAH-480x384.png?fit=480%2C384&ssl=1-->
    Source:<cite><a href="https://i1.wp.com/feminisminindia.com/wp-content/uploads/2018/07/eatingdisordersMAH-480x384.png?fit=480%2C384&ssl=1">https://i1.wp.com/feminisminindia.com/wp-content/uploads/2018/07/eatingdisordersMAH-480x384.png?fit=480%2C384&ssl=1</a></cite>
    <p>Eating disorders involve extreme emotions, attitudes, and behaviors involving weight and food.</p>
    </div>

    <h3><em>Citation</em></h3>
    <!-- Source: https://www.webmd.com/mental-health/mental-health-types-illness#1-->
    <p>Source: <cite><a href="https://www.webmd.com/mental-health/mental-health-types-illness#1">https://www.webmd.com/mental-health/mental-health-types-illness#1</a></cite></p>
    </article>
  </div>

  <?php include("includes/footer.php"); ?>
</body>
</html>
