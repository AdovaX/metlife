<br>
<section id="Why_Us">
    <div class="container inner">
        <div class="row">
            <ul class="checkout-bar progress_bar">
                <li class="active pulse"  ><p class="tb_txt"> Policy Holder Details </p></li>

                <li class="">Member Addition Details</li>

                <li class="">Documents and Confirmation</li>

                <li class="">Payment Options</li>
            </ul>
        </div>
        <hr class="hrcolor">
    </div>
</section>





<div id="Pricing" class="light-wrapper">

    <div class="container inner-page">
        <!--Plans inner-->
        <div class="pricing">

            <div class="row">

                <section class="content-header policy_holder_title  w3-center ">
                    <div class="row">
                        <div class="col-sm-4"> </div>
                        <div class="col-sm-4">
                             <h2 class="heading_01"> <b>Policy Holder Details</b> </h2>
                             <hr class="the_hr">
                        </div>
                        <div class="col-sm-4"> </div>
                     </div>
                    <br>
                </section>

                <form id="policy_holder_form" action="<?php echo base_url();?>policy_holder/data" method="post">
                    <?php echo form_open('form'); ?>

<section>
<div class="row">


<div class="col-sm-6 ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Company Name as per Visa
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-user"></i>
</div>
<input value="<?php echo "Medlife" ?>" type="text" readonly class="form-control" id="policy_holder_name" name="policy_holder_name" placeholder="" required>
</div>
<?php echo form_error('policy_holder_name', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>


<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder Email
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-envelope"></i>
</div>
<input value="<?php echo $policy_holder_email; ?>" type="email"
class="form-control" id="policy_holder_email" name="policy_holder_email"
placeholder="Policy Holder Email" required data-toggle="tooltip"   title="Please enter the Policy Holder Email!">
</div>
<?php echo form_error('policy_holder_email', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder Mobile
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-phone"></i>
</div>
<input value="<?php echo $policy_holder_mobile; ?>" type="text"
class="form-control" id="policy_holder_mobile" name="policy_holder_mobile"
placeholder="971-50-XXXXXXX" required data-toggle="tooltip"   title="Please enter the Policy Holder Mobile">
</div>
<?php echo form_error('policy_holder_mobile', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>



<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder's Passport Number
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-vcard-o"></i>
</div>
<input value="<?php echo $policy_holder_passport; ?>" type="text"
class="form-control" id="policy_holder_passport"
name="policy_holder_passport" placeholder="E100001236541991" required  data-toggle="tooltip" title="Please enter the Policy Holder's Passport Number">
</div>
<?php echo form_error('policy_holder_passport', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>
</div>

<div class="row">


<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder's Expiry Date on the
Passport
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-clock-o"></i>
</div>
<input value="<?php echo $policy_holder_date; ?>" type="date"
class="form-control" id="policy_holder_date" name="policy_holder_date"
placeholder="" required data-toggle="tooltip" title="Please enter the Policy Holder's Expiry Date on the Passport">
</div>
<?php echo form_error('policy_holder_date', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder's Business and/or Residence
Address
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-map-marker"></i>
</div>
<input value="<?php echo $policy_holder_bussiness_address; ?>" type="text"
class="form-control" id="policy_holder_bussiness_address"
name="policy_holder_bussiness_address"
placeholder="21 Park Street, PO Box 19878, Dubai" required  data-toggle="tooltip" title="Please enter the Policy Holder's Business and/or Residence Address">
</div>
<?php echo form_error('policy_holder_bussiness_address', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder Emirates ID/Application
Number
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-keyboard-o"></i>
</div>
<input value="<?php echo $policy_holder_emirates_id; ?>" type="text"
class="form-control" id="policy_holder_emirates_id"
name="policy_holder_emirates_id" placeholder="784-1986-XXXXXXX-X" required data-toggle="tooltip"  title="Please enter the Policy Holder Emirates ID/Application Number">
</div>
<?php echo form_error('policy_holder_emirates_id', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>


<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder UID Number (As per Visa
Page)
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-bell"></i>
</div>
<input value="<?php echo $policy_holder_uid_no; ?>" type="text"
class="form-control" id="policy_holder_uid_no" name="policy_holder_uid_no"
placeholder="Policy Holder UID Number (As per Visa Page)" required data-toggle="tooltip" title="Please enter the Policy Holder UID Number (As per Visa Page)">
</div>
<?php echo form_error('policy_holder_uid_no', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>

</div>

<div class="row">


<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Visa Expiry Date
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input value="<?php echo $visa_expiry_date; ?>" type="date" class="form-control"
id="visa_expiry_date" name="visa_expiry_date" placeholder="" required  data-toggle="tooltip" title="Please enter the Visa Expiry Date">
</div>
<?php echo form_error('visa_expiry_date', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>


<div class="col-sm-6  ">
    <div class="cus_margin">
<label><span class="text-red">* </span>
Policy Holder Address
</label>
<div class="input-group">
<div class="input-group-addon">
<i class="fa fa-globe"></i>
</div>
<input value="<?php echo $policy_holder_address; ?>" type="text"
class="form-control" id="policy_holder_address" name="policy_holder_address"
placeholder="" required data-toggle="tooltip"   title="Please enter the Policy Holder Address">
</div>
<?php echo form_error('policy_holder_address', '<div class="error_msg"><i style="color:red;">', '</i></div>'); ?>
</div>
</div>


</div>
<br>

<div class="row">
<div class="col-sm-4"> </div>
<div class="col-sm-4 w3-center">

  <button type="reset" class="btn btn-primary pol-holder-btncancel">Reset form
    <span class="fa fa-refresh w3-spin"></span> </button>
  <button type="submit" class="btn btn-success pol-holder-btnnext">Click to proceed
    <span class="fa fa-forward"></span> </button>

</div>
<div class="col-sm-4"> </div>
</div>
</form>
</section>
</div>
</div>
</div>
<br>
<script>

    $('#policy_holder_email').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_email', currentVal );
    });

	$('#policy_holder_mobile').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_mobile', currentVal );
    });
	$('#policy_holder_passport').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_passport', currentVal );
    });
	$('#policy_holder_date').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_date', currentVal );
    });
	$('#policy_holder_bussiness_address').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_bussiness_address', currentVal );
    });
	$('#policy_holder_emirates_id').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_emirates_id', currentVal );
    });
	$('#visa_expiry_date').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('visa_expiry_date', currentVal );
    });
	$('#policy_holder_uid_no').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_uid_no', currentVal );
    });
	$('#policy_holder_address').on('change', function(){
    var currentVal = $(this).val();
    localStorage.setItem('policy_holder_address', currentVal );
    });

    $(document).ready(function(){
        $('#policy_holder_email').val( localStorage.policy_holder_email );
        $('#policy_holder_mobile').val( localStorage.policy_holder_mobile );
        $('#policy_holder_passport').val( localStorage.policy_holder_passport );
        $('#policy_holder_date').val( localStorage.policy_holder_date );
        $('#policy_holder_bussiness_address').val( localStorage.policy_holder_bussiness_address );
        $('#policy_holder_emirates_id').val( localStorage.policy_holder_emirates_id );
        $('#visa_expiry_date').val( localStorage.visa_expiry_date );
        $('#policy_holder_uid_no').val( localStorage.policy_holder_uid_no );
        $('#policy_holder_address').val( localStorage.policy_holder_address );

        //document.getElementById("policy_holder_form").reset();



    });
</script>