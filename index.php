<!DOCTYPE html>
<html>
    <head>
	<?php include 'includes/globalHead.html' ?>
        <!-- Javascript/Jquery imports here -->
    </head>
<body class="hpBody">
    
    <?php
	include 'loginCheck.php';
	if($loggedin) { 
        include 'includes/header_internal.php';
	}
	else {
		include 'includes/header.php';
	}
        include 'includes/nav.php';
        //include 'includesfooter.html'; // Disabled until bugfix completed by Roland
    ?>
    <div class="wrapper">
        <!-- Three column section -->
        <section id="primary-section">
            <div class="main-article">
                <article>
                    <img src="https://i.imgur.com/WI2iC0W.jpg" width="600" height="430">
                    <h1>Mark Zuckerberg chokes on his own breath</h1>
                    <p>In elementum condimentum lectus id porta. Sed sagittis hendrerit lacinia. Maecenas tristique lobortis mauris sed aliquam. Nam molestie interdum malesuada. Sed pulvinar neque lacus, nec semper erat interdum quis. Ut et ligula finibus, hendrerit nisi vel, lobortis massa. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec nulla metus, dapibus quis euismod vitae, sodales in purus. Phasellus ac pharetra lorem.</p>
                    <a class="continue-reading" href="#">Continue Reading</a>
                </article>
            </div>
            <div class="divider left-divider"></div>
            <div class="sidebar left-sidebar">
                <h1 class="sidebar-heading">Editor's Choice</h1>
                <article>
                    <img src="https://i.imgur.com/U469uHI.jpg" width="325" height="217">
                    <h2>Locke Farts in Huddle</h2>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It's easy. This is an example of an article with content in it.</p>
                    <a class="continue-reading" href="#">Continue Reading</a>
                </article>
            </div>
            <div class="divider right-divider"></div>
            <div class="sidebar right-sidebar">
                <h1 class="sidebar-heading">Trending</h1>
                <article>
                    <img src="https://i.imgur.com/VGmeSNI.jpg" width="325" height="217">
                    <h2>Trump Eats Dick</h2>
                    <p>I'm a paragraph. Click here to add your own text and edit me. It's easy. This is an example of an article with content in it. </p>
                    <a class="continue-reading" href="#">Continue Reading</a>
                </article>
                <article>
                    <img src="http://via.placeholder.com/325x217">
                    <h2>This is an Example Headline</h2>
                    <p>Ut facilisis vitae dolor a lacinia. Nulla sed lorem lacus. Maecenas lectus lectus, dictum non mollis sed, interdum nec diam. Suspendisse id ultricies est. Praesent a nunc nisl. Nulla fringilla sapien ac sem congue porttitor. Donec ornare arcu quis eros pretium, non ultrices risus pretium.</p>
                    <a class="continue-reading" href="#">Continue Reading</a>
                </article>
            </div>
        </section>
            
        <section class="banner-ad">
            <div class="ad">
                <p>AD</p>
            </div>
        </section>
        
        <!-- Stacked article section -->
        <section id="secondary-section">
                <article>
                    <div class="stacked-thumbnail">
                        <img src="https://i.imgur.com/2XDXr7M.jpg" height="217" width="325">
                    </div>
                    <div class="stacked-text">
                        <h1>Teacher doesn't give two fucks about his students.. Brian Mauer</h1>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It's easy. This is an example of an article with content in it. It is filled with funny content that people will love and will eventually make us a bigilloinaires! Blah blah blah blah blah.I'm a paragraph. Click here to add your own text and edit me. It's easy.</p>
                        <a class="continue-reading" href="#">Continue Reading</a>
                    </div>
                </article>
                <article>
                    <div class="stacked-thumbnail">
                        <img src="https://i.imgur.com/fObCf7A.jpg" width="325" height="217">
                    </div>
                    <div class="stacked-text">
                        <h1>Student gives up on his college dreams...</h1>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It's easy. This is an example of an article with content in it. It is filled with funny content that people will love and will eventually make us a bigilloinaires! Blah blah blah blah blah.I'm a paragraph. Click here to add your own text and edit me. It's easy.</p>
                        <a class="continue-reading" href="#">Continue Reading</a>
                    </div>
                </article>
                <article>
                    <div class="stacked-thumbnail">
                        <img src="http://via.placeholder.com/314x193">
                    </div>
                    <div class="stacked-text">
                        <h1>This is an example headline</h1>
                        <p>Ut facilisis vitae dolor a lacinia. Nulla sed lorem lacus. Maecenas lectus lectus, dictum non mollis sed, interdum nec diam. Suspendisse id ultricies est. Praesent a nunc nisl. Nulla fringilla sapien ac sem congue porttitor. Donec ornare arcu quis eros pretium, non ultrices risus pretium.</p>
                        <a class="continue-reading" href="#">Continue Reading</a>
                    </div>
                </article>
        </section>
    </div>
</body>
</html>
