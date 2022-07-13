var selectedActivity = '1.2'
var bmr_al = $("#myBMRData").val();
var calorieIntake_curBmr = parseFloat(bmr_al * selectedActivity);
var newCaloriesIntakeRuleWise = 0;
let totalCaloriesDificitOrGain  = $("#totalCaloriesDificit_tcd").val();

let validation = false;




$("#selectedActivity").val(selectedActivity); 
//var currentintakeDaily = $("#dailyCaloriesintake_c").val(); 

function GetmyActivityBmr(valueData) {
    let bmr = $("#myBMRData").val();
    let selectedDaysAsAGoal = $('input[name="no_of_days_weaight_loss"]:checked').val();
    // let selectedDaysAsAGoal = $("#noOfSelectedDaysGoal").text();
    //     selectedDaysAsAGoal = selectedDaysAsAGoal.replace('Days', selectedDaysAsAGoal).trim();

    console.log(selectedDaysAsAGoal+ " goal Days");

    //showMyBmeData

    let calorieIntake = 0;
    console.log(valueData);
    console.log(bmr);
    calorieIntake = parseFloat(bmr * valueData);
    console.log(calorieIntake);
    if (calorieIntake != 0) {
        $("#showMyBmeData").html(calorieIntake.toFixed(2));
        $("#showMyBmeData_newIntake").html(calorieIntake.toFixed(2));
        $("#selectedActivity").val(valueData);
        $("#CurrentCaloryintakeBMR").val(calorieIntake.toFixed(2));
        $("#activitySelected").html(valueData);
        $("#dailyCaloriesintake_c").val(calorieIntake.toFixed(2));
    }

    getTheGoalTime(selectedDaysAsAGoal);

}


function newCaloriesIntakeRuleWiseChange(newCalories, idealWeight, multiplier){
    $(".DayGoalWeightLoss").prop('checked', false);
    //this.value, <?php echo $idealWeight;?>, 25
    //alert(newCalories + calorieIntake_curBmr);
    let plusMinus = parseFloat(newCalories - +calorieIntake_curBmr).toFixed(2);
    //alert(plusMinus);
    if(plusMinus > 0){
        var noOfdaysGoal = parseFloat(totalCaloriesDificitOrGain / plusMinus).toFixed(2); 
    }else{
        var noOfdaysGoal = 'Maintain';
    }

    
    

    //console.log(newCalories);
    $("#newCaloriesIntakeRuleWise").val(newCalories);
    $("#newDailyCaloryIntake").html(newCalories);
    $("#newDailyCaloryDeficitSurplus").html(plusMinus);
    $("#noOfSelectedDaysGoal").html(noOfdaysGoal);

    newCaloriesIntakeRuleWise = newCalories;
    console.log(newCaloriesIntakeRuleWise);
}



function getTheGoalTime(valueData) {

    console.log("selected_act: "+valueData);
    $(".RulewiseRadio").prop('checked', false);
    //let bmr = $("#myBMRData").val();
    let dailyCaloriesintake_c = $("#dailyCaloriesintake_c").val();
    let totalCaloriesDificit_tcd  = $("#totalCaloriesDificit_tcd").val();
    var newDailyCaloryIntake = 0;
    var gainOrDeficit = $("#gainOrDeficit").val();  
    
    console.log(dailyCaloriesintake_c+ " :: "+DailyCalCountsD);
    //alert(totalCaloriesDificit_tcd);
    
    if(valueData){
        $("#noOfSelectedDaysGoal").html(valueData+" Days");

        var DailyCalCountsD = parseFloat(totalCaloriesDificit_tcd / valueData).toFixed(2);
        $("#newDailyCaloryDeficitSurplus").html(DailyCalCountsD);
        $("#dietPlan_newDailyCaloryDeficitSurplus").val(DailyCalCountsD);

        //console.log(DailyCalCountsD);

        if(gainOrDeficit == 'Surplus'){
            
            newDailyCaloryIntake = +dailyCaloriesintake_c + +DailyCalCountsD;
            $("#newDailyCaloryIntake").html(parseFloat(newDailyCaloryIntake).toFixed(2));
            $("#dietPlan_newDailyCaloryIntake").val(parseFloat(newDailyCaloryIntake).toFixed(2));

            //console.log(newDailyCaloryIntake);
        }
        if(gainOrDeficit == 'Deficit'){
            newDailyCaloryIntake = +dailyCaloriesintake_c - +DailyCalCountsD;

            //console.log(newDailyCaloryIntake);            
            $("#newDailyCaloryIntake").html(parseFloat(newDailyCaloryIntake).toFixed(2));
            $("#dietPlan_newDailyCaloryIntake").val(parseFloat(newDailyCaloryIntake).toFixed(2));
        } 
        
        newCaloriesIntakeRuleWise = parseFloat(newDailyCaloryIntake).toFixed(2);
        console.log("sss: "+newCaloriesIntakeRuleWise);

        CarbProteinFatDistribution(data = 0, type = '','');
    }


}


function saveDailyDietData(data = ''){

    console.log("ssssss sss");

    var validateData = CarbProteinFatDistribution(data = 0, type = '','');
    if(validateData == false){
        validation = false;
        return false;  
    }

    //check Selected No of days
    if ($('input[name="no_of_days_weaight_loss"]:checked').length == 0) {
        $("#goal_days_heading").css({"background-color": "red","color":"#fff"});
        $("#goal_days_heading_error").show().html('Required').css({"color": "red"});
        $('input[name="no_of_days_weaight_loss"]').focus()
        return false;    
    }else{
        $("#goal_days_heading").css({"background-color": "green","color":"#fff"});
        $("#goal_days_heading_error").hide();
        validation = true
        //$('input[name="no_of_days_weaight_loss"]').focus()
    }
    
    
    if ($('input[name="patientMealCount[]"]:checked').length == 0) {
        $("#selectNoOfMeals_heading").css({"background-color": "red","color":"#fff"});
        $("#selectNoOfMeals_error").show().html('Required').css({"color": "red"});
        $('input[name="patientMealCount"]').focus()
        return false;
    }else{        
        $("#selectNoOfMeals_heading").css({"background-color": "green","color":"#fff"});
        $("#selectNoOfMeals_error").hide();
        //$('input[name="no_of_days_weaight_loss"]').focus()  
        validation = true;      
    }

    console.log($('input[name="patientMealCount[]"]:checked').length);

    console.log(":: validation "+validation);
    
    if(validation == true){
        return true;
    }else{
        return false;
    }
    
}





function CarbProteinFatDistribution(data, type, newCalory){

    console.log("newCalory: "+ newCalory);
    if(newCalory != ''){
        newCaloriesIntakeRuleWise = newCalory;
    }
    console.log("wwwww: " + newCaloriesIntakeRuleWise+ " : data: "+ data);
    console.log(data+ " : "+newCaloriesIntakeRuleWise + " : "+type);
    let cal_carb = 0;
    let cal_protein = 0;
    let cal_fat = 0;
    let totalPercentage = 100;

    let carbePrecentage = $("#carbe_percentage").val();
    let proteinPrecentage = $("#protein_percentage").val();
    let fatPrecentage = $("#fat_percentage").val();

    if(newCaloriesIntakeRuleWise != 0){

        if(type == '' && data == 0){
            
            cal_carb = ((newCaloriesIntakeRuleWise * 55) / 100);
            $("#carbe_percentage_calculation").html(parseFloat(cal_carb).toFixed(2)+" Calories").css({"margin-left": "44px", "color": "green"});
            $("#dietPlan_totalCarbsInCalories").val(parseFloat(cal_carb).toFixed(2));

            cal_protein = ((newCaloriesIntakeRuleWise * 15) / 100);
            $("#protein_percentage_calculation").html(parseFloat(cal_protein).toFixed(2)+" Calories").css({"margin-left": "44px", "color": "green"});
            $("#dietPlan_totalProteinInCalories").val(parseFloat(cal_protein).toFixed(2));

            cal_fat = ((newCaloriesIntakeRuleWise * 30) / 100);
            $("#fat_percentage_calculation").html(parseFloat(cal_fat).toFixed(2)+" Calories").css({"margin-left": "44px", "color": "green"});
            $("#dietPlan_totalFatInCalories").val(parseFloat(cal_fat).toFixed(2));

        }else{

            if(type == 'carbe'){        
                carbePrecentage = data;
                //totalPercentage = (carbePrecentage + proteinPrecentage + fatPrecentage)
                //if(data)
                cal_carb = ((newCaloriesIntakeRuleWise * data) / 100);
                $("#carbe_percentage_calculation").html(parseFloat(cal_carb).toFixed(2)+" Calories").css({"margin-left": "44px", "color": "green"});
                $("#dietPlan_totalCarbsInCalories").val(parseFloat(cal_carb).toFixed(2));    
            } 
    
            if(type == 'protein'){
                proteinPrecentage = data;
                cal_protein = ((newCaloriesIntakeRuleWise * data) / 100);
                $("#protein_percentage_calculation").html(parseFloat(cal_protein).toFixed(2)+" Calories").css({"margin-left": "44px", "color": "green"});
                $("#dietPlan_totalProteinInCalories").val(parseFloat(cal_protein).toFixed(2));
            }
            
            if(type == 'fat'){
                fatPrecentage = data;
                cal_fat = ((newCaloriesIntakeRuleWise * data) / 100);
                $("#fat_percentage_calculation").html(parseFloat(cal_fat).toFixed(2)+" Calories").css({"margin-left": "44px", "color": "green"});
                $("#dietPlan_totalFatInCalories").val(parseFloat(cal_fat).toFixed(2));
            }       

        } 
        
        let cal_p_f_c = (parseInt(carbePrecentage) + parseInt(proteinPrecentage) + parseInt(fatPrecentage));
        console.log(parseInt(carbePrecentage));
        console.log(parseInt(proteinPrecentage));
        console.log(parseInt(fatPrecentage));

        //console.log("TotalPer: "+cal_p_f_c);
        $("#totalPercentageOfDistCal").html(cal_p_f_c);

        if(cal_p_f_c != totalPercentage){
            $("#totalPercentageOfDistCal").html(cal_p_f_c+" %").css({"color": "red",});
            $("#totalPercentageOfDistCalError").show().html('Error!! Distribution should be be 100%').css({"margin-left": "44px", "color": "red", "font-weight":"normal"});
            validation = false;
        }else{
            $("#totalPercentageOfDistCal").html(cal_p_f_c+" %").css({"color": "green"});
            $("#totalPercentageOfDistCalError").hide();
            validation = true;
        }   
        console.log("Dist: "+ validation);
        return validation;   
    }
    
    //carbe_percentage_calculation, protein_percentage_calculation, fat_percentage_calculation


   
}


$("#showhideBMRPanel").on('click',function(){
    let showstatus = 'hide';
    showstatus = $(this).attr("data-status");
    console.log(showstatus);

    if(showstatus == 'hide'){
        $("#bmiPanelDataSet").show();
        $("#showhideBMRPanel").attr("data-status","show");        
    }else{
        $("#bmiPanelDataSet").hide();
        $("#showhideBMRPanel").attr("data-status","hide");
    }        
});



//Load this function to call all selected/ Final Diet Plan
function loadDietPlanByFinal(selectedTab, selectedtabData, veg_nonveg = 'All'){
    
    let meal_setting_id = $("#meal_setting_id").val();
    let patient_id = $("#patient_id").val();
    console.log(selectedTab);
    if(selectedTab){
        $(".mealDatabody").hide();
        $(".nav-link").removeClass('active');
        $("#"+selectedTab).show();
        $("#"+selectedTab+"_link").children('a').addClass('active');

        $("#selected_neal_type").val(selectedtabData);
        //Loading Data

        $.post("dietlistallselected.php",
        {
            selectedmael: selectedtabData,
            vegnonveg: veg_nonveg,
            mealsetting: meal_setting_id,
            patient_id: patient_id
        },
        function(data, status){
            // alert("Data: " + data + "\nStatus: " + status);
            $("#"+selectedTab).html(data); 
            window.scrollTo(300, 100);

                      
        });
    }else{
        console.log('Error data-clickaction');
    }
    //console.log(selectedTab);
    //})
}


function loadDietPlanBySelection(selectedTab, selectedtabData, veg_nonveg = 'All'){
    //$('.meal_tab_choosen').click(function(){
    
    // let selectedTab = $(this).attr("data-clickaction");
    // let selectedtabData = $(this).attr("data-selected");
    let meal_setting_id = $("#meal_setting_id").val();
    let patient_id = $("#patient_id").val();
    console.log(selectedTab);
    if(selectedTab){
        $(".mealDatabody").hide();
        $(".nav-link").removeClass('active');
        $("#"+selectedTab).show();
        $("#"+selectedTab+"_link").children('a').addClass('active');

        $("#selected_neal_type").val(selectedtabData);
        //Loading Data

        $.post("dietlistmorning.php",
        {
            selectedmael: selectedtabData,
            vegnonveg: veg_nonveg,
            mealsetting: meal_setting_id,
            patient_id: patient_id
        },
        function(data, status){
            // alert("Data: " + data + "\nStatus: " + status);
            $("#"+selectedTab).html(data); 
            window.scrollTo(300, 100);

                      
        });
    }else{
        console.log('Error data-clickaction');
    }
    //console.log(selectedTab);
    //})
}



$(document).ready(function() {
    let pageInfo_name = getPageInfo();
    let mealSelected = $("#select_mela_timineing_settings li:first").attr('data-selected');
    let defeultSelected = $("#selected_neal_type_default").val();

    console.log("mealSelected: "+mealSelected+"  defeultSelected: "+defeultSelected);
    //
    if(pageInfo_name == 'viewdietplan.php'){

        if(mealSelected == defeultSelected){
            loadDietPlanByFinal(mealSelected+'_datablock',mealSelected);
        }else{
            loadDietPlanByFinal(defeultSelected+'_datablock',defeultSelected);
        }
        //console.log(mealSelected);

    }else{
        if(mealSelected == defeultSelected){
            loadDietPlanBySelection(mealSelected+'_datablock',mealSelected);
        }else{
            loadDietPlanBySelection(defeultSelected+'_datablock',defeultSelected);
        }
        //console.log(mealSelected);
    }       
});


function getPageInfo(){
    //alert("Sss");
    var path = window.location.pathname;
    var page = path.split("/").pop();
    console.log( page );
    return page;
}


function filterDietPlan(val){
   let meal = $("#selected_neal_type").val();
   console.log(val+ " : "+meal);
   loadDietPlanBySelection(meal+'_datablock',meal, val);
}
