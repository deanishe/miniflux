<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'https://aeon.co/ideas/but-you-cant-do-that-why-immoral-actions-seem-impossible',
            'body' => array(
                '//div[@class="article__body__content"]',
            ),
            'strip' => array(
                '//div[contains(@class, "article__inline-sidebar")]',
                '//div[contains(@class, "article__body__meta")]',
                '//div[@class="shortcode-inline-newsletter"]',
                '//div[@class="article__word-count"]',
                '//div[@class="article__body__editor"]',
                '//a[@class="republish-button"]',
                '//div[@class="republish-modal"]',
                '//div[@class="topics-banner"]',
                '//a[contains(@class, "donate__card")]',
            ),
        )
    )
);
?>