<?php
    include 'head.php';
?>





<main class="main users chart-page" id="skip-target">
      <div class="container">
        <h1 class="main-title">Background</h1>
       
        
        <div class="row">
          <div class="col-lg-9">
          
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                    Edit Background
                    </th>
                    <th></th>
                  
                  </tr>
                </thead>
                <tbody>
                <form action="" method="post" enctype="multipart/form-data">

                <tr>
                    <td>
                        <label for="image">Image</label>
                    </td>
                    <td>
                        <div class="form-group">
                        <input type="file" class="form-control"  name="image" id="image" required>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        
                    </td>
                    <td>
                    <button type="submit" name="submit" class="btn-1">Submit</button>
                    </td>
                </tr>


                </form>
                </tbody>
              </table>
            </div>
          </div>



          
    
<!-- Chart library -->
<script src="../plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="../plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="../js/script.js"></script>
</body>

</html>