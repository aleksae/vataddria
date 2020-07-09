<table class="table">
                <tr>
                  <th>PCallsign</th>
                  <th>Arriavl airport</th>
                  <th>Arrival time</th>
            </tr>
              <?php
$xml_content = file_get_contents('http://vatbook.euroutepro.com/xml2.php');
$xml = simplexml_load_string($xml_content);
 foreach ($xml->pilots->booking as $book) {?>
    <tr><?php
	  $pilot = $book->callsign;
	  $arp = $book->arr;
	  $time = $book->arr_time;
     
	  echo "<td>".$pilot."</td>";
	  echo "<td>".$arp."</td>";
	  echo "<td>".$time."</td>";
      
      ?></tr><?php
    }

?>
     </table>