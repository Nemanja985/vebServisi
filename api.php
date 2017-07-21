<?php

function get_student_info($id)
{
    $student_info = [];

    switch ($id)
    {
        case 1:
            $student_info = ["first_name" => "Dale", "last_name" => "Cooper", "address" => "123 Main St Yakima, WA"];
            break;
        case 2:
            $student_info = ["first_name" => "Harry", "last_name" => "Truman", "address" => "123 Main St Yakima, WA"];
            break;
        case 3:
            $student_info = ["first_name" => "Shelly", "last_name" => "Johnson", "address" => "123 Main St Yakima, WA"];
            break;
        case 4:
            $student_info = ["first_name" => "Bobby", "last_name" => "Brigs", "address" => "123 Main St Yakima, WA"];
            break;
        case 5:
            $student_info = ["first_name" => "Donna", "last_name" => "Hayward", "address" => "123 Main St Yakima, WA"];
            break;
    }

    return $student_info;
}

function get_student_list()
{
    $student_list = [
        ["id" => 1, "name" => "Dale Cooper"],
        ["id" => 2, "name" => "Harry Truman"],
        ["id" => 3, "name" => "Shelly Johnson"],
        ["id" => 4, "name" => "Bobby Brigs"],
        ["id" => 5, "name" => "Donna Hayward"],
    ];

    return $student_list;
}

if (isset($_GET["action"]))
{
    switch ($_GET["action"])
    {
        case "get_student_list":
            $value = get_student_list();
            break;

        case "get_student":
            $value = get_student_info($_GET["id"]);
            break;
    }
}

exit(json_encode($value));