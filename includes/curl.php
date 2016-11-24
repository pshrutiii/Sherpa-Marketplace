<?php
    function get_data($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    $top6Visits = array();
    $id = array();
    $title = array();
    $page_url = array();
    $img_url = array();
    $avg_rating = array();
    $author = array();
    function findMostVisitedPg($ash_rows, $shruti_rows, $ami_rows, $aj_rows, $manu_rows, $hiral_rows){ 
        $allVisits = array();
        for($i=0; $i<10; $i++){
            global $top6Visits;
            array_push($allVisits, $ash_rows[$i][7]);
            array_push($allVisits, $shruti_rows[$i][7]);
            array_push($allVisits, $aj_rows[$i][7]);
            array_push($allVisits, $ami_rows[$i][7]); 
            array_push($allVisits, $manu_rows[$i][7]);
            array_push($allVisits, $hiral_rows[$i][7]);
        }
        arsort($allVisits);
        $count = 0;
        foreach ($allVisits as $key => $val) {
            // to save TOP 6 most visited pages
            if($count < 6){
                array_push($top6Visits, $val);
            }            
            $count++;
        }   

        for($i=0; $i<count($top6Visits); $i++){
            for($j=0; $j<10; $j++){
                global $id;
                global $title;
                global $page_url;
                global $img_url;
                global $avg_rating;
                global $author;
                if($ash_rows[$j][7] == $top6Visits[$i]){
                    array_push($id, $ash_rows[$j][0]);
                    array_push($title, $ash_rows[$j][1]);
                    array_push($page_url, $ash_rows[$j][2]);
                    array_push($img_url, $ash_rows[$j][3]);
                    array_push($author, "Ashutosh Singh");
                    array_push($avg_rating, $ash_rows[$j][9]);            
                }elseif($shruti_rows[$j][7] == $top6Visits[$i]){
                    array_push($id, $shruti_rows[$j][0]);
                    array_push($title, $shruti_rows[$j][1]);
                    array_push($page_url, $shruti_rows[$j][2]);
                    array_push($img_url, $shruti_rows[$j][3]);
                    array_push($author, "Shruti Padmanabhan");
                    array_push($avg_rating, $shruti_rows[$j][9]);         
                }elseif($aj_rows[$j][7] == $top6Visits[$i]){
                    array_push($id, $aj_rows[$j][0]);
                    array_push($title, $aj_rows[$j][1]);
                    array_push($page_url, $aj_rows[$j][2]);
                    array_push($img_url, $aj_rows[$j][3]);
                    array_push($author, "Anthony Bell");
                    array_push($avg_rating, $aj_rows[$j][9]);         
                }elseif($manu_rows[$j][7] == $top6Visits[$i]){
                    array_push($id, $manu_rows[$j][0]);
                    array_push($title, $manu_rows[$j][1]);
                    array_push($page_url, $manu_rows[$j][2]);
                    array_push($img_url, $manu_rows[$j][3]);
                    array_push($author, "Manu Barsainyan");
                    array_push($avg_rating, $manu_rows[$j][9]);           
                }elseif($hiral_rows[$j][7] == $top6Visits[$i]){
                    array_push($id, $hiral_rows[$j][0]);
                    array_push($title, $hiral_rows[$j][1]);
                    array_push($page_url, $hiral_rows[$j][2]);
                    array_push($img_url, $hiral_rows[$j][3]);
                    array_push($author, "Hiral Parikh");
                    array_push($avg_rating, $hiral_rows[$j][9]);          
                }else{                                       
                    array_push($id, $ami_rows[$j][0]);
                    array_push($title, $ami_rows[$j][1]);
                    array_push($page_url, $ami_rows[$j][2]);
                    array_push($img_url, $ami_rows[$j][3]);
                    array_push($author, "Ami Patel");
                    array_push($avg_rating, $ami_rows[$j][9]); 
                }
            }
        }
    }


    // Individual URLs to cURL
    $ash_url = "http://codewarriors.herokuapp.com/services/allservices.php";
    $shruti_url = "http://smedia.herokuapp.com/services/allservices.php";
    $aj_url = "http://cleanercity.co/allservices.php";
    $ami_url = "http://sign-privilege.000webhostapp.com/searchServices.php"; 
    $manu_url = "http://agentimmobilier.000webhostapp.com/getproducts.php";
    $hiral_url = "http://hiralparikh.000webhostapp.com/allservices.php";

    //cURL each of the URLs
    $ash_result = get_data($ash_url);
    $shruti_result = get_data($shruti_url);
    $aj_result = get_data($aj_url);
    $ami_result = get_data($ami_url);
    $manu_result = get_data($manu_url);
    $hiral_result = get_data($hiral_url);

    // contains all products & services in each of those sites
    $ash_rows = json_decode($ash_result);
    $shruti_rows = json_decode($shruti_result);
    $aj_rows = json_decode($aj_result);
    $ami_rows = json_decode($ami_result);
    $manu_rows = json_decode($manu_result);
    $hiral_rows = json_decode($hiral_result);

    
    // Initial testing
    // printf("<table>");
    // for($i=0;$i<count($ami_rows);$i++){
    //     echo "<tr><th>Title</th><th>Page URL</th><th>Image URL</th><th>Description</th><th>Star Count</th><th>Num of Ratings</th><th>Visits Count</th><th>Cost</th></tr>"; 
    //     echo "<tr><td>".$ami_rows[$i][1]. //title
    //         "</td><td>".$ami_rows[$i][2]. //page_url
    //         "</td><td>".$ami_rows[$i][3]. //image_url
    //         "</td><td>".$ami_rows[$i][4]. //description
    //         "</td><td>".$ami_rows[$i][5]. //total_rating
    //         "</td><td>".$ami_rows[$i][6]. //num_rating
    //         "</td><td>".$ami_rows[$i][7]. //visit
    //         "</td><td>".$ami_rows[$i][8]. //cost
    //         "</td></tr>";
    // }
    // printf("</table>");
?>