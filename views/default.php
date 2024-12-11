<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR7</title>
</head>
<body>
    <form action="/index.php/students/addStudent" method="POST">
        <input type="text" name="name" placeholder="Name" require /><br>
        <input type="number" name="group_id" placeholder="Group id" min="1" max="2" require /><br>
        <input type="submit" value = "Відправити"/>
    </form>

    <hr>
    <?php 
        if($students){?>
        <form method="POST" action="/index.php/students/actions">
            <table>
                <tr>
                    <th>Ім'я</th>
                    <th>Група</th>
                    <th>Дія</th>
                </tr>
                <?php foreach($students as $s) { ?>
                    <tr>
                        <td><?php echo $s['name']; ?></td>
                        <td><?php echo $s['group']; ?></td>
                        <td><button type="submit" name="delete" value="<?php echo $s['id']; ?>">Delete</button></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    <?php } ?>
</body>
</html>