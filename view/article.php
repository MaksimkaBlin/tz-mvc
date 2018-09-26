<?php include 'header.php' ?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------Content-Box-------------------->
				<div id="main-content">
					<div class="wrap-content">
						<div class="row">
							<article class="single-post zerogrid">
								<div class="row wrap-post"><!--Start Box-->
									<div class="entry-header">
										<span class="time"><?= $article['autor'];?></span>
										<h2 class="entry-title"><a href="#"><?= $article['title'];?></a></h2>
										<span class="cat-links"><a href="#"><?= $article['category'];?></a></a></span>
									</div>
									<div class="post-thumbnail-wrap">
										<img src="../images/slide2.jpg">
									</div>
									<div class="entry-content">
                                        <?= $article['content'];?>
										</div>
								</div>
							</article>
<!--							<div class="zerogrid">-->
<!--								<div class="comments-are">-->
<!--									<div id="comment">-->
<!--										<h3>Leave a Reply</h3>-->
<!--										<span>Your email address will not be published. Required fields are marked </span>-->
<!--										<form name="comment_form" id="comment_form" method="post" action="">-->
<!--											<label>-->
<!--											<span>Comment:</span>-->
<!--											<textarea name="message" id="message"></textarea>-->
<!--											</label>-->
<!--											<label>-->
<!--											<span>Name:</span>-->
<!--											<input type="text"  name="name" id="name" required>-->
<!--											</label>-->
<!--											<label>-->
<!--											<span>Email:</span>-->
<!--											<input type="email"  name="email" id="email" required>-->
<!--											</label>-->
<!--											<center><input class="sendButton" type="submit" name="submitcomment" value="Submit"></center>-->
<!--										</form>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
<?php include 'footer.php' ?>
