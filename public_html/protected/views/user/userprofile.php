<div class="section">
    <div class="container">
        <div class="row">
            <!-- Image Column -->
            <div class="col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#"><img src=<?php echo $userprof->img; ?> alt="Project Name"></a>
                    </div>
                </div>
            </div>
            <!-- End Image Column -->

            <!-- Project Info Column -->
            <div class="portfolio-item-description col-sm-6">
                <h3>Project Description</h3>
                <p>
                    <?php echo $userprof->text; ?>
                </p>

                <ul class="no-list-style">
                    <li><b>Name:</b> <?php echo $userprof->name; ?></li>
                    <li><b>Surname:</b> <?php echo $userprof->surname; ?></li>
                    <li><b>Bith date:</b> <?php echo $userprof->birth_date; ?></li></li>
                     <li><b>Director:</b> <?php echo $userprof->director; ?></li></li>
                   <li><b>Company:</b> <?php echo $userprof->company; ?></li></li>
                    <li class="portfolio-visit-btn"><a href="#" class="btn">Visit Website</a></li>
                </ul>
            </div>
            <!-- End Project Info Column -->
        </div>


    </div>
</div>
