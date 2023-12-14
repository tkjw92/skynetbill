<?php $this->view('messages') ?>
<?php
if ($company['theme'] == 'primary') {
    $backgroundnya = '#4e73df';
    $colornya = '#fff';
} elseif ($company['theme'] == 'secondary') {
    $backgroundnya = '#6c757d';
    $colornya = '#fff';
} elseif ($company['theme'] == 'success') {
    $backgroundnya = '#1cc88a';
    $colornya = '#fff';
} elseif ($company['theme'] == 'danger') {
    $backgroundnya = '#e74a3b';
    $colornya = '#fff';
} elseif ($company['theme'] == 'warning') {
    $backgroundnya = '#f6c23e';
    $colornya = '#fff';
} elseif ($company['theme'] == 'info') {
    $backgroundnya = '#36b9cc';
    $colornya = '#fff';
} elseif ($company['theme'] == 'dark') {
    $backgroundnya = '#5a5c69';
    $colornya = '#fff';
} elseif ($company['theme'] == 'light') {
    $backgroundnya = '#f8f9fc';
    $colornya = '#000';
} elseif ($company['theme'] == 'default') {
    $backgroundnya = '#ffffff';
    $colornya = '#000';
} elseif ($company['theme'] == 'purple') {
    $backgroundnya = '#6f42c1';
    $colornya = '#fff';
} elseif ($company['theme'] == 'orange') {
    $backgroundnya = '#fd7e14';
    $colornya = '#fff';
} else {
    $backgroundnya = '#e74a3b';
    $colornya = '#fff';
}
?>
<!-- DataTales Example -->
<div style="border: 3px solid <?= $backgroundnya ?>;" class="card shadow mb-4">
    <div style="border-bottom: 3px solid <?= $backgroundnya ?>;" class="card-header py-3">
        <h6 class="m-0 font-weight-bold" style="color : <?= $backgroundnya ?>">Data Interface (<?= $totallog; ?> item)</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                    <tr style="text-align: center;">
                        <th width="5%">No</th>
                        <th width="22%">Name</th>
                        <th width="15%">Type</th>
                        <th width="10%">MTU</th>
                        <th width="15%">Download</th>
                        <th width="15%">Upload</th>
                        <th width="18%">Mac Address</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    function formatBytes($bytes, $decimal = null)
                    {
                        $satuan = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                        $i = 0;
                        while ($bytes > 1024) {
                            $bytes /= 1024;
                            $i++;
                        }
                        return round($bytes, $decimal) . ' ' . $satuan[$i];
                    }
                    ?>
                    <?php $no = 1;
                    foreach ($interface as $datagua) {
                        if ($datagua['type'] != pppoe) {
                    ?>
                            <tr style="text-align: center">
                                <td width="5%"><?= $no++ ?></td>
                                <td width="22%"><?= $datagua['name'] ?></td>
                                <td width="15%"><?= $datagua['type'] ?></td>
                                <td width="10%"><?= $datagua['mtu'] ?></td>
                                <td width="15%"><?= formatBytes($datagua['tx-byte'], 3); ?></td>
                                <td width="15%"><?= formatBytes($datagua['rx-byte'], 2); ?></td>
                                <td width="18%"><?= $datagua['mac-address'] ?></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>