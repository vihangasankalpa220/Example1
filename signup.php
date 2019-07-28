<?php
<html>
   <form    action="new.html">
        <div class="form-input-wide">
          <div class="form-html" data-component="text">
            <p><span style="font-size:8pt;"><strong>Please complete all information below:</strong></span></p>
          </div>
        </div>
     <tr>
	 <td>
      <li class="form-line" data-type="control_dropdown">
        <td class="form-label form-label-left form-label-auto"> Salutation : </td>
		</td>
		<td>
        <div class="form-input">
          <select class="form-dropdown" name="salutations"  style="height:18px; margin-left: 289px; margin-top:-17px;" data-component="dropdown">
            <option value="">  Mr.</option>
			<option value="Ms."> Miss. </option>
            <option value="Miss"> Mrs </option>
            <option value="Dr. "> Dr. </option>
			 <option value="Ms."> Rev. </option>
            </select>
        </div>
      </li>
	  </td>
	  </tr>
	  <tr>
	  <td>
      <li class="form-line jf-required" data-type="control_textbox">
        <td class="form-label form-label-left form-label-auto">
          First Name :

        
		</td>
		<td>
        <div class="form-input jf-required">
          <input type="text" name="firstName"style="height:18px; margin-left: 145px; margin-top:-17px;"  data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
      </li>
	  </td>
	  <td>
      <li class="form-line jf-required" data-type="control_textbox">
        <td class="form-label form-label-left form-label-auto">
          Last Name :

        
		</td>
		</tr>
        <div class="form-input jf-required">
          <input type="text" name="lastName" style="height:18px; margin-left: 145px; margin-top:-17px;" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
      </li>
	  <tr>
	  <td>
	  <li class="form-line" data-type="control_dropdown">
        <td class="form-label form-label-left form-label-auto"> Are you a Sri Lankan Citizen? : </td>
        </td>
<td>		
        <div class="form-input">
          <select class="form-dropdown" name="citizen"  style="height:24px; margin-left: 298px; margin-top:-17px;" data-component="dropdown">
            <option value="">  Yes</option>
			<option value="No"> No </option>
			</select>
			</td>
        </div>
		</tr>
		<tr>
      <li class="form-line jf-required" data-type="control_textbox">
	   <td class="form-label form-label-left form-label-auto">
          Your NIC Number :

        </td>
		<td>
        <div class="form-input jf-required">
          <input type="text" name="nicNo"    style="height:18px;  margin-left: 145px; margin-top:-17px;" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </td>
		</div>
      </li>
        <td class="form-label form-label-left form-label-auto">
          E-mail:
          
        </td>
		<td>
        <div class="form-input jf-required">
          <input type="email" name="email"  style="height:24px; width:201px; margin-left: 145px; margin-top:-17px;" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
		</td>
      </li>
	  </tr>
	  <tr>
	  <li class="form-line jf-required" data-type="control_textbox">
	   <td class="form-label form-label-left form-label-auto">
          Birthday :

        </td>
		
		
       <td>
          <input type="date" name="bday"   style="height:18px; margin-left: 82px; width:201px; margin-top:-17px;" class="form-textbox validate[required]" size="40" value="" placeholder=" " data-component="textbox" required="" />
        </li>
		</td>
      <li class="form-line jf-required" data-type="control_textbox">
        <td class="form-label form-label-left form-label-auto">
          Mobile Number :

        </td>
		</tr>
		<tr>
		<td>
        <div class="form-input jf-required">
          <input type="text" name="mobileNo"  style="height:18px; margin-left: 145px; margin-top:-17px;" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
      </li>
     </td>
	 </tr>
	 <tr>
	 
	  <li class="form-line" data-type="control_dropdown">
        <td class="form-label form-label-left form-label-auto"> Your Blood Group : </td>
		<td>
        <div class="form-input">
          <select class="form-dropdown" name="bloodgrp"  style="height:18px; margin-left: 295px; margin-top:-17px;" data-component="dropdown">
            <option value="">  </option>
			<option value="No"> O+ </option>
			<option value="No"> O- </option>
			<option value="">  AB+</option>
			<option value="No"> AB- </option>
			<option value="">  A+</option>
			<option value="No"> A- </option>
			<option value="">  B+</option>
			<option value="No"> B- </option>
			</select>
        </div>
		</td>
		</tr>
		<tr>
		
      <li class="form-line" data-type="control_address">
        <td class="form-label form-label-left form-label-auto"> Address </td>
		<td>
        <div class="form-input">
		
          <table summary="" class="`form-address-table" cellpadding="0" cellspacing="0">
		  
            <tbody>
              
            </tbody>
			
          </table>
        </div>
		</td>
      </li>
      </tr>
	  <tr>
	  <td>
        <div class="form-input">
          <textarea class="form-textarea" name="address" cols="44" rows="6" style="margin-left:145px; width:201px; margin-top:-38px;" data-component="textarea"></textarea>
        </div>
		</td>
      </li>
	  <li class="form-line jf-required" data-type="control_textbox">
        <td class="form-label form-label-left form-label-auto">
          Password:

        </td>
		<td>
        <div class="form-input jf-required">
          <input type="password" name="psw"   style="height:18px; margin-left: 145px; margin-top:-17px;" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
		</td>
      </li>
	  </tr>
	  <tr>
	  <li class="form-line jf-required" data-type="control_textbox">
        <td class="form-label form-label-left form-label-auto">
          Confirm Password:
          
        </td>
		<td>
        <div class="form-input jf-required">
          <input type="password" name="confirmpsw"  style="height:18px; margin-left: 145px; margin-top:-17px;" class="form-textbox validate[required]" size="20" value="" placeholder=" " data-component="textbox" required="" />
        </div>
		</td>
      </li>
	  </tr>
      <class="form-line" data-type="control_button">
        <div class="form-input-wide">
          <div style="margin-left:300px;" class="form-buttons-wrapper">
            <button type="submit" class="form-submit-button" data-component="button">
              Submit
            </button>
			 <button type="reset" class="form-reset-button" data-component="button">
              Reset
            </button>
          </div>
		  

        </div>

	  &nbsp
	  &nbsp
	   <a href="Home.html"  style="float: right;margin-right:250px;">Already Have an Account</a>
	  &nbsp
		&nbsp	   
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
	
  </div>
 		
</form>

</html>

?>