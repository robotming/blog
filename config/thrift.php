<?php
return [
	'production' => [
		'host' => '10.10.45.59',
		'port' => 9090,
		'article_table' => 'pool_news',
		'list_table' => 'basket_news_list',
		'editor_table' => 'basket_news_editor',
		'recommend_table' => 'corpus_news',
		'all_top100_table' => 'basket_news_hot',
		'bigdata_user_hot' => 'bigdata_user_hot',
		'sc_news_list' => 'subcategory_news_list',
		'hot_et_tag' => 'basket_news_hot_entertainment_tag',  // 娱乐标签热文
		'hot_et_tag_h' => 'basket_news_hot_entertainment_category_24hour',  // 娱乐小类热文
        'python_get_list_url' => 'http://10.19.4.7:5001/online/hbase/scan',
	],
	'beta' => [
		'host' => '10.19.94.183',//hbase beta单机外网
		'port' => 9090,
		'article_table' => 'dev_pool_news',
		'list_table' => 'dev_basket_news_list',
		'editor_table' => 'dev_basket_news_editor',
		'recommend_table' => 'dev_corpus_news',
		'all_top100_table' => 'dev_basket_news_hot',
        'bigdata_user_hot' => 'bigdata_user_hot',
        'sc_news_list' => 'subcategory_news_list',
        'hot_et_tag' => 'basket_news_hot_entertainment_tag',
        'hot_et_tag_h' => 'basket_news_hot_entertainment_category_24hour',
        'python_get_list_url' => 'http://106.75.114.96:5001/test/hbase/scan',
	],
	'local' => [
		'host' => '192.168.168.128',//hbase beta单机外网
		'port' => 9090,
		'article_table' => 'dev_pool_news',
		'list_table' => 'dev_basket_news_list',
		'editor_table' => 'dev_basket_news_editor',
		'recommend_table' => 'dev_corpus_news',
		'all_top100_table' => 'dev_basket_news_hot',
        'bigdata_user_hot' => 'bigdata_user_hot',
        'sc_news_list' => 'subcategory_news_list',
        'hot_et_tag' => 'basket_news_hot_entertainment_tag',
        'hot_et_tag_h' => 'basket_news_hot_entertainment_category_24hour',
        'python_get_list_url' => 'http://106.75.114.96:5001/test/hbase/scan',
	]
];


//		新的Hbase集群
//	    'host' => '10.10.45.59',
//	    'host' => '123.59.95.145',