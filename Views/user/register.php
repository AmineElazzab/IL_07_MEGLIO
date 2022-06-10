<?php

  if(isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {  // if the user is logged in 
        Redirect::to("landing");
    }
  if(isset($_POST['submit'])){
      $createuser = new UsersController();
      $createuser ->register();
      // var_dump($_POST);
      // die();
    }
?>
    <!-- component -->
<section class="flex flex-col md:flex-row h-screen items-center">




<div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
      flex items-center justify-center">

  <div class="w-full h-100">

  <div class="col-xl-auto col-lg-auto">
                    <div class="header__logo">
                        <a href="<?php echo BASE_URL; ?>"><img src="./Views/assets/img/logo.png" alt=""></a>
                        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-">Become a member</h1>
                        <h4>Become a Member — you'll enjoy exclusive deals, offers, invites and rewards.</h4>
                    </div>
    <form class="mt-2" method="POST">
        <div>
          <label class="block text-gray-700">Fullname</label>
          <input type="text" name="fullname" id="fullname" placeholder="Enter Fisrt Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
        </div>
        <div>
          <label class="block text-gray-700">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter Fisrt Name" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
        </div>
        <div class="mt-2">
          <label class="block text-gray-700">Phone</label>
          <input type="tel" id="telephone" name="telephone" placeholder="123-45-678"  class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
        </div>
        <div class="mt-2">
          <label class="block text-gray-700">Email Address</label>
          <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
        </div>
        <div class="mt-2">
          <label class="block text-gray-700">Address</label>
          <input type="text" name="adresse" id="adresse" placeholder="Enter  Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none"  required>
        </div>
      <div class="mt-2">
        <label class="block text-gray-700">Password</label>
        <input type="password" name="passwords" id="passwords" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-orange-500 focus:bg-white focus:outline-none" required>
      </div>
      <button name="submit" class="w-full block bg-orange-500 hover:bg-orange-400 focus:bg-orange-400 text-white font-semibold rounded-lg
            px-4 py-3 mt-6" value="submit">Become a member</button>
            <hr class="my-6 border-gray-300 w-full">
        
            <p class="mt-8"><a href="<?php echo BASE_URL; ?>login" class="text-dark-500 hover:text-orange-700 font-semibold">Back to Sing in </a></p><br/>
    </form>



  </div>
</div>
</div>
<div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen brightness- 50">
<img src="./Views/assets/img/bg.jpg" alt="" class="w-full h-full object-cover">
</div>
</section>
</body>
</html>