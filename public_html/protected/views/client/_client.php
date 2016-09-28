<div class="row">
    <div class="col-xs-2">
        <?php echo CHtml::link(
            CHtml::image($data->img, $data->title),
            $this->createUrl("client/view", ['id' => $data->id])
        ); ?>
    </div>
    <div class="col-xs-10">
        <div class="caption">
            <a href="<?php echo $this->createUrl("client/view", ['id' => $data->id]); ?>"><?php echo $data->title; ?></a>
        </div>
        <div class="intro">
            <?php echo mb_strcut($data->description, 0, 350) ; ?>
        </div>
    </div>
</div>