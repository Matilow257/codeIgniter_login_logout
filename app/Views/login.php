
  <div class="container ">
    <main class="form-signin">
    <form method="POST" action="<?=base_url('login/do_login')?>">

         <div class="mt-3">

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" required name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            </div>
            
            <div class="form-floating">
            <input type="password" class="form-control" name ="password"  required id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            </div><br>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
   

        </div>

    </form>
    </main>

</div>