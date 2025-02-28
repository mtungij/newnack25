<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

<?php
// Initialize total variables
$total_customers = 0;
$total_loan_with = 0;
$total_loan_int = 0;
$total_customers_with_loan_0_to_499999 = 0;
$total_customers_with_loan_above_500000 = 0;
?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Report</li>
                        <li class="breadcrumb-item active">Monthly withdrawal</li>
                    </ul>
                </div>
            </div>
        </div>

        <?php if ($das = $this->session->flashdata('massage')): ?> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="alert alert-dismisible alert-success"> 
                        <a href="" class="close">&times;</a> 
                        <?php echo $das; ?>
                    </div> 
                </div> 
            </div> 
        <?php endif; ?>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>GAWA YA MWEZI</h2>
                        <div class="pull-right">
                            <a href="javascript:;" class="btn btn-primary btn-sm"><i class="icon-printer">Print</i></a>
                        </div>    
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead class="thead-primary">
                                    <tr>
                                        <th>TAWI</th>
                                        <th>WATEJA JUMLA</th>
                                        <th>GAWA YA MWEZI</th>
                                        <th>GAWA + RIBA</th>
                                        <th>MIKOPO KATI YA 0 - 499,999</th>
                                        <th>MIKOPO ZAIDI YA 500,000</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($customer_monthly as $customer): ?>
                                    <?php
                                    // Accumulate totals
                                    $total_customers += $customer->total_customers;
                                    $total_loan_with += $customer->total_loan_with;
                                    $total_loan_int += $customer->total_loan_int;
                                    $total_customers_with_loan_0_to_499999 += $customer->total_customers_with_loan_0_to_499999;
                                    $total_customers_with_loan_above_500000 += $customer->total_customers_with_loan_above_500000;
                                    ?>
                                    <tr>
                                        <td><?= htmlspecialchars($customer->blanch_name) ?></td>
                                        <td><?= htmlspecialchars($customer->total_customers) ?></td>
                                        <td><?= number_format($customer->total_loan_with, 2) ?></td>
                                        <td><?= number_format($customer->total_loan_int, 2) ?></td>
                                        <td><?= htmlspecialchars($customer->total_customers_with_loan_0_to_499999) ?></td>
                                        <td><?= htmlspecialchars($customer->total_customers_with_loan_above_500000) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><strong>Jumla</strong></td>
                                        <td><strong><?= number_format($total_customers) ?></strong></td>
                                        <td><strong><?= number_format($total_loan_with, 2) ?></strong></td>
                                        <td><strong><?= number_format($total_loan_int, 2) ?></strong></td>
                                        <td><strong><?= number_format($total_customers_with_loan_0_to_499999) ?></strong></td>
                                        <td><strong><?= number_format($total_customers_with_loan_above_500000) ?></strong></td>
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
