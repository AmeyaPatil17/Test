<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

$First_name = array_column($people, 'first_name');
	//print_r($First_name);
	foreach($First_name as $key => $value) {
    $key = 'f_name' . $key;
    $$key = $value;

    // OR (condensed version)
    // ${"something{$key}"} = $value;
}
$Last_name = array_column($people, 'last_name');
	  //print_r($Last_name);
	foreach($Last_name as $key => $value) {
    $key = 'l_name' . $key;
    $$key = $value;

    // OR (condensed version)
    // ${"something{$key}"} = $value;
}

$Email = array_column($people, 'email');
	  //print_r($Last_name);
	foreach($Email as $key => $value) {
    $key = 'email' . $key;
    $$key = $value;

    // OR (condensed version)
    // ${"something{$key}"} = $value;
}
//echo $f_name0;
//echo $l_name0;
//echo $email0;

echo "<table border='1' style='border-collapse: 
    collapse;border-color: silver;'>";  
    echo "<tr style='font-weight: bold;'>";  
    echo "<td width='150' align='center'>First Name</td>";
	echo "<td width='150' align='center'>Last Name</td>";
	echo "<td width='150' align='center'>Email</td>";	
	echo "</tr>";    
    echo '<td width="150" align=center>' . $f_name0 . '</td>';
	echo '<td width="150" align=center>' . $l_name0 . '</td>';
	echo '<td width="150" align=center>' . $email0 . '</td>';
	echo '<td width="150" align=center><input id="clickMe" type="button" value="clickme" onclick="doFunction1();" /></td>';
	$PHPtext1 = "Hello ".$f_name0." ".$l_name0."! Email: " .$email0.".";
    echo '</tr>';
	echo "</tr>";    
    echo '<td width="150" align=center>' . $f_name1 . '</td>';
	echo '<td width="150" align=center>' . $l_name1 . '</td>';
	echo '<td width="150" align=center>' . $email1 . '</td>';
	echo '<td width="150" align=center><input id="clickMe" type="button" value="clickme" onclick="doFunction2();" /></td>';
	$PHPtext2 = "Hello ".$f_name1." ".$l_name1."! Email: " .$email1.".";
    echo '</tr>';
	echo "</tr>";    
    echo '<td width="150" align=center>' . $f_name2 . '</td>';
	echo '<td width="150" align=center>' . $l_name2 . '</td>';
	echo '<td width="150" align=center>' . $email2 . '</td>';
	echo '<td width="150" align=center><input id="clickMe" type="button" value="clickme" onclick="doFunction3();" /></td>';
	$PHPtext3 = "Hello ".$f_name2." ".$l_name2."! Email: " .$email2.".";
    echo '</tr>';
	echo "</tr>";    
    echo '<td width="150" align=center>' . $f_name3 . '</td>';
	echo '<td width="150" align=center>' . $l_name3 . '</td>';
	echo '<td width="150" align=center>' . $email3 . '</td>';
	echo '<td width="150" align=center><input id="clickMe" type="button" value="clickme" onclick="doFunction4();" /></td>';
	$PHPtext4 = "Hello ".$f_name3." ".$l_name3."! Email: " .$email3.".";
    echo '</tr>';
	echo "</tr>";    
    echo '<td width="150" align=center>' . $f_name4 . '</td>';
	echo '<td width="150" align=center>' . $l_name4 . '</td>';
	echo '<td width="150" align=center>' . $email4 . '</td>';
	echo '<td width="150" align=center><input id="clickMe" type="button" value="clickme" onclick="doFunction5();" /></td>';
	$PHPtext5 = "Hello ".$f_name4." ".$l_name4."! Email: " .$email4.".";
    echo '</tr>';
	  
     

?>
<script type="text/javascript">
var JavaScriptAlert1 = <?php echo json_encode($PHPtext1); ?>;
var JavaScriptAlert2 = <?php echo json_encode($PHPtext2); ?>;
var JavaScriptAlert3 = <?php echo json_encode($PHPtext3); ?>;
var JavaScriptAlert4 = <?php echo json_encode($PHPtext4); ?>;
var JavaScriptAlert5 = <?php echo json_encode($PHPtext5); ?>;

function doFunction1() { alert(JavaScriptAlert1); };
function doFunction2() { alert(JavaScriptAlert2); };
function doFunction3() { alert(JavaScriptAlert3); };
function doFunction4() { alert(JavaScriptAlert4); };
function doFunction5() { alert(JavaScriptAlert5); };
	  
	  </script>