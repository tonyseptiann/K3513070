<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Detail Produk</h1><br />
				<div class="row">
				<!--sidebar menu -->
					
					<!--end sidebar menu -->	
					<!-- form, content, etc -->
					<div class="span12">
						<!-- basic tabs menu -->
						
						<div class="well"><!-- div well & form -->
							<form class="form-horizontal" action="<?php echo base_url(); ?>administrator/submit_edit_produk" method="POST" enctype="multipart/form-data">
							<fieldset>
								<div class="col-md-10">
										<input type="image" style="width: 440px;" src="<?php echo base_url(); ?>upload/produk/thumb/<?php echo $edit_produk->file_name; ?>" alt="">
									</div></br>
								<div class="col-md-10">
								<div class="col-md-2">Nama Produk</div>
								<div class="col-md-8"><h1><?php echo $edit_produk->nama_produk; ?></h1></div>
								</div></br>
								<div class="col-md-10">
								<div class="col-md-2">Kategori</div>
								<div class="col-md-8"><h1><?php echo $edit_produk->nama_kategori; ?></h1></div>
								</div></br>
								<div class="col-md-10">
								<div class="col-md-2">Deskripsi Produk</div>
								<div class="col-md-8"><h3><?php echo $edit_produk->deskripsi; ?></h3></div>
								</div>
							
								
								
								
							</fieldset>
								
							</form>
						</div><!-- div without well class & form -->
						
					</div>
					<!-- form, content, etc -->
				</div>
			</div>
		</div>