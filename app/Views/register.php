
  <div class="container ">
    <main class="form-signin">
    <form method="POST" action="<?=base_url('register/do_register')?>">

         <div class="mt-3">

            <h1 class="h3 mb-3 fw-normal">Register</h1>

            <div class="form-floating">
            <input type="text" name="name" class="form-control" required id="floatingInput" placeholder="john deo">
            <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
            <input type="email" name="email" class="form-control" required id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
            <input type="password" name="password" class="form-control" required id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div><br>


            <button class="w-100 btn btn-lg btn-primary" type="submit" name="register" >Register </button>
       

        </div>

    </form>
    </main>

</div>