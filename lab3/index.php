<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div class = "scroll">

    <table>
        <tbody>
            <?php for($i=1; $i<=24; $i++){?>
                <tr>
                <td>2</td>
                <td>x</td>
                <td><?php echo $i ?></td>
                <td>=</td>
                <td>
                        <?php 
                        $var_a = $i;
                        print($var_a *2)
                        ?>
                </td>
            </tr>
            <?php
            }
            ?>
            
        </tbody>
    </table>
    </div>
    <style>
        .scroll{
            width: 400px;
            height: 400px;
            overflow: auto;
        }

        table {
            width: 150px;
            height: 265px;
        }
    </style>
</body>

</html>