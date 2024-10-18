<div>
    <h2>Names Table</h2>
    <table>
        <thead>
        <tr>
            <th>Female Names</th>
            <th>Male Names</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < $maxNames; $i++): ?>
            <tr>
                <td><?= $femaleNames[$i] ?? '' ?></td>
                <td><?= $maleNames[$i] ?? '' ?></td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</div>