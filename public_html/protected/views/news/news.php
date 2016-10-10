<!-- Blog Post -->
<div class="col-sm-8">
    <div class="blog-post blog-single-post">

              <div class="single-post-image">
            <img src=<?php echo $NewsData->img; ?> alt="Post Title">
        </div>
        <div class="single-post-content">
            <h3><?php echo $NewsData->title; ?></h3>
            <p>
                <?php echo $NewsData->text; ?>
            </p>


        </div>
        <!-- Comments -->

        <!-- End Comments -->
    </div>
</div>