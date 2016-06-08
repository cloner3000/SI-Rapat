<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="color: #099">Hasil Rapat</h3> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group">
                                <?php foreach($rapat as $list) { ?>
                              <div class="panel panel-default">      
                                <div class="panel-heading">
                                    <h4><a href="<?php echo base_url(); ?>admin/c_admin/read/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></h4> 
                                </div>
                                <div class="panel-body">
                                    <?php echo $list['tanggal_rapat']; echo "<br>"; echo "<hr>"; echo "<blockquote>"; echo $list['hasil_rapat']; echo "</blockquote>"; ?>
                                </div>  
                              </div>  
                                <?php } ?>  
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Daftar Hasil Rapat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php foreach($rapat as $list  ) { ?>   
                                <li><a href="<?php echo base_url() ?>admin/c_admin/read/<?php echo $list['slug']; ?>"class="btn btn-primary btn-xs"><?php echo $list['judul']; ?></a></li>
                                <?php } ?>
                            </div>
                            <!-- /.list-group -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>
    <!-- /#wrapper -->        