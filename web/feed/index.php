<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    header('Content-type: application/xml');
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>Beasiswa UI RSS Feed</title>';
    $rssfeed .= '<link>http://www.beasiswa.ui.ac.id</link>';
    $rssfeed .= '<description>Beasiswa UI RSS feed</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2015 beasiswa.ui.ac.id</copyright>';
 


        $koneksi = "host=localhost user=postgres dbname=beasiswa password=postgres port=5433";
        $connection = pg_connect($koneksi);

        $query = "SELECT * FROM beasiswa.paket_beasiswa WHERE is_published = 'true' ORDER BY tgl_akhir_lamar desc LIMIT 6";
        $result = pg_query($query);
        if(!$result){
            echo "Problem With Query ".$query."<br />";
            echo pg_last_error();
            exit();
        }
   
   while($row = pg_fetch_array($result)) {
        //extract($row);
 
        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $row['nama_paket_beasiswa'] . '</title>';
        $rssfeed .= '<description>' . $row['deskripsi'] . '</description>';
        $rssfeed .= '<link>' ."http://beasiswa.ui.ac.id/apps/informasirolependaftar/index?idPaket=". $row['id'] . '</link>';
        $rssfeed .= '<pubDate>' .  date("d/m/y", strtotime($row['tgl_awal_lamar']))." s.d. ".date("d/m/y", strtotime($row['tgl_akhir_lamar'])) . '</pubDate>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>