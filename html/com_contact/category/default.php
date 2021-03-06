<?php
/* ------------------------------------------------------------------------
  # Jootstrap - Twitter's Bootstrap for Joomla (with RocketTheme's Gantry administration)
  # ------------------------------------------------------------------------
  # author    Prieco S.A.
  # copyright Copyright (C) 2012 Prieco.com. All Rights Reserved.
  # @license - http://http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
  # Websites: http://www.prieco.com
  # Technical Support:  Forum - http://www.prieco.com/en/forum/index.html
  ------------------------------------------------------------------------- */
// no direct access
defined('_JEXEC') or die;
?>
<div class="contact-category<?php echo $this->pageclass_sfx; ?>">
    <?php if ($this->params->def('show_page_heading', 1)) : ?>
        <h1>
            <?php echo $this->escape($this->params->get('page_heading')); ?>
        </h1>
    <?php endif; ?>
    <?php if ($this->params->get('show_category_title', 1)) : ?>
        <h2>
            <?php echo JHtml::_('content.prepare', $this->category->title); ?>
        </h2>
    <?php endif; ?>
    <?php if ($this->params->def('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
        <div class="category-desc">
            <?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
                <img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
            <?php endif; ?>
            <?php if ($this->params->get('show_description') && $this->category->description) : ?>
                <?php echo JHtml::_('content.prepare', $this->category->description); ?>
            <?php endif; ?>
            <div class="clr"></div>
        </div>
    <?php endif; ?>

    <?php echo $this->loadTemplate('items'); ?>

    <?php if (!empty($this->children[$this->category->id]) && $this->maxLevel != 0) : ?>
        <div class="cat-children">
            <h3><?php echo JText::_('JGLOBAL_SUBCATEGORIES'); ?></h3>
            <?php echo $this->loadTemplate('children'); ?>
        </div>
    <?php endif; ?>
</div>
