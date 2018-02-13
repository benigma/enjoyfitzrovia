<?php get_header(); ?>
	
	<div class="row header">
			<div class="col-md-12">
				<h1><strong>Enjoy</strong><br />Fitzrovia</h1>
			</div>
		</div>
	
	<div class="row">
		<div class="col-md-6">
			<ul class="blocks">
				<a href="eat">
				<li>
				<div class="view card border-bottom">
					<h2>EAT</h2>
				    <div class="mask eat">
				        <p>Eat your way around the world without a passport. It’s all here in one of London’s premier foodie destinations. Just click through and start exploring.</p>
				    </div>
				     <img src="<?php echo get_template_directory_uri(); ?>/img/eat-block.jpg" border="0" class="small" alt="Fitzrovia Eating Directory" />
				</div>
				</li></a>
				<a href="shop">
				<li><div class="view card border-bottom border-left">
					<h2>SHOP</h2>
				    <div class="mask shop">
				        <p>Prepare yourself for a retail revelation. London’s best range of furniture and homeware, everything electronic, eclectic independents, and more.</p>
				    </div>
				     <img src="<?php echo get_template_directory_uri(); ?>/img/shop-block.jpg" class="small" alt="Fitzrovia Shopping Directory" />
				</div></li></a>
				<a href="art">
				<li><div class="view card">
					<h2>ART</h2>
				    <div class="mask art">
				        <p>True to its Bohemian roots, Fitzrovia is now one of London's liveliest artistic quarters with an inspiring variety of cutting-edge commercial galleries.</p>
				    </div>
				     <img src="<?php echo get_template_directory_uri(); ?>/img/art-block.jpg" class="small" alt="Fitzrovia Art Directory" />
				</div>
				</li></a>
				<a href="swipii"><li>
				<div class="view card border-left">
					<h2></h2>
				    <div class="mask red">
				        <p>Keep on using your favourite local places and end up being rewarded with everything from a mug of your favourite coffee to a trip to Hawaii.</p>
				    </div>
				     <img src="<?php echo get_template_directory_uri(); ?>/img/swipii-block.jpg" class="small" alt="Fitzrovia Loyalty Scheme" />
				</div>
				</li></a>
			</ul>
		</div>
		
		<div class="col-md-6 border-left">
			<a href="newspaper">
			<div class="module">
			  <header><h2><strong>Read</strong><br />All about it</h2>
			  <p class="full">The human stories behind some of Fitzrovia's best-loved businesses, the latest offerings from local stores and what's hot in the district's eating establishments - they are all in our regular, seasonal newspaper.
			  <br />Read some of our favourite stories from previous issues.<br /><br /></p>
			  </header>
			  <img src="<?php echo get_template_directory_uri(); ?>/img/TFP_Summer2016_Website_Main_Banner.jpg" class="full" alt="Fitzrovia Spring Newspaper" />
			</div></a>
		</div>
		</div>
		
		<div class="row border-top">
		<div class="col-md-6">
			<a href="news">
				<div class="module">
					<header>
					<h2><strong>NEWS &amp; EVENTS</strong><br />IN FITZROVIA</h2>
					<p class="full">Keep up with the latest news as it happens and be one step ahead of the district’s up-and-coming events as we share the best places to visit in Fitzrovia.<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
					</header>
					<img src="<?php echo get_template_directory_uri(); ?>/img/TFP_News_640x640_251015.jpg" class="full" alt="News and Events in Fitzrovia">
				</div></a>
		</div>
		<div class="col-md-3 twitter border-left">
				<?php echo do_shortcode('[atom_twitter username="EnjoyFitzrovia" widget_id="605737841117786112" width="100%" height="635" tweet_limit="" padding="0" border_radius = "0" theme="light" link_color="#7a00cc" transparent="transparent" background_color="#FFFFFF" border_color="#FFFFFF" header="noheader" border="noborders" scrollbar="" footer="nofooter" language="EN" related="twitterapi,twitter" polite="assertive" suffix=""]'); ?>
		</div>
		<div class="col-md-3">
			<ul class="stacked-blocks">
				<a href="discover-fitzrovia">
				<li>
				<div class="view card border-bottom">
					<h3>DISCOVER</h3>
				    <div class="mask red">
				        <p>Fitzrovia is an area with a character all its own. An important eating and drinking district and a leading retail destination in its own right.</p>
				    </div>
				     <img src="<?php echo get_template_directory_uri(); ?>/img/TFP_About_320x320_261015.jpg" border="0" class="small" alt="Discover more to enjoy in Fitzrovia" />
				</div>
				</li></a>
				<a href="getting-here">
				<li><div class="view card">
					<h3>TRAVEL</h3>
				    <div class="mask red">
				        <p>Adjoining Soho &amp; Bloomsbury and a short walk from Covent Garden, Oxford Street and Euston Road, Fitzrovia is  accessible from just about anywhere.</p>
				    </div>
				     <img src="<?php echo get_template_directory_uri(); ?>/img/TFP_web_Travel_320x320.jpg" class="small" alt="Find out the best ways to get to Fitzrovia" />
				</div></li></a>
			</ul>
		</div>
	</div>
	
<?php get_footer(); ?>