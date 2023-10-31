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
    <h2><?php echo $id; ?></h2>

    <?php echo anchor('blog/comments', 'Click Here', "target='_blank'");?>
    <a href="<?= base_url();?>blog/comments" target='_blank'>Click Here</a>

    <?php $v= array('id', 'name', 'email'); ?>
    
    <table class="table">
        <?php // echo create_thead($col_names); ?>
        <tbody>
            <tr>
                <td><?php echo truc_text("abc"); ?></td>
                <td><?php echo truc_text("lkjsdlf sjdklfjsio lfjsoljslkd"); ?></td>
                <td><?php echo truc_text("lkjsdlf sjdklfjsio  lfjsoie lsjdfoiee sjfoiwe sdfoiwe sjoweo o flkjsdlf sjdklfjsio  lfjsoie lsjdfoiee sjfoiwe sdfoiwe sjoweo o f", 'https://www.google.com'); ?></td>
            </tr>
        </tbody>
    </table>

    <pre>
    </pre>

    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/js_links.php'; ?>
</body>
</html>