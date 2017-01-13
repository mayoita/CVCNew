<?php
/**
* @file
* Default simple view template to all the fields as a row.
*
* - $view: The view in use.
* - $fields: an array of $field objects. Each one contains:
*   - $field->content: The output of the field.
*   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
*   - $field->class: The safe class id to use.
*   - $field->handler: The Views field handler object controlling this field. Do not use
*     var_export to dump this object, as it can't handle the recursion.
*   - $field->inline: Whether or not the field should be inline.
*   - $field->inline_html: either div or span based on the above flag.
*   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
*   - $field->wrapper_suffix: The closing tag for the wrapper.
*   - $field->separator: an optional separator that may appear before a field.
*   - $field->label: The wrap label text to use.
*   - $field->label_html: The full HTML of the label to use including
*     configured element type.
* - $row: The raw result object from the query, with all data it fetched.
*
* @ingroup views_templates
*/
$path = $fields['path']->content ? $fields['path']->content : url('node/' . $fields['nid']->content);
?>
<div class="default">
  <a href="<?php print $path ?>" class="product-image">
    <?php if($fields['field_corner_text']->content): ?>
      <span class="sale corner-<?php print strtolower($fields['field_corner_text']->content); ?>"><span><?php print $fields['field_corner_text']->content; ?></span></span>
    <?php endif; ?>
    <?php print $fields['uc_product_image']->content; ?>
  </a>
  <div class="product-description">
    <div class="vertical">
      <h3 class="product-name">
        <a href="<?php print $path ?>"><?php print $fields['title']->content; ?></a>
      </h3>
      <div class="price"><?php print $fields['sell_price']->content; ?></div> 
    </div>
  </div>
</div>
<div class="product-hover">
  <h3 class="product-name">
    <a href="<?php print $path ?>"><?php print $fields['title']->content; ?></a>
  </h3>
  
  <a href="<?php print $path ?>" class="product-image">
    <?php print !empty($fields['uc_product_image_1']->content) ? $fields['uc_product_image_1']->content : $fields['uc_product_image']->content; ?>
  </a>
  <div class="price"><?php print $fields['body']->content; ?></div>
</div><!-- .product-hover -->