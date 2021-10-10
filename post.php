<?php 

    include_once('templates/header.php');

    if (isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            
            if ($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

        
    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['desc'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/images/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error ducimus quidem enim dolor, quibusdam soluta expedita perspiciatis ex quia quos 
                sit accusamus maiores odio aspernatur repellat at aut quod blanditiis.
                Aliquam in dolor, suscipit, at deserunt repellat odio accusantium obcaecati est 
                ducimus consequatur voluptas tempore illum iure delectus deleniti expedita rerum 
                pariatur? Aspernatur quam quos delectus officiis nulla vero asperiores.
                Ut maiores, molestias unde sint ad at voluptas eius veritatis libero. 
                Tempore facilis mollitia accusantium incidunt repellendus architecto optio 
                nam quibusdam, id dignissimos explicabo repudiandae dicta necessitatibus dolorem 
                quos molestiae.
                Quidem sit hic nam consequatur nisi error enim, vel quo veniam animi blanditiis 
                natus eum ullam soluta corrupti necessitatibus adipisci laborum nemo aut at fugiat
                aliquid in cumque voluptatem. Corrupti.
                Libero quo cum numquam dolores minima esse beatae molestiae 
                corporis distinctio provident possimus consectetur porro cumque 
                recusandae deleniti tenetur quis, quae labore, facere aliquid soluta quaerat! 
                Beatae est ipsa reiciendis?

                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error ducimus quidem enim dolor, quibusdam soluta expedita perspiciatis ex quia quos 
                sit accusamus maiores odio aspernatur repellat at aut quod blanditiis.
                Aliquam in dolor, suscipit, at deserunt repellat odio accusantium obcaecati est 
                ducimus consequatur voluptas tempore illum iure delectus deleniti expedita rerum 
                pariatur? Aspernatur quam quos delectus officiis nulla vero asperiores.
                Ut maiores, molestias unde sint ad at voluptas eius veritatis libero. 
                Tempore facilis mollitia accusantium incidunt repellendus architecto optio 
                nam quibusdam, id dignissimos explicabo repudiandae dicta necessitatibus dolorem 
                quos molestiae.
                Quidem sit hic nam consequatur nisi error enim, vel quo veniam animi blanditiis 
                natus eum ullam soluta corrupti necessitatibus adipisci laborum nemo aut at fugiat
                aliquid in cumque voluptatem. Corrupti.
                Libero quo cum numquam dolores minima esse beatae molestiae 
                corporis distinctio provident possimus consectetur porro cumque 
                recusandae deleniti tenetur quis, quae labore, facere aliquid soluta quaerat! 
                Beatae est ipsa reiciendis?
                
            </p>
            <br>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error ducimus quidem enim dolor, quibusdam soluta expedita perspiciatis ex quia quos 
                sit accusamus maiores odio aspernatur repellat at aut quod blanditiis.
                Aliquam in dolor, suscipit, at deserunt repellat odio accusantium obcaecati est 
                ducimus consequatur voluptas tempore illum iure delectus deleniti expedita rerum 
                pariatur? Aspernatur quam quos delectus officiis nulla vero asperiores.
                Ut maiores, molestias unde sint ad at voluptas eius veritatis libero. 
                Tempore facilis mollitia accusantium incidunt repellendus architecto optio 
                nam quibusdam, id dignissimos explicabo repudiandae dicta necessitatibus dolorem 
                quos molestiae.
                Quidem sit hic nam consequatur nisi error enim, vel quo veniam animi blanditiis 
                natus eum ullam soluta corrupti necessitatibus adipisci laborum nemo aut at fugiat
                aliquid in cumque voluptatem. Corrupti.
                Libero quo cum numquam dolores minima esse beatae molestiae 
                corporis distinctio provident possimus consectetur porro cumque 
                recusandae deleniti tenetur quis, quae labore, facere aliquid soluta quaerat! 
                Beatae est ipsa reiciendis?

                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Error ducimus quidem enim dolor, quibusdam soluta expedita perspiciatis ex quia quos 
                sit accusamus maiores odio aspernatur repellat at aut quod blanditiis.
                Aliquam in dolor, suscipit, at deserunt repellat odio accusantium obcaecati est 
                ducimus consequatur voluptas tempore illum iure delectus deleniti expedita rerum 
                pariatur? Aspernatur quam quos delectus officiis nulla vero asperiores.
                Ut maiores, molestias unde sint ad at voluptas eius veritatis libero. 
                Tempore facilis mollitia accusantium incidunt repellendus architecto optio 
                nam quibusdam, id dignissimos explicabo repudiandae dicta necessitatibus dolorem 
                quos molestiae.
                Quidem sit hic nam consequatur nisi error enim, vel quo veniam animi blanditiis 
                natus eum ullam soluta corrupti necessitatibus adipisci laborum nemo aut at fugiat
                aliquid in cumque voluptatem. Corrupti.
                Libero quo cum numquam dolores minima esse beatae molestiae 
                corporis distinctio provident possimus consectetur porro cumque 
                recusandae deleniti tenetur quis, quae labore, facere aliquid soluta quaerat! 
                Beatae est ipsa reiciendis?
                
            </p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $categorie): ?>
                    <li><a href="#"><?= $categorie ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>


<?php

    include_once('templates/footer.php');
    
?>