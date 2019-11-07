<?php
   include "gironde-init.php";
?>


<html>

<head>
	<meta charset="utf-8">
	<title> STAGE 3 </title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
</head>

<?php gironde_type_stage1();?>
<div class="td_blank"> </div>

<table class="<?php stage_type();?>">
  <table class="table_titre" >
    <tr>
      <td class="td_titre"> STAGE 1 </td>
    </tr>  
  </table>
  
  <table class="table_blank">
    <tr>
      <td></td>
    </tr>  
  </table>
  
  
  <table class="table_outcome" border="1">    
    <tr>
      <td class="td_outcome"> <?php gironde_out_a_1();?> </td>
      <td class="td_outcome"> <?php gironde_out_a_2();?> </td> 
      <td> </td>
      <td class="td_outcome"> OUT B_1 </td>
      <td class="td_outcome"> OUT B_2 </td>   
    </tr>
  </table>
  
  <table class="table_blank">
    <tr>
      <td></td>
    </tr>  
  </table>
  
  <table class="table_pie" border="1">    
    <tr>
      <td class="td_pie"> <?php gironde_pie_lottery_a();?> </td>  
      <td class="td_pie"> PIE LOTTERY B </td>
    </tr>
  </table>
  
  <table class="table_blank">
    <tr>
      <td></td>
    </tr>  
  </table>
  
  <table class="table_legend" border="1">    
    <tr>
      <td class="td_legend"> <?php gironde_legend_lottery_a();?> </td>    
      <td class="td_legend"> LEGEND LOTTERY B </td>
    </tr>
  </table>

  <table class="table_blank">
    <tr>
      <td></td>
    </tr>  
  </table>

  
  
  
  <form action="form-input.php" method="POST">
    
    <table class="table_radio" border="1">    
    <tr>  
      
      <td class="td_radio"> 
        <label class="LOT">
          <input type="radio" name="choice" value="A" > <span> Choisir Loterie A </span>
        </label>
      </td>
            
      <td class="td_radio">  
        <label class="LOT">
          <input type="radio" name="choice" value="B"> <span> Choisir Loterie B </span>
        </label>
      </td>    
        
    </tr>
  </table>
    
    <table class="table_validate" border="1">
      <tr>
          <td class="td_validate">        
          <input type="submit" value="GO" class="style_validate"> 
      </td>
      </tr>
    </table>
    
</form> 
  
</table>
