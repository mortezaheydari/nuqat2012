<script type="text/javascript">

/* Lite validation Starts */


// URL: www.freecontactform.com
// Version: FreeContactForm Lite V1.0
// Copyright (c) 2009 Stuart Cochrane <stuartc1@gmail.com>
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
function has_id(id){try{var tmp=document.getElementById(id).value;}catch(e){return false;}
return true;}
function has_name(nm){try{var tmp=cfrm.nm.type;}catch(e){return false;}
return true;}
function $$(id){if(!has_id(id)&&!has_name(id)){alert("Field "+id+" does not exist!\n Form validation configuration error.");return false;}
if(has_id(id)){return document.getElementById(id).value;}else{return;}}
function $val(id){return document.getElementById(id);}
function trim(id){$val(id).value=$val(id).value.replace(/^\s+/,'').replace(/\s+$/,'');}
var required={field:[],add:function(name,type,mess){this.field[this.field.length]=[name,type,mess];},out:function(){return this.field;},clear:function(){this.field=[];}};var validate={check:function(cform){var error_message='Please fix the following errors:\n\n';var mess_part='';var to_focus='';var tmp=true;for(var i=0;i<required.field.length;i++){if(this.checkit(required.field[i][0],required.field[i][1],cform)){}else{error_message=error_message+required.field[i][2]+'  is invalid\n';if(has_id(required.field[i][0])&&to_focus.length===0){to_focus=required.field[i][0];}
tmp=false;}}
if(!tmp){alert(error_message);}
if(to_focus.length>0){document.getElementById(to_focus).focus();}
return tmp;},checkit:function(cvalue,ctype,cform){if(ctype=="NOT_EMPTY"){if(this.trim($$(cvalue)).length<1){return false;}else{return true;}}else if(ctype=="EMAIL"){exp=/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;if($$(cvalue).match(exp)==null){return false;}else{return true;}}},trim:function(s){if(s.length>0){return s.replace(/^\s+/,'').replace(/\s+$/,'');}else{return s;}}};

/* Lite validation ends here */




	required.add('Full_Name','NOT_EMPTY','Full Name');
	required.add('Email_Address','EMAIL','Email Address');
	required.add('Your_Message','NOT_EMPTY','Your Message')
</script>


<form action="lite_process.php" method="post" name="contactformlite" id="contactformlite" onSubmit="return validate.check(this)">
              <table width="370" align="left">

                <tr>
                  <td colspan="2">
                  <h1>Lectures</h1></td>
                </tr>
                <tr>
                  <td colspan="2"><div style="width:150px;height:40px;background:url(img/contact-bubble.jpg) top center no-repeat;color:#fff;line-height:35px;text-align:center;">Suggest a speaker</div></td>                
                </tr>
                <tr>
                  <td width="92" valign="top" class="TextLabel"><label for="Full_Name" class="required">Name</label></td>
                  <td width="296" valign="top" class="cflite_td" style="text-align:right;"><input name="Full_Name" type="text" class="textbox" id="Full_Name" style="width:254px" maxlength="80" /></td>
                </tr>
                <tr>
                  <td valign="top"><label for="Email_Address" class="required">Email Address</label></td>
                  <td valign="top" class="cflite_td" style="text-align:right;"><input name="Email_Address" type="text" class="textbox" id="Email_Address" style="width:254px" maxlength="100" /></td>
                </tr>
                <tr>
                  <td valign="top"><label for="Your_Message" class="required">Suggestion<span class="required_star"></span></label></td>
                  <td valign="top" class="cflite_td" style="text-align:right;"><textarea name="Your_Message" class="textbox" id="Your_Message" style="width:250px;height:120px" maxlength="2000"></textarea></td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align:right"  class="cflite_td"><input type="submit" class="SubmitBtn" value="Submit" /></td>
                </tr>
                <tr>
                  <td colspan="2" style="text-align:left"  class="cflite_td"><p>For more info please call the Nuqat team on: +971 561088696</p></td>
                </tr>               
              </table>
            </form>