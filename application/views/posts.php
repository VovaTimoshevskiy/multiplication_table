
    <div class="container mt-4">
        <div class="row justify-content-center" style="height:100vh">
            <div class="col-12">

             <?php foreach($data as $post): ?>

                <div class="card mb-4">
                    <div class="card-body">
                      <h2 class="card-title"><?php echo $post["title"]?></h2>
                      <p class="card-text"><?php echo $post["body"]?></p>
                    </div>   
                </div>

             <?php endforeach;?>

            </div>
        </div>
        
    </div>

