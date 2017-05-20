<?php include_once('db_config.php');

$query = mysqli_query($con,"select * from womes_tshirts ") or die("mysqli error"); 
          $count1 = mysqli_num_fields($query);
          $specheadingg=array();  
          $specheadingg1=array();  
          $testt =array();
          $columnnamess = array();
          //$specname=array();
          $i=0;
          $j=0;
          while ($property = mysqli_fetch_field($query))
           {
           if($i>9 )
            {
             $specheadingg = $property->name;
             $remove = array("fld_");
             $spec = str_replace($remove, "", $specheadingg);
             $spec1 = strtolower($spec);
             $specname = ucwords($spec1);
             //echo $specname;         
             $columnnamess[$j] = $specheadingg;
             
             $test_fld[$j]=$specname;
             $j++;
            }
           $i++;
          
       
           }

         