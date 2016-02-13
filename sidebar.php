
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
                                <button class="btn btn-default" type="submit">Go!</button>
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
                        <?php $this->widget('Widget_Comments_Recent','pageSize=8&ignoreAuthor=true')->to($comments); ?>
                        <?php while($comments->next()): ?>
                             <li class="list-group-item">
                                <span class="author-avatar">
                                    <?php $comments->gravatar(50); ?>
                                </span>
                                <span class="comment-log">
                                    <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt('22', '...'); ?></a>
                                </span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <div class="panel-footer">
                        Show only the latest 8 comments.
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i></i>&nbsp;最新 · 文章
                        <i class="fa fa-times-circle panel-close"></i>
                    </div>
                    <ul class="list-group">
                     <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10&type=category')->to($article); ?>
                        <?php while ($article->next()): ?>
                            <?php if ($article->sequence <= 10): ?>
                                <li class="list-group-item">
                                    <span class="post-title">
                                        <a href="<?php $article->permalink() ?>"><?php $article->title('38', '...') ?></a>
                                    </span>
                                    <span class="badge"><?php $article->commentsNum() ?></span>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <div class="panel-footer">
                        Show only the latest 10 articles.
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-box">
                            <!-- Nav tabs -->
                            <ul class="filter-toggle-buttons">
                                <li class="active"><a href="#sidebar-categories" data-toggle="tab">分类目录</a></li>
                                <li><a href="#sidebar-tags" data-toggle="tab">Tag标签</a></li>
                                <li><a href="#sidebar-links" data-toggle="tab">友情链接</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="sidebar-categories">
                                    <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
                                </div>
                                <div class="tab-pane" id="sidebar-tags">
                                    <ul class="tags-list">
                                    <?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
                                    <?php while($tags->next()): ?>
                                    <li><a style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
                                    <?php endwhile; ?>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="sidebar-links">
                                    <div class="friend">
                                        <ul>
                                            <li><a href="#">friend-link</a></li>
                                            <li><a href="#">friend-link</a></li>
                                            <li><a href="#">friend-link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>