<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://edition.cnn.com/2017/06/12/politics/9th-circuit-travel-ban/index.html',
            'body' => array(
                '//div[@itemprop="articleBody"]',
            ),
            'strip' => array(
                '//div[@class="ad"]',
            )
        )
    )
);
?>
