<!DOCTYPE html>
<html>
<head>
    <title>Import Excel File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">

    <h2>Export Users</h2>
    <a href="{{ route('export.excel') }}">Download Users CSV</a>

    
    <h2 class="mb-4">Import Excel File</h2>
    <form action="{{ route('import.excel.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose Excel File</label>
            <input type="file" name="file" class="form-control" id="file" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
</body>
</html>