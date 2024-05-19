<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Techniques</title>
</head>
<body>
    <form method="post" action="">
        <h3>Select a category</h3>
        <!-- Dropdown menu for items -->
        <select name="category_id">
            <!-- PHP loop to generate dropdown options dynamically -->
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo htmlspecialchars($category['categoryID']); ?>">
                    <?php echo htmlspecialchars($category['categoryName']); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <select name="position_id">
            <!-- PHP loop to generate dropdown options dynamically -->
            <?php foreach ($positions as $position): ?>
                <option value="<?php echo htmlspecialchars($position['positionID']); ?>">
                    <?php echo htmlspecialchars($position['positionName']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
