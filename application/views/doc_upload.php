  <section id="Why_Us">
            <div class="container inner">
                <div class="row">
                    <ul class="checkout-bar progress_bar">

                    <li class="active">Policy Holder</li>

                    <li class="active">Member Additional Details</li>

                    <li class="active">Documents and Confirmation</li>

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

                         <div class="detail-header">
			                <section class="content-header policy_holder_title">
			                    <h2><small></small></h1>
			                </section>
                             <div class="docsupload-div1">
			                 <div class="form-input col-md-3 docsupload-div2">
                                 <label class="docsupload-label">Summary Of Quote</label>

                             </div>
                             <div class="form-input col-md-3 docsupload-div3">
                                 <label class="docsupload-label" >Quote Number: <?php echo $quote_number;  ?></label>
                             </div>
                             <div class="form-input col-md-4  ">
                                 <label class="docsupload-label w3-right" ><?php echo "Quote Valid Till " ; ?></label>
                             </div>
                             <div class="form-input col-md-2 docsupload-div4 ">
                                 <label class="docsupload-label w3-right" ><?php echo  $valid_date; ?></label>
                             </div>
                            </div>

                             <div class="tablediv" >
                             <table class="table table-borderless">
							  <thead>
							    <tr bgcolor="#367fa9">
							      <th scope="col" class="docsupload-th">#</th>
							      <th scope="col" class="docsupload-th">Member To Insure</th>
							      <th scope="col" class="docsupload-th">Dependency</th>
							      <th scope="col" class="docsupload-th">Product</th>
							       <th scope="col" class="docsupload-th">Premium</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php foreach($view_all_members as $value){ ?>
							    <tr>
							      <th scope="row"><?php echo $value->member_id;?></th>
							      <td><?php echo $value->first_name;?></td>
							      <td>
							      	<?php
							      	$relationz="relation";
							      	foreach (config_item($relationz) as $key => $data) {
							      	 	if ($key==$value->relationship_to_policy_holder) {
							      	 		echo $data;
							      	 	}
							      	 }

							      	?>
							      </td>
							      <td>MEDLIFE</td>
							      <td>AED 1312.00</td>
							    </tr>
							  <?php } ?>
							    <tr  bgcolor="#367fa9">
							      <th scope="row" class="docsupload-th">Total</th>
							      <td colspan="3" class="docsupload-th"><?php echo count($view_all_members);?></td>
							      <td class="docsupload-th">AED 3225.00</td>
							    </tr>
							  </tbody>
							</table>
							<span class="docsupload-span">DISCLAIMER :</span>

						</div>
						<div class="row docsupload-div6">

								 <input type="button" id="agreetobuy" class="btn btn-primary btn-box docsupload-agree" value="Agree To Buy">
                                <button type="button"   class="btn btn-primary btn-box pt-10 pull-right pol-holder-btnnext add_mem_btn">Add Members</button>

						</div>

                     	<div class="row" id="upload1" style="display: none;">
						<div class="col-md-8">
						<?php foreach($view_all_members as $users){ ?>


							<table class="table table-bordered">
							  <thead>
							    <tr>
							      <th scope="col"  bgcolor="#367fa9" class="docsupload-th">Member Name: <?php echo $users->first_name ?></th>

							    </tr>
							  </thead>
							  <tbody>
							  <?php
							  foreach($Master_documet_titles as $value){
							  ?>
							    <tr>
							      <td class="docsupload-td"><?php echo $value->document_name;?>
								  <input type="hidden" name="qm_id" id="<?php echo $value->document_id.'file_id'.$users->member_id."qm_id";?>" value="<?php echo $value->document_id."-".$users->member_id;?>">

								  </td>
							      <td  bgcolor="#367fa9" class="docsupload-th">
								  <input type="file" name="image_file" value="" class="image_file" id="<?php echo $value->document_id.'file_id'.$users->member_id;?>">
								  </td>
							      <td id="<?php echo $value->document_id.'file_id'.$users->member_id."success_id";?>">  </td>
							    </tr>
							  <?php
							  }
							  ?>

							  </tbody>
							</table>
							<?php
							}
							 ?>
							(Formats jpg,png,jpeg  File size max : 5mb)

						</div>

						<div class="col-md-4">

						</div>
                      </div>
                      <div class="row" id="upload2" style="display: none;">


					  <div class="col-md-8"  > </div>
						<div class="col-md-4"  >
                           <!-- <input type="submit" id="submit" class="btn btn-primary btn-box" value="Back"> -->
							<!--<input type="submit" id="submit" class="btn btn-primary" value="Continue to Payment"> -->
							<button type="button" class="btn btn-primary Continue_btn">Continue to Payment</button>

						</div>



			            </div><!-- /.detail-header -->


			           </div>

					</div>
					<!-- /.row -->
				</div>
				<!-- /.pricing -->
				<!--End plans inner-->
			</div>
			<!--End container-->
		</div>
		<!--End section content -->

		<!-- End Pricing Tables -->
<br><Br><br><Br>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog ">

<div class="modal-content">
<div class="modal-header" style="padding:5px!important;">
<label class=""  style="color:white;text-align:center;">Payment Method</label>
</div>
<div class="modal-body">
<div class="col-md-12">
<div class="col-md-6">

<a href="<?php echo base_url();?>Pay_by_online" class="btn btn-primary" style="float: right;!important; " > Pay By Card </a>
</div>
<div class="col-md-6">

<a href="<?php echo base_url();?>Pay_by_cash" class="btn btn-primary" style="float: left!important;"> Pay By Cheque </a>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>

</div>
</div>
<script>
	$('.image_file').change(function(){

		var img_id=$(this).attr('id');
		var qm_id=img_id;
		var success_id="#"+img_id+"success_id";
		img_id="#"+img_id;
		qm_id="#"+qm_id+"qm_id";
		qm_id=$(qm_id).val();


var file_data = $(img_id).prop("files")[0];
var form_data = new FormData();
form_data.append("image_file", file_data);
form_data.append("qm_id", qm_id);

var image_file = $(this).val();

					$.ajax({
                     url:"<?php echo base_url(); ?>Upload/do_upload",

                     method:"POST",
                     data:form_data,
                     contentType: false,
                     cache: false,
                     processData:false,
					 beforeSend: function() {
					 	$(success_id).html("Uploading ...");
					 },
                     success:function(data)
                     {
                          $(success_id).html(data);
                     }
                });
	});
</script>


<script type="text/javascript">
$(window).load(function(){

	$("#agreetobuy").click(function(){

  			$("#upload1").show();
        	$("#upload2").show();

	});
});

$('.add_mem_btn').click(function(){
     window.localStorage.clear();
     window.location.href="<?php echo base_url();?>Member_details";
});

$('.Continue_btn').click(function(){
	 var all_flag=1;
	 /*
 $('.image_file').each(function () {

     var img_id=$(this).attr('id');
     var t_img_id=img_id;

     img_id="#"+img_id;
     img_id=$(img_id).prop("files")[0];

     if ($(img_id).length === 0) {
    	all_flag=0;
    	t_img_id="#"+t_img_id+"success_id";
    	var msg="<p style='color:red;'> *File required </p>";
        $(t_img_id).html(msg);
    }
    });
 */

 if(all_flag){
     $('#myModal').modal('show');
 }

});

</script>


