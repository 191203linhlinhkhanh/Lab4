
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<p>
    <label for="ten">Tên</label><br>
    <input type="text" name="ten">
</p>
<p>
    <button>Submit</button></p>
</form>
<?php
$ten = $_POST['ten'];
if (empty($ten) || strlen($ten) < 3) {
    echo "<p>Error</p>";    
    //bai1 up sau nhe a :>
}?>

