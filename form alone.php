<?php
/*


Use this , If you like to include this form inside  your php webpage 
Before you start , include the below links  inside  <head> </head> of you main website php file


<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='css/style.css' rel='stylesheet' type='text/css'>

*/

?>




<?php
session_start();
//initialise the session variables
if( !isset($_SESSION['index']) ){$_SESSION['index']=0; $_SESSION['score1']=0;$_SESSION['score2']=0;$_SESSION['score3']=0;$_SESSION['score4']=0;  }
?>



<?php
//If the user answered a question
if( isset($_POST['Answered'])  && isset($_POST['radio'])  && $_POST['radio']!=''  ){

	$c=$_SESSION['index'];	
	
	 if($c>=0  && $c< 38){ $_SESSION['score1']+=$_POST['radio']; }
else if($c>=38 && $c< 43){ $_SESSION['score2']+=$_POST['radio']; }
else if($c>=43 && $c< 53){ $_SESSION['score3']+=$_POST['radio']; }
else if($c>=53 && $c< 55){ $_SESSION['score4']+=$_POST['radio']; }
//else { echo "OVER"; }

$_SESSION['index']++;
}
?>



<?php
// initilising the variables
$c=$_SESSION['index'];
$s1=$_SESSION['score1'];
$s2=$_SESSION['score2'];
$s3=$_SESSION['score3'];
$s4=$_SESSION['score4'];
?>




<div class="form-style-8">
<h2>
	  <?php
		// Setting the heading of the form dynamically
		 if($c>=0 && $c< 38){echo "SECTION 1: SYMPTOM FREQUENCY SCORE: ".$s1;}
	else if($c>=38 && $c< 43){echo "SECTION 2: MOST COMMON LYME SYMPTOMS SCORE: ".$s2;}
	else if($c>=43 && $c< 53){echo "SECTION 3: LYME INCIDENCE SCORE: ".$s3;}
	else if($c>=53 && $c< 55){echo "SECTION 4: OVERALL HEALTH SCORE: ".$s4;}
	else{echo "RESULT"; }
	  ?> 
</h2>

  
  <div>
  <label style="border:0px;">
  <?php
  //Setting the Questions 
  if($c>=0 && $c<55){echo "Q.".($c+1)."  ";
	 if($c==0){echo "Unexplained fevers, sweats, chills, or flushing"."?"; }
else if($c==1){echo "Unexplained weight change; loss or gain"."?"; }
else if($c==2){echo "Fatigue, tiredness"."?"; }
else if($c==3){echo "Unexplained hair loss"."?"; }
else if($c==4){echo "Swollen glands"."?"; }
else if($c==5){echo "Sore throat"."?"; }
else if($c==6){echo "Testicular or pelvic pain"."?"; }
else if($c==7){echo "Unexplained menstrual irregularity"."?"; }
else if($c==8){echo "Unexplained breast milk production; breast pain"."?"; }
else if($c==9){echo "Irritable bladder or bladder dysfunction"."?"; }
else if($c==10){echo "Sexual dysfunction or loss of libido"."?"; }
else if($c==11){echo "Upset stomach"."?"; }
else if($c==12){echo "Change in bowel function (constipation or diarrhea)"."?"; }
else if($c==13){echo "Chest pain or rib soreness"."?"; }
else if($c==14){echo "Shortness of breath or cough"."?"; }
else if($c==15){echo "Heart palpitations, pulse skips, heart block"."?"; }
else if($c==16){echo "History of a heart murmur or valve prolapse"."?"; }
else if($c==17){echo "Joint pain or swelling"."?"; }
else if($c==18){echo "Stiffness of the neck or back"."?"; }
else if($c==19){echo "Muscle pain or cramps"."?"; }
else if($c==20){echo "Twitching of the face or other muscles"."?"; }
else if($c==21){echo "Headaches"."?"; }
else if($c==22){echo "Neck cracks or neck stiffness"."?"; }
else if($c==23){echo "Tingling, numbness, burning, or stabbing sensations"."?"; }
else if($c==24){echo "Facial paralysis (Bell's palsy)"."?"; }
else if($c==25){echo "Eyes/vision: double, blurry"."?"; }
else if($c==26){echo "Ears/hearing: buzzing, ringing, ear pain"."?"; }
else if($c==27){echo "Increased motion sickness, vertigo"."?"; }
else if($c==28){echo "Light-headedness, poor balance, difficulty walking"."?"; }
else if($c==29){echo "Tremors"."?"; }
else if($c==30){echo "Confusion, difficulty thinking"."?"; }
else if($c==31){echo "Difficulty with concentration or reading"."?"; }
else if($c==32){echo "Forgetfulness, poor short-term memory"."?"; }
else if($c==33){echo "Disorientation: getting lost; going to wrong places"."?"; }
else if($c==34){echo "Difficulty with speech or writing"."?"; }
else if($c==35){echo "Mood swings, irritability, depression"."?"; }
else if($c==36){echo "Disturbed sleep: too much, too little, early awakening"."?"; }
else if($c==37){echo "Exaggerated symptoms or worse hangover from alcohol"."?"; }


else if($c==38){echo "Did you rate severe for : "."Fatigue"."?"; }
else if($c==39){echo "Did you rate severe for : "."Forgetfulness, poor short-term memory"."?"; }
else if($c==40){echo "Did you rate severe for : "."Joint pain or swelling"."?"; }
else if($c==41){echo "Did you rate severe for : "."Tingling, numbness, burning, or stabbing sensations"."?"; }
else if($c==42){echo "Did you rate severe for : "."Disturbed sleep: too much, too little, early awakening"."?"; }



else if($c==43){echo "Have  "."You have had a tick bite with no rash or flulike symptoms"."?";}
else if($c==44){echo "Have "."You have had a tick bite, an erythema migrans, or an undefined rash, followed by flulike symptoms."."?"; }
else if($c==45){echo "Do "."You live in what is considered a Lyme-endemic area"."?"; }
else if($c==46){echo "Do "."You have a family member who has been diagnosed with Lyme and/or other tick-borne infections"."?"; }
else if($c==47){echo "Do "."You experience migratory muscle pain."."?"; }
else if($c==48){echo "Do "."You experience migratory joint pain."."?"; }
else if($c==49){echo "Do "."You experience tingling/burning/numbness that migrates and/or comes and goes"."?"; }
else if($c==50){echo "Have "."You have received a prior diagnosis of chronic fatigue syndrome or fibromyalgia."."?"; }
else if($c==51){echo "Have "."You have received a prior diagnosis of a specific autoimmune disorder (lupus, MS, or rheumatoid arthritis), or of a nonspecific autoimmune disorder."."?"; }
else if($c==52){echo "Did "."You have had a positive Lyme test (IFA, ELISA, Western blot, PCR, and/or borrelia culture)"."?"; }

else if($c==53){echo "Thinking about your overall physical health, for how many of the past thirty days was your physical health not good?________ days"."?"; }
else if($c==54){echo "Thinking about your overall mental health, for how many days during the past thirty days was your mental health not good?________ days"."?"; }
}else{
	//the result Statement
	$total=$s1+$s2+$s3+$s4;
	if($total>=46){echo "You Have a High Probability of a Tick-Borne Disorder!"; }
	else if($total>=21 && $total<=45 ){echo "You Possibly Have a Tick-Borne Disorder."; }
	else if($total<21){echo "You are not Likely To Have a Tick-Borne Disorder."; }
}
		   		   
?>

<?php
//setting 4 LABEL_Name , OptionValue and OptionVisibility

	$tvVisible="display: none;";
	$buttonName="NEXT";

	 if($c>=0  && $c< 38){ 
		$optionValue1=0;
		$optionValue2=1;
		$optionValue3=2;
		$optionValue4=3;
		
		$LabelName1="None";
		$LabelName2="Mild";
		$LabelName3="Moderate";
		$LabelName4="Severe";

		$optVisible1="display: block;";
		$optVisible2="display: block;";
		$optVisible3="display: block;";
		$optVisible4="display: block;";
	 }
	else if($c>=38 && $c< 43){ 
		$optionValue1=0;
		$optionValue2=5;	
		
		$LabelName1="No";
		$LabelName2="Yes";
		
		$optVisible1="display: block;";
		$optVisible2="display: block;";
		$optVisible3="display: none;";
		$optVisible4="display: none;";

	}
	else if($c>=43 && $c< 53){ 

		$LabelName1="No";
		$LabelName2="Yes";
		
		$optVisible1="display: block;";
		$optVisible2="display: block;";
		$optVisible3="display: none;";
		$optVisible4="display: none;";
		
		$optionValue1=0;
		
			 if($c==43){$optionValue2=3; }
		else if($c==44){$optionValue2=5; }
		else if($c==45){$optionValue2=2; }
		else if($c==46){$optionValue2=1; }
		else if($c==47){$optionValue2=4; }
		else if($c==48){$optionValue2=4; }
		else if($c==49){$optionValue2=4; }
		else if($c==50){$optionValue2=3; }
		else if($c==51){$optionValue2=3; }
		else if($c==52){$optionValue2=5; }
			
	}
	else if($c>=53 && $c<55 ){
		
		$LabelName1="0 to 5 days";
		$LabelName2="6 to 12 days";
		$LabelName3="13 to 20 days";
		$LabelName4="21 to 30 days";
		
		$optVisible1="display: block;";
		$optVisible2="display: block;";
		$optVisible3="display: block;";
		$optVisible4="display: block;";
		
		$optionValue1=1;
		$optionValue2=2;
		$optionValue3=3;
		$optionValue4=4;

	}
	else{
		//FormElements are   hidden 
		$LabelName1="";
		$LabelName2="";
		$LabelName3="";
		$LabelName4="";
		
		$optVisible1="display: none;";
		$optVisible2="display: none;";
		$optVisible3="display: none;";
		$optVisible4="display: none;";
		
		$optionValue1='';
		$optionValue2='';
		$optionValue3='';
		$optionValue4='';
		
		
		
		$tvLabel1='Section 1 Total: '.$s1." ";
		$tvLabel2='Section 2 Total: '.$s2." ";
		$tvLabel3='Section 3 Total: '.$s3." ";
		$tvLabel4='Section 4 Total: '.$s4." ";
		$tvLabel5='Final Score    : '.$total." ";
		
		
		$tvVisible="display: block;";
		
		$buttonName="REPEAT";
		
		//Reset SESSION Variables if the quiz is over
		$_SESSION['index']=0;
		$_SESSION['score1']=0;
		$_SESSION['score2']=0;
		$_SESSION['score3']=0;
		$_SESSION['score4']=0;
	
		
	}
	

?>


  </label>
  </div>
   <form action=""  method="POST" >
   
					<!-- Options for The Form -->
					<div style="<?php echo $optVisible1;?>" >
					<input type="radio" name="radio" value="<?php echo $optionValue1; ?>"  id="radio1" class="radio" checked/>
					<label for="radio1"><?php echo $LabelName1;?></label>
					</div>

					<div style="<?php echo $optVisible2;?>" >
					<input type="radio" name="radio" value="<?php echo $optionValue2; ?>" id="radio2" class="radio"/>
					<label for="radio2"><?php echo $LabelName2;?></label>
					</div>

					<div style="<?php echo $optVisible3;?>" >	
					<input type="radio" name="radio" value="<?php echo $optionValue3; ?>" id="radio3" class="radio"/>
					<label for="radio3"><?php echo $LabelName3;?></label>
					</div>

					<div style="<?php echo $optVisible4;?>" >	
					<input type="radio" name="radio" value="<?php echo $optionValue4; ?>" id="radio4" class="radio"/>
					<label for="radio4"><?php echo $LabelName4;?></label>
					</div>
					
					
					<!-- RESULT TEXT FIELDS -->
					<div style="<?php echo $tvVisible;?>">
					<input disabled type="radio" name="radio" class="radio"/>
					<label><?php echo $tvLabel1;?></label>
					</div>
					
					<div style="<?php echo $tvVisible;?>">
					<input disabled type="radio" name="radio"  class="radio"/>
					<label><?php echo $tvLabel2;?></label>
					</div>
					
					<div style="<?php echo $tvVisible;?>">
					<input disabled type="radio" name="radio" class="radio"/>
					<label><?php echo $tvLabel3;?></label>
					</div>
					
					<div style="<?php echo $tvVisible;?>">
					<input disabled type="radio" name="radio"  class="radio"/>
					<label><?php echo $tvLabel4;?></label>
					</div>
					
					<div style="<?php echo $tvVisible;?>">
					<input disabled type="radio" name="radio" class="radio"/>
					<label><?php echo $tvLabel5;?></label>
					</div>
					
					
					<!--Button -->
					<div  style="margin: 50px 50px -50px;">	
					<input type="submit" name="Answered" value="<?php echo $buttonName;?>" />
					</div>
	

	
  </form>
</div>


