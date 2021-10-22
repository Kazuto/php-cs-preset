<?php

return [
    // Alias
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#alias
    'array_push'                                       => true,
    'backtick_to_shell_exec'                           => true,
    'ereg_to_preg'                                     => true,
    'mb_str_functions'                                 => false,
    'modernize_strpos'                                 => true,
    'no_alias_functions'                               => true,
    'no_alias_language_construct_call'                 => true,
    'no_mixed_echo_print'                              => [
        'use' => 'echo',
    ],
    'pow_to_exponentiation'                            => false,
    'random_api_migration'                             => ['replacements' => ['rand' => 'random_int']],
    'set_type_to_cast'                                 => true,

    // Array Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#array-notation
    'array_syntax'                                     => ['syntax' => 'short'],
    'no_multiline_whitespace_around_double_arrow'      => true,
    'no_trailing_comma_in_singleline_array'            => true,
    'no_whitespace_before_comma_in_array'              => true,
    'normalize_index_brace'                            => true,
    'trim_array_spaces'                                => true,
    'whitespace_after_comma_in_array'                  => true,

    // Basic
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#basic
    'braces'                                           => true,
    'encoding'                                         => true,
    'non_printable_character'                          => true,
    'octal_notation'                                   => true,
    'psr_autoloading'                                  => true,

    // Casing
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#casing
    'constant_case'                                    => [
        'case' => 'upper'
    ],
    'integer_literal_case'                             => true,
    'lowercase_keywords'                               => true,
    'lowercase_static_reference'                       => true,
    'magic_constant_casing'                            => true,
    'magic_method_casing'                              => true,
    'native_function_casing'                           => true,
    'native_function_type_declaration_casing'          => true,

    // Cast Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#cast-notation
    'cast_spaces'                                      => true,
    'lowercase_cast'                                   => true,
    'modernize_types_casting'                          => true,
    'no_short_bool_cast'                               => true,
    'no_unset_cast'                                    => true,
    'short_scalar_cast'                                => true,

    // Class Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#class-notation
    'class_attributes_separation'                      => [ // add const, property and trait_import
        'elements' => [
            'const'        => 'one',
            'method'       => 'one',
            'property'     => 'one',
            'trait_import' => 'one',
        ],
    ],
    'class_definition'                                 => [
        'multi_line_extends_each_single_line' => true,
        'single_item_single_line'             => true,
        'single_line'                         => true,
    ],
    'final_class'                                      => false,
    'final_internal_class'                             => false,
    'final_public_method_for_abstract_class'           => false,
    'no_blank_lines_after_class_opening'               => true,
    'no_null_property_initialization'                  => true,
    'no_php4_constructor'                              => true,
    'no_unneeded_final_method'                         => true,
    'ordered_class_elements'                           => false,
    'ordered_interfaces'                               => false,
    'ordered_traits'                                   => false,
    'protected_to_private'                             => true,
    'self_accessor'                                    => true,
    'self_static_accessor'                             => true,
    'single_class_element_per_statement'               => ['elements' => ['const', 'property']],
    'single_trait_insert_per_statement'                => true,
    'visibility_required'                              => [
        'elements' => ['property', 'method', 'const'],
    ],

    // Class Usage
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#class-usage
    'date_time_immutable'                              => false,

    // Comment
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#comment
    'comment_to_phpdoc'                                => false,
    'header_comment'                                   => false,
    'multiline_comment_opening_closing'                => true,
    'no_empty_comment'                                 => true,
    'no_trailing_whitespace_in_comment'                => true,
    'single_line_comment_style'                        => [
        'comment_types' => ['hash'],
    ],

    // Constant Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#constant-notation
    'native_constant_invocation'                       => false,

    // Control Structure
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#control-structure
    'control_structure_continuation_position'          => ['position' => 'same_line'],
    'elseif'                                           => true,
    'empty_loop_body'                                  => ['style' => 'semicolon'],
    'empty_loop_condition'                             => ['style' => 'while'],
    'include'                                          => true,
    'no_alternative_syntax'                            => true,
    'no_break_comment'                                 => ['comment_text' => 'no break'],
    'no_superfluous_elseif'                            => true,
    'no_trailing_comma_in_list_call'                   => true,
    'no_unneeded_control_parentheses'                  => [
        'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
    ],
    'no_unneeded_curly_braces'                         => ['namespaces' => true],
    'no_useless_else'                                  => true,
    'simplified_if_return'                             => true,
    'switch_case_semicolon_to_colon'                   => true,
    'switch_case_space'                                => true,
    'switch_continue_to_break'                         => true,
    'trailing_comma_in_multiline'                      => ['elements' => ['arrays', 'arguments', 'parameters']],
    'yoda_style'                                       => false,

    // Doctrine Annotation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#doctrine-annotation

    // Function Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#function-notation
    'combine_nested_dirname'                           => true,
    'fopen_flag_order'                                 => true,
    'fopen_flags'                                      => ['b_mode' => false],
    'function_declaration'                             => true,
    'function_typehint_space'                          => true,
    'implode_call'                                     => true,
    'lambda_not_used_import'                           => true,
    'method_argument_space'                            => true,
    'native_function_invocation'                       => false,
    'no_spaces_after_function_name'                    => true,
    'no_unreachable_default_argument_value'            => true,
    'no_useless_sprintf'                               => true,
    'nullable_type_declaration_for_default_null_value' => true,
    'phpdoc_to_param_type'                             => true,
    'phpdoc_to_property_type'                          => true,
    'phpdoc_to_return_type'                            => true,
    'regular_callable_call'                            => true,
    'return_type_declaration'                          => ['space_before' => 'none'],
    'single_line_throw'                                => true,
    'static_lambda'                                    => false,
    'use_arrow_functions'                              => false,
    'void_return'                                      => true,

    // Import
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#import
    'fully_qualified_strict_types'                     => true,
    'global_namespace_import'                          => [
        'import_classes'   => true,
        'import_constants' => true,
        'import_functions' => true,
    ],
    'group_import'                                     => false,
    'no_leading_import_slash'                          => true,
    'no_unused_imports'                                => true,
    'ordered_imports'                                  => ['sort_algorithm' => 'alpha'],
    'single_import_per_statement'                      => true,
    'single_line_after_imports'                        => true,

    // Language Construct
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#language-construct
    'combine_consecutive_issets'                       => true,
    'combine_consecutive_unsets'                       => true,
    'declare_equal_normalize'                          => true,
    'declare_parentheses'                              => true,
    'dir_constant'                                     => true,
    'error_suppression'                                => false,
    'explicit_indirect_variable'                       => true,
    'function_to_constant'                             => true,
    'is_null'                                          => true,
    'no_unset_on_property'                             => false,
    'single_space_after_construct'                     => true,

    // List Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#list-notation
    'list_syntax'                                      => ['syntax' => 'short'],

    // Namespace Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#namespace-notation
    'blank_line_after_namespace'                       => true,
    'clean_namespace'                                  => true,
    'no_blank_lines_before_namespace'                  => false,
    'no_leading_namespace_whitespace'                  => true,
    'single_blank_line_before_namespace'               => true,

    // Naming
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#naming
    'no_homoglyph_names'                               => false,

    // Operator
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#operator
    'assign_null_coalescing_to_coalesce_equal'         => false,
    'binary_operator_spaces'                           => [
        'default'   => 'single_space',
        'operators' => ['=>' => null],
    ],
    'concat_space'                                     => ['spacing' => 'none'],
    'increment_style'                                  => ['style' => 'post'],
    'logical_operators'                                => true,
    'new_with_braces'                                  => false,
    'no_space_around_double_colon'                     => true,
    'not_operator_with_space'                          => false,
    'not_operator_with_successor_space'                => true,
    'object_operator_without_whitespace'               => true,
    'operator_linebreak'                               => ['position' => 'beginning'],
    'standardize_increment'                            => false,
    'standardize_not_equals'                           => true,
    'ternary_operator_spaces'                          => true,
    'ternary_to_elvis_operator'                        => true,
    'ternary_to_null_coalescing'                       => true,
    'unary_operator_spaces'                            => true,

    // PHP Tag
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#php-tag
    'blank_line_after_opening_tag'                     => true,
    'echo_tag_syntax'                                  => ['format' => 'long'],
    'full_opening_tag'                                 => true,
    'linebreak_after_opening_tag'                      => true,
    'no_closing_tag'                                   => true,

    // PHPUnit
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#phpunit

    // PHPDoc
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#phpdoc
    'align_multiline_comment'                          => ['comment_type' => 'phpdocs_only'],
    'general_phpdoc_annotation_remove'                 => ['annotations' => []],
    'general_phpdoc_tag_rename'                        => true,
    'no_blank_lines_after_phpdoc'                      => true,
    'no_empty_phpdoc'                                  => true,
    'no_superfluous_phpdoc_tags'                       => true,
    'phpdoc_add_missing_param_annotation'              => true,
    'phpdoc_align'                                     => ['align' => 'vertical'],
    'phpdoc_annotation_without_dot'                    => true,
    'phpdoc_indent'                                    => true,
    'phpdoc_inline_tag_normalizer'                     => true,
    'phpdoc_line_span'                                 => [
        'const'    => 'single',
        'property' => 'single',
        'method'   => 'multi',
    ],
    'phpdoc_no_access'                                 => true,
    'phpdoc_no_alias_tag'                              => [
        'replacements' => [
            'property-read'  => 'property',
            'property-write' => 'property',
            'type'           => 'var',
            'link'           => 'see'
        ]
    ],
    'phpdoc_no_empty_return'                           => true,
    'phpdoc_no_package'                                => true,
    'phpdoc_no_useless_inheritdoc'                     => true,
    'phpdoc_order_by_value'                            => ['annotations' => ['covers']],
    'phpdoc_return_self_reference'                     => [
        'replacements' => [
            'this'    => '$this',
            '@this'   => '$this',
            '$self'   => 'self',
            '@self'   => 'self',
            '$static' => 'static',
            '@static' => 'static'
        ]
    ],
    'phpdoc_scalar'                                    => true,
    'phpdoc_separation'                                => true,
    'phpdoc_single_line_var_spacing'                   => true,
    'phpdoc_summary'                                   => true,
    'phpdoc_tag_casing'                                => ['tags' => ['inheritDoc']],
    'phpdoc_tag_type'                                  => true,
    'phpdoc_to_comment'                                => true,
    'phpdoc_trim_consecutive_blank_line_separation'    => true,
    'phpdoc_trim'                                      => true,
    'phpdoc_types'                                     => true,
    'phpdoc_types_order'                               => [
        'sort_algorithm'  => 'none',
        'null_adjustment' => 'always_last'
    ],
    'phpdoc_var_annotation_correct_order'              => true,
    'phpdoc_var_without_name'                          => true,

    // Return Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#return-notation
    'no_useless_return'                                => true,
    'return_assignment'                                => true,
    'simplified_null_return'                           => true,

    // Semicolon
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#semicolon
    'multiline_whitespace_before_semicolons'           => [
        'strategy' => 'no_multi_line',
    ],
    'no_empty_statement'                               => true,
    'no_singleline_whitespace_before_semicolons'       => true,
    'semicolon_after_instruction'                      => true,
    'space_after_semicolon'                            => true,

    // Strict
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#strict
    'declare_strict_types'                             => true,
    'strict_comparison'                                => true,
    'strict_param'                                     => true,

    // String Notation
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#string-notation
    'escape_implicit_backslashes'                      => true,
    'explicit_string_variable'                         => true,
    'heredoc_to_nowdoc'                                => true,
    'no_binary_string'                                 => true,
    'no_trailing_whitespace_in_string'                 => false,
    'simple_to_complex_string_variable'                => true,
    'single_quote'                                     => true,
    'string_length_to_empty'                           => true,
    'string_line_ending'                               => false,

    // Whitespace
    // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/master/doc/rules/index.rst#whitespace
    'array_indentation'                                => true,
    'blank_line_before_statement'                      => [
        'statements' => [
            'break',
            'continue',
            'declare',
            'return',
            'throw',
            'try'
        ]
    ],
    'compact_nullable_typehint'                        => true,
    'heredoc_indentation'                              => ['indentation' => 'start_plus_one'],
    'indentation_type'                                 => true,
    'line_ending'                                      => true,
    'method_chaining_indentation'                      => true,
    'no_extra_blank_lines'                             => [
        'tokens' => [
            'extra',
            'throw',
            'use',
            'use_trait',
        ],
    ],
    'no_spaces_around_offset'                          => [
        'positions' => ['inside', 'outside'],
    ],
    'no_spaces_inside_parenthesis'                     => true,
    'no_trailing_whitespace'                           => true,
    'no_whitespace_in_blank_line'                      => true,
    'single_blank_line_at_eof'                         => true,
    'types_spaces'                                     => ['space' => 'none'],


];
