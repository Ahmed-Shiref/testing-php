<form action="" method="post">
    رقم المنتج: <input type="text" name="product_id"><br>
    اسم المنتج: <input type="text" name="name"><br>
    عدد: <input type="text" name="quantity_in_stock"><br>
    سعر القطعه: <input type="text" name="unit_price"><br>
    رقم المنتج الذي تريد حذفه<input type="text" name="line"><br>
    <input type="submit" value="delete" name="delete">
</form>
<?php
print_r($_POST);
