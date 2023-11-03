<form class="actionForm" action="<?php _eC( get_module_url("save/".get_data($result, "ids")) )?>" method="POST" data-redirect="<?php _ec( get_module_url() )?>">
    <div class="container my-5 mw-800">
        <div class="bd-search position-relative me-auto">
            <h2 class="mb-0 py-4"> <i class="<?php _ec( $config['icon'] )?> me-2" style="color: <?php _ec( $config['color'] )?>;"></i> <?php _e( $config['name'] )?></h2>
        </div>

        <div class="card b-r-6 h-100 post-schedule wrap-caption">
            <div class="card-header">
                <h3 class="card-title"><?php _e("Get Virtual Numbers")?></h3>
                <div class="card-toolbar"></div>
            </div>
            <div class="card-body position-relative">
                <div class="mb-4">
                    <label class="form-label"><?php _e("Select Country")?></label>
                     <select name="country" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body fw-bold border-0 miw-130" id="vksdjsdj">
                    <option value="" data-icon="fab fa-whatsapp" data-icon-color="#25d366" selected><span><?php _e("Select Country For Virtiual number ")?></span></option>
<option value="213">Algeria</option>
<option value="54">Argentina</option>
<option value="374">Armenia</option>
<option value="61">Australia</option>
<option value="43">Austria</option>
<option value="994">Azerbaijan</option>
<option value="375">Belarus</option>
<option value="32">Belgium</option>
<option value="591">Bolivia</option>
<option value="387">Bosnia</option>
<option value="55">Brazil</option>
<option value="359">Bulgaria</option>
<option value="226">Burkina Faso</option>
<option value="855">Cambodia</option>
<option value="237">Cameroon</option>
<option value="1">Canada</option>
<option value="235">Chad</option>
<option value="86">China</option>
<option value="57">Colombia</option>
<option value="385">Croatia</option>
<option value="53">Cuba</option>
<option value="357">Cyprus</option>
<option value="420">Czech Republic</option>
<option value="45">Denmark</option>
<option value="593">Ecuador</option>
<option value="20">Egypt</option>
<option value="503">El Salvador</option>
<option value="372">Estonia</option>
<option value="358">Finland</option>
<option value="33">France</option>
<option value="220">Gambia</option>
<option value="995">Georgia</option>
<option value="49">Germany</option>
<option value="233">Ghana</option>
<option value="30">Greece</option>
<option value="224">Guinea</option>
<option value="245">Guinea Bissau</option>
<option value="509">Haiti</option>
<option value="504">Honduras</option>
<option value="852">Hong Kong</option>
<option value="36">Hungary</option>
<option value="91">India</option>
<option value="62">Indonesia</option>
<option value="98">Iran</option>
<option value="964">Iraq</option>
<option value="353">Ireland</option>
<option value="972">Israel</option>
<option value="39">Italy</option>
<option value="225">Ivory Coast</option>
<option value="962">Jordan</option>
<option value="77">Kazakhstan</option>
<option value="254">Kenya</option>
<option value="996">Kyrgyzstan</option>
<option value="856">Laos</option>
<option value="371">Latvia</option>
<option value="231">Liberia</option>
<option value="370">Lithuania</option>
<option value="352">Luxembourg</option>
<option value="223">Mali</option>
<option value="265">Malawi</option>
<option value="60">Malaysia</option>
<option value="222">Mauritania</option>
<option value="52">Mexico</option>
<option value="373">Moldova</option>
<option value="377">Monaco</option>
<option value="976">Mongolia</option>
<option value="212">Morocco</option>
<option value="95">Myanmar</option>
<option value="31">Netherlands</option>
<option value="505">Nicaragua</option>
<option value="234">Nigeria</option>
<option value="389">North Macedonia</option>
<option value="47">Norway</option>
<option value="92">Pakistan</option>
<option value="595">Paraguay</option>
<option value="51">Peru</option>
<option value="63">Philippines</option>
<option value="48">Poland</option>
<option value="351">Portugal</option>
<option value="40">Romania</option>
<option value="7">Russia</option>
<option value="966">Saudi Arabia</option>
<option value="221">Senegal</option>
<option value="381">Serbia</option>
<option value="232">Sierra Leone</option>
<option value="65">Singapore</option>
<option value="421">Slovakia</option>
<option value="386">Slovenia</option>
<option value="82">South Korea</option>
<option value="34">Spain</option>
<option value="94">Sri Lanka</option>
<option value="249">Sudan</option>
<option value="46">Sweden</option>
<option value="41">Switzerland</option>
<option value="886">Taiwan</option>
<option value="992">Tajikistan</option>
<option value="255">Tanzania</option>
<option value="66">Thailand</option>
<option value="228">Togo</option>
<option value="216">Tunisia</option>
<option value="90">Turkey</option>
<option value="256">Uganda</option>
<option value="380">Ukraine</option>
<option value="44">United Kingdom</option>
<option value="1">USA</option>
<option value="998">Uzbekistan</option>
<option value="58">Venezuela</option>
<option value="84">Vietnam</option>
<option value="967">Yemen</option>
<option value="260">Zambia</option>
                </select>
                 
                </div>

                <div class="mb-3">
                    <label class="form-label"><?php _e("Enter Name Of Virtual Number")?></label>
                    <input type="text" class="form-control form-control-solid" name="name" value="<?php _ec( get_data($result, "name") )?>" required>
                </div>
                
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="<?php _ec( get_module_url() )?>" class="btn btn-dark btn-hover-scale">
                        <?php _e("Back")?>
                    </a>
                    <button type="submit" class="btn btn-primary btn-hover-scale">
                        <?php _e("Submit")?>
                    </button>
                </div>
            </div>
        </div>
     
    </div>
</form>

<script type="text/javascript">
$(function(){
    Core.tagsinput();
});
</script>