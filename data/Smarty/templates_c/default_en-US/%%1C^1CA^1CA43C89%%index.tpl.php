<?php /* Smarty version 2.6.26, created on 2014-03-25 02:48:45
         compiled from /Applications/XAMPP/xamppfiles/htdocs/ec-cube/html/../data/Smarty/templates/default_en-US/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/Applications/XAMPP/xamppfiles/htdocs/ec-cube/html/../data/Smarty/templates/default_en-US/index.tpl', 24, false),)), $this); ?>

<div id="main_image">
    <a href="<?php echo ((is_array($_tmp=@P_DETAIL_URLPATH)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
1" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/bnr_top_main_on.jpg','bnr_top_main');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/bnr_top_main.jpg','bnr_top_main');">
        <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/banner/bnr_top_main.jpg" alt="Details here" id="bnr_top_main" name="bnr_top_main" />
    </a>
</div>