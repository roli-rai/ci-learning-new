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
        <div class="row justify-content-center p-2 ">

            <div class="col-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form action="" method="post">
                            <div>
                                <?php echo validation_errors('<small class="text-danger">','</small><br>'); ?>
                                <span class="text-danger"><?php echo $this->session->flashdata('error'); ?></span>
                                <span class="text-danger"><?php echo $this->session->flashdata('success'); ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/js_links.php'; ?>
</body>
</html>