<?php
$section = "/contactus";

  echo "<a href='/contactus' class='up-one-level'>Contact Us/Regional Science Activities</a>";

  echo navItem("${section}/headquarters.php", "Headquarters");

  echo navGroup(("Science Centers"),

    navItem("${section}/anchorage/", "Alaska Science Center").
    navItem("${section}/menlo/", "Earthquake Science Center").
    navItem("${section}/golden/", "Geologic Hazards Science Center")
  );

  echo navGroup(("Regional and Field Offices"),

    navItem("${section}/seattle/", "Seattle Field Office").
    navItem("${section}/pasadena/", "Pasadena Field Office").
    navItem("${section}/albuquerque/", "Albuquerque Seismo Lab")
);

  echo navItem("${section}/media.php", "Media Contacts");
  echo navItem("mailto:lisa%2Behpweb@usgs.gov?cc=lkpratt%2Behpweb@usgs.gov", "Earthquake Questions and Website Feedback");

?>
