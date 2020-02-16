<?php include "header.php"; ?>

    <section id="contact-wrap">
        <div class="header">
            <h2 class="title--sec">
                Hi, Let's talk<br>
                about your <span class="highlight">project!</span>
            </h2>
<!--            <p class="para">-->
<!--                We are a design agency shaping ideas into products. We help startups and enterprises invent.-->
<!--            </p>-->
        </div>

        <form method="post" action="/thanks">
            <!-- Start service-types -->
            <div class="line-item" id="service-types">
                <h3 class="heading">
                    Services you need
                    <span class="required-star">
                        <img src="images/star.svg" alt="">
                    </span>
                </h3>

                <div class="options">
                    <!-- item START -->
                    <div class="options__item">
                        <input type="checkbox" name="service-type[]" id="logo" value="Logo">

                        <label for="logo">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">Logo</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="checkbox" name="service-type[]" id="design-service" value="Design">

                        <label for="design-service">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">Design</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="checkbox" name="service-type[]" id="development-service" value="Development">

                        <label for="development-service">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">Development</span>
                        </label>
                    </div>
                    <!-- item END -->

                </div>
            </div>
            <!-- END service-types -->

            <!-- Start service-types -->
            <div class="line-item" id="client-budget" style="display: none">
                <h3 class="heading">
                    Your budget for this project
                    <span class="required-star">
                        <img src="images/star.svg" alt="">
                    </span>
                </h3>

                <div class="options">
                    <!-- item START -->
                    <div class="options__item">
                        <input type="radio" name="budget" id="around-1000" value="$1000">

                        <label for="around-1000">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">$1000</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="radio" name="budget" id="around-1500" value="$1500">

                        <label for="around-1500">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">$1500</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="radio" name="budget" id="around-3000" value="$3000">

                        <label for="around-3000">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">$3000</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="radio" name="budget" id="more-than-3000" value="$5000">
                        <label for="more-than-3000">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">$5000</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="radio" name="budget" id="more-than-5000" value="More than $5000">

                        <label for="more-than-5000">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">More than $5000</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="radio" name="budget" id="rather-not-say" value="Dont want to say it" checked>

                        <label for="rather-not-say">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="label-text">I'd rather not say</span>
                        </label>
                    </div>
                    <!-- item END -->
                </div>
            </div>
            <!-- END service-types -->

            <!-- Start service-types -->
            <div class="line-item" id="target-platforms">
                <h3 class="heading">
                    Target Platforms
                    <span class="required-star">
                        <img src="images/star.svg" alt="">
                    </span>
                </h3>

                <div class="options">
                    <!-- item START -->
                    <div class="options__item active">
                        <input type="checkbox" name="select-platforms[]" id="platform-desktop" checked="false" value="Web">

                        <label for="platform-desktop">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="platform-icon">
                                <img src="images/desktio-icon.svg" alt="">
                            </span>

                            <span>Web</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
                    <div class="options__item">
                        <input type="checkbox" name="select-platforms[]" id="platform-mobile" value="Mobile">

                        <label for="platform-mobile">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
                            </div>
                            <span class="platform-icon">
                                <img src="images/mobile_icon@2x.png" alt="">
                            </span>

                            <span>Mobile App</span>
                        </label>
                    </div>
                    <!-- item END -->
                    <!-- item START -->
<!--                    <div class="options__item">-->
<!--                        <input type="checkbox" name="select-platforms" id="platform-both">-->
<!---->
<!--                        <label for="platform-both">-->
<!--                            <div class="icon">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>-->
<!--                            </div>-->
<!--                            <span class="platform-icon">-->
<!--                                <img src="images/other_icon@2x.png" alt="">-->
<!--                            </span>-->
<!--                            <span>Both</span>-->
<!--                        </label>-->
<!--                    </div>-->
                    <!-- item END -->
                </div>
            </div>
            <!-- END service-types -->

            <!-- Start service-types -->
            <div class="line-item" id="extra-fields">
                <div class="field">
                    <h3 class="heading">
                        Full Name
                        <span class="required-star"> <img src="images/star.svg" alt=""> </span>
                    </h3>
                    <input type="text" name="name" placeholder="Jhon Ceena" required>
                </div>

                <div class="field">
                    <h3 class="heading">
                        Email Address
                        <span class="required-star"> <img src="images/star.svg" alt=""> </span>
                    </h3>
                    <input type="email" name="email" placeholder="name@domain.com" required>
                </div>

                <div class="field">
                    <h3 class="heading">
                        Tell us about your project
                        <span class="required-star"> <img src="images/star.svg" alt=""> </span>
                    </h3>
                    <textarea rows="10" name="message" placeholder="Your important project details/idea." required></textarea>
                </div>

                <div class="field" style="display: none">
                    <h3 class="heading">
                        Attachments or documents.
                        <span class="required-star"> <img src="images/star.svg" alt=""> </span>
                    </h3>
                    <input type="text" name="links" placeholder="Insert Shared file link">
                    <p class="para helper-text">
                        Please, Upload your files to dropbox or any file sharing option and share the link.
                    </p>
                </div>
            </div>

            <div class="cta">
                <button type="submit" class="btn btn--primary">
                    <span class="text">Send Message</span>
                    <span class="icon"> <svg xmlns="http://www.w3.org/2000/svg" width="9.211" height="14.115" viewBox="0 0 9.211 14.115"> <path id="icon" d="M0,0,6.088,7,12,0" transform="translate(1.058 13.057) rotate(-90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"/> </svg> </span>
                </button>
            </div>

        </form>
    </section>


    <?php include "footer.php"; ?>