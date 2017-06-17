<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <?php get_header() ?>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

            <?php
              $the_query = new WP_Query( array('order' => 'ASC') );
             ?>

            <?php while( $the_query->have_posts() ) : $the_query->the_post();?>
              <style media="screen">
                <?php echo '.color-for-'.get_the_ID(); ?>{
                  <?php if(get_field('direction')=='↗'): ?>
                  background: -moz-linear-gradient(45deg, <?php the_field('first_color'); ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('third_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(45deg, <?php the_field('first_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;
                  background: linear-gradient(45deg, <?php the_field('first_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='↙'): ?>
                  background: -moz-linear-gradient(45deg, <?php the_field('third_color'); ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('first_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(45deg, <?php the_field('third_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;
                  background: linear-gradient(45deg, <?php the_field('third_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='↘'): ?>
                  background: -moz-linear-gradient(-45deg, <?php the_field('first_color'); ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('third_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(-45deg, <?php the_field('first_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;
                  background: linear-gradient(135deg, <?php the_field('first_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='↖'): ?>
                  background: -moz-linear-gradient(-45deg, <?php the_field('third_color'); ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('first_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(-45deg, <?php the_field('third_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;
                  background: linear-gradient(135deg, <?php the_field('third_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='→'): ?>
                  background: -moz-linear-gradient(left, <?php the_field('first_color'); ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('third_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(left, <?php the_field('first_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;
                  background: linear-gradient(to right, <?php the_field('first_color'); ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='←'): ?>
                  background: -moz-linear-gradient(left, <?php the_field('third_color') ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('first_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(left, <?php the_field('third_color') ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;
                  background: linear-gradient(to right, <?php the_field('third_color') ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='↓'): ?>
                  background: -moz-linear-gradient(top, <?php the_field('first_color') ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('third_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(top, <?php the_field('first_color') ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;
                  background: linear-gradient(to bottom, <?php the_field('first_color') ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('third_color') ?> 100%)!important;

                  <?php elseif(get_field('direction')=='↑'): ?>
                  background: -moz-linear-gradient(top, <?php the_field('third_color') ?> 0%, <?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?> <?php the_field('first_color') ?> 100%)!important;
                  background: -webkit-linear-gradient(top, <?php the_field('third_color') ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;
                  background: linear-gradient(to bottom, <?php the_field('third_color') ?> 0%,<?php if(!empty(get_field('second_color'))){echo get_field('second_color').' 37%,';} ?><?php the_field('first_color') ?> 100%)!important;

                  <?php endif ?>
                }
              </style>


              <section class="color-for-<?php the_ID(); ?> <?php the_field('section_type') ?> <?php echo get_field('size') ?> <?php echo get_field('orientation') ?>">
                <div class="content  <?php echo get_field('content_size') ?>">

                  <?php if(get_field('title_size')=='grande'): ?>
                    <h1 class="major"><?php the_title(); ?></h1>
                  <?php elseif(get_field('title_size')=='medio'): ?>
                    <h2 class="major"><?php the_title(); ?></h2>
                  <?php endif; ?>

                  <?php the_content(); ?>

                  <?php if(get_field('has_action')): ?>
                    <?php if(get_field('action')=='next'): ?>
                    <ul class="actions">
                      <li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
                    </ul>
                    <?php endif; ?>
                  <?php endif; ?>

								</div>
                <?php if(!empty(get_field('image'))): ?>
                  <div class="image filtered span-1-75" data-position="right">
                    <img src="<?php the_field('image') ?>" alt="" />
                  </div>
                <?php endif; ?>
                <?php if(get_field('inner')): ?>
                <div class="inner">
                  <div class="<?php the_field('inner_type') ?> <?php the_field('inner_grid_colluns') ?> <?php the_field('inner_grid_conected') ?>">
                    <?php the_field('inner_content') ?>
                  </div>
								</div>
                <?php endif ?>
              </section>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content colorM1 span-3-75">
									<h1 class="major">Diego Matias</h1>
									<p>Brasileiro de Minas Gerais, desenvolvedor de jogos, aplicativos e sistemas.<br></p>
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<!--<div class="image filtered span-1-75" data-position="right">
									<img src="<?php echo get_template_directory_uri()?>/images/PerfilFoto.jpg" alt="" />
								</div>-->
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content  span-7">
									<h2 class="major">Formação</h2>
									<p>Graduado em tecnologia em Jogos Digitais pela PUC Minas - unidade São Gabriel em 2016. <br> no periodo que eu passei estudando o curso de Jogos na PUC Minas fiquei mais admirado pelo parte de programação do curso, e nesta parte que estou me focando mesmo depois de concluido o curso. <br><br> Algumas Materias Relevantes do curso na minha area:</p>
									<ul>
										<li>Fisica aplicada em jogos</li>
										<li>Programação Orientada a Objetos</li>
										<li>Algoritmos e Tecnincas de Programação</li>
										<li>Algoritmos e estrutura de Dados</li>
										<li>Inteligencia Artificial 1 e 2</li>
									</ul>
								</div>
								<div class="image colorM2 filtered tinted" data-position="top left">
									<!-- <img src="images/pic02.jpg" alt="" /> -->
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major">Conhecimentos</h2>
									<ul>
										<li>Unity3D</li>
										<li>C#</li>
										<li>JavaScript</li>
										<li>PHP</li>
										<li>Laravel</li>
										<li>Asp.net</li>
										<li>JQuery</li>
										<li>AngularJS 1</li>
										<li>Html5</li>
										<li>Android Studio</li>
										<li>CSS</li>
										<li>Wordpress</li>
									</ul>
								</div>
								<div class="inner">
									<ul class="grid-icons four connected">
										<li><span class="icon iconIMG alignleft"><img src="<?php echo get_template_directory_uri()?>/images/unity.png" height="60%" alt=""></span></li>
										<li><span class="icon iconIMG"><img src="<?php echo get_template_directory_uri()?>/images/csharp.png" height="60%" alt=""></span></li>
										<li><span class="icon iconIMG"><img src="<?php echo get_template_directory_uri()?>/images/nodejs-512.png" height="60%" alt=""></span></li>
										<li><span class="icon iconIMG smallimg"><img src="<?php echo get_template_directory_uri()?>/images/php_icon_logo.png" height="40%" alt=""></span></li>
										<li><span class="icon iconIMG smallimg"><img src="<?php echo get_template_directory_uri()?>/images/laravel-4096-black.png" height="40%" alt=""></span></li>
										<li><span class="icon iconIMG large"><img src="<?php echo get_template_directory_uri()?>/images/asp.png" height="40%" alt=""></span></li>
										<li><span class="icon iconIMG large"><img src="<?php echo get_template_directory_uri()?>/images/jquery.png" height="40%" alt=""></span></li>
										<li><span class="icon iconIMG large"><img src="<?php echo get_template_directory_uri()?>/images/angular.png" height="40%" alt=""></span></li>
										<li><span class="icon fa-html5"><span class="label">Lorem</span></span></li>
										<li><span class="icon fa-android"><span class="label">Ipsum</span></span></li>
										<li><span class="icon fa-css3"><span class="label">Dolor</span></span></li>
										<li><span class="icon fa-wordpress"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
                <div class="inner">
                  <div class="grid-icons-wp four connected">
                    <ul >
                      <li><img src="<?php echo get_template_directory_uri()?>/images/unity.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/csharp.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/nodejs-512.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/php_icon_logo.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/laravel-4096-black.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/asp.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/jquery.png" alt=""></li>
                      <li><img src="<?php echo get_template_directory_uri()?>/images/angular.png" alt=""></li>
                      <li><span class="icon fa-html5"></span></li>
                      <li><span class="icon fa-android"></span></li>
                      <li><span class="icon fa-css3"></span></li>
                      <li><span class="icon fa-wordpress"></span></li>
                    </ul>
                  </div>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h2 class="major">Experiencias</h2>
									<p>Minhas primeiras experiencias com o desenvolvimento de jogos foi utilizando a Unity3D com a linguaguem em c# lá no começo do curso de jogos da PUC, isso em 2011 ao longo desse tempo continuei usando ela e aprimorando meu conhecimentos na engine. logo depois de formar desenvolvi projetos em diversas plataformas e com softwares e linguagens diferentes, aprendi a desenvolver applicativos web com angularjs, laravel, wordpress e outros, também desenvolvi aplicativos mobile com android studio e unity3D. </p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="<?php echo get_template_directory_uri()?>/images/pic03.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Projetos</h2>
									<p>Alguns dos projetos nos quais eu já trabalhei</p>
								</div>
								<div class="gallery">
									<div class="modal" tabIndex="-1">
										<div class="intro span-5-5 modalcontent" style="height:80% ;margin-top:37px">
                      <div class="mainIMG">
                        <img style="max-height:95%; max-width:100%;" id="main" src="" />
                      </div>
                      <a id="modalGaley" href="" ><img id="first" style="max-height:25%; max-width:23%;" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></a>
                      <a id="modalGaley" href="" ><img id="second" style="max-height:25%; max-width:23%;" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></a>
                      <a id="modalGaley" href="" ><img id="third" style="max-height:25%; max-width:23%;" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></a>
                      <a id="modalGaley" href="" ><img id="four" style="max-height:25%; max-width:23%;" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></a>
											<iframe style="width:40rem; height:22.5rem; display:none" src="https://www.youtube.com/embed/2NhLPHmefww" frameborder="0" allowfullscreen></iframe>
										  </iframe>
										</div>
                    <div class="inner modalcontent">
                      <h2 id="title" class="major">Teste</h2>
                      <p id="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed tellus enim. Quisque vel vulputate magna. Nullam eu posuere sem, nec egestas nibh. Phasellus vestibulum cursus congue. Donec vestibulum scelerisque sem, ac ullamcorper nulla ornare id. Sed vulputate, neque vel vehicula ornare, erat urna maximus enim, a gravida quam mauris sed libero. Sed aliquam nunc in turpis scelerisque, at laoreet ligula pharetra.</p>
                    </div>
									</div>
									<div class="group span-3">
										<a href="<?php echo get_template_directory_uri()?>/images/arena.jpg" second-img="<?php echo get_template_directory_uri()?>/images/gallery/fulls/02.jpg" third-img="<?php echo get_template_directory_uri()?>/images/gallery/fulls/02.jpg" four-img="<?php echo get_template_directory_uri()?>/images/gallery/fulls/02.jpg"  class="image filtered span-3" data-position="bottom">
                      <p id="title" style="display:none">Teste1</p>
                      <p id="content" style="display:none">conteudo vem aqui</p>
                      <img src="<?php echo get_template_directory_uri()?>/images/arena.jpg" alt="" />
                    </a>
										<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></a>
										<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/03.jpg" alt="" /></a>
									</div>
									<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/04.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/05.jpg" class="image filtered span-3" data-position="top"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/05.jpg" alt="" /></a>
										<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/06.jpg" class="image filtered span-1-5" data-position="center"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/06.jpg" alt="" /></a>
										<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/07.jpg" class="image filtered span-1-5" data-position="bottom"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/07.jpg" alt="" /></a>
										<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/08.jpg" class="image filtered span-3" data-position="top"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/08.jpg" alt="" /></a>
									</div>
									<a href="<?php echo get_template_directory_uri()?>/images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/09.jpg" alt="" /></a>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Contact</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="#">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="4"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="button special" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="#">@untitled-tld</a></li>
											<li class="icon fa-facebook"><a href="#">facebook.com/untitled</a></li>
											<li class="icon fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
											<li class="icon fa-instagram"><a href="#">@untitled-tld</a></li>
											<li class="icon fa-medium"><a href="#">medium.com/untitled</a></li>
										</ul>
									</div>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color2-alt">
								<div class="intro color2">
									<h2 class="major">Elements</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam. </p>
								</div>
								<div class="inner columns aligned">
									<div class="span-2-75">

										<h3 class="major">Text</h3>
										<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

										<h1>Heading Level 1</h1>
										<h2>Heading Level 2</h2>
										<h3>Heading Level 3</h3>
										<h4>Heading Level 4</h4>
										<h5>Heading Level 5</h5>
										<h6>Heading Level 6</h6>

									</div>
									<div class="span-3">

										<h4>Blockquote</h4>
										<blockquote>Lorem ipsum dolor sit amet. Felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in vestibulum. Blandit adipiscing eu iaculis volutpat ac adipiscing volutpat ac adipiscing faucibus.</blockquote>

										<h4>Preformatted</h4>
										<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + (i++);
    deck.shuffle();
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>

									</div>
									<div class="span-1-25">

										<h3 class="major">Lists</h3>

										<h4>Unordered</h4>
										<ul>
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
										</ul>

										<h4>Alternate</h4>
										<ul class="alt">
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
										</ul>

									</div>
									<div class="span-1-5">

										<h4>Ordered</h4>
										<ol>
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
											<li>Etiam vel felis lorem.</li>
										</ol>

										<h4>Actions</h4>
										<ul class="actions">
											<li><a href="#" class="button special color2">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions vertical">
											<li><a href="#" class="button special color2">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>

									</div>
									<div class="span-1-25">

										<h4>Icons</h4>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
											<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
										</ul>

										<h4>Contact Icons</h4>
										<ul class="contact-icons color2">
											<li class="icon fa-twitter"><a href="#">Twitter</a></li>
											<li class="icon fa-facebook"><a href="#">Facebook</a></li>
											<li class="icon fa-instagram"><a href="#">Instagram</a></li>
											<li class="icon fa-github"><a href="#">GitHub</a></li>
											<li class="icon fa-medium"><a href="#">Medium</a></li>
										</ul>

									</div>
									<div class="span-3">
										<h3 class="major">Table</h3>
										<h4>Default</h4>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div class="span-3">
										<h4>Alternate</h4>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div class="span-2-25">
										<h3 class="major">Buttons</h3>
										<ul class="actions">
											<li><a href="#" class="button special color2">Special</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button large">Large</a></li>
											<li><a href="#" class="button small">Small</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button special color2 icon fa-cog">Icon</a></li>
											<li><a href="#" class="button icon fa-diamond">Icon</a></li>
										</ul>
										<ul class="actions">
											<li><span class="button special color2 disabled">Disabled</span></li>
											<li><span class="button disabled">Disabled</span></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button special color2 circle icon fa-cog">Icon</a></li>
											<li><a href="#" class="button circle icon fa-diamond">Icon</a></li>
										</ul>
									</div>
									<div class="span-4-5">
										<h3 class="major">Form</h3>
										<form method="post" action="#">
											<div class="field third">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field third">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field third">
												<label for="demo-category">Category</label>
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">-</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
											</div>
											<div class="field quarter">
												<input type="radio" id="demo-priority-low" name="demo-priority" class="color2" checked />
												<label for="demo-priority-low">Low Priority</label>
											</div>
											<div class="field quarter">
												<input type="radio" id="demo-priority-high" name="demo-priority" class="color2" />
												<label for="demo-priority-high">High Priority</label>
											</div>
											<div class="field quarter">
												<input type="checkbox" id="demo-copy" name="demo-copy" class="color2" />
												<label for="demo-copy">Email a copy</label>
											</div>
											<div class="field quarter">
												<input type="checkbox" id="demo-human" name="demo-human" class="color2" checked />
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="special color2" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</form>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

					</div>

			</div>
      <?php get_footer() ?>
	</body>
</html>
