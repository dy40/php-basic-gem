<?php
    //顯示貨品
    $gemQ = mysqli_query($dbConnection, "SELECT * FROM `gem`");

    while ($gem = mysqli_fetch_assoc($gemQ)) {
        echo '<div class="col">
        <img src="/images/'.$gem['image'].'" />
        <p>
        名稱：'.$gem['name'].'<br>
        價格：$'.$gem['price'].'<br>
        <a href="/order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預訂'.$gem['name'].'</a><br>
        </div>';
    }

    /* foreach($gems as $key => $gem)
    {
        echo '<div class="col">
        <img src="/images/'.$gem['image'].'" />
        <p>
        名稱：'.$gem['name'].'<br>
        價格：$'.$gem['price'].'<br>
        <a href="/order.php?gem_id='.$gem['gem_id'].'" class="buyBtn">預訂'.$gem['name'].'</a><br>
        </div>';
    } */
    ?>
    </div>

<?php include('footer.php'); ?>
               
