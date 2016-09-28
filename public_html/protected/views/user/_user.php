<div class="col-md-4 col-sm-6">
<div class="team-member">
    <!-- Team Member Photo -->
    <div class="team-member-image">
        <a href="<?php echo $this->createUrl('user/userprofile', ['id' => $data->id]); ?>">
        <img src="<?php

        echo $data->img; ?>"
                                        alt="<?php

                                        echo $data->name; ?>">
        </a>
    </div>

    <div class="team-member-info">
        <ul>
            <!-- Team Member Info & Social Links -->
            <li class="team-member-name">
                <?php

                echo $data->surname; ?>
                <!-- Team Member Social Links -->
          <span class="team-member-social">
           <a href="#"><i class="icon-facebook"></i></a>
           <a href="#"><i class="icon-github"></i></a>
           <a href="#"><i class="icon-tumblr"></i></a>
          </span>
            </li>
            <li><?php

                echo $data->company; ?></li>
        </ul>
    </div>
</div>
</div>