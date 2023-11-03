<div class="modal fade" id="ImportContactModal" tabindex="-1" role="dialog">
  	<div class="modal-dialog modal-lg">
	    <div class="modal-content">
      		<div class="modal-header">
		        <h5 class="modal-title"><i class="<?php _ec( $config['icon'] )?>" style="color: <?php _ec( $config['color'] )?>;"></i> <?php _ec("Import contact From Any Webs")?></h5>
		         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>
	      	<div class="modal-body">
	      	    
	      	    
	        	<form class="actionForm"  action="<?php _eC( get_module_url("add_contact/".get_data($result, "ids")) )?>" method="POST"  data-redirect="">

			

			            <div class="tab-pane fade show active p-50" id="import_form">
			                
			                <label for="contery" class="form-label">
	                            <?php _e('Mode')?>
	                        </label>
			                
			                   <label for="contery" class="form-label">
	                            <?php _e('Select Country From list')?>
	                        </label>
	                       
	                         <select name="contery" data-control="select2" data-hide-search="false" style="width:100%"class="form-select form-control form-control-solid bg-body fw-bold" onchange="submitedthings();" id="vksdjsdj" requird>
                    <option value="" data-icon="fab fa-whatsapp" data-icon-color="#25d366" selected><span><?php _e("Select Country")?></span></option>
<option value="+213">Algeria</option>
<option value="+54">Argentina</option>
<option value="+374">Armenia</option>
<option value="+61">Australia</option>
<option value="+43">Austria</option>
<option value="+994">Azerbaijan</option>
<option value="+375">Belarus</option>
<option value="+32">Belgium</option>
<option value="+591">Bolivia</option>
<option value="+387">Bosnia</option>
<option value="+55">Brazil</option>
<option value="+359">Bulgaria</option>
<option value="+226">Burkina Faso</option>
<option value="+855">Cambodia</option>
<option value="+237">Cameroon</option>
<option value="+1">Canada</option>
<option value="+235">Chad</option>
<option value="+86">China</option>
<option value="+57">Colombia</option>
<option value="+385">Croatia</option>
<option value="+53">Cuba</option>
<option value="+357">Cyprus</option>
<option value="+420">Czech Republic</option>
<option value="+45">Denmark</option>
<option value="+593">Ecuador</option>
<option value="+20">Egypt</option>
<option value="+503">El Salvador</option>
<option value="+372">Estonia</option>
<option value="+358">Finland</option>
<option value="+33">France</option>
<option value="+220">Gambia</option>
<option value="+995">Georgia</option>
<option value="+49">Germany</option>
<option value="+233">Ghana</option>
<option value="+30">Greece</option>
<option value="+224">Guinea</option>
<option value="+245">Guinea Bissau</option>
<option value="+509">Haiti</option>
<option value="+504">Honduras</option>
<option value="+852">Hong Kong</option>
<option value="+36">Hungary</option>
<option value="+91">India</option>
<option value="+62">Indonesia</option>
<option value="+98">Iran</option>
<option value="+964">Iraq</option>
<option value="+353">Ireland</option>
<option value="+972">Israel</option>
<option value="+39">Italy</option>
<option value="+225">Ivory Coast</option>
<option value="+962">Jordan</option>
<option value="+77">Kazakhstan</option>
<option value="+254">Kenya</option>
<option value="+996">Kyrgyzstan</option>
<option value="+856">Laos</option>
<option value="+371">Latvia</option>
<option value="+231">Liberia</option>
<option value="+370">Lithuania</option>
<option value="+352">Luxembourg</option>
<option value="+223">Mali</option>
<option value="+265">Malawi</option>
<option value="+60">Malaysia</option>
<option value="+222">Mauritania</option>
<option value="+52">Mexico</option>
<option value="+373">Moldova</option>
<option value="+377">Monaco</option>
<option value="+976">Mongolia</option>
<option value="+212">Morocco</option>
<option value="+95">Myanmar</option>
<option value="+31">Netherlands</option>
<option value="+505">Nicaragua</option>
<option value="+234">Nigeria</option>
<option value="+389">North Macedonia</option>
<option value="+47">Norway</option>
<option value="+92">Pakistan</option>
<option value="+595">Paraguay</option>
<option value="+51">Peru</option>
<option value="+63">Philippines</option>
<option value="+48">Poland</option>
<option value="+351">Portugal</option>
<option value="+40">Romania</option>
<option value="+7">Russia</option>
<option value="+966">Saudi Arabia</option>
<option value="+221">Senegal</option>
<option value="+381">Serbia</option>
<option value="+232">Sierra Leone</option>
<option value="+65">Singapore</option>
<option value="+421">Slovakia</option>
<option value="+386">Slovenia</option>
<option value="+82">South Korea</option>
<option value="+34">Spain</option>
<option value="+94">Sri Lanka</option>
<option value="+249">Sudan</option>
<option value="+46">Sweden</option>
<option value="+41">Switzerland</option>
<option value="+886">Taiwan</option>
<option value="+992">Tajikistan</option>
<option value="+255">Tanzania</option>
<option value="+66">Thailand</option>
<option value="+228">Togo</option>
<option value="+216">Tunisia</option>
<option value="+90">Turkey</option>
<option value="+256">Uganda</option>
<option value="+380">Ukraine</option>
<option value="+44">United Kingdom</option>
<option value="+1">USA</option>
<option value="+998">Uzbekistan</option>
<option value="+58">Venezuela</option>
<option value="+84">Vietnam</option>
<option value="+967">Yemen</option>
<option value="+260">Zambia</option>
                </select>
                 <label for="phone_numbers" class="form-label">
	                            <?php _e('any key words ')?>
	                        </label>
	                        <input class="form-control form-control-solid" onchange="submitedthings();" name="keywords" id="phone_numbers" rows="20" placeholder="Any keywords" requird/>
	                                         <label for="phone_numbers"  class="form-label">
	                            <?php _e('Any Website Link')?>
	                        </label>
	                        <input class="form-control form-control-solid" onchange="submitedthings();" name="domain_nemsd" id="domain_nemsd" rows="20" placeholder="Any Website link" requird/>
	                  <div class="d-none" id="clsdjsdsjdskd">
	                  <label for="phone_numbers" class="form-label">
	                            <?php _e('Paste here To Copy Content')?>
	                        </label>
	                        <textarea class="form-control form-control-solid "  name="pastecontent" id="pastecontent" rows="5" placeholder="Paste Here"requird></textarea>
	                       </div>
	                        <div class="d-flex justify-content-between mt-5">
	                            <a href="<?php _ec( get_module_url() )?>" class="btn btn-dark btn-hover-scale">
	                                <?php _e("Back")?>
	                            </a>
	                            <a  class="btn btn-primary btn-hover-scale d-none" id="hhdshdsd" onclick="submchanneww();">
	                                <?php _e("Scrape Data")?>
	                            </a>
	                            <button type="submit" id="submiteds" class="btn btn-primary btn-hover-scale  d-none" >
	                                <i class="fal fa-paper-plane"></i> <?php _e("Submit")?>
	                            </button>
	                        </div>
			            </div>
			      

				        
				     
				</form>
				
	      	</div>
	    </div>
  	</div>
</div>

 <script>

$(document).ready(function () {
//change selectboxes to selectize mode to be searchable
   $("#vksdjsdj").select2(
       {
  dropdownParent: $('#ImportContactModal')

});
});

function submchanneww(){
    var pastecontent = document.getElementById("pastecontent").value;
              if(pastecontent !='') {
                   var textarea = document.getElementById("pastecontent");

  // Get the content of the textarea
  var content = textarea.value;

  // Use regular expressions to extract the numbers
  var pattern = /\+\(\d{1,3}\) \d{10}|\+\d{1,3}[-.\s|]?\d{4}\s\d{6}|\+\d{1,3}[-.\s|]?\d{2}\s\d{4}\s\d{4}|\+\d{1,3}[-.\s|]?\d{5}\s?\d{5}|\+\d{12}|\+\d{1,3}[-.\s|]?\d{5}\s?\d{5}|\+\d{12}|\+\d{1,3}[-.\s|]?\d{2,5}[-.\s|]?\d{2,5}[-.\s|]?\d{3,4}\b/g;
  var numbers = content.match(pattern);
  var uniqueNumbers = [...new Set(numbers)];

  // Update the textarea value with the extracted numbers
 textarea.value = uniqueNumbers.join("\n"); // Join numbers with a comma and space
  document.getElementById("submiteds").classList.remove("d-none");
  document.getElementById("hhdshdsd").classList.add("d-none");
              }else{
                  document.getElementById("submiteds").classList.add("d-none");
              }
    
}


function submitedthings(){
  
       
         var vksdjsdj = document.getElementById("vksdjsdj").value;
          var keywordssd = document.getElementById("phone_numbers").value;
           var domain_nemsd = document.getElementById("domain_nemsd").value;
           
           if(vksdjsdj !='' && keywordssd !=''&&domain_nemsd !='') {
               var uri="site:"+domain_nemsd+" "+keywordssd+" "+vksdjsdj;
           let encoded = encodeURIComponent(uri);

           vatallurla="https://www.google.com/search?q="+encoded+"&num=100";
           window.open(vatallurla,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1076,height=768,directories=no,location=no');
               
             var clsdjsdsjdskd = document.getElementById("clsdjsdsjdskd");
                  clsdjsdsjdskd.classList.remove("d-none");
               
                document.getElementById("hhdshdsd").classList.remove("d-none");
           }
           
           document.getElementById("submiteds").classList.add("d-none");
   
}
</script>

<script type="text/javascript">
	$(function(){
		Whatsapp.import_contact();
	});
</script>