<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Latest & Featured News</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Featured News -->
            <div class="col-sm-6 featured-news">
                <h2>Featured News</h2>
                <?php foreach ($NewsData as $index => $News) : ?>
                <div class="row">
                    <div class="col-xs-4"><a href=<?php echo $this->createUrl("'news/news'", ['id' => $News->id]); ?>><img src=<?php echo $News->img; ?> alt="Post Title"></a></div>
                    <?php echo "id = "; echo $News->id; ?>
                    <div class="col-xs-8">
                        <div class="caption"><a href=<?php echo $this->createUrl('news/news');?>><?php echo $News->title; ?></a></div>
                        <div class="date"><?php echo $News->ndate; ?> </div>
                        <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <a href="page-blog-post-right-sidebar.html">Read more...</a></div>
                    </div>

                </div>
                <?php endforeach; ?>

            </div>
            <!-- End Featured News -->
            <!-- Latest News -->
            <div class="col-sm-6 latest-news">
                <h2>Latest News</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="page-blog-post-right-sidebar.html">Anual Report</a></div>
                        <div class="date">16 May 2013 </div>
                        <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <a href="page-blog-post-right-sidebar.html">Read more...</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="page-blog-post-right-sidebar.html">New Career Oportunities</a></div>
                        <div class="date">14 May 2013 </div>
                        <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="page-blog-post-right-sidebar.html">Read more...</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="page-blog-post-right-sidebar.html">New Career Oportunities</a></div>
                        <div class="date">14 May 2013 </div>
                        <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="page-blog-post-right-sidebar.html">Read more...</a></div>
                    </div>
                </div>
            </div>
            <!-- End Featured News -->
        </div>
    </div>
</div>

