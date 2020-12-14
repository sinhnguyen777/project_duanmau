<?php

function checkuser($user, $pass){
    $sql = "SELECT * FROM user WHERE user='".$user."' AND pass='".$pass."' ";
    // echo sprintf($sql, mysql_real_escape_string($user), mysql_real_escape_string($pass));
    return queryOne($sql);
}

?>