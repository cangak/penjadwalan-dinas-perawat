            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line"><?php echo $title; ?></h1>

                    <?php 
                    	if( $message ){
                    		echo '<div class="alert alert-'.$type.'">'.$message.'</div>'; 
                    	}
                    ?>
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jabatan
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="<?php echo base_url('c_Jabatan/update_jabatan'); ?>" role="form">
                                <input type="hidden" name="ID" value="<?php echo $jabatan->ID; ?>" />
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="name" value="<?php echo $jabatan->name; ?>" placeholder="Title" />
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="<?php echo $jabatan->slug; ?>" placeholder="Slug" />
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            <hr />

                            For more customization for this template or its components please visit official bootstrap website i.e <strong> getbootstrap.com </strong> or
                            <a href="http://getbootstrap.com/css/#forms" target="_blank">click here</a>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="alert alert-warning">
                        This is blank page for which you can customize for your project. 
                        Use this admin template 100% free to use for personal and commercial use which is crafted by 
                        <br />
                        <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap.com</a> . For more free templates and snippets keep looking <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap.com</a> . Hope you will like our work
                    </div>
                </div>
                
            </div>