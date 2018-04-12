
<div class="l-main-container">
<div class="b-desc-section-container">
    <section class="container b-welcome-box">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <h1 class="is-global-title f-center"><?= $welcome ?></h1>
                <p class="f-center"><?= $login_msg ?></p>
            </div>
        </div>
    </section>
<section class="container">
    <div class="row">
        <div class="col-sm-9 b-contact-form-box">
            <h3 class="f-primary-b b-title-description f-title-description">
                Fill the form correctly before you submit
                <div class="b-title-description__comment f-title-description__comment f-primary-l">Filling the form will take few minute of your time, make sure the information is correct</div>
            </h3>
            <div class="row">

            <form action="<?= $form_location ?>" method="post">
                <div class="col-md-5">
                    <div class="b-form-row">
                        <label class="b-form-vertical__label" for="title">Your name</label>
                        <div class="b-form-vertical__input">
                            <input type="text" name="yourname" value="<?= $yourname ?>" class="form-control" id="name" placeholder="Enter name" />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-vertical__label" for="email">You email</label>
                        <div class="b-form-vertical__input">
                           <input type="email" name="email" value="<?= $email ?>" class="form-control" id="text" placeholder="Enter Email Address"  />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-vertical__label" for="email">Purpose of writing</label>
                        <div class="b-form-vertical__input">
                           <input type="text" name="subject" value="<?= $subject ?>" class="form-control" id="text" placeholder="Enter Email Address"  />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-vertical__label" for="website">Telephone Number</label>
                        <div class="b-form-vertical__input">
                            <input type="telnum" name="telnum" value="<?= $telnum ?>" class="form-control" id="text" placeholder="Enter your reason for writing us ..." />
                        </div>
                    </div>
                    <div class="b-form-row">
                        <label class="b-form-vertical__label" for="website">Identify that you are human</label>
                        <div class="g-recaptcha" data-sitekey="<?= $keyme ?>"></div>
                    </div>
                </div>
            <div class="col-md-7">
                <div class="b-form-row b-form--contact-size">
                    <label class="b-form-vertical__label">Your message</label>
                    <textarea name="message" class="form-control" placeholder="Message"><?= $message ?></textarea>
                </div>
            </div>
            <div class="b-form-row col-md-4">
                <button type="submit" name="submit" row="13" value="Submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Send Message</button>
            </div>
            </form>
        </div>
</div>
<div class="col-sm-3 b-contact-form-box">
    <h3 class="f-primary-b b-title-description f-title-description">
        contact info
        <div class="b-title-description__comment f-title-description__comment f-primary-l">Below are some of our contact addresses, reach us directly with it.</div>
    </h3>
    <div class="row b-google-map__info-window-address">
        <ul class="list-unstyled">
    <li class="col-xs-12">
        <div class="b-google-map__info-window-address-icon f-center pull-left">
            <i class="fa fa-home"></i>
        </div>
        <div>
            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                <?= $our_name ?>
            </div>
            <div class="desc">  <?= $our_address ?></div>
        </div>
    </li>
    <li class="col-xs-12">
        <div class="b-google-map__info-window-address-icon f-center pull-left">
            <i class="fa fa-globe"></i>
        </div>
        <div>
            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                Telephone
            </div>
            <div class="desc"><?= $our_telnum ?></div>
        </div>
    </li>
    <li class="col-xs-12">
        <div class="b-google-map__info-window-address-icon f-center pull-left">
            <i class="fa fa-skype"></i>
        </div>
        <div>
            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                Fax
            </div>
        </div>
    </li>
    <li class="col-xs-12">
        <div class="b-google-map__info-window-address-icon f-center pull-left">
            <i class="fa fa-envelope"></i>
        </div>
        <div>
            <div class="b-google-map__info-window-address-title f-google-map__info-window-address-title">
                Email
            </div>
            <div class="desc"><?= $email ?></div>
        </div>
    </li>
</ul>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<div class="l-main-container">
    <div class="b-desc-section-container">
         <div class="map-responsive">
            <?= $map_code ?>  
          </div>
    </div>
</div>
