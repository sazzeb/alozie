<?php
$form_location = current_url();
?>

<div class="l-main-container">
    <div class="b-desc-section-container">
        <section class="container b-welcome-box">
            <div class="row">
                <div class="col-md-offset-2 col-md-6">
                    <h1 class="is-global-title f-center">We’d love to hear from you!</h1>
                    <p class="f-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a scelerisque turpis, ut porta turpis. Integer imperdiet aliquet velit, vel tincidunt lectus dictum sed. Curabitur dignissim ut massa vel tincidunt. Nullam imperdiet pharetra ipsum in lobortis. Etiam convallis, felis quis dapibus dictum, libero mauris luctus nunc, non fringilla purus ligula non justo. Nullam </p>
                </div>
            </div>
        </section>
<section class="container">
    <div class="row">
        <div class="col-sm-6 b-contact-form-box col-md-offset-2">
            <h3 class="f-primary-b b-title-description f-title-description">
                drop a line
                <div class="b-title-description__comment f-title-description__comment f-primary-l">Quisque at tortor a libero posuere laoreet vitae sed arcu nunc at augue tincidunt </div>
            </h3>
          
         
            <div class="row">
            <form action="<?= $form_location ?>" method="post">
                 <?php
                    if ($code=="") { ?>
                    <div class="col-md-12" >
                        <div class="b-form-row">
                            <label class="b-form-vertical__label" for="name">Subject Of interest</label>
                            <div class="b-form-vertical__input">
                                <input type="text"  name="subject" value="<?= $subject ?>" id="name" class="form-control"  placeholder="Enter the subject of matter here"/>
                            </div>
                        </div>
                         <?php
                          } else {
                            echo form_hidden('subject', $subject);
                          }
                          ?>
                    <div class="col-lg-12 ">
                        <label class="b-form-vertical__label">Your message</label>
                        <textarea name="message" id="txtEditor" class="form-control" placeholder="Enter your message here"><?= $message ?></textarea>
                    </div>
                  </div>
                <div class="checkbox">
                  <label>
                    <input name="urgent" value="1" type="checkbox"<?php

                      if ($urgent==1) {
                          echo " checked";
                      }

                    ?>> Urgent
                  </label>
                </div>

                <div class="b-form-row col-md-6">
                  <button type="submit" name="submit" value="Submit" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100">Submit Your Message</button> <br/>
                  <button type="submit" name="submit" value="Cancel" class="b-btn f-btn b-btn-md b-btn-default f-primary-b b-btn__w100" id="btnContactUs">Cancel</button>
                  <?php
                  echo form_hidden('token', $token);
                  ?>
                  </form>
                </div>
 
                </div>
            </div>
        </section>
    </div>
</div>