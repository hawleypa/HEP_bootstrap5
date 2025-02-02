<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hollis Equestrian Park - About</title>

    <?php
    include 'header-styles.html'; 
    ?>

<style>
.btn, .btn-block{
  border-radius: 5px;
  box-shadow: 0 4px #999;
}
.btn:active, .btn-block:active {
    border-radius: 5px;
    border: 1px solid blue;
    box-shadow: 0 2px #666;
    transform: translateY(4px);
}
.btn:hover, .btn-block:hover {
    border-radius: 5px;
    border: 1px solid blue;
}
@-moz-document url-prefix() {
  fieldset { display: table-cell; }
}
</style>

  </head>

  <body style="padding:50px;">

    <div class="container">

      <!-- Fixed navbar -->
    <?php
    include_once("analyticstracking.php");
    include 'nav_bar.html'; 
    ?>

      <!-- Main component for a primary marketing message or call to action -->
  <div class="container">
  <div class="text-center">
<h2><img src="./images/AboutThePark.jpg" class="rounded-circle img-fluid mx-auto" alt="About the park" style="margin:0; position:relative; display:inline-block; max-height:200px;"> 
    Available for members or for hosting shows.</h2>      
  </div>     
  </div>
<div>
<!--<p class="d-inline-flex gap-1">
  <button class="btn btn-block w-100" type="button" data-bs-toggle="collapse" data-bs-target="#weather-data" aria-expanded="false" aria-controls="weather-data">Current Weather Conditions</button>
  <button class="btn btn-block w-100" type="button" data-bs-toggle="collapse" data-bs-target="#map" aria-expanded="false" aria-controls="map">Google Map</button>
</p>-->
<div class="row row-cols-1 row-cols-md-2 my-3">
  <div class="col">
  <button class="btn btn-primary btn-block w-100" type="button" data-bs-toggle="collapse" data-bs-target="#weather-data" aria-expanded="false" aria-controls="weather-data">Current Weather Conditions</button>
    <div class="collapse h-100" id="weather-data" >
      <div class="card card-body">
        <div id="weather-output" style="height:450px;"></div>
      </div>
    </div>
  </div>
  <div class="col">
  <button class="btn btn-primary btn-block w-100" type="button" data-bs-toggle="collapse" data-bs-target="#map" aria-expanded="false" aria-controls="map">Google Map</button>
    <div class="collapse h-100" id="map" >
      <div class="card card-body">
      <iframe name="map" height="450" src="https://www.google.com/maps/embed/v1/place?q=43.567036%2C%20-70.627118&key=AIzaSyCqGOWa7v_VPgzUffrEYweTyj8zjAX1udA" allowfullscreen></iframe> 
      </div>
    </div>
  </div>
</div> 
</div>

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="nav-facility-tab" data-bs-toggle="tab" data-bs-target="#Facility" type="button" role="tab"  aria-controls="Facility" aria-selected="true">Facility</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="nav-directions-tab" data-bs-toggle="tab" data-bs-target="#Directions" type="button" role="tab" aria-controls="Directions" aria-selected="false">Directions</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="nav-trails-tab" data-bs-toggle="tab" data-bs-target="#Trails" type="button" role="tab" aria-controls="Trails" aria-selected="false">Trails</button>
        </li>
 
    </ul>   
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="Facility" role="tabpanel" aria-labelledby="nav-facility-tab" tabindex="0">
    <div>
    <br>
    <p>The Hollis Equestrian Park is a volunteer-maintained equestrian riding park available for private membership or show venue in Hollis, Maine</p>
    <ul>
    <li>100 x 200' Stone dust ring</li>
    <li>75x150' Stone dust ring</li>
    <li>Jump course</li>
    <li>Judge's booth</li>
    <li>Secretary booth with sound system</li>
    <li>Flush toilets</li>
    <li>Running water</li>
    <li>Ample parking</li>
    <li>Marked Trail to Massabesic Forest</li>
    </ul>
    <p>The Hollis Equestrian Park may be rented by the day for a fee of $200.00. (Note: There is an additional optional fee for mowing the outside course. See the contract for more information.)</p>
    <p>To inquire about available dates and to reserve a date please see the Book The Park tab on the Contacts page.</p>
    </div>
    </div>
    <div class="tab-pane fade" id="Directions" role="tabpanel" aria-labelledby="nav-directions-tab" tabindex="0">
<br><p>The Hollis Equestrian Park is located on (Route 5) 123 New County Road in Hollis, Maine; use 155 New County Road for GPS.
<a href="#map" data-toggle="collapse">Click here for Google map</a></p>
<p><strong>From the South via the Maine Turnpike:</strong>
Take Exit 25 (formerly Exit 3) in Kennebunk. Follow signs to Route 35 North. Stay on Route 35 through Kennebunk and Lyman. Turn left on Route 5 North in Dayton. Park is 2.5 miles on left.
</p>
<p><strong>From the North via the Maine Turnpike:</strong>
Take Exit 46 (formerly Exit 7B) in South Portland. Turn left out of the toll booth and then left onto Route 22 West. Take Route 22 through Westbrook, Scarborough, Gorham and into Buxton. Turn left on Route 202 South into Hollis Center. Turn left, heading South, on Route 35. Turn right on Clark's Mills Road. At the end of Clark's Mills road, turn left on Route 5. Park is immediately on your right.
</p>
<p><strong>From the North via I-295:</strong>
Take Exit 5B to Congress Street (Route 22). Take Route 22 through Portland, Westbrook, Scarborough, Gorham and into Buxton. Turn left on Route 202 South into Hollis Center. Turn left, heading South, on Route 35. Turn right on Clark's Mills Road. At the end of Clark's Mills road, turn left on Route 5. Park is immediately on your right.
</p>
<p><strong>From Route 35 North:</strong>
Turn right on Clark's Mills Road at Clark's Mills, south of Route 202 in Hollis Center. At the end of Clark's Mills road, turn left on Route 5. Park is immediately on your right.
</p>
<p><strong>From Route 202 (Gorham area):</strong>
Turn left, heading South, on Route 35. Turn right on Clark's Mills Road. Park is at end of Clark's Mills road, on Route 5.
</p>
<p><strong>From Route 202 (Sanford area):</strong>
Turn right, heading South, on Route 5 in East Waterboro. Continue right on Route 5 toward Saco. Park will be on your right, approx 1 mile from where Route 5 and Route 202 part.
</p>
<p><strong>From Route 5 (Saco area):</strong>
Drive North on Route 5 through Dayton. Park will be on your left approx. 2.5 miles North of the Route 35 intersection. </p>
    </div>
    <div class="tab-pane fade" id="Trails" role="tabpanel" aria-labelledby="nav-trails-tab" tabindex="0">
    <br>
<p>Click <a href="./pdf/trailmap0823.pdf">here</a> to download a PDF map of the trails.</p>
<p>The Hollis Equestrian Park is located near the Massabesic Experimental Forest, which is land owned by the U.S. Forest Service and is open to recreation by the public. Please keep in mind that we only provide a place for parking and unloading horses and do not maintain the trails and are not responsible for trail conditions. RIDE RESPONSIBLY AND AT YOUR OWN RISK.</p>
<p>WE ALSO SUGGEST THAT YOU DO NOT RIDE YOUR HORSE OVER ANY BRIDGES IN THE MASSABESIC FOREST WITH THE EXCEPTION OF THE BRIDGE ON THE MAIN ROAD.</p>
<p>
The first part of the trail is on private property. These landowners have graciously allowed us to ride on their property but have requested no ATV use, no dogs, and no littering (that goes without saying!)</p>
<p>
ATVs, mountain bikers and hikers also use the trails in the MassabesicForest. Most are polite and will yield to horses, but there are a few out there who don't know that horses always have the right of way. BE PREPARED TO MEET OTHER USERS AND KNOW YOUR HORSE.</p>
<p><strong>Trailriding 101</strong></p>
<p>
For those of you who are new to trail riding here are a few tips from Judy St.Onge:</p>
<ol>
<li>Ride with a buddy when possible.</li>
<li>Cell phone reception is "sketchy" on some parts of the Massabesic. </li>
<li>ATV and mountain bike riders tend to look at the trail directly in front of them - chances are you will see or hear them long before they notice you, so move off the trail if you can. (Yes, they ARE supposed to yield to horses, but if they don't see you in time, you could end up in a wreck.)</li>
<li>Bicycles don't make much noise coming up behind you (on the trail or on the road) and cause more horses to spook than motorized vehicles! Keep an eye out for them and turn your horse to look at them if you don't think he hears one coming.</li>
<li>Remember that you are an ambassador for the entire horse community while on shared trails. Other trail users may not be familiar with horses and their reactions. Use any opportunity to politely educate them. (Like asking cyclists to call out and make their presence known when approaching a horse from behind!)</li>
<li>If riding in a group or if overtaken by faster trail users, move to the right and allow them to pass.</li>
<li>If you want to pass a slower trail user (horse or otherwise) first announce your intention to pass and give them a chance to move to the side of the trail to allow you to pass safely.</li>
<li>If riding with inexperienced riders or horses ALWAYS ride considerately. In a group, stay at a pace that is comfortable for the least experienced horse or rider.</li>
<li>Never try to lead your horse over a ditch or water. I've seen more people get knocked down trying to do this than I can count. Stay mounted and give your horse plenty of time to relax and look things over. If it is a narrow ditch or brook, be prepared for him to jump across! </li>
<li>Practice obstacles at home before trailering away for a trail ride.</li>
<li>Oh, and don't clean out your trailer in the parking lot! </li>
</ol>
<p>
Here are a few things that I have found handy to have on the trail - even on a short ride. I can fit most of this stuff in a fanny pack, which I keep packed and ready to go in my tack box:
</p>
<ul>
<li>Halter and lead rope - the halter can be worn under the bridle and the lead tied to the saddle. On an english saddle I snap a mountain climbers clip on the D-ring and loop my lead through that. </li>
<li>Bug Spray - people spray also works on horses in a pinch.</li>
<li>Hoof Pick</li>
<li>Duct Tape - wrapped around a dowel to save space. Use it to hold a loose shoe on or to tape up a hoof that has lost a shoe.</li>
<li>Water - in a squirt bottle can double as a wound wash or eye wash.</li>
<li>Bandaids - for you</li>
<li>Vetrap - for you or your horse</li>
<li>Small tube of Vaseline - good for chapped lips, better for saddle sores</li>
<li>Leather Shoelace - handy for bridle repairs</li>
<li>Leatherman Tool - trust me, you'll feel like you can handle any emergency with one of these on your belt! (Cheap dept. store models also work fine)</li>
<li>Cell Phone - I put mine in a case that clips to my belt and also has a loop that I run my belt through for good measure. (Always carry your cell phone on your person - it won't do you any good if it's galloping towards home with your horse!)</li>
<li>Luggage Tag - attached to your saddle with your name, address, cell phone #, home #, your best horse friends #, etc. If you've ever been thrown and had your horse take off for parts unknown, you'll know why this is a really good idea.</li>
<li>Helmet - (on your head, not in your fanny pack). Not only are helmets great for protecting your head in a fall, they also shade your eyes and keep your head from being whacked by low hanging branches. Also, since they are strapped on, they can't get knocked off. (This is pretty important for short people with tall horses).</li>
<li>Aspirin - especially for those of you who ignore the helmet suggestion. (Also good for after the ride!)</li>
</ul>  
    </div>
  </div>
  
  </div>
 
  </div> <!-- /container -->

    <?php 
      include 'footer-row.html';
    ?>

<script>

const myCollapseEl = document.querySelector('#weather-data')

function getWeatherData() {
  
  // Define the API URL
  const apiKey = '5d90bd63ab79ec3385e819cb4ee90f91';
  const apiUrl = 'https://api.openweathermap.org/data/2.5/weather?lat=43.567&lon=-70.627&appid=5d90bd63ab79ec3385e819cb4ee90f91&units=imperial';
  let outputElement = document.getElementById('weather-output');

  fetch(apiUrl)
    .then(response => {
      if (!response.ok) {
        console.log(response);
        if (response.status === 404) {
          throw new Error('Data not found');
        } else if (response.status === 500) {
          throw new Error('Server error');
        } else {
          throw new Error('OpenWeatherMap response was not ok');
        }
      }
      return response.json();
    })
    .then(data => {
      console.log('data:', data);
      const temperature = data.main.temp;
      const feels_like = data.main.feels_like;
      const humidity = data.main.humidity;
      const description = data.weather[0].description;
      const location = data.name;
      const visibility = data.visibility/1609.34; // meters, 10 km max
      const wind_speed = data.wind.speed;  // mph
      // 0 degrees indicates a north wind, 90 degrees is east, 180 degrees is south, and 270 degrees is west
  // 45 degrees is a north east wind, 135 is a south east wind, 225 is a south west wind, and 315 is a north west wind
      const wind_direction = data.wind.deg;
      const wind_gust = data.wind.gust;  // mph
      const sunrise = new Date(data.sys.sunrise*1000);    // time UTC
      const sunset = new Date(data.sys.sunset*1000);   //    time UTC
      const percent_cloudy = data.clouds.all;
      //const rainfall_rate = data.rain.1h;  // mm/hour
      const time_of_data = data.dt;  // UTC
      const timeStamp = new Date(time_of_data*1000);
      const wind_directions = ["N", "NNE", "NE", "ENE", "E", "ESE", "SE", "SSE", "S", "SSW", "SW", "WSW", "W", "WNW", "NW", "NNW"];
      const index = Math.round((wind_direction % 360) / 22.5);
      let temp = '<p>Weather: ' + description +'</p><p>Date & Time: ' + timeStamp.toLocaleString() + '</p><p>Percent cloudy: ' + percent_cloudy + ' %</p><p>Temperature: ' + temperature +' °F</p><p>Feels like:  ' + feels_like +' °F</p>';
      let temp2 = '<p> '+ humidity + ' % humidity</p><p>  Wind speed ' + wind_speed + ' mph</p><p>Wind direction '+ wind_directions[index]+' </p><p> Gusting '+wind_gust+' mph</p>';  
      let temp3 = '<p> Visibility: ' + visibility.toFixed(2) + ' miles </p><p>Sunrise: ' + sunrise.toLocaleString() + '</p><p> Sunset: ' + sunset.toLocaleString() + '</p>';
      outputElement.innerHTML = temp + temp2 + temp3;  
    })
    .catch(error => {
      console.error('Error:', error);
    });
};

myCollapseEl.addEventListener('show.bs.collapse', event => {
  // Action to execute once the collapsible area is expanded
  console.log('expanded');
  getWeatherData();
})

</script>

    <?php 
      include 'scripts-body.html';
    ?>  

  </body>
</html>
