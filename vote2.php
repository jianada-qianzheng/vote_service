


<?php
    
    // a1y  150127
    // a1x  143824
    // b1x  256714
    // b1y  277036
    // c1y  163059
    // c1x  152524
    // d1x  192996
    // d1y  205904
    // e1x


$vote = $_GET["vote"];
$hukou=$_GET["hukou"];
$age=$_GET["age"];
$sex=$_GET["sex"];
$userGUID = $_GET["userGUID"];
$voteid=$_GET["voteId"];
    
$servername = "localhost";
$username = "service";
$password = "83422zwZ";
$dbname = "vote";

$voteCount1 =(double)0;
$voteCount2 =(double)0;
$voteCount3 =(double) 0;
$voteCount4=(double)0;
    $voteCount5=(double)0;
    $voteCount6=(double)0;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 ="update vote2 set active=0 where user='$userGUID' ";
if ($conn->query($sql1) === TRUE ){
    print("   update vote successfully   ");
}else{
    print  ("update error");

}

$sql = "INSERT INTO vote2 (user, vote,active,id,age,hukou,sex ) VALUES ( '$userGUID','$vote',1,'$voteid','$age','$hukou','$sex' )";


if ($conn->query($sql) === TRUE) {
    print ( "   New record created successfully   ");
} else {
//print ("error");   
 echo "Error: " . $sql . "<br>" . $conn->error;
}

    
    
    
    

  
    $sql2 = "SELECT  count( *) as total  FROM vote2 where  active =1 and hukou>0 and age>19  and sex<3 and (TIMESTAMPDIFF(DAY, date, NOW()) <7)";
    

    $total=(double)0;

    if ($result = mysqli_query($conn, $sql2)){
        if($row = $result->fetch_assoc())  {
            $total=$row["total"];
        }
        
        
    }
    
    $parts=array(
                 
                 array(
                       array(
    277036,
    256714),
     array(
    150127,
    143824),
     array(
    163059,
    152524),
     array(
    205904,
    192996),
     array(
    127003,
    117584),
     array(
    188175,
    174846),
     array(
    34004,
    30899),
     array(
    39351,
    35396),
     array(
    39848,
    35427),
     array(
    93415,
    85973),
     array(
    36275,
    32963),
     array(
    46893,
    41716),
     array(
    35771,
    32164),
     array(
    60144,
    54384),
     array(
    15490,
    14086),
     array(
    23569,
    21607),
     array(
    8834,
    7417),
     array(
    26912,
    24354),
     array(
    28451,
    26639),
     array(
    18913,
    17830),
     array(
    11408,
    11468),
     array(
    1195,
    846)
    ),
            
                 
        array(
                 array(
                 308823,
                 311100),
                 array(
                 190844,
                 213863),
                 array(
                 182860,
                 186079),
                 array(
                 223591,
                 227614),
                 array(
                 147795,
                 144817),
                 array(
                 209897,
                 207846),
                 array(
                 33041,
                 31025),
                 array(
                 43684,
                 42880),
                 array(
                 42763,
                 38983),
                 array(
                 102237,
                 96088),
                 array(
                 36820,
                 32241),
                 array(
                 50391,
                 46293),
                 array(
                 36254,
                 31696),
                 array(
                 61106,
                 55067),
                 array(
                 15698,
                 13796),
                 array(
                 23716,
                 21637),
                 array(
                 8180,
                 7888),
                 array(
                 26130,
                 24403),
                 array(
                 34593,
                 36632),
                 array(
                 18398,
                 19421),
                 array(
                 10261,
                 10462),
                 array(
                 1145,
                 880)
            ),
                 
     array(
                array(
           
                 319678,
                 338531),
                  array(
                 193057,
                 222570),
                  array(
                 177190,
                 183819),
                  array(
                 212747,
                 231004),
                  array(
                 145299,
                 148240),
                  array(
                 222690,
                 231028),
                  array(
                 34276,
                 33901),
                  array(
                 47788,
                 47343),
                  array(
                 42064,
                 38937),
                  array(
                 96320,
                 90773),
                  array(
                 36103,
                 34352),
                  array(
                 54805,
                 49110),
                  array(
                 38898,
                 35344),
                  array(
                 63992,
                 60464),
                  array(
                 17836,
                 15964),
                  array(
                 25235,
                 24619),
                  array(
                 8074,
                 7705),
                  array(
                 28399,
                 28815),
                  array(
                 37094,
                 38993),
                  array(
                 19067,
                 22212),
                  array(
                 10227,
                 10457),
                  array(
                 1184,
                 882)
                   ),
                 
          array(
                array(
                 299818,
                 340729),
                array(
                 183299,
                 212935),
                array(
                 157921,
                 166900),
                 array(
                 200044,
                 219488),
                 array(
                 148238,
                 151238),
                 array(
                 211889,
                 221441),
                 array(
                 36918,
                 35503),
                 array(
                 40813,
                 37609),
                 array(
                 43834,
                 39343),
                 array(
                 96032,
                 89798),
                 array(
                 42160,
                 39014),
                 array(
                 58632,
                 46547),
                 array(
                 46528,
                 37665),
                 array(
                 69906,
                 64909),
                 array(
                 19118,
                 16595),
                 array(
                 26715,
                 25296),
                 array(
                 8523,
                 7511),
                 array(
                 31676,
                 31739),
                 array(
                 30255,
                 31086),
                 array(
                 19467,
                 21239),
                 array(
                 12931,
                 12941),
                 array(
                 1356,
                 878)
                       ),
                 
                 
            array(
                 array(
                 248120,
                 289526),
                array(
                 169988,
                 199647),
                 array(
                 115370,
                 128735),
                 array(
                 152610,
                 168902),
                 array(
                 120536,
                 123289),
                 array(
                 175887,
                 198080),
                 array(
                 28227,
                 28770),
                 array(
                 27681,
                 26683),
                 array(
                 34131,
                 32509),
                 array(
                 77538,
                 76056),
                 array(
                 34025,
                 32747),
                 array(
                 44686,
                 40550),
                 array(
                 36118,
                 32046),
                 array(
                 55146,
                 56181),
                 array(
                 13921,
                 14302),
                 array(
                 21523,
                 22257),
                 array(
                 6505,
                 6154),
                 array(
                 25617,
                 27633),
                 array(
                 21758,
                 24440),
                 array(
                 15272,
                 17124),
                 array(
                 9563,
                 9201),
                 array(
                 992,
                 653)
                ),
                 
        
        array(
                array(
                 143336,
                 176956),
                 array(
                 128836,
                 165082),
                 array(
                 71113,
                 84631),
                 array(
                 93635,
                 115739),
                 array(
                 80282,
                 101928),
                 array(
                 114946,
                 140791),
                 array(
                 22039,
                 27017),
                 array(
                 21617,
                 24720),
                 array(
                 27607,
                 32187),
                 array(
                 57874,
                 73225),
                 array(
                 25693,
                 31449),
                 array(
                 37186,
                 49017),
                 array(
                 29150,
                 37898),
                 array(
                 40505,
                 48298),
                 array(
                 10294,
                 12922),
                 array(
                 15033,
                 18789),
                 array(
                 5059,
                 6235),
                 array(
                 15691,
                 20233),
                 array(
                 14775,
                 19401),
                 array(
                 11138,
                 14864),
                 array(
                 5276,
                 6040),
                 array(
                 443,
                 461)
                )
                 );
    
    
   
    $percentage1=0.00000001;
    $percentage2=0.00000001;
    $percentage3=0.00000001;
    $percentage4=0.00000001;
    $percentage5=0.00000001;
    $percentage6=0.00000001;
    
    $voteCount1=0;
    $voteCount2=0;
    $voteCount3=0;
    $voteCount4=0;
    $voteCount5=0;
    $voteCount6=0;
    

    
    
    for ($age=2;$age<=7;$age++  ){
        
        
        
        
        
        
        for ($city=1;$city<=22;$city++) {
        
            for ($sex=2;$sex>=1;$sex-- ){
                
                $sql2="";
                
                if($age==7){
                     $sql2 = "SELECT vote,  count( *) as votecount  FROM vote2 where active=1 and hukou='$city' and age>69  and sex='$sex' and (TIMESTAMPDIFF(DAY, date, NOW()) <7) group by vote order by vote ";
                }else{
                    $ageRange1=$age*10-1;
                    $ageRange2=$age*10+10;
                
                $sql2 = "SELECT vote,  count( *) as votecount  FROM vote2 where active=1 and hukou='$city' and age>'$ageRange1' and age<'$ageRange2' and sex='$sex' and (TIMESTAMPDIFF(DAY, date, NOW()) <7) group by vote order by vote ";
                }
                $groupCount1=0;
                $groupCount2=0;
                $groupCount3=0;
                $groupCount4=0;
                $groupCount5=0;
                $groupCount6=0;
                $groupTotal=0;
                
                if ($result = mysqli_query($conn, $sql2)){
                    while($row = $result->fetch_assoc())  {
                        print(" read row ");
                        print($sql2);
                    
                        $voteCount=0;
                        $vote=0;
                        $voteCount=$row["votecount"];
                        $vote=$row["vote"];
                        print("part vote");
                        print($vote);
                        if($vote==1){
                            
                            $groupCount1=$voteCount;
                            $groupTotal+=$voteCount;
                        }else if($vote==2) {
                            $groupCount2=$voteCount;
                            $groupTotal+=$voteCount;
                        }else if($vote==3) {
                            $groupCount3=$voteCount;
                            $groupTotal+=$voteCount;
                        }else if($vote==4) {
                            $groupCount4=$voteCount;
                            $groupTotal+=$voteCount;
                        }else if($vote==5) {
                            $groupCount5=$voteCount;
                            $groupTotal+=$voteCount;
                        }else if($vote==6) {
                            $groupCount6=$voteCount;
                            $groupTotal+=$voteCount;
                        }
                        
                    }
                }
                $index = $total*$parts[$age-2][$city-1][$sex-1]/$groupTotal/19286045;
                
                print("index");
                print($index);
                
                print("total");
                print($total);
                
                print("array value");
                
                print($parts[$age-2][$city-1][$sex-1]);
                
                print("group total");
                print($groupTotal);
                $voteCount1+=$groupCount1*$index;
                $voteCount2+=$groupCount2*$index;
                $voteCount3+=$groupCount3*$index;
                $voteCount4+=$groupCount4*$index;
                $voteCount5+=$groupCount5*$index;
                $voteCount6+=$groupCount6*$index;
                
                
            }
        }
    }
    
    print("voteCount2");
    print($voteCount2);
    
    $percentage1=$voteCount1/($voteCount1+$voteCount2+$voteCount3+$voteCount4+$voteCount5+$voteCount6);
    $percentage2=$voteCount2/($voteCount1+$voteCount2+$voteCount3+$voteCount4+$voteCount5+$voteCount6);
    $percentage3=$voteCount3/($voteCount1+$voteCount2+$voteCount3+$voteCount4+$voteCount5+$voteCount6);
    $percentage4=$voteCount4/($voteCount1+$voteCount2+$voteCount3+$voteCount4+$voteCount5+$voteCount6);
    $percentage5=$voteCount5/($voteCount1+$voteCount2+$voteCount3+$voteCount4+$voteCount5+$voteCount6);
    $percentage6=$voteCount6/($voteCount1+$voteCount2+$voteCount3+$voteCount4+$voteCount5+$voteCount6);

    print("perceantage2");
    print($percentage2);
    
    


//$sql2 = "SELECT vote2 , count( *) as total  FROM vote where  active=1 and (TIMESTAMPDIFF(DAY, date, NOW()) <7
//         OR date IS NULL) group by vote ";
//
//// Check if there are results
//if ($result = mysqli_query($conn, $sql2))
//{
// // If so, then create a results array and a temporary one
// // to hold the data
//print("read vote information");
// // Loop through each row in the result set
// while($row = $result->fetch_assoc())
// {
//
//print("while loop");
//if ($row["vote"]==1){
//   $voteCount1=$row["total"];
//  }
//if ($row["vote"]==2){
//
//   $voteCount2=$row["total"];
//  }
//if ($row["vote"]==3){
//   $voteCount3=$row["total"];
//  }
//if ($row["vote"]==4){
//   $voteCount4=$row["total"];
//  }
//
//print(""+$row["total"]);
//}
//
//
//print(""+$voteCount1);
//
//$voteTotal = (double)( $voteCount1 + $voteCount2 +$voteCount3+$voteCount4);
//
//$pencentage1 = $voteCount1/$voteTotal;
//
//$pencentage2 = $voteCount2/$voteTotal;
//
//
//
//$pencentage3 = $voteCount3/$voteTotal;
//
//
//$pencentage4 = $voteCount4/$voteTotal;
    print("percentage");
print (""+$percentage1);
print ((string)$percentage2);
print ((string)$percentage3);
print ((string)$percentage4);


$sql3 ="update candidate2 set vote ='$percentage1',count='$total'   where id =1 ";
if ($conn->query($sql3) === TRUE ){
    print("update candidate 1 vote information successfully");
}else{
    print  ("update 1 error");

}


$sql4 ="update candidate2 set vote ='$percentage2',count='$total'   where id =2 ";
if ($conn->query($sql4) === TRUE ){
    print("update cnadidate 2 vote  successfully");
}else{
    print  ("update error");

}
    print($sql4);



$sql5 ="update candidate2 set vote ='$percentage3',count='$total'   where id =3 ";
if ($conn->query($sql5) === TRUE ){
    print("update candidate 3 vote  successfully");
}else{
    print  ("update error");

}



$sql6 ="update candidate2 set vote ='$percentage4',count='$total'   where id =4 ";
if ($conn->query($sql6) === TRUE ){
    print("update vote successfully");
}else{
    print  ("update error");

} 
// Add each row into our results array
 



$sql7 ="update candidate2 set vote ='$percentage5',count='$total'   where id =5 ";
if ($conn->query($sql7) === TRUE ){
    print("update vote successfully");
}else{
    print  ("update error");

}
    
    
    $sql8 ="update candidate2 set vote ='$percentage6',count='$total'   where id =6 ";
    if ($conn->query($sql8) === TRUE ){
        print("update vote successfully");
    }else{
        print  ("update error");
        
    }


$conn->close();


?>




