<?php include 'header.php' ?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
                            <?php foreach ($articles as $id => $article) {?>
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="entry-header">
										<span class="time"><?=$article['autor'];?></span>
										<h2 class="entry-title"><a href="#"><?=$article['title'];?></a></h2>
										<span class="cat-links"><a href="#"><?=$article['category'];?></a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="../images/slide3.jpg">
									</div>
									<div class="entry-content">
                                        <?=$article['content'];?>
                                        <center><a class="button " href="?page=article&id=<?=$id;?>">Read More</a></center>
									</div>
								</div>
							</article>
                            <?php }?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
<?php include 'footer.php' ?>
