<?php
namespace App;

use Michelf\Markdown;

// create custom plugin settings menu
add_action('admin_menu', function () {
    $svg = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M14 22h4v4h-4zM22 8c1.105 0 2 0.895 2 2v6l-6 4h-4v-2l6-4v-2h-10v-4h12zM16 3c-3.472 0-6.737 1.352-9.192 3.808s-3.808 5.72-3.808 9.192c0 3.472 1.352 6.737 3.808 9.192s5.72 3.808 9.192 3.808c3.472 0 6.737-1.352 9.192-3.808s3.808-5.72 3.808-9.192c0-3.472-1.352-6.737-3.808-9.192s-5.72-3.808-9.192-3.808zM16 0v0c8.837 0 16 7.163 16 16s-7.163 16-16 16c-8.837 0-16-7.163-16-16s7.163-16 16-16z" fill="black"></path></svg>';
    //create new top-level menu
    add_menu_page(
        'Theme Documentation',
        'Documentation',
        'edit_posts',
        'wp-docs',
        __NAMESPACE__ . '\\documentation_page',
        'data:image/svg+xml;base64,' . base64_encode($svg)
    );
    add_submenu_page(
        'wp-docs',
        'Developer Documentation',
        'Developer Docs',
        'switch_themes',
        'README',
        __NAMESPACE__ . '\\dev_docs_page'
    );
});

function parse_relative_links($url)
{
    $parsed_url = parse_url($url);
    // If relative URL
    if (isset($parsed_url['path']) && !isset($parsed_url['host'])) {
        // If link to .md file
        if (string_ends_with($parsed_url['path'], '.md')) {
            $path_info = pathinfo($parsed_url['path']);
            $slug = $path_info['filename'];
            return get_admin_url(null, 'admin.php?page=' . $slug);
        }
        $theme_url = parse_url(get_stylesheet_directory_uri());
        $theme_url['path'] = $theme_url['path'] . $parsed_url['path'];
        return http_build_url($theme_url);
    }
    return $url;
}

function output_docs_page_html($filename)
{
    $doc_markdown = file_get_contents(get_theme_root() . '/artesia/docs/' . $filename);
    $parser = new Markdown;
    $parser->url_filter_func = function ($url) {
        return parse_relative_links($url);
    };
    $doc_html = $parser->transform($doc_markdown);
    ?>

        <div class="wrap documentation">
            <?php echo $doc_html; ?>
        </div>

    <?php
}

function documentation_page()
{
    output_docs_page_html('wp-docs.md');
}

function dev_docs_page()
{
    output_docs_page_html('README.md');
}
