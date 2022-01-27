<div class="bg-gray-900">
    <a href="/" class="absolute top-4 left-4 hover:scale-110 hover:transition-all antialiased">
        <div class="flex">
            <i class="material-icons mt-1 mr-1 text-gray-200" style="font-size: 18px;">arrow_back</i>
            <span class="text-gray-200">Startpage</span>
        </div>
    </a>
    <div class="flex flex-col justify-center items-center h-screen font-Lato antialiased">
        <div class="text-2xl text-gray-200">404 | NOT FOUND</div>
        <div class="text-gray-200">
            <?php
                echo 'Site: ' . $_SERVER['REQUEST_URI'];
            ?>
        </div>
    </div>
</div>