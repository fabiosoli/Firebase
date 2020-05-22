<?php 
include 'includes/header.php';
?>
<div class="container">
  <div class="row">
    <!-- Latest Posts -->
    <main class="posts-listing col-lg-12"> 
      <div class="container">
        <!-- ↓↓↓ posts section ↓↓↓ -->
        <div id="posts-container"  class="row"></div>
        <!-- ↑↑↑ posts section ↑↑↑ -->            
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination pagination-template d-flex justify-content-center">
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
            <li class="page-item"><a href="#" class="page-link active">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </main>
  </div>
</div>
<!-- Page Footer-->
<?php 
include 'includes/footer.php';
?>