<section id="intro" class="intro height-full bg-white">
    <div class="intro__image--container">
        <div class="intro__image bg-img" style="background-image: url('/assets/dist/img/horn-by-building.jpg')"></div>
    </div>
    <div class="container height-100">
        <div class="row middle-xs height-100">
            <div class="intro__text col-xs-12 col-sm-8 col-md-4">
                <h1 class="vp-xs-bottom-1">Hi, I&rsquo;m Nick.</h1>
                <h4>Web Developer / classical musician<br>based in Chattanooga, TN</h4>
            </div>
        </div>
    </div>
</section>
<section id="work" class="portfolio bg-white">
    <div class="container vp-xs-top-3 vp-xs-bottom-3">
        <div class="row">
            <div class="col-xs-12 col-sm-8 vp-xs-bottom-6">
                <h2 class="vp-xs-bottom-1">My Work</h2>
                <p>As a Front-End Developer at <a href="http://whiteboard.is" target="_blank" class="inline-link">Whiteboard</a>, I have been either lead or supporting developer on more than 30 projects. In an agile environment of strategists, designers, and developers, I have used a (multidimensional) array of technologies &mdash; like PHP, JavaScript, Node, Sass &mdash; to serve our clients&rsquo; needs.</p>
                <p>Here are some of my favorite projects:</p>
            </div>
            <?php $projects = array(
                array(
                    'title' => 'Food for the Hungry',
                    'link' => 'https://www.fh.org/',
                    'image' => '/assets/dist/img/fh.jpg',
                    'description' => 'Food for the Hungry is working to end poverty and supports children worldwide with the help of donor gifts and child sponsorships.'
                ),
                array(
                    'title' => 'Last Mile Health',
                    'link' => 'http://lastmilehealth.org/chacademy/',
                    'image' => '/assets/dist/img/lmh.jpg',
                    'description' => 'Last Mile Health provides both access to healthcare and training to community health workers in remote parts of the world where people are most vulnerable to diseases like Ebola. In recognition and support of their efforts, founder Raj Panjabi won the 2017 TED Prize.'
                ),
                array(
                    'title' => 'Airbus Aerial',
                    'link' => 'https://airbusaerial.com/',
                    'image' => '/assets/dist/img/airbusaerial.jpg',
                    'description' => 'Airbus Aerial is a new venture by Airbus that is leveraging aerospace technology from across the globe to offer actionable data and analysis to its partners.'
                ),
                array(
                    'title' => 'Whiteboard',
                    'link' => 'http://whiteboard.is/insights/black-dot-focus-overcoming-three-causes-error/',
                    'image' => '/assets/dist/img/whiteboard.jpg',
                    'description' => 'Whiteboard is a design and development firm who is &ldquo;helping organizations thrive in our digital age.&rdquo;'
                ),
                array(
                    'title' => 'WinShape Camps',
                    'link' => 'http://camps.winshape.org/',
                    'image' => '/assets/dist/img/wsc.jpg',
                    'description' => 'A division of the WinShape Foundation, a charitable organization established by Chick-fil-A&rsquo;s founders, WinShape Camps brings kids together for the &ldquo;summer of a lifetime.&rdquo;'
                ),
                array(
                    'title' => 'Veritas Forum',
                    'link' => 'http://www.veritas.org/',
                    'image' => '/assets/dist/img/veritas.jpg',
                    'description' => 'The Veritas Forum gathers many of the world&rsquo;s leading religious thinkers to foster conversations about life&rsquo;s hardest questions.'
                ),
                array(
                    'title' => 'The Camp House',
                    'link' => 'https://thecamphouse.com/',
                    'image' => '/assets/dist/img/camphouse.jpg',
                    'description' => 'The Camp House is not only one of Chattanooga&rsquo;s finest coffee shops, but also an important community meeting place, event venue, and home to The Mission Chattanooga Anglican church.'
                )
            ); ?>
            <div class="portfolio__grid col-xs-12">
                <div class="row">
                    <?php foreach ($projects as $project) : ?>
                        <div class="col-xs-12 col-sm-6 vp-xs-bottom-4">
                            <div class="portfolio__card row bg-white">
                                <div class="portfolio__card--image-container col-xs-12">
                                    <div class="portfolio__card--image">
                                        <div class="bg-img" style="background-image: url('<?php echo $project['image']; ?>')"></div>
                                    </div>
                                </div>
                                <div class="portfolio__card--info col-xs-12">
                                    <h5 class="vp-xs-bottom-1"><?php echo $project['title']; ?></h5>
                                    <p class="vp-xs-bottom-1 small"><?php echo $project['description']; ?></p>
                                    <p>
                                        <a href="<?php echo $project['link']; ?>" target="_blank" class="inline-link">See More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="background bg-white">
    <div class="container vp-xs-top-3 vp-xs-bottom-6">
        <div class="row">
            <div class="col-xs-12 vp-xs-bottom-3 text-center">
                <h2>A bit of background</h2>
            </div>
            <div class="background__story col-xs-12 col-sm-7 vp-xs-top-2 vp-xs-bottom-2">
                <h3 class="vp-xs-bottom-1">From Music City...</h3>
                <p>I started my career as a freelance musician, having earned my Bachelor of Music from Vanderbilt University and my Master of Music Performance from Cleveland (Ohio) State University.</p>
                <p>
                    During my master&rsquo;s, I got hooked on code and took as many <span class="tooltip__toggle--untoggled">online courses
                        <!-- <span class="tooltip small bg-gray">
                            <a href="#" class="inline-link">CS50x: Introduction to Computer Science</a> &mdash; Harvard University/edX<br><br>
                            <a href="#" class="inline-link">Introduction to Interactive Programming with Python</a> &mdash; Rice University/Coursera<br><br>
                            <a href="#" class="inline-link">Introduction to Logic</a> &mdash; Stanford University/Coursera<br><br>
                            <a href="#" class="inline-link">Microeconomics Principles</a> &mdash; University of Illinois at Urbana-Champaign/Coursera<br><br>
                            <a href="#" class="inline-link">Justice</a> &mdash; Harvard University/edX<br><br>
                            <a href="#" class="inline-link">Front-End Web Developer Nanodegree</a> &mdash; Udacity<br><br>
                            <a href="#" class="inline-link">Artificial Intelligence Nanodegree</a> &mdash; Udacity<br><br>
                        </span> -->
                </span> as I could, including Udacity&rsquo;s <a href="https://www.udacity.com/course/web-development--cs253" target="_blank" class="inline-link">Web Development</a> with Reddit cofounder Steve Huffman.
                </p>
                <p>Eventually, I enrolled in and completed Udacity&rsquo;s <a href="#" target="_blank" class="inline-link">Front-End Web Developer Nanodegree</a>.</p>
            </div>
            <div class="background__image col-x-12 col-sm-5">
                <div class="bg-img" style="background-image: url('/assets/dist/img/principal-horn.jpg');"></div>
            </div>
            <div class="background__image col-x-12 col-sm-5 vm-xs-top-6">
                <div class="bg-img" style="background-image: url('/assets/dist/img/working.jpg');"></div>
            </div>
            <div class="background__story col-xs-12 col-sm-7 vp-xs-top-2 vp-xs-bottom-2 vm-xs-top-6">
                <h3 class="vp-xs-bottom-1">...to Gig City</h3>
                <p>I then joined the technology team as a Front-End Developer at <a href="http://whiteboard.is" target="_blank" class="inline-link">Whiteboard</a>, a design and development firm based in Chattanooga, TN.</p>
                <p>Here, I have had the immense pleasure to work with some of the brightest talents in the agency world, serving clients who do meaningful, impactful work in their communities.</p>
                <p>Outside of programming, you can catch me singing baritone with the <a href="https://www.nashvillesymphony.org/" target="_blank" class="inline-link">Nashville Symphony Orchestra Chorus</a> and <a href="https://www.operatn.org/" target="_blank" class="inline-link">Opera Tennessee</a> here in Chattanooga. And I still keep my horn chops up as a freelance player and teacher in the Chattanooga area.</p>
            </div>
        </div>
    </div>
</section>
