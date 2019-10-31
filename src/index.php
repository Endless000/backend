<?php
$login = 'Anton';
$pass = 'password';
$languages = [
    'EN' => 'Английский',
    'UA' => "Украинский",
    'RU' => "Русский"
];
?>
<form action="index.php" method="POST">
    <label for="">Login</label>
    <input type="text" name="login" value="<?=$login?>">
    <label for="">Password</label>
    <input type="text" name="pass" value="<?=$pass?>">
    <input type="submit">
    <select name="" id="">
    <?php foreach ($languages as $key => $language) { ?>
            <option value="<?php echo $key ?>"><?php echo $language ?></option>
        <?php } ?>
    </select>
</form>

