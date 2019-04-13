<?php
/*
	Template Name: FAQ Page
 */

get_header();
?>

 <div class="hero-wrapper-sub" style="overflow:hidden">
        <div class="hero-logo-container"></div>
        <nav class="navbar navbar-expand-lg navbar-dark w-80 text-uppercase">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-Main.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-3 text-right">
                        <?php get_template_part( 'template-parts/content', 'nav' ); ?>
                    </ul>
                </div>
        </nav>
        <div class="text-center h1-wrapp">
            <h1 class="px-4 text-uppercase">F.A.Q'S</h1>
            <p class="text-white mt-4">Home / F.A.Q'S</p>
        </div>
    </div>
    <div class="main-body py-5">
        <div class="w-80 py-5">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h1 class="mb-0">
                            <div class="btn btn-link text-uppercase text-main text-large normal-white-space"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Is drone photography legal?
                            </div>
                        </h1>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Yes, drone photography is India is legal but one has to obtain permission from the
                            government authorities for the same. The Officer of the Director General of Civil Aviation
                            (DGCA) has released the Civil Aviation Requirements (CAR) for operation of drones. Hence,
                            drone photography is legal in India as long as the service provider is complying with the
                            guidelines laid down by the GDCA.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <div class="btn btn-link collapsed text-uppercase text-main text-large normal-white-space"
                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What are the guidelines issued by DGCA for using drone cameras?
                            </div>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            While being airborne, the drone should remain in Visual line of sight. Each drone flying in
                            the Indian sky must have a Unique Identification number issued by DGCA. If the drone camera
                            has to be flown over 200 feet, above the ground level in uncontrolled airspace, then one
                            needs to procure Unmanned aircraft operator permit (UAOP) form DGCA. It is not allowed to
                            fly drone in controlled airspaces.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <div class="btn btn-link collapsed text-uppercase text-main text-large normal-white-space"
                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do the aerial videos produced by you work on all devices?
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Yes, the videos that are captured by drone cameras are optimized in such a way that they
                            can be viewed on almost all devices. We will also provide you with the raw footage with
                            several formats.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <div class="btn btn-link collapsed text-uppercase text-main text-large normal-white-space"
                                data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What are the services that you offer apart from aerial photography
                            </div>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Apart from aerial photography, we offer the following services:
                            <ol>
                                <li>Aerial Mapping</li>
                                <li>Aerial Surveying</li>
                                <li>Aerial investigation</li>
                                <li>Precise Survey of huge buildings, wind mills, Real Estates, towers, dams, bridges
                                    ,etc.</li>
                                <li>Film Making</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <div class="btn btn-link collapsed text-uppercase text-main text-large normal-white-space"
                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            What will be the level of my involvement in the video production?
                        </div>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        Active collaboration with the clients is an essential aspect of our service. We remain in close
                        contact with our customers during all the stages of photography and final production. We also
                        provide you with raw footage and previews of edited footage. We make prompt adjustments in
                        keeping with your demands and likes.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <div class="btn btn-link collapsed text-uppercase text-main text-large normal-white-space"
                            data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            How long do you take for completion of a project?
                        </div>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        It normally takes 7-10 days for the completion of a project. However, this duration may vary
                        depending upon the nature of the work and the requirements of the clients.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <div class="btn btn-link collapsed text-uppercase text-main text-large normal-white-space"
                            data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            When do I need to make the payment?
                        </div>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        We usually demand 50% of the payment in advance before the start of the work and the remaining
                        payment can be made after the completion of the project.
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php
get_footer();
