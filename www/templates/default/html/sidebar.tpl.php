<div class="calendar">
    <?php echo $savvy->render($context->getMonthWidget()); ?>
</div>

<div id="subscribe" onmouseover="if(!g_bH){document.getElementById('droplist').style.display='block';}" onmouseout="if(!g_bH){document.getElementById('droplist').style.display='none';}">
    <span>Subscribe to this calendar</span>
    <ul id="droplist">
        <li id="eventrss"><a href="<?php echo $frontend->getUpcomingURL(); ?>?format=rss&amp;limit=100" title="RSS feed">RSS feed</a></li>
        <li id="eventical"><a href="<?php echo $frontend->getUpcomingURL(); ?>?format=ics&amp;limit=100" title=".ical format">.ical format</a></li>
    </ul>
</div>