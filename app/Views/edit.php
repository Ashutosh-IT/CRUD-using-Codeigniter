<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD UPDATE IN CI</title>
    <link rel="stylesheet" href="http://localhost/crud_in_ci/public/css/bootstrap.min.css">
</head>
<body>
    <div class="container bg-warning mt-5 pt-3 pb-3" >
       <h1 style="text-align:center">UPDATE OPERATION</h1>
    </div>

    <div class="container mt-5">
    <form method="POST" action="<?= site_url('Crud/update'); ?>">
    <div class="form-group">
        <label for="urn">URN</label>
        <input type="text" name="urn" id="urn" class="form-control" placeholder="eg. 212134" value="<?php echo $student['urn']; ?>">
    </div>

    <div class="form-group mt-3">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="eg. xyz" value="<?php echo $student['name']; ?>">
    </div>

    <div class="form-group mt-3">
        <label for="branch">Branch</label>
        <input type="text" name="branch" id="branch" class="form-control" placeholder="eg. cse" value="<?php echo $student['branch']; ?>">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    </div>
    
    
</body>
</html>