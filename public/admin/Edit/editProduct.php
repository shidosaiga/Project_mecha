<?php
  include "head.php";
?>









<div class="container">
        <h1 class="main-title">Product</h1>
      
                     
        
        <div class="row">
          <div class="col-lg-9">
          
            <div class="users-table table-wrapper">
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    
                    <th>Edit Product</th>
                    <th></th>

                  </tr>
                </thead>
                <tbody>
                <form action="" method="post" enctype="multipart/form-data">
                  <tr>
                    <td><label for="name">Name</label></td>
                     <td> 
                        <div class="form-group">
                          
                          <input type="text" class="form-control" name="name" id="name" placeholder="Type Product Name">
                        </div>
                     </td>
               </td>
                   
                   
                  </tr>
                  <tr>
                    <td>
                    <label for="description">Description</label>
                    </td>
                    <td>
                      <div class="form-group">
                        <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                    </div>
                    </td>
                  </tr>

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
                    <label for="type">Category</label>
                    </td>
                    <td>
                      <div class="form-group">
                           <select class="form-control" name="category">
                            <option value="men">เครื่องดื่ม</option>
                            <option value="women">ขนม</option>
                         </select>
                       </div>
                    </td>
                  </tr>

                  <tr>
                    <td>
                    <label for="type">Price</label>
                    </td>
                    <td>
                      <div class="form-group">
                          
                          <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
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