<?php

if (isset($_POST['submit'])) {
  $loginAdmin = new LoginControllers();
  $loginAdmin->auth();
}
?>
    <!-- component -->
<section class="flex flex-col md:flex-row h-screen items-center" class="test">

<div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen brightness- 50">
  <img src="./Views/assets/img/bg1.jpg" alt="" class="w-full h-full object-cover">
</div>

<div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
      flex items-center justify-center">

  <div class="w-full h-100">

  <div class="col-xl-auto col-lg-auto">
                    <div class="header__logo">
                        <a href="<?php echo BASE_URL; ?>"><img src="./Views/assets/img/logo.png" alt=""></a>
                        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Sign in</h1>
                    </div>

    <form class="mt-6" action="#" method="POST">
      <div>
        <label class="block text-gray-700">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
      </div>

      <div class="mt-4">
        <label class="block text-gray-700">Password</label>
        <input type="password" name="passwords" id="passwords" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500
              focus:bg-white focus:outline-none" required>
      </div>

      

      <button type="submit" name="submit" class="w-full block bg-orange-500 hover:bg-orange-400 focus:bg-orange-400 text-white font-semibold rounded-lg
            px-4 py-3 mt-6" value="submit">Sign in</button>
    </form>

    <hr class="my-6 border-gray-300 w-full">

    



  </div>
</div>
</div>

</section>