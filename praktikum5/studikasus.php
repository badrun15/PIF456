<!DOCTYPE html>
<html>
<head>
    <title>STUDI KASUS</title>
</head>

<body>              
<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    $rec_limit = 5;

        if(! $conn )
            {
                die('Could not connect: ' . mysql_error());
            }
        
        mysql_select_db('myweb');
        $sql = "SELECT count(nim) FROM mahasiswa ";
        $res = mysql_query( $sql, $conn );
         if(! $res )
                        {
                die('Could not get data: ' . mysql_error());
                        }
                        
        $row = mysql_fetch_array($res, MYSQL_NUM );
        $rec_count = $row[0];
    if( isset($_GET{'page'} ) )
                {
                        $page = $_GET{'page'} + 1;
                        $offset = $rec_limit * $page;
        }
    else
       {
                        $page = 0;
                        $offset = 0;
                }
                
        $left_rec = $rec_count - ($page * $rec_limit);
        
        $sql = "SELECT nim, nama, alamat FROM mahasiswa LIMIT $offset, $rec_limit";

        $res = mysql_query( $sql, $conn );
        if(! $res )
                {
                        die('Could not get data: ' . mysql_error());
                }
?>


<table border=1 cellspacing=1 callpadding=5>
        <tr>
<th width=100>NIM</th>
<th width=150>Nama</th>
<th>Alamat</th>
</tr>
        
        
<?php
        while($row = mysql_fetch_array($res, MYSQL_ASSOC))
        {
?>
        <tr>
                <td>
                        <?php echo $row['nim']; ?>
                </td>
                <td>
                        <?php echo $row['nama']; ?>
                </td>
                <td>
                        <?php echo $row['alamat']; ?>
                </td>
        </tr>
   
<?php
        
                }
?>


</table>

<?php

        if( $page > 0 )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last 10 Records</a> |";
            echo "<a href=\"?page=$page\">Next 10 Records</a>";
        }
     else if( $page == 0 )
        {
            echo "<a href=\"?page=$page\">Next 10 Records</a>";
        }
        else if( $left_rec < $rec_limit )
                {
            $last = $page - 2;
            echo "<a href=\"?page=$last\">Last 10 Records</a>";
        }
    mysql_close($conn);
?>
