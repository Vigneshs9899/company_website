<!-- header.php -->
<!-- <header>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header> -->
<header class=" text-[#131313] font-sans font-medium">
    <div class="container mx-auto flex justify-around items-center p-4">
        <!-- Logo -->
        <a href="" class="text-2xl font-bold"><img src="images\15197975758662.png" class="h-[35px] w-[140px]"
                alt=""></a>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-6">
            <a href="http://localhost/figmadesign/index.php"
                class="hover:text-white hover:bg-[#5B6BD5] px-5 py-2 rounded-full">Home</a>
            <a href="http://localhost/figmadesign/index.php"
                class="hover:text-white hover:bg-[#5B6BD5] px-5 py-2 rounded-full">Product</a>
            <a href="http://localhost/figmadesign/index.php"
                class="hover:text-white hover:bg-[#5B6BD5] px-5 py-2 rounded-full">Solutions</a>
            <a href="http://localhost/figmadesign/index.php"
                class="hover:text-white hover:bg-[#5B6BD5] px-5 py-2 rounded-full">Company</a>
            <a href="http://localhost/figmadesign/index.php"
                class="hover:text-white hover:bg-[#5B6BD5] px-5 py-2 rounded-full">Resources</a>
            <a href="http://localhost/figmadesign/index.php"
                class="hover:text-white hover:bg-[#5B6BD5] px-5 py-2 rounded-full">Contact Us</a>
        </nav>

        <!-- Mobile Menu Icon -->
        <button id="menu-btn" class="block md:hidden focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="menu" class="hidden md:hidden bg-[#5B6BD5] text-white font-sans">
        <a href="http://localhost/figmadesign/index.php" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        <a href="http://localhost/figmadesign/index.php" class="block px-4 py-2 hover:bg-gray-700">Product</a>
        <a href="http://localhost/figmadesign/index.php" class="block px-4 py-2 hover:bg-gray-700">Solutions</a>
        <a href="http://localhost/figmadesign/index.php" class="block px-4 py-2 hover:bg-gray-700">Company</a>
        <a href="http://localhost/figmadesign/index.php" class="block px-4 py-2 hover:bg-gray-700">Resources</a>
        <a href="http://localhost/figmadesign/index.php" class="block px-4 py-2 hover:bg-gray-700">Contact Us</a>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>