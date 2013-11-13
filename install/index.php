<?php
/**
 * This page tells instructs the user on how to properly configure WordPress/Pagoda
 */


// includes?

?><!doctype html>
<html>
<head>
	<title>OptSec WordPress</title>
	<!-- This page is not meant to be used by Google and Friends -->
	<meta name="robots" content="noindex, nofollow">
	
	<!-- CSS -->
	<link href='css/normalize.css' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Sans+Mono|Roboto' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	
	<!-- JS -->
	
</head>
<body>
	<!-- Page Container -->
	<div id="page-container">
		
		<!-- Header -->
		<div class="container" id="header-container">
			<header>
				
				
				
			</header>
		</div>
		<!-- /Header -->
		
		<!-- Content -->
		<div id="content-wrapper">
			<div class="container" id="content-container">
				<!-- Section #1 -->
				<section id="welcome">
					<div id="welcome-msg">
						<h1>Welcome to OptSec WordPress!</h1>
						<p id="welcome-desc">
							This installation of WordPress is specifically designed to be as <b>fast &amp; secure</b> as possible. To acheive this, we take advantage of the best WordPress plugins &amp; practices.
							<br>
							<br>
							<hr>
						</p>
						<div id="welcome-lists-container">
							<div id="welcome-lists">
								<div class="welcome-list" id="plugins-list">
									<h3>Plugins Available</h3>
									<sup>(sorted alphabetically)</sup>
									<ul>
										<li>All-In-One WP Security and Firewall</li>
										<li>Better WP Security</li>
										<li>Google Analytics Dashboard for WP</li>
										<li>Google Sitemap Generator</li>
										<li>Options Framework</li>
										<li>Revision Control</li>
										<li>SEO Ultimate</li>
										<li>W3 Total Cache</li>
										<li>WP-reCaptcha</li>
										<li>WP Default Plugins</li>
									</ul>
								</div>
								<div class="welcome-list" id="practices-list">
									<h3>Practices Used</h3>
									<sup>(No particular order)</sup>
									<ul>
										<li>Designed to be as secure as possible</li>
										<li>WordPress can be updated, without compromising security</li>
										<li>Designed to be <b>very</b> SEO friendly</li>
										<li><code>wp-config.php</code> is not writable or in a public location</li>
										<li>The configuration is tested with every update</li>
										<li>Designed to be used with Memcached</li>
									</ul>
								</div>
								<div class="welcome-list" id="extras-list">
									<h3>Extras</h3>
									<sup>(sorted alphabetically)</sup>
									<ul>
										<li>Plugin: Bootstrap Admin</li>
										<li>Plugin: CK Editor</li>
										<li>Plugin: Disable WordPress Core Update</li>
										<li>Plugin: Disqus Comment System</li>
										<li>Plugin: MP6</li>
										<li>Plugin: Related Posts</li>
										<li>Plugin: WordPress Importer</li>
										<li>WP Default Themes</li>
										<li>This handy install guide</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<h3>About What's Included</h3>
					<p>
						Each plugin has been specifically picked to work together, and to allow WordPress to work as securely &amp; effeciently as possible, in that order.
						<br><br>
						The practices used take security and optimization to the next level by testing your installation after every change. If your installation fails a test, it doesn't get published.
						This also means that if you make a change that breaks your site, you know about it instantly and your visitors aren't effected.
						<br><br>
						Finally, commonly used extras have also been included. These extras are included to help get you started with your installation.
					</p>
					
					<h3>Important Message</h3>
					<p>
						Even if you are very familiar with WordPress &amp; Pogoda Box, it is <b>highly recomended</b>, that you still go through the installation guide atleast once. This guide is intended to help
						you understand the specifics of OptSec WordPress, as it doesn't operate like your typical installation.
					</p>
					
					<hr>
				</section>
				<!-- /Section #1 -->
				
				<!-- Section #2 -->
				<section class="step" id="step-1">
					<h2 class="step-title" data-difficulty="Medium">Step 1: <small>Cloning Your App</small></h2>
					<p>For this, if you have not already, you will need to install the Git command line. If you run into any trouble, click here for a comprehensive guide to installing Git, and click here to learn how to setup Git for Pagoda Box.</p>
					<ol>
						<li>Get your "Git Clone URL" from your Pagoda Box admin panel</li>
						<li>Open Git Bash</li>
						<li>
							Type: <code>git clone git@git.pagodabox.com:<span style="color:red;">your-app-name</span>.git "<span style="color:red;">folder-name</span>"</code>
							<br>
							<small>(you have to get <code><span style="color:red;">your-app-name</span></code> from your Pagoda Box admin panel, but <code><span style="color:red;">folder-name</span></code> can be whatever you want.)</small>
						</li>
						<li>That's it! You have successfully cloned your app, but don't close Git Bash yet, we will need it again later.</li>
					</ol>
				</section>
				<!-- /Section #2 -->
				
				<!-- Section #3 -->
				<section class="step" id="step-2">
					<h2 class="step-title" data-difficulty="Easy">Step 2: <small>Adding SALT &amp; Key Definitions</small></h2>
					<p>This part is as simple as <b>Copy</b> &amp; <b>Paste</b>.
					</p>
					<b>NOTICE:</b> If you have already done this once for a site, you don't have to do it again. However you can retrace the steps at any time and force all WordPress users to relogin. (this includes administrators)
					<ol>
						<li>You need to find your app folder on your local machine. If you followed the directions from above it should be in: <code>C:/users/<span style="color:red;">your-username</span>/<span style="color:red;">your-folder-name</span></code></li>
						<li>Navigate to and open <code>C:/users/<span style="color:red;">your-username</span>/<span style="color:red;">your-folder-name</span>/salt_key.php</code> in a <b>plain text*</b> editor.<br>
						<small>*Microsoft Word will <b>NOT</b> work! Please use Notepad or an IDE.</small>
						</li>
						<li>Select the text below this list and Right-Click to <b>copy</b> its contents</li>
						<li><b>Paste</b> the contents into <code>salt_key.php</code> and save the document.</li>
						<li>You have succefully add SALT and Key definitions to your app. You will need to <code>Push</code> the changes for them to take effect. <b>However</b> this is not required yet, and we will cover "Pushing" later in the guide.</li>
					</ol>
					<b>NOTICE:</b> Copy exactly what is below, and be sure not to add or remove any characters
				</section>
				<!-- /Section #3 -->
				
				<div class="page-break"></div>
				
				<!-- Section #4 -->
				<section class="step" id="step-3">
					<h2 class="step-title" data-difficulty="Easy/Medium">Step 3: <small>Adding/Removing Plugins &amp; Themes</small></h2>
					<p>Learning to add or remove plugins &amp; themes is a key part of using WordPress, and is a common occurrence. So taking the time to learn these steps is important. For this step, you will need an archive extracting program, such as Jzip, Winzip, or 7zip.
					<br><br>
					<b>NOTICE:</b> Plugins and themes are handled differently in OptSec WP; We use more convenient file paths for WordPress, plugins and themes. This allows you easily update WordPress, without compromising security or reinstalling plugins/themes.
					</p>
					<h4>Adding Themes/Plugins</h4>
					<ol>
						<li>Open <code>C:/users/<span style="color:red;">your-username</span>/<span style="color:red;">your-folder-name</span>/</code></li>
						<li>Open either <code>plugins</code> or <code>themes</code></li>
						<li>Extract your plugin/theme to the folder*<br>
						<small>*Each theme/plugin <b>must</b> be in its own folder</small>
						</li>
						<li>You will need to <code>Push</code> the changes for them to take effect. <b>However</b> this is not required yet, and we will cover "Pushing" later in the guide.</li>
						<li>That's It.</li>
					</ol>
					<h4>Removing Themes/Plugins</h4>
					<ol>
						<li>Open <code>C:/users/<span style="color:red;">your-username</span>/<span style="color:red;">your-folder-name</span>/</code></li>
						<li>Open either <code>plugins</code> or <code>themes</code></li>
						<li>Delete the plugin or theme folder(s)</li>
						<li>You will need to <code>Push</code> the changes for them to take effect. <b>However</b> this is not required yet, and we will cover "Pushing" later in the guide.</li>
						<li>That's It.</li>
					</ol>
				</section>
				<!-- /Section #4 -->
			</div>
		</div>
		<!-- /Content -->
		
		
		<!-- Footer -->
		<div class="container" id="footer-container">
			<footer>
				
				
				
			</footer>
		</div>
		<!-- /Footer -->
		
	</div>
	<!-- /Page Container -->
</body>
</html>



