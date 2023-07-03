<?php

function countryVerify($country) {
    $arr = array(
        "Sri Lanka",
        "Canada",
        "Australia",
        "France",
        "Other"
    );

    if ($country == "get") {
        return $arr;
    }
    else {
        if (in_array($country, $arr)) {
            return true;
        }
        else {
            return false;
        }
    }
}

?>
