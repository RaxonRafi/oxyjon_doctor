<?php
$lifestyle = true;
require_once "header.php";

?>


    
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                        <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Diabetes Awareness and Lifestyle</span>
                    </div>
                    <form name="newcallnotes" action="patient_post.php" id="newcallnotes" method="POST">
                        <input type="hidden" name="page" value="">

                        <div class="row" style="padding: 20px;">
                            <!-- life style content starts here  -->


                            <div class="col-md-3 form-group">
                                <label for="">Do you monitor your blood sugar?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blood_sugar" value="Yes" id="flexRadioDefault19">
                                    <label class="form-check-label" for="flexRadioDefault19">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="blood_sugar" value="No" id="flexRadioDefault20">
                                    <label class="form-check-label" for="flexRadioDefault20">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-3 form-group " id="medical_insurance_provider_ids">
                                <label for="residing_in">Frequency of blood sugar checks</label>
                                <select class="form-control" name="frequency_blood_sugar" id="">
                                    <option value="">blood sugar checks</option>
                                    <option value="1 Days">1 Days</option>
                                    <option value="7 Days">7 Days</option>
                                    <option value="15 Days">15 Days</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="more than 30 days">more than 30 days</option>

                                </select>
                            </div>

                            <div class=" col-md-3 form-group ">
                                <label for="">Have you had a recent episode of high blood sugar?</label>
                                <div class=" form-check">
                                    <input class="form-check-input" type="radio" name="recent_episode_high_bs" value="Yes" id="flexRadioDefault21">
                                    <label class="form-check-label" for="flexRadioDefault21">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="recent_episode_high_bs" value="No" id="flexRadioDefault22">
                                    <label class="form-check-label" for="flexRadioDefault22">
                                        No
                                    </label>
                                </div>

                            </div>
                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Food Habit</label>
                                <select class="form-control" name="food_habit" id="">
                                    <option value="">Food Habit</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Eggitarian">Eggitarian</option>
                                    <option value="Non Vegetarian">Non Vegetarian</option>
                                </select>
                            </div>
                            <div class="col-md-3 form-group mt-3">
                                <label for="">Do you exercise?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exercise" value="Yes" id="flexRadioDefault23">
                                    <label class="form-check-label" for="flexRadioDefault23">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exercise" value="No" id="flexRadioDefault24">
                                    <label class="form-check-label" for="flexRadioDefault24">
                                        No
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                <label for="residing_in">What type of exercise do you do?</label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                <input type="text" class="form-control form_input" autocomplete="off" name="type_of_exercise" id="medical_insurance_provider" placeholder="What type of exercise do you do-  ">
                            </div>
                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                <label for="residing_in">How many days do you exercise?</label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                <input type="number" class="form-control form_input" autocomplete="off" name="days_of_exc" id="medical_insurance_provider" placeholder="How many days do you exercise per week">
                            </div>
                            <div class="col-md-3 form-group mt-3" id="medical_insurance_provider_ids">
                                <label for="residing_in">How many minutes do you usually exercise?</label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                <input type="number" class="form-control form_input" autocomplete="off" name="minutes_of_exc" id="medical_insurance_provider" placeholder="How many minutes do you usually exercise">
                            </div>
                 
                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Total water intake/day. <small>(Lit /Day)</small></label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                <input type="number" class="form-control form_input" autocomplete="off" name="water_intake" id="medical_insurance_provider" placeholder=" Lit /Day ">
                            </div>
                            <div class=" col-md-3 form-group ">
                                <label for="">Constipation ?</label>
                                <div class=" form-check">
                                    <input name="constipation" value="Yes" class="form-check-input" type="radio" id="flexRadioDefault25">
                                    <label class="form-check-label" for="flexRadioDefault25">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="constipation" value="No" id="flexRadioDefault26">
                                    <label class="form-check-label" for="flexRadioDefault26">
                                        No
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">How often do you eat out? <small>(per/week)</small></label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                <input type="number" class="form-control form_input" autocomplete="off" name="eat_out" id="medical_insurance_provider" placeholder="How often do you eat out">
                            </div>
                            <div class="col-md-3 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Sleeping Hours<small>(Hours /Day)</small></label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                <input type="number" class="form-control form_input" autocomplete="off" name="sleeping_hours" id="medical_insurance_provider" placeholder="Hours /Day ">
                            </div>
                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Identify trouble spots like skipping breakfast or late night snacking.</label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>
                                <!-- <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider"
                                                  id="medical_insurance_provider" placeholder="if yes Then Frequency "> -->
                                <textarea id="address_ids" autocomplete="off" class="form-control form_input" name="trouble_spots" rows="2" placeholder="if yes Then Frequency "></textarea>
                            </div>
                            <div class="col-md-4 form-group mt-3" id="medical_insurance_provider_ids">
                                <label for="residing_in">Smoking. <small>(if they do?)</small></label>
                                <select name="smoking" class="form-control">
                                    <option value="">Smoking </option>
                                    <option value="Doesn't smoke">Doesn't smoke</option>
                                    <option value="1-2 cigarette per day">1-2 cigarette per day</option>
                                    <option value="5 cigarette per day">5 cigarette per day</option>
                                    <option value="More than 5 cigarette per day">More than 5 cigarette per day</option>

                                </select>
                            </div>
                            <div class="col-md-4 form-group mt-3" id="medical_insurance_provider_ids">
                                <label for="residing_in">Drinking <small>(if they do?)</small></label>
                                <select name="drinking" class="form-control">
                                    <option value="">Drinking </option>
                                    <option value="Doesn't drink alcohol">Doesn't drink alcohol</option>
                                    <option value="Daily">Daily</option>
                                    <option value="Once a week">Once a week</option>
                                    <option value="Once in 15 days">Once in 15 days</option>
                                    <option value="Once in 30 days">Once in 30 days</option>

                                </select>
                            </div>
                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">How often do you examine your feet?</label>
                                <select name="examine_feet" class="form-control">
                                    <option value="">How often do you examine your feet?</option>
                                    <option value="daily">daily</option>
                                    <option value="weekly">weekly</option>
                                    <option value="monthly">monthly</option>
                                    <option value="more than a month">more than a month</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">When was your last dental exam?</label>
                                <select name="dental_exam" class="form-control">
                                    <option value="">When was your last dental exam?</option>
                                    <option value="in last 3 months">in last 3 months</option>
                                    <option value="last 6 months">last 6 months</option>
                                    <option value="last 12 months">last 12 months</option>
                                    <option value="more than 12 months">more than 12 months</option>
                                </select>
                            </div>
                            <!-- life style content -->

                            <div class="form-group col-xs-4 col-sm-4 col-md-12 col-lg-12 ">
                                <button type="submit" name="addNewPatient" class="btn btn-primary">Submit</button>
                                <input type="reset" class="btn btn-primary" name="reset" value="Reset">


                                <a href="dashboard.php">
                                    <div class="btn btn-primary" name="back" style="float: right; background-color: #e93a68; border:0">Back</div>
                                </a>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-2"></div> -->
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
<?php
require_once "footer.php";
?>