<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <!-- Header -->
  <header id="header" class="alt">
    <h1 id="logo"><a href="<?php print $front_page; ?>"><?php print $title; ?></a></h1>
    <nav id="nav">
      <?php if ($main_menu): ?>
        <div id="navigation"><div class="section">
          <?php

          $main_menu = variable_get('menu_main_links_source', 'main-menu');
          $tree = menu_tree($main_menu);
          print render($tree);

          #print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
        </div></div> <!-- /.section, /#navigation -->
      <?php endif; ?>
    </nav>
  </header>

    <section id="banner">
					<div class="inner">

						<header>
							<h2><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h2>
						</header>
            <p><strong>Web Design & Support</strong> with
						<br />
						passion and commitment
						<br />
						to <strong>quality</strong></p>

					</div>
				</section>

  <!-- Main -->
    <article id="main">

      <!-- One -->
        <section class="wrapper style4 container">

          <div class="row 150%">
            <div class="8u 12u(narrower)">

              <!-- Content -->
              <div id="content" class="column"><div class="section">
                <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
              </div></div>

            </div>
            <div class="4u 12u(narrower)">

              <!-- Sidebar -->
                <div class="sidebar">
                  <?php if ($page['sidebar_second']): ?>
                    <div id="sidebar-second" class="column sidebar"><div class="section">
                      <?php print render($page['sidebar_second']); ?>
                    </div></div> <!-- /.section, /#sidebar-first -->
                  <?php endif; ?>
          </div>
        </section>

    </article>

    <!-- CTA -->
      <section id="cta">

        <header>
          <h2>Fancy a <strong>new Website</strong>?</h2>
          <p>No matter how small or large the project, we'd love to hear about it! Feel free to get in touch!</p>
        </header>
        <footer>
          <ul class="buttons">
            <li><a href="<?php print $site_url; ?>/contact" class="button special">Contact Us!</a></li>
          </ul>
        </footer>

      </section>

      <!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="http://twitter.com/SwiftPixel" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="http://facebook.com/SwiftPixelWeb" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; <?php print date('Y'); ?> SwiftPixel</li>
					</ul>

				</footer>

</div>
