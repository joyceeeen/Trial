<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JuanOuting | Helping You Book a Private Resort</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <!-- <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title"> -->
  <link rel="stylesheet" href="assets/css/joyth-css.css" media="screen" title="no title">
  <link rel="stylesheet" href="assets/css/jquery-ui.css" media="screen" title="no title">
  <link rel="stylesheet" href="assets/css/magnific-popup.css" media="screen" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $('#open-gallery').click(function() {
      var items = new Array();

      $('.slide').find('a').each(function() {
        items.push({
          src: $(this).attr('href')
        });
      });
      
      $.magnificPopup.open({

        type: 'image',
        items:items,
        delegate: 'a',
        gallery: {
          enabled: true
        },

      });
    });
  });
  </script>

</head>
<body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="header-container" >
      <div class="navbar-header page-scroll">
        <div class="navbar-toggle" id="navbar-toggle" data-toggle="collapse" onclick="openNav();">

          <i class="fa fa-bars"></i>
        </div>
        <a class="navbar-brand page-scroll" href="#page-top">JuanOuting</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a href="#Maps">Help</a>
          </li>
          <li>
            <a href="#Maps">Sign Up</a>
          </li>
          <li>
            <a href="#Maps">Log In</a>
          </li>

        </ul>
      </div>
    </div>
    <div id="myNav" class="overlay">

      <div class="overlay-content">
        <a href="#">Help</a>
        <a href="#">Sign Up</a>
        <a href="#">Log In</a>
      </div>
    </div>

  </nav>
  <div class="parent-resort">
    <div class="resort-img"></div>
    <a  href="#gallery1" id="open-gallery" class="btn btn-default" role="button">View Photos</a>
    <div id="gallery1" class="mfp-hide">
      <div class="slide" >
        <a href="assets/images/1.jpg">
          <img src="assets/images/1.jpg"/>
        </a>
      </div>
      <div class="slide" >
        <a href="assets/images/2.jpg">
          <img src="assets/images/2.jpg"/>
        </a>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="r-title">
        <div class="col-sm-6 deck" >
          <div class="resort-name">
            Balinese Villa
          </div>
          <div class="resort-address">
            <p class="r-p"> Calamba, Calabarzon, Philippines</p>
            <a href="#">View on Map</a>
          </div>
        </div>
        <div class="col-sm-6 deck" >
          <p class="r-p"><span class="r-rating">★★★★</span></p>
          <p class="r-p"><span class="r-review">Based on 3 reviews</span></p>
        </div>
      </div>
      <div class="col-sm-8 deck r-overall">
        <!-- Overview of contents -->
        <div class="r-title-description">
          <p>Overview</p>
        </div>
        <p>Our Cozy four bed room private villa and social hall has a true filipino feeling.
          We can only accommodate around 16 persons, 24 can be manageable to sleep and less than 100 to party
          at the social hall Or swimming and stargazing on a late evening.</p>
          <!-- Check in Check out -->
          <div>
            <div class="r-title-description">
              <p>Check In / Check Out</p>
            </div>
            <div class="col-xs-6 r-content-description">
              <p>Check In: <b>8AM</b></p>
            </div>
            <div class="col-xs-6 r-content-description">
              <p>Check Out: <b>6AM</b></p>
            </div>
          </div>
          <!-- Check in Check out -->
          <!-- Bathrooms, Bedrooms, and Beds -->
          <div>
            <div class="r-title-description">
              <p>Bathrooms, Bedrooms, and Beds</p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p>Bathrooms: <b>4</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p>Bedrooms: <b>4</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p>Beds: <b>4</b></p>
            </div>
          </div>
          <!-- Bathrooms, Bedrooms, and Beds -->
          <!--What they have  -->
          <div>
            <div class="r-title-description">
              <p>What they offer</p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Kiddie Pool: 3ft</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Adult Pool: 6ft</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Jacuzzi</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Billiards</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Videoke</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Kitchen</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Griller</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Function Hall</b></p>
            </div>
            <div class="col-xs-6 col-sm-4 r-content-description">
              <p><b>Wifi</b></p>
            </div>
          </div>
          <!--What they have  -->
          <!-- Description -->
          <div>
            <div class="r-title-description" >
              <p>Description</p>
            </div>
            <div class="col-xs-12 r-content-description">
              <p>Clean and open space good for party, wedding reception, baptismal, debut, team building or just plain family gathering or friends get together. As listed 16 pax to comfortably sleep on the listed price in the excess of 16 pax shall be subject to additional fee, we can also accommodate less 100 people to party at the social hall but subject to confirmation and additional fee. The spacious pavillion with good air circulation will give you a relaxing feeling.</p>
            </div>
          </div>
          <!-- Description -->
          <!-- House Rules -->
          <div>
            <div class="r-title-description" >
              <p>House Rules</p>
            </div>
            <div class="col-xs-12 r-content-description">
              <p>We request a non smoking on the bedroom and toilet and bathrooms. As much as possible please keep our place clean so others can also enjoy our place.
                Smoking is allowed only at the social hall provided that the cigarette buts will only end up at the ash tray.</p>
                <p>No drinking or eating inside the swimming pool.</p>
                <p>We have provide beautiful ceramic vases to contemplate the resort and tropical feel in our rest house please do take good care of them any damage will be charge accordingly, we do not provide towels,blankets and toiletries please do bring your own.</p>
                <p>A care taker will always be present to assist you but please do respect that he is there to check if everthing is in good condition nothing more nothing less</p>
                <p>Please keep in mind that the karaoke machine is provided free of charge but if the microphone is damage by you or your group you will be charge to the security deposit</p>
              </div>
            </div>
            <!-- House Rules -->
            <!-- Other Charges -->
            <div>
              <div class="r-title-description" >
                <p>Other Charges</p>
              </div>
              <div class="col-xs-12 col-sm-6 r-content-description">
                <p>LPG: <b>Php300.00/22hr ; Php150.00/day or night </b></p>
              </div>
            </div>
            <!-- Other Charges -->

          </div>
          <div class="col-sm-4 deck r-overall" >
            <p style="position:fixed;">dadsasa</p>
          </div>
          <!-- Reviews -->
          <div class="col-sm-12 deck" style="background-color:white;">
            <div class="r-title-description" >
              <p>Reviews</p>
            </div>
            <div class="review-content">
              <div class="col-sm-3 r-content-description">
                <center><img src="assets/images/jason.jpg" class="img-responsive img-circle" alt="">
                  <p class="review-name">Jason Lopez</p>
                  <p>Manila, Philippines</p>
                </center>
              </div>
              <div class="col-sm-9 r-content-description r-review-comment" style="">
                <p class="r-comment-header"><b>Best Resort Ever</b> <span class="r-review-rating">★★★★</span></p>
                <p>Vonn was an excellent host in all aspects, especially in terms of communication. He really is a Superhost. I enjoyed my week-long stay at Vonn's place in Manila. Everything was exactly as advertised. The place was very clean, comfortable and cozy. Arrival and departure was a breeze. This condo is close to everything, from malls, tourist spots, and restaurants. It is very much accessible to public transit, LRT train station is just a stone-throw away. and Overall, I had a great and wonderful experience.</p>
                <p>Reviewed February 26, 2017</p>
              </div>
              <div class="col-lg-12 review-hr">
              </div>
            </div>
            <div class="review-content">
              <div class="col-sm-3 r-content-description">
                <center><img src="assets/images/joyce.jpg" class="img-responsive img-circle" alt="">
                  <p class="review-name">Joyce Ann Potestades</p>
                  <p>Manila, Philippines</p>
                </center>
              </div>
              <div class="col-sm-9 r-content-description r-review-comment" style="">
                <p class="r-comment-header"><b>Not very satisfied</b> <span class="r-review-rating">★★★</span></p>
                <p>The flat is cozy and clean. Although the bedroom can be a bit tight-spaced when using all of the three beds. Nevertheless, the beds are quite comfortable! There are some restaurants in walking distance and two convenience stores next door. The place is quite convenience and easy to find by (online) taxi. Overall we had an amazing stays here and definitely would like to go back if we happen to visit Manila again in the future.</p>
                <p>Reviewed January 2, 2017</p>
              </div>
              <div class="col-lg-12 review-hr">
              </div>
            </div>
            <div class="review-content">
              <div class="col-sm-3 r-content-description">
                <center><img src="assets/images/glen.jpg" class="img-responsive img-circle" alt="">
                  <p class="review-name">Glenwin Bernabe</p>
                  <p>Manila, Philippines</p>
                </center>
              </div>
              <div class="col-sm-9 r-content-description r-review-comment" style="">
                <p class="r-comment-header"><b>Great Place</b> <span class="r-review-rating">★★★★</span></p>
                <p>Place is beautifully designed and practical. Just make sure to bring blankets, toilet paper and prepare for cold showers. Only a single electric stove available and no microwave. It is great place for close families, but i wouldnt recommend it for more than 7 couples. ( Max Bed sharing)</p>
                <p>Reviewed December 1, 2016</p>
              </div>
              <div class="col-lg-12 review-hr">
              </div>
            </div>
          </div>
          <!-- Reviews -->
          <!-- Location -->
          <div class="col-sm-12 deck r-location">
            <div class="r-title-description" >
              <p>Location</p>
            </div>
            <iframe src="https://www.google.com/maps/embed/v1/place?q=Technological%20Institute%20of%20the%20Philippines&zoom=17 &key=AIzaSyBVPZIWcBs6SVr5uECLmrhe8c-9DD8dGe0" style="height:500px;width:100%;border:none"></iframe>
          </div>
          <!-- Location -->
        </div>
      </div>

      <!-- <?php include 'footer.php' ?> -->
