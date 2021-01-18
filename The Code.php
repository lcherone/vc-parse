<?php
/**
 * Parse wordpress visual composer / wordpress bakery shortcode markup into workable array
 *
 * @author  Lawrence Cherone
 * @link    https://github.com/lcherone/vc-parse
 *
 * @usage   <?php print_r(vc_parse('[vc_row vc_row_background=""]...'));
 * @param   string $str
 * @returns array (or breaks)
 */
function vc_parse($str) {
  // fix conflicts
  $str = str_replace(['vc_row_inner', 'vc_column_inner'], ['vc_r_inner', 'vc_c_inner'], $str);

  //
  preg_match_all("/(?<=\[).+?(?=\])/", $str, $matches, PREG_PATTERN_ORDER);

  //
  $structure = array_reverse($matches[0]);

  //
  $result = [];

  //
  $vc_elements = [
    'vc_row', 'vc_r_inner', 'vc_column', 'vc_c_inner'
  ];

  if (!function_exists('vc_parse_shortcode')) {
    function vc_parse_shortcode($str) {
      //
      $parts = explode(' ', $str);
      $key = $parts[0];
      unset($parts[0]);

      //
      $str = implode(' ', $parts);
      preg_match_all('/(.*?)="(.*?)"/', $str, $matches);

      return [
        'shortcode' => $key,
        'properties' => array_combine(array_map('trim', $matches[1]), $matches[2])
      ];
    }
  }

  if (!function_exists('vc_parse_recursion')) {
    function vc_parse_recursion($set, $vc_elements) {
        $result = [];
        $total = count($set);
        for ($i = 0; $i < $total; $i++) {
            $last_type = explode(' ', substr($set[$i], 1))[0];
            if (substr($set[$i], 0, 1) === '/' && in_array($last_type, $vc_elements)) {
                $last = explode(' ', substr($set[$i], 1))[0];
                $subset = [];
                for ($ii = $i+1; $ii < $total; $ii++) {
                    if (substr($set[$ii], 0, strlen($last)) === $last) {
                      break;
                    } else {
                      $subset[] = $set[$ii];
                    }
                }
                $i = $i + (count($subset) + 1);
                $result[] = array_reverse(vc_parse_recursion($subset, $vc_elements));
            } elseif(substr($set[$i], 0, 1) !== '/') {
                $result[] = vc_parse_shortcode($set[$i]);
            }
        }
        return $result;
    }
  }

  return array_reverse(vc_parse_recursion($structure, $vc_elements));
}
