
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $compdata->comp_name; ?> |BRANCH WISE REPORT</title>
</head>
<body>

<div id="container">
<div style='width: 100%;align-items: center; display: flex;justify-content:space-between;flex-direction: row;'>
</div>
<style>
.pull{
text-align: center;
/*  margin-top: 100px;
margin-bottom: 0px;
margin-right: 150px;
margin-left: 80px;*/

}
</style>
<style>
.display{
display: flex;

}
</style>

    <style>
 .c {
   text-transform: uppercase;
   }
    
    </style>



<table  style="border: none">
<tr style="border: none">
<td style="border: none">


<div style="width: 20%;">
<img src="<?php echo base_url().'assets/img/'.$compdata->comp_logo ?>" style="width: 100px;height: 80px;">
</div> 

</td>
<td style="border: none">
<div class="pull">
<p style="font-size:14px;" class="c"> <b><?php echo $compdata->comp_name; ?></b><br>
<b><?php echo $compdata->adress; ?></b> <br>
<?php //$day = date("d-m-Y"); ?>
</p>
<p style="font-size:12px;text-align:center;" class="c"><b>
    
    MAUZO YA LEO MATAWI </p>

</div>
</td>
</tr>
</table>

<div id="body">
<style> 
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 1px;
}

tr:nth-child(even) {
background-color: ;
}

</style>
</head>
<body>

<hr>



<table>
                                    <thead class="thead-primary">
                                        <tr>    
                                        <th>S/No.</th>
                                        <th>TAWI</th>
                                        <th>MAUZO JUMLA</th>
                                        
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                              <?php $no = 1; ?>
                                              <?php foreach ($branch_receivable as $branch): ?>
                                              <tr>
                                    <td><?php echo $no++; ?>.</td>
                                    <td><?php echo htmlspecialchars($branch->blanch_name); ?></td>
                                    <td><?php echo number_format($branch->total_restration); ?></td>
                                    </tr>
                            
                                     <?php endforeach; ?>

                                         <tr>
                                             <td><b>JUMLA:</b></td>
                                             <td></td>
                                             <td>
                    <?php
                        // Calculate total of all receivables
                        $total_restration = array_sum(array_column($branch_receivable, 'total_restration'));
                        echo number_format($total_restration, 2);
                    ?>
                </td>
                                         </tr>
                                    </tbody>
                                </table>
</div>

</div>

</body>
</html>


