<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.theguardian.com/sustainable-business/2015/feb/02/2015-hyper-transparency-global-business',
            'body' => array(
                '//div[contains(@class, "content__main-column--article")]',
            ),
            'strip' => array(
                '//div[contains(@class, "meta-container")]',
                '//div[@class="content__header"]',
                '//div[@class="block-share"]',
                '//aside',
                '//div[@class="submeta"]',
                '//div[contains(@class, "contributions")]',
                '//div[@class="content__labels"]',
            ),
        )
    )
);
?>

