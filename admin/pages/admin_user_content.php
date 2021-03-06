<?php
if (isset($_POST['btn'])) {
    $message = $obj_admin->save_admin_user_info($_POST);
}
?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Admin User Form</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h3>
                <?php
                if (isset($message)) {
                    echo $message;
                    unset($message);
                }
                ?>

            </h3>
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Admin Name </label>
                        <div class="controls">
                            <input type="text" name="admin_name" required class="span6 typeahead" id="typeahead">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Emil Address </label>
                        <div class="controls">
                            <input type="email" name="email_address" required class="span6 typeahead" id="typeahead" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Password </label>
                        <div class="controls">
                            <input type="password" name="password" required class="span6 typeahead" id="typeahead" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Select Access Level</label>
                        <div class="controls">
                            <select id="selectError3" name="access_level">
                                <option>---Select Access Level---</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save User Info</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div><!--/row-->