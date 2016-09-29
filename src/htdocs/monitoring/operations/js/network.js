/* global STATIONS, TELEMETRY_URL */
/* global TELEMETRY_ICONS, TELEMETRY_DESCRIPTIONS */
/* global NetworkMap, TelemetryFactory */
'use strict';

var legendEl,
    mapEl;

legendEl = document.querySelector('.network-map-legend');
mapEl = document.querySelector('.network-map-container');

TelemetryFactory({url: TELEMETRY_URL}).getTelemetry({
  onSuccess: function (allTelemetry) {
    var telemetryMap;

    telemetryMap = {};
    allTelemetry.forEach(function (item) {
      telemetryMap[item.id] = item.telemetry;
    });

    // Create the map
    NetworkMap({
      el: mapEl,
      stations: STATIONS.map(function (station) {
        station.properties.telemetry = telemetryMap[station.id] || 0;
        return station;
      })
    });

    // Create the legend
    legendEl.innerHTML = [
      '<h3>Legend</h3>',
      '<ul class="no-style">',
        TELEMETRY_ICONS.map(function (icon, index) {
          return [
            '<li>',
              '<img src="', icon, '" alt="Telemetry Status ', index, '"/> ',
              TELEMETRY_DESCRIPTIONS[index],
            '</li>'
          ].join('');
        }).join(''),
      '</ul>'
    ].join('');

    // Update the table rows
    allTelemetry.forEach(function (item) {
      var el;

      el = document.querySelector('#telemetry-' + item.id);
      if (el) {
        el.innerHTML = [
          '<img src="', TELEMETRY_ICONS[item.telemetry], '" ',
              'alt="Telemetry Status ', item.telemetry, '"/>'
        ].join('');
      }
    });
  },
  onError: function (message) {
    legendEl.innerHTML = '<p class="alert warning">' + message + '</p>';
  }
});
