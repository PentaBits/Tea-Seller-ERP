<style>
.box {
	
	background:#FFF;
	margin:10px auto;
}

  .effect6
{
  position:relative;       
  -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect6:before, .effect6:after
{
	content:"";
    position:absolute; 
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:50%;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
}
.price{
    width:60px;
}
.TransCost{
     width:60px;
}
    
</style>



<div id='purchaseDtl_<?php echo($divnumber); ?>' class="box effect6">
  <img src="<?php echo base_url(); ?>application/assets/images/Actionsarrowicon.png" id="img_<?php echo($divnumber);?>" class="plus"/>
  <img src="<?php echo base_url(); ?>application/assets/images/delete-ab.png" id="img_<?php echo($divnumber);?>" class="divdel" alt="remove" title="remove"/>
  
  <span><?php echo("Purchase Detail: ".$divnumber); ?></span>  
  <div id="dtlDiv_<?php echo($divnumber); ?>">
    <table class="gridtable" width="100%">
                    <tr>
                        <td>Lot</td>
                        <td><input type="text" id="txtLot_<?php echo($divnumber);?>" name="txtLot[]" class="lotNumber" value=""/></td>
                        <td>DO</td>
                        <td><input type="text" id="txtDo_<?php echo($divnumber);?>" name="txtDo[]" value=""/></td>
                        <td>Do Date</td>
                        <td><input type="text" id="txtDoDate_<?php echo($divnumber);?>" name="txtDoDate[]" class="datepicker" value=""/></td>
                    </tr>
                    
                    <tr>
                        <td>Invoice</td>
                        <td><input type="text" id="txtInvoice_<?php echo($divnumber);?>" name="txtInvoice[]" class="invoice" value=""/></td>
                        <td>Gross</td>
                        <td><input type="text" id="txtGross_<?php echo($divnumber);?>" name="txtGross[]" value=""/></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    
                   
                     <tr>
                        <td>Price/Kgs</td>
                        <td>
                            <input type="text" id="txtPrice_<?php echo($divnumber);?>" name="txtPrice[]" class="price" value="" />
                             Trans Cost
                            <input type="text" id="transCost_<?php echo($divnumber);?>" name="transCost[]" class="transCost" value="" style="width:80px;"/>
                        </td>
                        <td>Group</td>
                        <td>
                           
                            <select id="drpGroup_<?php echo($divnumber);?>" name="drpgroup[]" class="teagroup">
                                <option value="0">Select</option>    
                                <?php foreach ($teagroup as $teaGrp){ ?>
                                <option value="<?php echo($teaGrp->id);?>"><?php echo($teaGrp->group_code);?></option>
                                <?php }?>
                            </select>
                        </td>
                   
                        <td>Location</td>
                        <td>
                            <select id="drpLocation_<?php echo($divnumber);?>" name="drplocation[]" class="location">
                                <option value="0">Select</option>    
                                <?php foreach ($location as $location){ ?>
                                <option value="<?php echo($location->lid);?>"><?php echo($location->location);?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Garden</td>
                        <td>
                            <select id="drpGarden_<?php echo ($dataContent['id']); ?>" name="drpGarden[]" class="garden">
                                <option value="0">Select</option>    
                                <?php foreach ($garden as $garden){ ?>
                                <option value="<?php echo($garden->id);?>"><?php echo($garden->garden_name);?></option>
                                <?php }?>
                            </select>
                        </td>
                        <td>Grade</td>
                        <td>
                            <select id="drpGrade_<?php echo($divnumber);?>" name="drpGrade[]" class="grade">
                                <option value="0">Select</option>    
                                <?php foreach ($grade as $grade){ ?>
                                <option value="<?php echo($grade->id);?>" ><?php echo($grade->grade);?></option>
                                <?php }?>
                            </select>
                        </td>
                        <td>Warehouse</td>
                        <td>
                            <select id="drpWarehouse_<?php echo($divnumber);?>" name="drpWarehouse[]" class="wrhouse">
                                <option value="0">Select</option>    
                                <?php foreach ($warehouse as $warehouse){ ?>
                                <option value="<?php echo($warehouse->id);?>"><?php echo($warehouse->name);?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    
                    
                </table >
                <table class="gridtable" width="100%" id="tableNormal_<?php echo($divnumber);?>" >
                    <tr>
                        <td colspan="4" align="center"><strong>Normal</strong></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" id="txtNormalBagid" name="txtNormalBagid[]" class="normalBagId" value="<?php echo($divnumber);?>"/>
                            <input type="hidden" id="txtNormalBagTypeId" name="txtNormalBagTypeId" value="1"/>
                        </td>
                       
                        <td><input type="text" id="txtNumOfNormalBag_<?php echo($divnumber);?>" name="txtNumOfNormalBag[]" class="txtNumOfNormalBag" value=""/>[Bags]</td>
                        <td><input type="text" id="txtNumOfNormalNet_<?php echo($divnumber);?>" name="txtNumOfNormalNet[]" class="txtNumOfNormalNet" value=""/>[Kgs/bag]</td>
                        <td><input type="text" id="txtNumOfNormalChess_<?php echo($divnumber);?>" name="txtNumOfNormalChess[]" value=""/></td>
                    </tr>
                </table>
                <table class="gridtable" width="100%" id="sampleBag_<?php echo($divnumber);?>">
                    <tr>
                        <td colspan="4" align="center">
                            <strong>Sample</strong>
                            <img src="<?php echo base_url(); ?>application/assets/images/add_sample.jpg" id="sample_<?php echo($divnumber); ?>" class="samplebag"/>
                            <input type="hidden" name="txtSampleBagPurID[]" value="<?php echo($divnumber);?>"/><!--hidden div number for details save-->
                        </td>
                    </tr>
                    
                </table>
                <table class="gridtable" width="100%">
                   
                        <tr>
                            <td>Total Weight</td>
                            <td><input type="text" readonly="" id="DtltotalWeight_<?php echo($divnumber);?>" class="dtlTotalWght" name="DtltotalWeight[]" value=""/></td>
                            <td>Total Value</td>
                            <td><input type="text" readonly="" id="DtltotalValue_<?php echo($divnumber);?>" name="DtltotalValue[]" value=""/></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Tea Cost/Kg</td>
                            <td><input type="text" readonly="" id="DtlteaCost_<?php echo($divnumber);?>" class="DtlteaCost" name="DtlteaCost[]" value=""/></td>
                        </tr>
                       
                </table>
        </div>           
 </div>

