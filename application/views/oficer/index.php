<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">

                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h7><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                class="fa fa-arrow-left"></i></a><?php echo $manager_data->comp_name; ?> -
                        <?php echo $manager_data->blanch_name; ?> </h7>

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url("oficer/index"); ?>"><i
                                    class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active"><?php echo $this->lang->line("home_menu"); ?></li>
                        <li class="breadcrumb-item active"><?php echo $this->lang->line("dashboard_menu"); ?></li>

                    </ul>
                </div>
                <?php $blanch_id = $this->session->userdata('blanch_id'); ?>
                <?php $blanch_account = $this->queries->get_Account_balance_blanch_data($blanch_id); ?>
                <?php //print_r($blanch_account); ?>
                <?php foreach ($empl_priv_data as $empl_priv_datas): ?>

                    <?php if ($empl_priv_datas->privillage == 'report') {
                        ?>
                        <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                            <?php foreach ($blanch_account as $blanch_account): ?>
                                <div class="bh_chart hidden-xs">
                                    <div class="float-left m-r-15">
                                        <small><?php echo $blanch_account->account_name; ?></small>
                                        <h6 class="mb-0 mt-1"><i
                                                class="icon-wallet"></i><?php echo number_format($blanch_account->blanch_capital); ?>
                                        </h6>
                                    </div>

                                </div>
                            <?php endforeach; ?>

                        </div>

                    <?php } ?>

                <?php endforeach; ?>


            </div>
        </div>
        <?php if ($das = $this->session->flashdata('massage')): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dismisible alert-success"> <a href="" class="close">&times;</a>
                        <?php echo $das; ?> </div>
                </div>
            </div>
        <?php endif; ?>


        <div class="row clearfix">

            <div class="col-lg-4 col-md-6">
                <div class="card top_counter currency_state">
                    <a href="<?php echo base_url("oficer/loan_pending"); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="body">
                            <div class="icon"><img
                                    src="https://www.wrraptheme.com/templates/lucid/html/assets/images/coin/qtum.svg"
                                    width="35" /></div>
                            <div class="content">
                                <div class="text">Maombi ya Mikopo</div>
                                <h5 class="number"><?= $loan_pending ?></h5>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter currency_state">
                    <a href="<?php echo base_url("oficer/disburse_loan"); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="body">
                            <div class="icon"><img
                                    src="https://www.wrraptheme.com/templates/lucid/html/assets/images/coin/ETH.svg"
                                    width="35" /></div>
                            <div class="content">
                                <div class="text">Mikopo iliyopitishwa</div>
                                <h5 class="number"><?= $total_disbursed ?></h5>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter currency_state">
                    <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="body">
                            <div class="icon"><img
                                    src="https://www.wrraptheme.com/templates/lucid/html/assets/images/coin/XRP.svg"
                                    width="35" /></div>
                            <div class="content">
                                <div class="text">WALIOPEWA MIKOPO LEO</div>
                                <h5 class="number"><?= $total_withdrawal ?></h5>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter currency_state">
                    <a href="<?php echo base_url("oficer/loan_pending"); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="body">
                            <div class="icon"><img
                                    src="https://www.wrraptheme.com/templates/lucid/html/assets/images/coin/neo.svg"
                                    width="35" /></div>
                            <div class="content">
                                <div class="text">Mikopo iliyoombwa</div>
                                <h5 class="number"><?= number_format($pending_total) ?></h5>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter currency_state">
                    <a href="<?php echo base_url("oficer/disburse_loan"); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="body">
                            <div class="icon"><img
                                    src="https://www.wrraptheme.com/templates/lucid/html/assets/images/coin/qtum.svg"
                                    width="35" /></div>
                            <div class="content">
                                <div class="text">Mikopo iliyopitishwa</div>
                                <h5 class="number"><?= number_format($total_disbrse->total_loan) ?></h5>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter currency_state">
                    <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="body">
                            <div class="icon"><img
                                    src="https://www.wrraptheme.com/templates/lucid/html/assets/images/coin/stellar.svg"
                                    width="35" /></div>
                            <div class="content">
                                <div class="text">LEO GAWA</div>
                                <h5 class="number"><?= number_format($total_loanwithdraw->total_loan_with) ?></h5>
                            </div>
                        </div>
                </div>
                </a>
            </div>


        </div>








        <div class="container">
            <div class="row clearfix">
                <!-- First Grid Column -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="header">
                            <h2>MALIPO YA LEO</h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/leo"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Leo</a>
                                        </td>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/leo"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span class="badge badge-seconday"><?= $leojumla->total_hai ?></span>
                                                <span
                                                    class="badge badge-success"><?= number_format($total_active->total_deposit) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/madeni"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Madeni
                                                Sugu</a>
                                        </td>
                                        <?php $date = date("Y-m-d"); ?>
                                        <?php $customer_deposit = $this->db->query("SELECT * FROM tbl_loans WHERE blanch_id = '$blanch_id'AND date_show = '$date' AND dep_status = 'close'"); ?>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/madeni"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span
                                                    class="badge badge-seconday"></span>
                                                <span
                                                    class="badge badge-danger"><?= number_format($deposit_out->total_out_dep) ?></span>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Gawa</a>
                                        </td>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span class="badge badge-seconday"><?= $total_withdrawal ?></span>
                                                <span
                                                    class="badge badge-info"><?= number_format($total_loanwithdraw->total_loan_with) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/deducted_income"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Fomu</a>
                                        </td>

                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/deducted_income"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span class="badge badge-seconday"><?= $total_withdrawal ?></span>
                                                <span
                                                    class="badge badge-success"><?= number_format($total_deducted->total_deducted_fee) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/income_dashboard"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">Faini</a>
                                        </td>

                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/income_dashboard"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">

                                                <span
                                                    class="badge badge-danger"><?= number_format($total_receved->total_receved) ?></span>
                                            </a>
                                        </td>
                                    </tr>




                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>

                <!-- Second Grid Column -->
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="header">
                            <h2>ZIADA</h2>
                        </div>
                        <div class="body">
                            <table class="table">
                            <tbody>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/loan_pending_time"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">MALAZO</a>
                                        </td>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/loan_pending_time"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span
                                                    class="badge badge-success"><?= number_format($total_pending->total_pending) ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href="<?php echo base_url("oficer/oustand_loan"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">MADENI
                                                JUMLA</a>
                                        </td>
                                       <?php  $outstand = $this->queries->get_outstand_loanBranch($blanch_id);  ?>
                                        <td class="align-right">
                                            <a href="<?php echo base_url("oficer/oustand_loan"); ?>"
                                                style="display: block; color: inherit; text-decoration: none;">
                                                <span
                                                    class="badge badge-danger"><?php echo number_format($outstand->total_outstand); ?></span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;"> SUGU KESHO</a>
                                        </td>
                                        <?php $date = date("Y-m-d"); ?>
                                        <?php $customer_deposit = $this->db->query("SELECT * FROM tbl_loans WHERE blanch_id = '$blanch_id'AND date_show = '$date' AND dep_status = 'close'"); ?>
                                        <td class="align-right">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">
                                                
                                                <span
                                                    class="badge badge-danger">SOON</span>
                                            </a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="c">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">WATEJA WAPYA</a>
                                        </td>
                                        <td class="align-right">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">
                                                
                                                <span
                                                    class="badge badge-info">SOON</span>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="c">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">GAWA YA MWEZI</a>
                                        </td>

                                        <td class="align-right">
                                            <a href=""
                                                style="display: block; color: inherit; text-decoration: none;">
                                               
                                                <span
                                                    class="badge badge-success">SOON</span>
                                            </a>
                                        </td>
                                    </tr>

                    




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>








        <div class="row clearfix">


            <?php foreach ($empl_priv_data as $empl_priv_datas): ?>
                <?php if ($empl_priv_datas->privillage == 'report') {
                    ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo $this->lang->line("revenue_menu"); ?></h2>
                                <ul class="header-dropdown">
                                    <!-- <li><a class="tab_btn" href="javascript:void(0);" title="Weekly">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" title="Monthly">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">Y</a></li> -->
                                    <!--   <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li> -->
                                </ul>

                            </div>
                            <?php $blanch_id = $this->session->userdata('blanch_id'); ?>
                            <?php
                            $blanch_capital = $this->queries->get_blanch_capital_blanch($blanch_id);
                            $disburse_loan = $this->queries->get_total_loan_with($blanch_id);
                            $outstand = $this->queries->get_outstand_loanBranch($blanch_id);
                            ?>
                            <?php //print_r($blanch_capital); ?>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="body bg-success text-light">

                                            <h4><i
                                                    class="icon-wallet"></i><?php echo number_format($blanch_capital->total_blanch_capital); ?>
                                            </h4>
                                            <span><?php echo $this->lang->line("branch_balance_menu"); ?></span>
                                        </div>
                                    </div>
                                 <div class="col-md-3">
                                        <div class="body bg-info text-light">
                                            <h4><i
                                                    class="icon-wallet"></i><?php echo number_format($disburse_loan->total_loanAprove); ?>
                                            </h4>
                                            <span><?php echo $this->lang->line("disburse_loan_menu"); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="body bg-primary text-light">
                                            <h4><i
                                                    class="icon-wallet"></i><?php echo number_format($disburse_loan->total_loanInt); ?>
                                            </h4>
                                            <span><?php echo $this->lang->line("expectation_menu"); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="body bg-danger text-light">
                                            <h4><i
                                                    class="icon-wallet"></i><?php echo number_format($outstand->total_outstand); ?>
                                            </h4>
                                            <span><?php echo $this->lang->line("outstand_menu"); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div id="total_revenue" class="ct-chart m-t-20"></div> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <?php endforeach ?>





        </div>







        <div class="row clearfix w_social3">

            <?php foreach ($empl_priv_data as $empl_priv_datas): ?>
                <?php if ($empl_priv_datas->privillage == 'customer') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/customer"); ?>">
                            <div class="card facebook-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/user.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color: black;">
                                        <?php echo $this->lang->line("registercustomer_menu") ?></div>
                                    <!-- <div class="number">123</div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } elseif ($empl_priv_datas->privillage == 'loan') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/loan_application"); ?>">
                            <div class="card instagram-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/request.jpg"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("applyloan_menu") ?>
                                    </div>
                                    <!-- <div class="number">231</div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/loan_pending"); ?>">
                            <div class="card facebook-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/aplication.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("loanRequest_menu"); ?>
                                    </div>
                                    <!-- <div class="number">123</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/disburse_loan"); ?>">
                            <div class="card instagram-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/aproveds.jpg"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black"><?php echo $this->lang->line("loanAproved_menu"); ?>
                                    </div>
                                    <!-- <div class="number">231</div> -->
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/loan_rejected"); ?>">
                            <div class="card twitter-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/rejected.jpg"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("rejectedloan_menu") ?>
                                    </div>
                                    <!-- <div class="number">31</div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } elseif ($empl_priv_datas->privillage == 'teller') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/teller_dashboard") ?>">
                            <div class="card twitter-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/deposit.jpg"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("deposit_menu"); ?>
                                    </div>
                                    <!-- <div class="number">31</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/teller_dashboard") ?>">
                            <div class="card google-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/withdrawal.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("withdrawal_menu"); ?>
                                    </div>
                                    <!-- <div class="number">254</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } elseif ($empl_priv_datas->privillage == 'expenses') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/expnses_requisition_form"); ?>">
                            <div class="card behance-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/expenses.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black"><?php echo $this->lang->line("expenses_menu"); ?>
                                    </div>
                                    <!-- <div class="number">121</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } elseif ($empl_priv_datas->privillage == 'report') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/daily_report"); ?>">
                            <div class="card linkedin-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/daily.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black"><?php echo $this->lang->line("Daily_report_menu"); ?>
                                    </div>
                                    <!-- <div class="number">2510</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/cash_transaction"); ?>">
                            <div class="card facebook-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/transaction.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("transaction_menu"); ?>
                                    </div>
                                    <!-- <div class="number">123</div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/loan_pending_time"); ?>">
                            <div class="card instagram-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/default.jpeg"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("pending_menu") ?></div>
                                    <!-- <div class="number">231</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/get_today_receivable"); ?>">
                            <div class="card twitter-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/receivable.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("receivable_menu") ?>
                                    </div>
                                    <!-- <div class="number">31</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/today_received"); ?>">
                            <div class="card google-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/received.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("received_menu"); ?>
                                        &nbsp;&nbsp;&nbsp;</div>
                                    <!-- <div class="number" style="color:green;">1,000,000,000</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/get_loan_withdrawal_data"); ?>">
                            <div class="card linkedin-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/withdrawal.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("loan_with_menu"); ?>
                                    </div>
                                    <!-- <div class="number">2510</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/oustand_loan"); ?>">
                            <div class="card behance-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/default.jpeg"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("outstand_menu"); ?>
                                    </div>
                                    <!-- <div class="number">121</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } elseif ($empl_priv_datas->privillage == 'store') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/deposit_stoo"); ?>">
                            <div class="card twitter-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/stoo.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black"><?php echo $this->lang->line("store_menu"); ?></div>
                                    <!-- <div class="number">1</div> -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } elseif ($empl_priv_datas->privillage == 'income') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/income_dashboard"); ?>">
                            <div class="card twitter-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/income.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("income_menu") ?></div>
                                    <!-- <div class="number">31</div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } elseif ($empl_priv_datas->privillage == 'saving') {
                    ?>
                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="<?php echo base_url("oficer/saving_deposit"); ?>">
                            <div class="card twitter-widget">
                                <div class="icon"><img src="<?php echo base_url() ?>assets/img/saving.png"
                                        style="width: 44px; height: 44px;"></div>
                                <div class="content">
                                    <div class="text" style="color:black;"><?php echo $this->lang->line("saving_menu"); ?></div>
                                    <!-- <div class="number">31</div> -->
                                </div>
                            </div>
                        </a>
                    </div>

                <?php } ?>

            <?php endforeach; ?>

        </div>


    </div>
</div>

</div>

<?php include('incs/footer.php'); ?>