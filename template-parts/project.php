
    <?php
    $tags = wp_get_post_tags(get_the_ID());
    $tagsNames = [];
    $img = get_the_post_thumbnail(get_the_ID(), 'medium');
    foreach ($tags as $tag) {
        $tagsNames[] = $tag->name;
    }
    ?>
<a class="project" href="<?php the_permalink();?>">
    <div class="background-animation">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <?= $img ?>
    <div class="info">
        <div class="categories">
            <div class="project-title">
                <h3><?php the_title() ?></h3>
                <span><?= implode(', ', $tagsNames) ?></span>
            </div>
            <div class="icon_right">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"                    width="20px" height="20px" viewBox="0 0 307.046 307.046" style="enable-background:new 0 0 307.046 307.046;"                    xml:space="preserve">
                        <g>
                            <g id="_x34_88._Forward">
                                <g>
                                    <path d="M281.828,142.427L144.002,4.597c-6.129-6.129-16.07-6.129-22.199,0l-11.101,11.101c-6.133,6.133-6.133,16.076,0,22.201
                                        l92.071,92.077H36.321c-8.668,0-15.701,7.035-15.701,15.701v15.699c0,8.664,7.033,15.701,15.701,15.701h166.445l-92.063,92.059
                                        c-6.133,6.136-6.133,16.086,0,22.209l11.101,11.101c6.129,6.136,16.07,6.136,22.199,0l137.826-137.831
                                        C287.959,158.487,287.959,148.556,281.828,142.427z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
            </div>
        </div>
    </div>
</a>