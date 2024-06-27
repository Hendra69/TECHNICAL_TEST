<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Include Vite CSS -->
    @vite('resources/css/app.css')

    <script>
        window.apiBaseUrl = @json(config('api.base_url'));
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #333;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .col-md-6 {
            width: 48%;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #tableContainer {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #toggleFormBtn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        #toggleFormBtn:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body class="antialiased">

    <div class="container">

        <a href="{{ config('api.base_url') }}/documentation" target="_blank" class="btn btn-success">Dokumentasi API</a>

        <div class="row">
            <h3>Daftar Barang</h3>

            <div class="col-md-6">
                <label for="minDate">Start Date:</label>
                <input class="form-control" type="date" id="minDate" name="minDate">
            </div>
            <div class="col-md-6">
                <label for="maxDate">End Date:</label>
                <input class="form-control" type="date" id="maxDate" name="maxDate">
            </div>
        </div>

        <div id="tableContainer">
            <div style="text-align: right;">
                <button type="button" id="toggleFormBtn">Tambah Barang</button>
            </div>
            <table id="barangTable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Jumlah Terjual</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated here via JavaScript -->
                </tbody>
            </table>
        </div>

        <!-- Placeholder for form or additional content -->
        <div id="formContainer" class="form-container"></div>

    </div>

    <!-- Include Vite JS -->
    @vite('resources/js/app.js')
</body>

</html>
