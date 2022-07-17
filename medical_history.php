<?php
$medical_history = true;
require_once "header.php";
?>



<!-- personal details content starts here -->

<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
    <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Medical History</span>
</div>
<form name="newcallnotes" action="patient_post.php" id="newcallnotes" method="POST">
    <input type="hidden" name="page" value="">

    <div class="row" style="padding: 20px;">
        <!-- medical history content starts here  -->

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
                    <option value="before breakfast">before breakfast</option>
                    <option value="after breakfast">after breakfast</option>
                    <option value="Before lunch">Before lunch</option>
                    <option value="After lunch">After lunch</option>
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