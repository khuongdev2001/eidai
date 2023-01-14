<?php
/**
 * @var DataProviderInterface $dataProvider
 * @var PostSearch $searchModel
 * @var PostCategory $postCategory
 */

use backend\modules\end_user\post\models\search\PostSearch;
use common\models\PostCategory;
use yii\data\DataProviderInterface;
?>
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        if ($searchModel->category_id) {
                            ?>
                            Danh mục: <span><?= $postCategory->category_title ?></span>
                            <?php
                        }
                        else {
                            ?>
                            Tất cả danh mục
                        <?php }
                        ?>
                    </h1>
                </header>
                <!-- .page-header -->
                <?php
                foreach ($dataProvider->getModels() as $item) {
                    ?>
                    <article id="post-457"
                             class="post-457 post type-post status-publish format-standard hentry category-tin-tuc-bai-viet">
                        <header class="entry-header">
                            <span class="posted-on">Đăng bởi <a
                                        href="/end-user/post/view?slug=10"
                                        rel="bookmark">
                                <time class="entry-date published"><?= $item->publish_at ?></time>
                                <time class="updated">15/06/2021</time>
                            </a>
                            </span>
                            <span class="post-author">bởi <a href="https://eidai.com.vn/author/eidaicom/" rel="author">eidaicom</a></span>
                            <span class="post-comments">&mdash; <a
                                        href="https://eidai.com.vn/khai-truong-chi-nhanh-thanh-pho-da-nang/#respond">Để lại phản hồi</a></span>
                            <h2 class="alpha entry-title">
                                <a  href="/end-user/post/site/view?post_slug=<?= $item->post_slug ?>"
                                   rel="bookmark"><?= $item->post_title ?></a>
                            </h2>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <?= \yii\helpers\StringHelper::truncate(strip_tags($item->post_content), 300) ?>
                        </div>
                        <!-- .entry-content -->
                        <aside class="entry-taxonomy">
                            <div class="cat-links"> Danh mục: <a href="https://eidai.com.vn/category/tin-tuc-bai-viet/"
                                                                 rel="category tag">Tin tức &amp; Bài viết</a></div>
                        </aside>
                    </article>
                    <?php
                }
                ?>
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
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/06/8z8a1222-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"/>-->
<!--                            <span class="product-title">MMs02 VILLA - BIỆT THỰ KHU ĐÔ THỊ ECOPARK</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-tu-nhien-oc-cho/">-->
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/10/slide01-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"/>-->
<!--                            <span class="product-title">Sàn gỗ xương cá – gỗ kỹ thuật óc chó đen (MRHV-WAL-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--              <bdi>3.050.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--              </bdi>-->
<!--            </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-thich-3p/">-->
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004497-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"/>-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ thích 3P (MRSH-HM-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--              <bdi>2.450.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--              </bdi>-->
<!--            </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-xuong-ca-go-cong-nghiep-mau-go-soi-tu-nhien/">-->
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/06/HM-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"/>-->
<!--                            <span class="product-title">Sàn gỗ xương cá – gỗ công nghiệp màu gỗ thích (SHV-HMPT-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--              <bdi>1.090.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--              </bdi>-->
<!--            </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-2p/">-->
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004575-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"/>-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ anh đào 2P (MRNH-CHE-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--              <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--              </bdi>-->
<!--            </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-anh-dao-3p-2/">-->
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"-->
<!--                                 srcset="https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/MRSH-ROA1-3P-24x19.jpg 24w"-->
<!--                                 sizes="(max-width: 324px) 100vw, 324px"/>-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ sồi đỏ 3P (MRSH-ROA-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--              <bdi>2.450.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--              </bdi>-->
<!--            </span>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="https://eidai.com.vn/product/san-go-ky-thuat-go-soi-do-2p/">-->
<!--                            <img width="324" height="243"-->
<!--                                 src="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg"-->
<!--                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""-->
<!--                                 loading="lazy"-->
<!--                                 srcset="https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-324x243.jpg 324w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-24x17.jpg 24w, https://eidai.com.vn/wp-content/uploads/2020/06/K000004617-36x26.jpg 36w"-->
<!--                                 sizes="(max-width: 324px) 100vw, 324px"/>-->
<!--                            <span class="product-title">Sàn gỗ kỹ thuật – Gỗ sồi đỏ 2P (MRNH-ROA-C)</span>-->
<!--                        </a>-->
<!--                        <span class="woocommerce-Price-amount amount">-->
<!--              <bdi>2.750.000 <span class="woocommerce-Price-currencySymbol">&#8363;</span>-->
<!--              </bdi>-->
<!--            </span>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
        <!-- #secondary -->
    </div>
    <!-- .col-full -->
</div>
<!-- #content -->