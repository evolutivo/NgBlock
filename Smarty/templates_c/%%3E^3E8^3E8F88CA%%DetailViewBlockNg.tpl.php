<?php /* Smarty version 2.6.18, created on 2014-12-12 23:43:31
         compiled from modules/NgBlock/DetailViewBlockNg.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'modules/NgBlock/DetailViewBlockNg.tpl', 17, false),array('modifier', 'vtiger_imageurl', 'modules/NgBlock/DetailViewBlockNg.tpl', 18, false),array('modifier', 'count', 'modules/NgBlock/DetailViewBlockNg.tpl', 33, false),array('function', 'math', 'modules/NgBlock/DetailViewBlockNg.tpl', 33, false),)), $this); ?>
<table border=0 cellspacing=0 cellpadding=0 width=100% class="small">
<tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align=right>
                <?php if ($this->_tpl_vars['NG_BLOCK_NAME'] == $this->_tpl_vars['MOD']['LBL_ADDRESS_INFORMATION'] && ( $this->_tpl_vars['MODULE'] == 'Accounts' )): ?>
                        <?php if ($this->_tpl_vars['MODULE'] == 'Leads'): ?>
                                <input name="mapbutton" value="<?php echo $this->_tpl_vars['APP']['LBL_LOCATE_MAP']; ?>
" class="crmbutton small create" type="button" onClick="searchMapLocation( 'Main' )" title="<?php echo $this->_tpl_vars['APP']['LBL_LOCATE_MAP']; ?>
">
                        <?php endif; ?>
                <?php endif; ?>
        </td>
</tr>
<tr><?php echo '<td colspan=4 class="dvInnerHeader"><div style="float:left;font-weight:bold;"><div style="float:left;"><a href="javascript:showHideStatus(\'tbl'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['NG_BLOCK_NAME'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?><?php echo '\',\'aid'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['NG_BLOCK_NAME'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?><?php echo '\',\''; ?><?php echo $this->_tpl_vars['IMAGE_PATH']; ?><?php echo '\');"><img id="aid'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['NG_BLOCK_NAME'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?><?php echo '" src="'; ?><?php echo vtiger_imageurl('inactivate.gif', $this->_tpl_vars['THEME']); ?><?php echo '" style="border: 0px solid #000000;" alt="Display" title="Display"/></a></div><b>&nbsp;'; ?><?php echo $this->_tpl_vars['NG_BLOCK_NAME']; ?><?php echo '</b></div></td>'; ?>

</tr>
</table>

<div style="width:auto;display:none;" id="tbl<?php echo ((is_array($_tmp=$this->_tpl_vars['NG_BLOCK_NAME'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '') : smarty_modifier_replace($_tmp, ' ', '')); ?>
" >
<table border=0 cellspacing=0 cellpadding=0 width="100%" class="small">
    <tr>
        <td>
            <table ng-controller="block_<?php echo $this->_tpl_vars['NG_BLOCK_ID']; ?>
"  ng-table="tableParams" class="table  table-bordered table-responsive">
            <?php if ($this->_tpl_vars['ADD_RECORD'] == 1): ?>
            <tr class="dvtCellLabel">
                <?php echo smarty_function_math(array('equation' => "x+1",'x' => count($this->_tpl_vars['FIELD_LABEL']),'assign' => 'nr_col'), $this);?>
 
                <td colspan="<?php echo $this->_tpl_vars['nr_col']; ?>
">
                    <img width="20" height="20" ng-click="open(user,'create')" src="themes/softed/images/btnL3Add.gif" />
                    <a ng-click="open(user,'create')">Add New <?php echo $this->_tpl_vars['POINTING_MODULE']; ?>
</a> 
                </td> 
            </tr>
            <?php endif; ?>
            <tr class="dvtCellLabel">
                <?php $_from = $this->_tpl_vars['FIELD_LABEL']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['fieldlabel']):
?> 
                    <td> <b><?php echo $this->_tpl_vars['fieldlabel']; ?>
</b> </td> 
                <?php endforeach; endif; unset($_from); ?> 
                <td> </td> 
            </tr>
            <tr ng-repeat="user in $data"  class="dvtCellInfo">
                <?php $_from = $this->_tpl_vars['COLUMN_NAME']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['fieldname']):
?> 
                  <?php if ($this->_tpl_vars['index'] == 0): ?>
                      <td >
                         <a href="<?php echo '{{user.href}}'; ?>
"><?php echo '{{user.'; ?>
<?php echo $this->_tpl_vars['fieldname']; ?>
<?php echo '}}'; ?>
</a>
                      </td> 
                  <?php else: ?>
                      <td > 
                          <?php echo '  {{user.'; ?>
<?php echo $this->_tpl_vars['fieldname']; ?>
<?php echo '}}'; ?>

                      </td>
                  <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?> 
                <td  width="80" >
                <table>
                      <tr>
                          <?php if ($this->_tpl_vars['EDIT_RECORD'] == 1): ?>
                          <td>
                              <img ng-if="!user.$edit" width="20" height="20" ng-click="open(user,'edit')" src="themes/images/editfield.gif" /> 
                          </td>
                          <?php endif; ?>
                          <?php if ($this->_tpl_vars['DELETE_RECORD'] == 1): ?>
                          <td>
                              <img ng-if="!user.$edit" width="20" height="20" ng-click="delete_record(user)" src="themes/images/delete.gif" />
                          </td> 
                          <?php endif; ?>
                      </tr>             
                 </table>   
                </td>
            </tr>
        </table>
        </td>
    </tr>
</table>
</div>

<script type="text/ng-template" id="DetailViewBlockNgEdit.html">

<div class="modal-header">
    <h4 class="modal-title"><?php echo '{{Action}}'; ?>
 <?php echo $this->_tpl_vars['POINTING_MODULE']; ?>
 <?php echo '{{user.name}}'; ?>
</h4>
</div>
<div class="modal-body">    
    <table  >
    <?php $_from = $this->_tpl_vars['COLUMN_NAME']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['fieldname']):
?> 
      <tr ng-class-odd="'emphasis'" ng-class-even="'odd'" >
          <td style="text-align:right;"> 
              <?php echo $this->_tpl_vars['FIELD_LABEL'][$this->_tpl_vars['index']]; ?>

          </td>
          <td style="text-align:left;"> 
              <input class="form-control" style="width:350px;" type="text" ng-model="user.<?php echo $this->_tpl_vars['fieldname']; ?>
"/>
          </td>
      </tr>
    <?php endforeach; endif; unset($_from); ?> 
    </table>
</div>
<div class="modal-footer">
    <button class="btn btn-primary" ng-click="setEditId(user)">Save</button>
    <button class="btn btn-warning" ng-click="cancel()">Cancel</button>
</div>
</script>

<script>
<?php echo '
angular.module(\'cbApp\')
.controller(\'block_'; ?>
<?php echo $this->_tpl_vars['NG_BLOCK_ID']; ?>
<?php echo '\',function($scope, $http, $modal, ngTableParams) {
    $scope.user={};
            
    $scope.tableParams = new ngTableParams({
        page: 1,            // show first page
        count: 5  // count per page

    }, {
       counts: [5,15], 
        getData: function($defer, params) {
        $http.get(\'index.php?'; ?>
<?php echo $this->_tpl_vars['blockURL']; ?>
<?php echo '&kaction=retrieve\').
            success(function(data, status) {
              var orderedData = data;
              params.total(data.length);
              $defer.resolve(orderedData.slice((params.page() - 1) * params.count(),params.page() * params.count()));
        })
            }
    });

    // delete selected record
    $scope.delete_record =  function(user) {
     if(confirm(\'Are you sure you want to delete?\'))
     {
         user.href=\'\';
         var data_send =JSON.stringify(user);
         $http.post(\'index.php?'; ?>
<?php echo $this->_tpl_vars['blockURL']; ?>
<?php echo '&kaction=delete&models=\'+data_send
        )
        .success(function(data, status) {
              $scope.tableParams.reload();

         });
        }
    }

      $scope.open = function (user,type) {
        var modalInstance = $modal.open({
          templateUrl: \'DetailViewBlockNgEdit.html\',
          controller: \'ModalInstanceCtrl\',
          resolve: {
            user :function () {
              return user;
            },
            type :function () {
              return type;
            },
            tbl :function () {
              return $scope.tableParams;
            }
          }
        });

        modalInstance.result.then(function (selectedItem) {
          $scope.selected = selectedItem;
        }, function () {
          //$log.info(\'Modal dismissed at: \' + new Date());
        });
      };

})

.controller(\'ModalInstanceCtrl\',function ($scope,$http,$modalInstance,user,type,tbl) {

      $scope.user = user;
      $scope.selected = {
        item: 0
      };
      $scope.Action = (type === \'create\' ? \'Create\' : \'Edit\');
      
      // edit selected record
      $scope.setEditId =  function(user) {
            user.href=\'\';
            user =JSON.stringify(user);
            $http.post(\'index.php?'; ?>
<?php echo $this->_tpl_vars['blockURL']; ?>
<?php echo '&kaction=\'+type+\'&models=\'+user
                )
                .success(function(data, status) {
                      tbl.reload();  
                      $modalInstance.close($scope.selected.item);
                 });
      };

      $scope.cancel = function () {
        $modalInstance.dismiss(\'cancel\');
      };
});
'; ?>

</script>