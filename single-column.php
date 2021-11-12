<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="small-inner">
  <div class="middle-heading">
    <?php 
    $title = get_the_title();
     $terms = get_the_terms($post->ID, 'column_cat');
     ?>
    <h1><?php echo $title; ?></h1>
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url('/');?>">ホーム</a></li>
      <li><a href="<?php echo home_url('/column');?>">コラム</a></li>
      <li><a href="<?php echo home_url('/column_cat'.'/'.$terms[0]->slug);?>"><?php echo $terms[0]->name; ?></a></li>
      <li><?php echo $title; ?></li>
    </ul>
  </div>
  <div class="article">
    <div class="article-head">
      <p class="article-head__date"><?php echo get_the_date(); ?></p>
      <p class="article-head__category"><?php echo $terms[0]->name; ?></p>
    </div>
    <section class="common">
      <?php the_content(); ?>
    </section>
  </div>
  <div class="article-links">
  <?php
  $prevpost = get_adjacent_post(false, '', true); //前の記事
  $nextpost = get_adjacent_post(false, '', false); //次の記事
  
  //記事のIDを収得
  $previd = $prevpost->ID;
  $nextid = $nextpost->ID;
  
  //記事のURLを取得
  $prevurl = get_permalink($prevpost->ID);
  $nexturl = get_permalink($nextpost->ID);
  ?>
  <?php if($prevpost) { ?>
    <div class="article-links__prev">
    <a href="<?php echo $prevurl; ?>">
      <p class="article-links__top">前の記事へ</p>
      <p class="article-links__title"><?php echo get_the_title($previd);?></p>
    </a>
    </div>

  <?php } ?>
  <?php
    if($nextpost) { ?>
    <div class="article-links__next">
    <a href="<?php echo $nexturl;?>">
      <p class="article-links__top">次の記事へ</p>
      <p class="article-links__title"><?php echo get_the_title($nextid);?></p>
    </a>
    </div>
    <?php } ?>
  </div>
  <div class="heading">
    <h2 class="heading__title">関連記事</h2>
  </div>
  <ul class="list-r">
  <?php
    $args =[
      'post_type'      => 'column',
      'posts_per_page' => 6,
      'paged' => $paged,
    ];
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <p class="list-r__date"><?php the_time('Y.m.d'); ?></p>
        <p class="list-r__title"> <?php the_title(); ?></p>
      </a>
    </li>
    <?php endwhile;  ?>
    <?php wp_reset_postdata();?>
  </ul>
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
</div>
<?php endwhile; endif; ?>
<?php get_footer();?>