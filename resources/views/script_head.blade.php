<?php
$dataLayer = GoogleTagManager::getDataLayer();
if(!isset($pushData))$pushData = array(); ?>
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer = [{!! $dataLayer->toJson() !!}];
        @foreach($pushData as $item)
            dataLayer.push({!! $item->toJson() !!});
        @endforeach
    </script>

    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NJQZNF" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
