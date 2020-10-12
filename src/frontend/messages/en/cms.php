<?php

return [
    'tb_composition' => 'Language',
    'tb_properties' => 'Properties',
    'tb_seo' => 'Search engine optimization',
    'tb_seo_title' => 'Title',
    'tb_seo_description' => 'Description',
    'tb_seo_description_notfound' => 'No description has been added to this page yet.',
    'tb_seo_link' => 'URL Link',
    'tb_seo_keywords' => 'Keywords',
    'tb_seo_keywords_notfound' => 'No keywords found. You should add keywords in order to analyze your content.',
    'tb_seo_warning' => 'Some of your keywords are not found in your content, you should fix this by either changing your keywords or adding the missing keywords to the content.',
    'tb_edit_alt' => 'Edit this page in CMS administration',
    'tb_visible_not_alt' => 'This page is NOT visible for visitors',
    'tb_visible_alt' => 'This page is visible for visitors',
    'block_html_html_label' => 'HTML code',
    'block_html_no_content' => 'No HTML code has been added yet.',
    'block_module_name' => 'Module',
    'block_module_modulename_label' => 'Module name',
    'block_module_modulecontroller_label' => 'Controller Name (without controller suffix)',
    'block_module_moduleaction_label' => 'Action Name (without action prefix)',
    'block_module_moduleactionargs_label' => 'Action Arguments (json: {"var":"value"})',
    'block_module_no_module' => 'No module has been specified yet.',
    'block_module_integration' => 'Module integration',
    'block_html_name' => 'HTML',
    'block_module_modulename_help' => 'Only frontend modules that are registered in the config file are listed.',
    'block_group_dev_elements' => 'Development',
    'block_group_layout_elements' => 'Layout',
    'block_group_basic_elements' => 'Basics',
    'block_group_project_elements' => 'Project',
    'block_group_text_elements' => 'Texts',
    'block_group_media_group' => 'Media',
    
    // 1.0.0
    'block_module_strictrender' => 'Strict Render',
    'block_module_strictrender_help' => 'When strict render is enabled, the module will only run the provided route (module, controller, action, params) without listening to action and controller routes.',
    'block_html_cfg_raw_label' => 'Render HTML in Admin',

    // 3.4.0
    'tag_alias_readme' => 'The alias tag allows you to use aliases defined in your application as well as predefined aliases. As an example, you can use `alias[@web]` to link to images in the public html folder: <img src=\"alias[@web]/image.jpg\">',
    'tag_menu_readme' => 'Generate a link to a menu item where the key is the page id (you can see the page ids when hovering over the site navigation in the administration).',
    'tag_page_readme' => 'Get the content of a full page or of a placeholder of a page. The first parameter is the page id (which you get by hovering over the site navigation in the administration): `page[1]`. If you only want to get the content of a placeholder of the cmslayout, use the second parameter: `page[1](placeholderName)`.',
];
