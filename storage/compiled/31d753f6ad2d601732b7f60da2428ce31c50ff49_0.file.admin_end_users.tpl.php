<?php
/* Smarty version 3.1.33, created on 2019-05-27 16:42:59
  from '/Users/razib/Documents/valet/suite/apps/bpr/views/admin_end_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cec4bd3075430_17375144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d753f6ad2d601732b7f60da2428ce31c50ff49' => 
    array (
      0 => '/Users/razib/Documents/valet/suite/apps/bpr/views/admin_end_users.tpl',
      1 => 1556731281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cec4bd3075430_17375144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11694993415cec4bd3053973_05625113', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5806511525cec4bd305ec61_08563627', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19186724175cec4bd3074b93_32141517', "script");
}
/* {block "style"} */
class Block_11694993415cec4bd3053973_05625113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_11694993415cec4bd3053973_05625113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/css/footable.core.min.css" />
<?php
}
}
/* {/block "style"} */
/* {block "content"} */
class Block_5806511525cec4bd305ec61_08563627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5806511525cec4bd305ec61_08563627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/end-user" class="btn btn-primary">Create new end user</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="panel">
                <div class="panel-body">

                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fa fa-search"></span>
                                    </div>
                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                                </div>
                            </div>

                        </div>
                    </form>

                    <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['end_users']->value, 'end_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['end_user']->value) {
?>
                            <tr>
                                <td  data-value="<?php echo $_smarty_tpl->tpl_vars['end_user']->value->id;?>
">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/end-user/<?php echo $_smarty_tpl->tpl_vars['end_user']->value->id;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['end_user']->value->name;?>
 <br>
                                        <?php echo $_smarty_tpl->tpl_vars['end_user']->value->type;?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['end_user']->value->company;?>
</td>
                                <td>
                                    <?php if (isset($_smarty_tpl->tpl_vars['end_user']->value->office_phone) && ($_smarty_tpl->tpl_vars['end_user']->value->office_phone != '')) {?>
                                        Office: <?php echo $_smarty_tpl->tpl_vars['end_user']->value->office_phone;?>

                                    <?php }?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['end_user']->value->mobile_phone) && ($_smarty_tpl->tpl_vars['end_user']->value->mobile_phone != '')) {?>
                                        <br>
                                        Mobile: <?php echo $_smarty_tpl->tpl_vars['end_user']->value->mobile_phone;?>

                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['end_user']->value->email;?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bpr/admin/end-user/<?php echo $_smarty_tpl->tpl_vars['end_user']->value->id;?>
" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:;" class="btn btn-danger btn-xs" onclick="confirmThenGoToUrl(event,'bpr/admin/end-user-delete/<?php echo $_smarty_tpl->tpl_vars['end_user']->value->id;?>
');" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                </td>

                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_19186724175cec4bd3074b93_32141517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_19186724175cec4bd3074b93_32141517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            $('.footable').footable();
            $('[data-toggle="tooltip"]').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
