

<div class='col-md-12'>
    <div class='card''>
    <div class='card-header' data-background-color='red'>
        <h4 class='title text-center'>Delete Item?</h4>
    </div>
    <div class='card-content'>
        <?php
        session_start();
        $a = $_GET['num'];
        $t = $_SESSION['temp'];

        echo "<a href=" . '../php/deleteItem.php?n=' . $a . " " ." class='btn btn-primary text-center'>Delete</a>";
        ?>

        <a class="btn btn-simple "></a>
        <?php
            echo "<a href=" . '../admin/' .$t. " " . "class='btn btn-primary text-center' id='submitB'>Cancel</a>";
        ?>
        <div class='clearfix'></div>

    </div>
</div>









