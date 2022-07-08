<?php
   $url='https://free.currconv.com/api/v7/convert?q=USD_BDT,GBP_BDT,CAD_BDT,SAR_BDT,KWD_BDT,INR_BDT,MYR_BDT&compact=ultra&apiKey=e74171e7f3e532cb1e5f';
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_URL,$url);
   $result=curl_exec($ch);
   curl_close($ch);
   $RATE=(json_decode($result, true)) ;
   ?>
   
<table>
   <tr>
      <th>Currency</th>
      <th>Buy</th>
      <th>Sale</th>
   </tr>
   <tr>
      <td>USD</td>
      <td><?php echo round($RATE['USD_BDT'],2) ?></td>
      <td><?php echo round($RATE['USD_BDT']*1.02,2) ?></td>
   </tr>
   <tr>
      <td>Pound</td>
      <td><?php echo round($RATE['GBP_BDT'],2) ?></td>
      <td><?php echo round($RATE['GBP_BDT']*1.02,2) ?></td>
   </tr>
   <tr>
      <td>Canadian</td>
      <td><?php echo round($RATE['CAD_BDT'],2) ?></td>
      <td><?php echo round($RATE['CAD_BDT']*1.02,2) ?></td>
   </tr>
   <tr>
      <td>Soudi Real</td>
      <td><?php echo round($RATE['SAR_BDT'],2) ?></td>
      <td><?php echo round($RATE['SAR_BDT']*1.02,2) ?></td>
   </tr>
   <tr>
      <td>Kwit Dinner</td>
      <td><?php echo round($RATE['KWD_BDT'],2) ?></td>
      <td><?php echo round($RATE['KWD_BDT']*1.02,2) ?></td>
   </tr>
   <tr>
      <td>Indian Rupee </td>
      <td><?php echo round($RATE['INR_BDT'],2) ?></td>
      <td><?php echo round($RATE['INR_BDT']*1.02,2) ?></td>
   </tr>
   <tr>
      <td>Ringit</td>
      <td><?php echo round($RATE['MYR_BDT'],2) ?></td>
      <td><?php echo round($RATE['MYR_BDT']*1.02,2) ?></td>
   </tr>
</table>
