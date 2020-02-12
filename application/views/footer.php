
	<footer id="footer" class="site-footer">
			<div id="template-footer" role="contentinfo">
				<div class="container">
					<div class="row">
						<div class="col-md-4 to-animate">
							<div class="copyright">
								<label class="footer-link">@Managed By Mednet Healthcare Solutions</label>
							</div>
						</div>
						<div class="col-md-4 to-animate">
						</div>
						<div class="col-md-4 to-animate">
							<div class="copyright">
							<label class="footer-link">DISCLAIMER & TERMS AND CONDITIONS.</label>
							</div>
						</div>

					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

function openCity(evt, id) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(id).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>

<!-- Placed at the end of the document so the pages load faster -->

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/custom.js"></script>

</body>
</html>