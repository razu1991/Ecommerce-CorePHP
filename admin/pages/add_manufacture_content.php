<?php
if (isset($_POST['btn'])) {
    $message = $obj_admin->save_manufacture_info($_POST);
}
?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacture Form</h2>
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
            <form class="form-horizontal" action="" method="post" onsubmit="return validateStandard(this);">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacture Name </label>
                        <div class="controls">
                            <input type="text" name="manufacture_name" required regexp="JSVAL_RX_ALPHA" err="Please use valid manufacturer name" class="span6 typeahead">
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Manufacture Description</label>
                        <div class="controls">
                            <textarea name="manufacture_description" class="cleditor" id="textarea2" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select err="Please select a valid publication status" name="publication_status" required exclude=" ">
                                <option value=" ">---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="2">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save Manufacture Info</button>
                        <button type="reset" class="btn">Reset</button>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div><!--/row-->