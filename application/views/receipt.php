

		<!-- Start Pages Title  -->

       	<div id="Contact" class="light-wrapper">
			<div class="container inner">
				<div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="Contact-Form">
                            	<div class="row">
                            		 <label style="margin-left: 500px!important;">ePayment Receipt</label>
                              <div class="receipt">

                              <h1 align="center" style="padding-top: 30px;padding-bottom: 30px;padding-left: 160px;"> <img class="img-responsive" src="images/logo2.png" alt="MetLife-Logo"></h1>

                              <p style="font-size:15px;padding-left: 20px;padding-right: 20px;"> The below transaction has been successfully processed and a confirmation has been sent to your registered email ID</p>
                               <p style="padding-left: 20px;padding-right: 20px;padding-top: 20px;font-weight: bold;">Receipt Number : 123456789987 &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;           Date : 01/02/2019</p>
                               <p style="padding-left: 20px;padding-right: 20px;padding-top: 20px;font-weight: bold;">MetLife Policy Number : 4561237895 &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; Card Holders Name : Fawas Sheikh  </p>
                               <p style="padding-left: 20px;padding-right: 20px;padding-top: 20px;font-weight: bold;">Payment Currency : USD &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;           Amount : 5367.77</p>
<!--                                <p style="padding-left: 20px;padding-right: 20px;padding-top: 20px;font-weight: bold;">Card Holders Name : Fawas Sheikh &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;  </p>
 -->                              <p style="padding-top: 20px;font-size:15px;padding-left: 20px;padding-right: 20px;"> This is an electronic receipt and is valid without signature.</p>
                              <p style="font-size:15px;padding-top: 10px;padding-left: 20px;padding-right: 20px;"> Payment is subject to MetLife's acceptance and policy expiry terms and conditions.</p>
                            <p style="font-size:15px;padding-left: 20px;padding-right: 20px;padding-top: 10px;">If you have any questions, Kindly contact our Customer Service at 800 MetLife(8006385433)from within the UAE or at +971 4 415 4555 if you are outside of the UAE. </p>
                              <p align="center" style="padding-top:10px;padding-bottom: 20px;"><b>www.metlife.ae</b></h1>
                          </div>

                          <div class="col-md-12">
                                      <div class="paybycashbuttons">
                                       <a href="payment_gateway.html" class="btn btn-primary btn-box" > Back </a>
                                        <input type="submit" id="submit" class="paycashButtn" value="Print Receipt">
<!--                                        <input type="submit" id="submit" class="paycashButtn" value="E-Mail Receipt">
 -->
                                       <button type="button" class="paycashButtn" data-toggle="modal" data-target="#modalSubscriptionForm">E-Mail Receipt</button>

                                      </div>

                                 </div>
                           </div>

                        </div>
                    </div>

				</div>
			</div>
		</div>
		<!-- End Pages Title  -->


<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center" style="padding:15px!important;">
        <label class="modal-title w-100 font-weight-bold">E-Mail Receipt</label>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

        <div class="md-form mb-4">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Your email</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo">Send </button>
      </div>
    </div>
  </div>
</div>


