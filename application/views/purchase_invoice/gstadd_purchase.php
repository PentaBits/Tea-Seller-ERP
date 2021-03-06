<script src="<?php echo base_url(); ?>application/assets/js/gstaddPurchaseJS.js"></script> 
<script src="<?php echo base_url(); ?>application/assets/js/jquery-customselect.js"></script> 
<link rel="stylesheet" href="<?php echo base_url(); ?>application/assets/css/jquery-customselect.css" />

	
	
      
<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#003399;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #CCFFCC;
}
 .custom-select {
    position: relative;
    width: 200px;
    height:25px;
    line-height:10px;
  font-size: 9px;
    
 
}
.custom-select a {
  display: block;
  width: 200px;
  height: 25px;
  padding: 8px 6px;
  color: #000;
  text-decoration: none;
  cursor: pointer;
  font-family: "Open Sans",helvetica,arial,sans-serif;
    font-size: 9px;
}
.custom-select div ul li.active {
    display: block;
    cursor: pointer;
    font-size: 9px;
}


.custom-select input {
    width: 165px;
    font-family: "Open Sans",helvetica,arial,sans-serif;
    font-size: 9px;
}
</style>
<!-- Table goes in the document BODY -->
<h2><font color="#5cb85c">Purchase(GST) add</font></h2>
 <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2">
       
    </div>
    <div class="col-md-2">
         <a href="<?php echo base_url(); ?>gstpurchaseinvoice/addPurchaseInvoice" class="btn btn-info" role="button">Add new</a>
        <a href="<?php echo base_url(); ?>gstpurchaseinvoice" class="btn btn-info" role="button">List</a>
    </div>
    
 </div>

<form action="" method="post" id="frmPurchase" enctype="multipart/form-data">
<div id="purchaseMaster" align="center" class="ui-widget">
<table class="masterTable">
  <tr>
    <td colspan="4">&nbsp;
    <!-- Mode of operation and PurchaseMaster Id-->
    <input type="hidden" name="txtModeOfOperation" id="modeofoperation" value="<?php echo($header['mode']);?>"/>
    <input type="hidden" name="txtpmasterId" id="pMasterId" value=""/>
    
    </td>
  </tr>
  <tr>
    <td>Purchase</td>
    <td>
                    <select id="purchasetype" name="purchasetype">
                        <option value="AS" <?php if($bodycontent['purchaseMaster']["from_where"]=='AS'){echo("selected");}else{echo("");}?>>Auction</option>
                        <option value="PS" <?php if($bodycontent['purchaseMaster']["from_where"]=='PS'){echo("selected");}else{echo("");}?>>Auction private</option>
                        <option value="SB" <?php if($bodycontent['purchaseMaster']["from_where"]=='SB'){echo("selected");}else{echo("");}?>>Private purchase</option>
                    </select>
       
    </td>
    <td>Area</td>
    <td>
    		<select id="auctionArea" name="auctionArea" style="width:200px;">
                          <option value="0">Select</option>
                          <?php foreach($header['auctionarea'] as $content){?>
                          <option value="<?php echo($content->aucAreaid); ?>" <?php if($bodycontent['purchaseMaster']["auctionareaid"]==$content->aucAreaid){echo('selected');}?>> 
                              <?php echo($content->auctionarea); ?> </option>             
                          <?php }?>
                </select>
         <input type="hidden" name="transCostPrice" id="transCostPrice" />
     </td>
  </tr>
  <tr>
    <td>Invoice</td>
    <td><input type="text" name="taxinvoice" id="taxinvoice" value="<?php echo($bodycontent['purchaseMaster']["purchase_invoice_number"]); ?>"/></td>
    <td>Invoice Date</td>
    <td><input type="text" class="datepicker" id="taxinvoicedate" style="width:200px;" name="taxinvoicedate" value="<?php //echo($bodycontent['purchaseMaster']->invoicedate);
        if($bodycontent['purchaseMaster']){echo($bodycontent['purchaseMaster']["invoicedate"]);}else{echo date('d-m-Y');}
    ?>"/></td>
  </tr>
  <tr>
    <td>Sale No.</td>
    <td><input type="text" name="salenumber" id="salenumber" value="<?php echo($bodycontent['purchaseMaster']["sale_number"]);?>"/></td>
    <td>Sale Date</td>
    <td><input type="text" class="datepicker" id="saledate" name="saledate" 
               value="<?php echo($bodycontent['purchaseMaster']["saledate"]); ?>" style="width:200px;"/></td>
  </tr>
  <tr>
    <td>Prompt Date</td>
    <td><input type="text" class="datepicker" id="promtdate" name="promtdate" value="<?php echo($bodycontent['purchaseMaster']["promptDate"]);?>"/></td>
    <td>Vendor</td>
    <td> 
    		    <select name="vendor" id="vendor" class='custom-select' style="width:200px;">
                        <option value="0">Select</option>
                        <?php foreach ($header['vendor'] as $content) : ?>
                            <option value="<?php echo $content->vid; ?>"
                                <?php if($content->vid==$bodycontent['purchaseMaster']["vendor_id"]){echo("selected='selected'");}else{echo('');}?>><?php echo $content->vendor_name; ?></option>
                        <?php endforeach; ?>

                    </select>
        <div id="vendor_err" style="margin-left:210px;margin-top:-21px;display:none;">
            <img src="<?php echo base_url(); ?>application/assets/images/vendor_validation.gif" /></div>
    </td>
  </tr>
   <tr>
    <td>CN No.</td>
    <td><input type="text"  id="cnNo" name="cnNo" value="<?php echo($bodycontent['purchaseMaster']["promptDate"]);?>"/></td>
   
    <td><span id="transp_label">Transporter Name</span></td>
    <td> 
    		    <select name="transporterid" id="transporterid" style="width:200px;">
                        <option value="0">Select</option>
                        <?php foreach ($header['transporterlist'] as $rows) : ?>
                            <option value="<?php echo $rows->id; ?>">
                               <?php echo $rows->name; ?></option>
                        <?php endforeach; ?>

                    </select>
    </td>
   </tr>
   
  
  <!--added on 13.6.2016 -- Mithilesh -->
  <tr id="challan_block">
      <td>Challan No.</td>
      <td><input type="text" name="challanNo" id="challanNo" /></td>
      <td>Challan Date </td>
      <td><input type="text" name="challanDate" id="challanDate" class="datepicker" style="width:200px;"></td>
  </tr>
  
 
  <tr>
       <td>
           HSN .
       </td>
       <td><input type="text" name="txtHSN" id="txtHSN"  style="width:200px;" placeholder="Harmonized System Nomenclature"></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
   </tr>
  <tr>
  <td colspan="4">
      <span class="buttondiv">
          <div class="save" id="addnewDtlDiv" align="center">Add Details</div>
      </span>
  </td>
  </tr>
   <tr>
  <td colspan="4">
     <div id="dialog-new-save" title="Purchase Detail" style="display:none;">
            <p>Data successfully saved.</p>
     </div>
  </td>
  </tr>
</table>

</div>
<!-- Details HTML dynamically added here-->
<div id='detailDiv' >
      
</div>
<!-- Details HTML dynamically added here-->

<!-- modal dialog--div-->
<div id="dialog-check-invoice" title="Purchase Detail" style="display:none;">
  <p>Invoice No already exist</p>
  
  
</div>
<!-- modal dialog--div-->

<!-- modal dialog--div-->
<div id="dialog-new-add" title="Purchase Detail" style="display:none;">
  <p>Data validation fail!!..</p>
  
  
</div>
<!-- modal dialog--div-->
<!-- modal dialog--div-->
<div id="dialog-error-save" title="Purchase Detail" style="display:none;">
  <p>Error in data save!!..</p>
  
  
</div>
<!-- modal dialog--div-->
<div id="dialog-loader-save" title="Purchase Detail" style="display:none;height:104px;">
    <p><img src="<?php echo base_url(); ?>application/assets/images/please_wait.gif" width="99%" /></p> 
</div>
<!-- modal dialog--div-->






<div id="purchaseMasterFooter" align="center" style="padding-top: 0.2cm;">
    
    <table class="masterTable" width="50%" >
        <tr>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Total Bags</td>
            <td><input type="text" id="txtTotalBags" name="txtTotalBags" style="text-align: right;" value="" readonly=""/></td>
        </tr>
        <tr>
            <td>Total Weight(in Kgs.)</td>
            <td><input type="text" id="txtGrandWeight" name="txtGrandWeight" style="text-align: right;" value="" readonly=""/></td>
        </tr>

        <tr>
            <td>Tea value</td>
            <td><input type="text" id="txtTeaValue" name="txtTeaValue" style="text-align: right;" value="" readonly=""/></td>
        </tr>
        
       <!--gst-->
        <tr>
            <td>Total CGST</td>
            <td><input type="text" id="txtCGSTTotal" name="txtCGSTTotal" style="text-align: right;" value="" readonly=""/></td>
        </tr>
        
        <tr>
            <td>Total SGST</td>
            <td><input type="text" id="txtSGSTTotal" name="txtSGSTTotal" style="text-align: right;" value="" readonly=""/></td>
        </tr>
         <tr>
            <td>Total IGST</td>
            <td><input type="text" id="txtIGSTTotal" name="txtIGSTTotal" style="text-align: right;" value="" readonly=""/></td>
        </tr>
        <!--gst-->
        
        
        
        <tr>
            <td>Total(GST Incl.)</td>
            <td> <input type="text" name="txtGSTIncludedAmount" id="txtGSTIncludedAmount" value="" style="text-align: right;" readonly=""/></td>
        </tr>
        
        
        <!--Tb charges Total--->
        
        
        
        <tr>
            <td>Round Off</td>
            <td> <input type="text" name="txtRoundOff" id="txtRoundOff" value="" style="text-align: right;" /></td>
        </tr>
        <tr>
            <td>Total</td>
            <td> <input type="text" id="txtTotalPurchase" name="txtTotalPurchase" value="" style="text-align: right;" readonly=""/> </td>
        </tr>
    </table>
        
</div>
     <span class="buttondiv">
          <div class="save" id="savePurchase" align="center" style="display:block;">Save</div>
      </span>
    </form>

