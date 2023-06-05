
<?php
    ('connect.php');
    $filename = "changwat.json";

    $data = file_get_contents($filename);
    $array = json_decode($data, true);

    // foreach ($array as $row) {
    //     $sql  =  "INSERT INTO province (name,cost,distrance,oilbill,time) VALUES ('".$row["name"]."','".$row["cost"]."','".$row["distrance"]."','".$row["oilbill"]."','".$row["time"]."')"
    //     // mysqli_query($conn,$sql);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
    <title>บริการเช่ารถตู้ Vip เริ่มต้น 1,500 บาท พร้อมคนขับ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
    $(function() {


        var provinces = [];

        $.getJSON('changwat.json', function(data) {
            $.each(data.province, function(i, p) {
                var tblRow = "<tr>" + "<td>" + p.name.th + "</td>" +
                            "<td>" + p.cost + "</td>" + 
                            "<td>" + p.distance + "</td>" +
                            "<td>" + p.oilbill + "</td>"  +
                            "<td>" + p.time + "</td>" + "</tr>"
                $(tblRow).appendTo("#provincedata tbody");
            });

        });

    });
    </script>
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo" for="">VanVan</label>
        <ul>
            <li><a class="nava" href="index.php">หน้าแรก</a></li>
            <li><a class="nava" href="rentinfo.php">ตารางราคา</a></li>
            <li><a class="nava" href="rent.php">จองรถตู้</a></li>
            <li><a class="nava" href="contract.php">ติดต่อเรา</a></li>
        </ul>
    </nav>

    <section>
        
        <center>
            <h2>ตารางราคา อัพเดท 11/09/2563</h2>
            <h3>รายละเอียดเพิ่มเติม</h3>
            <p>พนักงานจะทำการเติมน้ำมันเต็มถังจากบ้านทุกครั้ง</p>
            <p>ผู้เช่ารถจะต้องเติมน้ำมันให้เต็มถังอีกครั้งหลังจากที่ใช้บริการเรียบร้อยแล้ว</p>
            <div class="wrapper">
            <form>
                <div class="input_filed">
                    
                    <form action="rentinfo.php" method="get">
                        <label for="">ค้นหาจังหวัดที่ต้องการ</label><input name="search_changwat" class="input" type="text">
                        <input n class="btn" type="submit" value="ค้นหา">
                    </form>
                </div>
            </form>
            </div>
            
        </center>
        <center>
            <table class="table table-striped"   id="provincedata" border="2">
                <thead>
                        <th>จังหวัด</th>
                        <th>ราคา/วัน</th>
                        <th>ระยะทาง/กม</th>
                        <th>ค่าน้ำมันไป-กลับ(ประมาณ)</th>
                        <th>ใช้เวลาเดินทางประมาณ</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </center>
        
    </section>
    <footer>
        <p>Copyright © 2020 VanVan All Rights Reserved.</p>
    </footer>
    </body>
</html>