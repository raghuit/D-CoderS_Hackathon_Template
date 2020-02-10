<?php

if(!$conn=mysqli_connect("localhost","root","root","news_db"))
{
	die("Database Died");
}

function filter($data,$conn) { //Filters data against security risks.
    if (is_array($data)) {
        foreach ($data as $key => $element) {
            $data[$key] = filter($element);
        }
    } else {
        $data = trim(htmlentities(strip_tags($data)));
        if(get_magic_quotes_gpc()) $data = stripslashes($data);
        $data = mysqli_real_escape_string($conn,$data);
    }
    return $data;
}
?>