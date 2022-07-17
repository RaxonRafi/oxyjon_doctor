<?php
$family_history = true;
require_once "header.php";

?>


                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="medical_insurance_provider_ids">
                        <span style="color: #e93a68; font-weight: 700; font-size: 15px;">Family History</span>
                    </div>
                    <form name="newcallnotes" action="patient_post.php" id="newcallnotes" method="POST">
                        <input type="hidden" name="page" value="">

                        <div class="row" style="padding: 20px; width: 80%;">
                            <div class="col-md-12 form-group"  id="medical_insurance_provider_ids">
                                <label for="residing_in">Father Condition</label>
                                <select name="father_condition"class="form-control lookup" name="" id="" multiple>
                                    <option value="">Father Condition</option>
                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                    <option value="High Blood pressure">High Blood pressure</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Mother Condition</label>
                                <select name="mother_condition" class="form-control lookup" name="" id="" multiple>
                                    <option value="">Mother Condition</option>
                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                    <option value="High Blood pressure">High Blood pressure</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Brother Condition</label>
                                <select name="brother_condition" class="form-control lookup" name="" id="" multiple>
                                    <option value="">Brother Condition</option>
                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                    <option value="High Blood pressure">High Blood pressure</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group" id="medical_insurance_provider_ids">
                                <label for="residing_in">Sister Condition</label>
                                <select name="sister_condition" class="form-control lookup" name="" id="" multiple>
                                    <option value="">Sister Condition</option>
                                    <option value="Type 1 Diabetes">Type 1 Diabetes</option>
                                    <option value="Type 2 Diabetes">Type 2 Diabetes</option>
                                    <option value="High Blood pressure">High Blood pressure</option>
                                </select>
                            </div>



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
require_once "footer.php"
?>