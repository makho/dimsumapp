<h1>Dimsums Index</h1>
<?php echo $this->Html->link('Add Dimsum','/dimsums/add'); ?>
<?php if (!empty($types)): ?>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
     <th>Stock</th>
    <th>Type</th>
    <th>Action</th>
    <th>Created</th>
</tr>
    <?php foreach ($dimsums as $dimsum): ?>
    <tr>
    <td><?php echo $type['Dimsum']['id']; ?></td>
    <td><?php echo $type['Dimsum']['name']; ?></td>
    <td><?php echo $type['Dimsum']['Stock']; ?></td>
    <td><?php echo $type['Dimsum']['Type']; ?></td>
    <td></td>
    <td><?php echo $type['Type']['created']; ?></td>
        </tr>
<?php endforeach; ?>
</table>
<?php else: ?>
<p>No dimsum available</p>
<?php endif; ?>