<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo htmlspecialchars($company_data->comp_name); ?> | FAINI REPORT</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
            height: 80px;
        }

        .header .details {
            text-align: center;
        }

        .header .details p {
            margin: 0;
        }

        table {
            font-family: 'Poppins', sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .total-row {
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>

<div id="container">
    <!-- Header Section -->
    <div class="header">
        <div>
            <img src="<?php echo base_url() . 'assets/img/' . $company_data->comp_logo ?>" alt="Company Logo">
        </div>
        <div class="details">
            <p class="c"><b><?php echo htmlspecialchars($company_data->comp_name); ?></b></p>
            <p class="c"><b><?php echo htmlspecialchars($company_data->adress); ?></b></p>
            <p class="c">
                <?php if (empty($blanch_data->blanch_name)) : ?>
                    ALL BRANCH
                <?php else : ?>
                    <?php echo htmlspecialchars($blanch_data->blanch_name); ?>
                <?php endif; ?>
                - PREVIOUS INCOME REPORT <br> From: <?php echo htmlspecialchars($from); ?> To: <?php echo htmlspecialchars($to); ?>
            </p>
        </div>
    </div>

    <hr>

    <!-- Table Section -->
    <table>
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Incomes Type</th>
                <th>Income Amount</th>
                <th>User Employee</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($datas)) : ?>
                <?php foreach ($datas as $data) : ?>
                    <tr>
                    <td style="text-transform: uppercase;">
                      <?php echo htmlspecialchars($data->f_name . ' ' . $data->m_name . ' ' . $data->l_name); ?>
                    </td>

                        <td><?php echo htmlspecialchars($data->inc_name); ?></td>
                        <td><?php echo number_format($data->receve_amount); ?></td>
                        <td><?php echo htmlspecialchars($data->empl_name); ?></td>
                        <td><?php echo htmlspecialchars($data->receve_date); ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr class="total-row">
                    <td colspan="2"><b>JUMLA KUU</b></td>
                    <td colspan="3"><strong> <?= number_format($sum_income->total_receved) ?></strong></td> 
                </tr>
            <?php else : ?>
                <tr>
                    <td colspan="5" style="text-align: center;">No data available</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
