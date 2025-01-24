<div class="container my-5">
    <div class="review-slider">
        <div class="review-track">
            <!-- Review 1 -->
            <div class="review-card" >
                <img src="https://placehold.co/100x100.png" alt="User 1" class="rounded-circle mb-3">
                <h5>John Doe</h5>
                <p class="text-muted">Software Engineer</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sunt dolorem consequuntur? Magni, sit. Laudantium minus cum tenetur natus adipisci tempore laboriosam, voluptas expedita harum porro alias beatae, corporis ea.</p>
                <p>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-muted">&#9733;</span>
                </p>
            </div>
            <!-- Review 2 -->
            <div class="review-card">
                <img src="https://placehold.co/100x100.png" alt="User 2" class="rounded-circle mb-3">
                <h5>Jane Smith</h5>
                <p class="text-muted">Project Manager</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sunt dolorem consequuntur? Magni, sit. Laudantium minus cum tenetur natus adipisci tempore laboriosam, voluptas expedita harum porro alias beatae, corporis ea.</p>

                <p>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                </p>
            </div>
            <!-- Review 3 -->
            <div class="review-card">
                <img src="https://placehold.co/100x100.png" alt="User 3" class="rounded-circle mb-3">
                <h5>Mike Johnson</h5>
                <p class="text-muted">CTO</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sunt dolorem consequuntur? Magni, sit. Laudantium minus cum tenetur natus adipisci tempore laboriosam, voluptas expedita harum porro alias beatae, corporis ea.</p>

                <p>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-muted">&#9733;</span>
                    <span class="text-muted">&#9733;</span>
                </p>
            </div>
            <!-- Review 4 -->
            <div class="review-card">
                <img src="https://placehold.co/100x100.png" alt="User 4" class="rounded-circle mb-3">
                <h5>Emily Davis</h5>
                <p class="text-muted">Business Analyst</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sunt dolorem consequuntur? Magni, sit. Laudantium minus cum tenetur natus adipisci tempore laboriosam, voluptas expedita harum porro alias beatae, corporis ea.</p>

                <p>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                </p>
            </div>
            <!-- Review 5 -->
            <div class="review-card">
                <img src="https://placehold.co/100x100.png" alt="User 5" class="rounded-circle mb-3">
                <h5>Chris Brown</h5>
                <p class="text-muted">Marketing Director</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sunt dolorem consequuntur? Magni, sit. Laudantium minus cum tenetur natus adipisci tempore laboriosam, voluptas expedita harum porro alias beatae, corporis ea.</p>

                <p>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-warning">&#9733;</span>
                    <span class="text-muted">&#9733;</span>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
/* Styling the review slider */
.review-slider {
    overflow: hidden;
    position: relative;
    width: 100%;
}

.review-track {
    display: flex;
    animation: slide 20s infinite alternate ease-in-out;
}

.review-card {
    flex: 0 0 33.33%;
    padding: 20px;
    text-align: center;
    border: 1px solid pink;
}

.review-card img {
    width: 100px;
    height: 100px;
    object-fit: cover;
}

.review-card h5 {
    margin: 10px 0 5px;
}

.review-card p {
    margin: 0;
}

/* Animation for sliding effect */
@keyframes slide {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-66.66%);
    }
}
</style>
