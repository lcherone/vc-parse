# VC Parse

Parse wordpress visual composer / wordpress bakery shortcode markup into workable array, for laying out an external app or intergration.

If you know of something already which does this functionality? Please open an issue and let me know, I looked for an age. Note: I built the function using the markup below, if it doesn't work on yours, then let me know, or open a PR if you have fixed it.

Online example: https://repl.it/@lcherone/WP-Visual-Composer-Parser

### Turn:

```
<p>[vc_row vc_row_background=""][vc_column][jnews_hero_13 compatible_column_notice="" hero_margin="0" content_filter_number_alert="" post_offset="0" include_tag="49"][jnews_block_22 compatible_column_notice="" number_post="8" post_offset="1" exclude_post="407"][jnews_slider_7 compatible_column_notice="" excerpt_length="24" number_post="6" post_offset="0"][vc_custom_heading text="<strong>Latest News</strong>" font_container="tag:h3|font_size:26|text_align:left|line_height:1" use_theme_fonts="yes" css=".vc_custom_1610377441161{margin-bottom: 5px !important;}"][vc_separator color="custom" border_width="3" css=".vc_custom_1610308826626{margin-top: 0px !important;margin-bottom: 10px !important;padding-bottom: 10px !important;}" accent_color="#111111"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][jnews_block_5 compatible_column_notice="" header_type="heading_7" number_post="1" post_offset="0" unique_content="unique1" include_category="17" excerpt_length="20"][/jnews_block_5][jnews_block_22 compatible_column_notice="" number_post="6" post_offset="0" unique_content="unique1" include_category="17"][/vc_column][vc_column width="1/3" set_as_sidebar="yes"][vc_widget_sidebar sidebar_id="news-list"][jnews_block_19 compatible_column_notice="" number_post="4" post_offset="0" unique_content="unique1"][/vc_column][/vc_row][vc_row vc_row_background=""][vc_column][vc_custom_heading text="<strong>Latest Video Picks</strong>" font_container="tag:h3|font_size:26|text_align:left|line_height:1" use_theme_fonts="yes"][vc_separator color="black" border_width="3"][jnews_video_block4 compatible_column_notice="" post_meta_style="style_1" author_avatar="" number_post="4" post_offset="0"][/vc_column][/vc_row][vc_row][vc_column width="2/3"][vc_custom_heading text="<strong>Special Reports</strong>" font_container="tag:h3|font_size:26|text_align:left|line_height:1" use_theme_fonts="yes"][vc_separator color="custom" border_width="3" css=".vc_custom_1498462112764{margin-top: 0px !important;}" accent_color="#111111"][jnews_block_15 compatible_column_notice="" number_post="6" post_offset="0" unique_content="unique1" include_category="54,53,2,15"][jnews_element_ads compatible_column_notice="" ads_type="image" ads_image_new_tab="yes" ads_image="24" ads_image_link="#"][/jnews_element_ads][jnews_block_3 compatible_column_notice="" header_filter_category="14,13,17" number_post="2" post_offset="0" include_category="54,14" excerpt_length="20" first_title="Opinion"][/jnews_block_3][jnews_block_3 compatible_column_notice="" header_filter_category="56,15,2" number_post="2" post_offset="0" include_category="56,15,2" excerpt_length="20" first_title="Interviews"][/jnews_block_3][jnews_block_3 compatible_column_notice="" number_post="2" post_offset="0" include_category="8" excerpt_length="20" first_title="Books"][/jnews_block_3][jnews_block_3 compatible_column_notice="" number_post="2" post_offset="0" include_category="57" excerpt_length="20" first_title="Film"][/jnews_block_3][vc_single_image image="24" img_size="full" alignment="center" onclick="custom_link" img_link_target="_blank" link="http://127.0.0.1:8081/"][jnews_block_3 compatible_column_notice="" number_post="2" post_offset="0" include_category="3" excerpt_length="20" first_title="Theatre"][/jnews_block_3][/vc_column][vc_column width="1/3" sticky_sidebar="yes" set_as_sidebar="yes"][vc_custom_heading text="<strong>Spotlight</strong>" font_container="tag:h3|font_size:26|text_align:left|line_height:1" use_theme_fonts="yes"][vc_separator color="custom" border_width="3" css=".vc_custom_1498462112764{margin-top: 0px !important;}" accent_color="#111111"][jnews_block_1 compatible_column_notice="" header_type="heading_5" number_post="6" post_offset="0" unique_content="unique1" include_category="3" excerpt_length="20"][vc_row_inner][vc_column_inner][jnews_block_14 compatible_column_notice="" header_icon="fas fa-eye" number_post="5" post_offset="0" unique_content="unique2" sort_by="popular_post_week" first_title="Top" second_title="Stories"][vc_single_image image="44706" img_size="full" alignment="center" onclick="custom_link" img_link_target="_blank" link="http://127.0.0.1:8081/"][jnews_block_31 compatible_column_notice="" header_icon="far fa-thumbs-up" number_post="3" post_offset="0" unique_content="unique3" sort_by="like" first_title="Most" second_title="Liked"][/jnews_block_31][jnews_block_20 compatible_column_notice="" header_icon="fas fa-share" number_post="4" post_offset="0" unique_content="unique4" sort_by="share" first_title="Most" second_title="Shared"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>
```

### Into:

```
Array
(
    [0] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [shortcode] => jnews_hero_13
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [hero_margin] => 0
                                    [content_filter_number_alert] => 
                                    [post_offset] => 0
                                    [include_tag] => 49
                                )

                        )

                    [1] => Array
                        (
                            [shortcode] => jnews_block_22
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 8
                                    [post_offset] => 1
                                    [exclude_post] => 407
                                )

                        )

                    [2] => Array
                        (
                            [shortcode] => jnews_slider_7
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [excerpt_length] => 24
                                    [number_post] => 6
                                    [post_offset] => 0
                                )

                        )

                    [3] => Array
                        (
                            [shortcode] => vc_custom_heading
                            [properties] => Array
                                (
                                    [text] => <strong>Latest News</strong>
                                    [font_container] => tag:h3|font_size:26|text_align:left|line_height:1
                                    [use_theme_fonts] => yes
                                    [css] => .vc_custom_1610377441161{margin-bottom: 5px !important;}
                                )

                        )

                    [4] => Array
                        (
                            [shortcode] => vc_separator
                            [properties] => Array
                                (
                                    [color] => custom
                                    [border_width] => 3
                                    [css] => .vc_custom_1610308826626{margin-top: 0px !important;margin-bottom: 10px !important;padding-bottom: 10px !important;}
                                    [accent_color] => #111111
                                )

                        )

                )

        )

    [1] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [shortcode] => jnews_block_5
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [header_type] => heading_7
                                    [number_post] => 1
                                    [post_offset] => 0
                                    [unique_content] => unique1
                                    [include_category] => 17
                                    [excerpt_length] => 20
                                )

                        )

                    [1] => Array
                        (
                            [shortcode] => jnews_block_22
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 6
                                    [post_offset] => 0
                                    [unique_content] => unique1
                                    [include_category] => 17
                                )

                        )

                )

            [1] => Array
                (
                    [0] => Array
                        (
                            [shortcode] => vc_widget_sidebar
                            [properties] => Array
                                (
                                    [sidebar_id] => news-list
                                )

                        )

                    [1] => Array
                        (
                            [shortcode] => jnews_block_19
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 4
                                    [post_offset] => 0
                                    [unique_content] => unique1
                                )

                        )

                )

        )

    [2] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [shortcode] => vc_custom_heading
                            [properties] => Array
                                (
                                    [text] => <strong>Latest Video Picks</strong>
                                    [font_container] => tag:h3|font_size:26|text_align:left|line_height:1
                                    [use_theme_fonts] => yes
                                )

                        )

                    [1] => Array
                        (
                            [shortcode] => vc_separator
                            [properties] => Array
                                (
                                    [color] => black
                                    [border_width] => 3
                                )

                        )

                    [2] => Array
                        (
                            [shortcode] => jnews_video_block4
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [post_meta_style] => style_1
                                    [author_avatar] => 
                                    [number_post] => 4
                                    [post_offset] => 0
                                )

                        )

                )

        )

    [3] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [shortcode] => vc_custom_heading
                            [properties] => Array
                                (
                                    [text] => <strong>Special Reports</strong>
                                    [font_container] => tag:h3|font_size:26|text_align:left|line_height:1
                                    [use_theme_fonts] => yes
                                )

                        )

                    [1] => Array
                        (
                            [shortcode] => vc_separator
                            [properties] => Array
                                (
                                    [color] => custom
                                    [border_width] => 3
                                    [css] => .vc_custom_1498462112764{margin-top: 0px !important;}
                                    [accent_color] => #111111
                                )

                        )

                    [2] => Array
                        (
                            [shortcode] => jnews_block_15
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 6
                                    [post_offset] => 0
                                    [unique_content] => unique1
                                    [include_category] => 54,53,2,15
                                )

                        )

                    [3] => Array
                        (
                            [shortcode] => jnews_element_ads
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [ads_type] => image
                                    [ads_image_new_tab] => yes
                                    [ads_image] => 24
                                    [ads_image_link] => #
                                )

                        )

                    [4] => Array
                        (
                            [shortcode] => jnews_block_3
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [header_filter_category] => 14,13,17
                                    [number_post] => 2
                                    [post_offset] => 0
                                    [include_category] => 54,14
                                    [excerpt_length] => 20
                                    [first_title] => Opinion
                                )

                        )

                    [5] => Array
                        (
                            [shortcode] => jnews_block_3
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [header_filter_category] => 56,15,2
                                    [number_post] => 2
                                    [post_offset] => 0
                                    [include_category] => 56,15,2
                                    [excerpt_length] => 20
                                    [first_title] => Interviews
                                )

                        )

                    [6] => Array
                        (
                            [shortcode] => jnews_block_3
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 2
                                    [post_offset] => 0
                                    [include_category] => 8
                                    [excerpt_length] => 20
                                    [first_title] => Books
                                )

                        )

                    [7] => Array
                        (
                            [shortcode] => jnews_block_3
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 2
                                    [post_offset] => 0
                                    [include_category] => 57
                                    [excerpt_length] => 20
                                    [first_title] => Film
                                )

                        )

                    [8] => Array
                        (
                            [shortcode] => vc_single_image
                            [properties] => Array
                                (
                                    [image] => 24
                                    [img_size] => full
                                    [alignment] => center
                                    [onclick] => custom_link
                                    [img_link_target] => _blank
                                    [link] => http://127.0.0.1:8081/
                                )

                        )

                    [9] => Array
                        (
                            [shortcode] => jnews_block_3
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [number_post] => 2
                                    [post_offset] => 0
                                    [include_category] => 3
                                    [excerpt_length] => 20
                                    [first_title] => Theatre
                                )

                        )

                )

            [1] => Array
                (
                    [0] => Array
                        (
                            [shortcode] => vc_custom_heading
                            [properties] => Array
                                (
                                    [text] => <strong>Spotlight</strong>
                                    [font_container] => tag:h3|font_size:26|text_align:left|line_height:1
                                    [use_theme_fonts] => yes
                                )

                        )

                    [1] => Array
                        (
                            [shortcode] => vc_separator
                            [properties] => Array
                                (
                                    [color] => custom
                                    [border_width] => 3
                                    [css] => .vc_custom_1498462112764{margin-top: 0px !important;}
                                    [accent_color] => #111111
                                )

                        )

                    [2] => Array
                        (
                            [shortcode] => jnews_block_1
                            [properties] => Array
                                (
                                    [compatible_column_notice] => 
                                    [header_type] => heading_5
                                    [number_post] => 6
                                    [post_offset] => 0
                                    [unique_content] => unique1
                                    [include_category] => 3
                                    [excerpt_length] => 20
                                )

                        )

                    [3] => Array
                        (
                            [0] => Array
                                (
                                    [0] => Array
                                        (
                                            [shortcode] => jnews_block_14
                                            [properties] => Array
                                                (
                                                    [compatible_column_notice] => 
                                                    [header_icon] => fas fa-eye
                                                    [number_post] => 5
                                                    [post_offset] => 0
                                                    [unique_content] => unique2
                                                    [sort_by] => popular_post_week
                                                    [first_title] => Top
                                                    [second_title] => Stories
                                                )

                                        )

                                    [1] => Array
                                        (
                                            [shortcode] => vc_single_image
                                            [properties] => Array
                                                (
                                                    [image] => 44706
                                                    [img_size] => full
                                                    [alignment] => center
                                                    [onclick] => custom_link
                                                    [img_link_target] => _blank
                                                    [link] => http://127.0.0.1:8081/
                                                )

                                        )

                                    [2] => Array
                                        (
                                            [shortcode] => jnews_block_31
                                            [properties] => Array
                                                (
                                                    [compatible_column_notice] => 
                                                    [header_icon] => far fa-thumbs-up
                                                    [number_post] => 3
                                                    [post_offset] => 0
                                                    [unique_content] => unique3
                                                    [sort_by] => like
                                                    [first_title] => Most
                                                    [second_title] => Liked
                                                )

                                        )

                                    [3] => Array
                                        (
                                            [shortcode] => jnews_block_20
                                            [properties] => Array
                                                (
                                                    [compatible_column_notice] => 
                                                    [header_icon] => fas fa-share
                                                    [number_post] => 4
                                                    [post_offset] => 0
                                                    [unique_content] => unique4
                                                    [sort_by] => share
                                                    [first_title] => Most
                                                    [second_title] => Shared
                                                )

                                        )

                                )

                        )

                )

        )

)
```

I sorry you scrolled this far, there isn't anything down here..
