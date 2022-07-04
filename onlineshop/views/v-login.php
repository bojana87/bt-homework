<main>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mb-3 ms-3">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item"><a href="about.php">About</a></li>
                <li class="breadcrumb-item"><a href="all-products.php">All Products</a></li>
                <li class="breadcrumb-item"><a href="contact.php">Contact Us</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>

        </ol>
        </nav>
        <form>
            <div class="mb-3 ms-3 w-25">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" required class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 ms-3 w-25">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" required class="form-control" id="exampleInputPassword" aria-describedby="emailHelp">
                <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-outline-dark mt-3 mb-3 ms-3">Login</button>
        </form>
    </div>
</main>