 <script src="<?php echo base_url(); ?>application/assets/js/teagroupmaster.js"></script>
 <div style="display:none" id="adddiv">

    
      <section id="loginBox" style="width:500px;">
      <form role="form" method="post" name="addform" id="addform">
      			
				  <label for="code">Code :
                  <br/>
                  <input type="text" id="code" name="code" required="required" />
                  </label>
              		  <br/>
                   <label for="description">Description :
                    <br/>
                   <input type="text" id="description" name="description" required="required" />
                   </label>
                    <br/>
                    <br/>
				   <span class="buttondiv"></span>
         </form>
         </section>

  
 </div>

 <div class="stats">
 
    <p class="stat"><a href="#"><img src="<?php echo base_url(); ?>application/assets/images/add.jpg" hieght="30" width="30" onclick="openADD()"/></a></p>
     <p class="stat"><a href="#"><img src="<?php echo base_url(); ?>application/assets/images/edit.jpg" hieght="40" width="40" id="edit" style="visibility: hidden;"/></a></p>
      <p class="stat"><a href="#"><img src="<?php echo base_url(); ?>application/assets/images/delete.png" hieght="30" width="30" id="del" style="visibility: hidden;"/></a></p>
     <p class="stat"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>application/assets/images/home.jpg" hieght="30" width="30"/></a></p>
    
	</div>
 <h1><font color="#5cb85c">List of Tea Group(s)</font></h1>

 


 

                    