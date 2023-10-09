<?php
error_reporting(1);



date_default_timezone_set('Asia/Yangon');




function time_ago($timestamp){
    $time_upload = strtotime($timestamp);
    $current_time = strtotime('+6 hour +30 minutes',time());
    $time_diff = $current_time - $time_upload;
    $second = $time_diff;
    $minutes = round($second / 60) ; 
    $hour = round($second / 3600);
    $days = round($second / 86400); //86400 seconds in a day
    $weeks = round($second / 604800); // 86400 x 7 
    $months = round($second / 2629400); // value for month
    $years = round($second / 31553280); //vaue for year

    if ($second <= 60){
        return "Just now";
    }
    else if($minutes <= 60){
        if($minutes == 1){
            return "1m ago";
        }else{
            return "$minutes m ago";
        }
    }
    else if($hour <= 24){
        if($hour == 1){
            return "1h ago";
        }else{
            return "$hour hrs ago";
        }
    }
    else if($days <= 7){
        if($days == 1){
            return "1d ago";
        }else{
            return "$days d ago";
        }
    }
    else if($weeks <= 4.3){
        if($weeks == 1){
            return "1w ago";
        }else{
            return "$weeks w ago";
        }
    }
    else if($months <= 12){
        if($months==1){
            return "1m ago";
        }else{
            return "$months m ago";
        }
    }
    else{
        if($years == 1){
            return "1yr ago";
        }else{
            return "$years yrs ago";
        }
    }

}
?>