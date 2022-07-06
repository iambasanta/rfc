<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrants</title>
    <style>
        .registrants {
            font-family: sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .registrants th {
            text-align: left;
            background: #d7d8d7;
        }

        .registrants th,
        .registrants td {
            border: 1px solid #5f605f;
            padding: 8px;
        }
    </style>
</head>

<body>
    <table class="registrants">
        <thead>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>College/Institute</th>
                <th>Faculty</th>
                <th>Signature</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrants as $registrant)
            <tr>
                <td>{{ $registrant->id }}</td>
                <td>{{ $registrant->name }}</td>
                <td>{{ $registrant->email }}</td>
                <td>{{ $registrant->college }}</td>
                <td>{{ $registrant->faculty }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>
