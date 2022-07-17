<?php
$addnewpatient = true;
require_once "header.php";

?>


                    <!-- personal details content starts here -->

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                        <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Personal Details</span>
                    </div>
                    <form name="newcallnotes" action="patient_post.php" id="newcallnotes" method="POST">
                        <input type="hidden" name="page" value="">

                        <div class="row" style="padding: 20px;">

                            <div class="col-md-4 form-group" id="full_name_p">
                                <label for="full_name">Patient Full Name </label> <span class="span_error" id="error_full_name"></span>
                                <input type="text" class="form-control form_input" name="full_name" id="full_name" placeholder="Patient Full Name">
                            </div>

                            <div class="col-md-4 form-group" id="mobile_no_p">
                                <label for="mobile_no">Patient Mobile No </label> <span class="span_error" id="error_mobile_no"></span>
                                <input type="text" class="form-control form_input" name="mobile_no" maxlength="10" id="mobile_no" placeholder="Patient Mobile No.">
                            </div>


                            <div class="col-md-4 form-group">
                                <label for="">Gender</label> <span class="span_error" id="error_gender"></span>
                                <select name="gender_name" class="form-control form_select" id="gender_name">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>


                            <div class="col-md-4 form-group" id="height_ids">
                                <label for="BirthDate" style="width: 100%;">Height in Feet</label> <span class="span_error" id="error_height_ids"></span>

                                <input style="width: 45%!important; float: left; margin-right: 10%;" type="number" class="form-control form_input" min="1" max="8" pattern="[1-8]{1}" title="Please Add valid Height Inches" name="height_ft" id="user_height" placeholder="Height(Feet)">

                                <input style="width: 45% !important; float: left;" type="number" class="form-control form_input" type="number" class="form-control form_input" min="0" max="12" pattern="[0-12]{2}" title="Please Add valid Height Inches" name="height_inches" id="user_height_inches" placeholder="Height(Inches)">
                            </div>

                            <div class="col-md-4 form-group" id="height_ids">
                                <label for="BirthDate">Weight in kg</label> <span class="span_error" id="error_weight"></span>
                                <input type="text" pattern="\d{1,5}" title="Please Add valid Weight:[123654]" class="form-control form_input" maxlength="3" autocomplete="off" name="weight" id="user_weight" placeholder="Weight in kg">
                            </div>


                            <div class="col-md-4 form-group" id="BirthDate_ids">
                                <label for="BirthDate">Birth Date</label> <span class="span_error" id="error_BirthDate"></span>
                                <input type="text" class="form-control form_input" autocomplete="off" name="BirthDate" id="BirthDate" placeholder="Birth Date">
                            </div>


                            <div class="col-md-4 form-group">
                                <label for="">Blood Group</label> <span class="span_error" id="error_span_bloodgroup"></span>
                                <select name="bloodgroup" class="form-control form_select" id="bloodgroup">
                                    <option value="">Blood Group</option>
                                    <option value="71"> O+ </option>
                                    <option value="72"> A+ </option>
                                    <option value="73"> B+ </option>
                                    <option value="74"> AB+ </option>
                                    <option value="75"> O- </option>
                                    <option value="76"> A- </option>
                                    <option value="77"> B- </option>
                                    <option value="78"> AB- </option>
                                    <option value="458"> Don't Know</option>
                                </select>
                            </div>


                            <div class="col-md-4 form-group">
                                <label for="">Lead Sources</label> <span class="span_error" id="error_span_leadSource"></span>
                                <select name="leadSource" class="form-control form_select" id="leadSource">
                                    <option value="">Lead Sources</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Google">Google</option>
                                    <option value="Patient-Referral">Patient Referral</option>
                                    <option value="Doctor-Referral">Doctor Referral</option>
                                    <option value="Other-Referral">Other Referral</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="SMS">SMS</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="AppDownload">AppDownload</option>

                                </select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="">Select Caregiver:</label> <span class="span_error" id="error_span_caregiver"></span>
                                <select name="caregiver" class="form-control form_select" id="caregiver">
                                    <option value="">Select Caregiver</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Wife">Wife</option>
                                    <option value="Daughter-in-Law">Daughter in Law</option>
                                    <option value="Son-in-Law">Son in Law</option>
                                    <option value="Help">Help</option>
                                    <option value="Self">Self</option>
                                </select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="">Using Oxyjon App?</label> <span class="span_error" id="error_span_bloodgroup"></span>
                                <select name="using_oxyjon_App" class="form-control form_select" id="using_oxyjon_App">
                                    <option value="">Using oxyjon App</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>


                            <div class="col-md-4 form-group">
                                <label for="">Address</label> <span class="span_error" id="error_span_address"></span>
                                <textarea class="form-control form_input" rows="2" name="address" id="address_ids" placeholder="Patient Full Address"></textarea>
                            </div>



                            <div class="col-md-4 form-group" id="residing_in_ids">
                                <label for="residing_in">Residing in <small>(select from lookup)</small></label> <span class="span_error" id="error_BirthDate"></span>
                                <input type="text" class="form-control form_input" autocomplete="off" name="residing_in" id="residing_in" placeholder="Residing in">
                                <input type="hidden" name="residing_in_id" id="residing_in_id" value="0">
                            </div>

                            <div class="col-md-4 form-group" id="adhar_card_no_ids">
                                <label for="adhar_card_no">Aadhar Card Number</label> <span class="span_error" id="error_adhar_card_no"></span>
                                <input type="text" class="form-control form_input" autocomplete="off" name="adhar_card_no" id="adhar_card_no" placeholder="Aadhar Card Number">
                            </div>



                            <div class="col-md-4 form-group" id="medical_insurance_number_ids">
                                <label for="medical_insurance_number">Medical Insurance Number</label>
                                <span class="span_error" id="error_medical_insurance_number"></span>
                                <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_number" id="medical_insurance_number" placeholder="Medical Insurance Number">
                            </div>


                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Medical Insurance Provider</label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                <input type="text" class="form-control form_input" autocomplete="off" name="medical_insurance_provider" id="medical_insurance_provider" placeholder="Medical Insurance Provider">
                            </div>
                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Highest Education level</label>
                                <select name="education" class="form-control" name="" id="">
                                    <option value="">Highest Education Level</option>
                                    <option value="Class 12 and below">Class 12 and below</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Professional degree">Professional degree</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">What is your current profession?</label>
                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                <input type="text" class="form-control form_input" autocomplete="off" name="current_profession" id="medical_insurance_provider" placeholder="What is your current profession">
                            </div>
                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="emergency_contact_name_ids">
                                <label for="emergency_contact_name">Emergency Contact Name</label>
                                <span class="span_error" id="error_emergency_contact_name"></span>

                                <input type="text" class="form-control form_input" autocomplete="off" name="emergency_contact_name" id="emergency_contact_name" placeholder="Emergency Contact Name">
                            </div>



                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="emergency_contact_number_ids">
                                <label for="emergency_contact_number">Emergency Contact Number</label>
                                <span class="span_error" id="error_emergency_contact_number"></span>

                                <input type="number" class="form-control form_input" autocomplete="off" name="emergency_contact_number" id="emergency_contact_number" maxlength="10" placeholder="Emergency Contact Number">
                            </div>


                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="emergency_email_ids">
                                <label for="emergency_email_id_l">Emergency Email ID</label>
                                <span class="span_error" id="error_emergency_email_id"></span>

                                <input type="email" class="form-control form_input" autocomplete="off" name="emergency_email_id" id="emergency_email_id" placeholder="Emergency Email ID">
                            </div>


                            <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12" id="relationship_ids">
                                <label for="relationship_l">Relationship</label>
                                <span class="span_error" id="error_relationship"></span>

                                <select name="relationship" class="form-control form_select" id="relationship">
                                    <option value="">Select</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Sibling">Sibling</option>
                                    <option value="Son">Son</option>
                                    <option value="Daughter">Daughter</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <!-- personal details content ends here -->





                            <div class="form-group col-xs-4 col-sm-4 col-md-12 col-lg-12 ">
                                <button type="submit" name="addNewPatient" class="btn btn-primary">Submit</button>
                                <input type="reset" class="btn btn-primary" name="reset" value="Reset">


                                <a href="dashboard.php">
                                    <div class="btn btn-primary" name="back" style="float: right; background-color: #e93a68; border:0">Back</div>
                                </a>


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
require_once "footer.php"
?>