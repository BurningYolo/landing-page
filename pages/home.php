<?php
// Include the TemplateEngine class
require_once BASE_DIR . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'TemplateEngine.php';

$templateEngine = new TemplateEngine(BASE_DIR);

// Use the TemplateEngine to render components
$templateEngine->render('c_heading.php', [
    'topText' => 'Boost Your Business with the Right',
    'heading' => 'Software Development Company',
    'description' => 'We deliver tailored solutions to meet your needs, whether you are a local business or a global enterprise. We got you covered.'
]);

$templateEngine->render('c_frameworks.php');

$templateEngine->render('c_heading.php', [
    'topText' => 'Explore our Different & Premium Development Services',
    'heading' => 'Top Notch Solutions',
    'description' => 'We are dedicated to ensuring you maintain a competitive edge through cutting-edge digital solutions customized to fit your specific requirements.'
]);

$templateEngine->render('c_solutions.php');

$templateEngine->render('c_heading.php', [
    'topText' => 'Hire Us & Get',
    'heading' => 'Amazing Services',
    'description' => 'From developing MVPs for startups to managing large-scale enterprise solution projects, we provide comprehensive support at every stage of your journey'
]);

$templateEngine->render('c_teaminfo.php');

$templateEngine->render('c_heading.php', [
    'topText' => 'What Our Clients Say',
    'heading' => 'Reviews',
    'description' => 'Client satisfaction is our top priority. Here’s what some of our valued customers have to say about their experience working with us'
]);

$templateEngine->render('c_reviews.php');

$templateEngine->render('c_heading.php', [
    'topText' => 'Get in Touch with us',
    'heading' => 'We Got You Covered',
    'description' => 'Reach out to us and discuss in detail. From small business to Giant, we got you covered'
]);

$templateEngine->render('c_formsection.php');
?>
