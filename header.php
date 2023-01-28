<!DOCTYPE html>
<!-- <html lang="ja"> -->
<html <?php language_attributes(); ?>> <!-- 言語設定を自動的に出力します-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?> <!-- WordPressのテーマに含める関数。admin_barや必要となるソースの出力などを行う。 -->
</head>
<body <?php body_class(); ?>><!-- ページによって装飾を変えたい時などテンプレートに自分でクラスを付けなくてもWordPressが付けてくれるので便利 -->
	<div class="l-container">
		<header class="l-header">
			<button type="button" class="c-button--menu c-button--js">Menu</button>
			<h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<?php get_search_form(); ?><!-- searchform.php 検索フォーム呼び出し -->
		</header><!-- /.l-header -->
