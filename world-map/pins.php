<?php

$read = $db->Read('location');
//foreach ($read as $item) {
//    echo $item["LandCode"] . "<br>";
//}
?>
<script type="text/javascript">
    window.addEventListener("earthjsload", function () {

        // parse plane mesh from string in airports-and-plane-mesh.js
        Earth.addMesh(airplaneMesh);


        // setup earth
        // colors of earth
        myearth = new Earth('myearth', {
            location: {lat: 20, lng: 10},
            light: 'none',
            mapLandColor: '#fff',
            mapSeaColor: '#66d8ff',
            // mapBorderColor: '#66d8ff',
            mapBorderColor: '#0a0038',
            // mapBorderColor: '#000000',
            mapBorderWidth: 0.4
        });


        myearth.addEventListener("ready", function () {

            var fromSelect = document.getElementById('from');
            var toSelect = document.getElementById('to');


            // add airport pins from airports array in airports-and-plane-mesh.js

            for (var i = 0; i < airports.length; i++) {

                var marker = this.addMarker({

                    mesh: ["Pin", "Needle"],
                    // color: '#00a8ff',
                    color: '#02468C',
                    color2: '#9f9f9f',
                    offset: -0.2,
                    location: {lat: airports[i][2], lng: airports[i][3]},
                    scale: 0.01,
                    visible: false,
                    hotspot: true,
                    hotspotRadius: 0.4,
                    // hotspotRadius: 0.3,
                    hotspotHeight: 1.5,
                    // hotspotHeight: 1,

                    // custom properties
                    index: i,
                    airportCode: airports[i][0],
                    landName: airports[i][1],
                    // countryInformation: airports[i][2],

                });


                // pin events

                marker.addEventListener('mouseover', function () {

                    document.getElementById('tip-layer').style.opacity = 1;
                    document.getElementById('tip-big').innerHTML = this.airportCode;
                    document.getElementById('tip-small').innerHTML = this.landName.split(',').join('<br>');


                    // color pins hover
                    this.color = '#E20026';

                });

                marker.addEventListener('mouseout', function () {

                    if (this != startMarker && this != endMarker) {
                        this.color = '#02468C';
                    }
                    document.getElementById('tip-layer').style.opacity = 0;

                });

                
                // when you click a pin
                function myFunction(landName) {
                    document.getElementById('from').value = landName;
                    document.forms["nameOption"].submit();
                }
                marker.addEventListener('click', function () {
                    if (!startMarker) {
                        myFunction(this.landName);
                    }
                });

                markers.push(marker);


                // add select options

                var option = document.createElement("option");
                option.setAttribute("value", airports[i][1]/*.toLowerCase()*/);
                option.text = airports[i][0] + ' | ' + airports[i][1];
                fromSelect.add(option);

                var option = document.createElement("option");
                option.text = airports[i][0] + ' | ' + airports[i][1];
                toSelect.add(option);

            }

            restorePins();

        });

    });


    var markers = [];

    var flying = false;
    var plane, X;
    var startMarker, endMarker;
    var dashedLine, solidLine;
    var flightScale = 1;


    function selectStartMarker(marker) {

        document.body.classList.add('config-start');

        document.getElementById('from').setAttribute('disabled', true);
        document.getElementById('from').selectedIndex = marker.index + 1;
        document.getElementById('to').removeAttribute('disabled');


        // shrink selected marker
        startMarker = marker;
        startMarker.dispatchEvent({type: 'mouseout'});
        startMarker.hotspot = false;
        startMarker.animate('scale', 0.01, {
            easing: 'in-quad', complete: function () {

                this.visible = false;
                plane.animate('scale', 1.2, {easing: 'out-back'});

            }
        });


        // add plane

        plane = myearth.addMarker({
            mesh: "plane",
            color: '#444',

            location: marker.location,
            scale: 0.01,
            offset: 0,
            lookAt: {lat: 0, lng: 0},
            hotspot: false,
            transparent: true
        });


        // approach marker location

        myearth.goTo(marker.location, {duration: 200, relativeDuration: 300, approachAngle: 20});

    }

    function selectEndMarker(marker) {

        document.getElementById('to').setAttribute('disabled', true);
        document.getElementById('to').selectedIndex = marker.index + 1;

        // shrink marker
        endMarker = marker;
        endMarker.dispatchEvent({type: 'mouseout'});
        endMarker.hotspot = false;
        endMarker.animate('scale', 0.01, {
            easing: 'in-quad', complete: function () {

                this.visible = false;
                X.animate('scale', 0.8 * flightScale, {easing: 'out-back'});

            }
        });


        myearth.goTo(marker.location, {duration: 200, relativeDuration: 300, approachAngle: 20});

        startFlight();

    }


    function startFlight() {

        flying = true;

        shrinkPins();

        var distance = Earth.getDistance(startMarker.location, endMarker.location);
        flightScale = 1;


        // shrink plane for short flights
        if (distance < 3000) {
            flightScale = 0.6 + flightScale / 3000 * 0.4;
            plane.animate('scale', 1.2 * flightScale);
        }

        // var flightTime = 2000 + distance;


        // add target X

        X = myearth.addMarker({
            mesh: "X",
            color: '#444',

            location: endMarker.location,
            scale: 0.01,
            offset: 0,
            hotspot: false
        });


        // add lines

        dashedLine = myearth.addLine({
            locations: [startMarker.location, endMarker.location],
            color: "red",
            width: 1.25 * flightScale,
            offsetFlow: flightScale,
            dashed: true,
            dashSize: 0.25 * flightScale,
            dashRatio: 0.5,
            clip: 0,
            alwaysBehind: true
        });

        dashedLine.animate('clip', 1, {duration: 1000 + distance / 10});


        solidLine = myearth.addLine({
            locations: [startMarker.location, endMarker.location],
            color: "red",
            width: 1.25 * flightScale,
            offsetFlow: flightScale,
            clip: 0,
            alwaysBehind: true
        });

    }

    function reset() {

        flying = false;

        document.body.classList.remove('config-start');
        document.getElementById('tip-layer').style.opacity = 0;

        document.getElementById('from').selectedIndex = 0;
        document.getElementById('from').removeAttribute('disabled');
        document.getElementById('to').setAttribute('disabled', true);
        document.getElementById('to').selectedIndex = 0;

        if (plane) {
            plane.animate('scale', 0.01, {
                complete: function () {
                    this.remove();
                }
            });
        }
        if (X) {
            X.animate('scale', 0.01, {
                complete: function () {
                    this.remove();
                }
            });
        }
        if (dashedLine) {
            dashedLine.animate('width', 0.01, {
                complete: function () {
                    this.remove();
                }
            });
        }
        if (solidLine) {
            solidLine.animate('width', 0.01, {
                complete: function () {
                    this.remove();
                }
            });
        }

        startMarker = false;
        endMarker = false;

        restorePins();

    }


    var pinIndex = 0;
    var pinTime = 0;
    var pinsPerSec = 1000 / 18;

    function shrinkPins() {

        pinIndex = 0;

        var shrinkOnePin = function () {

            markers[pinIndex].animate('scale', 0.01, {
                complete: function () {
                    this.visible = false;
                }
            });

            if (++pinIndex >= markers.length) {
                myearth.removeEventListener("update", shrinkOnePin);
            }

        };

        myearth.addEventListener("update", shrinkOnePin);

    }

    function restorePins() {

        pinIndex = 0;
        pinTime = myearth.deltaTime;

        var restoreOnePin = function () {

            pinTime += myearth.deltaTime;
            if (pinTime > pinsPerSec) {
                pinTime -= pinsPerSec;
            } else {
                return;
            }

            if (!markers[pinIndex].visible) {

                markers[pinIndex].visible = true;
                markers[pinIndex].hotspot = true;
                markers[pinIndex].animate('scale', 1, {duration: 560, easing: 'out-back'});

            } else {

                // skip wait time
                pinTime = pinsPerSec;

            }

            if (++pinIndex >= markers.length) {
                myearth.removeEventListener("update", restoreOnePin);
            }

        };

        myearth.addEventListener("update", restoreOnePin);

    }


    function toggleSidebar() {
        document.body.classList.toggle('sidebar-open');
    }


    function selectFrom() {
        var index = document.getElementById('from').selectedIndex;
        if (index == 0) return;
        markers[index - 1].dispatchEvent({type: 'click'});
    }

    function selectTo() {
        var index = document.getElementById('to').selectedIndex;
        if (index == 0) return;
        markers[index - 1].dispatchEvent({type: 'click'});
    }

</script>