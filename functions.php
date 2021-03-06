<?php

// アイキャッチ設定
add_theme_support('post-thumbnails');

// ニュースの一覧取得
function get_news_posts($limit = -1)
{
    $args = [
        'post_type' => 'news',
        // デフォルトは全件表示
        'posts_per_page' => $limit,
        'post_status' => 'publish',
    ];
    return new WP_Query($args);
}

// イベントの一覧取得
function get_events_posts($limit = -1)
{
    $args = [
        'post_type' => 'events',
        'posts_per_page' => $limit,
        'post_status' => 'publish',
    ];
    return new WP_Query($args);
}


// ページネーションの設定
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    //表示テキスト
    $text_first   = "« 最初へ";
    $text_before  = "‹ 前へ";
    $text_next    = "次へ ›";
    $text_last    = "最後へ »";

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
        }
        for ( $i = 1; $i <= $pages; $i++ ) {

            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<span class="current pager">', $i ,'</span>';
                } else {
                    echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
                }
            }

        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
        }
        if ( $paged + $range < $pages ) {
            // 「最後へ」 の表示
            echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
        }
        echo '</div>';
    }
}

//カスタム投稿タイプの追加

add_action('init', 'create_post_type');
function create_post_type() {

    //カスタム投稿タイプ・ニュース
    register_post_type(
        'news',
        array(
        'labels' => array(
            'name' => _x('ニュース', 'post type general name'),
            'singular_name' => _x('ニュース', 'post type singular name'),
            'add_new' => _X('新規追加', 'news'),
            'ass_new_item' => __('ニュース'),
            'edit_item' => __('編集'),
            'new_item' => __('新規ニュース'),
            'view_item' => __('表示'),
            'search_items' => __('項目検索'),
            'not_found' => __('記事が見つかりません'),
            'not_found_in_trash' => __('ゴミ箱に記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'news'),
        'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    //カスタム投稿タイプ・イベント
    register_post_type(
        'events',
        array(
        'labels' => array(
            'name' => _x('イベント', 'post type general name'),
            'singular_name' => _x('イベント', 'post type singular name'),
            'add_new' => _X('新規追加', 'news'),
            'ass_new_item' => __('イベント'),
            'edit_item' => __('編集'),
            'new_item' => __('新規イベント'),
            'view_item' => __('表示'),
            'search_items' => __('項目検索'),
            'not_found' => __('記事が見つかりません'),
            'not_found_in_trash' => __('ゴミ箱に記事はありません'),
            'parent_item_colon' => ''
            ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'events'),
        'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}

/*

// アセットのパス取得
function get_assets_path()
{
    return get_template_directory_uri() . '/assets';
}

// ニュース一覧取得
function get_news_posts($limit = -1)
{
    $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
    $args = [
        'post_type' => 'news',
        'posts_per_page' => $limit,
        'paged' => $paged
    ];
    return new WP_Query($args);
}

// イベント一覧取得
function get_event_posts($limit = -1)
{
    $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
    $args = [
        'post_type' => 'events',
        'posts_per_page' => $limit,
        'paged' => $paged,
        'meta_key' => 'event_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        // 過去のイベントは不要
        'meta_query' => [
            [
                'key' => 'event_date',
                'value' => date('Y-m-d'),
                'compare' => '>=',
                'type' => 'DATE'
            ]
        ]
    ];
    return new WP_Query($args);
}

// 文字列を短縮して返す
function get_short_str($str)
{
    $len = 100;
    $str = str_replace(["\r\n", "\r", "\n"], '', $str);
    $str = strip_tags($str);
    return (mb_strlen($str, 'utf-8') > $len) ? mb_substr($str, 0, $len, 'utf-8') . '…' : $str;
}

// アイキャッチ取得
function get_thumbnail_url()
{
    global $post;
    if (has_post_thumbnail()) {
        $id = get_post_thumbnail_id($post->ID);
        return wp_get_attachment_image_src($id, 'full')[0];
    } else {
        // noimage
        return get_assets_path().'/images/news/news_noimage.png';
    }
}

// イベントの種類情報取得
function get_event_type_info()
{
    global $post;
    if (get_field('event_type') == '1') {
        $array['icon_name'] = 'directions_run';
        $array['name']      = 'スポーツ';
    } else {
        $array['icon_name'] = 'record_voice_over';
        $array['name']      = 'コンサート';
    }
    return $array;
}

// イベントの日時取得
function get_event_date($date_format)
{
    global $post;
    $event_date = get_field('event_date');
    return date($date_format, strtotime($event_date));
}

/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
 */

/*
function pagination( $pages, $paged, $range = 3, $show_only = false ) {
    $showitems = ($range * 2) + 1; // 表示する個数
    $pages     = ( int ) $pages;   // float型で渡ってくるので明示的に int型 へ
    $paged     = $paged ?: 1;      // get_query_var('paged')をそのまま投げても大丈夫なように

    // 表示用テキスト
    $text_before  = "<<";
    $text_next    = ">>";
    $url_before   = get_pagenum_link( $paged - 1 );
    $url_next     = get_pagenum_link( $paged + 1 );

    // １ページのみで表示設定が true の時
    if ( $show_only && $pages === 1 ) {
        echo '<div class="pager"><ul><li><a href="#">1</a></li></ul></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        $dom  = '<div class="pager">';
        $dom .= '<ul>';

        // 前へ
        if ( $paged > 1 ) {
            $dom .= '<li><a href="'.$url_before.'">'.$text_before.'</a></li>';
        }

        // メイン
        for ( $i = 1; $i <= $pages; $i++ ) {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                if ( $paged === $i ) {
                    $dom .= '<li class="selected"><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
                } else {
                    $dom .= '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
                }
            }
        }

        // 次へ
        if ( $paged < $pages ) {
            $dom .= '<li><a href="'.$url_next.'">'.$text_next.'</a></li>';
        }

        $dom .= '</ul>';
        $dom .= '</div>';

        echo $dom;
    }

}

add_filter( 'query_vars', function($vars){
    $vars[] = "date";
    return $vars;
});
 */
