

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an account</title>
    <!-- favicon  -->

    <link rel="shortcut icon" href="./img/client-img/client-image3.png" type="image/x-icon">
        <!-- css  -->
        <link rel="stylesheet" href="./CSS/input.css" />
        <link rel="stylesheet" href="./CSS/output.css">
    
    
        <!-- font awesome cdn  -->
    
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"
        />

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Create an account </h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Create an account to download exclusive PDF books and access premium content instantly.</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <form id="contactForm" >
            <div class="flex flex-wrap -m-2 justify-center items-center">
              <div class="p-2 w-96">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div  class="p-2 w-96 ">

                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-96">
                <div class="relative">
                    <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                    <input type="password" id="password" name="password" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
              </div>
              <div class="p-2 w-full">
                <button id="sendButton" type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
              </div>
              
            </div>
            </form>
          </div>
        </div>
      </section>


      <script>
        document.getElementById("contactForm").addEventListener("submit",function(e){
            e.preventDefault();
            swal.fire({
                title:'New Member!',
                text:'Congratulations! You are now member of our site..',
                icon:'success',
                confirmButtonText:'OK'
            }).then ((result)=> {
                if (result.isConfirmed){
                    window.location.href = "index.html";
                }
            });
        });
      </script>

</body>
</html>