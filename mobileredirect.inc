<?php
function isMobileUserAgent() {   
    $mobileUAStrings = array("android", "iphone", "ipad", "blackberry", "htc",
        "webos", "nokia", "opera mini", "pantech", "palm", "nintendo", 
        "playstation", "iemobile", "amoi", "au-mic", "audiovox", "benq", "brew", 
        "cellphone", "ipaq", "kwc-", "lg-", "lg/", "lge-", "mda", "midp", 
        "mobilephone", "mot-", "motorola", "palm", "panasonic", "philips", 
        "pocket pc", "portalmmm", "sagem", "samsung", "sanyo", "sch-", "sda", 
        "sgh-", "sharp", "smartphone", "sonyericsson", "symbian", "up.browser", 
        "vodafone", "windows ce", "xda", "zte-", "webos", "240x320");
    
    $lowerCaseUserAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    
    foreach ($mobileUAStrings as $mobileUA) {
        if (strpos($lowerCaseUserAgent, $mobileUA)) {
            return(true);
        }
    }
    
    return(false);
}

function redirectMobileUser($redirectBaseURL, $retainPagePath, $retainQueryParameters) {
    if (isMobileUserAgent()) {
        $redirectString = "Location: " . $redirectBaseURL;
        if ($retainPagePath) {
            $redirectString = $redirectString . $_SERVER['PHP_SELF'];
        }
        
        if (($retainQueryParameters) && (strlen($_SERVER['QUERY_STRING']) > 0)) { 
            $redirectString = $redirectString . "?" . $_SERVER['QUERY_STRING'];
        } else {
            // no nothing
        }   
        
        header($redirectString);
    }
}
?>
