<br>
<section id="Why_Us">
    <div class="container inner">
        <div class="row">
            <ul class="checkout-bar progress_bar">
                <li class="active  "  ><p class="tb_txt"> Policy Holder Details </p></li>
                <li  class="active pulse">Member Addition Details</li>
                <li class="">Documents and Confirmation</li>
                <li class="">Payment Options</li>
            </ul>
        </div>
        <hr class="hrcolor">
    </div>
</section>

<section class="container">
<?php echo form_open('Member_details/data','id="member_form"'); ?>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<h2 class="heading_01" style="text-align: center;">
     <!--Insured's (Employee) Details -->
     Member Addition Details
    </h2>
</div>
		<div class="col-sm-4">
		<p class="sub_text_01 cust_pos">
    ( <?php echo $quote_number." Valid till :".$valid_date; ?> )
    </p>
</div>



	</div>
	<input type="hidden" name="quote_number" value="<?php echo $quote_number; ?>">
<br><Br>
<div class="row">

<div class="col-sm-6">
<div class="form-group cus_margin">
<label><span class="text-red">* </span>FIRST NAME AS IN PASSPORT</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-user"></i>
</div>
<input value="<?php echo $first_name;?>" type="text" class="form-control" id="first_name" name="first_name" placeholder="" required required data-toggle="tooltip"   title="Please enter the FIRST NAME AS IN PASSPORT!">
</div>
<?php echo form_error('first_name', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>
<div class="col-sm-6">
<div class="form-group cus_margin">
<label><span class="text-red">* </span>CURRENT COUNTRY OF RESIDENCE</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-flag"></i>
</div>
<select name="country_of_residence" id="country_of_residence" class="form-control show-popup" required="">
<option value="">Choose</option>
<?php
foreach($nations->result() as $value){
echo "<option value=".$value->country_id.">". $value->country_name ."</option>";
}
?>
</select>
</div>
<?php echo form_error('country_of_residence','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red"> </span>SECOND NAME AS IN PASSPORT</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-user"></i>
</div>
<input value="<?php echo $second_name;?>" type="text" class="form-control" id="second_name" name="second_name" placeholder="SECOND NAME AS IN PASSPORT" required required data-toggle="tooltip"   title="Please enter the SECOND NAME AS IN PASSPORT!">
</div>
<?php echo form_error('second_name','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span> EMIRATES ID NUMBER <small>(If Emirates ID Number is not yet available,  please provide Emirates ID Application Number)</small></label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $eid_number;?>" type="text" class="form-control" id="emirates_id" name="emirates_id" placeholder="EMIRATES ID NUMBER" required data-toggle="tooltip" title="Please enter the EMIRATES ID NUMBER!" >
</div>
<?php echo form_error('emirates_id','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>LAST (FAMILY) NAME AS IN PASSPORT</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-user"></i>
</div>
<input value="<?php echo $last_name;?>" type="text" class="form-control" id="last_name" name="last_name" placeholder="LAST (FAMILY) NAME AS IN PASSPORT" required data-toggle="tooltip" title="Please enter the LAST  NAME AS IN PASSPORT!">
<?php echo form_error('last_name','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>EMIRATES ID APPLICATION NUMBER</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $eid_app_number;?>" type="text" class="form-control" id="eid_application_no" name="eid_application_no" placeholder="EMIRATES ID APPLICATION NUMBER" data-toggle="tooltip" title="Please enter the EMIRATES ID APPLICATION NUMBER">
</div>
<?php echo form_error('eid_application_no','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<div class="form-group ">
<label><span class="text-red">* </span>GENDER<small class="member-detsmall"> (If Female answer mandatory questions)</small></label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-chevron-circle-down"></i>
</div>
<select name="gender" id="gender" class="form-control show-popup" required="" >
<option value="">Choose</option>
<?php
foreach(config_item(gender) as $key=>$value){
echo "<option value=".$value.">". $value ."</option>";
}
?>
</select>
</div>
</div>
<?php echo form_error('gender','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>DOB (DD MM YYYY)</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input value="<?php echo $dob;?>" type="date" class="form-control" id="dob" name="dob" placeholder="DOB (DD MM YYYY)" required  data-toggle="tooltip" title="Please enter your DOB.">
</div>
<?php echo form_error('dob','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>UID NUMBER</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $uid_num;?>" type="text" class="form-control" id="uid_number" name="uid_number" placeholder="UID NUMBER" required  data-toggle="tooltip" title="Please enter the UID NUMBER">
</div>
<?php echo form_error('uid_number','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>MARITAL STATUS</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-chevron-circle-down"></i>
</div>
<select name="marital_status" id="marital_status" class="form-control show-popup" required>
<?php
foreach(config_item(marital_status) as $key=>$value){
echo "<option value=".$key.">". $value ."</option>";
}
?>
</select>
</div>
<?php echo form_error('marital_status','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>RELATIONSHIP <small class="member-detsmall1">(TO POLICY HOLDER/SPONSOR)</small></label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-chevron-circle-down"></i>
</div>
<select name="relationship_to_policy_holder" id="relationship_to_policy_holder" required class="form-control show-popup">
<option value="">Choose</option>
<?php
$t="relation";
$t=config_item($t);
$c=asort($t);
foreach($t as $key=>$value){
echo "<option value=".$key.">". $value ."</option>";
if ($no_relation<=0)
break;
}
?>
</select>
</div>
<?php echo form_error('relationship_to_policy_holder','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>PASSPORT NUMBER (WHICH BEARS VALID RESIDENT VISA)</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $pp_num;?>" type="text" class="form-control" id="passport_number" name="passport_number" placeholder="PASSPORT NUMBER (WHICH BEARS VALID RESIDENT VISA)" required  data-toggle="tooltip" title="Please enter the VALID PASSPORT NUMBER">
</div>
<?php echo form_error('passport_number','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>NATIONALITY</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-flag"></i>
</div>
<select name="nationality_id" id="nationality_id" class="form-control show-popup" required="">
<option value="">Choose</option>
<?php
foreach($nations->result() as $value){
echo "<option value=".$value->country_id.">". $value->country_name ."</option>";
}
?>
</select>

</div>
<?php echo form_error('nationality_id','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>APPLICANT'S EMAIL ADDRESS</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-inbox"></i>
</div>
<input value="<?php echo $applicant_email;?>" type="email" class="form-control" id="applicant_email" name="applicant_email" placeholder="APPLICANT'S EMAIL ADDRESS" required data-toggle="tooltip" title="Please enter the APPLICANT'S EMAIL ADDRESS">
</div>
<?php echo form_error('applicant_email','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>SALARY<small>(sponsor for dependent application/employee for self / domestic help application)</small></label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $salary;?>" type="text" class="form-control" id="salary" name="salary" placeholder="Salary" required  data-toggle="tooltip" title="Please enter the SALARY">
</div>
<?php echo form_error('salary','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>RESIDENCE EMIRATE</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-flag"></i>
</div>
<select name="residence_emirate" id="residence_emirate" class="form-control show-popup">
<option value="">Choose</option>
<?php
$t="emirate_residency";
$t=config_item($t);
$c=asort($t);
foreach($t as $key=>$value){
echo "<option value=".$key.">". $value ."</option>";
}
?>
</select>
</div>
<?php echo form_error('residence_emirate','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>WORK EMIRATE</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-flag"></i>
</div>
<select name="work_emirate" id="work_emirate" class="form-control show-popup">
	<option value=""> Choose </option>
<?php
$t="work_emirate";
$t=config_item($t);
$c=asort($t);
foreach($t as $key=>$value){
echo "<option value=".$key.">". $value ."</option>";
}
?>
</select>
</div>
<?php echo form_error('work_emirate','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red"></span>MEMBER MOBILE NUMBER</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-mobile"></i>
</div>
<input value="<?php echo $member_mobile_number;?>" type="text" class="form-control" id="member_mobile_number" name="member_mobile_number" placeholder="971-50-XXXXXXX" required data-toggle="tooltip" title="Please enter the MEMBER MOBILE NUMBER">
</div>
<?php echo form_error('member_mobile_number','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>EMIRATE OF VISA</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<select name="emirate_visa" id="emirate_visa" class="form-control show-popup">
	<option value="">Choose</option>
<?php
$t="emirate_visa";
$t=config_item($t);
$c=asort($t);
foreach($t as $key=>$value){
echo "<option value=".$key.">". $value ."</option>";
}
?>
</select>
</div>
<?php echo form_error('emirate_visa','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red"></span>FILE NUMBER</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input value="<?php echo $file_number;?>" type="text" class="form-control" id="file_number" name="file_number" placeholder="FILE NUMBER" required data-toggle="tooltip" title="Please enter the FILE NUMBER">
</div>
<?php echo form_error('file_number','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>EID EXPIRY DATE (DD MM YYYY)</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input value="<?php echo $eid_expiry_date;?>" type="date" class="form-control" id="eid_expiry_date" name="eid_expiry_date" placeholder="EID EXPIRY DATE (DD MM YYYY)" required data-toggle="tooltip" title="Please enter the EID EXPIRY DATE">
</div>
<?php echo form_error('eid_expiry_date','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>INSURED'S PASSPORT EXPIRY DATE (DD MM YYYY)</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input value="<?php echo $pp_expiry_date;?>" type="date" class="form-control" id="member_registration_exp_date" name="member_registration_exp_date" placeholder="INSURED'S PASSPORT EXPIRY DATE (DD MM YYYY)" required data-toggle="tooltip" title="Please enter the INSURED'S PASSPORT EXPIRY DATE ">
</div>
<?php echo form_error('member_registration_exp_date','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6">
<div class="cus_margin">
<label><span class="text-red">* </span>INSURED'S BUSINESS/RESIDENCE ADDRESS</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-globe"></i>
</div>
<input value="<?php echo $business_residence_address;?>" type="text" class="form-control" id="business_residence_address" name="business_residence_address" placeholder="INSURED'S BUSINESS/RESIDENCE ADDRESS" required data-toggle="tooltip" title="Please enter the INSURED'S BUSINESS/RESIDENCE ADDRESS">
</div>
<?php echo form_error('business_residence_address','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-3">
<div class="cus_margin">
<label><span class="text-red">* </span>INSURED'S HEIGHT (in cm)</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $height;?>" type="number" class="form-control" id="height" name="height" placeholder="INSURED'S HEIGHT (in cm)" required data-toggle="tooltip" title="Please enter the INSURED'S HEIGHT ">
</div>
<?php echo form_error('height','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-3">
<div class="cus_margin">
<label><span class="text-red">* </span>INSURED'S WEIGHT (in kg)</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-sort-numeric-asc"></i>
</div>
<input value="<?php echo $weight;?>" type="number" class="form-control" id="weight" name="weight" placeholder="INSURED'S WEIGHT (in kg)" required  data-toggle="tooltip" title="Please enter the INSURED'S WEIGHT ">
</div>
<?php echo form_error('weight','<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>


<div id="female_questions" style="display: none;">
<div  >
<div class="form-group col-md-12" >
<label><span class="text-red">* </span>MANDATORY QUESTIONS AS PER DHA Circular</label>
</div>
<?php
$n=0;
foreach($questions as $value){
$n++;
?>
<div class="form-group col-md-9">
<div class="form-group col-md-6">
<label><?php echo $n.' '.$value->question;?></label>
</div>
<div class="form-group col-md-3">
<?php echo  $value->form;?>
</div>
</div>
<?php
}
?>
</div>

</div>

<div class="row">
<div class="form-group col-md-12 btn-t-padding" >

<button type="submit" class="btn btn-success btn-box pt-10 pull-right pol-holder-btncancel w3-margin">Proceed to next
  <span class="fa fa-forward"></span>
 </button>
<a  class="btn btn-default btn-box pt-10 pull-right pol-holder-btnnext w3-margin" href="<?php echo base_url();?>Policy_holder"> <span class="fa fa-backward"></span> Back </a>

<button type="reset"  class="btn btn-primary btn-box pt-10 pull-right pol-holder-btncancel w3-margin reset_btn "  style="">Reset form</button>
</div>
</div>



</div>
</section>
 <?php echo  form_close();?>

<script type="text/javascript">



	    $('#gender').on('change', function() {
        var gender =  $('#gender :selected').val();
        if(gender=='Female'){
        	$("#female_questions").show("slow");
			$(".answers_class").prop('required',true);
        }else{
        	$("#female_questions").hide();
			$(".answers_class").prop('required',false);
        }
		var currentVal = $(this).val();
    localStorage.setItem('gender', currentVal );
    });

	$(document).ready(function(){
		var gender =  $('#gender :selected').val();
		if(gender=='Female'){
        	$("#female_questions").show("slow");
        }

if (localStorage.gender) {
$('#gender').val( localStorage.gender );
}
if (localStorage.country_of_residence)
{
    $('#country_of_residence').val( localStorage.country_of_residence );
}
if (localStorage.marital_status)
{
    $('#marital_status').val( localStorage.marital_status );
}
if (localStorage.relationship_to_policy_holder)
{
    $('#relationship_to_policy_holder').val( localStorage.relationship_to_policy_holder );
}
if (localStorage.nationality_id)
{
    $('#nationality_id').val( localStorage.nationality_id );
}
if (localStorage.residence_emirate)
{
    $('#residence_emirate').val( localStorage.residence_emirate );
}
if (localStorage.work_emirate)
{
    $('#work_emirate').val( localStorage.work_emirate );
}
if (localStorage.emirate_visa)
{
    $('#emirate_visa').val( localStorage.emirate_visa );
}
if (localStorage.emirate_visa)
{
    $('#emirate_visa').val( localStorage.emirate_visa );
}

if (localStorage.first_name)
{
    $('#first_name').val( localStorage.first_name );
}
if (localStorage.second_name)
{
    $('#second_name').val( localStorage.second_name );
}
if (localStorage.emirates_id)
{
    $('#emirates_id').val( localStorage.emirates_id );
}
if (localStorage.last_name)
{
    $('#last_name').val( localStorage.last_name );
}
if (localStorage.eid_application_no)
{
    $('#eid_application_no').val( localStorage.eid_application_no );
}
if (localStorage.dob)
{
    $('#dob').val( localStorage.dob );
}
if (localStorage.uid_number)
{
    $('#uid_number').val( localStorage.uid_number );
}
if (localStorage.passport_number)
{
    $('#passport_number').val( localStorage.passport_number );
}
if (localStorage.applicant_email)
{
    $('#applicant_email').val( localStorage.applicant_email );
}
if (localStorage.salary)
{
    $('#salary').val( localStorage.salary );
}
if (localStorage.member_mobile_number)
{
    $('#member_mobile_number').val( localStorage.member_mobile_number );
}
if (localStorage.file_number)
{
    $('#file_number').val( localStorage.file_number );
}
if (localStorage.eid_expiry_date)
{
    $('#eid_expiry_date').val( localStorage.eid_expiry_date );
}
if (localStorage.member_registration_exp_date)
{
    $('#member_registration_exp_date').val( localStorage.member_registration_exp_date );
}
if (localStorage.business_residence_address)
{
    $('#business_residence_address').val( localStorage.business_residence_address );
}
if (localStorage.height)
{
    $('#height').val( localStorage.height );
}
if (localStorage.weight)
{
    $('#weight').val( localStorage.weight );
}
});

	$('#country_of_residence').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('country_of_residence', currentVal );
    });
	$('#marital_status').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('marital_status', currentVal );
    });
	$('#relationship_to_policy_holder').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('relationship_to_policy_holder', currentVal );
    });
	$('#nationality_id').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('nationality_id', currentVal );
    });
	$('#residence_emirate').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('residence_emirate', currentVal );
    });
	$('#work_emirate').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('work_emirate', currentVal );
    });
	$('#emirate_visa').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('emirate_visa', currentVal );
    });



	$('#first_name').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('first_name', currentVal );
    });
	$('#second_name').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('second_name', currentVal );
    });
	$('#emirates_id').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('emirates_id', currentVal );
    });
	$('#last_name').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('last_name', currentVal );
    });
	$('#eid_application_no').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('eid_application_no', currentVal );
    });
	$('#dob').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('dob', currentVal );
    });
	$('#uid_number').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('uid_number', currentVal );
    });
	$('#passport_number').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('passport_number', currentVal );
    });
	$('#applicant_email').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('applicant_email', currentVal );
    });
	$('#salary').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('salary', currentVal );
    });
	$('#member_mobile_number').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('member_mobile_number', currentVal );
    });
	$('#file_number').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('file_number', currentVal );
    });
	$('#eid_expiry_date').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('eid_expiry_date', currentVal );
    });
	$('#member_registration_exp_date').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('member_registration_exp_date', currentVal );
    });
	$('#business_residence_address').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('business_residence_address', currentVal );
    });
	$('#height').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('height', currentVal );
    });
	$('#weight').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('weight', currentVal );
    });


</script>

<script type="text/javascript">
	$(document).ready(function(){
		// $('.reset_btn').trigger('click');
	});
</script>