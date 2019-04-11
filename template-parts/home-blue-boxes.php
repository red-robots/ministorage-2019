<?php $site_url = get_site_url(); ?>
<section class="section section-home-boxes clear">
	<div class="wrapper clear">
		<div class="flexrow home-three-boxes">
			<?php  
			$box_1_title = get_field('box_1_title');
			$box_1_text = get_field('box_1_text');
			$box_1_icon = get_field('box_1_icon');
			$box_1_inner_content = get_field('box_1_inner_content');
			$box_1_inner_image = get_field('box_1_inner_image');
			$box_1_inner_btn_name = get_field('box_1_inner_btn_name');
			$box_1_inner_btn_link = get_field('box_1_inner_btn_link'); 
			?>
			<?php if ($box_1_title) { ?>
			<div class="flexcol blue-box1">
				<div class="inside clear">
					<div class="boxinfo text-center has-inner-content" data-id="#boxcontent1">
						<span class="boxcontentwrap">
							<span class="textwrap">
								<span class="txt1"><?php echo $box_1_title ?></span>
								<?php if ($box_1_text) { ?>
									<span class="txt2"><?php echo $box_1_text ?></span>
								<?php } ?>
							</span>
							<?php if ($box_1_icon) { ?>
								<span class="icon"><img src="<?php echo $box_1_icon['url'] ?>" alt="" /></span>
							<?php } ?>
						</span>

						
						<div id="boxcontent1" class="box-inner-content">
							<div class="inner-title">
								<div class="pad"><span class="txt1 text-center"><?php echo $box_1_title ?></span></div>
							</div>

							<div class="box-inner-pad <?php echo($box_1_inner_image) ? 'has-image':'no-image'; ?>">
								<div class="boxinnertxt"><?php echo $box_1_inner_content ?></div>
								<?php if ($box_1_inner_image) { ?>
								<div class="box-inner-image">
									<?php if ($box_1_inner_btn_name && $box_1_inner_btn_link) { 
										$same_url = is_same_root_url($box_1_inner_btn_link,$site_url); 
										$target_link = ($same_url) ? '_self':'_blank'; ?>
										<a class="imagelink" href="<?php echo $box_1_inner_btn_link ?>" target="<?php echo $target_link ?>">
											<img src="<?php echo $box_1_inner_image['url'] ?>" alt="<?php echo $box_1_inner_image['title'] ?>" />
											<span class="btntxt"><?php echo $box_1_inner_btn_name ?></span>
										</a>
									<?php } else { ?>
										<img src="<?php echo $box_1_inner_image['url'] ?>" alt="<?php echo $box_1_inner_image['title'] ?>" />
									<?php } ?>
								</div>
								<?php } ?>
							</div>

						</div>
						
					</div>
				</div>
			</div>	
			<?php } ?>

			<?php  
			$box_2_title = get_field('box_2_title');
			$box_2_text = get_field('box_2_text');
			$box_2_icon = get_field('box_2_icon');
			$box_2_inner_content = get_field('box_2_inner_content');
			$box_2_inner_image = get_field('box_2_inner_image');
			$box_2_inner_btn_name = get_field('box_2_inner_btn_name');
			$box_2_inner_btn_link = get_field('box_2_inner_btn_link'); 
			?>
			<?php if ($box_2_title) { ?>
			<div class="flexcol blue-box2">
				<div class="inside clear">
					<div class="boxinfo text-center has-inner-content" data-id="#boxcontent2">
						<span class="boxcontentwrap">
							<span class="textwrap">
								<span class="txt1"><?php echo $box_2_title ?></span>
								<?php if ($box_2_text) { ?>
									<span class="txt2"><?php echo $box_2_text ?></span>
								<?php } ?>
							</span>
							<?php if ($box_2_icon) { ?>
								<span class="icon"><img src="<?php echo $box_2_icon['url'] ?>" alt="" /></span>
							<?php } ?>
						</span>

						
						<div id="boxcontent2" class="box-inner-content">
							<div class="inner-title">
								<div class="pad"><span class="txt1 text-center"><?php echo $box_2_title ?></span></div>
							</div>
							<div class="box-inner-pad <?php echo($box_2_inner_image) ? 'has-image':'no-image'; ?>">
								<div class="boxinnertxt"><?php echo $box_2_inner_content ?></div>
								<?php if ($box_2_inner_image) { ?>
								<div class="box-inner-image">
									<?php if ($box_2_inner_btn_name && $box_2_inner_btn_link) { 
										$same_url2 = is_same_root_url($box_2_inner_btn_link,$site_url); 
										$target_link2 = ($same_url2) ? '_self':'_blank'; ?>
										<a class="imagelink" href="<?php echo $box_2_inner_btn_link ?>" target="<?php echo $target_link2 ?>">
											<img src="<?php echo $box_2_inner_image['url'] ?>" alt="<?php echo $box_2_inner_image['title'] ?>" />
											<span class="btntxt"><?php echo $box_2_inner_btn_name ?></span>
										</a>
									<?php } else { ?>
										<img src="<?php echo $box_2_inner_image['url'] ?>" alt="<?php echo $box_2_inner_image['title'] ?>" />
									<?php } ?>
								</div>
								<?php } ?>
							</div>
						</div>

					</div>
				</div>
			</div>	
			<?php } ?>


			<?php  
			$box_3_title = get_field('box_3_title');
			$box_3_text = get_field('box_3_text');
			$box_3_icon = get_field('box_3_icon');
			$box_3_inner_content = get_field('box_3_inner_content');
			$box_3_inner_image = get_field('box_3_inner_image');
			$box_3_inner_btn_name = get_field('box_3_inner_btn_name');
			$box_3_inner_btn_link = get_field('box_3_inner_btn_link'); 
			?>
			<?php if ($box_3_title) { ?>
			<div class="flexcol blue-box3">
				<div class="inside clear">
					<div class="boxinfo text-center has-inner-content" data-id="#boxcontent3">
						<span class="boxcontentwrap">
							<span class="textwrap">
								<span class="txt1"><?php echo $box_3_title ?></span>
								<?php if ($box_3_text) { ?>
									<span class="txt2"><?php echo $box_3_text ?></span>
								<?php } ?>
							</span>
							<?php if ($box_3_icon) { ?>
								<span class="icon"><img src="<?php echo $box_3_icon['url'] ?>" alt="" /></span>
							<?php } ?>
						</span>

						
						<div id="boxcontent3" class="box-inner-content">
							<div class="inner-title">
								<div class="pad"><span class="txt1 text-center"><?php echo $box_3_title ?></span></div>
							</div>
							<div class="box-inner-pad <?php echo($box_3_inner_image) ? 'has-image':'no-image'; ?>">
								<div class="boxinnertxt"><?php echo $box_2_inner_content ?></div>
								<?php if ($box_3_inner_image) { ?>
								<div class="box-inner-image">
									<?php if ($box_3_inner_btn_name && $box_3_inner_btn_link) { 
										$same_url3 = is_same_root_url($box_3_inner_btn_link,$site_url); 
										$target_link3 = ($same_url3) ? '_self':'_blank'; ?>
										<a class="imagelink" href="<?php echo $box_3_inner_btn_link ?>" target="<?php echo $target_link3 ?>">
											<img src="<?php echo $box_3_inner_image['url'] ?>" alt="<?php echo $box_3_inner_image['title'] ?>" />
											<span class="btntxt"><?php echo $box_3_inner_btn_name ?></span>
										</a>
									<?php } else { ?>
										<img src="<?php echo $box_3_inner_image['url'] ?>" alt="<?php echo $box_3_inner_image['title'] ?>" />
									<?php } ?>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<?php } ?>
			
		</div>
	</div>
</section>	