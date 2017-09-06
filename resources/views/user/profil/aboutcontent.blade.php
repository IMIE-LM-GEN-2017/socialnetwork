@include('templates.elements.headers.header')


<div class="container">

    <!-- Timeline
    ================================================= -->
    <div class="timeline">
        <div class="timeline-cover">

            <!--Timeline Menu for Large Screens-->
            @include('templates.elements.menuprofil')
            <!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">

                    <!-- About
                    ================================================= -->
                    <div class="about-profile">
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur</p>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-briefcase-outline icon-in-title"></i>Work Experiences</h4>
                            <div class="organization">
                                <img src="images/envato.png" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>Envato</h5>
                                    <p>Seller - <span class="text-grey">1 February 2013 to present</span></p>
                                </div>
                            </div>
                            <div class="organization">
                                <img src="images/envato.png" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>Envato</h5>
                                    <p>Seller - <span class="text-grey">1 February 2013 to present</span></p>
                                </div>
                            </div>
                            <div class="organization">
                                <img src="images/envato.png" alt="" class="pull-left img-org" />
                                <div class="work-info">
                                    <h5>Envato</h5>
                                    <p>Seller - <span class="text-grey">1 February 2013 to present</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Location</h4>
                            <p>228 Park Eve, New York</p>
                            <div class="google-maps">
                                <div id="map" class="map"></div>
                            </div>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-heart-outline icon-in-title"></i>Interests</h4>
                            <ul class="interests list-inline">
                                <li><span class="int-icons" title="Bycycle riding"><i class="icon ion-android-bicycle"></i></span></li>
                                <li><span class="int-icons" title="Photography"><i class="icon ion-ios-camera"></i></span></li>
                                <li><span class="int-icons" title="Shopping"><i class="icon ion-android-cart"></i></span></li>
                                <li><span class="int-icons" title="Traveling"><i class="icon ion-android-plane"></i></span></li>
                                <li><span class="int-icons" title="Eating"><i class="icon ion-android-restaurant"></i></span></li>
                            </ul>
                        </div>
                        <div class="about-content-block">
                            <h4 class="grey"><i class="ion-ios-chatbubble-outline icon-in-title"></i>Language</h4>
                            <ul>
                                <li><a href="">Russian</a></li>
                                <li><a href="">English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @include('templates.elements.profilactivity')
            </div>
        </div>
    </div>
</div>

