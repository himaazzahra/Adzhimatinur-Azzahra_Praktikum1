<?php
$ns1 = ['id'=>1,'nim'=>'0110221075','uts'=>86,'uas'=>94,'tugas'=>88];
$ns2 = ['id'=>2,'nim'=>'0110221080','uts'=>90,'uas'=>65,'tugas'=>78];
$ns3 = ['id'=>3,'nim'=>'0110221098','uts'=>60,'uas'=>76,'tugas'=>45];
$ns4 = ['id'=>4,'nim'=>'0110221076','uts'=>80,'uas'=>83,'tugas'=>92];
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<h3>Daftar Nilai Siswa</h3>
<table  width="75%" bgcolor="orange">
<thead>
    <tr>
        <th>No</th><th>NIM</th><th>UTS</th>
        <th>UAS</th><th>Tugas</th><th>Nilai</th>
    </tr>
</thead>
<tbody>

    <?php
    $nomor = 1;
    foreach($ar_nilai as $ns){
        $warna = ($nomor%2 == 0)?"pink":"yellow";
        echo'<tr align="center" bgcolor="'.$warna.'"><td>'.$nomor.'</td>';
        echo'<td>'.$ns['nim'].'</td>';
        echo'<td>'.$ns['uts'].'</td>';
        echo'<td>'.$ns['uas'].'</td>';
        echo'<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
    }
    ?>
</tbody>
</table>