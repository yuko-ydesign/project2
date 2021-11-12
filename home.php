<?php get_header();?>
<div class="small-inner">
  <div class="middle-heading">
    <h1>ニュース</h1>
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url('/');?>">ホーム</a></li>
      <li>ニュース</li>
    </ul>
  </div>
  <ul class="article-list">
    <?php
    $args =[
      'post_type'      => 'post',
      'posts_per_page' => 20,
      'paged' => $paged,
      // 'category_name' => 'news',
    ];
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="article-box">
      <a href="<?php the_permalink(); ?>">
        <div class="article-head">
          <p class="article-head__date"><?php echo get_the_date(); ?></p>
          <?php if (!is_category() && has_category()): ?>
            <p class="article-head__category">
            <?php
              $postcat = get_the_category();
              echo $postcat[0]->name;
            ?>
            </p>
          <?php endif; ?>
        </div>
        <p class="article-box__text"> <?php the_title(); ?> </p>
      </a>
    </li>
    <?php endwhile;  ?>
  </ul>
  <?php
// ページネーション
          $prev_post = get_previous_posts_link();
          $next_post = get_next_posts_link();
          $big = 9999999;
          $paginate_links = paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '/page/%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $the_query->max_num_pages,
            'mid_size' => 1,
            'prev_next' => false,
            'type' => 'array'
          ]);
          if (is_array($paginate_links)):
          ?>
          <div class="pagination">
            <?php if (!empty($prev_post)): ?>
              <a href="<?php echo get_previous_posts_page_link(); ?>" class="pagination__prev">prev</a>
            <?php endif; ?>
            <ul>
              <?php foreach($paginate_links as $link) : ?>
                <li><?php echo $link; ?></li>
              <?php endforeach; ?>
            </ul>
            <?php if (!empty($next_post)): ?>
              <a href="<?php echo get_next_posts_page_link(); ?>" class="pagination__next">next</a>
            <?php endif; ?>
          </div>
          <?php endif; ?>
          <?php wp_reset_postdata();?>
</div>
<?php get_footer();?>