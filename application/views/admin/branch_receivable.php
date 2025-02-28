<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">Report</li>
                        <li class="breadcrumb-item active">Branchwise Expectation Receivable</li>
                    </ul>
                </div>            
            </div>
        </div>

        <?php if ($das = $this->session->flashdata('massage')): ?> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="alert alert-dismissible alert-success"> <a href="" class="close">&times;</a> 
                        <?php echo $das;?> 
                    </div> 
                </div> 
            </div> 
        <?php endif; ?>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Branchwise Report</h2> 
                        <div class="pull-right">
                            <a href="<?php echo base_url("admin/print_blanchwisereceivable"); ?>" class="btn btn-primary" target="_blank"><i class="icon-printer"> Print</i></a>  
                        </div>   
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead class="thead-primary">
                                    <th>S/No.</th>
                                    <th>Branch Name</th>
                                    <th>Total Receivable</th>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($branch_receivable as $branch): ?>
                                        <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo htmlspecialchars($branch->blanch_name); ?></td>
                                            <td><?php echo number_format($branch->total_restration, 2); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td><b>TOTAL:</b></td>
                                        <td></td>
                                        <td>
                                            <?php
                                                // Optionally, you can calculate the total sum of all branches' receivable amounts here.
                                                $total_restration = array_sum(array_column($branch_receivable, 'total_restration'));
                                                echo number_format($total_restration, 2);
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('incs/footer.php'); ?>

<div class="modal fade" id="addcontact2<?php //echo $employees->empl_id; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Filter Cash Transaction</h6>
            </div>
            <?php echo form_open("admin/cash_transaction_blanch"); ?>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12 col-12">
                        <span>*Select Branch:</span>
                        <select type="number" class="form-control" name="blanch_id" required>
                            <option value="">Select Branch</option>
                            <?php foreach ($blanch as $blanchs): ?>
                            <option value="<?php echo $blanchs->blanch_id; ?>"><?php echo $blanchs->blanch_name; ?></option>
                            <?php endforeach; ?>
                            <option value="all">All</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-6">
                        <?php $date = date("Y-m-d"); ?>
                        <span>*From:</span>
                        <input type="date" name="from" autocomplete="off" value="<?php echo $date; ?>" class="form-control" required>
                    </div>
                    <div class="col-md-6 col-6">
                        <span>*To:</span>
                        <input type="date" name="to" autocomplete="off" value="<?php echo $date; ?>" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
