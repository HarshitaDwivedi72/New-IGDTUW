<?php
    $UPLOADS_DIR='../uploads/';

    function getImportantupdates()
    {
        include ('connect.php');
        $result = mysqli_query($conn,"SELECT * FROM notices order by postingDate desc");
        while($row = mysqli_fetch_array($result))
        {
            if(($row['importantUpdate']==1) && ($row['types'] != 'Pics'))
            {
                $todayDate = date("Y-m-d");
                $expiryDate = $row['expiryDate'];
                $date1 = date_create($todayDate);
                $date2=date_create($expiryDate);
                $diff=date_diff($date1,$date2);
                $dif = $diff->format("%R%a");
                if($dif>=0)
                {
                    echo '<li><a href="'. $UPLOADS_DIR . $row['file'] .'" target="_link">'.$row['Title'].'...</a></li>';
                }
            }
        }
    }// end of getImportantupdates

    function getRecentEvents()
    {
        include ('connect.php');
        $count=1;
        $new=0;
        $result  = mysqli_query($conn,"SELECT * FROM events order by fromDate desc");
        $rowcount = mysqli_num_rows($result);
        // alert($rowcount);
        // echo $rowcount;
        while($row = mysqli_fetch_array($result))
        {
            if($row>0){
                if($count<=5)  
                { 
                    if($todayDate<$expiryDate)
                        {
                            $new++;
    
                        }
                    echo '<li><a href="'. $UPLOADS_DIR . $row['file'] .'" target="_blank"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>'.$row['title'].'</a></li>';
                    $count++; 
                        
                }
            }
        }

    }//end of function getRecentEvents

    function getDynamicAchievements()
    {
        include 'connect.php';
        $count=1;
        $new=0;
        $result =mysqli_query($conn,"SELECT * FROM notices where types='Achievements' order by postingDate desc");
        $rowcount = mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result))
        {
            if($count<=5) 
            {
                echo '<li><a href="'. $UPLOADS_DIR . $row['file'] .'" target="_blank"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>'.$row['Title'].'</a></li>';
                $count++; 
            }
        }

        
    }// end of getDynamicAchievements


    function getDynamicNotices()
    { 
        $count=1;
        $new=0;
        $result     =   mysqli_query($conn,"SELECT * FROM notices where types='Circular' order by postingDate desc");
        $rowcount =mysqli_num_rows($result);
        echo $rowcount;
        while($row = mysqli_fetch_array($result))
        {
            if($row['types']=="Circular")
            {
                $todayDate = date("Y-m-d");
                $expiryDate = $row['expiryDate'];
                $date1 = date_create($todayDate);
                $date2=date_create($expiryDate);
                $diff=date_diff($date1,$date2);
                $dif = $diff->format("%R%a");
    
                if($count<=5)  
                { 
                    if($todayDate<$expiryDate)
                    {
                        $new++;
                    }
                    if($dif>0)
                    {
                        echo '<li><a href="'. $UPLOADS_DIR . $row['file'] .'" target="_blank"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>'.$row['Title'].'</a></li>';
                        $count++; 
                    }
                }
                

            }
        }

        $count1=1;
        if($new<5)
        {  
            $expired = 5-$new;
            $result     =   mysqli_query($conn,"SELECT * FROM notices order by postingDate desc");
            $rowcount   =   mysqli_num_rows($result);
            while($row = mysqli_fetch_array($result))
            {
                if($row['types']=="Circular")
                {
                    $todayDate = date("Y-m-d");
                    $expiryDate = $row['expiryDate'];
                    $date1 = date_create($todayDate);
                    $date2=date_create($expiryDate);
                    $diff=date_diff($date1,$date2);
                    // returns negative value if expires 
                    $dif = $diff->format("%R%a");
                    if($dif<=0)
                    {
                        if($count1<=$expired)
                        {
                            echo '<li><a href="'. $UPLOADS_DIR . $row['file'] .'" target="_blank"><i class="fa fa-chevron-circle-right">&nbsp&nbsp</i>'.$row['Title'].'</a></li>';
                        }
                        $count1++;

                    }
            
                }

            }
                    
        }   

    }// end of getDynamicNotices

?>