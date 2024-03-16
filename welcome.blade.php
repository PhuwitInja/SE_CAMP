<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ🧮</title>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            margin: 40px;
            background-color: #f7f7f7;
            text-align: center;
        }

        h1 {
            color: #007bff;
            font-size: 28px;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            font-size: 18px;
            color: white;
        }

        td {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>
    <h1>ตารางสูตรคูณ🧮</h1>
    <label for="my_number">กรอกตัวเลข:</label>
    <input type="number" id="my_number" value="10">
    <button onclick="generateTable()">สร้างตาราง</button>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ตัวคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody id="my_tbody"></tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("Javascript 101")
            $('#my_number').val(100)
        });

        function generateTable() {
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 1; i <= 12; i++) {
                let result = i * my_number;
                my_code_tr += `<tr><td>${i}</td><td>${my_number} x ${i} = ${result}</td></tr>`
            }
            $('#my_tbody').html(my_code_tr)
        }
    </script>
</body>
</html>
