# Format String Function 
The `formatString` function applies string manipulation rules sequentially as defined in the `$rules` array. Each rule is processed in the order it appears in the array. If a rule is not recognized, it is ignored.
## Parameters
-$string (`string`): The input string to be formatted.
-$rules (`array`): An associative array defining the rules for string manipulation. The keys represent the rule names, and the values provide the necessary parameters for each rule.

## Supported Rules
 --uppercase (`bool`): Converts the entire string to uppercase.
   Example: `'uppercase' => true`
--lowercase (`bool`): Converts the entire string to lowercase.
   Example: `'lowercase' => true`
-- capitalize (`bool`): Capitalizes the first letter of each word in the string.
   Example: `'capitalize' => true`
-- addPrefix (`string`): Adds a specified prefix to the beginning of the string.
   Example: `'addPrefix' => 'Prefix: '`
-- addSuffix (`string`): Adds a specified suffix to the end of the string.
   Example:` 'addSuffix' => ' :Suffix'`
-- replace (`array`): Replaces occurrences of a substring within the string with another substring. The array must include `search` and `replace` keys.
  Example: `'replace' => ['search' => ' ', 'replace' => '_']`.

## Rule Application Order
-uppercase and lowercase: These rules change the entire case of the string. If both are specified, the last one in the array takes precedence.
-capitalize: Capitalizes the first letter of each word, applied after converting the string to lowercase to ensure consistent capitalization.
-addPrefix and addSuffix: These rules add specified text before or after the string, respectively.
 replace: Performs a find-and-replace operation, replacing all instances of search with replace.  

## Edge Cases
-Contradictory Rules: If both `uppercase` and `lowercase` are specified, the function applies them in sequence, with the last one   taking effect.
-Combination of Rules: The function can handle any combination of the supported rules, applying them in the defined order to produce the final formatted string.