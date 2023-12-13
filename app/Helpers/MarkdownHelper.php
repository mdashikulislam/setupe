<?php
namespace App\Helpers;
class MarkdownHelper{
    public static function convertToHtml($markdown)
    {
        // Replace **bold** with <strong>bold</strong>
        $markdown = preg_replace('/\*\*(.*?)\*\*/s', '<strong>$1</strong>', $markdown);

        // Replace *italic* with <em>italic</em>
        $markdown = preg_replace('/\*(.*?)\*/s', '<em>$1</em>', $markdown);

        // You can add more Markdown to HTML conversion rules as needed

        return $markdown;
    }
}