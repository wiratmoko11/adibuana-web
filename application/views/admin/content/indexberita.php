<!-- Main content -->
			<div class="content-wrapper">

                <?php 
                    if($this->session->flashdata('success')){
                        ?>
                        <div class="alert bg-success alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Berhasil!</span> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php
                    }

                    if($this->session->flashdata('warning')){
                        ?>
                        <div class="alert bg-warning alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Perhatian!</span> <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                        <?php
                    }
                ?>

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">News<span><a class="btn btn-primary" href="<?php echo base_url(); ?>admin/news/add">Tambah</a></span> </h5>
					</div>

					

					<table class="table datatable-basic">
						<thead class="bg-blue">
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Post By</th>
                                <th>Post Date</th>
                                <th style="width:300px !important;">Aksi</th>
                            </tr>
						</thead>
						<tbody>
							 <?php 
                                foreach ($news as $q_news) {
                                    ?>
                                    <tr>
                                        <td><?php echo $q_news->title_eng ?></td>
                                        <td><?php echo $q_news->type_eng ?></td>
                                        <td><?php echo $q_news->name ?></td>
                                        <td><?php echo convertDateTime($q_news->post_date) ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/news/view/<?php echo $q_news->id ?>" class="btn btn-info">View</a>
                                            <a href="<?php echo base_url(); ?>admin/news/edit/<?php echo $q_news->id ?>" class="btn btn-success">Edit</a>
                                            <a href="<?php echo base_url(); ?>admin/news/delete/<?php echo $q_news->id ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>              
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->
			</div>
			<!-- /main content -->