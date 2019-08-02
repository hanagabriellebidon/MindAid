<?php
include("includes/init.php");

$title = 'Seek out Help';
// Source : Kyle Harms : Lab 3

// Did the user submit the form?
if (isset($_POST['submit'])) {
  // Suppose that the survey form is valid.
  $valid_order = true;

  // Name is required.
  $ordername = trim($_POST['order_name']);
  if ($ordername == '') {
    $valid_order = false;
    $show_order_name_error = true;
  }

  // NetID is required.
  $netID = trim($_POST['order_name']);
  if ($netID == '') {
    $valid_order = false;
    $show_netID_error = true;
  }

  // Today's date is required.
  $date = trim($_POST['order_name']);
  if ($date == '') {
    $valid_order = false;
    $show_date_error = true;
  }

  // Email address is required.
  $email = trim($_POST['order_name']);
  if ($email == '') {
    $valid_order = false;
    $show_email_error = true;
  }

} else {
  // Form was not submitted.
}
?>
<!DOCTYPE html>
<html>
<body>
  <?php include("includes/header.php"); ?>

  <div id="content-wrap">
    <article id="content">
    <!-- Source: Kyle Harms: Lab 3-->
      <?php
      if (isset($valid_order) && $valid_order) { ?>
      <ul>
        <li>Name: <?php echo htmlspecialchars($ordername); ?></li>
        <li>NetID: <?php echo htmlspecialchars($netID); ?></li>
        <li>Today's Date: <?php echo htmlspecialchars($date); ?></li>
        <li>Email Address: <?php echo htmlspecialchars($email); ?></li>
      </ul>
      <?php

    } else { ?>

        <h2>MindAid Vistor Information Survey</h2>
        <p>Welcome to the demographic survey for MindAid.</p>

        <form id="vistor_order" method="post" action="help.php">
          <fieldset>
            <legend>Survey Form</legend>

            <p class="form_error <?php if (!isset($show_order_name_error)) {echo 'hidden';} ?>">Please provide a name.</p>
            <p>
              <label for="name_field">Name:</label>
              <input id="name_field" type="text" name="order_name" value="<?php if (isset($ordername)) {echo htmlspecialchars($ordername);
              } ?>"/>
            </p>

            <p class="form_error <?php if (!isset($show_netID_error)) {echo 'hidden';} ?>">Please provide your netID.</p>
            <p>
              <label for="name_field">NetID:</label>
              <input id="netID_field" type="text" name="order_name" value="<?php if (isset($netID)) {echo htmlspecialchars($netID);} ?>"/>
            </p>

            <p class="form_error <?php if (!isset($show_date_error)) {echo 'hidden';} ?>">Please provide today's date.</p>
            <p>
              <label for="name_field">Date:</label>
              <input id="date_field" type="text" name="order_name" value="<?php if (isset($date)) {echo htmlspecialchars($date);} ?>"/>
            </p>

            <p class="form_error <?php if (!isset($show_email_error)) {echo 'hidden';} ?>">Please provide your email address.</p>
            <p>
              <label for="name_field">Email:</label>
              <input id="email_field" type="text" name="order_name" value="<?php if (isset($email)) {echo htmlspecialchars($email);} ?>"/>
            </p>
            <input type="submit" name="submit" value="Enter Information"/>
          </fieldset>
        </form>

      <?php

    } ?>

    <p>Disclaimer: If you are in immediate danger of harming yourself or others, please call 911 and go to the nearest emergency room.</p>


      <h2><u>Hotlines</u></h2>
      <p>The purpose of a hotline is to get immediate assistance when someone is in a crisis, meaning that they're in extreme distress.</p>

      <ul>
      <li>Suicide Prevention Lifeline</li>
          <!-- Source: https://suicidepreventionlifeline.org/chat/-->
          <li>Source: <cite><a href="https://suicidepreventionlifeline.org/chat/">https://suicidepreventionlifeline.org/chat/</a></cite></li>
          <li>Phone Number: 1-800-273-8255</li>


      <li>Crisis Text Line</li>
          <!-- Source: https://www.crisistextline.org/-->
          <li>Source: <cite><a href="https://www.crisistextline.org/">https://www.crisistextline.org/</a></cite></li>
          <li>Phone Number: TEXT HOME to 741741</li>

      <li>The Trevor Project (LGBTQIA+ individuals)</li>
          <!-- Source: https://www.thetrevorproject.org/-->
          <li>Source: <cite><a href="https://www.thetrevorproject.org/">https://www.thetrevorproject.org/</a></cite></li>
          <li>Phone Number: 1-866-488-7386</li>
          <li>TrevorText: TEXT START to 678678</li>

      <li>National Mental Health Association Hotline</li>
          <!-- Source: http://www.nmha.org-->
          <li>Source: <cite><a href="http://www.nmha.org">http://www.nmha.org</a></cite></li>
          <li>Phone Number: 800-273-8255</li>

      <li>Hopeline</li>
          <!-- Source: https://www.hopeline-nc.org/-->
          <li>Source: <cite><a href="https://www.hopeline-nc.org/">https://www.hopeline-nc.org/</a></cite></li>
          <li>Phone Number: 877-235-4525</li>

      </ul>

      <h2><u>Online Support Groups</u></h2>
      <p>The purpose of an online support group is to connect other people who share similar problems as you.</p>

      <ul>
      <li>After Silence</li>
          <!-- Source: http://www.aftersilence.org/-->
          <li>Source: <cite><a href="http://www.aftersilence.org/">http://www.aftersilence.org/</a></cite></li>

      <li>Hearing Voices USA</li>
          <!-- Source: http://www.hearingvoicesusa.org/-->
          <li>Source: <cite><a href="http://www.hearingvoicesusa.org/">http://www.hearingvoicesusa.org/</a></cite></li>

      <li>Inspire</li>
          <!-- Source: https://www.inspire.com/-->
          <li>Source: <cite><a href="https://www.inspire.com/">https://www.inspire.com/</a></cite></li>

      <li>Online Intergroup: Alcoholics Anonymous</li>
          <!-- Source: https://www.aa-intergroup.org/index.php-->
          <li>Source: <cite><a href="https://www.aa-intergroup.org/index.php">https://www.aa-intergroup.org/index.php</a></cite></li>

      <li>SAVE</li>
          <!-- Source: https://save.org/-->
          <li>Source: <cite><a href="https://save.org/">https://save.org/</a></cite></li>

      </ul>

      <h2><u>On Campus Resources</u></h2>
      <p>Cornell provides various mental health services for when someone needs counseling or is in a crisis.</p>

      <ul>
      <li>Counseling & Psychological Services (CAPS)</li>
          <!-- Source: https://health.cornell.edu/services/counseling-psychiatry-->
          <li>Source: <cite><a href="https://health.cornell.edu/services/counseling-psychiatry">https://health.cornell.edu/services/counseling-psychiatry</a></cite></li>
          <li>Phone Number: 607-255-5155</li>
          <li>Location: 110 Ho Plaza, Ithaca, NY 14853-3101</li>

      <li>EARS</li>
          <!-- Source: http://orgsync.rso.cornell.edu/org/ears-->
          <li>Source: <cite><a href="http://orgsync.rso.cornell.edu/org/ears">http://orgsync.rso.cornell.edu/org/ears</a></cite></li>
          <li>Phone Number: (607)255-EARS</li>
          <li>Location: 213 Willard Straight Hall, Ithaca, NY 14853</li>


      <li>Let's Talk Drop-In Hours (provided by CAPS)</li>
          <!-- Source: https://health.cornell.edu/services/counseling-psychiatry/lets-talk-->
          <li>Source: <cite><a href="https://health.cornell.edu/services/counseling-psychiatry/lets-talk">https://health.cornell.edu/services/counseling-psychiatry/lets-talk</a></cite></li>


      <li>Cornell Minds Matter (CMM)</li>
          <!-- Source: http://orgsync.rso.cornell.edu/org/cornellmindsmatter-->
          <li>Source: <cite><a href="http://orgsync.rso.cornell.edu/org/cornellmindsmatter">http://orgsync.rso.cornell.edu/org/cornellmindsmatter</a></cite></li>



      <li>Faculty & Staff Assistance Program (FSAP)</li>
          <!-- Source: http://fsap.cornell.edu/-->
          <li>Source: <cite><a href="http://fsap.cornell.edu/">http://fsap.cornell.edu/</a></cite></li>


      </ul>

      <h2><u>Off Campus Resources</u></h2>
      <p>Ithaca provides various mental health services for when someone needs counseling or is in a crisis.</p>

      <ul>
      <li>211 Lifeline</li>
          <!-- Source: https://211lifeline.org/detail.php?id=7337596-->
          <li>Source: <cite><a href="https://211lifeline.org/detail.php?id=7337596">https://211lifeline.org/detail.php?id=7337596</a></cite></li>
          <li>Phone Number: 1-877-356-9211 or 211</li>
          <li>Location: 201 E. Green Street, Ithaca, NY 14850</li>



      <li>National Alliance of Mental Illnesses</li>
          <!-- Source: http://www.namifingerlakes.org/-->
          <li>Source: <cite><a href="http://www.namifingerlakes.org/">http://www.namifingerlakes.org/</a></cite></li>
          <li>Phone Number: (607) 273-2462</li>
          <li>Location: 108 North Cayuga Street, Ithaca, NY 14850</li>



      <li>Alcoholics Anonymous (AA) in Ithaca</li>
          <!-- Source: https://www.ithacacommunityrecovery.org/meetings/alcoholics-anonymous/-->
          <li>Source: <cite><a href="https://www.ithacacommunityrecovery.org/meetings/alcoholics-anonymous/">https://www.ithacacommunityrecovery.org/meetings/alcoholics-anonymous/</a></cite></li>
          <li>Phone Number:(607) 216-8754</li>
          <li>Location: 518 West Seneca St. Ithaca, NY 14850</li>



      <li>Hospicare</li>
          <!-- Source: https://www.hospicare.org/-->
          <li>Source: <cite><a href="https://www.hospicare.org/">https://www.hospicare.org/</a></cite></li>
          <li>Phone Number: 607-272-0212</li>
          <li>Location: 172 East King Road, Ithaca, NY</li>

      <li>Invisible Disabilities Support Group</li>
          <!-- Source: www.fliconline.org/-->
          <li>Source: <cite><a href="www.fliconline.org/">www.fliconline.org/</a></cite></li>
          <li>Phone Number: (607) 272-2433</li>
          <li>Location: 215 Fifth Street, Ithaca, NY 14850</li>
      </ul>

    </article>
    </div>

  <?php include("includes/footer.php"); ?>
</body>

</html>
