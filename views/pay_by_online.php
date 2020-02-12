
<div class="row">
<div class="col-sm-2"> </div>
<div class="col-sm-8">

<div id="Contact" class="light-wrapper ">
<div class="container inner " >
<div class="row">
<div class="col-md-8">
<div class="row">
<div class="Contact-Form">
<div class="row">
<div class="col-sm-8 cus_size">
<label class="paycash-label1">Pay By Online - Quote Number <?php echo $quote_number ?></label>
<div class="payCash ">
<label class="w3-padding">Payment Details</label>
<hr class="paycash-hr">
<div class="w3-padding cust_width">
<div class="row">
<div class="col-sm-4">
<label class="payment-gatelabel cust_label w3-center">Member Name</label>
</div>
<div class="col-sm-8">
<input type="text" class="paybycashlabel" name=""  readonly=""  id="mem_name" value="<?php echo $member_name; ?>">
</div>
</div>

<div class="row">
<div class="col-sm-4">
<label class="payment-gatelabel cust_label w3-center">Product Name</label>
</div>
<div class="col-sm-8">
<input type="text" readonly="" class="paybycashlabel" id="product_name" value="EBP Individual" name="">
</div>
</div>

<div class="row">
<div class="col-sm-4">
<label class="payment-gatelabel cust_label w3-center">Total Premium Amount</label>
</div>
<div class="col-sm-8">
<input type="text" readonly="" class="paybycashlabel" id="premium" value="AED 3225.00" name=""></div>
</div>

<div class="row">
<div class="col-sm-4">
<label class="payment-gatelabel cust_label w3-center">MetLife Policy Number</label>
</div>
<div class="col-sm-8">
<input type="text" readonly="" class="paybycashlabel" id="policy_num" value="<?php echo $quote_number ?>" name="">
</div>

</div>
</div>
</div>


</div>
<div class="col-sm-4 paycash-div2 cus_size">

<img src="images/conf.png" alt="MetLife-Product" class="paycash-img" style="height: 300px;">


</div>
</div>
<div class="row">
<div class="col-sm-12 paycash-div1">
<div class=" w3-padding">
Important Note:
</div>
<div class="payCash" >
<p class="paycash-p1" style="text-align: justify;"> Member is requestd to go to one of the MetLife branch and make payment by cash. Post the receipt of payment confirmation and valid documents, the member policy will be activated.  The turn around time for Policy activation is 15 working days from the payment receipt date provided all documents submitted are complete and valid. Members will be notified via their registered Email and Mobile number, you can get a copy of the original documnts from any of the MetLife branch which is nearest to you. </p>

</div>
</div>

</div>

</div>
</div>
</div>





<div class="row">
<div class="col-md-12">
<p class="paycash-p3">Thank you  for choosing Metlife as yor insured partner. We will be happpy to serve you always. Click <a href="#">HERE</a> to branch list</p>
<div class="paybycashbuttons">
<a href="doc_upload" class="btn btn-primary btn-box" > Back </a>
<!--                                        <input type="submit" id="submit" class="btn btn-primary btn-box" value="Back">
-->                                      <button id="submit" class="paycashButtn">
<a href="<?php echo base_url();?>Print_recipt" style="color: white">Print Receipt</a>
</button>

<!-- <input type="submit" id="submit" class="paycashButtn" value="E-Mail Receipt"> -->
<button type="button" class="paycashButtn" data-toggle="modal" data-target="#modalSubscriptionForm">E-Mail Receipt</button>

</div>

</div>

</div>

</div>
</div>
</div>

</div>
<div class="col-sm-2"> </div>
</div>

<!-- Modal -->
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
<input type="email" id="email" class="form-control validate">
<label data-error="wrong" data-success="right" for="form2">Your email</label>
</div>

</div>
<div class="modal-footer d-flex justify-content-center">
<button class="btn btn-indigo mail_btn">Send </button>
</div>
</div>
</div>
</div>

<script type="text/javascript">
if (localStorage.first_name)
{
$('#mem_name').val( localStorage.first_name );
}



$('.mail_btn').click(function(){


var baseurl = "<?php print base_url(); ?>";
var name=document.getElementById('mem_name').value;

var product_name=document.getElementById('product_name').value;
var premium=document.getElementById('premium').value;
var policy_num=document.getElementById('policy_num').value;
var email=document.getElementById('email').value;

$.ajax( {
type: 'post',
url: baseurl + 'Pay_by_cash/sendemail',
data: { name: name, email: email, product_name: product_name,premium:premium,policy_num:policy_num },
success: function ( result )
{
alert(result);
}
} );
});


</script>