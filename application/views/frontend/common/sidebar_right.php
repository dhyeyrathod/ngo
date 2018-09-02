<aside class="sidebar style-two">
    <div class="sidebar-widget categories-blog">
        <div class="sidebar-title">
            <h2>Categories</h2>
        </div>
        <div class="inner-box">
            <ul>
                <li><a href="<?= base_url('category') ?>/0">All Questions</a></li>
                <?php foreach ($category as $categoey_list) : ?>
                    <li><a href="<?= base_url('category') ?>/<?= $categoey_list->id ?>"><?= $categoey_list->category_name ?></a></li>
                <?php endforeach ; ?>
            </ul>
        </div>
    </div>
    <div class="sidebar-widget popular-posts">
        <div class="sidebar-title">
            <h2>Update News</h2>
        </div>
        <div class="inner-box">
            <article class="post">
                <figure class="post-thumb"><a href="blog-single.html"><img src="<?= base_url('assets/frontend') ?>/images/resource/post-thumb-1.jpg" alt=""></a></figure>
                <div class="text"><a href="blog-single.html">Providing Clothes for the children</a></div>
                <div class="post-info">250 Views</div>
            </article>
            <article class="post">
                <figure class="post-thumb"><a href="blog-single.html"><img src="<?= base_url('assets/frontend') ?>/images/resource/post-thumb-2.jpg" alt=""></a></figure>
                <div class="text"><a href="blog-single.html">Clean Water Provide by Poor People!!</a></div>
                <div class="post-info">92 Views</div>
            </article>
            
            <article class="post">
                <figure class="post-thumb"><a href="blog-single.html"><img src="<?= base_url('assets/frontend') ?>/images/resource/post-thumb-3.jpg" alt=""></a></figure>
                <div class="text"><a href="blog-single.html">Help hunger People!!</a></div>
                <div class="post-info">360 Views</div>
            </article>
        </div>
    </div>
</aside>