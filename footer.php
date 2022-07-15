           </div>
           <!-- ============================================================== -->
           <!-- End Container fluid  -->
           <!-- ============================================================== -->
           <!-- ============================================================== -->
           <!-- footer -->
           <!-- ============================================================== -->
           <!-- footer section Mobile end -->
           <footer class="footer text-center">
               All Rights Reserved Oxyjon &copy; 2022
           </footer>


           <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

           <script src="assets/libs/jquery/dist/jquery.min.js"></script>
           <!-- Bootstrap tether Core JavaScript -->
           <!-- <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script> -->
           <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
           <!-- apps -->
           <!-- <script src="dist/js/app.min.js"></script> -->
           <!-- <script src="dist/js/app.init-menusidebar.js"></script> -->
           <script src="dist/js/app-style-switcher.js "></script>
           <script src="dist/js/feather.min.js"></script>
           <!-- slimscrollbar scrollbar JavaScript -->
           <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
           <!-- <script src="assets/extra-libs/sparkline/sparkline.js "></script> -->
           <!-- theme js -->
           <!--Menu sidebar -->
           <script src="dist/js/sidebarmenu.js"></script>
           <!--Custom JavaScript -->
           <script src="dist/js/custom.min.js"></script>
           <script src="dist/js/validation.js"></script>


           <!-- ============================================================== -->
           <!-- End footer -->
           <!-- ============================================================== -->
           </div>
           <!-- ============================================================== -->
           <!-- End Page wrapper  -->
           <!-- ============================================================== -->
           </div>

           <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

           <script src="assets/libs/jquery/dist/jquery.min.js"></script>
           <!-- Bootstrap tether Core JavaScript -->
           <!-- <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script> -->
           <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
           <!-- apps -->
           <!-- <script src="dist/js/app.min.js"></script> -->
           <!-- <script src="dist/js/app.init-menusidebar.js"></script> -->
           <script src="dist/js/app-style-switcher.js "></script>
           <script src="dist/js/feather.min.js"></script>
           <!-- slimscrollbar scrollbar JavaScript -->
           <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
           <!-- <script src="assets/extra-libs/sparkline/sparkline.js "></script> -->
           <!-- theme js -->
           <!--Menu sidebar -->
           <script src="dist/js/sidebarmenu.js"></script>
           <!--Custom JavaScript -->
           <script src="dist/js/custom.min.js"></script>
           <script src="dist/js/validation.js"></script>



           <!-- jQuery UI -->
           <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

           <script src="js/callnotes.js"></script>


           <script>
               function addnewValidate() {
                   let valid = true;
                   $(".form-control").css('background-color', '');
                   $(".span_error").html('');
                   valid = validateContact();
                   if (valid) {
                       console.log(valid);
                       return true;
                   } else {
                       console.log(valid);
                       return false;
                   }
               }


               function validateContact() {
                   let valid = true;
                   if (!$("#full_name").val()) {
                       $("#error_full_name").html("( Required )");
                       $("#full_name").css('background-color', '#efcfca');
                       valid = false;
                   }
                   if (!$("#mobile_no").val()) {
                       $("#error_mobile_no").html("( Required )");
                       $("#mobile_no").css('background-color', '#efcfca');
                       valid = false;
                   }
                   if (!$("#gender_name").val()) {
                       $("#error_gender").html("( Required )");
                       $("#gender_name").css('background-color', '#efcfca');
                       valid = false;
                   }
                   if (!$("#leadSource").val()) {
                       $("#error_span_leadSource").html("( Required )");
                       $("#leadSource").css('background-color', '#efcfca');
                       valid = false;
                   }
                   if (!$("#bloodgroup").val()) {
                       $("#error_span_bloodgroup").html("( Required )");
                       $("#bloodgroup").css('background-color', '#efcfca');
                       valid = false;
                   }
                   return valid;
               }
           </script>

           <script type="text/javascript">
               $(function() {

                   $("#residing_in").autocomplete({
                       source: function(request, response) {
                           console.log('sssssxx');
                           // Fetch data
                           $.ajax({
                               url: "ajax-city-search.php",
                               type: 'post',
                               dataType: "json",
                               data: {
                                   search: request.term
                               },
                               success: function(data) {
                                   //console.log('111 sssssxx');
                                   //console.log(data);
                                   response(data);
                               }
                           });
                       },
                       select: function(event, ui) {
                           // Set selection
                           $('#residing_in').val(ui.item.label); // display the selected text
                           $('#residing_in_id').val(ui.item.value); // save selected id to input
                           return false;
                       },
                       focus: function(event, ui) {
                           $("#residing_in").val(ui.item.label);
                           //$( "#selectuser_id" ).val( ui.item.value );
                           return false;
                       },
                   });
               });
           </script>
           <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
           <script>
               $(document).ready(function() {
                   $('.lookup').select2();
               });

               function medication() {

                   const dose = document.getElementById('dose').value;
                   alert(dose);

               }
           </script>

           </body>

           </html>