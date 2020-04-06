<?php
if (isset($_POST['submit'])) {
    $post = $_POST['text'];
}
echo "welkom type gerust iets.";
?>

<form method="post">
    email: <input type="text" name="text" onfocus="this.value=''" value="schrijf wat"><br>
    <input type="submit" name="submit" class="btn btn-success mt-2" value="klik hier en zie wat er gebeurd">
</form>
<?php
echo "'$post' dit is wat je hebt getypt";
?>