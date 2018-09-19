<template>

	<div>
		<!-- <form action="{{ route('uploadImage') }}" method="post" enctype="multipart/form-data"> -->
			<!-- Default box -->

			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Upload Image</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
			
				<div class="box-body">
					<div class="container-fluid">
						<div class="row">
							<div>
								<div>
									<!-- {{ csrf_field() }} -->
									<input type="hidden" value="leaf" name="image_type" id="image_type">

									<!-- Custom Tabs -->
									<div class="nav-tabs-custom">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#tab_1" data-toggle="tab" @click.prevent="setLeaf" onclick="event.preventDefault(); document.getElementById('image_type').value = 'leaf';">Leaves</a></li>
											<li><a href="#tab_2" data-toggle="tab" @click.prevent="setThorn" onclick="event.preventDefault(); document.getElementById('image_type').value = 'thorn';">Thorns</a></li>
											<li><a href="#tab_3" data-toggle="tab" @click.prevent="setBud" onclick="event.preventDefault(); document.getElementById('image_type').value = 'bud';">Buds</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1">
												<div class="col-md-offset-2 col-md-8">
													<img :src="image_leaf" alt="Leaf" class="img img-responsive img-thumbnail">
													<hr>
												</div>
												<div class="form-horizontal">
													<input type="file" name="image_leaf" id="image_leaf" accept="image/*" @change="GetImage">
												</div>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_2">
												<div class="col-md-offset-2 col-md-8">
													<img :src="image_thorn" alt="Thorn" class="img img-responsive img-thumbnail">
													<hr>
												</div>
												<div class="form-horizontal">
													<input type="file" name="image_thorn" id="image_thorn" accept="image/*" @change="GetImage">
												</div>
											</div>
											<!-- /.tab-pane -->
											<div class="tab-pane" id="tab_3">
												<div class="col-md-offset-2 col-md-8">
													<img :src="image_bud" alt="Bud" class="img img-responsive img-thumbnail">
													<hr>
												</div>
												<div class="form-horizontal">
													<input type="file" name="image_bud" id="image_bud" accept="image/*" @change="GetImage">
												</div>
											</div>
											<!-- /.tab-pane -->
										</div>
										<!-- /.tab-content -->
									</div>
									<!-- nav-tabs-custom -->

									<br>
									<h4><span class="text-success">Image Address</span><small> &nbsp; Location at which image was taken</small></h4>

									<hr>

									<div class="form-horizontal">
										<div class="form-group">
											<label for="address" class="col-md-3 control-label">Address<span class="text-red">*</span></label>
											<div class="col-md-6">
												<textarea @change="setAddress" class="form-control pull-right" id="address" name="address" placeholder="Address" rows="7" style="resize: none;"></textarea>
											</div>
										</div>

										<div class="form-group">
											<label for="districtName" class="col-md-3 control-label">District<span class="text-red">*</span></label>
											<div class="col-md-6">
												<input type="text" @change="setDistrictName" class="form-control pull-right" id="districtName" name="districtName" placeholder="District" value="">
											</div>
										</div>

										<div class="form-group">
											<label for="stateName" class="col-md-3 control-label">State<span class="text-red">*</span></label>
											<div class="col-md-6">
												<input type="text" @change="setStateName" class="form-control pull-right" id="stateName" name="stateName" placeholder="State" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /.col -->
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			
				<div class="box-footer">
					<span class="text-danger col-md-4"><strong>*</strong></span>&nbsp;Choose a <code>.JPG</code> image File.

					<!-- <input type="submit" class="pull-right btn btn-lg btn-success" value="Upload Image"> -->
					<a href="" v-if="loaded" class="pull-right btn btn-lg btn-success" @click.prevent="upload"><strong><i class="fa fa-cloud-upload"></i>&nbsp; Upload Image</strong></a>
					
					<div class="col-md-4" v-if="loading">
						<h1 class="text-success"><strong>Loading... </strong></h1> &nbsp;
						<img :src="loading_img" alt="Loader.gif" class="img img-responsive">
					</div>
				</div>
			<!-- /.box-footer-->
			</div>
		<!-- /.box -->
		<!-- </form> -->
	</div>

</template>

<script>
	export default {
		data() {
			return {
				image_type : 'leaf',
				image_leaf : '/staticImages/checkerboard.png',
				image_thorn : '/staticImages/checkerboard.png',
				image_bud : '/staticImages/checkerboard.png',
				loading_img : '/staticImages/loader.gif',
				loaded : false,
				loading : false,
				address : null,
				districtName : null,
				stateName : null,
				file_leaf : null,
				file_thorn : null,
				file_bud : null
			}
		},
		methods: {
			GetImage(e) {
				let image = e.target.files[0];
				let form = new FormData();

				this.imageReader(image)

				if(this.image_type == 'leaf') {
					form.append('image_leaf', image)
					this.file_leaf = form
				} else if(this.image_type == 'thorn') {
					form.append('image_thorn', image)
					this.file_thorn = form
				} else if(this.image_type == 'bud') {
					form.append('image_bud', image)
					this.file_bud = form
				}

				this.checkUploadButton()
			},
			imageReader(image) {
				let reader = new FileReader();
				reader.readAsDataURL(image);
				reader.onload = e => {
					if(this.image_type == 'leaf')
						this.image_leaf = e.target.result
					else if(this.image_type == 'thorn')
						this.image_thorn = e.target.result
					else if(this.image_type == 'bud')
						this.image_bud = e.target.result
				}
			},
			checkUploadButton() {
				if(this.address!=null && this.districtName!=null && this.stateName!=null) {
					if(this.image_type=='leaf' && this.image_leaf!='/staticImages/checkerboard.png') {
						this.loaded = true
					} else if(this.image_type=='thorn' && this.image_thorn!='/staticImages/checkerboard.png') {
						this.loaded = true
					} else if(this.image_type=='bud' && this.image_bud!='/staticImages/checkerboard.png') {
						this.loaded = true
					} else {
						this.loaded = false
					}
				} else
					this.loaded = false
			},
			setLeaf() {
				this.image_thorn = '/staticImages/checkerboard.png'
				document.getElementById('image_thorn').value = null
				this.file_thorn = null
				this.image_bud = '/staticImages/checkerboard.png'
				document.getElementById('image_bud').value = null
				this.file_bud = null

				this.image_type = 'leaf'
				this.clearFields()
			},
			setThorn() {
				this.image_leaf = '/staticImages/checkerboard.png'
				document.getElementById('image_leaf').value = null
				this.file_leaf = null
				this.image_bud = '/staticImages/checkerboard.png'
				document.getElementById('image_bud').value = null
				this.file_bud

				this.image_type = 'thorn'
				this.clearFields()
			},
			setBud() {
				this.image_leaf = '/staticImages/checkerboard.png'
				document.getElementById('image_leaf').value = null
				this.file_leaf = null
				this.image_thorn = '/staticImages/checkerboard.png'
				document.getElementById('image_thorn').value = null
				this.file_thorn = null
				
				this.image_type = 'bud'
				this.clearFields()
			},
			setAddress() {
				this.address = document.getElementById('address').value
				this.checkUploadButton()
			},
			setDistrictName() {
				this.districtName = document.getElementById('districtName').value
				this.checkUploadButton()
			},
			setStateName() {
				this.stateName = document.getElementById('stateName').value
				this.checkUploadButton()
			},
			clearFields() {
				this.address = null
				document.getElementById('address').value = ""
				
				this.districtName = null
				document.getElementById('districtName').value = ""
				
				this.stateName = null
				document.getElementById('stateName').value = ""

				this.checkUploadButton()
			},
			resetAll() {
				this.image_leaf = '/staticImages/checkerboard.png'
				document.getElementById('image_leaf').value = null
				this.file_leaf = null
				this.image_thorn = '/staticImages/checkerboard.png'
				document.getElementById('image_thorn').value = null
				this.file_thorn = null
				this.image_bud = '/staticImages/checkerboard.png'
				document.getElementById('image_bud').value = null
				this.file_bud = null
			},
			upload() {
				if(this.image_type == 'leaf') {
					let form = this.file_leaf
					form.append('address', this.address)
					form.append('districtName', this.districtName)
					form.append('stateName', this.stateName)
					form.append('image_type', this.image_type)
					this.file_leaf = form
					this.loading = true
					axios.post('/home/uploadImage', this.file_leaf).then(res => {
						this.$toasted.show(this.image_type.charAt(0).toUpperCase()+this.image_type.slice(1) + ' uploaded successfully!', {
											type : 'success',
											duration : 3000,
											icon : 'check'
										})
						this.loading = false
						window.location = '/home/uploadImage/'+res.data.imageSampleArr['image_id']
					})
				} else if(this.image_type == 'thorn') {
					let form = this.file_thorn
					form.append('address', this.address)
					form.append('districtName', this.districtName)
					form.append('stateName', this.stateName)
					form.append('image_type', this.image_type)
					this.file_thorn = form
					axios.post('/home/uploadImage', this.file_thorn).then(res => {
						this.$toasted.show(this.image_type.charAt(0).toUpperCase()+this.image_type.slice(1) + ' uploaded successfully!', {
											type : 'success',
											duration : 3000,
											icon : 'check'
										})
						this.loading = false
						window.location = '/home/uploadImage/'+res.data.imageSampleArr['image_id']
					})
				} else if(this.image_type == 'bud') {
					let form = this.file_bud
					form.append('address', this.address)
					form.append('districtName', this.districtName)
					form.append('stateName', this.stateName)
					form.append('image_type', this.image_type)
					this.file_bud = form
					axios.post('/home/uploadImage', this.file_bud).then(res => {
						this.$toasted.show(this.image_type.charAt(0).toUpperCase()+this.image_type.slice(1) + ' uploaded successfully!', {
											type : 'success',
											duration : 3000,
											icon : 'check'
										})
						this.loading = false
						window.location = '/home/uploadImage/'+res.data.imageSampleArr['image_id']
					})
				}
				this.resetAll()
				this.clearFields()
			}
		}
	}
</script>