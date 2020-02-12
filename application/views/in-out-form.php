
		<section  class="section-top">

    			<div class="container inout-patient" >
    			    <div class="row" >
    			    	 <div class="col-md-9" >
    			   <center><p class="inout-patient-para">MetLife - IEBP (Individual Essential Benefit Plan)</p> </center>
    			    </div>
    			   <div class="col-md-2" >
                     <a href="<?php echo base_url();?>Policy_holder">
                        <input type="submit" id="submit" class="btn btn-large main-bg inout-patient-buybutton" value="Next">
                    </a>
    			    </div>
    			</div>
                </div><!--/.big-banner -->
			</div>
		</section>

        <section id="Why_Us">
            <div class="container inner-ip-op">
                <div class="row">
                    <div class="col-md-8">
                        <div class="title-section text-left">
                            <h5 class="headerh5"><b>Aggregate Limit : 150000 AED Per Member Per Master Contract</b></h5>

                        </div>

                    </div>


                </div>

               <!--  <hr class="hrcolor"> -->

                <div class="row">
                    <div class="col-md-8" >

                      <!--   <ul class="nav nav-tabs" role="tablist">
						  <li role="presentation" class="active"><a href="#inpatient" aria-controls="inpatient" role="tab" data-toggle="tab">In-Patient</a></li>
						  <li role="presentation"><a href="#outpatient" aria-controls="outpatient" role="tab" data-toggle="tab">Out-Patient</a></li>
						</ul> -->
						<div class="tab">
						  <button class="tablinks active" onclick="openCity(event, 'inpatient')">Inpatient</button>
						  <button class="tablinks" onclick="openCity(event, 'outpatient')">Outpatient</button>
                          <button class="tablinks" onclick="openCity(event, 'maternity')">Maternity</button>
                          <button class="tablinks" onclick="openCity(event, 'salient')">Salient</button>

		    			</div>

                    </div>

                    <div class="col-md-3">

                           <p><a href="https://services.tatsh.com:8066/GetFile.ashx?File=Network_297_66018.pdf">Download Provider Network List</a></p>
                           <p><a href="">Download Vaccination Network List</a></p>
                           <p><a href="">Download Table of Benefits</a></p>
                     </div>

                </div>
               <!--  <hr class="hrcolor"> -->


            </div>

        </section>


		<div id="Pricing" class="light-wrapper">

			<div class="container inner-page">
				<!--Plans inner-->
				<div class="pricing">


					<div class="row">
                        <div id="myTabPanes" class="tab-content">
                            <div class="tabcontent inout-tabcontent"id="inpatient" style="display: block;padding-top: 0px">


                                <div class="row inout-upperdiv">
                                    <div class="col-md-9">
                                        <p class="inout-upperdivp">Co Participation : Co-Pay 20% Max upto AED 500</p>
                                        <p class="inout-upperdivp">Network Type : EBP Network</p>
                                        <p class="inout-upperdivp">Territory of Coverage  : UAE Only</p>
                                        <p class="inout-upperdivp">Class  : Semi-Private (2 Beds)</p>

                                    </div>
                                </div>
                                <div class="row inout-middlediv">
                                    <div class="col-md-3 inout-middlediv1">
                                        <p class="inout-middledivp">Benefit's HIghlight</p>
                                    </div>
                                    <div class="col-md-8 inout-middlediv2">
                                        <p class="inout-middlediv2p"> Please refer to the product notes (Table of Benefits) for detailed information</p>
                                    </div>
                                </div>


                                <form class="inpatient inout-form1" autocomplete="on" id="inpatient"  name="contact-form" method="post" action="<?php echo base_url();?>Policy_holder">
                                    <fieldset>
                                        <div id="formstatus"></div>
                                        <div class="Contact-us" >

                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Room and Board:</label>
                                        <label class="patientviewlabel labelForm">Covered</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Chronic Conditions:</label>
                                        <label class="patientviewlabel labelForm">Waiting Period: 6 months counting from Beneficiary starting date</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Pre Existing Cases:</label>
                                        <label class="patientviewlabel labelForm">Waiting Period: 6 months counting from Beneficiary starting date</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Maternity waiting period:</label>
                                        <label class="patientviewlabel labelForm">Waiting Period: 6 months counting from Beneficiary starting date</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Emergency room services:</label>
                                        <label class="patientviewlabel labelForm">Covered</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Repatriation of mortal remains:</label>
                                        <label class="patientviewlabel labelForm">Covered</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Organ Donation and Transplantation:</label>
                                        <label class="patientviewlabel labelForm">Excluded</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Transportation:</label>
                                        <label class="patientviewlabel labelForm">Covered</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Internal Prosthesis:</label>
                                        <label class="patientviewlabel labelForm">Covered</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                        <label class="labelForm">Home Health Services Following Inpatient Care:</label>
                                        <label class="patientviewlabel labelForm">Excluded</label>

                                        </div>
                                        <div class="form-submit col-md-12">
                                        <a href="<?php echo base_url();?>Policy_holder"> <input type="submit" id="buyinpatient" class="btn btn-large main-bg inout-buybtn2" value="Next" style=""></a>
                                        </div>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tabcontent inout-tabcontent"id="outpatient">

                                <div class="row inout-upperdiv">
                                <div class="col-md-9">
                                    <p class="inout-upperdivp">Network Type : EBP Network</p>
                                    <p class="inout-upperdivp">Territory of Coverage : UAE Only</p>
                                </div>
                                </div>
                                <div class="row inout-middlediv">
                                    <div class="col-md-3 inout-middlediv1">
                                        <p class="inout-middledivp">Benefit's HIghlight   </p>
                                    </div>
                                    <div class="col-md-8 inout-middlediv2">
                                        <p  class="inout-middlediv2p">- Please refer to the product notes(Table of Benefits) for detailed information</p>
                                    </div>
                                </div>
                                <form class="outpatient inout-form1" autocomplete="on" id="outpatient"  name="contact-form" method="post" action="<?php echo base_url();?>Policy_holder">
                                    <fieldset>
                                        <div id="formstatus"></div>
                                        <div class="Contact-us">
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Radiology:</label>
                                        <label class="patientviewlabel labelForm">Co-Part: 20%</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Pathology and Laboratary:</label>
                                        <label class="patientviewlabel labelForm">Co-Part: 20%</label>

                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Physiotherapy:</label>
                                            <label class="patientviewlabel labelForm">Co-Part: 20%, Pre certification CAP:1 AED per Claim</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Chronic Conditions:</label>
                                            <label class="patientviewlabel labelForm">Waiting Period: 6 months counting from Beneficiary starting date</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Endoscopy:</label>
                                            <label class="patientviewlabel labelForm">Co-Part: 20%</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Maternity waiting period:</label>
                                            <label class="patientviewlabel labelForm">Waiting Period: 6 months counting from Beneficiary starting date</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Consultation:</label>
                                            <label class="patientviewlabel labelForm">Co-Part: 20%</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Alternative Medicine or Therapy:</label>
                                            <label class="patientviewlabel labelForm">Excluded</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Pharmacy:</label>
                                            <label class="patientviewlabel labelForm">Covered upto AED 1,500 including co-insurance</label>
                                        </div>
                                        <div class="form-input col-md-12 patientview">
                                            <label class="labelForm">Vaccination:</label>
                                            <label class="patientviewlabel labelForm">On reimbursement only</label>
                                        </div>

                                        <div class="form-submit col-md-12">
                                        <a href="<?php echo base_url();?>Policy_holder"> <input type="submit" id="buyoutpatient" class="btn btn-large main-bg inout-patient-buybutton1" value="Buy"></a>
                                        </div>

                                        </div>
                                    </fieldset>
                                </form>
                            </div>

                            <div class="tabcontent inout-tabcontent"id="maternity" style="height: 400px;">


                            </div>

                            <div class="tabcontent inout-tabcontent"id="salient" style="height: 400px;">


                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.pricing -->
                <!--End plans inner-->
            </div>
            <!--End container-->
        </div>
