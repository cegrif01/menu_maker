<!DOCTYPE html>
<html>
    <body>
        <h1>Your Custom Menu</h1>
        <table>

            <?php foreach($data['menu'] as $key => $menu_items): ?>

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

<style>
    
    body {
        font: normal 11px auto "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
        color: #4f6b72;
        background: #E6EAE9;
    }

    a {
        color: #c75f3e;
    }

    #mytable {
        width: 700px;
        padding: 0;
        margin: 0;
    }

    caption {
        padding: 0 0 5px 0;
        width: 700px;    
        font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
        text-align: right;
    }

    th {
        font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
        color: #4f6b72;
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        border-top: 1px solid #C1DAD7;
        letter-spacing: 2px;
        text-transform: uppercase;
        text-align: left;
        padding: 6px 6px 6px 12px;
        background: #CAE8EA url(images/bg_header.jpg) no-repeat;
    }

    th.nobg {
        border-top: 0;
        border-left: 0;
        border-right: 1px solid #C1DAD7;
        background: none;
    }

    td {
        border-right: 1px solid #C1DAD7;
        border-bottom: 1px solid #C1DAD7;
        background: #fff;
        padding: 6px 6px 6px 12px;
        color: #4f6b72;
    }


    td.alt {
        background: #F5FAFA;
        color: #797268;
    }

    th.spec {
        border-left: 1px solid #C1DAD7;
        border-top: 0;
        background: #fff url(images/bullet1.gif) no-repeat;
        font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
    }

    th.specalt {
        border-left: 1px solid #C1DAD7;
        border-top: 0;
        background: #f5fafa url(images/bullet2.gif) no-repeat;
        font: bold 10px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
        color: #797268;
    }
</style>