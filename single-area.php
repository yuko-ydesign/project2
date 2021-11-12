<?php get_header();?>
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div class="small-inner">
  <div class="middle-heading">
    <?php 
    $title = get_the_title();
     $terms = get_the_terms($post->ID, 'area_cat');
     ?>
    <h1><?php echo $title; ?></h1>
    <ul class="breadcrumb">
      <li><a href="<?php echo home_url('/');?>">ホーム</a></li>
      <li><a href="<?php echo home_url('/area');?>">サービスエリア</a></li>
      <li><a href="<?php echo home_url('/area_cat'.'/'.$terms[0]->slug);?>"><?php echo $terms[0]->name; ?></a></li>
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
</div>
<?php endwhile; endif; ?>
<?php get_footer();?>