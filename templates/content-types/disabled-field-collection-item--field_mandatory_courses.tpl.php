<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>

<?php
// Scrape data from $content
$ftu_CPmc = []; // CourseProgram.MandatoryCourses

$ftu_CPmc['semester'] = $content['field_semester'][0]['#markup'];
$ftu_CPmc['courses'] = [];

foreach ($content['field_courses']['#items'] as $key => $item) {
  $courseItem = $content['field_courses'][$key]['node'][$item['target_id']];

  $ftu_CPmc['courses'][$key]['code'] = $courseItem['field_code'][0]['#markup'];
  $ftu_CPmc['courses'][$key]['title'] = $courseItem['title'][0]['#markup'];
  $ftu_CPmc['courses'][$key]['credits'] = $courseItem['field_credits'][0]['#markup'];
  $ftu_CPmc['courses'][$key]['field_time_structure'] = $courseItem['field_time_structure'][0]['#markup'];
}

?>

<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      kpr($content);
      kpr($ftu_CPmc);
      print t('Семестар') . ' ' . $ftu_CPmc['semester'];
    ?>
  </div>
</div>
