<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>    Список статей</h1>
            </div>
        </div>
    </div>
</div>






<!-- Blog Post -->
<?php foreach ($NewsList as $index => $News) : ?>
<div class="col-sm-8">

    <div class="blog-post blog-single-post">
            <form action="index.php" method="get">


        <div class="blog-post blog-single-post">

            <input type="submit" name="button" value="Редактировать" />
            </form>
        <form action="index.php" method="get">
            <input type="submit" name="button" value="Удалить" />
        </form>
        
        <div class="single-post-image">
            <img src=<?php echo $News->img; ?> alt="Post Title">
        </div>
        <div class="single-post-content">
            <h3><?php echo $News->title; ?></h3>
            <p>
                <?php echo $News->text; ?>
            </p>


        </div>
        <!-- Comments -->

        <!-- End Comments -->
    </div>

</div>
<?php endforeach; ?>