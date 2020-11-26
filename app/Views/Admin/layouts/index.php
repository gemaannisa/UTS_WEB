<?= $this->include('Admin/layouts/header');?>
<?= $this->include('Admin/layouts/sidebar');?>
<?php echo $this->include('Admin/layouts/navbar'); ?>
<?= $this->renderSection('content');?>
<?= $this->include('Admin/layouts/footer');?>