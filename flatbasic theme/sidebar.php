<div id="sidebar">

    			<div id="rightSidebar">
                	<div class="rightContainer">
                    	<div id="countDown">
                        	<div id="countDownTitle"><b>COUNTDOWN TO KANSAS!</b></div>
                            <div id="countDownTo">
                            	<p id="countDownLoc"><b>SAE National Convention</b></p>
								<p id="countDownDate">May 22th, 2014</p>
                            </div>
            				<iframe id="timer" src="http://free.timeanddate.com/countdown/i3usi7ar/n405/cf12/cm0/cu1/ct5/cs1/ca0/co0/cr0/ss0/cacfff/cpcfff/pcccc/tcfff/fs100/szw1000/szh421/iso2014-05-22T00:00:00/pa20" frameborder="0" width="145" height="130"></iframe>
            			</div> <!--End countDown-->
                    </div>
                    <div>
                    	<div id="followUs"><p>Follow us<br />online!</p></div>
                    	<a href="https://www.facebook.com/NUBajaSAE"><img id="facebook" src="<?php bloginfo('template_directory'); ?>/images/Facebook.png" height=50px width=50px /></a>
                        <a href="https://twitter.com/NUBajaSAE"><img id="twitter" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" height=50px width=50px /></a>
                    </div>
                    
                    <div id="archivesContainer">
			
			            <div id="archivesTitle"><strong>ARCHIVES</strong></div>
			
						<div id="archivesList"><?php wp_get_archives(); ?></div>
                        
                </div> <!--End rightSidebar-->            
	
	<!--<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>-->
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        
    	<!--<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
	
	<?php endif; ?>

</div>-->