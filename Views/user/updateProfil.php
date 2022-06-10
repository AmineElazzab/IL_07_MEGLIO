<?php include './Views/includes/navbar.php';?>

<?php
 $userToUpdate = new UsersController();
 $userToUpdate = $userToUpdate->getUser();
    if (isset($_POST["update"])) 
    {
        $data = new UsersController();
        $data = $data->updateUser();
    }
?>
<form method="POST">

                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-xl font-proza text-[#080808]">Full Name</label>
                            <input type="text" name="fullname"  value ="<?php echo $_SESSION["fullname"]; ?>"required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none dark:bg-gray-700" />
                        </div>
                        <div class="mb-6">
                            <label for="username" class="block mb-2 text-xl font-proza text-[#080808]">Username</label>
                            <input type="text" name="username" value ="<?php echo $_SESSION["username"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none dark:bg-gray-700" />
                        </div>
                        <div class="mb-6">
                            <label for="telephone" class="block mb-2 text-xl font-proza text-[#080808]">Phone</label>
                            <input type="telephone" name="telephone" value ="<?php echo $_SESSION["phone"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none dark:bg-gray-700" />
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-xl font-proza text-[#080808]">Email Address</label>
                            <input type="email" name="email" value ="<?php echo $_SESSION["email"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none dark:bg-gray-700" />
                        </div>
                        <div class="mb-6">
                            <label for="adresse" class="block mb-2 text-xl font-proza text-[#080808]"> Address</label>
                            <input type="text" name="adresse" value ="<?php echo $_SESSION["adresse"]; ?>" required class="w-full px-3 py-2 border border-[#080808] rounded-md focus:outline-none dark:bg-gray-700" />
                        </div>
                        <div class="mb-6">
                            <button type="submit" name="update" class="bg-[#CC0000] text-[#FBF8F3] rounded-full w-full h-10 cursor-pointer font-bold font-proza duration-500 ease-in-out hover:scale-95">Update</button>
                        </div>

                    </form>

<?php include './Views/includes/footer.php'; ?>