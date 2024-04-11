
<?php include 'heard.php'; ?>

<form action ='/functions.php?op=createOrder' method="post">
 
<label for="gem_name">預定產品名稱</label>
<input type="hidden" id="gem_id" name="gem_id" 
 value="<?php echo $_GET['gem_id'];?>">
<h2><?php echo $gems[$_GET['gem_id']-1]['name'];?></h2>

<label for="name">姓名:</label>
<input type="test" id="name" name="name"><br/>

<label for ="email">郵件:</label>
<input type="email" id="email" name="email" require><br/>

<label for="quantity">數量:</label>
<input type ="number" id="quantity" name="quantity"
min="1" max="5" value="1">

<br>
<input class="buyBth" type="submit" value="下單預訂">

</form>

<?php include 'footer.php';?>