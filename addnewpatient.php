<?php
require_once "header.php";
?>

                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Personal Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Medical History</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Lifestyle</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">this is home</div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">profile</div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">contact</div>
                                    </div>


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
                                            <!-- medical history content starts here  -->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                                                <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Medical History</span>
                                            </div>
                                            <!-- <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                    <label for="residing_in">Condition <small>(select from lookup)</small></label>
                                    <select class="form-control lookup" name="" id="" multiple>
                                        <option value="">Condition </option>
                                        <option value="">Type 1 Diabetes</option>
                                        <option value="">Type 2 Diabetes</option>
                                        <option value="">High Blood pressure</option>
                                    </select>
                                </div> -->
                                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Procedures <small>(select from lookup)</small></label>
                                                <select class="form-control lookup" name="procedures" id="" multiple>
                                                    <option value="">Procedures</option>
                                                    <option value="Colonoscopy">Colonoscopy</option>
                                                    <option value="Gall bladder surgery">Gall bladder surgery</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">Diabetes Type:</label> <span class="span_error" id="error_span_diabetes_types"></span>
                                                <select name="diabetes_types" class="form-control form_select" id="diabetes_types">
                                                    <option value="">Diabetes Types</option>
                                                    <option value="Type-1">Type-1</option>
                                                    <option value="Type-2">Type-2</option>
                                                    <option value="Gestational-Diabetes">Gestational Diabetes</option>
                                                    <option value="Weight-Loss">Weight Loss</option>
                                                    <option value="Pre-diabetes">Pre-diabetes</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3 form-group mt-2">
                                                <label class="mb-3" style="font-weight: bold;" for="">Check other Co morbid Disease:-</label>
                                                <label for="">Have you been diagnosed with Coronary Artery Disease?</label>
                                                <div class="form-check">
                                                    <input name="coronary_artery" value="Yes" class="form-check-input" type="radio" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="coronary_artery" value="No" class="form-check-input" type="radio" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3 form-group mt-5">
                                                <label for="">Have you ever suffered a Heart Attack?</label>
                                                <div class="form-check">
                                                    <input name="heart_attack" value="Yes" class="form-check-input" type="radio" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input name="heart_attack" value="No" class="form-check-input" type="radio" id="flexRadioDefault4">
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 form-group mt-5">
                                                <label for="">Have you been diagnosed with High Cholesterol?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_cholesterol" value="Yes" id="flexRadioDefault5">
                                                    <label class="form-check-label" for="flexRadioDefault5">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_cholesterol" value="No" id="flexRadioDefault6">
                                                    <label class="form-check-label" for="flexRadioDefault6">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 form-group mt-5">
                                                <label for="">Have you been diagnosed with High Blood Pressure?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_blood_pressure" value="Yes" id="flexRadioDefault7">
                                                    <label class="form-check-label" for="flexRadioDefault7">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="high_blood_pressure" value="No" id="flexRadioDefault8">
                                                    <label class="form-check-label" for="flexRadioDefault8">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group mt-2">
                                                <label class="mb-3" style="font-weight: bold;" for="">Check if any DM complication Disease is present :</label>
                                                <label for="">Diagnosed with Neuropathy (exp.Peripheral Vascular Disease etc.)</label>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_vascular_disease" value="Yes" id="flexRadioDefault10">
                                                    <label class="form-check-label" for="flexRadioDefault10">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_vascular_disease" value="No" id="flexRadioDefault9">
                                                    <label class="form-check-label" for="flexRadioDefault9">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group mt-5">
                                                <label for="">Diagnosed with Nephropathy (Kidney Disease)</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_kidney_disease" value="Yes" id="flexRadioDefault11">
                                                    <label class="form-check-label" for="flexRadioDefault11">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="neuropathy_kidney_disease" value="No" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group mt-5">
                                                <label for="">Diagnosed with Retinopathy</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="retinopathy" value="Yes" id="flexRadioDefault13">
                                                    <label class="form-check-label" for="flexRadioDefault13">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="retinopathy" value="No" id="flexRadioDefault14">
                                                    <label class="form-check-label" for="flexRadioDefault14">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Other Condition <small>(select from lookup)</small></label>
                                                <select name="conditions" class="form-control lookup" name="" id="" multiple>
                                                    <option value="">Condition </option>
                                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                                    <option value="High Blood pressure">High Blood pressure</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="">In the past 12 months, have you had a Hospital Admission?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hospital_admission" value="Yes" id="flexRadioDefault15">
                                                    <label class="form-check-label" for="flexRadioDefault15">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="hospital_admission" value="No" id="flexRadioDefault16">
                                                    <label class="form-check-label" for="flexRadioDefault16">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Reason(s) for hospital admissions-</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="text" class="form-control form_input" autocomplete="off" name="hospital_admission_reason" id="medical_insurance_provider" placeholder="Reason(s) for hospital admissions – ">
                                            </div>
                                            <div class="col-md-4 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">How many Day?</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="days" id="medical_insurance_provider" placeholder="How many Day?">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="">In the past 12 months, have you had a primary care physician visit?</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="physician_visit" value="Yes" id="flexRadioDefault17">
                                                    <label class="form-check-label" for="flexRadioDefault17">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="physician_visit" value="No" id="flexRadioDefault18">
                                                    <label class="form-check-label" for="flexRadioDefault18">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group" id="medical_insurance_provider_ids">
                                                <label for="residing_in">Number of Physician visits in past 12 months-</label>
                                                <span class="span_error" id="error_medical_insurance_provider"></span>

                                                <input type="number" class="form-control form_input" autocomplete="off" name="Num_physician_visit" id="medical_insurance_provider" placeholder="Number of Physician visits in past 12 months">
                                            </div>

                                            <form>
                                                <div class="col-md-3 form-group mt-2">
                                                    <label class="mb-3" style="font-weight: bold;" for="">Medication :</label>
                                                    <div class="form-group" id="medical_insurance_provider_ids">
                                                        <label for="residing_in">Name</label>
                                                        <span class="span_error" id="error_medical_insurance_provider"></span>

                                                        <input type="text" class="form-control form_input" autocomplete="off" name="name" id="medical_insurance_provider medicine_name" placeholder="Name of Medicine">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 form-group mt-5" id="medical_insurance_provider_ids">
                                                    <label for="residing_in">Enter quantity of Medicine</label>
                                                    <span class="span_error" id="error_medical_insurance_provider"></span>
                                                    <input type="number" class="form-control form_input" autocomplete="off" name="quantity" id="medical_insurance_provider dose" placeholder="Enter quantity of Medicine">
                                                </div>
                                                <div class="col-md-3 form-group mt-5" id="medical_insurance_provider_ids">
                                                    <label for="residing_in">Time of the day</label>
                                                    <select class="form-control lookup" name="time_of_day" id="" multiple>
                                                        <option value="Before lunch">Before lunch</option>
                                                        <option value="After lunch">After lunch</option>
                                                        <option value="before breakfast">before breakfast</option>
                                                        <option value="after breakfast">after breakfast</option>
                                                        <option value="before dinner">before dinner</option>
                                                        <option value="after dinner">after dinner</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-3 form-group" style="margin-top:64px;">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

                                            </form>
                                            <div class="col-md-9 float-left form-group">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl.No.</th>
                                                            <th>Name</th>
                                                            <th>quantity of Medicine</th>
                                                            <th>Time of the day</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">01</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">02</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">03</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                            <td>cell</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                         <!-- medical history content ends here -->

 


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