<html>
<body>
<?php

if (isset($_GET["action"]) == "get_student")
{
    $student_info = file_get_contents('http://localhost:8888/vebservisi/api.php?action=get_student&id=' . $_GET["id"]);

    $student_info = json_decode($student_info, true);

?>

First Name : <?php echo $student_info["first_name"] ?><br />
Last Name : <?php echo $student_info["last_name"] ?><br />
Address : <?php echo $student_info["address"] ?><br />

<?php

}

else
{
    $student_list = file_get_contents('http://localhost:8888/vebservisi/api.php?action=get_student_list');

    $student_list = json_decode($student_list, true);

?>

<?php foreach ($student_list as $student): ?>

<a href=<?php echo
"http://localhost:8888/vebservisi/rest_client.php?action=get_student&id=" . $student["id"] ?>><?php echo $student["name"] ?> </a><br />

<?php endforeach; ?>

<?php
} ?>

</body>
</html>