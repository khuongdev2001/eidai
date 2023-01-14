<?php

/**
 * @var Post $post
 */

use common\models\Post;

?>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article id="post-726" class="post-726 post type-post status-publish format-standard hentry category-tin-tuc-bai-viet">
                    <header class="entry-header">
                        <span class="posted-on">Đăng bởi <a href="https://eidai.com.vn/san-go-eidai-khang-khuan-khang-virus/" rel="bookmark">
                                <time class="entry-date published updated" datetime="2022-06-15T14:35:51+07:00">15/06/2022</time>
                            </a>
                        </span>
                        <span class="post-author">bởi <a href="https://eidai.com.vn/author/eidaicom/" rel="author">eidaicom</a>
                        </span>
                        <span class="post-comments">&mdash; <a href="https://eidai.com.vn/san-go-eidai-khang-khuan-khang-virus/#respond">Để lại phản hồi</a>
                        </span>
                        <h1 class="entry-title"><?= $post->post_title ?></h1>
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <?= $post->post_content ?>
                    </div>
                    <!-- .entry-content -->
                    <aside class="entry-taxonomy">
                        <div class="cat-links"> Danh mục: <a href="https://eidai.com.vn/category/tin-tuc-bai-viet/" rel="category tag">Tin tức &amp; Bài viết</a>
                        </div>
                    </aside>
                    <nav id="post-navigation" class="navigation post-navigation" role="navigation" aria-label="Điều hướng bài viết">
                        <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                        <div class="nav-links">
                            <?php
                            if ($post->prev) {
                            ?>
                                <div class="nav-previous"><a href="/end-user/post/site/view?post_slug=<?= $post->prev->post_slug ?>" rel="prev"><span class="screen-reader-text">Bài trước: </span><?= $post->prev->post_title ?></a></div>
                            <?php
                            }
                            if ($post->next) {
                            ?>
                                <div class="nav-next"><a href="/end-user/post/site/view?post_slug=<?= $post->next->post_slug ?>" rel="next"><span class="screen-reader-text">Bài tiếp theo: </span><?= $post->next->post_title ?></a></div>
                            <?php
                            }
                            ?>
                        </div>
                    </nav>
                    <section id="comments" class="comments-area" aria-label="Bình luận bài viết">
                        <div id="respond" class="comment-respond">
                            <span id="reply-title" class="gamma comment-reply-title">Trả lời <small>
                                    <a rel="nofollow" id="cancel-comment-reply-link" href="/san-go-eidai-khang-khuan-khang-virus/#respond" style="display:none;">Hủy</a>
                                </small>
                            </span>
                            <form action="https://eidai.com.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
                                <p class="comment-notes">
                                    <span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span>
                                    <span class="required-field-message" aria-hidden="true">Các trường bắt buộc được đánh dấu <span class="required" aria-hidden="true">*</span>
                                    </span>
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">Bình luận <span class="required" aria-hidden="true">*</span>
                                    </label>
                                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required></textarea>
                                </p>
                                <p class="comment-form-author">
                                    <label for="author">Tên <span class="required" aria-hidden="true">*</span>
                                    </label>
                                    <input id="author" name="author" type="text" value="" size="30" maxlength="245" required />
                                </p>
                                <p class="comment-form-email">
                                    <label for="email">Email <span class="required" aria-hidden="true">*</span>
                                    </label>
                                    <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required />
                                </p>
                                <p class="comment-form-url">
                                    <label for="url">Trang web</label>
                                    <input id="url" name="url" type="url" value="" size="30" maxlength="200" />
                                </p>
                                <p class="comment-form-cookies-consent">
                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
                                    <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong
                                        trình duyệt này cho lần bình luận kế tiếp của tôi.</label>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Phản hồi" />
                                    <input type='hidden' name='comment_post_ID' value='726' id='comment_post_ID' />
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                </p>
                            </form>
                        </div>
                        <!-- #respond -->
                    </section>
                    <!-- #comments -->
                </article>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
<!--        <div id="secondary" class="widget-area" role="complementary">-->
<!--            <div id="woocommerce_recently_viewed_products-2" class="widget woocommerce widget_recently_viewed_products">-->
<!--                <span class="gamma widget-title">Sản phẩm vừa được xem</span>-->
<!--                <ul class="product_list_widget">-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/test-san-go-ghep-thanh/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/8z8a1222-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />-->
<!--                            <span class="product-title">MMs02 VILLA - BIỆT THỰ KHU ĐÔ THỊ ECOPARK</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-tu-nhien-oc-cho/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/10/slide01-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />-->
<!--                            <span class="product-title">Sàn gỗ xương cá – gỗ kỹ thuật óc chó đen (MRHV-WAL-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>3.050.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-thich-3p/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004497-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ thích 3P (MRSH-HM-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.450.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-cong-nghiep-mau-go-soi-tu-nhien/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/HM-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />-->
<!--                            <span class="product-title">Sàn gỗ xương cá – gỗ công nghiệp màu gỗ thích (SHV-HMPT-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>1.090.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-2p/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004575-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" />-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ anh đào 2P (MRNH-CHE-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-3p-2/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-24x19.jpg 24w" sizes="(max-width: 324px) 100vw, 324px" />-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ sồi đỏ 3P (MRSH-ROA-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.450.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-soi-do-2p/">-->
<!--                            <img width="324" height="243" src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-24x17.jpg 24w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-36x26.jpg 36w" sizes="(max-width: 324px) 100vw, 324px" />-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ sồi đỏ 2P (MRNH-ROA-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--                            <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--                            </bdi>-->
<!--                        </span>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
        <!-- #secondary -->
    </div>
    <!-- .col-full -->
</div>