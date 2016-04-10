<?php get_header(); ?>
<section id="about" class="s_about bg_light">
    <div class="section_header">
        <h2><?php 
            $idObj = get_category_by_slug('s_about');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?>
        </h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description($id)?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <?php if(have_posts()) : query_posts('p=4');
                    while(have_posts()) : the_post(); ?>
                
                <div class="col-md-4 col-md-push-4 animation_photo">
                    <h3>Foto</h3>
                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php 
                        $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                        echo $large_image_url[0]; ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(array(220, 220)); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="col-md-4 col-md-pull-4 animation_left">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
                
                
                <div class="col-md-4 animation_right personal_last_block">
                    <?php if(have_posts()) : query_posts('p=8');
                        while(have_posts()) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <h2 class="personal_header"><?php bloginfo('name'); ?></h2>
                    <?php the_content(); ?>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    <div class="social_wrap">
                        <ul>
                            <?php $idObj = get_category_by_slug('socials');
                                  $id = $idObj->term_id;
                                  if(have_posts()) : query_posts('cat=' . $id);
                                  while(have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'FA_icon', true); ?>"></i></a></li>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section id="portfolio" class="s_portfolio bg_dark">
    <div class="section_header">
        <h2><?php 
            $idObj = get_category_by_slug('s_portfolio');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?>
        </h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description($id); ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                
                    <div class="filter_controls">
                        <ul>
                            <li class="filter active" data-filter="all">Todo</li>
                            <li class="filter" data-filter=".sites">Cachorros</li>
                            <li class="filter" data-filter=".identy">Loros</li>
                            <li class="filter" data-filter=".logos">Otra cosa</li>
                        </ul>
                    </div>
                <div id="portfolio_grid">
                    
                    <?php if(have_posts()) : query_posts('cat=' . $id);
                    while(have_posts()) : the_post(); ?>
                    <div class="mix col-md-3 col-xs-6 portfolio_item <?php
                    $tags=wp_get_post_tags($post->ID);
                    if($tags) {
                        foreach ($tags as $tag) {
                            echo $tag->name . ' ';
                        }
                    } ?>">
                        <?php the_post_thumbnail(array(400, 300)); ?>
                        <div class="port_item_cont">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="#" class="popup_content">Ver</a>
                        </div>
                        <div class="hidden">
                            <div class="portfolio_descr">
                                <div class="modal-box">
                                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <img src="<?php 
                                              $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                                              echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contacts" class="s_contacts bg_light">
    <div class="section_header">
        <h2><?php 
            $idObj = get_category_by_slug('s_contacts');
            $id = $idObj->term_id;
            echo get_cat_name($id);
            ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description($id); ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact_box">
                        <div class="contact_icons icon-basic-geolocalize-01"></div>
                        <h3>Dirección:</h3>
                        <p><?php 
                           $options = get_option('sample_theme_options');
                           echo $options['adrestext']; 
                           ?></p>
                    </div>
                    <div class="contact_box">
                        <div class="contact_icons icon-basic-smartphone"></div>
                        <h3>Telefono:</h3>
                        <p><?php 
                           $options = get_option('sample_theme_options');
                           echo $options['phonetext']; 
                           ?>
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-6 col-sm-6">
                    <form action="http://formspree.io/valeriomajo@yahoo.es" method="POST" class="main_form" novalidate target="_blank">
                        <label class="form-group">
                            <span class="color_element">*</span> Nombre:
                            <input type="text" name="name" placeholder="Tu nombre" data-validation-required-message="No has puesto tu nombre" required>
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> E-mail:
                            <input type="email" name="email" placeholder="Tu E-mail" data-validation-email-message="E-mail no es correcto" data-validation-required-message="Вы не ввели E-mail" required>
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Mensaje:
                            <textarea name="message" placeholder="Tu mensaje" data-validation-required-message="No has escrito nada" required></textarea>
                            <span class="help-block text-danger"></span>
                        </label>

                        <button>Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>