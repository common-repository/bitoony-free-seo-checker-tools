<?php

/**
 * Plugin Name:		Free SEO Tool WordPress Plugin by Rankifyer
 * Description:       Free SEO tools for Wordpress website owners to check and analyze their SEO metrics and performance.
 * Version:           1.0
 * Author:            Rankifyer SEO
 * Author URI:        https://rankifyer.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */
 
 
 

 
add_action( 'admin_menu', 'rankifyer_seo_menu_link' );
function rankifyer_seo_menu_link() {
    add_menu_page(
        'Free SEO Checker Tools by Rankifyer SEO', //page title
        'Free SEO Tools', //menu title
        'manage_options', //cpoability
        'menumain_seotools', //menu slug (used for parenting)
        'rankifyer_seo_main_html', //function name
        plugin_dir_url(__FILE__) . 'images/plugin-icon.png', //give icon
        30
    );
}


add_action( 'wp_enqueue_scripts', 'rankifyer_seo_load_css' );
function rankifyer_seo_load_css() {
	$plugin_url = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'style', $plugin_url . 'css/style.css' );
	}

 
 
 
 function rankifyer_seo_main_html() {
    ?>
<?php rankifyer_seo_load_css(); ?>

<div class="rankifyer_wrap">

<center>
<div class="tool_page_title"><h1>Free SEO Tools</h1></div>
<div class="tool_by">by <a href="https://rankifyer.com" target="_blank"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/logo.png'; ?>" class="rankifyer_logo_by"></a></div>

<br>

<div class="onboard_message">
Choose a tool below to start checking the SEO performance of
<div class="onboard_url_title"><?php echo home_url(); ?></div>
</div>

<br>

<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/google-serp?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fa-brands fa-google"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Google Rank Checker</h2>
<p>Check where your website ranks in Google.</p>
</div>
</div>
</a><a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/bing-serp?site=<?php echo home_url(); ?>" target="_blank"><div class="tool_link_container"><i class="fa-brands fa-microsoft"></i><div class="rankifyer_tool_info" clear="all"><h2>Bing Rank Checker</h2><p>Check where your website ranks in Bing search results for a keyword.</p></div></div></a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/top-search-queries?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fa-solid fa-ranking-star"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Your Top Searches</h2>
<p>See which search terms you're ranking for.</p>
</div>
</div>
</a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/indexed-pages?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-check-circle"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Indexed Pages</h2>
<p>Check how many pages are indexed by Google.</p>
</div>
</div>
</a>

<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/top-referrers?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fa-solid fa-link"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Top Referrers</h2>
<p>Check which websites are referring to your site the most</p>
</div>
</div>
</a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/high-quality-backlinks?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-thumbs-up"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Top Backlinks</h2>
<p>See the most authorative sites that are linking to you.</p>
</div>
</div>
</a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/new-backlinks?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-certificate"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>New Backlinks</h2>
<p>See recent pages that are linking to your website.</p>
</div>
</div>
</a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/poor-backlinks?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-thumbs-down"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Bad Backlinks</h2>
<p>See your toxic backlinks that may be affecting your SEO.</p>
</div>
</div>
</a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/domain-authority?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-crown"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Domain Authority</h2>
<p>Check your website's domain authority</p>
</div>
</div>
</a>


<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/competition?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-skull-crossbones"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Competition Checker</h2>
<p>Check a keyword and compare your website to your competitors</p>
</div>
</div>
</a>

<a class="rankifyer_tools_links_list" href="https://rankifyer.com/free-seo-tools/tools/keyword-research?site=<?php echo home_url(); ?>" target="_blank">
<div class="tool_link_container">
<i class="fas fa-search"></i>
<div class="rankifyer_tool_info" clear="all">
<h2>Keyword Research</h2>
<p>Find keywords relevant to your business and niche</p>
</div>
</div>
</a>

</center>


    </div>
    <?php
}

 
 ?>