
<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);



echo"<body>";
echo"<center>";
  
    echo "<table border='1'>";
    echo"<caption>";
    echo "<h3>";
    echo "<p>";
    echo "รายงานสถานการโควิด-19 แยกจังหวัด";
    echo "</p>";
    echo "</h3>";
    echo"</caption>";
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#BEBEBE'>"; 
    echo "ลำดับ";
    echo "</td>"; 
    echo "<td bgcolor='#FFFAFA'>"; 
    echo "จังหวัด";
    echo "</td>";
    echo "<td bgcolor='#98FB98'>"; 
    echo "ผู้ป่วยใหม่";
    echo "</td>"; 
    echo "<td bgcolor='##66CC00'>"; 
    echo "ผู้ป่วยรวม";
    echo "</td>"; 
    echo "<td bgcolor='#FAF0E6'>"; 
    echo "ผู้ป่วยใหม่ในประเทศ";
    echo "</td>"; 
    echo "<td bgcolor='#FAEBD7'>"; 
    echo "ผู้ป่วยรวมในประเทศ";
    echo "</td>"; 
    echo "<td bgcolor='#FF6347'>"; 
    echo "ผู้เสียชีวิตใหม่";
    echo "</td>"; 
    echo "<td bgcolor='#FF4500'>"; 
    echo "ผู้เสียชีวิตรวม";
    echo "</td>";
    echo "<td bgcolor='#F0F8FF'>"; 
    echo "วันที่อัพเดท";
    echo "</td>";  
    echo "</tr>";

foreach($data as $key=>$val){
    echo "<tr align = 'center'>";
    echo "<tr align = 'center'>";
    echo "<td bgcolor='#BEBEBE'>"; 
    echo $key+1;
    echo "</td>"; 
    echo "<td bgcolor='#FFFAFA'>"; 
    echo $val->province;
    echo "</td>";
    echo "<td bgcolor='#98FB98'>"; 
    echo $val->new_case;
    echo "</td>";
    echo "<td bgcolor='##66CC00'>"; 
    echo $val->total_case;
    echo "</td>";
    echo "<td bgcolor='#FAF0E6'>"; 
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FAEBD7'>"; 
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td bgcolor='#FF6347'>"; 
    echo $val->new_death;
    echo "</td>";
    echo "<td bgcolor='#FF4500'>"; 
    echo $val->total_death;
    echo "</td>"; 
    echo "<td bgcolor='#F0F8FF'>"; 
    echo $val->update_date;
    echo "</td>";
    echo "</tr>";

  }
  echo "</table>";

echo"</center>";
echo"</body>";
