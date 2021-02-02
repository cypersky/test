<div class="image-container set-full-height img-fluid" style="background-image: url('../gallery/outbg1.png')">


    <a href="https://outstyle.ro">


         <div class="logo-container">


            <div class="outstyle">


               <img src="../gallery/outstyle-logo.png">


            </div>


        </div>


    </a>




    <!--   Big container   -->


    <div class="container">


        <div class="row">


          <div class="col-sm-8 col-sm-offset-2">


              <!--      Wizard container        -->


              <div class="wizard-container">


                  <div class="card wizard-card" data-color="blue" id="wizard">


                      <form action="personalizare" method="post">


                        <div class="wizard-header">


                            <h3 class="wizard-title">


                              Cerere de personalizare


                            </h3>


                <h5>Informațiile acestea ..</h5>


                        </div>


             <div class="wizard-navigation">


                <ul>


                    <li><a href="#personale" data-toggle="tab">Datele personale</a></li>


                    <li><a href="#articol" data-toggle="tab">Articol</a></li>


                    <li><a href="#specificati" data-toggle="tab">Specificații</a></li>


                    <li><a href="#procentaj" data-toggle="tab">Procentaj</a></li>


                    <li><a href="#descriere" data-toggle="tab">Descriere</a></li>


                 </ul>


             </div>



            <?php if (isset($validation)) : ?>

                <div class="text-danger">

                    <?= $validation->listErrors() ?>

                </div>

            <?php endif; ?>

             <div class="tab-content">





                  <div class="tab-pane" id="personale">


                    <div class="row">


                        <div class="col-sm-12">


                           <h4 class="info-text"> Să începem cu informațile de baza.</h4>


                        </div>


                        <div class="col-sm-12">

                            <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                        <label class="control-label">Nume</label>
                                        <input name="os_firstname" type="text" class="form-control valid" aria-required="true" aria-invalid="false" value="<?= set_value('os_firstname') ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="input-group">
                                  <span class="input-group-addon">
                              
                                  </span>
                                  <div class="form-group label-floating">
                                          <label class="control-label">Prenume</label>
                                          <input name="os_lastname" type="text" class="form-control valid" aria-required="true" aria-invalid="false" value="<?= set_value('os_lastname') ?>" required>
                                  </div>
                              </div>
                        </div>


                      <div class="col-sm-6">
                      <div class="input-group">
                          <span class="input-group-addon">
                     
                          </span>
                          <div class="form-group label-floating">
                                   <label class="control-label">Adresă de email</label>
                               <input name="os_email" type="text" class="form-control valid" aria-required="true" aria-invalid="false" value="<?= set_value('os_email') ?>" required>
                           </div>
                        </div>

                          <div class="input-group">
                            <span class="input-group-addon">

                            </span>
                            <div class="form-group label-floating">
                              <label class="control-label">Localitate</label>
                             <input name="os_location" type="text" class="form-control valid" aria-required="true" aria-invalid="false" value="<?= set_value('os_location') ?>" required>
                            </div>
                          </div>
                      </div>


                       <div class="col-sm-6">

                         <div class="input-group">


                           <span class="input-group-addon">


            


                           </span>


                           <div class="form-group label-floating">


                             <label class="control-label">Număr de telefon</small></label>


                             <input name="os_company" type="text" class="form-control valid" aria-required="true" aria-invalid="false" value="<?= set_value('os_company') ?>" required> 


                           </div>


                         </div>





                         <div class="input-group">


                           <span class="input-group-addon">


                   


                           </span>


                           <div class="form-group label-floating">


                             <label class="control-label">Adresă</label>


                             <input name="os_address" type="text" class="form-control valid" aria-required="true" aria-invalid="false" value="<?= set_value('os_address') ?>" required>


                           </div>


                         </div>




                         </div>


                    </div>


                  </div>





                  <div class="tab-pane" id="articol">


                                  <h4 class="info-text">Selectează articolul dorit </h4>


                                  <div class="row">


                                      <div class="col-sm-10 col-sm-offset-1">


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Caciula">


                                                  <input type="radio" name="os_product" value="<?php echo set_radio('os_product', '1', true); ?>" />
                                                  <div class="icon">


                                                      <img class="icons" src="../gallery/icons/caciula.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Geaca">

                                               <input type="radio" name="os_product" value="<?php echo set_radio('os_product', '2'); ?>"/>

                                                  <div class="icon">


                                                      <img class="icons" src="../gallery/icons/geaca.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Bluza">

                                               <input type="radio" name="os_product" value="<?php echo set_radio('os_product', '3'); ?>" />
                                                  <div class="icon">

                                                      
                                                      <img class="icons" src="../gallery/icons/bluza.svg" alt="" style="width:45%;margin-top: 25%;">
                                                      


                                                  </div>


                                              </div>


                                          </div>


                                      </div>


                                      <div class="col-sm-10 col-sm-offset-1">


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Tricou">


                                              <input type="radio" name="os_product[]" value="4" <?php echo set_radio('os_product', '4'); ?> />
                                                  <div class="icon">


                                                  
                                                      <img class="icons" src="../gallery/icons/tricou.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Maieu">


                                              <input type="radio" name="os_product[]" value="5" <?php echo set_radio('os_product', '5'); ?> />
                                                  <div class="icon">


                                                      <img class="icons" src="../gallery/icons/maieu.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Pantalon">

                                                  <input type="radio" name="os_product[]" value="6" <?php echo set_radio('os_product', '6'); ?> />
                                                  <div class="icon">


                                                      <img class="icons" src="../gallery/icons/pantalon.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                      </div>


                                      <div class="col-sm-10 col-sm-offset-1">


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Chiloti">

                                              <input type="radio" name="os_product[]" value="7" <?php echo set_radio('os_product', '7'); ?> />

                                                  <div class="icon">

                                                      <img class="icons" src="../gallery/icons/chiloti.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Ciorapi">

                                                  <input type="radio" name="os_product[]" value="8" <?php echo set_radio('os_product', '8'); ?> />
                                                  <div class="icon">


                                                      <img class="icons" src="../gallery/icons/ciorap.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                          <div class="col-sm-4">


                                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Adidasi">

                                                  <input type="radio" name="os_product[]" value="9" <?php echo set_radio('os_product', '9'); ?> />


                                                  <div class="icon">


                                                      <img class="icons" src="../gallery/icons/adidas.svg" alt="" style="width:45%;margin-top: 25%;">


                                                  </div>


                                              </div>


                                          </div>


                                      </div>


                                  </div>


                  </div>




                  <div class="tab-pane" id="specificati">

                    <div class="row">

                        <div class="col-sm-12">

                           <h4 class="info-text"> Specificațiile articolului dorit.</h4>

                        </div>



                       <div class="col-sm-6">



                      <div class="input-group">

                          <span class="input-group-addon">


                          </span>

                          <div class="form-group label-floating">

                              <label class="control-label">Dimensiunea articolului</label>

                              <select name="os_size" class="form-control">

                                <option disabled="" selected=""></option>

                                  <?php foreach ($sizes as $s) : ?>

                                      <option value="<?= $s ?>"><?= $s ?></option>

                                  <?php endforeach; ?>

                              </select>

                          </div>

                      </div>

                  </div>

                       <div class="col-sm-6">

                         <div class="input-group">

                           <span class="input-group-addon">



                           </span>

                           <div class="form-group label-floating">

                               <label class="control-label">Material</label>

                               <select name="os_material" class="form-control">

                                 <option disabled="" selected=""></option>

                                   <?php foreach ($material as $m) : ?>

                                       <option value="<?= $m ?>"><?= $m ?></option>

                                   <?php endforeach; ?>

                               </select>

                           </div>

                         </div>

                        </div>

                       </div>

                  </div>



                  <div class="tab-pane" id="procentaj">


                         <div class="row">


                                <h4 class="info-text"> Procentajul de acoperire</h4>


                                <div class="col-sm-4 col-sm-offset-1">


                                    <div class="picture-container">


                                        <div class="picture">


                                          <img src="../material/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>


                                            <input type="file" id="wizard-picture">


                                        </div>


                                        <h6>Alege fotografia</h6>


                                    </div>


                                </div>




                                <div class="col-sm-6">


                                  <div class="form-group label-floating">

                                      <label class="control-label">Locul unde vine pictura</label>

                                      <select name="os_place" class="form-control">

                                        <option disabled="" selected=""></option>

                                          <?php foreach ($place as $p) : ?>

                                              <option value="<?= $p ?>"><?= $p ?></option>

                                          <?php endforeach; ?>

                                      </select>

                                  </div>

                                </div>




                                <div class="col-sm-6">

                                  <div class="form-group label-floating">

                                      <label class="control-label">Procentajul de acoperire</label>

                                      <select name="os_procent" class="form-control">

                                        <option disabled="" selected=""></option>

                                          <?php foreach ($procentaj as $pr) : ?>

                                              <option value="<?= $pr ?>"><?= $pr ?></option>

                                          <?php endforeach; ?>

                                      </select>

                                  </div>

                                </div>



                                <div class="col-sm-10 col-sm-offset-1">

                                    <div class="input-group">

                                      <span class="input-group-addon">


                                      </span>

                                      <div class="form-group label-floating">

                                          <label class="control-label">Culorile utilizate</label>

                                          <input name="os_color" type="text" class="form-control valid" value="<?= set_value('os_color') ?>" required>

                                      </div>

                                    </div>

                                </div>



                                <div class="col-sm-10 col-sm-offset-1">


                                    <div class="input-group">


                                      <span class="input-group-addon">




                                      </span>


                                      <div class="form-group label-floating">


                                          <label class="control-label">Stilul de desen</label>


                                          <input name="os_style" type="text" class="form-control valid" value="<?= set_value('os_style') ?>" required>


                                      </div>


                                    </div>


                                </div>


                        </div>


                 </div>




                 <div class="tab-pane" id="descriere">

                            <div class="row">

                                 <h4 class="info-text"> Alte informații </h4>

                                 <div class="col-sm-4 col-sm-offset-1">

                                     <div class="picture-container">

                                         <div class="picture">

                                           <img src="../material/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>

                                             <input type="file" id="wizard-picture">

                                         </div>

                                         <h6>Poză cu articolul</h6>

                                     </div>

                                 </div>





                                 <div class="col-sm-6 col-sm-offset-1">

                                      <div class="form-group">

                                         <label>Descriere</label>

                                         <textarea class="form-control valid" name="os_description" placeholder="" rows="9" aria-invalid="false" value="<?= set_value('os_description') ?>">

                                         </textarea>

                                       </div>

                                 </div>

                             </div>



                 </div>




              </div>


                          <div class="wizard-footer">


                              <div class="pull-right">


                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Mai departe' />


                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Trimite' />


                                </div>


                                <div class="pull-left">


                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Inapoi' />





                  <div class="footer-checkbox">


                    <div class="col-sm-12">


                      <div class="checkbox">


                        <label>


                          <input type="checkbox" name="os_newsletter">


                        </label>


                        Inregistreaza-te la newsletter


                      </div>


                    </div>


                  </div>


              </div>

              <?php
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
              ?>

                                <div class="clearfix"></div>


                          </div>

                      
                      </form>


                  </div>


             </div> <!-- wizard container -->


          </div>


      </div> <!-- row -->


  </div> <!--  big container -->





    <div class="footer">


        <div class="container text-center">


            Copyright 2021 @ Outstyle


        </div>


    </div>


</div>


