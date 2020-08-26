<?php

/**
 * Retrieve support languages
 * @return array Hash of lang => language
 */
function mkaz_code_syntax_block_get_supported_languages() {
	
	$languages = array(
		"vim" => "vim",
	    "python" => "Python",
		"java" => "Java",
		"cpp" => "C++",
		"c" => "C-like",
		"json" => "JSON",
		"go" => "Go",
		"markdown" => "Markdown",
		"nginx" => "nginx",
		"docker" => "Docker",
		"apacheconf" => "Apache Config",
		"bash" => "Bash/Shell",
		"basic" => "BASIC",
		"csharp" => "C#",
		"css" => "CSS",
		"dart" => "Dart",
		"django" => "Django",
		"fsharp" => "F#",
		"graphql" => "GraphQL",
		"haskell" => "Haskell",
		"markup" => "HTML",
		"javascript" => "JavaScript",
		"kotlin" => "Kotlin",
		"lisp" => "Lisp",
		"markdown" => "Markdown",
		"matlab" => "MATLAB",
		"objectivec" => "Objective-C",
		"php" => "PHP",
		"powershell" => "PowerShell",
		"properties" => ".properties",
		"jsx" => "React JSX",
		"rest" => "reST (reStructuredText)",
		"ruby" => "Ruby",
		"sass" => "Sass",
		"sql" => "SQL",
		"svg" => "SVG",
		"swift" => "Swift",
		"toml" => "TOML",
		"typescript" => "TypeScript",
		"visual-basic" => "Visual Basic",
		"wasm" => "WebAssembly",
		"wiki" => "Wiki markup",
		"xml" => "XML",
		"yaml" => "YAML",
	);

	/**
	 * Filter the list of supported languages for the Syntax Highlighting colors.
	 * Use this filter to shorten or extend the language shown in the editor interface.
	 
	 * The array key must match a Prism's supported alias, the array value is a descriptive
	 * field. For languages and aliases see: https://prismjs.com/#supported-languages
	 *
	 * @since 1.1.0
	 *
	 * @param string $languages Array of languages supported
	 */
	return apply_filters( 'mkaz_code_syntax_language_list', $languages );
}
