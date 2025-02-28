<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>


<?php
// Initialize total variables
$total_loan_aprove = 0;
$total_loan_int = 0;
$total_with_amount = 0;
$total_remain_amount = 0;
?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Report</li>
                        <li class="breadcrumb-item active">mikopo chefuchefu</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>MIKOPO CHEFUCHEFU</h2>
                        <div class="pull-right">
                            <a href="javascript:;" class="btn btn-primary btn-sm"><i class="icon-printer">Print</i></a>
                        </div>    
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>S/no.</th>
                                        <th>Tawi</th>
                                        <th>Jina</th>
                                        <th>Afisa</th>
                                        <th>Aina ya Mkopo</th>
                                        <th>Riba</th>
                                        <th>Principal</th>
                                        <th>Mkopo + Riba</th>
                                        <th>Deni</th>
                                        <th>Muda</th>
                                        <th>Idadi</th>
                                        <th>Tarehe ya mkopo</th>
                                        <th>Tarehe ya Mwisho</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sugus as $index => $sugu): 
                                        // Accumulate the totals for each column
                                        $total_loan_aprove += $sugu->loan_aprove;
                                        $total_loan_int += $sugu->loan_int;
                                        $total_with_amount += $sugu->with_amount;
                                        $total_remain_amount += $sugu->remain_amount;
                                    ?>
                                        <tr>
                                            <td><?= ($index + 1) ?></td>
                                            <td><?= htmlspecialchars($sugu->blanch_name) ?></td>
                                            <td><?= htmlspecialchars($sugu->f_name) ?> <?= $sugu->m_name ?> <?= $sugu->l_name ?></td>
                                            <td><?= htmlspecialchars($sugu->empl_name) ?></td>
                                            <td><?= htmlspecialchars($sugu->loan_name) ?></td>
                                            <td><?= htmlspecialchars($sugu->interest_formular) ?>%</td>
                                            <td><?= number_format($sugu->loan_aprove, 2) ?></td>
                                            <td><?= number_format($sugu->loan_int, 2) ?></td>
                                            <td><?= number_format($sugu->remain_amount, 2) ?></td>
                                            
                                            <td>
                                                <?php 
                                                    if ($sugu->day == 1) {
                                                        echo "Siku";
                                                    } elseif ($sugu->day == 7) {
                                                        echo "Wiki";
                                                    } elseif ($sugu->day == 30 || $sugu->day == 31 || $sugu->day == 29 || $sugu->day == 28) {
                                                        echo "Mwezi"; 
                                                    }
                                                ?>
                                            </td>
                                            
                                            <td><?= htmlspecialchars($sugu->session) ?></td>
                                            <td><?= htmlspecialchars($sugu->loan_stat_date) ?></td>
                                            <td><?= htmlspecialchars($sugu->loan_end_date) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><strong>Jumla</strong></td>
                                        <td colspan="5"></td>
                                        <td><strong><?= number_format($total_loan_aprove, 2) ?></strong></td>
                                        <td><strong><?= number_format($total_loan_int, 2) ?>%</strong></td>
                                        <td><strong><?= number_format($total_remain_amount, 2) ?></strong></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>
