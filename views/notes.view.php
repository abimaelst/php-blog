<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
    <main>
        <div class="mx-auto flex flex-col gap-6 max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
               <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                            <?= htmlspecialchars($note['body']) ?>
                        </a>
                    </li>

               <?php endforeach; ?>
            </ul>
            <a href="notes/create" class="w-fit py-1 px-4 bg-sky-500 text-white rounded-full hover:bg-sky-300">Create A Note</a>
        </div>
    </main>
<?php require('partials/footer.php') ?>