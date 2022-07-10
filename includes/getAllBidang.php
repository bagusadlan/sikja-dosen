<?php

function getAllBidangPendidikan() {
    $con = konekDb();
    $sql = "SELECT * FROM BIDANG WHERE TIPE = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 'Pendidikan');
    $hasil = query_view($con, $sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
    
    return $rows;
}

function getAllBidangPenunjang() {
    $con = konekDb();
    $sql = "SELECT * FROM BIDANG WHERE TIPE = :v1 ORDER BY NOMOR";
    $rows = array(':v1' => 'Penunjang');
    $hasil = query_view($con, $sql, $rows);
    oci_fetch_all($hasil, $rows, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);

    return $rows;
}