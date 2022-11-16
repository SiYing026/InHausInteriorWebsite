
<?php
include_once "php/config.php";
echo '<link rel="stylesheet" href="css/js.css">';

    if(!empty($_POST['expectation']) &&
    !empty($_POST['workAgn']) &&
    !empty($_POST['compare']) &&
    !empty($_POST['communication']) &&
    !empty($_POST['explain']) &&
    !empty($_POST['goal']) &&
    !empty($_POST['comment']) &&
    !empty($_POST['comment2']) ){
        
    
    $cust_id = 1;
    $expectation = $_POST['expectation'];
    $workAgn = $_POST['workAgn'];
    $compare = $_POST['compare'];
    $communication = $_POST['communication'];
    $explain = $_POST['explain'];
    $goal = $_POST['goal'];
    $comment = $_POST['comment'];
    $comment2 = $_POST['comment2'];
    $currentDate = date("d-m-y");

    $project_id = 1;


$queryInsert = mysqli_query($conn, "INSERT INTO feedback(feedback_id, feedback_date, project_id, cust_id, expectation, workAgn, compare, communication, explanation, goal, comment, comment2)
                        VALUES (0, '$currentDate', '$project_id', '$cust_id', '$expectation', '$workAgn', '$compare', '$communication', '$explain', '$goal', '$comment', '$comment2')");

echo '<div class="container test">';
echo ' <div class="success-block">';
echo '<svg class="icon success-icon" aria-hidden="true" xmlns:xlink="http://www.w3.org/1999/xlink">';
echo '<use xlink:href="#check"></use>';
echo '</svg>';
echo '<div class="title"><span>S</span><span>u</span><span>c</span><span>c</span><span>e</span><span>s</span><span>s</span>';
echo '<br><p style="font-size:2vw">Successfully ubmit ur feedback form! Thank you for you feedback, Have a nice day, bye!</p>';

echo '</div>';
  
echo '</div>';
echo '</div>';
 
echo '<div class="container test">';
echo ' <div class="success-block">';

echo '</div>';
echo '</div>';

}else{
echo "Please fill in all the information in the form! ";
}

mysqli_close($dbc);



?>