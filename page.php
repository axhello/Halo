<?php $this->need('header.php'); ?>

<div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="wallpaper">
                    <div class="article-title">
                        <h1><?php $this->title() ?></h1>
                    </div>
                    <div class="article-tag">
                        <span class="label label-danger"><i class="fa fa-calendar"></i></i>&nbsp;<a href="#"><?php $this->date('y-m-d') ?></a></span>
                        <span class="label label-info"><i class="fa fa-tags"></i>&nbsp;<a href="#"><?php $this->tags(',', true, 'none'); ?></a></span>
                        <span class="label label-warning"><i class="fa fa-cog fa-spin"></i></i>&nbsp;<a href="#"><?php $this->category(','); ?></a></span>
                        <span class="label label-success"><i class="fa fa-user"></i>&nbsp;<a href="#"><?php $this->author(); ?></a></span>
                    </div>
                    <figure class="">
                        <img src="<?php $this->options->themeUrl('images/mirai.jpg'); ?>" class="img-responsive img-rounded img"  alt="Mirai.jpg">
                    </figure>
                    <div class="article-content">
                        <?php $this->content(); ?>
                        <div class="abh_box">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#about" role="tab" data-toggle="tab">About</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="about">
                                    <?php $this->author->gravatar(); ?>Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">lol</div>
                                <div role="tabpanel" class="tab-pane" id="messages">2333</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>