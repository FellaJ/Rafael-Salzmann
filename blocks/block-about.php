<?php

$id = 'about-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

$className = 'content-block block-about';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

$headline = get_field('headline');
$subheadline = get_field('subheadline');
$text = get_field('text');
$image = get_field('image');

$url = $image['url'];
$title = $image['title'];
$alt = $image['alt'];

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="about-wrapper row">
		<div class="about-content col-11 col-sm-10 col-lg-6 mr-auto">
			<h2><?php echo $headline; ?></h2>
			<div class="text-large-italic mb-2"><?php echo $subheadline; ?></div>
			<?php echo $text; ?>
		</div>
		<div class="about-image col-9 col-sm-7 col-lg-5 ml-auto">
			<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" title="<?php echo $title; ?>">
		</div>
	</div>
</section>
