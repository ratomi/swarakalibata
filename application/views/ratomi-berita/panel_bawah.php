					<div class="boxed">	
							<div class="wrapper">
							<!--
								<div class="block-title">
									<a href="<?php echo base_url(); ?>" class="right">Kembali ke depan</a>
									<h2>DIBAWAH</h2>
								</div>
							-->
								<div class="block-content">
									
										<ul class="article-block-big">
											<li style='width:310px'>
												<div class='article-content'>
													
													<div class="article-block">
														<h2 class="list-title" style="color: blue;border-bottom: 2px solid blue;">Tentang Kami</h2>
														<div class="article">
															<p>Kami adalah bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
															bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.</p>
														</div>
													</div>
													
												</div>
											</li>
											<li style='width:310px'>
												<div class='block'>
													
														<h2 class="list-title" style="color: green;border-bottom: 2px solid green;">Link Relasi</h2>
														<ul class="article-list">
															<?php
															  $banner = $this->model_utama->view_ordering_limit('banner','id_banner','ASC',0,5);
															  foreach ($banner->result_array() as $b) {
																		echo "<li><a target='_BLANK' href='$b[url]'>$b[judul]</a></li>";
															  }
															?>
														</ul>
													
												</div>
											</li>
											<li>
												<div class='article-content'>
													XXXXXXXXXXXXX
												</div>
											</li>
										</ul>
									
								</div>
							</div>
					</div>
					
<!--	
<div class="boxed">
    <div class="wrapper">
        <div class="block">
            <div class="block-title" style="background: #dd8229;">
                <h2 class="text-uppercase mb-4">Location</h2>
                <p>2215 John Daniel Drive<br />Clark, MO 65243</p>
            </div>
            <div class="block-content">
                <h4 class="text-uppercase">Around the Web</h4>
                <ul class="article-block">
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i>XXX</a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i>XXXX</a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i>XXXX</a></li>
                    <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-dribbble fa-fw"></i>XXXX</a></li>
                </ul>
            </div>
            <div class="block-title">
                <h2 class="text-uppercase mb-4">About Freelancer</h2>
                <p class="lead mb-0"><span>Freelance is a free to use, open source Bootstrap theme. </span></p>
            </div>
        </div>
    </div>
</div>
-->				
					