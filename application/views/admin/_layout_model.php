<?php $this->load->view('admin/components/page_head') ?>



<body style="background: #0a3955;" >



<div class="modal show" role="dialog" >
    <?php $this->load->view($subview); //Subview is set in controller  ?>

    <div class="modal-body"></div>
    <div class="modal-footer">
        <?=config_item('site_name')?>
    </div>

</div>

<?php $this->load->view('admin/components/page_tail') ?>
