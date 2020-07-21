<section class="content-header">
	<h1><?=$title;?></h1>
	<ol class="breadcrumb">
		<li><i class="fa fa-home"></i> Home</li>
		<li><a href="<?=site_url();?>admin/about_us/index"><i class="fa fa-table"></i> About Us</a></li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body">
					<form action="<?=site_url();?>admin/about_us/update" method="post">
						<div class="form-group">
							<label for="title">Judul</label>
							<input type="text" class="form-control" id="title" name="title" value="<?=$title_about_us;?>" required>
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea class="form-control" id="content" name="content" rows="10" required><?=$content_about_us;?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>