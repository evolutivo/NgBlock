  <?php
   
  global $adb,$log;
  $kaction=$_REQUEST['kaction'];
  $pointing_module=$_REQUEST['pointing_module'];
  
  $qu2='';
  $content=array();
  if($kaction=='retrieve'){
      
    $qu1="Select fieldid,columnname,fieldlabel,fieldname,tabid from vtiger_field
            ";
    $tabid=  getTabid($pointing_module);
    $qu1=$qu1." where uitype in (10,51,50,73,68,57,59,58,76,75,81,78,80)
        ";   
    $query=$adb->query($qu1);
    $count=$adb->num_rows($query);
   for($i=0;$i<$count;$i++){
      $content[$i]['fieldid']=$adb->query_result($query,$i,'fieldid');
      $content[$i]['columnname']=$adb->query_result($query,$i,'columnname');
      $content[$i]['fieldlabel']=  getTranslatedString($adb->query_result($query,$i,'fieldlabel'),$pointing_module);
      $content[$i]['fieldname']=$adb->query_result($query,$i,'fieldname');
      $content[$i]['tabid']=$adb->query_result($query,$i,'tabid');
      }
    echo json_encode($content);
    
    }
 ?>
