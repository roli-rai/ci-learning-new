<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <?php require_once 'includes/css_links.php'; ?>
</head>
<body>
    <?php require_once 'includes/nav.php'; ?>
    <h1><?php //$msg; ?></h1>

    <div class="container my-3 p-3">
        <div class="row justify-content-center ">
            <div class="col-5 border border-dard shadow p-4">
                <div>
                    <strong>Id </strong>: 
                    <span class="text-primary"><?php echo $user['Id']; ?></span>
                </div>
                <div>
                    <strong>First Name </strong>: 
                    <span class="text-primary"><?= $user['FirstName']; ?></span>
                </div>
                <div>
                    <strong>Last Name </strong>: 
                    <span class="text-primary"><?= $user['LastName']; ?></span>
                </div>
                <div>
                    <strong>Email </strong>: 
                    <span class="text-primary"><?= $user['Email']; ?></span>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/js_links.php'; ?>
</body>
</html>