      

<main>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                  <ol class="breadcrumb mb-3 ms-3">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="about.php">About</a></li>
                        <li class="breadcrumb-item"><a href="all-products.php">All Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                  </ol>
            </nav>
            <div class="py-2 bg-dark text-center nav-pills nav-fill py-2">
                  <h4 class="text-white fw-bolder">Have a question? Send us a message!</h4>
            </div>
      <div class="container">

            <div class="mt-4">
                  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="mb-3 ms-3 w-25">
                              <label for="exampleInputText" class="form-label">Name</label>
                              <input type="text" name= "name" class="form-control" id="textInputtext" aria-describedby="textHelp">
                        </div>
                        <div class="mb-3 ms-3 w-25">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" name= "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="form-floating ms-3 w-25">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                              <label for="floatingTextarea">Type your message here</label>
                        </div>
                        <button type="submit" class="btn btn-outline-dark mt-3 mb-3 ms-3">Send</button>
                  </form>
            </div>
      </div>
</main>
