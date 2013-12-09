<div class="calendar col left">
    <?php echo $savvy->render($context->getMonthWidget()); ?>
</div>
<div class="day_cal three_col right">
    <h4 class="sec_main">
    <?php
    $day = $context->getDateTime();
    echo date('l, F jS',$day->getTimeStamp());
    ?> <a class="permalink" href="<?php echo $context->getURL(); ?>">(link)</a>
    </h4>
    <p id="day_nav">
        <a class="url prev" href="<?php echo $frontend->getCalendarURL().date('Y/m/d', $day->getTimeStamp()-86400) ?>">Previous Day</a>
        <a class="url next" href="<?php echo $frontend->getCalendarURL().date('Y/m/d', $day->getTimeStamp()+86400) ?>">Next Day</a>
    </p>
    <?php
    echo $savvy->render($context, 'EventListing.tpl.php');
    ?>
    
    <p id="feeds">
        <a id="icsformat" title="ics format for events on <?php echo date('l, F jS',$day->getTimeStamp()) ?>" href="<?php echo $context->getURL() ?>.ics">ics format for events on <?php echo date('l, F jS',$day->getTimeStamp())?></a>
        <a id="rssformat" title="rss format for events on <?php echo date('l, F jS',$day->getTimeStamp()) ?>" href="<?php echo $context->getURL() ?>.rss">rss format for events on <?php echo date('l, F jS',$day->getTimeStamp())?></a>
    </p>
</div>