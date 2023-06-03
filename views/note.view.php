<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
    <main>
        <div class="flex flex-col gap-6 max-w-7xl py-6 sm:px-6 lg:px-8">
        <div>
            <a class="text-blue-500 hover:underline" href="/notes">Go back...</a>
        </div>
        <?= htmlspecialchars($note['body']) ?>

        </div>
    </main>
<?php require('partials/footer.php') ?>