<?php

/** Use filter in tables list
 * @link http://www.adminer.org/plugins/#use
 * @author Vlasta Neubauer, http://paranoiq.cz/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerSmartTablesFilter {

	function tablesPrint($tables) {
		?>
		<script type="text/javascript">

			var inputCache = '';
			var cursor = 0;
			function doAction(event, input) {
				input = input.split(new RegExp('[^A-Za-z0-9]+')).join('');
				if (input !== inputCache) {
					inputCache = input;
					filterTables(input);
				}

				console.log(event);
				// Up 38, Down 40, Enter 13
				if (event.keyCode !== 40 && event.keyCode !== 38 && event.keyCode !== 13) return;

				event.preventDefault();
				if (event.keyCode === 13) {
					var matches = getMatches(input);
					var tables = [];
					for (var k in matches) {
						tables.push(k);
					}
					if (cursor > tables.length) {
						cursor = 0;
					}
					var table = tables[cursor];
					console.log(table);
				}
			}

			function filterTables(input) {
				console.time('filter');
				if (input) {
					var matches = getMatches(input);
				}
				var tables = document.getElementById('tables').getElementsByTagName('span');
				//var rows = document.querySelectorAll('#content form table tbody tr');
				for (var i = tables.length; i--; ) {
					var a = tables[i].children[1];
					//var row = rows[i];
					var name = a.innerText || a.textContent;
					if (input) {
						var match = matches[name];
					}
					if (input && match === undefined) {
						//row.style.display = 'none';
						a.parentNode.style.display = 'none';
						a.innerHTML = name;
					} else {
						//row.style.display = 'table-row';
						a.parentNode.style.display = 'block';
						// temporary hack for "_" on beginning of name
						if (name.substr(0, 1) === '_') {
							match = '_' + match;
						}
						a.innerHTML = input ? match : name;
					}
				}
				console.timeEnd('filter');
			}

			/**
			 * Get highlighted names of tables, which match against some patterns combination.
			 * @return Object (string tableName => string highlightedMatch)
			 */
			function getMatches(input) {
				expandCache = []; // clean

				var tables = getTables();
				var patternVariants = getPatterns(input);
				var regexp = new RegExp('.*?' + input.split('').join('.*?') + '.*?');
				var filtered = {};
				Object.keys(tables).forEach(function (name) {
					if (!name.match(regexp)) return;
					var words = tables[name];
					var variants = expandPatterns(patternVariants, words.length);
					for (var i = 0; i < variants.length; i++) {
						var patterns = variants[i];
						if (patterns === undefined) continue;
						if (patterns.length > words.length) continue;
						var match = matchTableName(words, patterns);
						if (match === null) continue;
						filtered[name] = match;
					}
				});
				return filtered;
			}

			/**
			 * Match and highlight table name.
			 * @return String|null
			 */
			function matchTableName(words, patterns) {
				var parts = [];
				for (var j = 0; j < patterns.length; j++) {
					var pattern = patterns[j];
					if (pattern === undefined) continue;
					if (words[j].substr(0, pattern.length) !== pattern) return null;
					parts.push(words[j].replace(pattern, '<b>' + pattern + '</b>'));
				}
				parts = parts.concat(words.slice(j, 100));
				return parts.join('_');
			}

			var tableCache;
			/**
			 * Get table names from DOM. Cached.
			 * @return Object (String tableName => String[] tableNameWords)
			 */
			function getTables() {
				if (!tableCache) {
					tableCache = {};
					var tables = document.getElementById('tables').getElementsByTagName('span');
					for (var i = tables.length; i--; ) {
						var a = tables[i].children[1];
						var tableName = a.innerText || a.textContent;
						tableCache[tableName] = tableName.split('_').filter(function (s) { return s; });
					}
				}
				return tableCache;
			}

			var expandCache = [];
			/**
			 * Get expanded pattern variants. Cached.
			 * @return String[][]
			 */
			function expandPatterns(variants, limit) {
				if (expandCache[limit] === undefined) {
					expandCache[limit] = expand(variants, limit);
				}
				return expandCache[limit];
			}

			/**
			 * Get list of pattern combinations expanded with an empty strings to match number of words.
			 * Filters too long pattern lists.
			 * @return String[][]
			 */
			function expand(variants, limit) {
				var expanded = [];
				var shorties = [];
				variants.forEach(function (patterns) {
					if (patterns.length > limit) return;
					expanded.push(patterns);
					if (patterns.length === limit) return;
					var short = patterns.length + 1 < limit;
					for (var i = 0; i < patterns.length; i++) {
						if (patterns[i] === '') continue;
						var e = patterns.slice(0, i).concat(['']).concat(patterns.slice(i, 100));
						if (short) {
							shorties.push(e);
						} else {
							expanded.push(e);
						}
					}
				});
				if (shorties.length > 0) {
					expanded = expanded.concat(expand(shorties, limit));
				}
				return expanded;
			}

			/**
			 * Get all combinations substrings, a string can consist of.
			 * @return String[][]
			 */
			function getPatterns(input) {
				var variants = getFactors(input.length);
				var patterns = [];
				variants.forEach(function (factors) {
					var pat = [];
					var offset = 0;
					factors.forEach(function (factor) {
						pat.push(input.substr(offset, factor));
						offset = offset + factor;
					});
					patterns.push(pat);
				});
				return patterns;
			}

			var factorCache = [];
			/**
			 * Get all combinations of integers, an integer can be sum of.
			 * Ordered by product and cached.
			 * @return Integer[][]
			 */
			function getFactors(n) {
				if (factorCache[n] === undefined) {
					var variants = factorize(n);
					variants.sort(function (a, b) {
						var prodA = 1;
						var prodB = 1;
						a.forEach(function (n) { prodA = prodA * n; });
						b.forEach(function (n) { prodB = prodB * n; });
						if (prodA > prodB) return -1;
						if (prodA < prodB) return 1;
						return 0;
					});
					factorCache[n] = variants;
				}
				return factorCache[n];
			}

			/**
			 * Get all combinations of integers, an integer can be sum of.
			 * @return Integer[][]
			 */
			function factorize(n) {
				if (n == 1) {
					return [[1]];
				}
				var variants = [[n]];
				for (var f = n - 1; f > 0; f--) {
					var factors = factorize(n - f);
					factors.forEach(function (factor) {
						variants.push([f].concat(factor));
					});
				}
				return variants;
			}
		</script>
		<p class="jsonly"><input onkeyup="doAction(event, this.value);">
		<?php
		echo "<p id='tables'>\n";
		foreach ($tables as $table => $type) {
			echo '<span><a href="' . h(ME) . 'select=' . urlencode($table) . '"' . bold($_GET["select"] == $table) . ">" . lang('select') . "</a> ";
			echo '<a href="' . h(ME) . 'table=' . urlencode($table) . '"' . bold($_GET["table"] == $table) . ">" . h($table) . "</a><br></span>\n";
		}
		return true;
	}

}
