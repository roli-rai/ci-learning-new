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

    <h1><?php echo $msg; ?></h1>
    <h2><?= $page ?> <?= $limit ?></h2>

    <table class="table table-striped table-bordered">
        <?php $col_names = array('SN', 'Id', 'First Name',  'Last Name','Email','Password','Active', 'Insert Time', 'Update Time'); ?>
        <?php echo create_thead($col_names); ?>
        <!-- <thead>
            <tr>
                <th scope="col">SN</th>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Active</th>
                <th scope="col">Insert Time</th>
                <th scope="col">Update Time</th>
            </tr>
        </thead> -->
        <tbody>
            
            <?php
            $i = 1;
            foreach($users as $user){ ?>
                <tr>
                    <td scope="row"><?= $i ?></td>
                    <td><?= $user['Id'] ?></td>
                    <td><?= $user['FirstName'] ?></td>
                    <td><?= $user['LastName'] ?></td>
                    <td><?= $user['Email'] ?></td>
                    <td><?= $user['Password'] ?></td>
                    <td>
                        <!-- <span class='badge bg-primary'>Active</span>
                        <span class='badge bg-danger'>In-active</span> -->
                        <?php echo $user['Active']==1 ? "<span class='badge bg-primary'>Active</span>" : "<span class='badge bg-danger'>In-active</span>" ;   ?>
                    </td>
                    <td><?= $user['InsertTime'] ?></td>
                    <td><?= $user['UpdateTime'] ?></td>
                </tr>
            <?php $i = $i+1; } ?>
        </tbody>
    </table>

    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/js_links.php'; ?>
</body>
</html>