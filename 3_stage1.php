<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> STAGE 1 </title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" type="text/css" href="stylesheet_stage1.css">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
</head>
<body>
	<div> 
    Stage 1 
   </div>
   <div>
     Choose the lottery you prefer
   </div>


	<div> To choose the "lottery A" click on the button <span> "choose lottery
     A" </span> 
   </div>
   <div>To choose the "lottery B" click on the button <span> "choose lottery
     B" </span>
   </div>
  
  <div> Once you have chosen your favourite lottery, confirm your choice by
    clicking on the <span>"confirm and go to the next choice" </span>button.
  </div>
  <div>
    This button will redirect you to a new choice situation
  </div>

  <div> Each time you face to a new choice situation take a
    moment to carrefully read what each lottery can offer you
  </div>

  
  <form action="stage1-record-data.php" method="post">
  <table>
    <tr>
      <td>Lottery A</td>
      <td>Lottery B</td>
    </tr>
    <tr>
      <td> 
        By choosing lottery A you can get:
      </td>
      <td> 
        By choosing lottery B you can get: 
      </td>
    </tr>
    <tr>
      <td>
        either <span><?php echo 120-20*0.8; ?></span>&euro; with <span>20</span>%  chance
      </td>
      <td>
        either <span>70&euro; </span> with <span> 50% </span> chance
      </td>
    </tr>
    <tr>
      <td>
        either <span>5&euro; </span> with <span> 80% </span> chance
      </td>
      <td>
        either <span>30&euro; </span> with <span> 50% </span> chance
      </td>
    </tr>

    <tr>
      <td class="tg-pie"><div id="lot_A"> </div></td>
      <td class="tg-pie"><div id="lot_B"> </div></td>
    </tr>
    
    <tr>
      <td>
        <input type="radio" name="choice" value="lot_A"/>
        <label for="radio-one">Choose lottery A </label>
      </td>
      <td>
        <input type="radio" name="choice" value="lot_B"/>
        <label for="radio-two"> Choose lottery B </label>
      </td>
    </tr>

  </table>


  <div> <input type="submit" 
               name="validate" 
               value="Confirm and go to the next choice"/></div>
  </form>


</body>
</html>
