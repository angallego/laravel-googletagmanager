<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>

<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id={{config('googletagmanager.id')}}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<?php endif; ?>
