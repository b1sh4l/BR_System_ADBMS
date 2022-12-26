<?php
include '../Model/DBConn.php';
function plsqldb1($acsId,$job){

    $conn = connection();
    $sql = 'BEGIN addIntoEmployeeTable.add_emp(:acsId, :job); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':acsId',$acsId,32);
    oci_bind_by_name($stmt,':job',$job,32);
    return oci_execute($stmt);
    
}

function plsqldb2($pid){

    $conn = connection();
    $sql = 'BEGIN deleteFromPaymentTable.del_payment(:pid); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':pid',$pid,32);
    return oci_execute($stmt);
    
}
function plsqldb3($bid,$pname,$cid,$budg){

    $conn = connection();
    $sql = 'BEGIN Insert_ReqProduct(:bid,:pname,:cid,:budg); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':bid',$bid,32);
    oci_bind_by_name($stmt,':pname',$pname,32);
    oci_bind_by_name($stmt,':cid',$cid,32);
    oci_bind_by_name($stmt,':budg',$budg,32);
    return oci_execute($stmt);
    
}


?>