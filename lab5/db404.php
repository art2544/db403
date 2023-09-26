<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำสั่ง SQL สำหรับเรียกดูข้มูล</title>
</head>
<body>
<?php
    $conn = new mysqli('db403-mysql', 'root', 'P@ssw0rd', 'northwind');
    if ($conn->connect_error) {
        echo $conn->connect_error;
    die();
}
?>
<h1>คำสั่ง SQL สำหรับเรียกดูข้มูล </h1>
<ol>
    <li>
        เรียกดูชื่อสินค้าที่เลิกผลิตแล้ว แต่ยังมีจำนวนสินค้าคงเหลือค้างอยู่ใน Stock
        <div>
        <code>
            SELECT  ProductName, UnitsInStock, Discontinued FROM products
        </code>
        <br>
        <table>
        <tr>
            <th>ProductName</th>
            <th>UnitsInStock</th>
            <th>Discontinued</th>
        </tr>
<?php
        $sql = 'SELECT ProductName, UnitsInStock, Discontinued FROM products WHERE Discontinued = 1 AND UnitsInStock > 0';
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['ProductName']}</td>
                    <td>{$row['UnitsInStock']}</td>
                    <td>{$row['Discontinued']}</td>
                </tr>";
    }
?>
    </table>
    </li>
    <li>
        เรียกดูชื่อสินค้าที่มียอดสั่งซื้อมูลค่าเกิน 500
    </li>
    <li>
        ลูกค้าจากประเทศ France มาจากเมือง (city) อะไรบ้าง
    </li>
    <li>
        เรียกดูรายชื่อผู้ติดต่อ (ContactName) และชื่อบริษัท (CompanyName) ของลูกค้า เฉพาะบริษัทที่มีชื่อขึ้นต้นด้วย a
    </li>
    <li>
        เรียกดูชื่อผู้ติดต่อ (ContactName) และชื่อบริษัท (CompanyName) ของลูกค้า เฉพาะบริษัทที่ชื่อลงท้ายว่า markets
    </li>
    <li>
        เรียกดูชื่อผู้ติดต่อ (ContactName) และชื่อบริษัท (CompanyName) ของลูกค้า เฉพาะบริษัทที่มีตัวอักษร et อยู่ในชื่อบริษัท
    </li>
    <li>
        เรียกดูชื่อผู้ติดต่อ (ContactName) และชื่อบริษัท (CompanyName) ของลูกค้า เฉพาะชื่อบริษัทที่มีตัวอักษร e และ t โดยมีตัวอักษร 1 ตัว คั่นกลางระหว่าง e และ t เช่น ect, ent, est
    </li>
    <li>
        เรียกดูชื่อผู้ติดต่อ (ContactName) และชื่อบริษัท (CompanyName) ของลูกค้า เฉพาะบริษัทที่มีชื่อขึ้นต้นด้วยตัวอักษร b และลงท้ายด้วย s
    </li>
    <li>
        รายชื่อสินค้าและราคาต่อหน่วย เฉพาะสินค้าที่มีราคาต่อหน่วยตั้งแต่ 20 ถึง 50
    </li>
    <li>
        จากตารางข้อมูลลูกค้า เรียกดูชื่อผู้ติดต่อ (ContactName), ตำแหน่งผู้ติดต่อ (ContactTitle), ประเทศ (Country) โดยเรียกดูเฉพาะลูกค้าที่มีตำแหน่งเป็น Owner และอยู่ในประเทศ Mexico, Spain, France
    </li>
    <li>
        จากตารางข้อมูลลูกค้า เรียกดูชื่อบริษัท (CompanyName), ตำแหน่งผู้ติดต่อ (ContactTitle), ประเทศ (Country) โดยเรียกดูเฉพาะลูกค้าที่มีตำแหน่งเป็น Owner และอยู่ในประเทศ Mexico, Spain, France เรียงลำดับตามชื่อบริษัท โดยแสดงข้อมูลแค่ 2 รายการ
    </li>
    <li>
        แสดงชื่อสินค้า ราคาต่อหน่วย และจำนวนสินค้าต่อหน่วย โดยแสดงเฉพาะสินค้าที่มีหน่วยเป็นกล่อง (box) 5 รายการที่มีราคาต่อหน่วยสูงสุด
    </li>
    <li>
        มีจำนวนลูกค้ากี่คนที่อยู่ในแต่ละประเทศ UK, France หรือ Spain เรียงลำดับตามจำนวนลูกค้า
    </li>
    <li>
        จำนวนลูกค้าจากประเทศ UK, France หรือ Spain  โดยแสดงเฉพาะประเทศที่มีลูกค้ามากกว่า 5 ราย และแสดงผลเรียงลำดับตามจำนวนลูกค้าจากมากไปน้อย
    </li>
    <li>
        ราคาเฉลี่ยของสินค้าที่มีค้างอยู่ใน Stock จำแนกตามหมวดหมู่ (CategoryID)
    </li>
</ol>
<?php
    $conn->close();
?>
</body>
</html>