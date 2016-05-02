<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'Earthquake Hazards Program';
  $HEAD = '
    <link rel="stylesheet" href="/lib/earthquake-list-widget.css"/>
    <link rel="stylesheet" href="index-alt.css"/>
  ';
  $FOOT = '
    <script src="/lib/earthquake-list-widget.js"></script>
    <script src="index.js"></script>
  ';
  include 'template.inc.php';
}
?>

<h2>Highlights</h2>

<?php
include_once '_features.inc.php';
echo $EQ_FEATURES->toHtml();
?>

<a href="atom.php"><img style="padding-right:16px;" src="images-home/rssfeed.gif" alt="ATOM feed">Subscribe to Earthquake Highlights</a>

<hr/>

<div class="row right-to-left">

  <!-- Latest EQs and Significant EQs List -->
  <div class="column one-of-two">

    <a href="/earthquakes/map/">
      <h2>Latest Earthquakes</h2>
      <img class="latest-img" src="earthquakes/images/latesteqs-300for150.gif" alt="map of latest earthquakes"/>
    </a>
    <p>
      Latest earthquakes map and list (past 24 hours, M2.5+). Tap/click on "gear icon" for options and settings.
    </p>

    <br style="clear:left;"/>
    <a href="/earthquakes/map/#%7B%22feed%22%3A%2230day_sig%22%2C%22search%22%3Anull%2C%22listFormat%22%3A%22default%22%2C%22sort%22%3A%22newest%22%2C%22basemap%22%3A%22terrain%22%2C%22autoUpdate%22%3Atrue%2C%22restrictListToMap%22%3Afalse%2C%22timeZone%22%3A%22utc%22%2C%22mapposition%22%3A%5B%5B-78.49055166160312%2C74.8828125%5D%2C%5B78.42019327591201%2C325.1953125%5D%5D%2C%22overlays%22%3A%7B%22plates%22%3Atrue%7D%2C%22viewModes%22%3A%7B%22map%22%3Atrue%2C%22list%22%3Atrue%2C%22settings%22%3Afalse%2C%22help%22%3Afalse%7D%7D">
     <h2>Significant Earthquakes, Past 30 Days</h2>
   </a>

    <div id="significant-earthquakes" class="height_scroll" style="overflow:scroll; background:#f4f4f4;">

      <noscript class="error alert">
        Javascript is used to load event data. If you can not enable Javascript,
        you can <a href="feed/v1.0/summary/significant_month.csv">view
        the raw data here</a>.
      </noscript>
    </div>
  </div>

<!-- 6 Sections of Website -->
  <div class="column one-of-two">
    <section class="sections">
      <ul>

        <li>
          <h2><a href="/earthquakes/">Earthquakes</a></h2>
              <a href="/earthquakes/">
                <img src="/images-home/home-earthquakes800for400.gif" alt="" />
              </a>
            <p>
              Information about real-time earthquakes, online catalog search of
              archives, seismicity maps and statistics.
            </p>
          </a>
        </li>
        <li>
          <h2><a href="/hazards/">Hazards</a></h2>
              <a href="/hazards/">
                <img src="/images-home/home-hazards800for400.gif" alt="" />
              </a>
            <p>
              US faults, information about seismic hazards in various areas,
              tools for seismic design values.
            </p>
          </a>
        </li>
        <li>
          <h2><a href="/data/">Data &amp; Products</a></h2>
              <a href="/data/">
                <img src="/images-home/home-data800for400.gif" alt="" />
              </a>
            <p>
              Monitoring, station, and other various seismic data available for
              download. Data products to view and download.
            </p>
          </a>
        </li>
        <li>
          <h2><a href="/learn/">Learn</a></h2>
              <a href="/learn/">
                <img src="/images-home/home-learn800for400.jpg" alt="" />
              </a>
            <p>
              The science of earthquakes, FAQ, glossary, links to earthquake
              topics, Earthquakes for kids.
            </p>
          </a>
        </li>
        <li>
          <h2><a href="/monitoring">Monitoring</a></h2>
            <a href="/monitoring">
              <img src="/images-home/home-monitoring800for400.gif" alt="" />
            </a>
            <p>
              Global, national and regional networks recording earthquakes and
              crustal movements, maps, station information, real-time seismic
              waveforms.
            </p>
          </a>
        </li>
        <li>
          <h2><a href="/research/">Research</a></h2>
              <a href="/research/">
                <img src="/images-home/home-research800for400.jpg" alt="" />
              </a>
            <p>
              Research projects in the Earthquake Hazards Program, external
              research support, science center activities, software.
            </p>
          </a>
        </li>
      </ul>
    </section>

  </div>

</div>
