<?php
add_action('wp_enqueue_scripts', function () {
  wp_deregister_script('jquery');
  wp_enqueue_script(
    'jquery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
    array(),
    '3.4.1',
    true
  );
  wp_enqueue_style(
    'master',
    get_template_directory_uri() . '/assets/css/master.css',
    array(),
    date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/css/master.css'))
  );
  wp_register_script(
    'modules',
    get_template_directory_uri() . '/assets/js/modules.js',
    null,
    date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/modules.js')),
    true
  );


  if (is_front_page()) {
    wp_enqueue_script(
      'main',
      get_template_directory_uri() . '/assets/js/main.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/main.js')),
      true
    );
    wp_localize_script('main', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('price')) {
    wp_enqueue_script(
      'page-price',
      get_template_directory_uri() . '/assets/js/page-price.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-price.js')),
      true
    );
    wp_localize_script('page-price', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('flow')) {
    wp_enqueue_script(
      'page-flow',
      get_template_directory_uri() . '/assets/js/page-flow.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-flow.js')),
      true
    );
    wp_localize_script('page-flow', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('matching')) {
    wp_enqueue_script(
      'page-matching',
      get_template_directory_uri() . '/assets/js/page-matching.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-matching.js')),
      true
    );
    wp_localize_script('page-matching', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('price')) {
    wp_enqueue_script(
      'page-price',
      get_template_directory_uri() . '/assets/js/page-price.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-price.js')),
      true
    );
    wp_localize_script('page-price', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('service')) {
    wp_enqueue_script(
      'page-service',
      get_template_directory_uri() . '/assets/js/page-service.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-service.js')),
      true
    );
    wp_localize_script('page-service', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('municipality')) {
    wp_enqueue_script(
      'page-service',
      get_template_directory_uri() . '/assets/js/page-service.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-service.js')),
      true
    );
    wp_localize_script('page-service', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('regular_use')) {
    wp_enqueue_script(
      'page-service',
      get_template_directory_uri() . '/assets/js/page-service.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-service.js')),
      true
    );
    wp_localize_script('page-service', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  }elseif (is_page('option')) {
    wp_enqueue_script(
      'page-option',
      get_template_directory_uri() . '/assets/js/page-option.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-option.js')),
      true
    );
    wp_localize_script('page-option', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('top_corporation')) {
    wp_enqueue_script(
      'page-corporate',
      get_template_directory_uri() . '/assets/js/page-corporate.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-corporate.js')),
      true
    );
    wp_localize_script('page-corporate', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } elseif (is_page('customer_corporation')) {
    wp_enqueue_script(
      'page-corporate',
      get_template_directory_uri() . '/assets/js/page-corporate.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-corporate.js')),
      true
    );
    wp_localize_script('page-corporate', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  }  elseif (is_page('employee_corporation')) {
    wp_enqueue_script(
      'page-corporate',
      get_template_directory_uri() . '/assets/js/page-corporate.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-corporate.js')),
      true
    );
    wp_localize_script('page-corporate', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  }  elseif (is_page('apartment_corporation')) {
    wp_enqueue_script(
      'page-corporate',
      get_template_directory_uri() . '/assets/js/page-corporate.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-corporate.js')),
      true
    );
    wp_localize_script('page-corporate', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  }  elseif (is_page('dispatch_corporation')) {
    wp_enqueue_script(
      'page-corporate',
      get_template_directory_uri() . '/assets/js/page-corporate.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-corporate.js')),
      true
    );
    wp_localize_script('page-corporate', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  }  elseif (is_page('childcare')) {
    wp_enqueue_script(
      'page-childcare',
      get_template_directory_uri() . '/assets/js/page-childcare.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/page-childcare.js')),
      true
    );
    wp_localize_script('page-childcare', 'WordPress', [
      'templateDirectoryUri' => get_template_directory_uri(),
    ]);
  } else {
    wp_enqueue_script(
      'genaral',
      get_template_directory_uri() . '/assets/js/general.js',
      ['modules'],
      date_i18n('YmdHis', filemtime(get_template_directory() . '/assets/js/general.js')),
      true
    );
  }
});

// カスタム投稿タイプ(column)を追記
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('column', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => 'コラム', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'column',    // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => true, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
  ]);
  register_taxonomy(
    'column_cat',
    'column',
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'singular_label' => 'カテゴリー',
      'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    )
  );
  register_post_type('area', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => 'エリア', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'area',    // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => true, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
  ]);
  register_taxonomy(
    'area_cat',
    'area',
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'singular_label' => 'カテゴリー',
      'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    )
  );
  register_post_type('faq', [ // 投稿タイプ名の定義
    'labels' => [
      'name'          => 'よくある質問(FAQ)', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'faq',    // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublicにするか
    'has_archive'   => true, // アーカイブ機能ON/OFF
    'menu_position' => 5,     // 管理画面上での配置場所
    'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
  ]);
  register_taxonomy(
    'faq_cat',
    'faq',
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => true,
      'singular_label' => 'カテゴリー',
      'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
    )
  );
}




// 投稿タイプのラベル変更

function custom_post_labels($labels)
{
  $labels->name = 'お知らせ';
  $labels->singular_name = 'お知らせ';
  $labels->add_new_item = 'お知らせを追加';
  $labels->edit_item = 'お知らせの編集';
  $labels->new_item = '新規お知らせ';
  $labels->view_item = 'お知らせを表示';
  $labels->search_items = 'お知らせを検索';
  $labels->not_found = 'お知らせが見つかりませんでした。';
  $labels->not_found_in_trash = 'ゴミ箱内にお知らせが見つかりませんでした。';
  $labels->parent_item_colon = '';
  $labels->all_items = 'お知らせ一覧';
  $labels->archives = 'お知らせアーカイブ';
  $labels->insert_into_item = 'お知らせに挿入';
  $labels->uploaded_to_this_item = 'このお知らせへのアップロード';
  $labels->filter_items_list = 'お知らせリストの絞り込み';
  $labels->items_list_navigation = 'お知らせリストナビゲーション';
  $labels->items_list = 'お知らせリスト';
  $labels->menu_name = 'お知らせ';
  $labels->name_admin_bar = 'お知らせ';
  return $labels;
}
add_filter('post_type_labels_post', 'custom_post_labels');

// ----------------------------------------------------
// 不要な管理画面メニューの削除
// ----------------------------------------------------
$current_user = wp_get_current_user();
if (in_array('editor', (array) $current_user->roles)) {
  function remove_menus()
  {
    // remove menus
    remove_menu_page('index.php');
    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit-comments.php');
    remove_menu_page('plugins.php');
    remove_menu_page('tools.php');
    remove_menu_page('options-general.php');
  }
  add_action('admin_menu', 'remove_menus');
}

// contactform7のメールアドレス再入力設定
add_filter('wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2);
add_filter('wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2);
function wpcf7_validate_email_filter_confrim($result, $tag)
{
  $type = $tag['type'];
  $name = $tag['name'];
  if ('email' == $type || 'email*' == $type) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)) { //確認用メルアド入力フォーム名を ○○○_confirm としています。
      $target_name = $matches[1];
      $posted_value = trim((string) $_POST[$name]);
      $posted_target_value = trim((string) $_POST[$target_name]);
      if ($posted_value != $posted_target_value) {
        $result->invalidate($tag, "確認用のメールアドレスが一致していません");
      }
    }
  }
  return $result;
}


add_action('admin_init', function () {
  $role = get_role('editor');

  $role->add_cap('edit_pages');
  $role->add_cap('edit_others_pages');
  $role->add_cap('edit_published_pages');
  $role->add_cap('publish_pages');

  $role->add_cap('list_users');
  $role->add_cap('create_users');
  $role->add_cap('delete_users');
  $role->add_cap('promote_users');
  $role->add_cap('edit_users');
  $role->add_cap('remove_users');
});
