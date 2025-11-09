<?php get_header(); ?>

<?php 
$home_title = get_field('home_title');
$home_image = get_field('home_image');
$home_buy_text = get_field('home_buy_text');
$home_buy_link = get_field('home_buy_link');
$home_trailer_text = get_field('home_trailer_text');
$home_trailer_link = get_field('home_trailer_link');

$section1_title = get_field('section1_title');
$section1_content = get_field('section1_content');
$section1_image = get_field('section1_image');

$section2_title = get_field('section2_title');
$section2_content = get_field('section2_content');
$section2_image = get_field('section2_image');

$section3_title = get_field('section3_title');
$section3_content = get_field('section3_content');
$section3_image = get_field('section3_image');
?>

<section id="Home" style="background-image: url('<?php echo esc_url($home_image); ?>');">
    <div class="home-wrapper">
        <h1><?php echo esc_html($home_title); ?></h1>
        <div class="button">
            <a href="<?php echo esc_url($home_buy_link); ?>"><button><?php echo esc_html($home_buy_text); ?></button></a>
            <a href="<?php echo esc_url($home_trailer_link); ?>"><button><?php echo esc_html($home_trailer_text); ?></button></a>
        </div>
    </div>
</section>

<section id="Section_1" style="background-image: url('<?php echo esc_url($section1_image); ?>');">
    <div class="container">
        <div class="article">
            <div class="article-title"><h1><?php echo esc_html($section1_title); ?></h1></div>
            <div class="article-content">
                <p><?php echo esc_html($section1_content); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="Section_2" style="background-image: url('<?php echo esc_url($section2_image); ?>');">
    <div class="container">
        <div class="article">
            <div class="article-title"><h1><?php echo esc_html($section2_title); ?></h1></div>
            <div class="article-content">
                <p><?php echo esc_html($section2_content); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="Section_3" style="background-image: url('<?php echo esc_url($section3_image); ?>');">
    <div class="container">
        <div class="article">
            <div class="article-title"><h1><?php echo esc_html($section3_title); ?></h1></div>
            <div class="article-content">
                <p><?php echo esc_html($section3_content); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>