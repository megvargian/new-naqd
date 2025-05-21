<?php
/**
 * Template Name: Search Articles
 */
get_header();
if(isset($_GET['searchArticle'])){
    $search_article = $_GET['searchArticle'];
}
$args = array(
    'post_type'      => 'post',
    'posts_per_page' =>  18,
    'orderby'        => 'date',
    'order'          => 'DESC',
);
$query = new WP_Query($args);
// Get all categories
$categories = get_categories(array(
    'hide_empty' => true
));
// Get all tags
$tags = get_tags(array(
    'hide_empty' => true
));
?>
<section class="position-relative" style="z-index: 1;">
    <section class="products-cats py-sm-5 py-3">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-lg-3 col-12 order-lg-1 order-2 pb-4 d-lg-block d-none">
                    <form class="filter-products p-3" method="post" action="">
                        <h3 class="mb-3">Categories</h3>
                        <?php foreach ($categories as $category): ?>
                            <label class="label-cats">
                                <input type="checkbox" name="category[]" value="<?php echo esc_attr($category->term_id); ?>">
                                <?php echo esc_html($category->name); ?>
                            </label>
                        <?php endforeach; ?>
                        <!-- Tags -->
                        <h3 class="my-3">Tags</h3>
                        <?php foreach ($tags as $tag): ?>
                            <label class="label-tags">
                                <input type="checkbox" name="tag[]" value="<?php echo esc_attr($tag->term_id); ?>">
                                <?php echo esc_html($tag->name); ?>
                            </label>
                        <?php endforeach; ?>
                        <br>
                    </form>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1">
                    <div class="pb-3">
                        <form class="search-form">
                            <div class="position-relative">
                                <input placeholder="يبحث" type="search" required>
                                <button style="padding-top: 2px;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/icons/search.svg" alt="search">
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="d-lg-none d-block pb-3">
                        <form class="filter-products p-3" method="post" action="">
                            <h3 class="mb-3">Categories</h3>
                            <?php foreach ($categories as $category): ?>
                                <label class="label-cats">
                                    <input type="checkbox" name="category[]" value="<?php echo esc_attr($category->term_id); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </label>
                            <?php endforeach; ?>
                            <!-- Tags -->
                            <h3 class="my-3">Tags</h3>
                            <?php foreach ($tags as $tag): ?>
                                <label class="label-tags">
                                    <input type="checkbox" name="tag[]" value="<?php echo esc_attr($tag->term_id); ?>">
                                    <?php echo esc_html($tag->name); ?>
                                </label>
                            <?php endforeach; ?>
                            <br>
                        </form>
                    </div>
                    <div id="filter-container" class="row">
                        <?php
                         if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $article_id = get_the_ID();
                                $article_title = get_the_title($article_id);
                                $image_url = get_the_post_thumbnail_url($article_id);
                        ?>
                            <div class="col-lg-3 col-12 mb-2 px-1">
                                <a href="<?php echo get_permalink($article_id);?>" class="fade-in">
                                    <img class="w-100 d-block single-article " src="<?php echo $image_url; ?>" alt="<?php echo $article_title; ?>">
                                </a>
                            </div>
                        <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                    <div class="row text-center">
                        <button id="load-more-button" class="main-btn" style="width: fit-content; margin: auto;">
                            View more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>
    jQuery(document).ready(function($) {
        $('input[type="checkbox"]').on('change', function() {
            // Get selected category IDs
            var selectedCategories = [];
            $('input[name="category[]"]:checked').each(function() {
                selectedCategories.push($(this).val());
            });
            // Get selected tag IDs
            var selectedTags = [];
            $('input[name="tag[]"]:checked').each(function() {
                selectedTags.push($(this).val());
            });
            var search = $('.search').val();
            searchResults(selectedCategories, selectedTags, search);
        });
        $('.search-form').submit(function(e) {
            e.preventDefault();
           // Get selected category IDs
           var selectedCategories = [];
            $('input[name="category[]"]:checked').each(function() {
                selectedCategories.push($(this).val());
            });
            // Get selected tag IDs
            var selectedTags = [];
            $('input[name="tag[]"]:checked').each(function() {
                selectedTags.push($(this).val());
            });
            var search = $('.search').val();
            searchResults(selectedCategories, selectedTags, search);
        });
        function searchResults(selectedCategories, selectedTags, search) {
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'load_filtered_articles',
                    selectedCategories: selectedCategories,
                    selectedTags: selectedTags,
                    search: search,
                },
                success: function(response) {
                    if (response) {
                        $('#filter-container').replaceWith(response);
                        $('#load-more-button').hide();
                    }
                },
            });
        }
        <?php if($search_article){ ?>
            $('.search').val("<?php echo $search_article; ?>");
            $('.search-form').submit();
        <?php } ?>
        var page = 1; // Set the initial page number
        // Function to load more posts via AJAX
        function loadMorePosts() {
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'load_more_products',
                    page: page,
                },
                success: function(response) {
                    if (response === ''){
                        $('#load-more-button').hide();
                    }
                    if (response) {
                        $('#filter-container').append(response);
                        page++;
                    } else {
                        // No more posts to load
                        $('#load-more-button').hide();
                    }
                },
            });
        }
        // Trigger the AJAX call when the button is clicked
        $('#load-more-button').click(function() {
            loadMorePosts();
        });
    });
</script>
<?php
get_footer();