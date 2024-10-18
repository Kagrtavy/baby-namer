<form method="post" action="../include/process.php">
    <label>
        Enter name of the child: <input type="text" name="name" required/>
    </label>
    <label>
        Enter gender of the child: <input type="text" name="gender" required/>
    </label>
    <input type="submit" value="Submit"/>
</form>
<?php if (isset($_GET['error']) && $_GET['error'] === 'name_exists'):
    $existingName = $_GET['name']; ?>
    <p>This name is already in the list: <?= $existingName ?></p>
<?php endif; ?>