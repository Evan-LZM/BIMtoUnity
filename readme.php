<?php
    $currentPath=__DIR__.'/woodsideData';
    $fileresult=scandir($currentPath);
    unset($fileresult[0]);
    unset($fileresult[1]);
    $fileresult = array_values($fileresult);
    $filecount=count($fileresult);

    for($i=0;$i<$filecount;$i++){
        $path=$currentPath.'//'.$fileresult[$i];
        $myFile=fopen($path,"r") or die ("Could not open file");
        $str=fread($myFile, filesize($path));
        echo "?TableName:".$fileresult[$i].$str;
        fclose($myFile);
    }

    // $filepath=$currentPath.'\data'.'\53 - 57 Woodside Ave (2019)_Assemblies.txt';
    // $myFile=fopen($filepath,"r") or die ("Could not open file");
    // echo fread($myFile, filesize($filepath));
    // fclose($myFile);
?>