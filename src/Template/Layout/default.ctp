<script>
    function doDate()
    {
        var now = new Date();
        if( now.getHours()==0 && now.getMinutes()==0 ) {
            document.location.href="/mailer_cake/users/sendmail";
        }
    }
    setInterval(doDate, 60000);
</script>



<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->fetch('content') ?>
</body>
</html>
