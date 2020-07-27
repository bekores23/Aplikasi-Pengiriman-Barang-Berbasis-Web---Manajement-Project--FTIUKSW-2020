<?php
    function get_distance($lat1, $lon1, $lat2, $lon2){
        $R = 6371;
        $dLat = ($lat2 - $lat1) * pi() / 100;
        $dLon = ($lon2 - $lon1) * pi() / 100;
        $a = (sin($dLat/2) * sin($dLat/2)) + (sin($dLon/2) * sin($dLon/2) * cos($lat1) * cos($lat2));
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return $R * $c;
    }

    function calculate_price($lat1, $lon1, $lat2, $lon2, $weight, $delivery, $package){
        $price = 0;
        $c = get_distance($lat1, $lon1, $lat2, $lon2);

        $price+=($c*$weight);
        switch($delivery){
            case 'Reguler':
                $price+=($c * 15);
                break;
            case 'Express':
                $price+=($c * 20);
                break;
            default:
                $price+=($c * 0);
                break;
        }
        
        switch($package){
            case 'Amplop':
                $price+=0;
                break;
            case 'Bubble Wrap':
                $price+=2000;
                break;
            case 'Kardus':
                $price+=5000;
                break;
            case 'Peti Kayu':
                $price+=20000;
                break;
            default:
                $price-=$price;
                break;
        }
        return money_format(round($price / 100) * 100);
    }

    function calculate_duration($delivery){
        if ($delivery == "Express") {
            return '1 - 2 Hari';
        }
        return '3 - 5 Hari';
    }

    function money_format($amount){
        $result = number_format($amount, 2, ',', '.');
        return $result;
    }
?>