<?php $this->load->view('back/template/meta'); ?>
<div class="wrapper">
    <?php $this->load->view('back/template/header'); ?>
    <?php $this->load->view('back/template/sidebar'); ?>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/back/plugins/jquery/jquery.min.js"></script>
    <?php echo $contents; ?>
    <?php $this->load->view('back/template/footer'); ?>
</div>
<?php $this->load->view('back/template/script'); ?>