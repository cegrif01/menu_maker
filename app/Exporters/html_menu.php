<table>
    
    <h1>Your Custom Menu</h1>

    <tr>
        <th>Item</th>
        <th>Menu Description</th>
        <th>Price</th>
    </tr>

    <?php foreach($data['menu'] as $header => $menu_item): ?>
    <?php pp($header); ?>
        <tr>
            <td>{{ $menu_item }}</td>
            
        </tr>
    <?php endforeach; ?>
</table>