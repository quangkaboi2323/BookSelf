
<style>
    #cat-list li{
        cursor: pointer;
    }
       #cat-list li:hover {
        color: white;
        background: #007bff8f;
    }
    .prod-item p{
        margin: unset;
    }
    .bid-tag {
    position: absolute;
    right: .5em;
}
</style>
<div class="contain-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <ul class='list-group' id='cat-list'>
                            <li class='list-group-item' data-id='all' data-href="index.php?page=home&category_id=all">All</li>
                            
                            <li class='list-group-item' data-id='<?php echo $row['id'] ?>' data-href="index.php?page=home&category_id=<?php echo $row['id'] ?>"><?php echo ucwords($row['name']) ?></li>

                            
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">                            
                             <div class="col-sm-4">
                                 <div class="card">
                                    <div class="float-right align-top bid-tag">
                                         <span class="badge badge-pill badge-primary text-white"><i class="fa fa-tag"></i> <?php echo number_format($row['price']) ?></span>
                                     </div>
                                     <div class="card-img-top d-flex justify-content-center" style="max-height: 30vh;overflow: hidden">
                                     <img class="img-fluid" src="admin/assets/uploads/<?php echo $row['image_path'] ?>" alt="Card image cap">
                                       
                                     </div>
                                      <div class="float-right align-top d-flex">
                                     </div>
                                     <div class="card-body prod-item">
                                         <p>Title: Title</p>
                                         <p>Author: Author</p>
                                         <p>
                                            <small>
                                          
                                            ádkjashdklasd
                                            </small>
                                          </p>
                                         <p class="truncate"><?php echo $row['description'] ?></p>
                                        <button class="btn btn-primary btn-sm view_prod" type="button" data-id="<?php echo $row['id'] ?>"> View</button>
                                     </div>
                                 </div>
                             </div>                            
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       
<script>
    $('#cat-list li').click(function(){
        location.href = $(this).attr('data-href')
    })
     $('#cat-list li').each(function(){
        var id = '<?php echo $cid > 0 ? $cid : 'all' ?>';
        if(id == $(this).attr('data-id')){
            $(this).addClass('active')
        }
    })
     $('.view_prod').click(function(){
        uni_modal_right('View Book','view_prod.php?id='+$(this).attr('data-id'))
     })
</script>