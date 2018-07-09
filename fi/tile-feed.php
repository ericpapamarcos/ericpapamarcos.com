<?php header('Content-Type: text/xml'); ?>
<tile>
  <visual>
    <binding template="TileMedium">
      <text hint-wrap="true"><?php date_default_timezone_set('America/Los_Angeles'); $dt = new DateTime; $formatter = new IntlDateFormatter('fi_FI', IntlDateFormatter::LONG, IntlDateFormatter::LONG); $formatter->setPattern('cccc d. MMMM'); echo $formatter->format($dt); ?></text>
    </binding>
  </visual>
</tile>