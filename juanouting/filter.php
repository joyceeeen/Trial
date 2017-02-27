<?php include 'header.php' ?>
  <div class="container">
    <div class="col-sm-3 filter-row">
    <div class="row deck-row">
      <div class="filter-list">
        <div class="filter-header filter-box">
          <div class="filtered-title">
            Filter Search Results
          </div>
        </div>
        <div class="filter-box">
          <input type="hidden" name="stars" value="" id="filterByStars">
          <input type="hidden" name="stars" value="1,50000" id="priceRange">
          <div class="filtered-subtitle">
            Star rating
          </div>
          <div class="rating">
            <div class="stars-filter">
            <span onclick="updateTable(5)" id="fiveStar">☆</span>
            <span onclick="updateTable(4)" >☆</span>
            <span onclick="updateTable(3)" >☆</span>
            <span onclick="updateTable(2)" >☆</span>
            <span onclick="updateTable(1)" >☆</span>
            </div>
          </div>
        </div>
        <div class="filter-box">
          <div class="filtered-subtitle">
            Price
          </div>
          <div class="filter-box-content">
          <div id="slider-container">
          </div>
          <p>
            <input type="text" id="amount" class="filter-price" disabled=""/>
          </p>
          </div>
          </div>
          <div class="filter-box">
            <div class="filtered-subtitle">
              Neighborhood
            </div>
            <div class="filter-box-content">
              <span class="filter-facilities">
                  <input type="checkbox"  id="Pansol" name="kitchen" onclick="kitchen()" value="0">
                  <label for="Pansol" class="filter-label">Pansol</label>
                </span>
              <span class="filter-facilities">
                  <input type="checkbox"  id="Bagong" name="kitchen" onclick="kitchen()" value="1">
                  <label for="Bagong" class="filter-label">Bagong Kalsada</label>
              </span>
              </div>
            </div>
            <div class="filter-box">
              <div class="filtered-subtitle">
                Bedrooms and Bathrooms
              </div>
              <div class="filter-box-content">
                <span class="filter-facilities spin">
                    <input id="spinner" name="value" style="width:30px;height:20px;" min="0"  >
                    <label for="Bedrooms" class="filter-label">Bedrooms</label>
                  </span>
                <span class="filter-facilities spin">
                    <input id="spinner1" name="value" style="width:30px;height:20px;" min="0">
                    <label for="Bathrooms" class="filter-label">Bathrooms</label>
                </span>
                <span class="filter-facilities spin">
                    <input id="spinner2" name="value" style="width:30px;height:20px;" min="0">
                    <label for="Beds" class="filter-label">Beds</label>
                </span>
                </div>
              </div>
            <div class="filter-box">
              <div class="filtered-subtitle">
                Amenities
              </div>
              <div class="filter-box-content">
                <span class="filter-facilities">
                    <input type="checkbox"  id="friendly" name="kitchen" onclick="kitchen()" value="0">
                    <label for="friendly" class="filter-label">Family/kid friendly</label>
                  </span>
                <span class="filter-facilities">
                    <input type="checkbox"  id="kitchen" name="kitchen" onclick="kitchen()" value="0">
                    <label for="kitchen" class="filter-label">Kitchen</label>
                  </span>
                <span class="filter-facilities">
                    <input type="checkbox"  id="conditioning" name="kitchen" onclick="kitchen()" value="1">
                    <label for="conditioning" class="filter-label">Air conditioning</label>
                </span>
                <span class="filter-facilities">
                    <input type="checkbox"  id="Internet" name="kitchen" onclick="kitchen()" value="2">
                    <label for="Internet" class="filter-label">Wireless Internet</label>
                </span>
                <span class="filter-facilities">
                    <input type="checkbox"  id="Door" name="kitchen" onclick="kitchen()" value="2">
                    <label for="Door" class="filter-label">Lock on Bedroom Door</label>
                </span>
                </div>
              </div>
            <div class="filter-box">
              <div class="filtered-subtitle">
                Facilities
              </div>
              <div class="filter-box-content">
                <span class="filter-facilities">
                    <input type="checkbox"  id="Parking" name="kitchen" onclick="kitchen()" value="0">
                    <label for="Parking" class="filter-label">Parking</label>
                  </span>
                <span class="filter-facilities">
                    <input type="checkbox"  id="billiard" name="kitchen" onclick="kitchen()" value="1">
                    <label for="billiard" class="filter-label">Billiard</label>
                </span>
                <span class="filter-facilities">
                    <input type="checkbox"  id="jacuzzi" name="kitchen" onclick="kitchen()" value="2">
                    <label for="jacuzzi" class="filter-label">Jacuzzi</label>
                </span>
                </div>
              </div>
              <div class="filter-box">
                <div class="filtered-subtitle">
                  House rules
                </div>
                <div class="filter-box-content">
                  <span class="filter-facilities">
                      <input type="checkbox"  id="Smoking" name="kitchen" onclick="kitchen()" value="0">
                      <label for="Smoking" class="filter-label">Smoking allowed</label>
                    </span>
                  <span class="filter-facilities">
                      <input type="checkbox"  id="events" name="kitchen" onclick="kitchen()" value="1">
                      <label for="events" class="filter-label">Suitable for events</label>
                  </span>
                  </div>
                </div>
      </div>
    </div>
    </div>
    <div class="col-sm-9 filtered-resort">

    <div class="row deck-row">
      <div class="col-sm-6 filtered-card">
        <img src="assets/images/1.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> 88 Forest and Hotspring abcd asdsa Resort </p>
      </div>
      <div class="col-sm-6 filtered-card">
        <img src="assets/images/2.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Pogi akoasdsa Resort </p>
      </div>
      <div class="col-sm-6 filtered-card">
        <img src="assets/images/3.jpg" alt="" class="r-img">
        <p class="r-content"><b class="r-price">₱5000 </b><span class="indiv-rating">★★★★</span></p>
        <p class="r-name"> Jason Patrick S Lopez Resort </p>
      </div>

    </div>
        </div>
  </div>

<?php include 'footer.php' ?>
