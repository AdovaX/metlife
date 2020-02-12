

        <section id="Why_Us">
            <div class="container inner">
                <div class="row">
                    <ul class="checkout-bar progress_bar">

                    <li class="active">Policy Holder Details</li> 
                    <li class="active">Member Additional Details</li> 
                    <li class="">Documents and Confirmation</li> 
                    <li class="">Payment Options</li>

                	</ul>

                </div>
                <hr class="hrcolor">
            </div>

        </section>   
    <?php echo form_open('Member_details/data'); ?> 
 
	<?php echo $errors; ?>

		<!--Section content-->
		<div id="Pricing" class="light-wrapper">

			<div class="container inner-page">
				<!--Plans inner-->
				<div class="pricing"> 
					<div class="row"> 
			                <section class="content-header policy_holder_title">
			                    <h2><small><b>Insured's(Employee) Details</b></small> ( <?php echo $quote_number; ?> )</h2>
			                </section><!-- /.content-header --> 
							<input type="hidden" name="quote_number" value="<?php echo $quote_number; ?>">
			                <section class="content">
			                    <div class="box-body">
			                    	<div class="col-md-12">
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>FIRST NAME AS IN PASSPORT</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-user"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="first_name" name="first_name" placeholder="" required >
				                            </div>
				                        </div><!-- /.col-md-8 --> 
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>CURRENT COUNTRY OF RESIDENCE</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-flag"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="country_of_residence" name="country_of_residence" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 --> 
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red"> </span>SECOND NAME AS IN PASSPORT</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-user"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="second_name" name="second_name" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 --> 
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span> EMIRATES ID NUMBER <small>(If Emirates ID Number is not yet available,  please provide Emirates ID Application Number)</small></label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="emirates_id" name="emirates_id" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 --> 
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>LAST (FAMILY) NAME AS IN PASSPORT</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-user"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="last_name" name="last_name" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 --> 
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>EMIRATES ID APPLICATION NUMBER</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="eid_application_no" name="eid_application_no" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-3">
					                            <label><span class="text-red">* </span>GENDER<small class="member-detsmall"> (If Female answer mandatory questions)</small></label>
					                            <div class="input-group">
					                                <div class="input-group-addon">
					                                    <i class="fa fa-chevron-circle-down"></i>
					                                </div>
					                               <select name="gender" id="gender" class="form-control show-popup">
												   <?php 
												   foreach($gender as $key=>$value){
                                                    echo "<option value=".$key.">". $value ."</option>";
												   } 
												   ?> 
					                               </select>
					                            </div>
					                     </div><!-- /.col-md-8 -->
					                     <div class="form-group col-md-3">
					                            <label><span class="text-red">* </span>DOB (DD MM YYYY)</label>
					                            <div class="input-group">
					                                <div class="input-group-addon">
					                                    <i class="fa fa-calendar"></i>
					                                </div>
					                                <input value="" type="date" class="form-control" id="dob" name="dob" placeholder="" required="">
					                            </div>
				                        </div>
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>UID NUMBER</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="uid_number" name="uid_number" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-3">
					                            <label><span class="text-red">* </span>MARITAL STATUS</label>
												<div class="input-group">
					                                <div class="input-group-addon">
					                                    <i class="fa fa-chevron-circle-down"></i>
					                                </div>
					                               <select name="marital_status" id="marital_status" class="form-control show-popup">
												   <?php 
												   foreach($marital_status as $key=>$value){
                                                    echo "<option value=".$key.">". $value ."</option>";
												   } 
												   ?> 
					                               </select>
					                            </div> 
					                     </div><!-- /.col-md-8 -->
					                     <div class="form-group col-md-3">
					                            <label><span class="text-red">* </span>RELATIONSHIP <small class="member-detsmall1">(TO POLICY HOLDER/SPONSOR)</small></label>
					                            <div class="input-group">
					                                <div class="input-group-addon">
					                                    <i class="fa fa-chevron-circle-down"></i>
					                                </div>
													<select name="relationship_to_policy_holder" id="relationship_to_policy_holder" class="form-control show-popup">
					                                <?php 
												   foreach($relation as $key=>$value){
                                                    echo "<option value=".$value.">". $value ."</option>";
												   } 
												   ?> 
												   </select>
					                            </div>
				                        </div>
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>PASSPORT NUMBER (WHICH BEARS VALID RESIDENT VISA)</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="passport_number" name="passport_number" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>NATIONALITY</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-flag"></i>
				                                </div>
												<select name="nationality_id" id="nationality_id" class="form-control show-popup">
					                                <?php 
												   foreach($nations->result() as $value){
                                                    echo "<option value=".$value->country_id.">". $value->country_name ."</option>";
												   }  
												   ?> 
												</select>

				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>APPLICANT'S EMAIL ADDRESS</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-inbox"></i>
				                                </div>
				                                <input value="" type="email" class="form-control" id="applicant_email" name="applicant_email" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>Salary<small>(sponsor for dependent application/employee for self / domestic help application)</small></label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="salary" name="salary" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>RESIDENCE EMIRATE</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-flag"></i>
				                                </div>
												<select name="residence_emirate" id="residence_emirate" class="form-control show-popup">
					                                <?php 
												   foreach($emirate_residency as $key=>$value){
													echo "<option value=".$key.">". $value ."</option>";
												   }  
												   ?> 
												</select>
 				                            </div>
				                        </div><!-- /.col-md-8 -->

				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>WORK EMIRATE</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-flag"></i>
				                                </div> 
												<select name="work_emirate" id="work_emirate" class="form-control show-popup">
					                                <?php 
												   foreach($work_emirate as $key=>$value){
													echo "<option value=".$key.">". $value ."</option>";
												   }  
												   ?> 
												</select>
 				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red"></span>MEMBER MOBILE NUMBER</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-mobile"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="member_mobile_number" name="member_mobile_number" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>EMIRATE OF VISA</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-calendar"></i>
				                                </div>
												<select name="emirate_visa" id="emirate_visa" class="form-control show-popup">
					                                <?php 
												   foreach($emirate_visa as $key=>$value){
													echo "<option value=".$key.">". $value ."</option>";
												   }  
												   ?> 
												</select>
 				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red"></span>FILE NUMBER</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-calendar"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="file_number" name="file_number" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                        <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>EID EXPIRY DATE (DD MM YYYY)</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-calendar"></i>
				                                </div>
				                                <input value="" type="date" class="form-control" id="eid_expiry_date" name="eid_expiry_date" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->

				                         <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>INSURED'S PASSPORT EXPIRY DATE (DD MM YYYY)</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-calendar"></i>
				                                </div>
				                                <input value="" type="date" class="form-control" id="member_registration_exp_date" name="member_registration_exp_date" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                         <div class="form-group col-md-6">
				                            <label><span class="text-red">* </span>INSURED'S BUSINESS/RESIDENCE ADDRESS</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                     <i class="fa fa-globe"></i>
				                                </div>
				                                <input value="" type="text" class="form-control" id="business_residence_address" name="business_residence_address" placeholder="" required="">
				                            </div>
				                        </div><!-- /.col-md-8 -->
				                         <div class="form-group col-md-6">
                                           <div class="col-md-6" style="padding-left: 0px!important;">
				                            <label><span class="text-red">* </span>INSURED'S HEIGHT (in cm)</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                   <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="number" class="form-control" id="height" name="height" placeholder="" required="">
				                            </div>
                                            </div>
                                           <div class="col-md-6">
	                                         <label><span class="text-red">* </span>INSURED'S WEIGHT (in kg)</label>
				                            <div class="input-group">
				                                <div class="input-group-addon">
				                                    <i class="fa fa-sort-numeric-asc"></i>
				                                </div>
				                                <input value="" type="number" class="form-control" id="weight" name="weight" placeholder="" required="">
				                            </div>

				                        </div> 
			                        </div>
			                    </div> 

			                </section><!-- /.content -->
			                
			                <section>
			                	<div class="form-group col-md-12 btn-t-padding" > 
									<button type="submit" class="btn btn-primary btn-box pt-10 pull-right pol-holder-btncancel">Next</button>
	                                <a href="<?php echo base_url();?>Add_members" class="btn btn-primary btn-box pt-10 pull-right pol-holder-btnnext"> Add Members </a>
	                                <a  class="btn btn-primary btn-box pt-10 pull-right pol-holder-btnnext" href="<?php echo base_url();?>Policy_holder">Back</a>
				                </div>
			                </section> 
					</div> 
				</div> 
			</div> 
		</div>
		<?php echo  form_close();?>  

<script type="text/javascript">
	    $('#gender').on('change', function() {
        var gender =  $('#gender :selected').val();
        if(gender=='F'){
        	$("#female_questions").show("slow");
        }else{
        	$("#female_questions").hide();
        }
    });

	$(document).ready(function(){
		var gender =  $('#gender :selected').val();
		if(gender=='F'){
        	$("#female_questions").show("slow");
        }
	});
</script>