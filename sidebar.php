
        <div class="col-md-4">
                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <a class="pr" href="#">Welcome to my website!</a> 欢迎来到我的网站
                </div>
                <div class="panel">
                    <form class="search-form" method="post" action="">
                        <div class="input-group">
                            <input type="text" name="s" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <i class="fa fa-comments"></i>&nbsp;最新 · 评论
                        <i class="fa fa-times-circle panel-close"></i>
                    </div>
                    <ul class="list-group">
                        <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); ?>
                        <?php while($comments->next()): ?>
                             <li class="list-group-item">
                                <span class="author-avatar">
                                    <?php $comments->gravatar(50); ?>
                                </span>
                                <span class="comment-log">
                                    <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt('24', '...'); ?></a>
                                </span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <div class="panel-footer">
                        Dave really these nerds, no one  why though.
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i></i>&nbsp;最新 · 文章
                        <i class="fa fa-times-circle panel-close"></i>
                    </div>
                    <ul class="list-group">
                     <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=8&type=category')->to($article); ?>
                        <?php while ($article->next()): ?>
                            <?php if ($article->sequence <= 8): ?>
                                <li class="list-group-item">
                                    <span class="post-title">
                                        <a href="<?php $article->permalink() ?>"><?php $article->title('20', '...') ?></a>
                                    </span>
                                    <span class="badge"><?php $article->commentsNum() ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <div class="panel-footer">
                        Dave really likes nerds, no one why though.
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <i class="fa fa-heart"></i></i>&nbsp;Likes · View All
                        <i class="fa fa-times-circle panel-close"></i>
                    </div>
                    <div class="panel-box">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#sidebar-categories" aria-controls="home" role="tab" data-toggle="tab">分类目录</a></li>
                                <li role="presentation"><a href="#sidebar-tags" aria-controls="profile" role="tab" data-toggle="tab">2333</a></li>
                                <li role="presentation"><a href="#sidebar-links" aria-controls="messages" role="tab" data-toggle="tab">友情链接</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="sidebar-categories">
                                    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="sidebar-tags">
                                    <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
                                    <?php while($tags->next()): ?>
                                    <span><a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></span>
                                    <?php endwhile; ?>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="sidebar-links">
                                    <a href="#">Link</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>