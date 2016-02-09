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
                        <span class="label label-success"><i class="fa fa-user"></i>&nbsp;<a href="#"><?php $this->author(); ?></a></span>
                    </div>
                    <figure>
                        <a href="<?php $this->permalink() ?>">
                            <?php showThumbnail($this); ?>
                        </a>
                    </figure>
                    <div class="article-content">
                        <?php $this->content(); ?>
                    </div>
                </article>
                <?php $this->need('comments.php'); ?>
            </div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>