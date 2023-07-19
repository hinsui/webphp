<link rel="stylesheet" href="styles.css">
<style>
  html{
        background-color:rgba(23, 8, 172, 0.8);
    }
</style>
<form action="product_insert.php" method="post" enctype="multipart/form-data">
    <label for="name">ชื่อสินค้า</label>
    <input type="text" name="name" class="input" placeholder="ใส่ชื่อสินค้า..."/> </br>
    <label for="price">ราคา</label>
    <input type="text" name="price" class="input" placeholder="ใส่ราคา..."/> </br>
    <label for="stock">จำนวนที่เหลือ</label>
    <input type="text" name="stock" class="input" placeholder="ใส่จำนวนที่เหลือ..."/> </br>
    รายละเอียดสินค้า <textarea name="description" class="input"> </textarea> </br>
    <input type="submit" value="บันทึกข้อมูล" class="button"/>
</form>


    