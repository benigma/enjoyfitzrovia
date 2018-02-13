<?php
/*
Template Name: Celebrate Template Fayre
*/
?>
<?php get_header('celebrate'); ?>

<div class="row">

	<div class="col-md-6">
		<div class="sixforty-thumb"><?php the_post_thumbnail('sixforty'); ?></div>
                </br>
		<a href="../book" style="color: rgb(255,0,0);font-weight: bold; font-size: 20px; margin-left: 10px;">VIEW ALL EVENTS TO BOOK ></a>
                <strong style="color: #a8ce39; font-size: 100px;">Live</strong><span style="color: #a8ce39; font-size: 100px;">Kitchen</span></br>
                <strong style="color: #228B22; font-size: 20px;">AT THE CHARLOTTE STREET FAYRE</strong><span style="color: #228B22; font-size: 20px; line-height: 30px;">, 15 September.</span></br>
<span style="color: #a8ce39; font-size: 30px;">Hosted by </span><strong style="color: #a8ce39; font-size: 50px;">Lisa Marley</strong>

<br>Book your place at a FREE MasterClass or food and drink challenge:
</br><table style="width: 100%; margin:10px 0px;" class="celebrate-table">
<thead>
<tr>
<th>RESTAURANTS</th>
<th>ACTIVITY</th>
<th>TIME</th>
<th>PARTICIPANTS</th>
<th>DESCRIPTION</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>The Gentleman Baristas</strong></td>
<td><strong>Coffee From Around The World</strong></td>
<td>11.30am</td>
<td>12-15</td>
<td>Taste coffees from across the globe and discover how different processes affect the taste, the flavour; you'll sample 6+ coffees providing your late morning caffeine fix, with the chance to win your very own home brewing kit! </br><a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=The Gentlemen Baristas - Coffee From Around The World" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
<tr>
<td><strong>Se&ntilde;or Ceviche</strong></td>
<td><strong>Ceviche MasterClass</strong></td>
<td>12.30pm</td>
<td>12-15</td>
<td>Make our iconic<strong> "Se&ntilde;or Ceviche"</strong> using all the fresh flavours of Peruvian ingredients including sea bass, octopus, aji amarillo tiger's milk, sweet potato pur&eacute;e, avocado, coriander, red onion &amp; crispy baby squid. Guests will learn how Se&ntilde;or creates this dish with the chance to sample the cuisine itself.</br> <a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=Senor Ceviche - Ceviche MasterClass" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
<tr>
<td><strong>Kua'Aina &amp; Steak &amp; Lobster</strong></td>
<td><strong>BBQ MasterClass</strong></td>
<td>1.30pm</td>
<td>12-15</td>
<td>Everything you need to know for the ultimate BBQ! Kua 'Aina will be teaching how to master the marinade, cooking up some delicious chicken and burgers, plus Steak &amp; Lobster will teach you how to prepare and cook the perfect steak!</br><a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=Kua'Aina &amp; Steak &amp; Lobster - BBQ MasterClass" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
<tr>
<td><strong>The Charlotte Street Hotel &amp; Pied a Terre</strong></td>
<td><strong>Great Fitzrovia Cook Off</strong></td>
<td>2.30pm</td>
<td>20+</td>
<td>The ultimate cook off with two of Charlotte Street's favourite restuarants! 10 minutes, 5 core ingredients, 1 winner. You decide! Chefs will create and serve a delicious savoury dish drawing inspiration from London Design Festival, you will get to try and then vote for your favourite!</br><a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=The Charlotte Street Hotel &amp; Pied a Terre - Great Fitzrovia Cook Off" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
<tr>
<td><strong>Rawligion</strong></td>
<td><strong>Raw Chocolate MasterClass</strong></td>
<td>3.30pm</td>
<td>12-15</td>
<td>Discover how we make our raw chocolate, with delicious tastings and why it is good for you.</br><a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=Rawligion - Raw Chocolate MasterClass" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
<tr>
<td><strong>Noize</strong></td>
<td><strong>Wine Tasting Challenge</strong></td>
<td>16.30pm</td>
<td>6 teams x 3/4 people per team</td>
<td>In your teams you'll get to taste three different wine flights, each with 3 varieties of wine from different regions. Learn from our leading somellier and guess the grape variety for your chance to win fantastic prizes!</br><a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=Noize - Wine Tasting Challenge" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
<tr>
<td><strong>Se&ntilde;or Ceviche</strong></td>
<td><strong>Pisco Chilli Challenge</strong></td>
<td>5.30pm</td>
<td>10-12 people</td>
<td>Many have tried and failed, but are you brave enough to take on Se&ntilde;or's Chilli Pisco Challenge? This year we shall be serving shots of our iconic 1615 Pisco (Peruvian brandy) with varying strengths of chilli infusion, from the mild and pleasant aji panca through to the hot and unforgiving aji limo chilli... where will you meet your nemesis? If you are feeling brave enough then please</br><a class="book_celebrate" href="mailto:siobhan.foster@fitzroviapartnership.com?Subject=Senor Ceviche - Pisco Chilli Challenge" rel="noopener noreferrer">BOOK NOW &gt;</a></td>
</tr>
</tbody>
</table>
&nbsp;
&nbsp;
	</div>
		
	<div class="col-md-6">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer('feast'); ?>