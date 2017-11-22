<?php $this->load->view('shif/shiflist_list');?>

        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <h1>Selamat Datang </h1>
                <h4>
                <?php echo $this->session->userdata('username');?>
                </h4>
            </div>
        </div>
<?php $this->load->view('shif/shif_footer');?>