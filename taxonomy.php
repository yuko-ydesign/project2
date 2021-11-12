<?php get_header();?>
<div class="small-inner">
  <div class="middle-heading">
    <h1>コラム</h1>
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url('/');?>">ホーム</a></li>
      <li><a href="<?php echo home_url('/column');?>">コラム</a></li>
      <li><?php single_cat_title(); ?></li>
    </ul>
  </div>
  <div class="find-box">
    <h2>カテゴリーから探す</h2>
    <ul class="find-box__list">
    <?php
      $terms = get_terms('column_cat');
      foreach ( $terms as $term ) {
      echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
      }
      ?>
    </ul>
  </div>
  <ul class="article-list">
    <?php
    $type = get_query_var( 'column_cat' );
    $taxonomy = 'column_cat';
    $post_type = 'column';
    $args =[
      'post_type'      => 'column',
      'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => $taxonomy, /* 指定したい投稿タイプが持つタクソノミーを指定 */
            'field' => 'slug',
            'terms' => $type, /* 上記で指定した変数を指定 */
        ),
    ),
      'posts_per_page' => 20,
      'paged' => $paged,

    ];
    $the_query = new WP_Query( $args );
    // var_dump($the_query);
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li class="article-box">
      <a href="<?php the_permalink(); ?>">
        <div class="article-head">
          <p class="article-head__date"><?php echo get_the_date(); ?></p>
          <?php
          $terms = wp_get_post_terms( $post->ID, $taxonomy, $args );
          // var_dump($terms);
          ?>
            <p class="article-head__category">
            <?php
              echo $terms[0]->name;
            ?>
            </p>
        </div>
        <p class="article-box__text"> <?php the_title(); ?> </p>
      </a>
    </li>
    <?php endwhile;  wp_reset_postdata();?>
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
          
</div>
<?php get_footer();?>