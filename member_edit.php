<link rel="stylesheet" href="styles.css">
<style>
    html{
        background-color:rgba(23, 8, 172, 0.8);
    }
</style>
<?php
   include "connect.php";
   $sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
?>


<form action="member_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
<label for="firstname">ชื่อ</label>
          <input type="text" name="firstname" class="input" placeholder="ใส่ชื่อจริง..." /> <br>
          <label for="lastname">นามสกุล</label>
          <input type="text" name="lastname" class="input" placeholder="ใส่นามสกุล..."/> <br>
          <label for="email">อีเมล</label>
          <input type="email" name="email" class="input" placeholder="ใส่อีเมล..."/> <br>
          <label for="phone">เบอร์โทร</label>
          <input type="text" name="phone" class="input" placeholder="ใส่เบอร์โทร..."/> <br>
          ที่อยู่ <textarea name="address" class="input" > </textarea> <br>
          แนบรูป <input type="file" name="photo" class="input" /> <br>
          <input type="submit" value="บันทึกข้อมูล" class="button" /> <br>

</form>
