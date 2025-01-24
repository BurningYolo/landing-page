<br>
<div class="d-flex flex-column justify-content-center align-items-center text-center">
    <p class="lead mb-3 fw-bold"><?= $data['topText'] ?? 'Default Top Text'; ?></p>
    <h1 class="display-4 fw-bold mb-4 gradient-heading">
        <?= $data['heading'] ?? 'Default Heading'; ?>
    </h1>
    
    <p class="mb-0"><?= $data['description'] ?? 'Default Description Text.'; ?></p>
</div>

<style>
.gradient-heading {
    background: linear-gradient(to left, #feac5e, #c779d0, #4bc0c8);
    background-size: 400% 400%; /* Ensures the gradient covers the text */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; /* Makes the text transparent to show the gradient */
    display: inline-block; /* Ensures the gradient applies correctly */
    animation: gradient-animation 10s ease infinite; /* Change the duration as needed */
}

@keyframes gradient-animation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
</style>
<br>