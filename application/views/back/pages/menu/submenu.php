<div class="container">
   <div class="row">
      <div class="col">
         <h3 class="page-header">SubMenu Management</h3>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col">
         <button type="button" class="btn btn-success btn-sm" onclick="add_submenu()">
               <i class="fas fa-plus"></i> Add
         </button>

         <button class="btn btn-outline-secondary btn-sm" onclick="reload_table()">
               <i class="fas fa-sync-alt"></i> Reload
         </button>
      </div>
   </div>

  <br>

   <div class="table-responsive">
      <table id="tableSubmenu" class="table table-striped table-bordered" cellspacing="0" width="100%">
         <thead>
         <tr>
            <th>#</th>
            <th>Submenu name</th>
            <th>URL</th>
            <th>Main Menu</th>
            <th>Active</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
            <!-- Example row, replace dynamically with PHP or JS -->
            <tr>
               <td>1</td>
               <td>Example Submenu</td>
               <td>example-url</td>
               <td>Main Menu 1</td>
               <td>Yes</td>
               <td>
   <button type="button" class="btn btn-warning btn-sm" onclick="edit_submenu(1)">
      <i class="fas fa-edit"></i> Edit
   </button>
   <button type="button" class="btn btn-danger btn-sm" onclick="delete_submenu(1)">
      <i class="fas fa-trash-alt"></i> Delete
   </button>
</td>

            </tr>
         </tbody>
      </table>
   </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalSubmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Form Submenu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="#" class="form-horizontal" id="form">
            
               <input type="hidden" name="id" id="id">

               <div class="form-group row">
                  <label for="title" class="col-sm-3 col-form-label">Submenu name</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="sub_title" name="sub_title">
                  </div>
               </div> 

               <div class="form-group row">
                  <label for="url" class="col-sm-3 col-form-label">URL</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="sub_url" name="sub_url">
                  </div>
               </div>

               <div class="form-group row">
                  <label for="category" class="col-sm-3 col-form-label">Main Menu</label>
                  <div class="col-sm-9">
                     <select class="form-control" id="id_menu" name="id_menu">
                        <option>- Select -</option>
                        <?php foreach($menu as $m) : ?>
                           <option value="<?= $m->id ?>"><?= $m->title ?></option> 
                        <?php endforeach ?>
                     </select>
                  </div>
               </div>  

               <div class="form-group row">
                  <label for="Active" class="col-sm-3 col-form-label">Active</label>
                  <div class="col-sm-9">
                     <select class="form-control" id="is_active" name="is_active">
                           <option value="Y">Yes</option> 
                           <option value="N">No</option>
                     </select>
                  </div>
               </div>

            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-sm btn-primary" onclick="save()" id="btn_save">Save</button>
         </div>
      </div>
   </div>
</div>

<script>
   // Delete submenu function
   function delete_submenu(id) {
      if (confirm("Are you sure you want to delete this submenu?")) {
         // Perform the delete operation (AJAX request or form submission)
         // Example: send an AJAX request to the server to delete
         console.log("Deleting submenu with ID:", id);
         // After successful deletion, you can reload the table or remove the row
         reload_table();
      }
   }

   // Function to reload the table (example, implement accordingly)
   function reload_table() {
      // Reload your data into the table here (e.g., using AJAX)
      console.log("Table reloaded");
   }

   // Example function to add a submenu
   function add_submenu() {
      console.log("Adding submenu");
      // Show modal or perform other actions
   }

   // Example function to edit a submenu
   function edit_submenu(id) {
      console.log("Editing submenu with ID:", id);
      // Populate the form and show modal for editing
   }

   // Example save function
   function save() {
      console.log("Saving submenu data");
      // Implement your save functionality here (e.g., form submission or AJAX)
   }
</script>
