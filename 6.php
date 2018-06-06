<?php
$array = $_POST['array'];
$array = explode(",", $array);

if($_POST['category'] != NULL){
	unset($array[$_POST['category']]);
	$array = array_values($array);
} 

if(count($array) > 2){
	$fun1 = $array[0]."_".$array[1];
	$array = implode(",", $array);
	
	call_user_func($fun1,$array);

	
} else {
	echo "cat_1=".$cat_1 = $array[0];
	echo "<br>";
	echo "cat_2=".$cat_2 = $array[1];
}

function real_ecologic($array){
	echo "Preferi mai mult cifrele decat protejarea naturii?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="real" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="ecologic" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function real_national($array){
	echo "Preferi mai mult detaliile tehnice decat ai un program strict de lucru?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="real" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="national" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function real_talent($array){
	echo "Preferi mai mult cifrele decat sa canti la un instrument?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="real" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="talent" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function real_uman($array){
	echo "Preferi mai mult calculele decat sa analizezi aspectele vietii?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="real" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="uman" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function ecologic_national($array){
	echo "Te preocupa mai mult securitatea nationala decat defrisarile si efectul lor asupra mediului?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="ecologic" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="national" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function national_ecologic($array){
	echo "national ecologic";
	echo "<br/>";
	echo '<input type="radio" name="question" value="national" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="ecologic" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function national_talent($array){
	echo "Preferi mai mult un program strict de lucru decat unul care implica un grad mare de creativitate?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="national" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="talent" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function national_uman($array){
	echo "Te pasioneaza mai mult subiectele legate de spionaj decat sa analizezi aspectele vietii?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="national" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="uman" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function ecologic_talent($array){
	echo "Preferi sa citesti despre poluare si combatarea ei mai mult decat sa studiezi muzica?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="ecologic" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="talent" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function ecologic_uman($array){
	echo "Te pasioneaza mai mult fauna si flora decat sa analizize relatiile interumane?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="ecologic" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="uman" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}

function talent_uman($array){
	echo "Preferi maimult sa canti la un instrument decat predai un anumit subiect?";
	echo "<br/>";
	echo '<input type="radio" name="question" value="talent" class="remove" data-category="1" data-array="'.$array.'"> Yes';
	echo '<input type="radio" name="question" value="uman" class="remove"  data-category="0" data-array="'.$array.'"> No';
	exit;
}
?>