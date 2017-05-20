   <?php include('header.php');?>
  <script type="text/javascript">
$(document).ready(function(){
	$('#upload').on('click',function(){
		$('#upload_form').ajaxForm({
			target:'#preview',
			beforeSubmit:function(e){
				$('.progress').show();
			},
			success:function(e){
				$('.progress').hide();
			},
			error:function(e){
			}
		}).submit();
	});
});
</script>
<SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
document.getElementById('fileChooser').value='';
            }
      
    }
</SCRIPT>
<script type="text/javascript" language="javascript">


function checkform(theform) {

if(document.theform.fname.value == 0)
{
alert("Enter your First Name");
document.theform.fname.focus();
return false;
}

if(document.theform.lname.value == 0)
{
alert("Enter your Last Name");
document.theform.lname.focus();
return false;
}

if(document.theform.username.value.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)
{
alert("Enter Valid Username. Ex:abc@abc.com");
document.theform.username.value = "";
document.theform.username.focus();
return false;
}



if(document.theform.cname.value == 0)
{
alert("Enther the Company Name");
document.theform.cname.focus();
return false;
}

if(document.theform.city.value == 0)
{
alert("Enter your City");
document.theform.city.focus();
return false;
}
if(document.theform.state.value == 0)
{
alert("Enter Your State");
document.theform.state.focus();
return false;
}
if(document.theform.country.value == 0)
{
alert("Enter Your Country");
document.theform.country.focus();
return false;
}

if(document.theform.addressline1.value == 0)
{
alert("Enter Your Address.");
document.theform.addressline1.focus();
return false;
}


if(document.theform.zip.value == 0)
{
alert("Enter Your zip/pin code");
document.theform.zip.focus();
return false;
}

if(document.theform.phoneno.value == 0)
{
alert("Enter Your Phone No.");
document.theform.phoneno.focus();
return false;
}

}
</script>


      <div class="page-container">
        <div class="page-header clearfix">
          <div class="pull-left">
            <h2>Update Users</h2>  
            </ol>
          </div> 
        </div>
        <div class="page-content container-fluid">
          <div class="widget">
            <div class="widget-heading clearfix">
              <h3 class="widget-title pull-left">Update Users</h3> 
            </div>
            <div class="widget-body"> 
			
               <?php
			   $id=$_GET['id'];
			   $query="SELECT * FROM `registration` WHERE `id`= '$id'";

//echo $query;  
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)){
			   
			   ?>
                <div class="tab-content">
                
				   <form action="users_update_process.php" method="POST" name="theform" enctype="multipart/form-data"onsubmit="return checkform();">

      
			
                  <div class="row">
                     <div class="form-group col-md-6">
                      <label for="checkuot-form-fname">First Name<span class="mand-field">*</span></label>
                      <input id="fname" type="text" class="form-control" placeholder="First Name" name="fname" value="<?php  echo $row['firstname'];?>"  >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-lname">Last Name<span class="mand-field">*</span></label>
                      <input id="lname" type="text" class="form-control" placeholder="Last Name"   value="<?php  echo $row['lastname'];?>"  name="lname"  >
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="checkuot-form-cname">Company Name<span class="mand-field">*</span></label>
                        <input id="cname" type="text" class="form-control" placeholder="Company Name" value="<?php echo $row['company_name']; ?>"   name="cname" >
                      </div>
                      <div class="form-group">
                        <label for="checkuot-form-email">Email Address<span class="mand-field">*</span></label>
                        <input id="username" type="email" class="form-control" placeholder="Email Address"   value="<?php  echo $row['username'];?>"  name="email" > 
                      </div>
					  
					  
					  <div class="form-group">
                        <label for="checkuot-form-phone">Phone No<span class="mand-field">*</span></label>
                        <input id="phoneno" type="tel" class="form-control" placeholder="Phone No" value="<?php  echo $row['ph_no'];?>"   name="phoneno" > 
                      </div>
                      <div class="form-group">
                        <label for="checkuot-form-address">Address<span class="mand-field">*</span></label>
                        <input id="addressline1" type="text" class="form-control" placeholder="Street address" value="<?php  echo $row['addressline1'];?>"   name="addressline1" >
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" value="<?php  echo $row['addressline2'];?>"   name="addressline2" >
                      </div>
                    </div>
					<div class="form-group col-md-12">
                      <label for="checkuot-form-zip">Status<span class="mand-field ">*</span></label>
                      <select name="status"  style="width:100%"required>
								 <option value="1" <?php if($row['status']==1 ){  ?>  selected <?php }?> >Enabled</option>
								  <option value="0" <?php if($row['status']==0 ){  ?>  selected <?php }?>> Disabled</option>

							  </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-city">City</label><span class="mand-field">*</span></label>
                      <input id="city" type="text" class="form-control" placeholder="City" value="<?php  echo $row['city'];?>"    name="city" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="checkuot-form-state">State</label><span class="mand-field">*</span></label>
                      <input id="state" type="text" class="form-control" placeholder="State"   value="<?php  echo $row['state'];?>"  name="state" >
                    </div>
					 <div class="form-group col-md-6">
                      <label for="checkuot-form-state">Country</label><span class="mand-field">*</span></label>
                      <input id="country" type="text" class="form-control" placeholder="Country" value="<?php  echo $row['country'];?>"  name="country" >
                    </div>
                    <div class="form-group col-md-6"><span class="mand-field">*</span></label>
                      <label for="checkuot-form-zip">Zip/Postal Code</label>
                      <input id="zip" type="text" class="form-control" placeholder="Zip/Postal Code" value="<?php  echo $row['country'];?>" name="zip"  >
                    </div>
					
			
					
				  <input type="hidden" value="<?php  echo $_GET['id'];?>" name="vendor_id"> 
				 <input type="submit" name="submit" style="float:right;padding:10px 80px; background-color:#0667D6;color:#fff">
			   </div>
                
                  
                 
                
          </div>
<?php } ?>
        </div> 
		</div>
        </div></div>
    <!-- jQuery-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/toastr/toastr.min.css">
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Malihu Scrollbar-->
    <script type="text/javascript" src="plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script> 
    <script type="text/javascript" src="plugins/toastr/toastr.min.js"></script>
	<!-- Bootstrap Select-->
	<script type="text/javascript" src="plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
	<script type="text/javascript" src="build/js/page-content/file-uploads/bootstrap-file-input.js"></script>
  

	

	</script>
	</body>
</html>