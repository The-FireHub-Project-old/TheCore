<?php declare(strict_types = 1);

/**
 * This file is part of FireHub Web Application Framework package
 *
 * This is a PHP-CS-Fixer configuration file.
 * This will help align the code style throughout the project following
 * specific rules such as 'no_trailing_whitespace', 'no_empty_phpdoc', 'no_superfluous_phpdoc_tags' and many others.
 * This brings consistency to coding style and makes the code easier to read and understand.
 * @since 1.0.0
 *
 * @author Danijel Galić <danijel.galic@outlook.com>
 * @copyright 2024 FireHub Web Application Framework
 * @license <https://opensource.org/licenses/OSL-3.0> OSL Open Source License version 3
 *
 * @package FireHub
 *
 * @version GIT: $Id$ Blob checksum.
 */

use PhpCsFixer\ {
    Config, Finder
};

return (new Config)
    ->setCacheFile(__DIR__.'/vendor/friendsofphp/.php-cs-fixer.cache')
    ->setRiskyAllowed(true)
    ->setRules([
        // alias
        'array_push' => true,
        'backtick_to_shell_exec' => true,
        'ereg_to_preg' => true,
        'mb_str_functions' => false,
        'modernize_strpos' => false,
        'no_alias_functions' => [
            'sets' => [
                '@all', '@exif', '@ftp', '@IMAP', '@internal', '@ldap', '@mbreg', '@mysqli', '@oci', '@odbc',
                '@openssl', '@pcntl', '@pg', '@posix', '@snmp', '@sodium', '@time'
            ]
        ],
        'no_alias_language_construct_call' => true,
        'no_mixed_echo_print' => false,
        'pow_to_exponentiation' => false,
        'random_api_migration' => false,
        'set_type_to_cast' => false,

        // array notation
        'array_syntax' => [
            'syntax' => 'short'
        ],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_whitespace_before_comma_in_array' => [
            'after_heredoc' => true
        ],
        'normalize_index_brace' => true,
        'return_to_yield_from' => false,

        // attribute notation
        'attribute_empty_parentheses' => false,

        // basic
        'braces_position' => [
            'allow_single_line_anonymous_functions' => false,
            'allow_single_line_empty_anonymous_classes' => false,
            'anonymous_classes_opening_brace' => 'same_line',
            'anonymous_functions_opening_brace' => 'same_line',
            'classes_opening_brace' => 'same_line',
            'control_structures_opening_brace' => 'same_line',
            'functions_opening_brace' => 'same_line'
        ],
        'encoding' => true,
        'no_multiple_statements_per_line' => true,
        'no_trailing_comma_in_singleline' => [
            'elements' => ['arguments', 'array_destructuring', 'array', 'group_import']
        ],
        'non_printable_character' => false,
        'octal_notation' => true,
        'psr_autoloading' => false,
        'single_line_empty_body' => true,

        // casing
        'class_reference_name_casing' => true,
        'constant_case' => [
            'case' => 'lower'
        ],
        'integer_literal_case' => true,
        'lowercase_keywords' => true,
        'lowercase_static_reference' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,

        // cast notation
        'cast_spaces' => [
            'space' => 'none'
        ],
        'lowercase_cast' => true,
        'modernize_types_casting' => true,
        'no_short_bool_cast' => true,
        'no_unset_cast' => true,
        'short_scalar_cast' => true,

        // class notation
        'class_attributes_separation' => false,
        'class_definition' => [
            'inline_constructor_arguments' => false,
            'multi_line_extends_each_single_line' => true,
            'single_item_single_line' => true,
            'single_line' => true,
            'space_before_parenthesis' => true
        ],
        'final_class' => true,
        'final_internal_class' => [
            'annotation_include' => [],
            'consider_absent_docblock_as_internal_class' => true,
            'exclude' => [],
            'include' => ['internal']
        ],
        'final_public_method_for_abstract_class' => true,
        'no_blank_lines_after_class_opening' => false,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_unneeded_final_method' => true,
        'ordered_class_elements' => [
            'case_sensitive' => false,
            'order' => [
                'use_trait',
                'public',
                'protected',
                'private',
                'case',
                'constant', 'constant_public', 'constant_protected', 'constant_private',
                'property', 'property_static', 'property_public', 'property_protected', 'property_private',
                'property_public_readonly', 'property_protected_readonly', 'property_private_readonly',
                'property_public_static', 'property_protected_static', 'property_private_static',
                'construct',
                'method', 'method_static', 'method_abstract',
                'method_public_static', 'method_public', 'method_public_abstract_static', 'method_public_abstract',
                'method_protected_static', 'method_protected', 'method_protected_abstract_static', 'method_protected_abstract',
                'method_private_static', 'method_private', 'method_private_abstract_static', 'method_private_abstract',
                'magic',
                'destruct',
                'phpunit'
            ],
            'sort_algorithm' => 'none'
        ],
        'ordered_interfaces' => [
            'case_sensitive' => false,
            'direction' => 'ascend',
            'order' => 'alpha'
        ],
        'ordered_traits' => [
            'case_sensitive' => false
        ],
        'ordered_types' => [
            'case_sensitive' => false,
            'null_adjustment' => 'always_first',
            'sort_algorithm' => 'alpha'
        ],
        'phpdoc_readonly_class_comment_to_keyword' => false,
        'protected_to_private' => true,
        'self_accessor' => true,
        'self_static_accessor' => true,
        'single_class_element_per_statement' => [
            'elements' => ['const', 'property']
        ],
        'single_trait_insert_per_statement' => true,
        'visibility_required' => [
            'elements' => ['property', 'method', 'const']
        ],

        // class usage
        'date_time_immutable' => false,

        // comment
        'comment_to_phpdoc' => [
            'ignored_tags' => ['todo']
        ],
        'header_comment' => false,
        'multiline_comment_opening_closing' => true,
        'no_empty_comment' => true,
        'no_trailing_whitespace_in_comment' => true,
        'single_line_comment_spacing' => true,
        'single_line_comment_style' => [
            'comment_types' => ['asterisk', 'hash']
        ],

        // constant notation
        'native_constant_invocation' => [
            'exclude' => ['null', 'false', 'true'],
            'fix_built_in' => true,
            'include' => [],
            'scope' => 'all',
            'strict' => true
        ],

        // control structure
        'control_structure_braces' => false,
        'control_structure_continuation_position' => [
            'position' => 'same_line'
        ],
        'elseif' => false,
        'empty_loop_body' => [
            'style' => 'semicolon'
        ],
        'empty_loop_condition' => [
            'style' => 'while'
        ],
        'include' => true,
        'no_alternative_syntax' => false,
        'no_break_comment' => [
            'comment_text' => 'no break'
        ],
        'no_superfluous_elseif' => true,
        'no_unneeded_braces' => [
            'namespaces' => true
        ],
        'no_unneeded_control_parentheses' => [
            'statements' => [
                'break', 'clone', 'continue', 'echo_print', 'negative_instanceof', 'others', 'return', 'switch_case',
                'yield', 'yield_from'
            ]
        ],
        'no_useless_else' => true,
        'simplified_if_return' => true,
        'switch_case_semicolon_to_colon' => true,
        'switch_case_space' => true,
        'switch_continue_to_break' => true,
        'trailing_comma_in_multiline' => false,
        'yoda_style' => false,

        // function notation
        'combine_nested_dirname' => true,
        'date_time_create_from_format_call' => true,
        'fopen_flag_order' => true,
        'fopen_flags' => [
            'b_mode' => true
        ],
        'function_declaration' => false,
        'implode_call' => true,
        'lambda_not_used_import' => true,
        'method_argument_space' => [
            'after_heredoc' => true,
            'attribute_placement' => 'standalone',
            'keep_multiple_spaces_after_comma' => false,
            'on_multiline' => 'ensure_single_line'
        ],
        'native_function_invocation' => [
            'exclude' => [],
            'include' => ['@compiler_optimized'],
            'scope' => 'all',
            'strict' => true
        ],
        'no_spaces_after_function_name' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_sprintf' => true,
        'nullable_type_declaration_for_default_null_value' => [
            'use_nullable_type_declaration' => false
        ],
        'phpdoc_to_param_type' => false,
        'phpdoc_to_property_type' => false,
        'phpdoc_to_return_type' => false,
        'regular_callable_call' => true,
        'return_type_declaration' => false,
        'single_line_throw' => false,
        'static_lambda' => true,
        'use_arrow_functions' => true,
        'void_return' => true,

        // import
        'fully_qualified_strict_types' => [
            'leading_backslash_in_global_namespace' => false
        ],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true
        ],
        'group_import' => true,
        'no_leading_import_slash' => true,
        'no_unneeded_import_alias' => true,
        'no_unused_imports' => true,
        'ordered_imports' => [
            'case_sensitive' => false,
            'imports_order' => ['class', 'const', 'function'],
            'sort_algorithm' => 'alpha'
        ],
        'single_import_per_statement' => false,
        'single_line_after_imports' => true,

        // language construct
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'declare_equal_normalize' => [
            'space' => 'single'
        ],
        'declare_parentheses' => true,
        'dir_constant' => true,
        'error_suppression' => [
            'mute_deprecation_error' => false,
            'noise_remaining_usages' => true,
            'noise_remaining_usages_exclude' => []
        ],
        'explicit_indirect_variable' => true,
        'function_to_constant' => [
            'functions' => ['get_called_class', 'get_class', 'get_class_this', 'php_sapi_name', 'phpversion', 'pi']
        ],
        'get_class_to_class_keyword' => true,
        'is_null' => false,
        'no_unset_on_property' => false,
        'nullable_type_declaration' => [
            'syntax' => 'question_mark'
        ],
        'single_space_around_construct' => [
            'constructs_contain_a_single_space' => ['yield_from'],
            'constructs_followed_by_a_single_space' => [
                'abstract', 'as', 'attribute', 'break', 'case', 'catch', 'class', 'clone', 'comment', 'const',
                'const_import', 'continue', 'do', 'echo', 'else', 'elseif', 'enum', 'extends', 'final', 'finally',
                'for', 'foreach', 'function', 'function_import', 'global', 'goto', 'if', 'implements', 'include',
                'include_once', 'instanceof', 'insteadof', 'interface', 'match', 'named_argument', 'namespace', 'new',
                'open_tag_with_echo', 'php_doc', 'php_open', 'print', 'private', 'protected', 'public', 'readonly',
                'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'use',
                'use_lambda', 'use_trait', 'var', 'while', 'yield', 'yield_from'
            ],
            'constructs_preceded_by_a_single_space' => ['as', 'use_lambda']
        ],

        // list notation
        'list_syntax' => [
            'syntax' => 'short'
        ],

        // namespace notation
        'blank_line_after_namespace' => true,
        'blank_lines_before_namespace' => [
            'max_line_breaks' => 2,
            'min_line_breaks' => 2
        ],
        'clean_namespace' => true,
        'no_leading_namespace_whitespace' => true,
        'no_homoglyph_names' => false,

        // operator
        'assign_null_coalescing_to_coalesce_equal' => true,
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => []
        ],
        'concat_space' => [
            'spacing' => 'none'
        ],
        'increment_style' => false,
        'logical_operators' => true,
        'long_to_shorthand_operator' => true,
        'new_with_parentheses' => [
            'anonymous_class' => false,
            'named_class' => false
        ],
        'no_space_around_double_colon' => true,
        'no_useless_concat_operator' => [
            'juggle_simple_strings' => false
        ],
        'no_useless_nullsafe_operator' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => [
            'only_booleans' => false,
            'position' => 'beginning'
        ],
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_elvis_operator' => true,
        'ternary_to_null_coalescing' => true,
        'unary_operator_spaces' => true,

        // PHP tag
        'blank_line_after_opening_tag' => false,
        'echo_tag_syntax' => [
            'format' => 'short',
            'long_function' => 'echo',
            'shorten_simple_statements_only' => false
        ],
        'full_opening_tag' => true,
        'linebreak_after_opening_tag' => false,
        'no_closing_tag' => true,

        // phpunit
        'php_unit_construct' => [
            'assertions' => ['assertEquals', 'assertNotEquals', 'assertNotSame', 'assertSame']
        ],
        'php_unit_data_provider_name' => [
            'prefix' => 'provide',
            'suffix' => 'Cases'
        ],
        'php_unit_data_provider_return_type' => true,
        'php_unit_data_provider_static' => [
            'force' => false
        ],
        'php_unit_dedicate_assert' => [
            'target' => 'newest'
        ],
        'php_unit_dedicate_assert_internal_type' => [
            'target' => 'newest'
        ],
        'php_unit_expectation' => [
            'target' => 'newest'
        ],
        'php_unit_fqcn_annotation' => true,
        'php_unit_internal_class' => [
            'types' => ['abstract', 'final', 'normal']
        ],
        'php_unit_method_casing' => [
            'case' => 'camel_case'
        ],
        'php_unit_mock' => [
            'target' => 'newest'
        ],
        'php_unit_mock_short_will_return' => true,
        'php_unit_namespaced' => [
            'target' => 'newest'
        ],
        'php_unit_no_expectation_annotation' => [
            'target' => 'newest',
            'use_class_const' => true
        ],
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_size_class' => [
            'group' => 'small'
        ],
        'php_unit_strict' => false,
        'php_unit_test_annotation' => [
            'style' => 'annotation'
        ],
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'static',
            'methods' => []
        ],
        'php_unit_test_class_requires_covers' => true,

        // phpdoc
        'align_multiline_comment' => [
            'comment_type' => 'phpdocs_like'
        ],
        'general_phpdoc_annotation_remove' => [
            'annotations' => [],
            'case_sensitive' => false
        ],
        'general_phpdoc_tag_rename' => [
            'case_sensitive' => false,
            'fix_annotation' => false,
            'fix_inline' => true,
            'replacements' => []
        ],
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_phpdoc' => true,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_align' => [
            'align' => 'left',
            'tags' => [
                'test', 'covers',  'method', 'property', 'property-read', 'property-write', 'phpstan-method',
                'phpstan-param', 'phpstan-property', 'phpstan-property-read', 'phpstan-property-write',
                'phpstan-assert', 'phpstan-assert-if-true', 'phpstan-assert-if-false',  'psalm-method', 'psalm-param',
                'psalm-param-out', 'psalm-property', 'psalm-property-read', 'psalm-property-write', 'psalm-assert',
                'psalm-assert-if-true', 'psalm-assert-if-false'
            ]
        ],
        'phpdoc_annotation_without_dot' => false,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => [
            'tags' => ['example', 'id', 'internal', 'inheritdoc', 'inheritdocs', 'link', 'source', 'toc', 'tutorial']
        ],
        'phpdoc_line_span' => [
            'const' => 'single',
            'method' => 'single',
            'property' => 'single'
        ],
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => false,
        'phpdoc_no_empty_return' => false,
        'phpdoc_no_package' => false,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order_by_value' => false,
        'phpdoc_order' => [
            'order' => [
                'title', 'description', 'since', 'author', 'copyright', 'license', 'category', 'package', 'subpackage',
                'version', 'inheritdoc', 'uses', 'template', 'example', 'method', 'property', 'property-read',
                'property-write', 'extends', 'implements', 'param', 'var', 'throws', 'return', 'global', 'see', 'link',
                'internal', 'api', 'deprecated', 'experimental', 'caution', 'warning', 'info', 'note', 'todo', 'fixme'
            ]
        ],
        'phpdoc_param_order' => true,
        'phpdoc_return_self_reference' => false,
        'phpdoc_scalar' => [
            'types' => ['boolean', 'callback', 'double', 'integer', 'real', 'str']
        ],
        'phpdoc_separation' => false,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => false,
        'phpdoc_tag_casing' => [
            'tags' => ['inheritDoc']
        ],
        'phpdoc_tag_type' => [
            'tags' => []
        ],
        'phpdoc_to_comment' => false,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => [
            'groups' => ['alias', 'meta', 'simple']
        ],
        'phpdoc_types_order' => [
            'case_sensitive' => false,
            'null_adjustment' => 'always_first'
        ],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,

        // semicolon
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'new_line_for_chained_calls'
        ],
        'no_empty_statement' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'semicolon_after_instruction' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => true
        ],

        // strict
        'declare_strict_types' => true,
        'strict_comparison' => false,
        'strict_param' => true,

        // string notation
        'escape_implicit_backslashes' => [
            'double_quoted' => true,
            'heredoc_syntax' => true,
            'single_quoted' => true
        ],
        'explicit_string_variable' => true,
        'heredoc_to_nowdoc' => false,
        'no_binary_string' => true,
        'no_trailing_whitespace_in_string' => true,
        'simple_to_complex_string_variable' => true,
        'single_quote' => true,
        'string_length_to_empty' => true,
        'string_line_ending' => true,

        // whitespace
        'array_indentation' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'break', 'case', 'continue', 'declare', 'default', 'do', 'exit', 'for', 'foreach', 'goto', 'if',
                'include', 'include_once', 'phpdoc', 'require', 'require_once', 'return', 'switch', 'throw', 'try',
                'while', 'yield', 'yield_from'
            ]
        ],
        'blank_line_between_import_groups' => true,
        'compact_nullable_type_declaration' => true,
        'heredoc_indentation' => [
            'indentation' => 'start_plus_one'
        ],
        'indentation_type' => true,
        'line_ending' => true,
        'method_chaining_indentation' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'attribute', 'break', 'case', 'continue', 'default', 'extra', 'parenthesis_brace_block',
                'square_brace_block', 'switch', 'throw', 'use', 'use_trait'
            ]
        ],
        'no_spaces_around_offset' => [
            'positions' => ['inside', 'outside']
        ],
        'no_trailing_whitespace' => true,
        'no_whitespace_in_blank_line' => true,
        'single_blank_line_at_eof' => false,
        'spaces_inside_parentheses' => [
            'space' => 'none'
        ],
        'statement_indentation' => true,
        'type_declaration_spaces' => [
            'elements' => ['function', 'property']
        ],
        'types_spaces' => [
            'space' => 'none',
            'space_multiple_catch' => null
        ]
    ])
    ->setFinder(Finder::create()
        ->in(__DIR__.'/src')
    );