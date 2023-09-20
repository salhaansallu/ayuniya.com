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

function productURL($pro_id, $pro_name)
{
    return "https://store.ayuniya.com/product/" . $pro_id . "/" . str_replace(' ', '-', strtolower($pro_name));
}

function validate_image($url)
{
    return 'https://store.ayuniya.com/assets/images/products/' . $url;
}

?>
