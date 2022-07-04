<main>
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb mb-3 ms-3">
        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Register</li>

        </ol>
        </nav>
        <form action="register.php" method="POST">
            <div class="mb-3 ms-3 w-25">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3 ms-3 w-25">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lastName">
            </div>
            <div class="mb-3 ms-3 w-25">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3 ms-3 w-25">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="mb-3 ms-3 w-25">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
            </div>

            <div class="mb-3 ms-3 w-25">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age">
            </div>

            <select name="gender" class="form-select mb-3 ms-3 w-25">
                <option disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <button type="submit" class="btn btn-outline-dark mt-3 mb-3 ms-3">Register</button>
        </form>
    </div>
</main>