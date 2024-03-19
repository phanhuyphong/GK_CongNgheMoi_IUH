<?php
    class docapi{
        function docjson($url){
            $client = curl_init($url);
            curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
            $reponse = curl_exec($client);
            $results = json_decode($reponse);
            return $results;
        }
        function docjson_xemsinhvien($url){
            $results = $this->docjson($url);
            echo '<table width="800px" align="center" valign="middle" border="1">
                <tr>
                    <td width="40" align="center"><strong>STT</strong></td>
                    <td width="120" align="center"><strong>Mã sinh viên</strong></td>
                    <td width="130" align="center"><strong>Họ đệm</strong></td>
                    <td width="120" align="center"><strong>Tên</strong></td>
                </tr>';
                foreach($results as $data){
                    echo '<tr>
                    <td width="40" align="center">'.$data->id.'</td>
                    <td width="120" align="center">'.$data->masv.'</td>
                    <td width="130" align="center">'.$data->hodem.'</td>
                    <td width="120" align="center">'.$data->ten.'</td>
                </tr>';
                }
            echo '</table>';
        }
    }
?>