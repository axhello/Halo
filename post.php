<?php $this->need('header.php'); ?>

    <div id="bodyer" class="container">
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
                    <div class="article-content">
                        <?php $this->content(); ?>
                        <div class="abh_box">
                            <!-- Nav tabs -->
                            <ul class="abh_tabs" role="tablist">
                                <li class="active"><a href="#about" data-toggle="tab">About</a></li>
                                <li><a href="#messages" data-toggle="tab">Messages</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="about">
                                    <div class="my-avatar">
                                        <?php $this->author->gravatar(50); ?>
                                    </div> Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="tab-pane" id="messages">
                                    <div class="messages">
                                        <p>233333333333333333333</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <?php $this->need('comments.php'); ?>
            </div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>