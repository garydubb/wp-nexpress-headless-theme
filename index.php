<?php

/**
 * This is a blank theme for using WordPress as a REST API and database only.
 * If visited, it should redirect to the statically-generated site that uses this API's content.
 * Paste the URL of the static site below.
 */
$staticSiteUrl = 'https://garydubb.com'; // Replace with the URL of your static site
?>

<script type="text/javascript">
  window.location = <?php echo $staticSiteUrl; ?>;
</script>
