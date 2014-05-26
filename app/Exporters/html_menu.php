<!DOCTYPE html>
<html>
    <body>
        <h1>Your Custom Menu</h1>
        <table>

            <?php foreach($_POST['menu'] as $key => $menu_items): ?>

                <tr>
                    <?php if($key == 0): ?>
                        <?php foreach(array_keys($menu_items) as $item): ?>
                        <th>
                            <?php echo $item; ?>
                        </th>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tr>

                <tr>
                    <?php foreach(array_values($menu_items) as $item): ?>
                    <td>
                        <?php echo $item; ?>
                    </td>
                    <?php endforeach; ?>
                </tr>

            <?php endforeach; ?>
        </table>
    </body>
</html>
