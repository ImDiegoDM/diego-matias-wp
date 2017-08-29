<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

 ?>

<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
  <?php get_header() ?>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

            <?php
              $the_query = new WP_Query( array('order' => 'ASC','post_type' => 'post') );
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

            <div class="panel">
              <div class="gallery">
                <div class="modal" tabIndex="-1">
                  <div class="intro span-5-5 modalcontent modalGalery ">
                    <img style="max-height:70%; max-width:100%; display:block; margin: auto;" id="main" src="" />
                    <div id="imageContent" class=""style="display:inline-flex;height:30%; position:relative; left:50%;transform:translateX(-50%)">
                      <div id="modalGaley" style="padding:8px 3px; height:99%"><img id="first" class="thumb" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></div>
                      <div id="modalGaley" style="padding:8px 3px; height:99%" ><img id="second" class="thumb" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></div>
                      <div id="modalGaley" style="padding:8px 3px; height:99%" ><img id="third" class="thumb" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></div>
                      <div id="modalGaley" style="padding:8px 3px; height:99%"><img id="four" class="thumb" src="<?php echo get_template_directory_uri()?>/images/gallery/thumbs/02.jpg" alt="" /></div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="height:100%">
                      <iframe id="modalVideo" style="width:100%; display:none" src="https://www.youtube.com/embed/2NhLPHmefww" frameborder="0" allowfullscreen></iframe>
                    </div>
                  </iframe>
                  </div>
                  <div class="inner modalcontent">
                    <h2 id="title" class="major">Teste</h2>
                    <p id="content" style="max-width: 25rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sed tellus enim. Quisque vel vulputate magna. Nullam eu posuere sem, nec egestas nibh. Phasellus vestibulum cursus congue. Donec vestibulum scelerisque sem, ac ullamcorper nulla ornare id. Sed vulputate, neque vel vehicula ornare, erat urna maximus enim, a gravida quam mauris sed libero. Sed aliquam nunc in turpis scelerisque, at laoreet ligula pharetra.</p>
                  </div>
                </div>


              <?php
                $the_query = new WP_Query( array('order' => 'ASC','post_type' => 'projects_group') );
               ?>

              <?php while( $the_query->have_posts() ) : $the_query->the_post();?>

                <?php $projects = get_field('projects'); ?>

                  <?php if(count($projects)>1): ?>
                    <div class="group <?php the_field('size') ?>">
                      <?php
                      $projects=array_sort($projects,'order', SORT_ASC);
                       ?>
                    <?php foreach ($projects as $post): ?>
                        <?php setup_postdata($post); ?>
                      <a href="<?php the_field('img_01')?>" type="<?php the_field('galery_type')?>" aspect="<?php the_field('aspect_video')?>" video="<?php the_field('video')?>" second-img="<?php the_field('img_02')?>" third-img="<?php the_field('img_03')?>" four-img="<?php the_field('img_04')?>"  class="image filtered <?php the_field('size')?>" data-position="center">
                        <p id="title" style="display:none"><?php the_title()?></p>
                        <p id="content" style="display:none"><?php the_field('description')?></p>
                        <img src="<?php the_field('img_01')?>" alt="" />
                      </a>
                    <?php endforeach; ?>
                  </div>
                 <?php else: ?>
                    <?php $post = $projects[0]; ?>
                    <?php setup_postdata($post); ?>
                    <a href="<?php the_field('img_01')?>" type="<?php the_field('galery_type')?>" aspect="<?php the_field('aspect_video')?>" video="<?php the_field('video')?>"  second-img="<?php the_field('img_02')?>" third-img="<?php the_field('img_03')?>" four-img="<?php the_field('img_04')?>"  class="image filtered span-2-5" data-position="center">
                      <p id="title" style="display:none"><?php the_title()?></p>
                      <p id="content" style="display:none"><?php the_field('description')?></p>
                      <img src="<?php the_field('img_01')?>" alt="" />
                    </a>
                  <?php endif ?>
              <?php endwhile ?>
              </div>
            </div>

            <?php
              $the_query = new WP_Query( array('order' => 'ASC','post_type' => 'infos') );
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
              <?php $projects_form = get_field('form'); ?>
              <?php $post = $projects_form; ?>
              <?php setup_postdata($post); ?>
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
								<div class="inner columns divided">
									<div class="span-3-25">
                    <form id="messageForm">
                      <div class="field half">
                        <label for="name">Nome</label>
                        <input type="text" required name="name" id="name" />
                      </div>
                      <div class="field half">
                        <label for="email">Email</label>
                        <input type="email" required name="email" id="email" />
                      </div>
                      <div class="field">
                        <label for="message">Mensagem</label>
                        <textarea name="message" required style="resize:none;" id="message" rows="4"></textarea>
                      </div>
                      <ul class="actions">
                        <li><button id="send" class="button special" type="button" >Enviar mensagem</button>
                        <div id="floatingCirclesG" style="display:none">
                          <div class="f_circleG" id="frotateG_01"></div>
                          <div class="f_circleG" id="frotateG_02"></div>
                          <div class="f_circleG" id="frotateG_03"></div>
                          <div class="f_circleG" id="frotateG_04"></div>
                          <div class="f_circleG" id="frotateG_05"></div>
                          <div class="f_circleG" id="frotateG_06"></div>
                          <div class="f_circleG" id="frotateG_07"></div>
                          <div class="f_circleG" id="frotateG_08"></div>
                        </div>
                        </li>
                      </ul>
                    </form>

                    <div id="formsuccess" style="display:none" class="">
                      <h3>Sucesso!</h3>
                      <p>Sua mensagem foi enviada com sucesso</p>
                    </div>
                    <div id="formerror" style="display:none" class="">
                      <h3>Error!</h3>
                      <p>Desculpe aconteceu algo ineseperado e sua mensagem não foi enviada, tente novamente mais tarde ou mande um e-mail para contato@diegomatias.com.br</p>
                    </div>
									</div>
                  <?php $projects = get_field('contacts'); ?>
                  <?php if(count($projects)>0): ?>
                  <div class="span-1-7">
                    <ul class="contact-icons color1">
                      <?php foreach ($projects as $post): ?>
                        <?php setup_postdata($post); ?>
                        <li class="icon <?php the_field('icon') ?>"><a href="<?php the_field('link') ?>"><?php the_field('text') ?></a></li>
                      <?php endforeach; ?>
										</ul>
									</div>
                <?php endif; ?>
								</div>
              </section>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
					</div>

			</div>
      <?php get_footer() ?>
	</body>
</html>
