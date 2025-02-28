<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>
<div id="main-content">
<div class="row clearfix">
<div class="col-lg-12">
<div class="card">
                        <div class="header">
                            <h2>Leo</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="fancy-checkbox">
                                                    <input class="select-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>Name</th>
                                            <th>Phone</th>                                                               
                                            <th>Amount</th>
                                            <th>Depositor</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                        <tbody>

                                        
                                        <?php foreach ($todays as $today): ?>
                                        <tr>
                                            <td style="width: 50px;">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                
                                            <p class="c_name">
                                               <?= strtoupper($today->f_name) ?> <?= strtoupper($today->m_name) ?> <?= strtoupper($today->l_name) ?> 
                                           </p>

                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i><?= $today->phone_no  ?></span>
                                            </td>                                   
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i><?= number_format($today->depost) ?></address>
                                            </td>

                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i><?= $today->empl_username ?></address>
                                        </td>

                                        <td>
                                                <address><i class="zmdi zmdi-pin"></i><?= $today->deposit_day ?></address>
                                        </td>
                                           
                                        </tr>
                                        <?php endforeach ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>




<?php include('incs/footer.php'); ?>