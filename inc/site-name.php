<?php
/**
 * カスタムロゴがあればカスタムロゴを出力し、なければサイト名を出力する
 */
function hamdocs_the_site_name() {
	if ( has_custom_logo() ) {
		the_custom_logo();
	} else {
		echo '<a href="' . esc_attr( home_url( '/' ) ) . '"><span>' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
	}
}
