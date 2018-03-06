

<div class='col-md-12'>
    <div class='card''>
    <div class='card-header' data-background-color='red'>
        <h4 class='title text-center'>Delete Issuance?</h4>
    </div>
    <div class='card-content'>
        <?php
        $a = $_GET['num'];

        echo "<a href=" . '../php/deleteIssuance.php?n=' . $a . " " ." class='btn btn-primary text-center'>Delete</a>";
        ?>

        <a class="btn btn-simple "></a>
        <a href="../admin/issuance.php" class='btn btn-primary text-center' id='submitB'>Cancel</a>

        <div class='clearfix'></div>

    </div>
</div>









