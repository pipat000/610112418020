<html>
<body>
<?php
echo "Hello World !!!";

$sname = "Haeprakhon";
$Sports = array("Swimming","Running");

?>

<hr>
<?=" My name is Pipat " . $sname ?>

<form action="../action/post.php" method="POST">
    <select name="sl_Sport">
        <option> - Select - </option>
        <option value="1">Football</option>
        <option value="2">Tenis</option>
        <?php
            foreach($Sports as $key => $Sport){
        ?>
            <option value ="<?=key+3?>"><?=$Sport?></option>
        <?php } ?>   
                 
    </select>
    <button type="submit"> SEND </button>
</form>
<label id="lb_post"></label>


</body>
</html>
<script src="../js/jquery-3.4.1.min.js"></script>
<script >
$(function(){
    $("select").change(function(){
        sp_val = $(this).val();
        $("#lb_post").load("../action/post.php?getSport=" + sp_val);
    });
});
</script>