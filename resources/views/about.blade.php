@extends('layout')

@section('content')
  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
        <p>
          We are located in Kenya, but our services are offered countrywide. We provide a wide range of IT services including web designing, coding coaching, graphic designing, web hosting, IT consultation, network connection, and app development.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="About Us">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>Our Services</h3>
            <ul>
              <li>Web Designing</li>
              <li>Coding Coaching</li>
              <li>Graphic Designing</li>
              <li>Web Hosting</li>
              <li>IT Consultation</li>
              <li>Network Connection</li>
              <li>App Development</li>
            </ul>
            <a href="#">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- Map Section -->
  <section class="map_section layout_padding">
    <div class="container">
      <h3 class="heading_container heading_center">Our Location</h3>
      <div id="map" style="height: 400px; width: 100%;"></div>
    </div>
  </section>
  <!-- end map section -->

@endsection

@section('scripts')
<script>
  // Initialize the map after the DOM is fully loaded
  document.addEventListener("DOMContentLoaded", function() {
    function initMap() {
      var location = { lat: -1.286389, lng: 36.817223 }; // Nairobi, Kenya coordinates

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: location
      });

      var marker = new google.maps.Marker({
        position: location,
        map: map
      });
    }

    // Load the Google Maps script dynamically
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=https://maps.googleapis.com/maps/api/js?key=AIzaSyCpqMYsdzCGQSMurZxainXdskyyj6ewycQ&callback=initMap";
    script.async = true;
    script.defer = true;
    script.onload = initMap;
    document.head.appendChild(script);
  });
</script>
@endsection
