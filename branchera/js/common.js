/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	//vender
	__webpack_require__(1);
	__webpack_require__(5);

	window.smoothScroll = __webpack_require__(7);
	window.sliderPro = __webpack_require__(8);

	//common
	__webpack_require__(9);
	__webpack_require__(10);
	__webpack_require__(11);
	__webpack_require__(12);
	__webpack_require__(13);
	__webpack_require__(17);
	__webpack_require__(18);
	__webpack_require__(19);
	__webpack_require__(20);

	//home
	__webpack_require__(22);
	__webpack_require__(23);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(global) {module.exports = global["$"] = __webpack_require__(2);
	/* WEBPACK VAR INJECTION */}.call(exports, (function() { return this; }())))

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(global) {module.exports = global["jQuery"] = __webpack_require__(3);
	/* WEBPACK VAR INJECTION */}.call(exports, (function() { return this; }())))

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(global) {if(!global["window"]) global["window"] = {};
	module.exports = global["window"]["jQuery"] = __webpack_require__(4);
	/* WEBPACK VAR INJECTION */}.call(exports, (function() { return this; }())))

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

	var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
	 * jQuery JavaScript Library v2.2.4
	 * http://jquery.com/
	 *
	 * Includes Sizzle.js
	 * http://sizzlejs.com/
	 *
	 * Copyright jQuery Foundation and other contributors
	 * Released under the MIT license
	 * http://jquery.org/license
	 *
	 * Date: 2016-05-20T17:23Z
	 */

	(function( global, factory ) {

		if ( typeof module === "object" && typeof module.exports === "object" ) {
			// For CommonJS and CommonJS-like environments where a proper `window`
			// is present, execute the factory and get jQuery.
			// For environments that do not have a `window` with a `document`
			// (such as Node.js), expose a factory as module.exports.
			// This accentuates the need for the creation of a real `window`.
			// e.g. var jQuery = require("jquery")(window);
			// See ticket #14549 for more info.
			module.exports = global.document ?
				factory( global, true ) :
				function( w ) {
					if ( !w.document ) {
						throw new Error( "jQuery requires a window with a document" );
					}
					return factory( w );
				};
		} else {
			factory( global );
		}

	// Pass this if window is not defined yet
	}(typeof window !== "undefined" ? window : this, function( window, noGlobal ) {

	// Support: Firefox 18+
	// Can't be in strict mode, several libs including ASP.NET trace
	// the stack via arguments.caller.callee and Firefox dies if
	// you try to trace through "use strict" call chains. (#13335)
	//"use strict";
	var arr = [];

	var document = window.document;

	var slice = arr.slice;

	var concat = arr.concat;

	var push = arr.push;

	var indexOf = arr.indexOf;

	var class2type = {};

	var toString = class2type.toString;

	var hasOwn = class2type.hasOwnProperty;

	var support = {};



	var
		version = "2.2.4",

		// Define a local copy of jQuery
		jQuery = function( selector, context ) {

			// The jQuery object is actually just the init constructor 'enhanced'
			// Need init if jQuery is called (just allow error to be thrown if not included)
			return new jQuery.fn.init( selector, context );
		},

		// Support: Android<4.1
		// Make sure we trim BOM and NBSP
		rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,

		// Matches dashed string for camelizing
		rmsPrefix = /^-ms-/,
		rdashAlpha = /-([\da-z])/gi,

		// Used by jQuery.camelCase as callback to replace()
		fcamelCase = function( all, letter ) {
			return letter.toUpperCase();
		};

	jQuery.fn = jQuery.prototype = {

		// The current version of jQuery being used
		jquery: version,

		constructor: jQuery,

		// Start with an empty selector
		selector: "",

		// The default length of a jQuery object is 0
		length: 0,

		toArray: function() {
			return slice.call( this );
		},

		// Get the Nth element in the matched element set OR
		// Get the whole matched element set as a clean array
		get: function( num ) {
			return num != null ?

				// Return just the one element from the set
				( num < 0 ? this[ num + this.length ] : this[ num ] ) :

				// Return all the elements in a clean array
				slice.call( this );
		},

		// Take an array of elements and push it onto the stack
		// (returning the new matched element set)
		pushStack: function( elems ) {

			// Build a new jQuery matched element set
			var ret = jQuery.merge( this.constructor(), elems );

			// Add the old object onto the stack (as a reference)
			ret.prevObject = this;
			ret.context = this.context;

			// Return the newly-formed element set
			return ret;
		},

		// Execute a callback for every element in the matched set.
		each: function( callback ) {
			return jQuery.each( this, callback );
		},

		map: function( callback ) {
			return this.pushStack( jQuery.map( this, function( elem, i ) {
				return callback.call( elem, i, elem );
			} ) );
		},

		slice: function() {
			return this.pushStack( slice.apply( this, arguments ) );
		},

		first: function() {
			return this.eq( 0 );
		},

		last: function() {
			return this.eq( -1 );
		},

		eq: function( i ) {
			var len = this.length,
				j = +i + ( i < 0 ? len : 0 );
			return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
		},

		end: function() {
			return this.prevObject || this.constructor();
		},

		// For internal use only.
		// Behaves like an Array's method, not like a jQuery method.
		push: push,
		sort: arr.sort,
		splice: arr.splice
	};

	jQuery.extend = jQuery.fn.extend = function() {
		var options, name, src, copy, copyIsArray, clone,
			target = arguments[ 0 ] || {},
			i = 1,
			length = arguments.length,
			deep = false;

		// Handle a deep copy situation
		if ( typeof target === "boolean" ) {
			deep = target;

			// Skip the boolean and the target
			target = arguments[ i ] || {};
			i++;
		}

		// Handle case when target is a string or something (possible in deep copy)
		if ( typeof target !== "object" && !jQuery.isFunction( target ) ) {
			target = {};
		}

		// Extend jQuery itself if only one argument is passed
		if ( i === length ) {
			target = this;
			i--;
		}

		for ( ; i < length; i++ ) {

			// Only deal with non-null/undefined values
			if ( ( options = arguments[ i ] ) != null ) {

				// Extend the base object
				for ( name in options ) {
					src = target[ name ];
					copy = options[ name ];

					// Prevent never-ending loop
					if ( target === copy ) {
						continue;
					}

					// Recurse if we're merging plain objects or arrays
					if ( deep && copy && ( jQuery.isPlainObject( copy ) ||
						( copyIsArray = jQuery.isArray( copy ) ) ) ) {

						if ( copyIsArray ) {
							copyIsArray = false;
							clone = src && jQuery.isArray( src ) ? src : [];

						} else {
							clone = src && jQuery.isPlainObject( src ) ? src : {};
						}

						// Never move original objects, clone them
						target[ name ] = jQuery.extend( deep, clone, copy );

					// Don't bring in undefined values
					} else if ( copy !== undefined ) {
						target[ name ] = copy;
					}
				}
			}
		}

		// Return the modified object
		return target;
	};

	jQuery.extend( {

		// Unique for each copy of jQuery on the page
		expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),

		// Assume jQuery is ready without the ready module
		isReady: true,

		error: function( msg ) {
			throw new Error( msg );
		},

		noop: function() {},

		isFunction: function( obj ) {
			return jQuery.type( obj ) === "function";
		},

		isArray: Array.isArray,

		isWindow: function( obj ) {
			return obj != null && obj === obj.window;
		},

		isNumeric: function( obj ) {

			// parseFloat NaNs numeric-cast false positives (null|true|false|"")
			// ...but misinterprets leading-number strings, particularly hex literals ("0x...")
			// subtraction forces infinities to NaN
			// adding 1 corrects loss of precision from parseFloat (#15100)
			var realStringObj = obj && obj.toString();
			return !jQuery.isArray( obj ) && ( realStringObj - parseFloat( realStringObj ) + 1 ) >= 0;
		},

		isPlainObject: function( obj ) {
			var key;

			// Not plain objects:
			// - Any object or value whose internal [[Class]] property is not "[object Object]"
			// - DOM nodes
			// - window
			if ( jQuery.type( obj ) !== "object" || obj.nodeType || jQuery.isWindow( obj ) ) {
				return false;
			}

			// Not own constructor property must be Object
			if ( obj.constructor &&
					!hasOwn.call( obj, "constructor" ) &&
					!hasOwn.call( obj.constructor.prototype || {}, "isPrototypeOf" ) ) {
				return false;
			}

			// Own properties are enumerated firstly, so to speed up,
			// if last one is own, then all properties are own
			for ( key in obj ) {}

			return key === undefined || hasOwn.call( obj, key );
		},

		isEmptyObject: function( obj ) {
			var name;
			for ( name in obj ) {
				return false;
			}
			return true;
		},

		type: function( obj ) {
			if ( obj == null ) {
				return obj + "";
			}

			// Support: Android<4.0, iOS<6 (functionish RegExp)
			return typeof obj === "object" || typeof obj === "function" ?
				class2type[ toString.call( obj ) ] || "object" :
				typeof obj;
		},

		// Evaluates a script in a global context
		globalEval: function( code ) {
			var script,
				indirect = eval;

			code = jQuery.trim( code );

			if ( code ) {

				// If the code includes a valid, prologue position
				// strict mode pragma, execute code by injecting a
				// script tag into the document.
				if ( code.indexOf( "use strict" ) === 1 ) {
					script = document.createElement( "script" );
					script.text = code;
					document.head.appendChild( script ).parentNode.removeChild( script );
				} else {

					// Otherwise, avoid the DOM node creation, insertion
					// and removal by using an indirect global eval

					indirect( code );
				}
			}
		},

		// Convert dashed to camelCase; used by the css and data modules
		// Support: IE9-11+
		// Microsoft forgot to hump their vendor prefix (#9572)
		camelCase: function( string ) {
			return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
		},

		nodeName: function( elem, name ) {
			return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
		},

		each: function( obj, callback ) {
			var length, i = 0;

			if ( isArrayLike( obj ) ) {
				length = obj.length;
				for ( ; i < length; i++ ) {
					if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
						break;
					}
				}
			} else {
				for ( i in obj ) {
					if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
						break;
					}
				}
			}

			return obj;
		},

		// Support: Android<4.1
		trim: function( text ) {
			return text == null ?
				"" :
				( text + "" ).replace( rtrim, "" );
		},

		// results is for internal usage only
		makeArray: function( arr, results ) {
			var ret = results || [];

			if ( arr != null ) {
				if ( isArrayLike( Object( arr ) ) ) {
					jQuery.merge( ret,
						typeof arr === "string" ?
						[ arr ] : arr
					);
				} else {
					push.call( ret, arr );
				}
			}

			return ret;
		},

		inArray: function( elem, arr, i ) {
			return arr == null ? -1 : indexOf.call( arr, elem, i );
		},

		merge: function( first, second ) {
			var len = +second.length,
				j = 0,
				i = first.length;

			for ( ; j < len; j++ ) {
				first[ i++ ] = second[ j ];
			}

			first.length = i;

			return first;
		},

		grep: function( elems, callback, invert ) {
			var callbackInverse,
				matches = [],
				i = 0,
				length = elems.length,
				callbackExpect = !invert;

			// Go through the array, only saving the items
			// that pass the validator function
			for ( ; i < length; i++ ) {
				callbackInverse = !callback( elems[ i ], i );
				if ( callbackInverse !== callbackExpect ) {
					matches.push( elems[ i ] );
				}
			}

			return matches;
		},

		// arg is for internal usage only
		map: function( elems, callback, arg ) {
			var length, value,
				i = 0,
				ret = [];

			// Go through the array, translating each of the items to their new values
			if ( isArrayLike( elems ) ) {
				length = elems.length;
				for ( ; i < length; i++ ) {
					value = callback( elems[ i ], i, arg );

					if ( value != null ) {
						ret.push( value );
					}
				}

			// Go through every key on the object,
			} else {
				for ( i in elems ) {
					value = callback( elems[ i ], i, arg );

					if ( value != null ) {
						ret.push( value );
					}
				}
			}

			// Flatten any nested arrays
			return concat.apply( [], ret );
		},

		// A global GUID counter for objects
		guid: 1,

		// Bind a function to a context, optionally partially applying any
		// arguments.
		proxy: function( fn, context ) {
			var tmp, args, proxy;

			if ( typeof context === "string" ) {
				tmp = fn[ context ];
				context = fn;
				fn = tmp;
			}

			// Quick check to determine if target is callable, in the spec
			// this throws a TypeError, but we will just return undefined.
			if ( !jQuery.isFunction( fn ) ) {
				return undefined;
			}

			// Simulated bind
			args = slice.call( arguments, 2 );
			proxy = function() {
				return fn.apply( context || this, args.concat( slice.call( arguments ) ) );
			};

			// Set the guid of unique handler to the same of original handler, so it can be removed
			proxy.guid = fn.guid = fn.guid || jQuery.guid++;

			return proxy;
		},

		now: Date.now,

		// jQuery.support is not used in Core but other projects attach their
		// properties to it so it needs to exist.
		support: support
	} );

	// JSHint would error on this code due to the Symbol not being defined in ES5.
	// Defining this global in .jshintrc would create a danger of using the global
	// unguarded in another place, it seems safer to just disable JSHint for these
	// three lines.
	/* jshint ignore: start */
	if ( typeof Symbol === "function" ) {
		jQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
	}
	/* jshint ignore: end */

	// Populate the class2type map
	jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),
	function( i, name ) {
		class2type[ "[object " + name + "]" ] = name.toLowerCase();
	} );

	function isArrayLike( obj ) {

		// Support: iOS 8.2 (not reproducible in simulator)
		// `in` check used to prevent JIT error (gh-2145)
		// hasOwn isn't used here due to false negatives
		// regarding Nodelist length in IE
		var length = !!obj && "length" in obj && obj.length,
			type = jQuery.type( obj );

		if ( type === "function" || jQuery.isWindow( obj ) ) {
			return false;
		}

		return type === "array" || length === 0 ||
			typeof length === "number" && length > 0 && ( length - 1 ) in obj;
	}
	var Sizzle =
	/*!
	 * Sizzle CSS Selector Engine v2.2.1
	 * http://sizzlejs.com/
	 *
	 * Copyright jQuery Foundation and other contributors
	 * Released under the MIT license
	 * http://jquery.org/license
	 *
	 * Date: 2015-10-17
	 */
	(function( window ) {

	var i,
		support,
		Expr,
		getText,
		isXML,
		tokenize,
		compile,
		select,
		outermostContext,
		sortInput,
		hasDuplicate,

		// Local document vars
		setDocument,
		document,
		docElem,
		documentIsHTML,
		rbuggyQSA,
		rbuggyMatches,
		matches,
		contains,

		// Instance-specific data
		expando = "sizzle" + 1 * new Date(),
		preferredDoc = window.document,
		dirruns = 0,
		done = 0,
		classCache = createCache(),
		tokenCache = createCache(),
		compilerCache = createCache(),
		sortOrder = function( a, b ) {
			if ( a === b ) {
				hasDuplicate = true;
			}
			return 0;
		},

		// General-purpose constants
		MAX_NEGATIVE = 1 << 31,

		// Instance methods
		hasOwn = ({}).hasOwnProperty,
		arr = [],
		pop = arr.pop,
		push_native = arr.push,
		push = arr.push,
		slice = arr.slice,
		// Use a stripped-down indexOf as it's faster than native
		// http://jsperf.com/thor-indexof-vs-for/5
		indexOf = function( list, elem ) {
			var i = 0,
				len = list.length;
			for ( ; i < len; i++ ) {
				if ( list[i] === elem ) {
					return i;
				}
			}
			return -1;
		},

		booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",

		// Regular expressions

		// http://www.w3.org/TR/css3-selectors/#whitespace
		whitespace = "[\\x20\\t\\r\\n\\f]",

		// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
		identifier = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",

		// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
		attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +
			// Operator (capture 2)
			"*([*^$|!~]?=)" + whitespace +
			// "Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]"
			"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" + whitespace +
			"*\\]",

		pseudos = ":(" + identifier + ")(?:\\((" +
			// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
			// 1. quoted (capture 3; capture 4 or capture 5)
			"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +
			// 2. simple (capture 6)
			"((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +
			// 3. anything else (capture 2)
			".*" +
			")\\)|)",

		// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
		rwhitespace = new RegExp( whitespace + "+", "g" ),
		rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g" ),

		rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
		rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace + "*" ),

		rattributeQuotes = new RegExp( "=" + whitespace + "*([^\\]'\"]*?)" + whitespace + "*\\]", "g" ),

		rpseudo = new RegExp( pseudos ),
		ridentifier = new RegExp( "^" + identifier + "$" ),

		matchExpr = {
			"ID": new RegExp( "^#(" + identifier + ")" ),
			"CLASS": new RegExp( "^\\.(" + identifier + ")" ),
			"TAG": new RegExp( "^(" + identifier + "|[*])" ),
			"ATTR": new RegExp( "^" + attributes ),
			"PSEUDO": new RegExp( "^" + pseudos ),
			"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace +
				"*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace +
				"*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
			"bool": new RegExp( "^(?:" + booleans + ")$", "i" ),
			// For use in libraries implementing .is()
			// We use this for POS matching in `select`
			"needsContext": new RegExp( "^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
				whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
		},

		rinputs = /^(?:input|select|textarea|button)$/i,
		rheader = /^h\d$/i,

		rnative = /^[^{]+\{\s*\[native \w/,

		// Easily-parseable/retrievable ID or TAG or CLASS selectors
		rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

		rsibling = /[+~]/,
		rescape = /'|\\/g,

		// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
		runescape = new RegExp( "\\\\([\\da-f]{1,6}" + whitespace + "?|(" + whitespace + ")|.)", "ig" ),
		funescape = function( _, escaped, escapedWhitespace ) {
			var high = "0x" + escaped - 0x10000;
			// NaN means non-codepoint
			// Support: Firefox<24
			// Workaround erroneous numeric interpretation of +"0x"
			return high !== high || escapedWhitespace ?
				escaped :
				high < 0 ?
					// BMP codepoint
					String.fromCharCode( high + 0x10000 ) :
					// Supplemental Plane codepoint (surrogate pair)
					String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
		},

		// Used for iframes
		// See setDocument()
		// Removing the function wrapper causes a "Permission Denied"
		// error in IE
		unloadHandler = function() {
			setDocument();
		};

	// Optimize for push.apply( _, NodeList )
	try {
		push.apply(
			(arr = slice.call( preferredDoc.childNodes )),
			preferredDoc.childNodes
		);
		// Support: Android<4.0
		// Detect silently failing push.apply
		arr[ preferredDoc.childNodes.length ].nodeType;
	} catch ( e ) {
		push = { apply: arr.length ?

			// Leverage slice if possible
			function( target, els ) {
				push_native.apply( target, slice.call(els) );
			} :

			// Support: IE<9
			// Otherwise append directly
			function( target, els ) {
				var j = target.length,
					i = 0;
				// Can't trust NodeList.length
				while ( (target[j++] = els[i++]) ) {}
				target.length = j - 1;
			}
		};
	}

	function Sizzle( selector, context, results, seed ) {
		var m, i, elem, nid, nidselect, match, groups, newSelector,
			newContext = context && context.ownerDocument,

			// nodeType defaults to 9, since context defaults to document
			nodeType = context ? context.nodeType : 9;

		results = results || [];

		// Return early from calls with invalid selector or context
		if ( typeof selector !== "string" || !selector ||
			nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

			return results;
		}

		// Try to shortcut find operations (as opposed to filters) in HTML documents
		if ( !seed ) {

			if ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
				setDocument( context );
			}
			context = context || document;

			if ( documentIsHTML ) {

				// If the selector is sufficiently simple, try using a "get*By*" DOM method
				// (excepting DocumentFragment context, where the methods don't exist)
				if ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

					// ID selector
					if ( (m = match[1]) ) {

						// Document context
						if ( nodeType === 9 ) {
							if ( (elem = context.getElementById( m )) ) {

								// Support: IE, Opera, Webkit
								// TODO: identify versions
								// getElementById can match elements by name instead of ID
								if ( elem.id === m ) {
									results.push( elem );
									return results;
								}
							} else {
								return results;
							}

						// Element context
						} else {

							// Support: IE, Opera, Webkit
							// TODO: identify versions
							// getElementById can match elements by name instead of ID
							if ( newContext && (elem = newContext.getElementById( m )) &&
								contains( context, elem ) &&
								elem.id === m ) {

								results.push( elem );
								return results;
							}
						}

					// Type selector
					} else if ( match[2] ) {
						push.apply( results, context.getElementsByTagName( selector ) );
						return results;

					// Class selector
					} else if ( (m = match[3]) && support.getElementsByClassName &&
						context.getElementsByClassName ) {

						push.apply( results, context.getElementsByClassName( m ) );
						return results;
					}
				}

				// Take advantage of querySelectorAll
				if ( support.qsa &&
					!compilerCache[ selector + " " ] &&
					(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {

					if ( nodeType !== 1 ) {
						newContext = context;
						newSelector = selector;

					// qSA looks outside Element context, which is not what we want
					// Thanks to Andrew Dupont for this workaround technique
					// Support: IE <=8
					// Exclude object elements
					} else if ( context.nodeName.toLowerCase() !== "object" ) {

						// Capture the context ID, setting it first if necessary
						if ( (nid = context.getAttribute( "id" )) ) {
							nid = nid.replace( rescape, "\\$&" );
						} else {
							context.setAttribute( "id", (nid = expando) );
						}

						// Prefix every selector in the list
						groups = tokenize( selector );
						i = groups.length;
						nidselect = ridentifier.test( nid ) ? "#" + nid : "[id='" + nid + "']";
						while ( i-- ) {
							groups[i] = nidselect + " " + toSelector( groups[i] );
						}
						newSelector = groups.join( "," );

						// Expand context for sibling selectors
						newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
							context;
					}

					if ( newSelector ) {
						try {
							push.apply( results,
								newContext.querySelectorAll( newSelector )
							);
							return results;
						} catch ( qsaError ) {
						} finally {
							if ( nid === expando ) {
								context.removeAttribute( "id" );
							}
						}
					}
				}
			}
		}

		// All others
		return select( selector.replace( rtrim, "$1" ), context, results, seed );
	}

	/**
	 * Create key-value caches of limited size
	 * @returns {function(string, object)} Returns the Object data after storing it on itself with
	 *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
	 *	deleting the oldest entry
	 */
	function createCache() {
		var keys = [];

		function cache( key, value ) {
			// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
			if ( keys.push( key + " " ) > Expr.cacheLength ) {
				// Only keep the most recent entries
				delete cache[ keys.shift() ];
			}
			return (cache[ key + " " ] = value);
		}
		return cache;
	}

	/**
	 * Mark a function for special use by Sizzle
	 * @param {Function} fn The function to mark
	 */
	function markFunction( fn ) {
		fn[ expando ] = true;
		return fn;
	}

	/**
	 * Support testing using an element
	 * @param {Function} fn Passed the created div and expects a boolean result
	 */
	function assert( fn ) {
		var div = document.createElement("div");

		try {
			return !!fn( div );
		} catch (e) {
			return false;
		} finally {
			// Remove from its parent by default
			if ( div.parentNode ) {
				div.parentNode.removeChild( div );
			}
			// release memory in IE
			div = null;
		}
	}

	/**
	 * Adds the same handler for all of the specified attrs
	 * @param {String} attrs Pipe-separated list of attributes
	 * @param {Function} handler The method that will be applied
	 */
	function addHandle( attrs, handler ) {
		var arr = attrs.split("|"),
			i = arr.length;

		while ( i-- ) {
			Expr.attrHandle[ arr[i] ] = handler;
		}
	}

	/**
	 * Checks document order of two siblings
	 * @param {Element} a
	 * @param {Element} b
	 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
	 */
	function siblingCheck( a, b ) {
		var cur = b && a,
			diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
				( ~b.sourceIndex || MAX_NEGATIVE ) -
				( ~a.sourceIndex || MAX_NEGATIVE );

		// Use IE sourceIndex if available on both nodes
		if ( diff ) {
			return diff;
		}

		// Check if b follows a
		if ( cur ) {
			while ( (cur = cur.nextSibling) ) {
				if ( cur === b ) {
					return -1;
				}
			}
		}

		return a ? 1 : -1;
	}

	/**
	 * Returns a function to use in pseudos for input types
	 * @param {String} type
	 */
	function createInputPseudo( type ) {
		return function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return name === "input" && elem.type === type;
		};
	}

	/**
	 * Returns a function to use in pseudos for buttons
	 * @param {String} type
	 */
	function createButtonPseudo( type ) {
		return function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return (name === "input" || name === "button") && elem.type === type;
		};
	}

	/**
	 * Returns a function to use in pseudos for positionals
	 * @param {Function} fn
	 */
	function createPositionalPseudo( fn ) {
		return markFunction(function( argument ) {
			argument = +argument;
			return markFunction(function( seed, matches ) {
				var j,
					matchIndexes = fn( [], seed.length, argument ),
					i = matchIndexes.length;

				// Match elements found at the specified indexes
				while ( i-- ) {
					if ( seed[ (j = matchIndexes[i]) ] ) {
						seed[j] = !(matches[j] = seed[j]);
					}
				}
			});
		});
	}

	/**
	 * Checks a node for validity as a Sizzle context
	 * @param {Element|Object=} context
	 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
	 */
	function testContext( context ) {
		return context && typeof context.getElementsByTagName !== "undefined" && context;
	}

	// Expose support vars for convenience
	support = Sizzle.support = {};

	/**
	 * Detects XML nodes
	 * @param {Element|Object} elem An element or a document
	 * @returns {Boolean} True iff elem is a non-HTML XML node
	 */
	isXML = Sizzle.isXML = function( elem ) {
		// documentElement is verified for cases where it doesn't yet exist
		// (such as loading iframes in IE - #4833)
		var documentElement = elem && (elem.ownerDocument || elem).documentElement;
		return documentElement ? documentElement.nodeName !== "HTML" : false;
	};

	/**
	 * Sets document-related variables once based on the current document
	 * @param {Element|Object} [doc] An element or document object to use to set the document
	 * @returns {Object} Returns the current document
	 */
	setDocument = Sizzle.setDocument = function( node ) {
		var hasCompare, parent,
			doc = node ? node.ownerDocument || node : preferredDoc;

		// Return early if doc is invalid or already selected
		if ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
			return document;
		}

		// Update global variables
		document = doc;
		docElem = document.documentElement;
		documentIsHTML = !isXML( document );

		// Support: IE 9-11, Edge
		// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
		if ( (parent = document.defaultView) && parent.top !== parent ) {
			// Support: IE 11
			if ( parent.addEventListener ) {
				parent.addEventListener( "unload", unloadHandler, false );

			// Support: IE 9 - 10 only
			} else if ( parent.attachEvent ) {
				parent.attachEvent( "onunload", unloadHandler );
			}
		}

		/* Attributes
		---------------------------------------------------------------------- */

		// Support: IE<8
		// Verify that getAttribute really returns attributes and not properties
		// (excepting IE8 booleans)
		support.attributes = assert(function( div ) {
			div.className = "i";
			return !div.getAttribute("className");
		});

		/* getElement(s)By*
		---------------------------------------------------------------------- */

		// Check if getElementsByTagName("*") returns only elements
		support.getElementsByTagName = assert(function( div ) {
			div.appendChild( document.createComment("") );
			return !div.getElementsByTagName("*").length;
		});

		// Support: IE<9
		support.getElementsByClassName = rnative.test( document.getElementsByClassName );

		// Support: IE<10
		// Check if getElementById returns elements by name
		// The broken getElementById methods don't pick up programatically-set names,
		// so use a roundabout getElementsByName test
		support.getById = assert(function( div ) {
			docElem.appendChild( div ).id = expando;
			return !document.getElementsByName || !document.getElementsByName( expando ).length;
		});

		// ID find and filter
		if ( support.getById ) {
			Expr.find["ID"] = function( id, context ) {
				if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
					var m = context.getElementById( id );
					return m ? [ m ] : [];
				}
			};
			Expr.filter["ID"] = function( id ) {
				var attrId = id.replace( runescape, funescape );
				return function( elem ) {
					return elem.getAttribute("id") === attrId;
				};
			};
		} else {
			// Support: IE6/7
			// getElementById is not reliable as a find shortcut
			delete Expr.find["ID"];

			Expr.filter["ID"] =  function( id ) {
				var attrId = id.replace( runescape, funescape );
				return function( elem ) {
					var node = typeof elem.getAttributeNode !== "undefined" &&
						elem.getAttributeNode("id");
					return node && node.value === attrId;
				};
			};
		}

		// Tag
		Expr.find["TAG"] = support.getElementsByTagName ?
			function( tag, context ) {
				if ( typeof context.getElementsByTagName !== "undefined" ) {
					return context.getElementsByTagName( tag );

				// DocumentFragment nodes don't have gEBTN
				} else if ( support.qsa ) {
					return context.querySelectorAll( tag );
				}
			} :

			function( tag, context ) {
				var elem,
					tmp = [],
					i = 0,
					// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
					results = context.getElementsByTagName( tag );

				// Filter out possible comments
				if ( tag === "*" ) {
					while ( (elem = results[i++]) ) {
						if ( elem.nodeType === 1 ) {
							tmp.push( elem );
						}
					}

					return tmp;
				}
				return results;
			};

		// Class
		Expr.find["CLASS"] = support.getElementsByClassName && function( className, context ) {
			if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
				return context.getElementsByClassName( className );
			}
		};

		/* QSA/matchesSelector
		---------------------------------------------------------------------- */

		// QSA and matchesSelector support

		// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
		rbuggyMatches = [];

		// qSa(:focus) reports false when true (Chrome 21)
		// We allow this because of a bug in IE8/9 that throws an error
		// whenever `document.activeElement` is accessed on an iframe
		// So, we allow :focus to pass through QSA all the time to avoid the IE error
		// See http://bugs.jquery.com/ticket/13378
		rbuggyQSA = [];

		if ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
			// Build QSA regex
			// Regex strategy adopted from Diego Perini
			assert(function( div ) {
				// Select is set to empty string on purpose
				// This is to test IE's treatment of not explicitly
				// setting a boolean content attribute,
				// since its presence should be enough
				// http://bugs.jquery.com/ticket/12359
				docElem.appendChild( div ).innerHTML = "<a id='" + expando + "'></a>" +
					"<select id='" + expando + "-\r\\' msallowcapture=''>" +
					"<option selected=''></option></select>";

				// Support: IE8, Opera 11-12.16
				// Nothing should be selected when empty strings follow ^= or $= or *=
				// The test attribute must be unknown in Opera but "safe" for WinRT
				// http://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
				if ( div.querySelectorAll("[msallowcapture^='']").length ) {
					rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
				}

				// Support: IE8
				// Boolean attributes and "value" are not treated correctly
				if ( !div.querySelectorAll("[selected]").length ) {
					rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
				}

				// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
				if ( !div.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
					rbuggyQSA.push("~=");
				}

				// Webkit/Opera - :checked should return selected option elements
				// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
				// IE8 throws error here and will not see later tests
				if ( !div.querySelectorAll(":checked").length ) {
					rbuggyQSA.push(":checked");
				}

				// Support: Safari 8+, iOS 8+
				// https://bugs.webkit.org/show_bug.cgi?id=136851
				// In-page `selector#id sibing-combinator selector` fails
				if ( !div.querySelectorAll( "a#" + expando + "+*" ).length ) {
					rbuggyQSA.push(".#.+[+~]");
				}
			});

			assert(function( div ) {
				// Support: Windows 8 Native Apps
				// The type and name attributes are restricted during .innerHTML assignment
				var input = document.createElement("input");
				input.setAttribute( "type", "hidden" );
				div.appendChild( input ).setAttribute( "name", "D" );

				// Support: IE8
				// Enforce case-sensitivity of name attribute
				if ( div.querySelectorAll("[name=d]").length ) {
					rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
				}

				// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
				// IE8 throws error here and will not see later tests
				if ( !div.querySelectorAll(":enabled").length ) {
					rbuggyQSA.push( ":enabled", ":disabled" );
				}

				// Opera 10-11 does not throw on post-comma invalid pseudos
				div.querySelectorAll("*,:x");
				rbuggyQSA.push(",.*:");
			});
		}

		if ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
			docElem.webkitMatchesSelector ||
			docElem.mozMatchesSelector ||
			docElem.oMatchesSelector ||
			docElem.msMatchesSelector) )) ) {

			assert(function( div ) {
				// Check to see if it's possible to do matchesSelector
				// on a disconnected node (IE 9)
				support.disconnectedMatch = matches.call( div, "div" );

				// This should fail with an exception
				// Gecko does not error, returns false instead
				matches.call( div, "[s!='']:x" );
				rbuggyMatches.push( "!=", pseudos );
			});
		}

		rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join("|") );
		rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join("|") );

		/* Contains
		---------------------------------------------------------------------- */
		hasCompare = rnative.test( docElem.compareDocumentPosition );

		// Element contains another
		// Purposefully self-exclusive
		// As in, an element does not contain itself
		contains = hasCompare || rnative.test( docElem.contains ) ?
			function( a, b ) {
				var adown = a.nodeType === 9 ? a.documentElement : a,
					bup = b && b.parentNode;
				return a === bup || !!( bup && bup.nodeType === 1 && (
					adown.contains ?
						adown.contains( bup ) :
						a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
				));
			} :
			function( a, b ) {
				if ( b ) {
					while ( (b = b.parentNode) ) {
						if ( b === a ) {
							return true;
						}
					}
				}
				return false;
			};

		/* Sorting
		---------------------------------------------------------------------- */

		// Document order sorting
		sortOrder = hasCompare ?
		function( a, b ) {

			// Flag for duplicate removal
			if ( a === b ) {
				hasDuplicate = true;
				return 0;
			}

			// Sort on method existence if only one input has compareDocumentPosition
			var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
			if ( compare ) {
				return compare;
			}

			// Calculate position if both inputs belong to the same document
			compare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
				a.compareDocumentPosition( b ) :

				// Otherwise we know they are disconnected
				1;

			// Disconnected nodes
			if ( compare & 1 ||
				(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

				// Choose the first element that is related to our preferred document
				if ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
					return -1;
				}
				if ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
					return 1;
				}

				// Maintain original order
				return sortInput ?
					( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
					0;
			}

			return compare & 4 ? -1 : 1;
		} :
		function( a, b ) {
			// Exit early if the nodes are identical
			if ( a === b ) {
				hasDuplicate = true;
				return 0;
			}

			var cur,
				i = 0,
				aup = a.parentNode,
				bup = b.parentNode,
				ap = [ a ],
				bp = [ b ];

			// Parentless nodes are either documents or disconnected
			if ( !aup || !bup ) {
				return a === document ? -1 :
					b === document ? 1 :
					aup ? -1 :
					bup ? 1 :
					sortInput ?
					( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
					0;

			// If the nodes are siblings, we can do a quick check
			} else if ( aup === bup ) {
				return siblingCheck( a, b );
			}

			// Otherwise we need full lists of their ancestors for comparison
			cur = a;
			while ( (cur = cur.parentNode) ) {
				ap.unshift( cur );
			}
			cur = b;
			while ( (cur = cur.parentNode) ) {
				bp.unshift( cur );
			}

			// Walk down the tree looking for a discrepancy
			while ( ap[i] === bp[i] ) {
				i++;
			}

			return i ?
				// Do a sibling check if the nodes have a common ancestor
				siblingCheck( ap[i], bp[i] ) :

				// Otherwise nodes in our document sort first
				ap[i] === preferredDoc ? -1 :
				bp[i] === preferredDoc ? 1 :
				0;
		};

		return document;
	};

	Sizzle.matches = function( expr, elements ) {
		return Sizzle( expr, null, null, elements );
	};

	Sizzle.matchesSelector = function( elem, expr ) {
		// Set document vars if needed
		if ( ( elem.ownerDocument || elem ) !== document ) {
			setDocument( elem );
		}

		// Make sure that attribute selectors are quoted
		expr = expr.replace( rattributeQuotes, "='$1']" );

		if ( support.matchesSelector && documentIsHTML &&
			!compilerCache[ expr + " " ] &&
			( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
			( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

			try {
				var ret = matches.call( elem, expr );

				// IE 9's matchesSelector returns false on disconnected nodes
				if ( ret || support.disconnectedMatch ||
						// As well, disconnected nodes are said to be in a document
						// fragment in IE 9
						elem.document && elem.document.nodeType !== 11 ) {
					return ret;
				}
			} catch (e) {}
		}

		return Sizzle( expr, document, null, [ elem ] ).length > 0;
	};

	Sizzle.contains = function( context, elem ) {
		// Set document vars if needed
		if ( ( context.ownerDocument || context ) !== document ) {
			setDocument( context );
		}
		return contains( context, elem );
	};

	Sizzle.attr = function( elem, name ) {
		// Set document vars if needed
		if ( ( elem.ownerDocument || elem ) !== document ) {
			setDocument( elem );
		}

		var fn = Expr.attrHandle[ name.toLowerCase() ],
			// Don't get fooled by Object.prototype properties (jQuery #13807)
			val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
				fn( elem, name, !documentIsHTML ) :
				undefined;

		return val !== undefined ?
			val :
			support.attributes || !documentIsHTML ?
				elem.getAttribute( name ) :
				(val = elem.getAttributeNode(name)) && val.specified ?
					val.value :
					null;
	};

	Sizzle.error = function( msg ) {
		throw new Error( "Syntax error, unrecognized expression: " + msg );
	};

	/**
	 * Document sorting and removing duplicates
	 * @param {ArrayLike} results
	 */
	Sizzle.uniqueSort = function( results ) {
		var elem,
			duplicates = [],
			j = 0,
			i = 0;

		// Unless we *know* we can detect duplicates, assume their presence
		hasDuplicate = !support.detectDuplicates;
		sortInput = !support.sortStable && results.slice( 0 );
		results.sort( sortOrder );

		if ( hasDuplicate ) {
			while ( (elem = results[i++]) ) {
				if ( elem === results[ i ] ) {
					j = duplicates.push( i );
				}
			}
			while ( j-- ) {
				results.splice( duplicates[ j ], 1 );
			}
		}

		// Clear input after sorting to release objects
		// See https://github.com/jquery/sizzle/pull/225
		sortInput = null;

		return results;
	};

	/**
	 * Utility function for retrieving the text value of an array of DOM nodes
	 * @param {Array|Element} elem
	 */
	getText = Sizzle.getText = function( elem ) {
		var node,
			ret = "",
			i = 0,
			nodeType = elem.nodeType;

		if ( !nodeType ) {
			// If no nodeType, this is expected to be an array
			while ( (node = elem[i++]) ) {
				// Do not traverse comment nodes
				ret += getText( node );
			}
		} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
			// Use textContent for elements
			// innerText usage removed for consistency of new lines (jQuery #11153)
			if ( typeof elem.textContent === "string" ) {
				return elem.textContent;
			} else {
				// Traverse its children
				for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
					ret += getText( elem );
				}
			}
		} else if ( nodeType === 3 || nodeType === 4 ) {
			return elem.nodeValue;
		}
		// Do not include comment or processing instruction nodes

		return ret;
	};

	Expr = Sizzle.selectors = {

		// Can be adjusted by the user
		cacheLength: 50,

		createPseudo: markFunction,

		match: matchExpr,

		attrHandle: {},

		find: {},

		relative: {
			">": { dir: "parentNode", first: true },
			" ": { dir: "parentNode" },
			"+": { dir: "previousSibling", first: true },
			"~": { dir: "previousSibling" }
		},

		preFilter: {
			"ATTR": function( match ) {
				match[1] = match[1].replace( runescape, funescape );

				// Move the given value to match[3] whether quoted or unquoted
				match[3] = ( match[3] || match[4] || match[5] || "" ).replace( runescape, funescape );

				if ( match[2] === "~=" ) {
					match[3] = " " + match[3] + " ";
				}

				return match.slice( 0, 4 );
			},

			"CHILD": function( match ) {
				/* matches from matchExpr["CHILD"]
					1 type (only|nth|...)
					2 what (child|of-type)
					3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
					4 xn-component of xn+y argument ([+-]?\d*n|)
					5 sign of xn-component
					6 x of xn-component
					7 sign of y-component
					8 y of y-component
				*/
				match[1] = match[1].toLowerCase();

				if ( match[1].slice( 0, 3 ) === "nth" ) {
					// nth-* requires argument
					if ( !match[3] ) {
						Sizzle.error( match[0] );
					}

					// numeric x and y parameters for Expr.filter.CHILD
					// remember that false/true cast respectively to 0/1
					match[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === "even" || match[3] === "odd" ) );
					match[5] = +( ( match[7] + match[8] ) || match[3] === "odd" );

				// other types prohibit arguments
				} else if ( match[3] ) {
					Sizzle.error( match[0] );
				}

				return match;
			},

			"PSEUDO": function( match ) {
				var excess,
					unquoted = !match[6] && match[2];

				if ( matchExpr["CHILD"].test( match[0] ) ) {
					return null;
				}

				// Accept quoted arguments as-is
				if ( match[3] ) {
					match[2] = match[4] || match[5] || "";

				// Strip excess characters from unquoted arguments
				} else if ( unquoted && rpseudo.test( unquoted ) &&
					// Get excess from tokenize (recursively)
					(excess = tokenize( unquoted, true )) &&
					// advance to the next closing parenthesis
					(excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length) ) {

					// excess is a negative index
					match[0] = match[0].slice( 0, excess );
					match[2] = unquoted.slice( 0, excess );
				}

				// Return only captures needed by the pseudo filter method (type and argument)
				return match.slice( 0, 3 );
			}
		},

		filter: {

			"TAG": function( nodeNameSelector ) {
				var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
				return nodeNameSelector === "*" ?
					function() { return true; } :
					function( elem ) {
						return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
					};
			},

			"CLASS": function( className ) {
				var pattern = classCache[ className + " " ];

				return pattern ||
					(pattern = new RegExp( "(^|" + whitespace + ")" + className + "(" + whitespace + "|$)" )) &&
					classCache( className, function( elem ) {
						return pattern.test( typeof elem.className === "string" && elem.className || typeof elem.getAttribute !== "undefined" && elem.getAttribute("class") || "" );
					});
			},

			"ATTR": function( name, operator, check ) {
				return function( elem ) {
					var result = Sizzle.attr( elem, name );

					if ( result == null ) {
						return operator === "!=";
					}
					if ( !operator ) {
						return true;
					}

					result += "";

					return operator === "=" ? result === check :
						operator === "!=" ? result !== check :
						operator === "^=" ? check && result.indexOf( check ) === 0 :
						operator === "*=" ? check && result.indexOf( check ) > -1 :
						operator === "$=" ? check && result.slice( -check.length ) === check :
						operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
						operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
						false;
				};
			},

			"CHILD": function( type, what, argument, first, last ) {
				var simple = type.slice( 0, 3 ) !== "nth",
					forward = type.slice( -4 ) !== "last",
					ofType = what === "of-type";

				return first === 1 && last === 0 ?

					// Shortcut for :nth-*(n)
					function( elem ) {
						return !!elem.parentNode;
					} :

					function( elem, context, xml ) {
						var cache, uniqueCache, outerCache, node, nodeIndex, start,
							dir = simple !== forward ? "nextSibling" : "previousSibling",
							parent = elem.parentNode,
							name = ofType && elem.nodeName.toLowerCase(),
							useCache = !xml && !ofType,
							diff = false;

						if ( parent ) {

							// :(first|last|only)-(child|of-type)
							if ( simple ) {
								while ( dir ) {
									node = elem;
									while ( (node = node[ dir ]) ) {
										if ( ofType ?
											node.nodeName.toLowerCase() === name :
											node.nodeType === 1 ) {

											return false;
										}
									}
									// Reverse direction for :only-* (if we haven't yet done so)
									start = dir = type === "only" && !start && "nextSibling";
								}
								return true;
							}

							start = [ forward ? parent.firstChild : parent.lastChild ];

							// non-xml :nth-child(...) stores cache data on `parent`
							if ( forward && useCache ) {

								// Seek `elem` from a previously-cached index

								// ...in a gzip-friendly way
								node = parent;
								outerCache = node[ expando ] || (node[ expando ] = {});

								// Support: IE <9 only
								// Defend against cloned attroperties (jQuery gh-1709)
								uniqueCache = outerCache[ node.uniqueID ] ||
									(outerCache[ node.uniqueID ] = {});

								cache = uniqueCache[ type ] || [];
								nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
								diff = nodeIndex && cache[ 2 ];
								node = nodeIndex && parent.childNodes[ nodeIndex ];

								while ( (node = ++nodeIndex && node && node[ dir ] ||

									// Fallback to seeking `elem` from the start
									(diff = nodeIndex = 0) || start.pop()) ) {

									// When found, cache indexes on `parent` and break
									if ( node.nodeType === 1 && ++diff && node === elem ) {
										uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
										break;
									}
								}

							} else {
								// Use previously-cached element index if available
								if ( useCache ) {
									// ...in a gzip-friendly way
									node = elem;
									outerCache = node[ expando ] || (node[ expando ] = {});

									// Support: IE <9 only
									// Defend against cloned attroperties (jQuery gh-1709)
									uniqueCache = outerCache[ node.uniqueID ] ||
										(outerCache[ node.uniqueID ] = {});

									cache = uniqueCache[ type ] || [];
									nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
									diff = nodeIndex;
								}

								// xml :nth-child(...)
								// or :nth-last-child(...) or :nth(-last)?-of-type(...)
								if ( diff === false ) {
									// Use the same loop as above to seek `elem` from the start
									while ( (node = ++nodeIndex && node && node[ dir ] ||
										(diff = nodeIndex = 0) || start.pop()) ) {

										if ( ( ofType ?
											node.nodeName.toLowerCase() === name :
											node.nodeType === 1 ) &&
											++diff ) {

											// Cache the index of each encountered element
											if ( useCache ) {
												outerCache = node[ expando ] || (node[ expando ] = {});

												// Support: IE <9 only
												// Defend against cloned attroperties (jQuery gh-1709)
												uniqueCache = outerCache[ node.uniqueID ] ||
													(outerCache[ node.uniqueID ] = {});

												uniqueCache[ type ] = [ dirruns, diff ];
											}

											if ( node === elem ) {
												break;
											}
										}
									}
								}
							}

							// Incorporate the offset, then check against cycle size
							diff -= last;
							return diff === first || ( diff % first === 0 && diff / first >= 0 );
						}
					};
			},

			"PSEUDO": function( pseudo, argument ) {
				// pseudo-class names are case-insensitive
				// http://www.w3.org/TR/selectors/#pseudo-classes
				// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
				// Remember that setFilters inherits from pseudos
				var args,
					fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
						Sizzle.error( "unsupported pseudo: " + pseudo );

				// The user may use createPseudo to indicate that
				// arguments are needed to create the filter function
				// just as Sizzle does
				if ( fn[ expando ] ) {
					return fn( argument );
				}

				// But maintain support for old signatures
				if ( fn.length > 1 ) {
					args = [ pseudo, pseudo, "", argument ];
					return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
						markFunction(function( seed, matches ) {
							var idx,
								matched = fn( seed, argument ),
								i = matched.length;
							while ( i-- ) {
								idx = indexOf( seed, matched[i] );
								seed[ idx ] = !( matches[ idx ] = matched[i] );
							}
						}) :
						function( elem ) {
							return fn( elem, 0, args );
						};
				}

				return fn;
			}
		},

		pseudos: {
			// Potentially complex pseudos
			"not": markFunction(function( selector ) {
				// Trim the selector passed to compile
				// to avoid treating leading and trailing
				// spaces as combinators
				var input = [],
					results = [],
					matcher = compile( selector.replace( rtrim, "$1" ) );

				return matcher[ expando ] ?
					markFunction(function( seed, matches, context, xml ) {
						var elem,
							unmatched = matcher( seed, null, xml, [] ),
							i = seed.length;

						// Match elements unmatched by `matcher`
						while ( i-- ) {
							if ( (elem = unmatched[i]) ) {
								seed[i] = !(matches[i] = elem);
							}
						}
					}) :
					function( elem, context, xml ) {
						input[0] = elem;
						matcher( input, null, xml, results );
						// Don't keep the element (issue #299)
						input[0] = null;
						return !results.pop();
					};
			}),

			"has": markFunction(function( selector ) {
				return function( elem ) {
					return Sizzle( selector, elem ).length > 0;
				};
			}),

			"contains": markFunction(function( text ) {
				text = text.replace( runescape, funescape );
				return function( elem ) {
					return ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
				};
			}),

			// "Whether an element is represented by a :lang() selector
			// is based solely on the element's language value
			// being equal to the identifier C,
			// or beginning with the identifier C immediately followed by "-".
			// The matching of C against the element's language value is performed case-insensitively.
			// The identifier C does not have to be a valid language name."
			// http://www.w3.org/TR/selectors/#lang-pseudo
			"lang": markFunction( function( lang ) {
				// lang value must be a valid identifier
				if ( !ridentifier.test(lang || "") ) {
					Sizzle.error( "unsupported lang: " + lang );
				}
				lang = lang.replace( runescape, funescape ).toLowerCase();
				return function( elem ) {
					var elemLang;
					do {
						if ( (elemLang = documentIsHTML ?
							elem.lang :
							elem.getAttribute("xml:lang") || elem.getAttribute("lang")) ) {

							elemLang = elemLang.toLowerCase();
							return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
						}
					} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
					return false;
				};
			}),

			// Miscellaneous
			"target": function( elem ) {
				var hash = window.location && window.location.hash;
				return hash && hash.slice( 1 ) === elem.id;
			},

			"root": function( elem ) {
				return elem === docElem;
			},

			"focus": function( elem ) {
				return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
			},

			// Boolean properties
			"enabled": function( elem ) {
				return elem.disabled === false;
			},

			"disabled": function( elem ) {
				return elem.disabled === true;
			},

			"checked": function( elem ) {
				// In CSS3, :checked should return both checked and selected elements
				// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
				var nodeName = elem.nodeName.toLowerCase();
				return (nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected);
			},

			"selected": function( elem ) {
				// Accessing this property makes selected-by-default
				// options in Safari work properly
				if ( elem.parentNode ) {
					elem.parentNode.selectedIndex;
				}

				return elem.selected === true;
			},

			// Contents
			"empty": function( elem ) {
				// http://www.w3.org/TR/selectors/#empty-pseudo
				// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
				//   but not by others (comment: 8; processing instruction: 7; etc.)
				// nodeType < 6 works because attributes (2) do not appear as children
				for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
					if ( elem.nodeType < 6 ) {
						return false;
					}
				}
				return true;
			},

			"parent": function( elem ) {
				return !Expr.pseudos["empty"]( elem );
			},

			// Element/input types
			"header": function( elem ) {
				return rheader.test( elem.nodeName );
			},

			"input": function( elem ) {
				return rinputs.test( elem.nodeName );
			},

			"button": function( elem ) {
				var name = elem.nodeName.toLowerCase();
				return name === "input" && elem.type === "button" || name === "button";
			},

			"text": function( elem ) {
				var attr;
				return elem.nodeName.toLowerCase() === "input" &&
					elem.type === "text" &&

					// Support: IE<8
					// New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
					( (attr = elem.getAttribute("type")) == null || attr.toLowerCase() === "text" );
			},

			// Position-in-collection
			"first": createPositionalPseudo(function() {
				return [ 0 ];
			}),

			"last": createPositionalPseudo(function( matchIndexes, length ) {
				return [ length - 1 ];
			}),

			"eq": createPositionalPseudo(function( matchIndexes, length, argument ) {
				return [ argument < 0 ? argument + length : argument ];
			}),

			"even": createPositionalPseudo(function( matchIndexes, length ) {
				var i = 0;
				for ( ; i < length; i += 2 ) {
					matchIndexes.push( i );
				}
				return matchIndexes;
			}),

			"odd": createPositionalPseudo(function( matchIndexes, length ) {
				var i = 1;
				for ( ; i < length; i += 2 ) {
					matchIndexes.push( i );
				}
				return matchIndexes;
			}),

			"lt": createPositionalPseudo(function( matchIndexes, length, argument ) {
				var i = argument < 0 ? argument + length : argument;
				for ( ; --i >= 0; ) {
					matchIndexes.push( i );
				}
				return matchIndexes;
			}),

			"gt": createPositionalPseudo(function( matchIndexes, length, argument ) {
				var i = argument < 0 ? argument + length : argument;
				for ( ; ++i < length; ) {
					matchIndexes.push( i );
				}
				return matchIndexes;
			})
		}
	};

	Expr.pseudos["nth"] = Expr.pseudos["eq"];

	// Add button/input type pseudos
	for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
		Expr.pseudos[ i ] = createInputPseudo( i );
	}
	for ( i in { submit: true, reset: true } ) {
		Expr.pseudos[ i ] = createButtonPseudo( i );
	}

	// Easy API for creating new setFilters
	function setFilters() {}
	setFilters.prototype = Expr.filters = Expr.pseudos;
	Expr.setFilters = new setFilters();

	tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
		var matched, match, tokens, type,
			soFar, groups, preFilters,
			cached = tokenCache[ selector + " " ];

		if ( cached ) {
			return parseOnly ? 0 : cached.slice( 0 );
		}

		soFar = selector;
		groups = [];
		preFilters = Expr.preFilter;

		while ( soFar ) {

			// Comma and first run
			if ( !matched || (match = rcomma.exec( soFar )) ) {
				if ( match ) {
					// Don't consume trailing commas as valid
					soFar = soFar.slice( match[0].length ) || soFar;
				}
				groups.push( (tokens = []) );
			}

			matched = false;

			// Combinators
			if ( (match = rcombinators.exec( soFar )) ) {
				matched = match.shift();
				tokens.push({
					value: matched,
					// Cast descendant combinators to space
					type: match[0].replace( rtrim, " " )
				});
				soFar = soFar.slice( matched.length );
			}

			// Filters
			for ( type in Expr.filter ) {
				if ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
					(match = preFilters[ type ]( match ))) ) {
					matched = match.shift();
					tokens.push({
						value: matched,
						type: type,
						matches: match
					});
					soFar = soFar.slice( matched.length );
				}
			}

			if ( !matched ) {
				break;
			}
		}

		// Return the length of the invalid excess
		// if we're just parsing
		// Otherwise, throw an error or return tokens
		return parseOnly ?
			soFar.length :
			soFar ?
				Sizzle.error( selector ) :
				// Cache the tokens
				tokenCache( selector, groups ).slice( 0 );
	};

	function toSelector( tokens ) {
		var i = 0,
			len = tokens.length,
			selector = "";
		for ( ; i < len; i++ ) {
			selector += tokens[i].value;
		}
		return selector;
	}

	function addCombinator( matcher, combinator, base ) {
		var dir = combinator.dir,
			checkNonElements = base && dir === "parentNode",
			doneName = done++;

		return combinator.first ?
			// Check against closest ancestor/preceding element
			function( elem, context, xml ) {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						return matcher( elem, context, xml );
					}
				}
			} :

			// Check against all ancestor/preceding elements
			function( elem, context, xml ) {
				var oldCache, uniqueCache, outerCache,
					newCache = [ dirruns, doneName ];

				// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
				if ( xml ) {
					while ( (elem = elem[ dir ]) ) {
						if ( elem.nodeType === 1 || checkNonElements ) {
							if ( matcher( elem, context, xml ) ) {
								return true;
							}
						}
					}
				} else {
					while ( (elem = elem[ dir ]) ) {
						if ( elem.nodeType === 1 || checkNonElements ) {
							outerCache = elem[ expando ] || (elem[ expando ] = {});

							// Support: IE <9 only
							// Defend against cloned attroperties (jQuery gh-1709)
							uniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

							if ( (oldCache = uniqueCache[ dir ]) &&
								oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

								// Assign to newCache so results back-propagate to previous elements
								return (newCache[ 2 ] = oldCache[ 2 ]);
							} else {
								// Reuse newcache so results back-propagate to previous elements
								uniqueCache[ dir ] = newCache;

								// A match means we're done; a fail means we have to keep checking
								if ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
									return true;
								}
							}
						}
					}
				}
			};
	}

	function elementMatcher( matchers ) {
		return matchers.length > 1 ?
			function( elem, context, xml ) {
				var i = matchers.length;
				while ( i-- ) {
					if ( !matchers[i]( elem, context, xml ) ) {
						return false;
					}
				}
				return true;
			} :
			matchers[0];
	}

	function multipleContexts( selector, contexts, results ) {
		var i = 0,
			len = contexts.length;
		for ( ; i < len; i++ ) {
			Sizzle( selector, contexts[i], results );
		}
		return results;
	}

	function condense( unmatched, map, filter, context, xml ) {
		var elem,
			newUnmatched = [],
			i = 0,
			len = unmatched.length,
			mapped = map != null;

		for ( ; i < len; i++ ) {
			if ( (elem = unmatched[i]) ) {
				if ( !filter || filter( elem, context, xml ) ) {
					newUnmatched.push( elem );
					if ( mapped ) {
						map.push( i );
					}
				}
			}
		}

		return newUnmatched;
	}

	function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
		if ( postFilter && !postFilter[ expando ] ) {
			postFilter = setMatcher( postFilter );
		}
		if ( postFinder && !postFinder[ expando ] ) {
			postFinder = setMatcher( postFinder, postSelector );
		}
		return markFunction(function( seed, results, context, xml ) {
			var temp, i, elem,
				preMap = [],
				postMap = [],
				preexisting = results.length,

				// Get initial elements from seed or context
				elems = seed || multipleContexts( selector || "*", context.nodeType ? [ context ] : context, [] ),

				// Prefilter to get matcher input, preserving a map for seed-results synchronization
				matcherIn = preFilter && ( seed || !selector ) ?
					condense( elems, preMap, preFilter, context, xml ) :
					elems,

				matcherOut = matcher ?
					// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
					postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

						// ...intermediate processing is necessary
						[] :

						// ...otherwise use results directly
						results :
					matcherIn;

			// Find primary matches
			if ( matcher ) {
				matcher( matcherIn, matcherOut, context, xml );
			}

			// Apply postFilter
			if ( postFilter ) {
				temp = condense( matcherOut, postMap );
				postFilter( temp, [], context, xml );

				// Un-match failing elements by moving them back to matcherIn
				i = temp.length;
				while ( i-- ) {
					if ( (elem = temp[i]) ) {
						matcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
					}
				}
			}

			if ( seed ) {
				if ( postFinder || preFilter ) {
					if ( postFinder ) {
						// Get the final matcherOut by condensing this intermediate into postFinder contexts
						temp = [];
						i = matcherOut.length;
						while ( i-- ) {
							if ( (elem = matcherOut[i]) ) {
								// Restore matcherIn since elem is not yet a final match
								temp.push( (matcherIn[i] = elem) );
							}
						}
						postFinder( null, (matcherOut = []), temp, xml );
					}

					// Move matched elements from seed to results to keep them synchronized
					i = matcherOut.length;
					while ( i-- ) {
						if ( (elem = matcherOut[i]) &&
							(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

							seed[temp] = !(results[temp] = elem);
						}
					}
				}

			// Add elements to results, through postFinder if defined
			} else {
				matcherOut = condense(
					matcherOut === results ?
						matcherOut.splice( preexisting, matcherOut.length ) :
						matcherOut
				);
				if ( postFinder ) {
					postFinder( null, results, matcherOut, xml );
				} else {
					push.apply( results, matcherOut );
				}
			}
		});
	}

	function matcherFromTokens( tokens ) {
		var checkContext, matcher, j,
			len = tokens.length,
			leadingRelative = Expr.relative[ tokens[0].type ],
			implicitRelative = leadingRelative || Expr.relative[" "],
			i = leadingRelative ? 1 : 0,

			// The foundational matcher ensures that elements are reachable from top-level context(s)
			matchContext = addCombinator( function( elem ) {
				return elem === checkContext;
			}, implicitRelative, true ),
			matchAnyContext = addCombinator( function( elem ) {
				return indexOf( checkContext, elem ) > -1;
			}, implicitRelative, true ),
			matchers = [ function( elem, context, xml ) {
				var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
					(checkContext = context).nodeType ?
						matchContext( elem, context, xml ) :
						matchAnyContext( elem, context, xml ) );
				// Avoid hanging onto element (issue #299)
				checkContext = null;
				return ret;
			} ];

		for ( ; i < len; i++ ) {
			if ( (matcher = Expr.relative[ tokens[i].type ]) ) {
				matchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
			} else {
				matcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

				// Return special upon seeing a positional matcher
				if ( matcher[ expando ] ) {
					// Find the next relative operator (if any) for proper handling
					j = ++i;
					for ( ; j < len; j++ ) {
						if ( Expr.relative[ tokens[j].type ] ) {
							break;
						}
					}
					return setMatcher(
						i > 1 && elementMatcher( matchers ),
						i > 1 && toSelector(
							// If the preceding token was a descendant combinator, insert an implicit any-element `*`
							tokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === " " ? "*" : "" })
						).replace( rtrim, "$1" ),
						matcher,
						i < j && matcherFromTokens( tokens.slice( i, j ) ),
						j < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
						j < len && toSelector( tokens )
					);
				}
				matchers.push( matcher );
			}
		}

		return elementMatcher( matchers );
	}

	function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
		var bySet = setMatchers.length > 0,
			byElement = elementMatchers.length > 0,
			superMatcher = function( seed, context, xml, results, outermost ) {
				var elem, j, matcher,
					matchedCount = 0,
					i = "0",
					unmatched = seed && [],
					setMatched = [],
					contextBackup = outermostContext,
					// We must always have either seed elements or outermost context
					elems = seed || byElement && Expr.find["TAG"]( "*", outermost ),
					// Use integer dirruns iff this is the outermost matcher
					dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
					len = elems.length;

				if ( outermost ) {
					outermostContext = context === document || context || outermost;
				}

				// Add elements passing elementMatchers directly to results
				// Support: IE<9, Safari
				// Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
				for ( ; i !== len && (elem = elems[i]) != null; i++ ) {
					if ( byElement && elem ) {
						j = 0;
						if ( !context && elem.ownerDocument !== document ) {
							setDocument( elem );
							xml = !documentIsHTML;
						}
						while ( (matcher = elementMatchers[j++]) ) {
							if ( matcher( elem, context || document, xml) ) {
								results.push( elem );
								break;
							}
						}
						if ( outermost ) {
							dirruns = dirrunsUnique;
						}
					}

					// Track unmatched elements for set filters
					if ( bySet ) {
						// They will have gone through all possible matchers
						if ( (elem = !matcher && elem) ) {
							matchedCount--;
						}

						// Lengthen the array for every element, matched or not
						if ( seed ) {
							unmatched.push( elem );
						}
					}
				}

				// `i` is now the count of elements visited above, and adding it to `matchedCount`
				// makes the latter nonnegative.
				matchedCount += i;

				// Apply set filters to unmatched elements
				// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
				// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
				// no element matchers and no seed.
				// Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
				// case, which will result in a "00" `matchedCount` that differs from `i` but is also
				// numerically zero.
				if ( bySet && i !== matchedCount ) {
					j = 0;
					while ( (matcher = setMatchers[j++]) ) {
						matcher( unmatched, setMatched, context, xml );
					}

					if ( seed ) {
						// Reintegrate element matches to eliminate the need for sorting
						if ( matchedCount > 0 ) {
							while ( i-- ) {
								if ( !(unmatched[i] || setMatched[i]) ) {
									setMatched[i] = pop.call( results );
								}
							}
						}

						// Discard index placeholder values to get only actual matches
						setMatched = condense( setMatched );
					}

					// Add matches to results
					push.apply( results, setMatched );

					// Seedless set matches succeeding multiple successful matchers stipulate sorting
					if ( outermost && !seed && setMatched.length > 0 &&
						( matchedCount + setMatchers.length ) > 1 ) {

						Sizzle.uniqueSort( results );
					}
				}

				// Override manipulation of globals by nested matchers
				if ( outermost ) {
					dirruns = dirrunsUnique;
					outermostContext = contextBackup;
				}

				return unmatched;
			};

		return bySet ?
			markFunction( superMatcher ) :
			superMatcher;
	}

	compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
		var i,
			setMatchers = [],
			elementMatchers = [],
			cached = compilerCache[ selector + " " ];

		if ( !cached ) {
			// Generate a function of recursive functions that can be used to check each element
			if ( !match ) {
				match = tokenize( selector );
			}
			i = match.length;
			while ( i-- ) {
				cached = matcherFromTokens( match[i] );
				if ( cached[ expando ] ) {
					setMatchers.push( cached );
				} else {
					elementMatchers.push( cached );
				}
			}

			// Cache the compiled function
			cached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

			// Save selector and tokenization
			cached.selector = selector;
		}
		return cached;
	};

	/**
	 * A low-level selection function that works with Sizzle's compiled
	 *  selector functions
	 * @param {String|Function} selector A selector or a pre-compiled
	 *  selector function built with Sizzle.compile
	 * @param {Element} context
	 * @param {Array} [results]
	 * @param {Array} [seed] A set of elements to match against
	 */
	select = Sizzle.select = function( selector, context, results, seed ) {
		var i, tokens, token, type, find,
			compiled = typeof selector === "function" && selector,
			match = !seed && tokenize( (selector = compiled.selector || selector) );

		results = results || [];

		// Try to minimize operations if there is only one selector in the list and no seed
		// (the latter of which guarantees us context)
		if ( match.length === 1 ) {

			// Reduce context if the leading compound selector is an ID
			tokens = match[0] = match[0].slice( 0 );
			if ( tokens.length > 2 && (token = tokens[0]).type === "ID" &&
					support.getById && context.nodeType === 9 && documentIsHTML &&
					Expr.relative[ tokens[1].type ] ) {

				context = ( Expr.find["ID"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
				if ( !context ) {
					return results;

				// Precompiled matchers will still verify ancestry, so step up a level
				} else if ( compiled ) {
					context = context.parentNode;
				}

				selector = selector.slice( tokens.shift().value.length );
			}

			// Fetch a seed set for right-to-left matching
			i = matchExpr["needsContext"].test( selector ) ? 0 : tokens.length;
			while ( i-- ) {
				token = tokens[i];

				// Abort if we hit a combinator
				if ( Expr.relative[ (type = token.type) ] ) {
					break;
				}
				if ( (find = Expr.find[ type ]) ) {
					// Search, expanding context for leading sibling combinators
					if ( (seed = find(
						token.matches[0].replace( runescape, funescape ),
						rsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
					)) ) {

						// If seed is empty or no tokens remain, we can return early
						tokens.splice( i, 1 );
						selector = seed.length && toSelector( tokens );
						if ( !selector ) {
							push.apply( results, seed );
							return results;
						}

						break;
					}
				}
			}
		}

		// Compile and execute a filtering function if one is not provided
		// Provide `match` to avoid retokenization if we modified the selector above
		( compiled || compile( selector, match ) )(
			seed,
			context,
			!documentIsHTML,
			results,
			!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
		);
		return results;
	};

	// One-time assignments

	// Sort stability
	support.sortStable = expando.split("").sort( sortOrder ).join("") === expando;

	// Support: Chrome 14-35+
	// Always assume duplicates if they aren't passed to the comparison function
	support.detectDuplicates = !!hasDuplicate;

	// Initialize against the default document
	setDocument();

	// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
	// Detached nodes confoundingly follow *each other*
	support.sortDetached = assert(function( div1 ) {
		// Should return 1, but returns 4 (following)
		return div1.compareDocumentPosition( document.createElement("div") ) & 1;
	});

	// Support: IE<8
	// Prevent attribute/property "interpolation"
	// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
	if ( !assert(function( div ) {
		div.innerHTML = "<a href='#'></a>";
		return div.firstChild.getAttribute("href") === "#" ;
	}) ) {
		addHandle( "type|href|height|width", function( elem, name, isXML ) {
			if ( !isXML ) {
				return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
			}
		});
	}

	// Support: IE<9
	// Use defaultValue in place of getAttribute("value")
	if ( !support.attributes || !assert(function( div ) {
		div.innerHTML = "<input/>";
		div.firstChild.setAttribute( "value", "" );
		return div.firstChild.getAttribute( "value" ) === "";
	}) ) {
		addHandle( "value", function( elem, name, isXML ) {
			if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
				return elem.defaultValue;
			}
		});
	}

	// Support: IE<9
	// Use getAttributeNode to fetch booleans when getAttribute lies
	if ( !assert(function( div ) {
		return div.getAttribute("disabled") == null;
	}) ) {
		addHandle( booleans, function( elem, name, isXML ) {
			var val;
			if ( !isXML ) {
				return elem[ name ] === true ? name.toLowerCase() :
						(val = elem.getAttributeNode( name )) && val.specified ?
						val.value :
					null;
			}
		});
	}

	return Sizzle;

	})( window );



	jQuery.find = Sizzle;
	jQuery.expr = Sizzle.selectors;
	jQuery.expr[ ":" ] = jQuery.expr.pseudos;
	jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
	jQuery.text = Sizzle.getText;
	jQuery.isXMLDoc = Sizzle.isXML;
	jQuery.contains = Sizzle.contains;



	var dir = function( elem, dir, until ) {
		var matched = [],
			truncate = until !== undefined;

		while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
			if ( elem.nodeType === 1 ) {
				if ( truncate && jQuery( elem ).is( until ) ) {
					break;
				}
				matched.push( elem );
			}
		}
		return matched;
	};


	var siblings = function( n, elem ) {
		var matched = [];

		for ( ; n; n = n.nextSibling ) {
			if ( n.nodeType === 1 && n !== elem ) {
				matched.push( n );
			}
		}

		return matched;
	};


	var rneedsContext = jQuery.expr.match.needsContext;

	var rsingleTag = ( /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/ );



	var risSimple = /^.[^:#\[\.,]*$/;

	// Implement the identical functionality for filter and not
	function winnow( elements, qualifier, not ) {
		if ( jQuery.isFunction( qualifier ) ) {
			return jQuery.grep( elements, function( elem, i ) {
				/* jshint -W018 */
				return !!qualifier.call( elem, i, elem ) !== not;
			} );

		}

		if ( qualifier.nodeType ) {
			return jQuery.grep( elements, function( elem ) {
				return ( elem === qualifier ) !== not;
			} );

		}

		if ( typeof qualifier === "string" ) {
			if ( risSimple.test( qualifier ) ) {
				return jQuery.filter( qualifier, elements, not );
			}

			qualifier = jQuery.filter( qualifier, elements );
		}

		return jQuery.grep( elements, function( elem ) {
			return ( indexOf.call( qualifier, elem ) > -1 ) !== not;
		} );
	}

	jQuery.filter = function( expr, elems, not ) {
		var elem = elems[ 0 ];

		if ( not ) {
			expr = ":not(" + expr + ")";
		}

		return elems.length === 1 && elem.nodeType === 1 ?
			jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
			jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
				return elem.nodeType === 1;
			} ) );
	};

	jQuery.fn.extend( {
		find: function( selector ) {
			var i,
				len = this.length,
				ret = [],
				self = this;

			if ( typeof selector !== "string" ) {
				return this.pushStack( jQuery( selector ).filter( function() {
					for ( i = 0; i < len; i++ ) {
						if ( jQuery.contains( self[ i ], this ) ) {
							return true;
						}
					}
				} ) );
			}

			for ( i = 0; i < len; i++ ) {
				jQuery.find( selector, self[ i ], ret );
			}

			// Needed because $( selector, context ) becomes $( context ).find( selector )
			ret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
			ret.selector = this.selector ? this.selector + " " + selector : selector;
			return ret;
		},
		filter: function( selector ) {
			return this.pushStack( winnow( this, selector || [], false ) );
		},
		not: function( selector ) {
			return this.pushStack( winnow( this, selector || [], true ) );
		},
		is: function( selector ) {
			return !!winnow(
				this,

				// If this is a positional/relative selector, check membership in the returned set
				// so $("p:first").is("p:last") won't return true for a doc with two "p".
				typeof selector === "string" && rneedsContext.test( selector ) ?
					jQuery( selector ) :
					selector || [],
				false
			).length;
		}
	} );


	// Initialize a jQuery object


	// A central reference to the root jQuery(document)
	var rootjQuery,

		// A simple way to check for HTML strings
		// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
		// Strict HTML recognition (#11290: must start with <)
		rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,

		init = jQuery.fn.init = function( selector, context, root ) {
			var match, elem;

			// HANDLE: $(""), $(null), $(undefined), $(false)
			if ( !selector ) {
				return this;
			}

			// Method init() accepts an alternate rootjQuery
			// so migrate can support jQuery.sub (gh-2101)
			root = root || rootjQuery;

			// Handle HTML strings
			if ( typeof selector === "string" ) {
				if ( selector[ 0 ] === "<" &&
					selector[ selector.length - 1 ] === ">" &&
					selector.length >= 3 ) {

					// Assume that strings that start and end with <> are HTML and skip the regex check
					match = [ null, selector, null ];

				} else {
					match = rquickExpr.exec( selector );
				}

				// Match html or make sure no context is specified for #id
				if ( match && ( match[ 1 ] || !context ) ) {

					// HANDLE: $(html) -> $(array)
					if ( match[ 1 ] ) {
						context = context instanceof jQuery ? context[ 0 ] : context;

						// Option to run scripts is true for back-compat
						// Intentionally let the error be thrown if parseHTML is not present
						jQuery.merge( this, jQuery.parseHTML(
							match[ 1 ],
							context && context.nodeType ? context.ownerDocument || context : document,
							true
						) );

						// HANDLE: $(html, props)
						if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
							for ( match in context ) {

								// Properties of context are called as methods if possible
								if ( jQuery.isFunction( this[ match ] ) ) {
									this[ match ]( context[ match ] );

								// ...and otherwise set as attributes
								} else {
									this.attr( match, context[ match ] );
								}
							}
						}

						return this;

					// HANDLE: $(#id)
					} else {
						elem = document.getElementById( match[ 2 ] );

						// Support: Blackberry 4.6
						// gEBID returns nodes no longer in the document (#6963)
						if ( elem && elem.parentNode ) {

							// Inject the element directly into the jQuery object
							this.length = 1;
							this[ 0 ] = elem;
						}

						this.context = document;
						this.selector = selector;
						return this;
					}

				// HANDLE: $(expr, $(...))
				} else if ( !context || context.jquery ) {
					return ( context || root ).find( selector );

				// HANDLE: $(expr, context)
				// (which is just equivalent to: $(context).find(expr)
				} else {
					return this.constructor( context ).find( selector );
				}

			// HANDLE: $(DOMElement)
			} else if ( selector.nodeType ) {
				this.context = this[ 0 ] = selector;
				this.length = 1;
				return this;

			// HANDLE: $(function)
			// Shortcut for document ready
			} else if ( jQuery.isFunction( selector ) ) {
				return root.ready !== undefined ?
					root.ready( selector ) :

					// Execute immediately if ready is not present
					selector( jQuery );
			}

			if ( selector.selector !== undefined ) {
				this.selector = selector.selector;
				this.context = selector.context;
			}

			return jQuery.makeArray( selector, this );
		};

	// Give the init function the jQuery prototype for later instantiation
	init.prototype = jQuery.fn;

	// Initialize central reference
	rootjQuery = jQuery( document );


	var rparentsprev = /^(?:parents|prev(?:Until|All))/,

		// Methods guaranteed to produce a unique set when starting from a unique set
		guaranteedUnique = {
			children: true,
			contents: true,
			next: true,
			prev: true
		};

	jQuery.fn.extend( {
		has: function( target ) {
			var targets = jQuery( target, this ),
				l = targets.length;

			return this.filter( function() {
				var i = 0;
				for ( ; i < l; i++ ) {
					if ( jQuery.contains( this, targets[ i ] ) ) {
						return true;
					}
				}
			} );
		},

		closest: function( selectors, context ) {
			var cur,
				i = 0,
				l = this.length,
				matched = [],
				pos = rneedsContext.test( selectors ) || typeof selectors !== "string" ?
					jQuery( selectors, context || this.context ) :
					0;

			for ( ; i < l; i++ ) {
				for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

					// Always skip document fragments
					if ( cur.nodeType < 11 && ( pos ?
						pos.index( cur ) > -1 :

						// Don't pass non-elements to Sizzle
						cur.nodeType === 1 &&
							jQuery.find.matchesSelector( cur, selectors ) ) ) {

						matched.push( cur );
						break;
					}
				}
			}

			return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
		},

		// Determine the position of an element within the set
		index: function( elem ) {

			// No argument, return index in parent
			if ( !elem ) {
				return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
			}

			// Index in selector
			if ( typeof elem === "string" ) {
				return indexOf.call( jQuery( elem ), this[ 0 ] );
			}

			// Locate the position of the desired element
			return indexOf.call( this,

				// If it receives a jQuery object, the first element is used
				elem.jquery ? elem[ 0 ] : elem
			);
		},

		add: function( selector, context ) {
			return this.pushStack(
				jQuery.uniqueSort(
					jQuery.merge( this.get(), jQuery( selector, context ) )
				)
			);
		},

		addBack: function( selector ) {
			return this.add( selector == null ?
				this.prevObject : this.prevObject.filter( selector )
			);
		}
	} );

	function sibling( cur, dir ) {
		while ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
		return cur;
	}

	jQuery.each( {
		parent: function( elem ) {
			var parent = elem.parentNode;
			return parent && parent.nodeType !== 11 ? parent : null;
		},
		parents: function( elem ) {
			return dir( elem, "parentNode" );
		},
		parentsUntil: function( elem, i, until ) {
			return dir( elem, "parentNode", until );
		},
		next: function( elem ) {
			return sibling( elem, "nextSibling" );
		},
		prev: function( elem ) {
			return sibling( elem, "previousSibling" );
		},
		nextAll: function( elem ) {
			return dir( elem, "nextSibling" );
		},
		prevAll: function( elem ) {
			return dir( elem, "previousSibling" );
		},
		nextUntil: function( elem, i, until ) {
			return dir( elem, "nextSibling", until );
		},
		prevUntil: function( elem, i, until ) {
			return dir( elem, "previousSibling", until );
		},
		siblings: function( elem ) {
			return siblings( ( elem.parentNode || {} ).firstChild, elem );
		},
		children: function( elem ) {
			return siblings( elem.firstChild );
		},
		contents: function( elem ) {
			return elem.contentDocument || jQuery.merge( [], elem.childNodes );
		}
	}, function( name, fn ) {
		jQuery.fn[ name ] = function( until, selector ) {
			var matched = jQuery.map( this, fn, until );

			if ( name.slice( -5 ) !== "Until" ) {
				selector = until;
			}

			if ( selector && typeof selector === "string" ) {
				matched = jQuery.filter( selector, matched );
			}

			if ( this.length > 1 ) {

				// Remove duplicates
				if ( !guaranteedUnique[ name ] ) {
					jQuery.uniqueSort( matched );
				}

				// Reverse order for parents* and prev-derivatives
				if ( rparentsprev.test( name ) ) {
					matched.reverse();
				}
			}

			return this.pushStack( matched );
		};
	} );
	var rnotwhite = ( /\S+/g );



	// Convert String-formatted options into Object-formatted ones
	function createOptions( options ) {
		var object = {};
		jQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
			object[ flag ] = true;
		} );
		return object;
	}

	/*
	 * Create a callback list using the following parameters:
	 *
	 *	options: an optional list of space-separated options that will change how
	 *			the callback list behaves or a more traditional option object
	 *
	 * By default a callback list will act like an event callback list and can be
	 * "fired" multiple times.
	 *
	 * Possible options:
	 *
	 *	once:			will ensure the callback list can only be fired once (like a Deferred)
	 *
	 *	memory:			will keep track of previous values and will call any callback added
	 *					after the list has been fired right away with the latest "memorized"
	 *					values (like a Deferred)
	 *
	 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
	 *
	 *	stopOnFalse:	interrupt callings when a callback returns false
	 *
	 */
	jQuery.Callbacks = function( options ) {

		// Convert options from String-formatted to Object-formatted if needed
		// (we check in cache first)
		options = typeof options === "string" ?
			createOptions( options ) :
			jQuery.extend( {}, options );

		var // Flag to know if list is currently firing
			firing,

			// Last fire value for non-forgettable lists
			memory,

			// Flag to know if list was already fired
			fired,

			// Flag to prevent firing
			locked,

			// Actual callback list
			list = [],

			// Queue of execution data for repeatable lists
			queue = [],

			// Index of currently firing callback (modified by add/remove as needed)
			firingIndex = -1,

			// Fire callbacks
			fire = function() {

				// Enforce single-firing
				locked = options.once;

				// Execute callbacks for all pending executions,
				// respecting firingIndex overrides and runtime changes
				fired = firing = true;
				for ( ; queue.length; firingIndex = -1 ) {
					memory = queue.shift();
					while ( ++firingIndex < list.length ) {

						// Run callback and check for early termination
						if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
							options.stopOnFalse ) {

							// Jump to end and forget the data so .add doesn't re-fire
							firingIndex = list.length;
							memory = false;
						}
					}
				}

				// Forget the data if we're done with it
				if ( !options.memory ) {
					memory = false;
				}

				firing = false;

				// Clean up if we're done firing for good
				if ( locked ) {

					// Keep an empty list if we have data for future add calls
					if ( memory ) {
						list = [];

					// Otherwise, this object is spent
					} else {
						list = "";
					}
				}
			},

			// Actual Callbacks object
			self = {

				// Add a callback or a collection of callbacks to the list
				add: function() {
					if ( list ) {

						// If we have memory from a past run, we should fire after adding
						if ( memory && !firing ) {
							firingIndex = list.length - 1;
							queue.push( memory );
						}

						( function add( args ) {
							jQuery.each( args, function( _, arg ) {
								if ( jQuery.isFunction( arg ) ) {
									if ( !options.unique || !self.has( arg ) ) {
										list.push( arg );
									}
								} else if ( arg && arg.length && jQuery.type( arg ) !== "string" ) {

									// Inspect recursively
									add( arg );
								}
							} );
						} )( arguments );

						if ( memory && !firing ) {
							fire();
						}
					}
					return this;
				},

				// Remove a callback from the list
				remove: function() {
					jQuery.each( arguments, function( _, arg ) {
						var index;
						while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
							list.splice( index, 1 );

							// Handle firing indexes
							if ( index <= firingIndex ) {
								firingIndex--;
							}
						}
					} );
					return this;
				},

				// Check if a given callback is in the list.
				// If no argument is given, return whether or not list has callbacks attached.
				has: function( fn ) {
					return fn ?
						jQuery.inArray( fn, list ) > -1 :
						list.length > 0;
				},

				// Remove all callbacks from the list
				empty: function() {
					if ( list ) {
						list = [];
					}
					return this;
				},

				// Disable .fire and .add
				// Abort any current/pending executions
				// Clear all callbacks and values
				disable: function() {
					locked = queue = [];
					list = memory = "";
					return this;
				},
				disabled: function() {
					return !list;
				},

				// Disable .fire
				// Also disable .add unless we have memory (since it would have no effect)
				// Abort any pending executions
				lock: function() {
					locked = queue = [];
					if ( !memory ) {
						list = memory = "";
					}
					return this;
				},
				locked: function() {
					return !!locked;
				},

				// Call all callbacks with the given context and arguments
				fireWith: function( context, args ) {
					if ( !locked ) {
						args = args || [];
						args = [ context, args.slice ? args.slice() : args ];
						queue.push( args );
						if ( !firing ) {
							fire();
						}
					}
					return this;
				},

				// Call all the callbacks with the given arguments
				fire: function() {
					self.fireWith( this, arguments );
					return this;
				},

				// To know if the callbacks have already been called at least once
				fired: function() {
					return !!fired;
				}
			};

		return self;
	};


	jQuery.extend( {

		Deferred: function( func ) {
			var tuples = [

					// action, add listener, listener list, final state
					[ "resolve", "done", jQuery.Callbacks( "once memory" ), "resolved" ],
					[ "reject", "fail", jQuery.Callbacks( "once memory" ), "rejected" ],
					[ "notify", "progress", jQuery.Callbacks( "memory" ) ]
				],
				state = "pending",
				promise = {
					state: function() {
						return state;
					},
					always: function() {
						deferred.done( arguments ).fail( arguments );
						return this;
					},
					then: function( /* fnDone, fnFail, fnProgress */ ) {
						var fns = arguments;
						return jQuery.Deferred( function( newDefer ) {
							jQuery.each( tuples, function( i, tuple ) {
								var fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];

								// deferred[ done | fail | progress ] for forwarding actions to newDefer
								deferred[ tuple[ 1 ] ]( function() {
									var returned = fn && fn.apply( this, arguments );
									if ( returned && jQuery.isFunction( returned.promise ) ) {
										returned.promise()
											.progress( newDefer.notify )
											.done( newDefer.resolve )
											.fail( newDefer.reject );
									} else {
										newDefer[ tuple[ 0 ] + "With" ](
											this === promise ? newDefer.promise() : this,
											fn ? [ returned ] : arguments
										);
									}
								} );
							} );
							fns = null;
						} ).promise();
					},

					// Get a promise for this deferred
					// If obj is provided, the promise aspect is added to the object
					promise: function( obj ) {
						return obj != null ? jQuery.extend( obj, promise ) : promise;
					}
				},
				deferred = {};

			// Keep pipe for back-compat
			promise.pipe = promise.then;

			// Add list-specific methods
			jQuery.each( tuples, function( i, tuple ) {
				var list = tuple[ 2 ],
					stateString = tuple[ 3 ];

				// promise[ done | fail | progress ] = list.add
				promise[ tuple[ 1 ] ] = list.add;

				// Handle state
				if ( stateString ) {
					list.add( function() {

						// state = [ resolved | rejected ]
						state = stateString;

					// [ reject_list | resolve_list ].disable; progress_list.lock
					}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
				}

				// deferred[ resolve | reject | notify ]
				deferred[ tuple[ 0 ] ] = function() {
					deferred[ tuple[ 0 ] + "With" ]( this === deferred ? promise : this, arguments );
					return this;
				};
				deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
			} );

			// Make the deferred a promise
			promise.promise( deferred );

			// Call given func if any
			if ( func ) {
				func.call( deferred, deferred );
			}

			// All done!
			return deferred;
		},

		// Deferred helper
		when: function( subordinate /* , ..., subordinateN */ ) {
			var i = 0,
				resolveValues = slice.call( arguments ),
				length = resolveValues.length,

				// the count of uncompleted subordinates
				remaining = length !== 1 ||
					( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

				// the master Deferred.
				// If resolveValues consist of only a single Deferred, just use that.
				deferred = remaining === 1 ? subordinate : jQuery.Deferred(),

				// Update function for both resolve and progress values
				updateFunc = function( i, contexts, values ) {
					return function( value ) {
						contexts[ i ] = this;
						values[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
						if ( values === progressValues ) {
							deferred.notifyWith( contexts, values );
						} else if ( !( --remaining ) ) {
							deferred.resolveWith( contexts, values );
						}
					};
				},

				progressValues, progressContexts, resolveContexts;

			// Add listeners to Deferred subordinates; treat others as resolved
			if ( length > 1 ) {
				progressValues = new Array( length );
				progressContexts = new Array( length );
				resolveContexts = new Array( length );
				for ( ; i < length; i++ ) {
					if ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
						resolveValues[ i ].promise()
							.progress( updateFunc( i, progressContexts, progressValues ) )
							.done( updateFunc( i, resolveContexts, resolveValues ) )
							.fail( deferred.reject );
					} else {
						--remaining;
					}
				}
			}

			// If we're not waiting on anything, resolve the master
			if ( !remaining ) {
				deferred.resolveWith( resolveContexts, resolveValues );
			}

			return deferred.promise();
		}
	} );


	// The deferred used on DOM ready
	var readyList;

	jQuery.fn.ready = function( fn ) {

		// Add the callback
		jQuery.ready.promise().done( fn );

		return this;
	};

	jQuery.extend( {

		// Is the DOM ready to be used? Set to true once it occurs.
		isReady: false,

		// A counter to track how many items to wait for before
		// the ready event fires. See #6781
		readyWait: 1,

		// Hold (or release) the ready event
		holdReady: function( hold ) {
			if ( hold ) {
				jQuery.readyWait++;
			} else {
				jQuery.ready( true );
			}
		},

		// Handle when the DOM is ready
		ready: function( wait ) {

			// Abort if there are pending holds or we're already ready
			if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
				return;
			}

			// Remember that the DOM is ready
			jQuery.isReady = true;

			// If a normal DOM Ready event fired, decrement, and wait if need be
			if ( wait !== true && --jQuery.readyWait > 0 ) {
				return;
			}

			// If there are functions bound, to execute
			readyList.resolveWith( document, [ jQuery ] );

			// Trigger any bound ready events
			if ( jQuery.fn.triggerHandler ) {
				jQuery( document ).triggerHandler( "ready" );
				jQuery( document ).off( "ready" );
			}
		}
	} );

	/**
	 * The ready event handler and self cleanup method
	 */
	function completed() {
		document.removeEventListener( "DOMContentLoaded", completed );
		window.removeEventListener( "load", completed );
		jQuery.ready();
	}

	jQuery.ready.promise = function( obj ) {
		if ( !readyList ) {

			readyList = jQuery.Deferred();

			// Catch cases where $(document).ready() is called
			// after the browser event has already occurred.
			// Support: IE9-10 only
			// Older IE sometimes signals "interactive" too soon
			if ( document.readyState === "complete" ||
				( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

				// Handle it asynchronously to allow scripts the opportunity to delay ready
				window.setTimeout( jQuery.ready );

			} else {

				// Use the handy event callback
				document.addEventListener( "DOMContentLoaded", completed );

				// A fallback to window.onload, that will always work
				window.addEventListener( "load", completed );
			}
		}
		return readyList.promise( obj );
	};

	// Kick off the DOM ready check even if the user does not
	jQuery.ready.promise();




	// Multifunctional method to get and set values of a collection
	// The value/s can optionally be executed if it's a function
	var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
		var i = 0,
			len = elems.length,
			bulk = key == null;

		// Sets many values
		if ( jQuery.type( key ) === "object" ) {
			chainable = true;
			for ( i in key ) {
				access( elems, fn, i, key[ i ], true, emptyGet, raw );
			}

		// Sets one value
		} else if ( value !== undefined ) {
			chainable = true;

			if ( !jQuery.isFunction( value ) ) {
				raw = true;
			}

			if ( bulk ) {

				// Bulk operations run against the entire set
				if ( raw ) {
					fn.call( elems, value );
					fn = null;

				// ...except when executing function values
				} else {
					bulk = fn;
					fn = function( elem, key, value ) {
						return bulk.call( jQuery( elem ), value );
					};
				}
			}

			if ( fn ) {
				for ( ; i < len; i++ ) {
					fn(
						elems[ i ], key, raw ?
						value :
						value.call( elems[ i ], i, fn( elems[ i ], key ) )
					);
				}
			}
		}

		return chainable ?
			elems :

			// Gets
			bulk ?
				fn.call( elems ) :
				len ? fn( elems[ 0 ], key ) : emptyGet;
	};
	var acceptData = function( owner ) {

		// Accepts only:
		//  - Node
		//    - Node.ELEMENT_NODE
		//    - Node.DOCUMENT_NODE
		//  - Object
		//    - Any
		/* jshint -W018 */
		return owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
	};




	function Data() {
		this.expando = jQuery.expando + Data.uid++;
	}

	Data.uid = 1;

	Data.prototype = {

		register: function( owner, initial ) {
			var value = initial || {};

			// If it is a node unlikely to be stringify-ed or looped over
			// use plain assignment
			if ( owner.nodeType ) {
				owner[ this.expando ] = value;

			// Otherwise secure it in a non-enumerable, non-writable property
			// configurability must be true to allow the property to be
			// deleted with the delete operator
			} else {
				Object.defineProperty( owner, this.expando, {
					value: value,
					writable: true,
					configurable: true
				} );
			}
			return owner[ this.expando ];
		},
		cache: function( owner ) {

			// We can accept data for non-element nodes in modern browsers,
			// but we should not, see #8335.
			// Always return an empty object.
			if ( !acceptData( owner ) ) {
				return {};
			}

			// Check if the owner object already has a cache
			var value = owner[ this.expando ];

			// If not, create one
			if ( !value ) {
				value = {};

				// We can accept data for non-element nodes in modern browsers,
				// but we should not, see #8335.
				// Always return an empty object.
				if ( acceptData( owner ) ) {

					// If it is a node unlikely to be stringify-ed or looped over
					// use plain assignment
					if ( owner.nodeType ) {
						owner[ this.expando ] = value;

					// Otherwise secure it in a non-enumerable property
					// configurable must be true to allow the property to be
					// deleted when data is removed
					} else {
						Object.defineProperty( owner, this.expando, {
							value: value,
							configurable: true
						} );
					}
				}
			}

			return value;
		},
		set: function( owner, data, value ) {
			var prop,
				cache = this.cache( owner );

			// Handle: [ owner, key, value ] args
			if ( typeof data === "string" ) {
				cache[ data ] = value;

			// Handle: [ owner, { properties } ] args
			} else {

				// Copy the properties one-by-one to the cache object
				for ( prop in data ) {
					cache[ prop ] = data[ prop ];
				}
			}
			return cache;
		},
		get: function( owner, key ) {
			return key === undefined ?
				this.cache( owner ) :
				owner[ this.expando ] && owner[ this.expando ][ key ];
		},
		access: function( owner, key, value ) {
			var stored;

			// In cases where either:
			//
			//   1. No key was specified
			//   2. A string key was specified, but no value provided
			//
			// Take the "read" path and allow the get method to determine
			// which value to return, respectively either:
			//
			//   1. The entire cache object
			//   2. The data stored at the key
			//
			if ( key === undefined ||
					( ( key && typeof key === "string" ) && value === undefined ) ) {

				stored = this.get( owner, key );

				return stored !== undefined ?
					stored : this.get( owner, jQuery.camelCase( key ) );
			}

			// When the key is not a string, or both a key and value
			// are specified, set or extend (existing objects) with either:
			//
			//   1. An object of properties
			//   2. A key and value
			//
			this.set( owner, key, value );

			// Since the "set" path can have two possible entry points
			// return the expected data based on which path was taken[*]
			return value !== undefined ? value : key;
		},
		remove: function( owner, key ) {
			var i, name, camel,
				cache = owner[ this.expando ];

			if ( cache === undefined ) {
				return;
			}

			if ( key === undefined ) {
				this.register( owner );

			} else {

				// Support array or space separated string of keys
				if ( jQuery.isArray( key ) ) {

					// If "name" is an array of keys...
					// When data is initially created, via ("key", "val") signature,
					// keys will be converted to camelCase.
					// Since there is no way to tell _how_ a key was added, remove
					// both plain key and camelCase key. #12786
					// This will only penalize the array argument path.
					name = key.concat( key.map( jQuery.camelCase ) );
				} else {
					camel = jQuery.camelCase( key );

					// Try the string as a key before any manipulation
					if ( key in cache ) {
						name = [ key, camel ];
					} else {

						// If a key with the spaces exists, use it.
						// Otherwise, create an array by matching non-whitespace
						name = camel;
						name = name in cache ?
							[ name ] : ( name.match( rnotwhite ) || [] );
					}
				}

				i = name.length;

				while ( i-- ) {
					delete cache[ name[ i ] ];
				}
			}

			// Remove the expando if there's no more data
			if ( key === undefined || jQuery.isEmptyObject( cache ) ) {

				// Support: Chrome <= 35-45+
				// Webkit & Blink performance suffers when deleting properties
				// from DOM nodes, so set to undefined instead
				// https://code.google.com/p/chromium/issues/detail?id=378607
				if ( owner.nodeType ) {
					owner[ this.expando ] = undefined;
				} else {
					delete owner[ this.expando ];
				}
			}
		},
		hasData: function( owner ) {
			var cache = owner[ this.expando ];
			return cache !== undefined && !jQuery.isEmptyObject( cache );
		}
	};
	var dataPriv = new Data();

	var dataUser = new Data();



	//	Implementation Summary
	//
	//	1. Enforce API surface and semantic compatibility with 1.9.x branch
	//	2. Improve the module's maintainability by reducing the storage
	//		paths to a single mechanism.
	//	3. Use the same single mechanism to support "private" and "user" data.
	//	4. _Never_ expose "private" data to user code (TODO: Drop _data, _removeData)
	//	5. Avoid exposing implementation details on user objects (eg. expando properties)
	//	6. Provide a clear path for implementation upgrade to WeakMap in 2014

	var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
		rmultiDash = /[A-Z]/g;

	function dataAttr( elem, key, data ) {
		var name;

		// If nothing was found internally, try to fetch any
		// data from the HTML5 data-* attribute
		if ( data === undefined && elem.nodeType === 1 ) {
			name = "data-" + key.replace( rmultiDash, "-$&" ).toLowerCase();
			data = elem.getAttribute( name );

			if ( typeof data === "string" ) {
				try {
					data = data === "true" ? true :
						data === "false" ? false :
						data === "null" ? null :

						// Only convert to a number if it doesn't change the string
						+data + "" === data ? +data :
						rbrace.test( data ) ? jQuery.parseJSON( data ) :
						data;
				} catch ( e ) {}

				// Make sure we set the data so it isn't changed later
				dataUser.set( elem, key, data );
			} else {
				data = undefined;
			}
		}
		return data;
	}

	jQuery.extend( {
		hasData: function( elem ) {
			return dataUser.hasData( elem ) || dataPriv.hasData( elem );
		},

		data: function( elem, name, data ) {
			return dataUser.access( elem, name, data );
		},

		removeData: function( elem, name ) {
			dataUser.remove( elem, name );
		},

		// TODO: Now that all calls to _data and _removeData have been replaced
		// with direct calls to dataPriv methods, these can be deprecated.
		_data: function( elem, name, data ) {
			return dataPriv.access( elem, name, data );
		},

		_removeData: function( elem, name ) {
			dataPriv.remove( elem, name );
		}
	} );

	jQuery.fn.extend( {
		data: function( key, value ) {
			var i, name, data,
				elem = this[ 0 ],
				attrs = elem && elem.attributes;

			// Gets all values
			if ( key === undefined ) {
				if ( this.length ) {
					data = dataUser.get( elem );

					if ( elem.nodeType === 1 && !dataPriv.get( elem, "hasDataAttrs" ) ) {
						i = attrs.length;
						while ( i-- ) {

							// Support: IE11+
							// The attrs elements can be null (#14894)
							if ( attrs[ i ] ) {
								name = attrs[ i ].name;
								if ( name.indexOf( "data-" ) === 0 ) {
									name = jQuery.camelCase( name.slice( 5 ) );
									dataAttr( elem, name, data[ name ] );
								}
							}
						}
						dataPriv.set( elem, "hasDataAttrs", true );
					}
				}

				return data;
			}

			// Sets multiple values
			if ( typeof key === "object" ) {
				return this.each( function() {
					dataUser.set( this, key );
				} );
			}

			return access( this, function( value ) {
				var data, camelKey;

				// The calling jQuery object (element matches) is not empty
				// (and therefore has an element appears at this[ 0 ]) and the
				// `value` parameter was not undefined. An empty jQuery object
				// will result in `undefined` for elem = this[ 0 ] which will
				// throw an exception if an attempt to read a data cache is made.
				if ( elem && value === undefined ) {

					// Attempt to get data from the cache
					// with the key as-is
					data = dataUser.get( elem, key ) ||

						// Try to find dashed key if it exists (gh-2779)
						// This is for 2.2.x only
						dataUser.get( elem, key.replace( rmultiDash, "-$&" ).toLowerCase() );

					if ( data !== undefined ) {
						return data;
					}

					camelKey = jQuery.camelCase( key );

					// Attempt to get data from the cache
					// with the key camelized
					data = dataUser.get( elem, camelKey );
					if ( data !== undefined ) {
						return data;
					}

					// Attempt to "discover" the data in
					// HTML5 custom data-* attrs
					data = dataAttr( elem, camelKey, undefined );
					if ( data !== undefined ) {
						return data;
					}

					// We tried really hard, but the data doesn't exist.
					return;
				}

				// Set the data...
				camelKey = jQuery.camelCase( key );
				this.each( function() {

					// First, attempt to store a copy or reference of any
					// data that might've been store with a camelCased key.
					var data = dataUser.get( this, camelKey );

					// For HTML5 data-* attribute interop, we have to
					// store property names with dashes in a camelCase form.
					// This might not apply to all properties...*
					dataUser.set( this, camelKey, value );

					// *... In the case of properties that might _actually_
					// have dashes, we need to also store a copy of that
					// unchanged property.
					if ( key.indexOf( "-" ) > -1 && data !== undefined ) {
						dataUser.set( this, key, value );
					}
				} );
			}, null, value, arguments.length > 1, null, true );
		},

		removeData: function( key ) {
			return this.each( function() {
				dataUser.remove( this, key );
			} );
		}
	} );


	jQuery.extend( {
		queue: function( elem, type, data ) {
			var queue;

			if ( elem ) {
				type = ( type || "fx" ) + "queue";
				queue = dataPriv.get( elem, type );

				// Speed up dequeue by getting out quickly if this is just a lookup
				if ( data ) {
					if ( !queue || jQuery.isArray( data ) ) {
						queue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
					} else {
						queue.push( data );
					}
				}
				return queue || [];
			}
		},

		dequeue: function( elem, type ) {
			type = type || "fx";

			var queue = jQuery.queue( elem, type ),
				startLength = queue.length,
				fn = queue.shift(),
				hooks = jQuery._queueHooks( elem, type ),
				next = function() {
					jQuery.dequeue( elem, type );
				};

			// If the fx queue is dequeued, always remove the progress sentinel
			if ( fn === "inprogress" ) {
				fn = queue.shift();
				startLength--;
			}

			if ( fn ) {

				// Add a progress sentinel to prevent the fx queue from being
				// automatically dequeued
				if ( type === "fx" ) {
					queue.unshift( "inprogress" );
				}

				// Clear up the last queue stop function
				delete hooks.stop;
				fn.call( elem, next, hooks );
			}

			if ( !startLength && hooks ) {
				hooks.empty.fire();
			}
		},

		// Not public - generate a queueHooks object, or return the current one
		_queueHooks: function( elem, type ) {
			var key = type + "queueHooks";
			return dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
				empty: jQuery.Callbacks( "once memory" ).add( function() {
					dataPriv.remove( elem, [ type + "queue", key ] );
				} )
			} );
		}
	} );

	jQuery.fn.extend( {
		queue: function( type, data ) {
			var setter = 2;

			if ( typeof type !== "string" ) {
				data = type;
				type = "fx";
				setter--;
			}

			if ( arguments.length < setter ) {
				return jQuery.queue( this[ 0 ], type );
			}

			return data === undefined ?
				this :
				this.each( function() {
					var queue = jQuery.queue( this, type, data );

					// Ensure a hooks for this queue
					jQuery._queueHooks( this, type );

					if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
						jQuery.dequeue( this, type );
					}
				} );
		},
		dequeue: function( type ) {
			return this.each( function() {
				jQuery.dequeue( this, type );
			} );
		},
		clearQueue: function( type ) {
			return this.queue( type || "fx", [] );
		},

		// Get a promise resolved when queues of a certain type
		// are emptied (fx is the type by default)
		promise: function( type, obj ) {
			var tmp,
				count = 1,
				defer = jQuery.Deferred(),
				elements = this,
				i = this.length,
				resolve = function() {
					if ( !( --count ) ) {
						defer.resolveWith( elements, [ elements ] );
					}
				};

			if ( typeof type !== "string" ) {
				obj = type;
				type = undefined;
			}
			type = type || "fx";

			while ( i-- ) {
				tmp = dataPriv.get( elements[ i ], type + "queueHooks" );
				if ( tmp && tmp.empty ) {
					count++;
					tmp.empty.add( resolve );
				}
			}
			resolve();
			return defer.promise( obj );
		}
	} );
	var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

	var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


	var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

	var isHidden = function( elem, el ) {

			// isHidden might be called from jQuery#filter function;
			// in that case, element will be second argument
			elem = el || elem;
			return jQuery.css( elem, "display" ) === "none" ||
				!jQuery.contains( elem.ownerDocument, elem );
		};



	function adjustCSS( elem, prop, valueParts, tween ) {
		var adjusted,
			scale = 1,
			maxIterations = 20,
			currentValue = tween ?
				function() { return tween.cur(); } :
				function() { return jQuery.css( elem, prop, "" ); },
			initial = currentValue(),
			unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

			// Starting value computation is required for potential unit mismatches
			initialInUnit = ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
				rcssNum.exec( jQuery.css( elem, prop ) );

		if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

			// Trust units reported by jQuery.css
			unit = unit || initialInUnit[ 3 ];

			// Make sure we update the tween properties later on
			valueParts = valueParts || [];

			// Iteratively approximate from a nonzero starting point
			initialInUnit = +initial || 1;

			do {

				// If previous iteration zeroed out, double until we get *something*.
				// Use string for doubling so we don't accidentally see scale as unchanged below
				scale = scale || ".5";

				// Adjust and apply
				initialInUnit = initialInUnit / scale;
				jQuery.style( elem, prop, initialInUnit + unit );

			// Update scale, tolerating zero or NaN from tween.cur()
			// Break the loop if scale is unchanged or perfect, or if we've just had enough.
			} while (
				scale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations
			);
		}

		if ( valueParts ) {
			initialInUnit = +initialInUnit || +initial || 0;

			// Apply relative offset (+=/-=) if specified
			adjusted = valueParts[ 1 ] ?
				initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
				+valueParts[ 2 ];
			if ( tween ) {
				tween.unit = unit;
				tween.start = initialInUnit;
				tween.end = adjusted;
			}
		}
		return adjusted;
	}
	var rcheckableType = ( /^(?:checkbox|radio)$/i );

	var rtagName = ( /<([\w:-]+)/ );

	var rscriptType = ( /^$|\/(?:java|ecma)script/i );



	// We have to close these tags to support XHTML (#13200)
	var wrapMap = {

		// Support: IE9
		option: [ 1, "<select multiple='multiple'>", "</select>" ],

		// XHTML parsers do not magically insert elements in the
		// same way that tag soup parsers do. So we cannot shorten
		// this by omitting <tbody> or other required elements.
		thead: [ 1, "<table>", "</table>" ],
		col: [ 2, "<table><colgroup>", "</colgroup></table>" ],
		tr: [ 2, "<table><tbody>", "</tbody></table>" ],
		td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

		_default: [ 0, "", "" ]
	};

	// Support: IE9
	wrapMap.optgroup = wrapMap.option;

	wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
	wrapMap.th = wrapMap.td;


	function getAll( context, tag ) {

		// Support: IE9-11+
		// Use typeof to avoid zero-argument method invocation on host objects (#15151)
		var ret = typeof context.getElementsByTagName !== "undefined" ?
				context.getElementsByTagName( tag || "*" ) :
				typeof context.querySelectorAll !== "undefined" ?
					context.querySelectorAll( tag || "*" ) :
				[];

		return tag === undefined || tag && jQuery.nodeName( context, tag ) ?
			jQuery.merge( [ context ], ret ) :
			ret;
	}


	// Mark scripts as having already been evaluated
	function setGlobalEval( elems, refElements ) {
		var i = 0,
			l = elems.length;

		for ( ; i < l; i++ ) {
			dataPriv.set(
				elems[ i ],
				"globalEval",
				!refElements || dataPriv.get( refElements[ i ], "globalEval" )
			);
		}
	}


	var rhtml = /<|&#?\w+;/;

	function buildFragment( elems, context, scripts, selection, ignored ) {
		var elem, tmp, tag, wrap, contains, j,
			fragment = context.createDocumentFragment(),
			nodes = [],
			i = 0,
			l = elems.length;

		for ( ; i < l; i++ ) {
			elem = elems[ i ];

			if ( elem || elem === 0 ) {

				// Add nodes directly
				if ( jQuery.type( elem ) === "object" ) {

					// Support: Android<4.1, PhantomJS<2
					// push.apply(_, arraylike) throws on ancient WebKit
					jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

				// Convert non-html into a text node
				} else if ( !rhtml.test( elem ) ) {
					nodes.push( context.createTextNode( elem ) );

				// Convert html into DOM nodes
				} else {
					tmp = tmp || fragment.appendChild( context.createElement( "div" ) );

					// Deserialize a standard representation
					tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
					wrap = wrapMap[ tag ] || wrapMap._default;
					tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

					// Descend through wrappers to the right content
					j = wrap[ 0 ];
					while ( j-- ) {
						tmp = tmp.lastChild;
					}

					// Support: Android<4.1, PhantomJS<2
					// push.apply(_, arraylike) throws on ancient WebKit
					jQuery.merge( nodes, tmp.childNodes );

					// Remember the top-level container
					tmp = fragment.firstChild;

					// Ensure the created nodes are orphaned (#12392)
					tmp.textContent = "";
				}
			}
		}

		// Remove wrapper from fragment
		fragment.textContent = "";

		i = 0;
		while ( ( elem = nodes[ i++ ] ) ) {

			// Skip elements already in the context collection (trac-4087)
			if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
				if ( ignored ) {
					ignored.push( elem );
				}
				continue;
			}

			contains = jQuery.contains( elem.ownerDocument, elem );

			// Append to fragment
			tmp = getAll( fragment.appendChild( elem ), "script" );

			// Preserve script evaluation history
			if ( contains ) {
				setGlobalEval( tmp );
			}

			// Capture executables
			if ( scripts ) {
				j = 0;
				while ( ( elem = tmp[ j++ ] ) ) {
					if ( rscriptType.test( elem.type || "" ) ) {
						scripts.push( elem );
					}
				}
			}
		}

		return fragment;
	}


	( function() {
		var fragment = document.createDocumentFragment(),
			div = fragment.appendChild( document.createElement( "div" ) ),
			input = document.createElement( "input" );

		// Support: Android 4.0-4.3, Safari<=5.1
		// Check state lost if the name is set (#11217)
		// Support: Windows Web Apps (WWA)
		// `name` and `type` must use .setAttribute for WWA (#14901)
		input.setAttribute( "type", "radio" );
		input.setAttribute( "checked", "checked" );
		input.setAttribute( "name", "t" );

		div.appendChild( input );

		// Support: Safari<=5.1, Android<4.2
		// Older WebKit doesn't clone checked state correctly in fragments
		support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

		// Support: IE<=11+
		// Make sure textarea (and checkbox) defaultValue is properly cloned
		div.innerHTML = "<textarea>x</textarea>";
		support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
	} )();


	var
		rkeyEvent = /^key/,
		rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
		rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

	function returnTrue() {
		return true;
	}

	function returnFalse() {
		return false;
	}

	// Support: IE9
	// See #13393 for more info
	function safeActiveElement() {
		try {
			return document.activeElement;
		} catch ( err ) { }
	}

	function on( elem, types, selector, data, fn, one ) {
		var origFn, type;

		// Types can be a map of types/handlers
		if ( typeof types === "object" ) {

			// ( types-Object, selector, data )
			if ( typeof selector !== "string" ) {

				// ( types-Object, data )
				data = data || selector;
				selector = undefined;
			}
			for ( type in types ) {
				on( elem, type, selector, data, types[ type ], one );
			}
			return elem;
		}

		if ( data == null && fn == null ) {

			// ( types, fn )
			fn = selector;
			data = selector = undefined;
		} else if ( fn == null ) {
			if ( typeof selector === "string" ) {

				// ( types, selector, fn )
				fn = data;
				data = undefined;
			} else {

				// ( types, data, fn )
				fn = data;
				data = selector;
				selector = undefined;
			}
		}
		if ( fn === false ) {
			fn = returnFalse;
		} else if ( !fn ) {
			return elem;
		}

		if ( one === 1 ) {
			origFn = fn;
			fn = function( event ) {

				// Can use an empty set, since event contains the info
				jQuery().off( event );
				return origFn.apply( this, arguments );
			};

			// Use same guid so caller can remove using origFn
			fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
		}
		return elem.each( function() {
			jQuery.event.add( this, types, fn, data, selector );
		} );
	}

	/*
	 * Helper functions for managing events -- not part of the public interface.
	 * Props to Dean Edwards' addEvent library for many of the ideas.
	 */
	jQuery.event = {

		global: {},

		add: function( elem, types, handler, data, selector ) {

			var handleObjIn, eventHandle, tmp,
				events, t, handleObj,
				special, handlers, type, namespaces, origType,
				elemData = dataPriv.get( elem );

			// Don't attach events to noData or text/comment nodes (but allow plain objects)
			if ( !elemData ) {
				return;
			}

			// Caller can pass in an object of custom data in lieu of the handler
			if ( handler.handler ) {
				handleObjIn = handler;
				handler = handleObjIn.handler;
				selector = handleObjIn.selector;
			}

			// Make sure that the handler has a unique ID, used to find/remove it later
			if ( !handler.guid ) {
				handler.guid = jQuery.guid++;
			}

			// Init the element's event structure and main handler, if this is the first
			if ( !( events = elemData.events ) ) {
				events = elemData.events = {};
			}
			if ( !( eventHandle = elemData.handle ) ) {
				eventHandle = elemData.handle = function( e ) {

					// Discard the second event of a jQuery.event.trigger() and
					// when an event is called after a page has unloaded
					return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
						jQuery.event.dispatch.apply( elem, arguments ) : undefined;
				};
			}

			// Handle multiple events separated by a space
			types = ( types || "" ).match( rnotwhite ) || [ "" ];
			t = types.length;
			while ( t-- ) {
				tmp = rtypenamespace.exec( types[ t ] ) || [];
				type = origType = tmp[ 1 ];
				namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

				// There *must* be a type, no attaching namespace-only handlers
				if ( !type ) {
					continue;
				}

				// If event changes its type, use the special event handlers for the changed type
				special = jQuery.event.special[ type ] || {};

				// If selector defined, determine special event api type, otherwise given type
				type = ( selector ? special.delegateType : special.bindType ) || type;

				// Update special based on newly reset type
				special = jQuery.event.special[ type ] || {};

				// handleObj is passed to all event handlers
				handleObj = jQuery.extend( {
					type: type,
					origType: origType,
					data: data,
					handler: handler,
					guid: handler.guid,
					selector: selector,
					needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
					namespace: namespaces.join( "." )
				}, handleObjIn );

				// Init the event handler queue if we're the first
				if ( !( handlers = events[ type ] ) ) {
					handlers = events[ type ] = [];
					handlers.delegateCount = 0;

					// Only use addEventListener if the special events handler returns false
					if ( !special.setup ||
						special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

						if ( elem.addEventListener ) {
							elem.addEventListener( type, eventHandle );
						}
					}
				}

				if ( special.add ) {
					special.add.call( elem, handleObj );

					if ( !handleObj.handler.guid ) {
						handleObj.handler.guid = handler.guid;
					}
				}

				// Add to the element's handler list, delegates in front
				if ( selector ) {
					handlers.splice( handlers.delegateCount++, 0, handleObj );
				} else {
					handlers.push( handleObj );
				}

				// Keep track of which events have ever been used, for event optimization
				jQuery.event.global[ type ] = true;
			}

		},

		// Detach an event or set of events from an element
		remove: function( elem, types, handler, selector, mappedTypes ) {

			var j, origCount, tmp,
				events, t, handleObj,
				special, handlers, type, namespaces, origType,
				elemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

			if ( !elemData || !( events = elemData.events ) ) {
				return;
			}

			// Once for each type.namespace in types; type may be omitted
			types = ( types || "" ).match( rnotwhite ) || [ "" ];
			t = types.length;
			while ( t-- ) {
				tmp = rtypenamespace.exec( types[ t ] ) || [];
				type = origType = tmp[ 1 ];
				namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

				// Unbind all events (on this namespace, if provided) for the element
				if ( !type ) {
					for ( type in events ) {
						jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
					}
					continue;
				}

				special = jQuery.event.special[ type ] || {};
				type = ( selector ? special.delegateType : special.bindType ) || type;
				handlers = events[ type ] || [];
				tmp = tmp[ 2 ] &&
					new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

				// Remove matching events
				origCount = j = handlers.length;
				while ( j-- ) {
					handleObj = handlers[ j ];

					if ( ( mappedTypes || origType === handleObj.origType ) &&
						( !handler || handler.guid === handleObj.guid ) &&
						( !tmp || tmp.test( handleObj.namespace ) ) &&
						( !selector || selector === handleObj.selector ||
							selector === "**" && handleObj.selector ) ) {
						handlers.splice( j, 1 );

						if ( handleObj.selector ) {
							handlers.delegateCount--;
						}
						if ( special.remove ) {
							special.remove.call( elem, handleObj );
						}
					}
				}

				// Remove generic event handler if we removed something and no more handlers exist
				// (avoids potential for endless recursion during removal of special event handlers)
				if ( origCount && !handlers.length ) {
					if ( !special.teardown ||
						special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

						jQuery.removeEvent( elem, type, elemData.handle );
					}

					delete events[ type ];
				}
			}

			// Remove data and the expando if it's no longer used
			if ( jQuery.isEmptyObject( events ) ) {
				dataPriv.remove( elem, "handle events" );
			}
		},

		dispatch: function( event ) {

			// Make a writable jQuery.Event from the native event object
			event = jQuery.event.fix( event );

			var i, j, ret, matched, handleObj,
				handlerQueue = [],
				args = slice.call( arguments ),
				handlers = ( dataPriv.get( this, "events" ) || {} )[ event.type ] || [],
				special = jQuery.event.special[ event.type ] || {};

			// Use the fix-ed jQuery.Event rather than the (read-only) native event
			args[ 0 ] = event;
			event.delegateTarget = this;

			// Call the preDispatch hook for the mapped type, and let it bail if desired
			if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
				return;
			}

			// Determine handlers
			handlerQueue = jQuery.event.handlers.call( this, event, handlers );

			// Run delegates first; they may want to stop propagation beneath us
			i = 0;
			while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
				event.currentTarget = matched.elem;

				j = 0;
				while ( ( handleObj = matched.handlers[ j++ ] ) &&
					!event.isImmediatePropagationStopped() ) {

					// Triggered event must either 1) have no namespace, or 2) have namespace(s)
					// a subset or equal to those in the bound event (both can have no namespace).
					if ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

						event.handleObj = handleObj;
						event.data = handleObj.data;

						ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
							handleObj.handler ).apply( matched.elem, args );

						if ( ret !== undefined ) {
							if ( ( event.result = ret ) === false ) {
								event.preventDefault();
								event.stopPropagation();
							}
						}
					}
				}
			}

			// Call the postDispatch hook for the mapped type
			if ( special.postDispatch ) {
				special.postDispatch.call( this, event );
			}

			return event.result;
		},

		handlers: function( event, handlers ) {
			var i, matches, sel, handleObj,
				handlerQueue = [],
				delegateCount = handlers.delegateCount,
				cur = event.target;

			// Support (at least): Chrome, IE9
			// Find delegate handlers
			// Black-hole SVG <use> instance trees (#13180)
			//
			// Support: Firefox<=42+
			// Avoid non-left-click in FF but don't block IE radio events (#3861, gh-2343)
			if ( delegateCount && cur.nodeType &&
				( event.type !== "click" || isNaN( event.button ) || event.button < 1 ) ) {

				for ( ; cur !== this; cur = cur.parentNode || this ) {

					// Don't check non-elements (#13208)
					// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
					if ( cur.nodeType === 1 && ( cur.disabled !== true || event.type !== "click" ) ) {
						matches = [];
						for ( i = 0; i < delegateCount; i++ ) {
							handleObj = handlers[ i ];

							// Don't conflict with Object.prototype properties (#13203)
							sel = handleObj.selector + " ";

							if ( matches[ sel ] === undefined ) {
								matches[ sel ] = handleObj.needsContext ?
									jQuery( sel, this ).index( cur ) > -1 :
									jQuery.find( sel, this, null, [ cur ] ).length;
							}
							if ( matches[ sel ] ) {
								matches.push( handleObj );
							}
						}
						if ( matches.length ) {
							handlerQueue.push( { elem: cur, handlers: matches } );
						}
					}
				}
			}

			// Add the remaining (directly-bound) handlers
			if ( delegateCount < handlers.length ) {
				handlerQueue.push( { elem: this, handlers: handlers.slice( delegateCount ) } );
			}

			return handlerQueue;
		},

		// Includes some event props shared by KeyEvent and MouseEvent
		props: ( "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase " +
			"metaKey relatedTarget shiftKey target timeStamp view which" ).split( " " ),

		fixHooks: {},

		keyHooks: {
			props: "char charCode key keyCode".split( " " ),
			filter: function( event, original ) {

				// Add which for key events
				if ( event.which == null ) {
					event.which = original.charCode != null ? original.charCode : original.keyCode;
				}

				return event;
			}
		},

		mouseHooks: {
			props: ( "button buttons clientX clientY offsetX offsetY pageX pageY " +
				"screenX screenY toElement" ).split( " " ),
			filter: function( event, original ) {
				var eventDoc, doc, body,
					button = original.button;

				// Calculate pageX/Y if missing and clientX/Y available
				if ( event.pageX == null && original.clientX != null ) {
					eventDoc = event.target.ownerDocument || document;
					doc = eventDoc.documentElement;
					body = eventDoc.body;

					event.pageX = original.clientX +
						( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) -
						( doc && doc.clientLeft || body && body.clientLeft || 0 );
					event.pageY = original.clientY +
						( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) -
						( doc && doc.clientTop  || body && body.clientTop  || 0 );
				}

				// Add which for click: 1 === left; 2 === middle; 3 === right
				// Note: button is not normalized, so don't use it
				if ( !event.which && button !== undefined ) {
					event.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
				}

				return event;
			}
		},

		fix: function( event ) {
			if ( event[ jQuery.expando ] ) {
				return event;
			}

			// Create a writable copy of the event object and normalize some properties
			var i, prop, copy,
				type = event.type,
				originalEvent = event,
				fixHook = this.fixHooks[ type ];

			if ( !fixHook ) {
				this.fixHooks[ type ] = fixHook =
					rmouseEvent.test( type ) ? this.mouseHooks :
					rkeyEvent.test( type ) ? this.keyHooks :
					{};
			}
			copy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

			event = new jQuery.Event( originalEvent );

			i = copy.length;
			while ( i-- ) {
				prop = copy[ i ];
				event[ prop ] = originalEvent[ prop ];
			}

			// Support: Cordova 2.5 (WebKit) (#13255)
			// All events should have a target; Cordova deviceready doesn't
			if ( !event.target ) {
				event.target = document;
			}

			// Support: Safari 6.0+, Chrome<28
			// Target should not be a text node (#504, #13143)
			if ( event.target.nodeType === 3 ) {
				event.target = event.target.parentNode;
			}

			return fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
		},

		special: {
			load: {

				// Prevent triggered image.load events from bubbling to window.load
				noBubble: true
			},
			focus: {

				// Fire native event if possible so blur/focus sequence is correct
				trigger: function() {
					if ( this !== safeActiveElement() && this.focus ) {
						this.focus();
						return false;
					}
				},
				delegateType: "focusin"
			},
			blur: {
				trigger: function() {
					if ( this === safeActiveElement() && this.blur ) {
						this.blur();
						return false;
					}
				},
				delegateType: "focusout"
			},
			click: {

				// For checkbox, fire native event so checked state will be right
				trigger: function() {
					if ( this.type === "checkbox" && this.click && jQuery.nodeName( this, "input" ) ) {
						this.click();
						return false;
					}
				},

				// For cross-browser consistency, don't fire native .click() on links
				_default: function( event ) {
					return jQuery.nodeName( event.target, "a" );
				}
			},

			beforeunload: {
				postDispatch: function( event ) {

					// Support: Firefox 20+
					// Firefox doesn't alert if the returnValue field is not set.
					if ( event.result !== undefined && event.originalEvent ) {
						event.originalEvent.returnValue = event.result;
					}
				}
			}
		}
	};

	jQuery.removeEvent = function( elem, type, handle ) {

		// This "if" is needed for plain objects
		if ( elem.removeEventListener ) {
			elem.removeEventListener( type, handle );
		}
	};

	jQuery.Event = function( src, props ) {

		// Allow instantiation without the 'new' keyword
		if ( !( this instanceof jQuery.Event ) ) {
			return new jQuery.Event( src, props );
		}

		// Event object
		if ( src && src.type ) {
			this.originalEvent = src;
			this.type = src.type;

			// Events bubbling up the document may have been marked as prevented
			// by a handler lower down the tree; reflect the correct value.
			this.isDefaultPrevented = src.defaultPrevented ||
					src.defaultPrevented === undefined &&

					// Support: Android<4.0
					src.returnValue === false ?
				returnTrue :
				returnFalse;

		// Event type
		} else {
			this.type = src;
		}

		// Put explicitly provided properties onto the event object
		if ( props ) {
			jQuery.extend( this, props );
		}

		// Create a timestamp if incoming event doesn't have one
		this.timeStamp = src && src.timeStamp || jQuery.now();

		// Mark it as fixed
		this[ jQuery.expando ] = true;
	};

	// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
	// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
	jQuery.Event.prototype = {
		constructor: jQuery.Event,
		isDefaultPrevented: returnFalse,
		isPropagationStopped: returnFalse,
		isImmediatePropagationStopped: returnFalse,
		isSimulated: false,

		preventDefault: function() {
			var e = this.originalEvent;

			this.isDefaultPrevented = returnTrue;

			if ( e && !this.isSimulated ) {
				e.preventDefault();
			}
		},
		stopPropagation: function() {
			var e = this.originalEvent;

			this.isPropagationStopped = returnTrue;

			if ( e && !this.isSimulated ) {
				e.stopPropagation();
			}
		},
		stopImmediatePropagation: function() {
			var e = this.originalEvent;

			this.isImmediatePropagationStopped = returnTrue;

			if ( e && !this.isSimulated ) {
				e.stopImmediatePropagation();
			}

			this.stopPropagation();
		}
	};

	// Create mouseenter/leave events using mouseover/out and event-time checks
	// so that event delegation works in jQuery.
	// Do the same for pointerenter/pointerleave and pointerover/pointerout
	//
	// Support: Safari 7 only
	// Safari sends mouseenter too often; see:
	// https://code.google.com/p/chromium/issues/detail?id=470258
	// for the description of the bug (it existed in older Chrome versions as well).
	jQuery.each( {
		mouseenter: "mouseover",
		mouseleave: "mouseout",
		pointerenter: "pointerover",
		pointerleave: "pointerout"
	}, function( orig, fix ) {
		jQuery.event.special[ orig ] = {
			delegateType: fix,
			bindType: fix,

			handle: function( event ) {
				var ret,
					target = this,
					related = event.relatedTarget,
					handleObj = event.handleObj;

				// For mouseenter/leave call the handler if related is outside the target.
				// NB: No relatedTarget if the mouse left/entered the browser window
				if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
					event.type = handleObj.origType;
					ret = handleObj.handler.apply( this, arguments );
					event.type = fix;
				}
				return ret;
			}
		};
	} );

	jQuery.fn.extend( {
		on: function( types, selector, data, fn ) {
			return on( this, types, selector, data, fn );
		},
		one: function( types, selector, data, fn ) {
			return on( this, types, selector, data, fn, 1 );
		},
		off: function( types, selector, fn ) {
			var handleObj, type;
			if ( types && types.preventDefault && types.handleObj ) {

				// ( event )  dispatched jQuery.Event
				handleObj = types.handleObj;
				jQuery( types.delegateTarget ).off(
					handleObj.namespace ?
						handleObj.origType + "." + handleObj.namespace :
						handleObj.origType,
					handleObj.selector,
					handleObj.handler
				);
				return this;
			}
			if ( typeof types === "object" ) {

				// ( types-object [, selector] )
				for ( type in types ) {
					this.off( type, selector, types[ type ] );
				}
				return this;
			}
			if ( selector === false || typeof selector === "function" ) {

				// ( types [, fn] )
				fn = selector;
				selector = undefined;
			}
			if ( fn === false ) {
				fn = returnFalse;
			}
			return this.each( function() {
				jQuery.event.remove( this, types, fn, selector );
			} );
		}
	} );


	var
		rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,

		// Support: IE 10-11, Edge 10240+
		// In IE/Edge using regex groups here causes severe slowdowns.
		// See https://connect.microsoft.com/IE/feedback/details/1736512/
		rnoInnerhtml = /<script|<style|<link/i,

		// checked="checked" or checked
		rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
		rscriptTypeMasked = /^true\/(.*)/,
		rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

	// Manipulating tables requires a tbody
	function manipulationTarget( elem, content ) {
		return jQuery.nodeName( elem, "table" ) &&
			jQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ?

			elem.getElementsByTagName( "tbody" )[ 0 ] ||
				elem.appendChild( elem.ownerDocument.createElement( "tbody" ) ) :
			elem;
	}

	// Replace/restore the type attribute of script elements for safe DOM manipulation
	function disableScript( elem ) {
		elem.type = ( elem.getAttribute( "type" ) !== null ) + "/" + elem.type;
		return elem;
	}
	function restoreScript( elem ) {
		var match = rscriptTypeMasked.exec( elem.type );

		if ( match ) {
			elem.type = match[ 1 ];
		} else {
			elem.removeAttribute( "type" );
		}

		return elem;
	}

	function cloneCopyEvent( src, dest ) {
		var i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

		if ( dest.nodeType !== 1 ) {
			return;
		}

		// 1. Copy private data: events, handlers, etc.
		if ( dataPriv.hasData( src ) ) {
			pdataOld = dataPriv.access( src );
			pdataCur = dataPriv.set( dest, pdataOld );
			events = pdataOld.events;

			if ( events ) {
				delete pdataCur.handle;
				pdataCur.events = {};

				for ( type in events ) {
					for ( i = 0, l = events[ type ].length; i < l; i++ ) {
						jQuery.event.add( dest, type, events[ type ][ i ] );
					}
				}
			}
		}

		// 2. Copy user data
		if ( dataUser.hasData( src ) ) {
			udataOld = dataUser.access( src );
			udataCur = jQuery.extend( {}, udataOld );

			dataUser.set( dest, udataCur );
		}
	}

	// Fix IE bugs, see support tests
	function fixInput( src, dest ) {
		var nodeName = dest.nodeName.toLowerCase();

		// Fails to persist the checked state of a cloned checkbox or radio button.
		if ( nodeName === "input" && rcheckableType.test( src.type ) ) {
			dest.checked = src.checked;

		// Fails to return the selected option to the default selected state when cloning options
		} else if ( nodeName === "input" || nodeName === "textarea" ) {
			dest.defaultValue = src.defaultValue;
		}
	}

	function domManip( collection, args, callback, ignored ) {

		// Flatten any nested arrays
		args = concat.apply( [], args );

		var fragment, first, scripts, hasScripts, node, doc,
			i = 0,
			l = collection.length,
			iNoClone = l - 1,
			value = args[ 0 ],
			isFunction = jQuery.isFunction( value );

		// We can't cloneNode fragments that contain checked, in WebKit
		if ( isFunction ||
				( l > 1 && typeof value === "string" &&
					!support.checkClone && rchecked.test( value ) ) ) {
			return collection.each( function( index ) {
				var self = collection.eq( index );
				if ( isFunction ) {
					args[ 0 ] = value.call( this, index, self.html() );
				}
				domManip( self, args, callback, ignored );
			} );
		}

		if ( l ) {
			fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
			first = fragment.firstChild;

			if ( fragment.childNodes.length === 1 ) {
				fragment = first;
			}

			// Require either new content or an interest in ignored elements to invoke the callback
			if ( first || ignored ) {
				scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
				hasScripts = scripts.length;

				// Use the original fragment for the last item
				// instead of the first because it can end up
				// being emptied incorrectly in certain situations (#8070).
				for ( ; i < l; i++ ) {
					node = fragment;

					if ( i !== iNoClone ) {
						node = jQuery.clone( node, true, true );

						// Keep references to cloned scripts for later restoration
						if ( hasScripts ) {

							// Support: Android<4.1, PhantomJS<2
							// push.apply(_, arraylike) throws on ancient WebKit
							jQuery.merge( scripts, getAll( node, "script" ) );
						}
					}

					callback.call( collection[ i ], node, i );
				}

				if ( hasScripts ) {
					doc = scripts[ scripts.length - 1 ].ownerDocument;

					// Reenable scripts
					jQuery.map( scripts, restoreScript );

					// Evaluate executable scripts on first document insertion
					for ( i = 0; i < hasScripts; i++ ) {
						node = scripts[ i ];
						if ( rscriptType.test( node.type || "" ) &&
							!dataPriv.access( node, "globalEval" ) &&
							jQuery.contains( doc, node ) ) {

							if ( node.src ) {

								// Optional AJAX dependency, but won't run scripts if not present
								if ( jQuery._evalUrl ) {
									jQuery._evalUrl( node.src );
								}
							} else {
								jQuery.globalEval( node.textContent.replace( rcleanScript, "" ) );
							}
						}
					}
				}
			}
		}

		return collection;
	}

	function remove( elem, selector, keepData ) {
		var node,
			nodes = selector ? jQuery.filter( selector, elem ) : elem,
			i = 0;

		for ( ; ( node = nodes[ i ] ) != null; i++ ) {
			if ( !keepData && node.nodeType === 1 ) {
				jQuery.cleanData( getAll( node ) );
			}

			if ( node.parentNode ) {
				if ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
					setGlobalEval( getAll( node, "script" ) );
				}
				node.parentNode.removeChild( node );
			}
		}

		return elem;
	}

	jQuery.extend( {
		htmlPrefilter: function( html ) {
			return html.replace( rxhtmlTag, "<$1></$2>" );
		},

		clone: function( elem, dataAndEvents, deepDataAndEvents ) {
			var i, l, srcElements, destElements,
				clone = elem.cloneNode( true ),
				inPage = jQuery.contains( elem.ownerDocument, elem );

			// Fix IE cloning issues
			if ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
					!jQuery.isXMLDoc( elem ) ) {

				// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
				destElements = getAll( clone );
				srcElements = getAll( elem );

				for ( i = 0, l = srcElements.length; i < l; i++ ) {
					fixInput( srcElements[ i ], destElements[ i ] );
				}
			}

			// Copy the events from the original to the clone
			if ( dataAndEvents ) {
				if ( deepDataAndEvents ) {
					srcElements = srcElements || getAll( elem );
					destElements = destElements || getAll( clone );

					for ( i = 0, l = srcElements.length; i < l; i++ ) {
						cloneCopyEvent( srcElements[ i ], destElements[ i ] );
					}
				} else {
					cloneCopyEvent( elem, clone );
				}
			}

			// Preserve script evaluation history
			destElements = getAll( clone, "script" );
			if ( destElements.length > 0 ) {
				setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
			}

			// Return the cloned set
			return clone;
		},

		cleanData: function( elems ) {
			var data, elem, type,
				special = jQuery.event.special,
				i = 0;

			for ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
				if ( acceptData( elem ) ) {
					if ( ( data = elem[ dataPriv.expando ] ) ) {
						if ( data.events ) {
							for ( type in data.events ) {
								if ( special[ type ] ) {
									jQuery.event.remove( elem, type );

								// This is a shortcut to avoid jQuery.event.remove's overhead
								} else {
									jQuery.removeEvent( elem, type, data.handle );
								}
							}
						}

						// Support: Chrome <= 35-45+
						// Assign undefined instead of using delete, see Data#remove
						elem[ dataPriv.expando ] = undefined;
					}
					if ( elem[ dataUser.expando ] ) {

						// Support: Chrome <= 35-45+
						// Assign undefined instead of using delete, see Data#remove
						elem[ dataUser.expando ] = undefined;
					}
				}
			}
		}
	} );

	jQuery.fn.extend( {

		// Keep domManip exposed until 3.0 (gh-2225)
		domManip: domManip,

		detach: function( selector ) {
			return remove( this, selector, true );
		},

		remove: function( selector ) {
			return remove( this, selector );
		},

		text: function( value ) {
			return access( this, function( value ) {
				return value === undefined ?
					jQuery.text( this ) :
					this.empty().each( function() {
						if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
							this.textContent = value;
						}
					} );
			}, null, value, arguments.length );
		},

		append: function() {
			return domManip( this, arguments, function( elem ) {
				if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
					var target = manipulationTarget( this, elem );
					target.appendChild( elem );
				}
			} );
		},

		prepend: function() {
			return domManip( this, arguments, function( elem ) {
				if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
					var target = manipulationTarget( this, elem );
					target.insertBefore( elem, target.firstChild );
				}
			} );
		},

		before: function() {
			return domManip( this, arguments, function( elem ) {
				if ( this.parentNode ) {
					this.parentNode.insertBefore( elem, this );
				}
			} );
		},

		after: function() {
			return domManip( this, arguments, function( elem ) {
				if ( this.parentNode ) {
					this.parentNode.insertBefore( elem, this.nextSibling );
				}
			} );
		},

		empty: function() {
			var elem,
				i = 0;

			for ( ; ( elem = this[ i ] ) != null; i++ ) {
				if ( elem.nodeType === 1 ) {

					// Prevent memory leaks
					jQuery.cleanData( getAll( elem, false ) );

					// Remove any remaining nodes
					elem.textContent = "";
				}
			}

			return this;
		},

		clone: function( dataAndEvents, deepDataAndEvents ) {
			dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
			deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

			return this.map( function() {
				return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
			} );
		},

		html: function( value ) {
			return access( this, function( value ) {
				var elem = this[ 0 ] || {},
					i = 0,
					l = this.length;

				if ( value === undefined && elem.nodeType === 1 ) {
					return elem.innerHTML;
				}

				// See if we can take a shortcut and just use innerHTML
				if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
					!wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

					value = jQuery.htmlPrefilter( value );

					try {
						for ( ; i < l; i++ ) {
							elem = this[ i ] || {};

							// Remove element nodes and prevent memory leaks
							if ( elem.nodeType === 1 ) {
								jQuery.cleanData( getAll( elem, false ) );
								elem.innerHTML = value;
							}
						}

						elem = 0;

					// If using innerHTML throws an exception, use the fallback method
					} catch ( e ) {}
				}

				if ( elem ) {
					this.empty().append( value );
				}
			}, null, value, arguments.length );
		},

		replaceWith: function() {
			var ignored = [];

			// Make the changes, replacing each non-ignored context element with the new content
			return domManip( this, arguments, function( elem ) {
				var parent = this.parentNode;

				if ( jQuery.inArray( this, ignored ) < 0 ) {
					jQuery.cleanData( getAll( this ) );
					if ( parent ) {
						parent.replaceChild( elem, this );
					}
				}

			// Force callback invocation
			}, ignored );
		}
	} );

	jQuery.each( {
		appendTo: "append",
		prependTo: "prepend",
		insertBefore: "before",
		insertAfter: "after",
		replaceAll: "replaceWith"
	}, function( name, original ) {
		jQuery.fn[ name ] = function( selector ) {
			var elems,
				ret = [],
				insert = jQuery( selector ),
				last = insert.length - 1,
				i = 0;

			for ( ; i <= last; i++ ) {
				elems = i === last ? this : this.clone( true );
				jQuery( insert[ i ] )[ original ]( elems );

				// Support: QtWebKit
				// .get() because push.apply(_, arraylike) throws
				push.apply( ret, elems.get() );
			}

			return this.pushStack( ret );
		};
	} );


	var iframe,
		elemdisplay = {

			// Support: Firefox
			// We have to pre-define these values for FF (#10227)
			HTML: "block",
			BODY: "block"
		};

	/**
	 * Retrieve the actual display of a element
	 * @param {String} name nodeName of the element
	 * @param {Object} doc Document object
	 */

	// Called only from within defaultDisplay
	function actualDisplay( name, doc ) {
		var elem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

			display = jQuery.css( elem[ 0 ], "display" );

		// We don't have any data stored on the element,
		// so use "detach" method as fast way to get rid of the element
		elem.detach();

		return display;
	}

	/**
	 * Try to determine the default display value of an element
	 * @param {String} nodeName
	 */
	function defaultDisplay( nodeName ) {
		var doc = document,
			display = elemdisplay[ nodeName ];

		if ( !display ) {
			display = actualDisplay( nodeName, doc );

			// If the simple way fails, read from inside an iframe
			if ( display === "none" || !display ) {

				// Use the already-created iframe if possible
				iframe = ( iframe || jQuery( "<iframe frameborder='0' width='0' height='0'/>" ) )
					.appendTo( doc.documentElement );

				// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
				doc = iframe[ 0 ].contentDocument;

				// Support: IE
				doc.write();
				doc.close();

				display = actualDisplay( nodeName, doc );
				iframe.detach();
			}

			// Store the correct default display
			elemdisplay[ nodeName ] = display;
		}

		return display;
	}
	var rmargin = ( /^margin/ );

	var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

	var getStyles = function( elem ) {

			// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
			// IE throws on elements created in popups
			// FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
			var view = elem.ownerDocument.defaultView;

			if ( !view || !view.opener ) {
				view = window;
			}

			return view.getComputedStyle( elem );
		};

	var swap = function( elem, options, callback, args ) {
		var ret, name,
			old = {};

		// Remember the old values, and insert the new ones
		for ( name in options ) {
			old[ name ] = elem.style[ name ];
			elem.style[ name ] = options[ name ];
		}

		ret = callback.apply( elem, args || [] );

		// Revert the old values
		for ( name in options ) {
			elem.style[ name ] = old[ name ];
		}

		return ret;
	};


	var documentElement = document.documentElement;



	( function() {
		var pixelPositionVal, boxSizingReliableVal, pixelMarginRightVal, reliableMarginLeftVal,
			container = document.createElement( "div" ),
			div = document.createElement( "div" );

		// Finish early in limited (non-browser) environments
		if ( !div.style ) {
			return;
		}

		// Support: IE9-11+
		// Style of cloned element affects source element cloned (#8908)
		div.style.backgroundClip = "content-box";
		div.cloneNode( true ).style.backgroundClip = "";
		support.clearCloneStyle = div.style.backgroundClip === "content-box";

		container.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;" +
			"padding:0;margin-top:1px;position:absolute";
		container.appendChild( div );

		// Executing both pixelPosition & boxSizingReliable tests require only one layout
		// so they're executed at the same time to save the second computation.
		function computeStyleTests() {
			div.style.cssText =

				// Support: Firefox<29, Android 2.3
				// Vendor-prefix box-sizing
				"-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;" +
				"position:relative;display:block;" +
				"margin:auto;border:1px;padding:1px;" +
				"top:1%;width:50%";
			div.innerHTML = "";
			documentElement.appendChild( container );

			var divStyle = window.getComputedStyle( div );
			pixelPositionVal = divStyle.top !== "1%";
			reliableMarginLeftVal = divStyle.marginLeft === "2px";
			boxSizingReliableVal = divStyle.width === "4px";

			// Support: Android 4.0 - 4.3 only
			// Some styles come back with percentage values, even though they shouldn't
			div.style.marginRight = "50%";
			pixelMarginRightVal = divStyle.marginRight === "4px";

			documentElement.removeChild( container );
		}

		jQuery.extend( support, {
			pixelPosition: function() {

				// This test is executed only once but we still do memoizing
				// since we can use the boxSizingReliable pre-computing.
				// No need to check if the test was already performed, though.
				computeStyleTests();
				return pixelPositionVal;
			},
			boxSizingReliable: function() {
				if ( boxSizingReliableVal == null ) {
					computeStyleTests();
				}
				return boxSizingReliableVal;
			},
			pixelMarginRight: function() {

				// Support: Android 4.0-4.3
				// We're checking for boxSizingReliableVal here instead of pixelMarginRightVal
				// since that compresses better and they're computed together anyway.
				if ( boxSizingReliableVal == null ) {
					computeStyleTests();
				}
				return pixelMarginRightVal;
			},
			reliableMarginLeft: function() {

				// Support: IE <=8 only, Android 4.0 - 4.3 only, Firefox <=3 - 37
				if ( boxSizingReliableVal == null ) {
					computeStyleTests();
				}
				return reliableMarginLeftVal;
			},
			reliableMarginRight: function() {

				// Support: Android 2.3
				// Check if div with explicit width and no margin-right incorrectly
				// gets computed margin-right based on width of container. (#3333)
				// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
				// This support function is only executed once so no memoizing is needed.
				var ret,
					marginDiv = div.appendChild( document.createElement( "div" ) );

				// Reset CSS: box-sizing; display; margin; border; padding
				marginDiv.style.cssText = div.style.cssText =

					// Support: Android 2.3
					// Vendor-prefix box-sizing
					"-webkit-box-sizing:content-box;box-sizing:content-box;" +
					"display:block;margin:0;border:0;padding:0";
				marginDiv.style.marginRight = marginDiv.style.width = "0";
				div.style.width = "1px";
				documentElement.appendChild( container );

				ret = !parseFloat( window.getComputedStyle( marginDiv ).marginRight );

				documentElement.removeChild( container );
				div.removeChild( marginDiv );

				return ret;
			}
		} );
	} )();


	function curCSS( elem, name, computed ) {
		var width, minWidth, maxWidth, ret,
			style = elem.style;

		computed = computed || getStyles( elem );
		ret = computed ? computed.getPropertyValue( name ) || computed[ name ] : undefined;

		// Support: Opera 12.1x only
		// Fall back to style even without computed
		// computed is undefined for elems on document fragments
		if ( ( ret === "" || ret === undefined ) && !jQuery.contains( elem.ownerDocument, elem ) ) {
			ret = jQuery.style( elem, name );
		}

		// Support: IE9
		// getPropertyValue is only needed for .css('filter') (#12537)
		if ( computed ) {

			// A tribute to the "awesome hack by Dean Edwards"
			// Android Browser returns percentage for some values,
			// but width seems to be reliably pixels.
			// This is against the CSSOM draft spec:
			// http://dev.w3.org/csswg/cssom/#resolved-values
			if ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {

				// Remember the original values
				width = style.width;
				minWidth = style.minWidth;
				maxWidth = style.maxWidth;

				// Put in the new values to get a computed value out
				style.minWidth = style.maxWidth = style.width = ret;
				ret = computed.width;

				// Revert the changed values
				style.width = width;
				style.minWidth = minWidth;
				style.maxWidth = maxWidth;
			}
		}

		return ret !== undefined ?

			// Support: IE9-11+
			// IE returns zIndex value as an integer.
			ret + "" :
			ret;
	}


	function addGetHookIf( conditionFn, hookFn ) {

		// Define the hook, we'll check on the first run if it's really needed.
		return {
			get: function() {
				if ( conditionFn() ) {

					// Hook not needed (or it's not possible to use it due
					// to missing dependency), remove it.
					delete this.get;
					return;
				}

				// Hook needed; redefine it so that the support test is not executed again.
				return ( this.get = hookFn ).apply( this, arguments );
			}
		};
	}


	var

		// Swappable if display is none or starts with table
		// except "table", "table-cell", or "table-caption"
		// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
		rdisplayswap = /^(none|table(?!-c[ea]).+)/,

		cssShow = { position: "absolute", visibility: "hidden", display: "block" },
		cssNormalTransform = {
			letterSpacing: "0",
			fontWeight: "400"
		},

		cssPrefixes = [ "Webkit", "O", "Moz", "ms" ],
		emptyStyle = document.createElement( "div" ).style;

	// Return a css property mapped to a potentially vendor prefixed property
	function vendorPropName( name ) {

		// Shortcut for names that are not vendor prefixed
		if ( name in emptyStyle ) {
			return name;
		}

		// Check for vendor prefixed names
		var capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
			i = cssPrefixes.length;

		while ( i-- ) {
			name = cssPrefixes[ i ] + capName;
			if ( name in emptyStyle ) {
				return name;
			}
		}
	}

	function setPositiveNumber( elem, value, subtract ) {

		// Any relative (+/-) values have already been
		// normalized at this point
		var matches = rcssNum.exec( value );
		return matches ?

			// Guard against undefined "subtract", e.g., when used as in cssHooks
			Math.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || "px" ) :
			value;
	}

	function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
		var i = extra === ( isBorderBox ? "border" : "content" ) ?

			// If we already have the right measurement, avoid augmentation
			4 :

			// Otherwise initialize for horizontal or vertical properties
			name === "width" ? 1 : 0,

			val = 0;

		for ( ; i < 4; i += 2 ) {

			// Both box models exclude margin, so add it if we want it
			if ( extra === "margin" ) {
				val += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
			}

			if ( isBorderBox ) {

				// border-box includes padding, so remove it if we want content
				if ( extra === "content" ) {
					val -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
				}

				// At this point, extra isn't border nor margin, so remove border
				if ( extra !== "margin" ) {
					val -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
				}
			} else {

				// At this point, extra isn't content, so add padding
				val += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

				// At this point, extra isn't content nor padding, so add border
				if ( extra !== "padding" ) {
					val += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
				}
			}
		}

		return val;
	}

	function getWidthOrHeight( elem, name, extra ) {

		// Start with offset property, which is equivalent to the border-box value
		var valueIsBorderBox = true,
			val = name === "width" ? elem.offsetWidth : elem.offsetHeight,
			styles = getStyles( elem ),
			isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box";

		// Some non-html elements return undefined for offsetWidth, so check for null/undefined
		// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
		// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
		if ( val <= 0 || val == null ) {

			// Fall back to computed then uncomputed css if necessary
			val = curCSS( elem, name, styles );
			if ( val < 0 || val == null ) {
				val = elem.style[ name ];
			}

			// Computed unit is not pixels. Stop here and return.
			if ( rnumnonpx.test( val ) ) {
				return val;
			}

			// Check for style in case a browser which returns unreliable values
			// for getComputedStyle silently falls back to the reliable elem.style
			valueIsBorderBox = isBorderBox &&
				( support.boxSizingReliable() || val === elem.style[ name ] );

			// Normalize "", auto, and prepare for extra
			val = parseFloat( val ) || 0;
		}

		// Use the active box-sizing model to add/subtract irrelevant styles
		return ( val +
			augmentWidthOrHeight(
				elem,
				name,
				extra || ( isBorderBox ? "border" : "content" ),
				valueIsBorderBox,
				styles
			)
		) + "px";
	}

	function showHide( elements, show ) {
		var display, elem, hidden,
			values = [],
			index = 0,
			length = elements.length;

		for ( ; index < length; index++ ) {
			elem = elements[ index ];
			if ( !elem.style ) {
				continue;
			}

			values[ index ] = dataPriv.get( elem, "olddisplay" );
			display = elem.style.display;
			if ( show ) {

				// Reset the inline display of this element to learn if it is
				// being hidden by cascaded rules or not
				if ( !values[ index ] && display === "none" ) {
					elem.style.display = "";
				}

				// Set elements which have been overridden with display: none
				// in a stylesheet to whatever the default browser style is
				// for such an element
				if ( elem.style.display === "" && isHidden( elem ) ) {
					values[ index ] = dataPriv.access(
						elem,
						"olddisplay",
						defaultDisplay( elem.nodeName )
					);
				}
			} else {
				hidden = isHidden( elem );

				if ( display !== "none" || !hidden ) {
					dataPriv.set(
						elem,
						"olddisplay",
						hidden ? display : jQuery.css( elem, "display" )
					);
				}
			}
		}

		// Set the display of most of the elements in a second loop
		// to avoid the constant reflow
		for ( index = 0; index < length; index++ ) {
			elem = elements[ index ];
			if ( !elem.style ) {
				continue;
			}
			if ( !show || elem.style.display === "none" || elem.style.display === "" ) {
				elem.style.display = show ? values[ index ] || "" : "none";
			}
		}

		return elements;
	}

	jQuery.extend( {

		// Add in style property hooks for overriding the default
		// behavior of getting and setting a style property
		cssHooks: {
			opacity: {
				get: function( elem, computed ) {
					if ( computed ) {

						// We should always get a number back from opacity
						var ret = curCSS( elem, "opacity" );
						return ret === "" ? "1" : ret;
					}
				}
			}
		},

		// Don't automatically add "px" to these possibly-unitless properties
		cssNumber: {
			"animationIterationCount": true,
			"columnCount": true,
			"fillOpacity": true,
			"flexGrow": true,
			"flexShrink": true,
			"fontWeight": true,
			"lineHeight": true,
			"opacity": true,
			"order": true,
			"orphans": true,
			"widows": true,
			"zIndex": true,
			"zoom": true
		},

		// Add in properties whose names you wish to fix before
		// setting or getting the value
		cssProps: {
			"float": "cssFloat"
		},

		// Get and set the style property on a DOM Node
		style: function( elem, name, value, extra ) {

			// Don't set styles on text and comment nodes
			if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
				return;
			}

			// Make sure that we're working with the right name
			var ret, type, hooks,
				origName = jQuery.camelCase( name ),
				style = elem.style;

			name = jQuery.cssProps[ origName ] ||
				( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

			// Gets hook for the prefixed version, then unprefixed version
			hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

			// Check if we're setting a value
			if ( value !== undefined ) {
				type = typeof value;

				// Convert "+=" or "-=" to relative numbers (#7345)
				if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
					value = adjustCSS( elem, name, ret );

					// Fixes bug #9237
					type = "number";
				}

				// Make sure that null and NaN values aren't set (#7116)
				if ( value == null || value !== value ) {
					return;
				}

				// If a number was passed in, add the unit (except for certain CSS properties)
				if ( type === "number" ) {
					value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
				}

				// Support: IE9-11+
				// background-* props affect original clone's values
				if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
					style[ name ] = "inherit";
				}

				// If a hook was provided, use that value, otherwise just set the specified value
				if ( !hooks || !( "set" in hooks ) ||
					( value = hooks.set( elem, value, extra ) ) !== undefined ) {

					style[ name ] = value;
				}

			} else {

				// If a hook was provided get the non-computed value from there
				if ( hooks && "get" in hooks &&
					( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

					return ret;
				}

				// Otherwise just get the value from the style object
				return style[ name ];
			}
		},

		css: function( elem, name, extra, styles ) {
			var val, num, hooks,
				origName = jQuery.camelCase( name );

			// Make sure that we're working with the right name
			name = jQuery.cssProps[ origName ] ||
				( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

			// Try prefixed name followed by the unprefixed name
			hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

			// If a hook was provided get the computed value from there
			if ( hooks && "get" in hooks ) {
				val = hooks.get( elem, true, extra );
			}

			// Otherwise, if a way to get the computed value exists, use that
			if ( val === undefined ) {
				val = curCSS( elem, name, styles );
			}

			// Convert "normal" to computed value
			if ( val === "normal" && name in cssNormalTransform ) {
				val = cssNormalTransform[ name ];
			}

			// Make numeric if forced or a qualifier was provided and val looks numeric
			if ( extra === "" || extra ) {
				num = parseFloat( val );
				return extra === true || isFinite( num ) ? num || 0 : val;
			}
			return val;
		}
	} );

	jQuery.each( [ "height", "width" ], function( i, name ) {
		jQuery.cssHooks[ name ] = {
			get: function( elem, computed, extra ) {
				if ( computed ) {

					// Certain elements can have dimension info if we invisibly show them
					// but it must have a current display style that would benefit
					return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&
						elem.offsetWidth === 0 ?
							swap( elem, cssShow, function() {
								return getWidthOrHeight( elem, name, extra );
							} ) :
							getWidthOrHeight( elem, name, extra );
				}
			},

			set: function( elem, value, extra ) {
				var matches,
					styles = extra && getStyles( elem ),
					subtract = extra && augmentWidthOrHeight(
						elem,
						name,
						extra,
						jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
						styles
					);

				// Convert to pixels if value adjustment is needed
				if ( subtract && ( matches = rcssNum.exec( value ) ) &&
					( matches[ 3 ] || "px" ) !== "px" ) {

					elem.style[ name ] = value;
					value = jQuery.css( elem, name );
				}

				return setPositiveNumber( elem, value, subtract );
			}
		};
	} );

	jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
		function( elem, computed ) {
			if ( computed ) {
				return ( parseFloat( curCSS( elem, "marginLeft" ) ) ||
					elem.getBoundingClientRect().left -
						swap( elem, { marginLeft: 0 }, function() {
							return elem.getBoundingClientRect().left;
						} )
					) + "px";
			}
		}
	);

	// Support: Android 2.3
	jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
		function( elem, computed ) {
			if ( computed ) {
				return swap( elem, { "display": "inline-block" },
					curCSS, [ elem, "marginRight" ] );
			}
		}
	);

	// These hooks are used by animate to expand properties
	jQuery.each( {
		margin: "",
		padding: "",
		border: "Width"
	}, function( prefix, suffix ) {
		jQuery.cssHooks[ prefix + suffix ] = {
			expand: function( value ) {
				var i = 0,
					expanded = {},

					// Assumes a single number if not a string
					parts = typeof value === "string" ? value.split( " " ) : [ value ];

				for ( ; i < 4; i++ ) {
					expanded[ prefix + cssExpand[ i ] + suffix ] =
						parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
				}

				return expanded;
			}
		};

		if ( !rmargin.test( prefix ) ) {
			jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
		}
	} );

	jQuery.fn.extend( {
		css: function( name, value ) {
			return access( this, function( elem, name, value ) {
				var styles, len,
					map = {},
					i = 0;

				if ( jQuery.isArray( name ) ) {
					styles = getStyles( elem );
					len = name.length;

					for ( ; i < len; i++ ) {
						map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
					}

					return map;
				}

				return value !== undefined ?
					jQuery.style( elem, name, value ) :
					jQuery.css( elem, name );
			}, name, value, arguments.length > 1 );
		},
		show: function() {
			return showHide( this, true );
		},
		hide: function() {
			return showHide( this );
		},
		toggle: function( state ) {
			if ( typeof state === "boolean" ) {
				return state ? this.show() : this.hide();
			}

			return this.each( function() {
				if ( isHidden( this ) ) {
					jQuery( this ).show();
				} else {
					jQuery( this ).hide();
				}
			} );
		}
	} );


	function Tween( elem, options, prop, end, easing ) {
		return new Tween.prototype.init( elem, options, prop, end, easing );
	}
	jQuery.Tween = Tween;

	Tween.prototype = {
		constructor: Tween,
		init: function( elem, options, prop, end, easing, unit ) {
			this.elem = elem;
			this.prop = prop;
			this.easing = easing || jQuery.easing._default;
			this.options = options;
			this.start = this.now = this.cur();
			this.end = end;
			this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
		},
		cur: function() {
			var hooks = Tween.propHooks[ this.prop ];

			return hooks && hooks.get ?
				hooks.get( this ) :
				Tween.propHooks._default.get( this );
		},
		run: function( percent ) {
			var eased,
				hooks = Tween.propHooks[ this.prop ];

			if ( this.options.duration ) {
				this.pos = eased = jQuery.easing[ this.easing ](
					percent, this.options.duration * percent, 0, 1, this.options.duration
				);
			} else {
				this.pos = eased = percent;
			}
			this.now = ( this.end - this.start ) * eased + this.start;

			if ( this.options.step ) {
				this.options.step.call( this.elem, this.now, this );
			}

			if ( hooks && hooks.set ) {
				hooks.set( this );
			} else {
				Tween.propHooks._default.set( this );
			}
			return this;
		}
	};

	Tween.prototype.init.prototype = Tween.prototype;

	Tween.propHooks = {
		_default: {
			get: function( tween ) {
				var result;

				// Use a property on the element directly when it is not a DOM element,
				// or when there is no matching style property that exists.
				if ( tween.elem.nodeType !== 1 ||
					tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
					return tween.elem[ tween.prop ];
				}

				// Passing an empty string as a 3rd parameter to .css will automatically
				// attempt a parseFloat and fallback to a string if the parse fails.
				// Simple values such as "10px" are parsed to Float;
				// complex values such as "rotate(1rad)" are returned as-is.
				result = jQuery.css( tween.elem, tween.prop, "" );

				// Empty strings, null, undefined and "auto" are converted to 0.
				return !result || result === "auto" ? 0 : result;
			},
			set: function( tween ) {

				// Use step hook for back compat.
				// Use cssHook if its there.
				// Use .style if available and use plain properties where available.
				if ( jQuery.fx.step[ tween.prop ] ) {
					jQuery.fx.step[ tween.prop ]( tween );
				} else if ( tween.elem.nodeType === 1 &&
					( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
						jQuery.cssHooks[ tween.prop ] ) ) {
					jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
				} else {
					tween.elem[ tween.prop ] = tween.now;
				}
			}
		}
	};

	// Support: IE9
	// Panic based approach to setting things on disconnected nodes
	Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
		set: function( tween ) {
			if ( tween.elem.nodeType && tween.elem.parentNode ) {
				tween.elem[ tween.prop ] = tween.now;
			}
		}
	};

	jQuery.easing = {
		linear: function( p ) {
			return p;
		},
		swing: function( p ) {
			return 0.5 - Math.cos( p * Math.PI ) / 2;
		},
		_default: "swing"
	};

	jQuery.fx = Tween.prototype.init;

	// Back Compat <1.8 extension point
	jQuery.fx.step = {};




	var
		fxNow, timerId,
		rfxtypes = /^(?:toggle|show|hide)$/,
		rrun = /queueHooks$/;

	// Animations created synchronously will run synchronously
	function createFxNow() {
		window.setTimeout( function() {
			fxNow = undefined;
		} );
		return ( fxNow = jQuery.now() );
	}

	// Generate parameters to create a standard animation
	function genFx( type, includeWidth ) {
		var which,
			i = 0,
			attrs = { height: type };

		// If we include width, step value is 1 to do all cssExpand values,
		// otherwise step value is 2 to skip over Left and Right
		includeWidth = includeWidth ? 1 : 0;
		for ( ; i < 4 ; i += 2 - includeWidth ) {
			which = cssExpand[ i ];
			attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
		}

		if ( includeWidth ) {
			attrs.opacity = attrs.width = type;
		}

		return attrs;
	}

	function createTween( value, prop, animation ) {
		var tween,
			collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
			index = 0,
			length = collection.length;
		for ( ; index < length; index++ ) {
			if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

				// We're done with this property
				return tween;
			}
		}
	}

	function defaultPrefilter( elem, props, opts ) {
		/* jshint validthis: true */
		var prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
			anim = this,
			orig = {},
			style = elem.style,
			hidden = elem.nodeType && isHidden( elem ),
			dataShow = dataPriv.get( elem, "fxshow" );

		// Handle queue: false promises
		if ( !opts.queue ) {
			hooks = jQuery._queueHooks( elem, "fx" );
			if ( hooks.unqueued == null ) {
				hooks.unqueued = 0;
				oldfire = hooks.empty.fire;
				hooks.empty.fire = function() {
					if ( !hooks.unqueued ) {
						oldfire();
					}
				};
			}
			hooks.unqueued++;

			anim.always( function() {

				// Ensure the complete handler is called before this completes
				anim.always( function() {
					hooks.unqueued--;
					if ( !jQuery.queue( elem, "fx" ).length ) {
						hooks.empty.fire();
					}
				} );
			} );
		}

		// Height/width overflow pass
		if ( elem.nodeType === 1 && ( "height" in props || "width" in props ) ) {

			// Make sure that nothing sneaks out
			// Record all 3 overflow attributes because IE9-10 do not
			// change the overflow attribute when overflowX and
			// overflowY are set to the same value
			opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

			// Set display property to inline-block for height/width
			// animations on inline elements that are having width/height animated
			display = jQuery.css( elem, "display" );

			// Test default display if display is currently "none"
			checkDisplay = display === "none" ?
				dataPriv.get( elem, "olddisplay" ) || defaultDisplay( elem.nodeName ) : display;

			if ( checkDisplay === "inline" && jQuery.css( elem, "float" ) === "none" ) {
				style.display = "inline-block";
			}
		}

		if ( opts.overflow ) {
			style.overflow = "hidden";
			anim.always( function() {
				style.overflow = opts.overflow[ 0 ];
				style.overflowX = opts.overflow[ 1 ];
				style.overflowY = opts.overflow[ 2 ];
			} );
		}

		// show/hide pass
		for ( prop in props ) {
			value = props[ prop ];
			if ( rfxtypes.exec( value ) ) {
				delete props[ prop ];
				toggle = toggle || value === "toggle";
				if ( value === ( hidden ? "hide" : "show" ) ) {

					// If there is dataShow left over from a stopped hide or show
					// and we are going to proceed with show, we should pretend to be hidden
					if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
						hidden = true;
					} else {
						continue;
					}
				}
				orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

			// Any non-fx value stops us from restoring the original display value
			} else {
				display = undefined;
			}
		}

		if ( !jQuery.isEmptyObject( orig ) ) {
			if ( dataShow ) {
				if ( "hidden" in dataShow ) {
					hidden = dataShow.hidden;
				}
			} else {
				dataShow = dataPriv.access( elem, "fxshow", {} );
			}

			// Store state if its toggle - enables .stop().toggle() to "reverse"
			if ( toggle ) {
				dataShow.hidden = !hidden;
			}
			if ( hidden ) {
				jQuery( elem ).show();
			} else {
				anim.done( function() {
					jQuery( elem ).hide();
				} );
			}
			anim.done( function() {
				var prop;

				dataPriv.remove( elem, "fxshow" );
				for ( prop in orig ) {
					jQuery.style( elem, prop, orig[ prop ] );
				}
			} );
			for ( prop in orig ) {
				tween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

				if ( !( prop in dataShow ) ) {
					dataShow[ prop ] = tween.start;
					if ( hidden ) {
						tween.end = tween.start;
						tween.start = prop === "width" || prop === "height" ? 1 : 0;
					}
				}
			}

		// If this is a noop like .hide().hide(), restore an overwritten display value
		} else if ( ( display === "none" ? defaultDisplay( elem.nodeName ) : display ) === "inline" ) {
			style.display = display;
		}
	}

	function propFilter( props, specialEasing ) {
		var index, name, easing, value, hooks;

		// camelCase, specialEasing and expand cssHook pass
		for ( index in props ) {
			name = jQuery.camelCase( index );
			easing = specialEasing[ name ];
			value = props[ index ];
			if ( jQuery.isArray( value ) ) {
				easing = value[ 1 ];
				value = props[ index ] = value[ 0 ];
			}

			if ( index !== name ) {
				props[ name ] = value;
				delete props[ index ];
			}

			hooks = jQuery.cssHooks[ name ];
			if ( hooks && "expand" in hooks ) {
				value = hooks.expand( value );
				delete props[ name ];

				// Not quite $.extend, this won't overwrite existing keys.
				// Reusing 'index' because we have the correct "name"
				for ( index in value ) {
					if ( !( index in props ) ) {
						props[ index ] = value[ index ];
						specialEasing[ index ] = easing;
					}
				}
			} else {
				specialEasing[ name ] = easing;
			}
		}
	}

	function Animation( elem, properties, options ) {
		var result,
			stopped,
			index = 0,
			length = Animation.prefilters.length,
			deferred = jQuery.Deferred().always( function() {

				// Don't match elem in the :animated selector
				delete tick.elem;
			} ),
			tick = function() {
				if ( stopped ) {
					return false;
				}
				var currentTime = fxNow || createFxNow(),
					remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

					// Support: Android 2.3
					// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
					temp = remaining / animation.duration || 0,
					percent = 1 - temp,
					index = 0,
					length = animation.tweens.length;

				for ( ; index < length ; index++ ) {
					animation.tweens[ index ].run( percent );
				}

				deferred.notifyWith( elem, [ animation, percent, remaining ] );

				if ( percent < 1 && length ) {
					return remaining;
				} else {
					deferred.resolveWith( elem, [ animation ] );
					return false;
				}
			},
			animation = deferred.promise( {
				elem: elem,
				props: jQuery.extend( {}, properties ),
				opts: jQuery.extend( true, {
					specialEasing: {},
					easing: jQuery.easing._default
				}, options ),
				originalProperties: properties,
				originalOptions: options,
				startTime: fxNow || createFxNow(),
				duration: options.duration,
				tweens: [],
				createTween: function( prop, end ) {
					var tween = jQuery.Tween( elem, animation.opts, prop, end,
							animation.opts.specialEasing[ prop ] || animation.opts.easing );
					animation.tweens.push( tween );
					return tween;
				},
				stop: function( gotoEnd ) {
					var index = 0,

						// If we are going to the end, we want to run all the tweens
						// otherwise we skip this part
						length = gotoEnd ? animation.tweens.length : 0;
					if ( stopped ) {
						return this;
					}
					stopped = true;
					for ( ; index < length ; index++ ) {
						animation.tweens[ index ].run( 1 );
					}

					// Resolve when we played the last frame; otherwise, reject
					if ( gotoEnd ) {
						deferred.notifyWith( elem, [ animation, 1, 0 ] );
						deferred.resolveWith( elem, [ animation, gotoEnd ] );
					} else {
						deferred.rejectWith( elem, [ animation, gotoEnd ] );
					}
					return this;
				}
			} ),
			props = animation.props;

		propFilter( props, animation.opts.specialEasing );

		for ( ; index < length ; index++ ) {
			result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
			if ( result ) {
				if ( jQuery.isFunction( result.stop ) ) {
					jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
						jQuery.proxy( result.stop, result );
				}
				return result;
			}
		}

		jQuery.map( props, createTween, animation );

		if ( jQuery.isFunction( animation.opts.start ) ) {
			animation.opts.start.call( elem, animation );
		}

		jQuery.fx.timer(
			jQuery.extend( tick, {
				elem: elem,
				anim: animation,
				queue: animation.opts.queue
			} )
		);

		// attach callbacks from options
		return animation.progress( animation.opts.progress )
			.done( animation.opts.done, animation.opts.complete )
			.fail( animation.opts.fail )
			.always( animation.opts.always );
	}

	jQuery.Animation = jQuery.extend( Animation, {
		tweeners: {
			"*": [ function( prop, value ) {
				var tween = this.createTween( prop, value );
				adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
				return tween;
			} ]
		},

		tweener: function( props, callback ) {
			if ( jQuery.isFunction( props ) ) {
				callback = props;
				props = [ "*" ];
			} else {
				props = props.match( rnotwhite );
			}

			var prop,
				index = 0,
				length = props.length;

			for ( ; index < length ; index++ ) {
				prop = props[ index ];
				Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
				Animation.tweeners[ prop ].unshift( callback );
			}
		},

		prefilters: [ defaultPrefilter ],

		prefilter: function( callback, prepend ) {
			if ( prepend ) {
				Animation.prefilters.unshift( callback );
			} else {
				Animation.prefilters.push( callback );
			}
		}
	} );

	jQuery.speed = function( speed, easing, fn ) {
		var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
			complete: fn || !fn && easing ||
				jQuery.isFunction( speed ) && speed,
			duration: speed,
			easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
		};

		opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ?
			opt.duration : opt.duration in jQuery.fx.speeds ?
				jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

		// Normalize opt.queue - true/undefined/null -> "fx"
		if ( opt.queue == null || opt.queue === true ) {
			opt.queue = "fx";
		}

		// Queueing
		opt.old = opt.complete;

		opt.complete = function() {
			if ( jQuery.isFunction( opt.old ) ) {
				opt.old.call( this );
			}

			if ( opt.queue ) {
				jQuery.dequeue( this, opt.queue );
			}
		};

		return opt;
	};

	jQuery.fn.extend( {
		fadeTo: function( speed, to, easing, callback ) {

			// Show any hidden elements after setting opacity to 0
			return this.filter( isHidden ).css( "opacity", 0 ).show()

				// Animate to the value specified
				.end().animate( { opacity: to }, speed, easing, callback );
		},
		animate: function( prop, speed, easing, callback ) {
			var empty = jQuery.isEmptyObject( prop ),
				optall = jQuery.speed( speed, easing, callback ),
				doAnimation = function() {

					// Operate on a copy of prop so per-property easing won't be lost
					var anim = Animation( this, jQuery.extend( {}, prop ), optall );

					// Empty animations, or finishing resolves immediately
					if ( empty || dataPriv.get( this, "finish" ) ) {
						anim.stop( true );
					}
				};
				doAnimation.finish = doAnimation;

			return empty || optall.queue === false ?
				this.each( doAnimation ) :
				this.queue( optall.queue, doAnimation );
		},
		stop: function( type, clearQueue, gotoEnd ) {
			var stopQueue = function( hooks ) {
				var stop = hooks.stop;
				delete hooks.stop;
				stop( gotoEnd );
			};

			if ( typeof type !== "string" ) {
				gotoEnd = clearQueue;
				clearQueue = type;
				type = undefined;
			}
			if ( clearQueue && type !== false ) {
				this.queue( type || "fx", [] );
			}

			return this.each( function() {
				var dequeue = true,
					index = type != null && type + "queueHooks",
					timers = jQuery.timers,
					data = dataPriv.get( this );

				if ( index ) {
					if ( data[ index ] && data[ index ].stop ) {
						stopQueue( data[ index ] );
					}
				} else {
					for ( index in data ) {
						if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
							stopQueue( data[ index ] );
						}
					}
				}

				for ( index = timers.length; index--; ) {
					if ( timers[ index ].elem === this &&
						( type == null || timers[ index ].queue === type ) ) {

						timers[ index ].anim.stop( gotoEnd );
						dequeue = false;
						timers.splice( index, 1 );
					}
				}

				// Start the next in the queue if the last step wasn't forced.
				// Timers currently will call their complete callbacks, which
				// will dequeue but only if they were gotoEnd.
				if ( dequeue || !gotoEnd ) {
					jQuery.dequeue( this, type );
				}
			} );
		},
		finish: function( type ) {
			if ( type !== false ) {
				type = type || "fx";
			}
			return this.each( function() {
				var index,
					data = dataPriv.get( this ),
					queue = data[ type + "queue" ],
					hooks = data[ type + "queueHooks" ],
					timers = jQuery.timers,
					length = queue ? queue.length : 0;

				// Enable finishing flag on private data
				data.finish = true;

				// Empty the queue first
				jQuery.queue( this, type, [] );

				if ( hooks && hooks.stop ) {
					hooks.stop.call( this, true );
				}

				// Look for any active animations, and finish them
				for ( index = timers.length; index--; ) {
					if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
						timers[ index ].anim.stop( true );
						timers.splice( index, 1 );
					}
				}

				// Look for any animations in the old queue and finish them
				for ( index = 0; index < length; index++ ) {
					if ( queue[ index ] && queue[ index ].finish ) {
						queue[ index ].finish.call( this );
					}
				}

				// Turn off finishing flag
				delete data.finish;
			} );
		}
	} );

	jQuery.each( [ "toggle", "show", "hide" ], function( i, name ) {
		var cssFn = jQuery.fn[ name ];
		jQuery.fn[ name ] = function( speed, easing, callback ) {
			return speed == null || typeof speed === "boolean" ?
				cssFn.apply( this, arguments ) :
				this.animate( genFx( name, true ), speed, easing, callback );
		};
	} );

	// Generate shortcuts for custom animations
	jQuery.each( {
		slideDown: genFx( "show" ),
		slideUp: genFx( "hide" ),
		slideToggle: genFx( "toggle" ),
		fadeIn: { opacity: "show" },
		fadeOut: { opacity: "hide" },
		fadeToggle: { opacity: "toggle" }
	}, function( name, props ) {
		jQuery.fn[ name ] = function( speed, easing, callback ) {
			return this.animate( props, speed, easing, callback );
		};
	} );

	jQuery.timers = [];
	jQuery.fx.tick = function() {
		var timer,
			i = 0,
			timers = jQuery.timers;

		fxNow = jQuery.now();

		for ( ; i < timers.length; i++ ) {
			timer = timers[ i ];

			// Checks the timer has not already been removed
			if ( !timer() && timers[ i ] === timer ) {
				timers.splice( i--, 1 );
			}
		}

		if ( !timers.length ) {
			jQuery.fx.stop();
		}
		fxNow = undefined;
	};

	jQuery.fx.timer = function( timer ) {
		jQuery.timers.push( timer );
		if ( timer() ) {
			jQuery.fx.start();
		} else {
			jQuery.timers.pop();
		}
	};

	jQuery.fx.interval = 13;
	jQuery.fx.start = function() {
		if ( !timerId ) {
			timerId = window.setInterval( jQuery.fx.tick, jQuery.fx.interval );
		}
	};

	jQuery.fx.stop = function() {
		window.clearInterval( timerId );

		timerId = null;
	};

	jQuery.fx.speeds = {
		slow: 600,
		fast: 200,

		// Default speed
		_default: 400
	};


	// Based off of the plugin by Clint Helfers, with permission.
	// http://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
	jQuery.fn.delay = function( time, type ) {
		time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
		type = type || "fx";

		return this.queue( type, function( next, hooks ) {
			var timeout = window.setTimeout( next, time );
			hooks.stop = function() {
				window.clearTimeout( timeout );
			};
		} );
	};


	( function() {
		var input = document.createElement( "input" ),
			select = document.createElement( "select" ),
			opt = select.appendChild( document.createElement( "option" ) );

		input.type = "checkbox";

		// Support: iOS<=5.1, Android<=4.2+
		// Default value for a checkbox should be "on"
		support.checkOn = input.value !== "";

		// Support: IE<=11+
		// Must access selectedIndex to make default options select
		support.optSelected = opt.selected;

		// Support: Android<=2.3
		// Options inside disabled selects are incorrectly marked as disabled
		select.disabled = true;
		support.optDisabled = !opt.disabled;

		// Support: IE<=11+
		// An input loses its value after becoming a radio
		input = document.createElement( "input" );
		input.value = "t";
		input.type = "radio";
		support.radioValue = input.value === "t";
	} )();


	var boolHook,
		attrHandle = jQuery.expr.attrHandle;

	jQuery.fn.extend( {
		attr: function( name, value ) {
			return access( this, jQuery.attr, name, value, arguments.length > 1 );
		},

		removeAttr: function( name ) {
			return this.each( function() {
				jQuery.removeAttr( this, name );
			} );
		}
	} );

	jQuery.extend( {
		attr: function( elem, name, value ) {
			var ret, hooks,
				nType = elem.nodeType;

			// Don't get/set attributes on text, comment and attribute nodes
			if ( nType === 3 || nType === 8 || nType === 2 ) {
				return;
			}

			// Fallback to prop when attributes are not supported
			if ( typeof elem.getAttribute === "undefined" ) {
				return jQuery.prop( elem, name, value );
			}

			// All attributes are lowercase
			// Grab necessary hook if one is defined
			if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
				name = name.toLowerCase();
				hooks = jQuery.attrHooks[ name ] ||
					( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
			}

			if ( value !== undefined ) {
				if ( value === null ) {
					jQuery.removeAttr( elem, name );
					return;
				}

				if ( hooks && "set" in hooks &&
					( ret = hooks.set( elem, value, name ) ) !== undefined ) {
					return ret;
				}

				elem.setAttribute( name, value + "" );
				return value;
			}

			if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
				return ret;
			}

			ret = jQuery.find.attr( elem, name );

			// Non-existent attributes return null, we normalize to undefined
			return ret == null ? undefined : ret;
		},

		attrHooks: {
			type: {
				set: function( elem, value ) {
					if ( !support.radioValue && value === "radio" &&
						jQuery.nodeName( elem, "input" ) ) {
						var val = elem.value;
						elem.setAttribute( "type", value );
						if ( val ) {
							elem.value = val;
						}
						return value;
					}
				}
			}
		},

		removeAttr: function( elem, value ) {
			var name, propName,
				i = 0,
				attrNames = value && value.match( rnotwhite );

			if ( attrNames && elem.nodeType === 1 ) {
				while ( ( name = attrNames[ i++ ] ) ) {
					propName = jQuery.propFix[ name ] || name;

					// Boolean attributes get special treatment (#10870)
					if ( jQuery.expr.match.bool.test( name ) ) {

						// Set corresponding property to false
						elem[ propName ] = false;
					}

					elem.removeAttribute( name );
				}
			}
		}
	} );

	// Hooks for boolean attributes
	boolHook = {
		set: function( elem, value, name ) {
			if ( value === false ) {

				// Remove boolean attributes when set to false
				jQuery.removeAttr( elem, name );
			} else {
				elem.setAttribute( name, name );
			}
			return name;
		}
	};
	jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( i, name ) {
		var getter = attrHandle[ name ] || jQuery.find.attr;

		attrHandle[ name ] = function( elem, name, isXML ) {
			var ret, handle;
			if ( !isXML ) {

				// Avoid an infinite loop by temporarily removing this function from the getter
				handle = attrHandle[ name ];
				attrHandle[ name ] = ret;
				ret = getter( elem, name, isXML ) != null ?
					name.toLowerCase() :
					null;
				attrHandle[ name ] = handle;
			}
			return ret;
		};
	} );




	var rfocusable = /^(?:input|select|textarea|button)$/i,
		rclickable = /^(?:a|area)$/i;

	jQuery.fn.extend( {
		prop: function( name, value ) {
			return access( this, jQuery.prop, name, value, arguments.length > 1 );
		},

		removeProp: function( name ) {
			return this.each( function() {
				delete this[ jQuery.propFix[ name ] || name ];
			} );
		}
	} );

	jQuery.extend( {
		prop: function( elem, name, value ) {
			var ret, hooks,
				nType = elem.nodeType;

			// Don't get/set properties on text, comment and attribute nodes
			if ( nType === 3 || nType === 8 || nType === 2 ) {
				return;
			}

			if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

				// Fix name and attach hooks
				name = jQuery.propFix[ name ] || name;
				hooks = jQuery.propHooks[ name ];
			}

			if ( value !== undefined ) {
				if ( hooks && "set" in hooks &&
					( ret = hooks.set( elem, value, name ) ) !== undefined ) {
					return ret;
				}

				return ( elem[ name ] = value );
			}

			if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
				return ret;
			}

			return elem[ name ];
		},

		propHooks: {
			tabIndex: {
				get: function( elem ) {

					// elem.tabIndex doesn't always return the
					// correct value when it hasn't been explicitly set
					// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
					// Use proper attribute retrieval(#12072)
					var tabindex = jQuery.find.attr( elem, "tabindex" );

					return tabindex ?
						parseInt( tabindex, 10 ) :
						rfocusable.test( elem.nodeName ) ||
							rclickable.test( elem.nodeName ) && elem.href ?
								0 :
								-1;
				}
			}
		},

		propFix: {
			"for": "htmlFor",
			"class": "className"
		}
	} );

	// Support: IE <=11 only
	// Accessing the selectedIndex property
	// forces the browser to respect setting selected
	// on the option
	// The getter ensures a default option is selected
	// when in an optgroup
	if ( !support.optSelected ) {
		jQuery.propHooks.selected = {
			get: function( elem ) {
				var parent = elem.parentNode;
				if ( parent && parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
				return null;
			},
			set: function( elem ) {
				var parent = elem.parentNode;
				if ( parent ) {
					parent.selectedIndex;

					if ( parent.parentNode ) {
						parent.parentNode.selectedIndex;
					}
				}
			}
		};
	}

	jQuery.each( [
		"tabIndex",
		"readOnly",
		"maxLength",
		"cellSpacing",
		"cellPadding",
		"rowSpan",
		"colSpan",
		"useMap",
		"frameBorder",
		"contentEditable"
	], function() {
		jQuery.propFix[ this.toLowerCase() ] = this;
	} );




	var rclass = /[\t\r\n\f]/g;

	function getClass( elem ) {
		return elem.getAttribute && elem.getAttribute( "class" ) || "";
	}

	jQuery.fn.extend( {
		addClass: function( value ) {
			var classes, elem, cur, curValue, clazz, j, finalValue,
				i = 0;

			if ( jQuery.isFunction( value ) ) {
				return this.each( function( j ) {
					jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
				} );
			}

			if ( typeof value === "string" && value ) {
				classes = value.match( rnotwhite ) || [];

				while ( ( elem = this[ i++ ] ) ) {
					curValue = getClass( elem );
					cur = elem.nodeType === 1 &&
						( " " + curValue + " " ).replace( rclass, " " );

					if ( cur ) {
						j = 0;
						while ( ( clazz = classes[ j++ ] ) ) {
							if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
								cur += clazz + " ";
							}
						}

						// Only assign if different to avoid unneeded rendering.
						finalValue = jQuery.trim( cur );
						if ( curValue !== finalValue ) {
							elem.setAttribute( "class", finalValue );
						}
					}
				}
			}

			return this;
		},

		removeClass: function( value ) {
			var classes, elem, cur, curValue, clazz, j, finalValue,
				i = 0;

			if ( jQuery.isFunction( value ) ) {
				return this.each( function( j ) {
					jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
				} );
			}

			if ( !arguments.length ) {
				return this.attr( "class", "" );
			}

			if ( typeof value === "string" && value ) {
				classes = value.match( rnotwhite ) || [];

				while ( ( elem = this[ i++ ] ) ) {
					curValue = getClass( elem );

					// This expression is here for better compressibility (see addClass)
					cur = elem.nodeType === 1 &&
						( " " + curValue + " " ).replace( rclass, " " );

					if ( cur ) {
						j = 0;
						while ( ( clazz = classes[ j++ ] ) ) {

							// Remove *all* instances
							while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
								cur = cur.replace( " " + clazz + " ", " " );
							}
						}

						// Only assign if different to avoid unneeded rendering.
						finalValue = jQuery.trim( cur );
						if ( curValue !== finalValue ) {
							elem.setAttribute( "class", finalValue );
						}
					}
				}
			}

			return this;
		},

		toggleClass: function( value, stateVal ) {
			var type = typeof value;

			if ( typeof stateVal === "boolean" && type === "string" ) {
				return stateVal ? this.addClass( value ) : this.removeClass( value );
			}

			if ( jQuery.isFunction( value ) ) {
				return this.each( function( i ) {
					jQuery( this ).toggleClass(
						value.call( this, i, getClass( this ), stateVal ),
						stateVal
					);
				} );
			}

			return this.each( function() {
				var className, i, self, classNames;

				if ( type === "string" ) {

					// Toggle individual class names
					i = 0;
					self = jQuery( this );
					classNames = value.match( rnotwhite ) || [];

					while ( ( className = classNames[ i++ ] ) ) {

						// Check each className given, space separated list
						if ( self.hasClass( className ) ) {
							self.removeClass( className );
						} else {
							self.addClass( className );
						}
					}

				// Toggle whole class name
				} else if ( value === undefined || type === "boolean" ) {
					className = getClass( this );
					if ( className ) {

						// Store className if set
						dataPriv.set( this, "__className__", className );
					}

					// If the element has a class name or if we're passed `false`,
					// then remove the whole classname (if there was one, the above saved it).
					// Otherwise bring back whatever was previously saved (if anything),
					// falling back to the empty string if nothing was stored.
					if ( this.setAttribute ) {
						this.setAttribute( "class",
							className || value === false ?
							"" :
							dataPriv.get( this, "__className__" ) || ""
						);
					}
				}
			} );
		},

		hasClass: function( selector ) {
			var className, elem,
				i = 0;

			className = " " + selector + " ";
			while ( ( elem = this[ i++ ] ) ) {
				if ( elem.nodeType === 1 &&
					( " " + getClass( elem ) + " " ).replace( rclass, " " )
						.indexOf( className ) > -1
				) {
					return true;
				}
			}

			return false;
		}
	} );




	var rreturn = /\r/g,
		rspaces = /[\x20\t\r\n\f]+/g;

	jQuery.fn.extend( {
		val: function( value ) {
			var hooks, ret, isFunction,
				elem = this[ 0 ];

			if ( !arguments.length ) {
				if ( elem ) {
					hooks = jQuery.valHooks[ elem.type ] ||
						jQuery.valHooks[ elem.nodeName.toLowerCase() ];

					if ( hooks &&
						"get" in hooks &&
						( ret = hooks.get( elem, "value" ) ) !== undefined
					) {
						return ret;
					}

					ret = elem.value;

					return typeof ret === "string" ?

						// Handle most common string cases
						ret.replace( rreturn, "" ) :

						// Handle cases where value is null/undef or number
						ret == null ? "" : ret;
				}

				return;
			}

			isFunction = jQuery.isFunction( value );

			return this.each( function( i ) {
				var val;

				if ( this.nodeType !== 1 ) {
					return;
				}

				if ( isFunction ) {
					val = value.call( this, i, jQuery( this ).val() );
				} else {
					val = value;
				}

				// Treat null/undefined as ""; convert numbers to string
				if ( val == null ) {
					val = "";

				} else if ( typeof val === "number" ) {
					val += "";

				} else if ( jQuery.isArray( val ) ) {
					val = jQuery.map( val, function( value ) {
						return value == null ? "" : value + "";
					} );
				}

				hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

				// If set returns undefined, fall back to normal setting
				if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
					this.value = val;
				}
			} );
		}
	} );

	jQuery.extend( {
		valHooks: {
			option: {
				get: function( elem ) {

					var val = jQuery.find.attr( elem, "value" );
					return val != null ?
						val :

						// Support: IE10-11+
						// option.text throws exceptions (#14686, #14858)
						// Strip and collapse whitespace
						// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
						jQuery.trim( jQuery.text( elem ) ).replace( rspaces, " " );
				}
			},
			select: {
				get: function( elem ) {
					var value, option,
						options = elem.options,
						index = elem.selectedIndex,
						one = elem.type === "select-one" || index < 0,
						values = one ? null : [],
						max = one ? index + 1 : options.length,
						i = index < 0 ?
							max :
							one ? index : 0;

					// Loop through all the selected options
					for ( ; i < max; i++ ) {
						option = options[ i ];

						// IE8-9 doesn't update selected after form reset (#2551)
						if ( ( option.selected || i === index ) &&

								// Don't return options that are disabled or in a disabled optgroup
								( support.optDisabled ?
									!option.disabled : option.getAttribute( "disabled" ) === null ) &&
								( !option.parentNode.disabled ||
									!jQuery.nodeName( option.parentNode, "optgroup" ) ) ) {

							// Get the specific value for the option
							value = jQuery( option ).val();

							// We don't need an array for one selects
							if ( one ) {
								return value;
							}

							// Multi-Selects return an array
							values.push( value );
						}
					}

					return values;
				},

				set: function( elem, value ) {
					var optionSet, option,
						options = elem.options,
						values = jQuery.makeArray( value ),
						i = options.length;

					while ( i-- ) {
						option = options[ i ];
						if ( option.selected =
							jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
						) {
							optionSet = true;
						}
					}

					// Force browsers to behave consistently when non-matching value is set
					if ( !optionSet ) {
						elem.selectedIndex = -1;
					}
					return values;
				}
			}
		}
	} );

	// Radios and checkboxes getter/setter
	jQuery.each( [ "radio", "checkbox" ], function() {
		jQuery.valHooks[ this ] = {
			set: function( elem, value ) {
				if ( jQuery.isArray( value ) ) {
					return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
				}
			}
		};
		if ( !support.checkOn ) {
			jQuery.valHooks[ this ].get = function( elem ) {
				return elem.getAttribute( "value" ) === null ? "on" : elem.value;
			};
		}
	} );




	// Return jQuery for attributes-only inclusion


	var rfocusMorph = /^(?:focusinfocus|focusoutblur)$/;

	jQuery.extend( jQuery.event, {

		trigger: function( event, data, elem, onlyHandlers ) {

			var i, cur, tmp, bubbleType, ontype, handle, special,
				eventPath = [ elem || document ],
				type = hasOwn.call( event, "type" ) ? event.type : event,
				namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

			cur = tmp = elem = elem || document;

			// Don't do events on text and comment nodes
			if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
				return;
			}

			// focus/blur morphs to focusin/out; ensure we're not firing them right now
			if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
				return;
			}

			if ( type.indexOf( "." ) > -1 ) {

				// Namespaced trigger; create a regexp to match event type in handle()
				namespaces = type.split( "." );
				type = namespaces.shift();
				namespaces.sort();
			}
			ontype = type.indexOf( ":" ) < 0 && "on" + type;

			// Caller can pass in a jQuery.Event object, Object, or just an event type string
			event = event[ jQuery.expando ] ?
				event :
				new jQuery.Event( type, typeof event === "object" && event );

			// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
			event.isTrigger = onlyHandlers ? 2 : 3;
			event.namespace = namespaces.join( "." );
			event.rnamespace = event.namespace ?
				new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
				null;

			// Clean up the event in case it is being reused
			event.result = undefined;
			if ( !event.target ) {
				event.target = elem;
			}

			// Clone any incoming data and prepend the event, creating the handler arg list
			data = data == null ?
				[ event ] :
				jQuery.makeArray( data, [ event ] );

			// Allow special events to draw outside the lines
			special = jQuery.event.special[ type ] || {};
			if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
				return;
			}

			// Determine event propagation path in advance, per W3C events spec (#9951)
			// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
			if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

				bubbleType = special.delegateType || type;
				if ( !rfocusMorph.test( bubbleType + type ) ) {
					cur = cur.parentNode;
				}
				for ( ; cur; cur = cur.parentNode ) {
					eventPath.push( cur );
					tmp = cur;
				}

				// Only add window if we got to document (e.g., not plain obj or detached DOM)
				if ( tmp === ( elem.ownerDocument || document ) ) {
					eventPath.push( tmp.defaultView || tmp.parentWindow || window );
				}
			}

			// Fire handlers on the event path
			i = 0;
			while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {

				event.type = i > 1 ?
					bubbleType :
					special.bindType || type;

				// jQuery handler
				handle = ( dataPriv.get( cur, "events" ) || {} )[ event.type ] &&
					dataPriv.get( cur, "handle" );
				if ( handle ) {
					handle.apply( cur, data );
				}

				// Native handler
				handle = ontype && cur[ ontype ];
				if ( handle && handle.apply && acceptData( cur ) ) {
					event.result = handle.apply( cur, data );
					if ( event.result === false ) {
						event.preventDefault();
					}
				}
			}
			event.type = type;

			// If nobody prevented the default action, do it now
			if ( !onlyHandlers && !event.isDefaultPrevented() ) {

				if ( ( !special._default ||
					special._default.apply( eventPath.pop(), data ) === false ) &&
					acceptData( elem ) ) {

					// Call a native DOM method on the target with the same name name as the event.
					// Don't do default actions on window, that's where global variables be (#6170)
					if ( ontype && jQuery.isFunction( elem[ type ] ) && !jQuery.isWindow( elem ) ) {

						// Don't re-trigger an onFOO event when we call its FOO() method
						tmp = elem[ ontype ];

						if ( tmp ) {
							elem[ ontype ] = null;
						}

						// Prevent re-triggering of the same event, since we already bubbled it above
						jQuery.event.triggered = type;
						elem[ type ]();
						jQuery.event.triggered = undefined;

						if ( tmp ) {
							elem[ ontype ] = tmp;
						}
					}
				}
			}

			return event.result;
		},

		// Piggyback on a donor event to simulate a different one
		// Used only for `focus(in | out)` events
		simulate: function( type, elem, event ) {
			var e = jQuery.extend(
				new jQuery.Event(),
				event,
				{
					type: type,
					isSimulated: true
				}
			);

			jQuery.event.trigger( e, null, elem );
		}

	} );

	jQuery.fn.extend( {

		trigger: function( type, data ) {
			return this.each( function() {
				jQuery.event.trigger( type, data, this );
			} );
		},
		triggerHandler: function( type, data ) {
			var elem = this[ 0 ];
			if ( elem ) {
				return jQuery.event.trigger( type, data, elem, true );
			}
		}
	} );


	jQuery.each( ( "blur focus focusin focusout load resize scroll unload click dblclick " +
		"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
		"change select submit keydown keypress keyup error contextmenu" ).split( " " ),
		function( i, name ) {

		// Handle event binding
		jQuery.fn[ name ] = function( data, fn ) {
			return arguments.length > 0 ?
				this.on( name, null, data, fn ) :
				this.trigger( name );
		};
	} );

	jQuery.fn.extend( {
		hover: function( fnOver, fnOut ) {
			return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
		}
	} );




	support.focusin = "onfocusin" in window;


	// Support: Firefox
	// Firefox doesn't have focus(in | out) events
	// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
	//
	// Support: Chrome, Safari
	// focus(in | out) events fire after focus & blur events,
	// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
	// Related ticket - https://code.google.com/p/chromium/issues/detail?id=449857
	if ( !support.focusin ) {
		jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

			// Attach a single capturing handler on the document while someone wants focusin/focusout
			var handler = function( event ) {
				jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
			};

			jQuery.event.special[ fix ] = {
				setup: function() {
					var doc = this.ownerDocument || this,
						attaches = dataPriv.access( doc, fix );

					if ( !attaches ) {
						doc.addEventListener( orig, handler, true );
					}
					dataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
				},
				teardown: function() {
					var doc = this.ownerDocument || this,
						attaches = dataPriv.access( doc, fix ) - 1;

					if ( !attaches ) {
						doc.removeEventListener( orig, handler, true );
						dataPriv.remove( doc, fix );

					} else {
						dataPriv.access( doc, fix, attaches );
					}
				}
			};
		} );
	}
	var location = window.location;

	var nonce = jQuery.now();

	var rquery = ( /\?/ );



	// Support: Android 2.3
	// Workaround failure to string-cast null input
	jQuery.parseJSON = function( data ) {
		return JSON.parse( data + "" );
	};


	// Cross-browser xml parsing
	jQuery.parseXML = function( data ) {
		var xml;
		if ( !data || typeof data !== "string" ) {
			return null;
		}

		// Support: IE9
		try {
			xml = ( new window.DOMParser() ).parseFromString( data, "text/xml" );
		} catch ( e ) {
			xml = undefined;
		}

		if ( !xml || xml.getElementsByTagName( "parsererror" ).length ) {
			jQuery.error( "Invalid XML: " + data );
		}
		return xml;
	};


	var
		rhash = /#.*$/,
		rts = /([?&])_=[^&]*/,
		rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg,

		// #7653, #8125, #8152: local protocol detection
		rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
		rnoContent = /^(?:GET|HEAD)$/,
		rprotocol = /^\/\//,

		/* Prefilters
		 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
		 * 2) These are called:
		 *    - BEFORE asking for a transport
		 *    - AFTER param serialization (s.data is a string if s.processData is true)
		 * 3) key is the dataType
		 * 4) the catchall symbol "*" can be used
		 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
		 */
		prefilters = {},

		/* Transports bindings
		 * 1) key is the dataType
		 * 2) the catchall symbol "*" can be used
		 * 3) selection will start with transport dataType and THEN go to "*" if needed
		 */
		transports = {},

		// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
		allTypes = "*/".concat( "*" ),

		// Anchor tag for parsing the document origin
		originAnchor = document.createElement( "a" );
		originAnchor.href = location.href;

	// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
	function addToPrefiltersOrTransports( structure ) {

		// dataTypeExpression is optional and defaults to "*"
		return function( dataTypeExpression, func ) {

			if ( typeof dataTypeExpression !== "string" ) {
				func = dataTypeExpression;
				dataTypeExpression = "*";
			}

			var dataType,
				i = 0,
				dataTypes = dataTypeExpression.toLowerCase().match( rnotwhite ) || [];

			if ( jQuery.isFunction( func ) ) {

				// For each dataType in the dataTypeExpression
				while ( ( dataType = dataTypes[ i++ ] ) ) {

					// Prepend if requested
					if ( dataType[ 0 ] === "+" ) {
						dataType = dataType.slice( 1 ) || "*";
						( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

					// Otherwise append
					} else {
						( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
					}
				}
			}
		};
	}

	// Base inspection function for prefilters and transports
	function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

		var inspected = {},
			seekingTransport = ( structure === transports );

		function inspect( dataType ) {
			var selected;
			inspected[ dataType ] = true;
			jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
				var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
				if ( typeof dataTypeOrTransport === "string" &&
					!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

					options.dataTypes.unshift( dataTypeOrTransport );
					inspect( dataTypeOrTransport );
					return false;
				} else if ( seekingTransport ) {
					return !( selected = dataTypeOrTransport );
				}
			} );
			return selected;
		}

		return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
	}

	// A special extend for ajax options
	// that takes "flat" options (not to be deep extended)
	// Fixes #9887
	function ajaxExtend( target, src ) {
		var key, deep,
			flatOptions = jQuery.ajaxSettings.flatOptions || {};

		for ( key in src ) {
			if ( src[ key ] !== undefined ) {
				( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
			}
		}
		if ( deep ) {
			jQuery.extend( true, target, deep );
		}

		return target;
	}

	/* Handles responses to an ajax request:
	 * - finds the right dataType (mediates between content-type and expected dataType)
	 * - returns the corresponding response
	 */
	function ajaxHandleResponses( s, jqXHR, responses ) {

		var ct, type, finalDataType, firstDataType,
			contents = s.contents,
			dataTypes = s.dataTypes;

		// Remove auto dataType and get content-type in the process
		while ( dataTypes[ 0 ] === "*" ) {
			dataTypes.shift();
			if ( ct === undefined ) {
				ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
			}
		}

		// Check if we're dealing with a known content-type
		if ( ct ) {
			for ( type in contents ) {
				if ( contents[ type ] && contents[ type ].test( ct ) ) {
					dataTypes.unshift( type );
					break;
				}
			}
		}

		// Check to see if we have a response for the expected dataType
		if ( dataTypes[ 0 ] in responses ) {
			finalDataType = dataTypes[ 0 ];
		} else {

			// Try convertible dataTypes
			for ( type in responses ) {
				if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
					finalDataType = type;
					break;
				}
				if ( !firstDataType ) {
					firstDataType = type;
				}
			}

			// Or just use first one
			finalDataType = finalDataType || firstDataType;
		}

		// If we found a dataType
		// We add the dataType to the list if needed
		// and return the corresponding response
		if ( finalDataType ) {
			if ( finalDataType !== dataTypes[ 0 ] ) {
				dataTypes.unshift( finalDataType );
			}
			return responses[ finalDataType ];
		}
	}

	/* Chain conversions given the request and the original response
	 * Also sets the responseXXX fields on the jqXHR instance
	 */
	function ajaxConvert( s, response, jqXHR, isSuccess ) {
		var conv2, current, conv, tmp, prev,
			converters = {},

			// Work with a copy of dataTypes in case we need to modify it for conversion
			dataTypes = s.dataTypes.slice();

		// Create converters map with lowercased keys
		if ( dataTypes[ 1 ] ) {
			for ( conv in s.converters ) {
				converters[ conv.toLowerCase() ] = s.converters[ conv ];
			}
		}

		current = dataTypes.shift();

		// Convert to each sequential dataType
		while ( current ) {

			if ( s.responseFields[ current ] ) {
				jqXHR[ s.responseFields[ current ] ] = response;
			}

			// Apply the dataFilter if provided
			if ( !prev && isSuccess && s.dataFilter ) {
				response = s.dataFilter( response, s.dataType );
			}

			prev = current;
			current = dataTypes.shift();

			if ( current ) {

			// There's only work to do if current dataType is non-auto
				if ( current === "*" ) {

					current = prev;

				// Convert response if prev dataType is non-auto and differs from current
				} else if ( prev !== "*" && prev !== current ) {

					// Seek a direct converter
					conv = converters[ prev + " " + current ] || converters[ "* " + current ];

					// If none found, seek a pair
					if ( !conv ) {
						for ( conv2 in converters ) {

							// If conv2 outputs current
							tmp = conv2.split( " " );
							if ( tmp[ 1 ] === current ) {

								// If prev can be converted to accepted input
								conv = converters[ prev + " " + tmp[ 0 ] ] ||
									converters[ "* " + tmp[ 0 ] ];
								if ( conv ) {

									// Condense equivalence converters
									if ( conv === true ) {
										conv = converters[ conv2 ];

									// Otherwise, insert the intermediate dataType
									} else if ( converters[ conv2 ] !== true ) {
										current = tmp[ 0 ];
										dataTypes.unshift( tmp[ 1 ] );
									}
									break;
								}
							}
						}
					}

					// Apply converter (if not an equivalence)
					if ( conv !== true ) {

						// Unless errors are allowed to bubble, catch and return them
						if ( conv && s.throws ) {
							response = conv( response );
						} else {
							try {
								response = conv( response );
							} catch ( e ) {
								return {
									state: "parsererror",
									error: conv ? e : "No conversion from " + prev + " to " + current
								};
							}
						}
					}
				}
			}
		}

		return { state: "success", data: response };
	}

	jQuery.extend( {

		// Counter for holding the number of active queries
		active: 0,

		// Last-Modified header cache for next request
		lastModified: {},
		etag: {},

		ajaxSettings: {
			url: location.href,
			type: "GET",
			isLocal: rlocalProtocol.test( location.protocol ),
			global: true,
			processData: true,
			async: true,
			contentType: "application/x-www-form-urlencoded; charset=UTF-8",
			/*
			timeout: 0,
			data: null,
			dataType: null,
			username: null,
			password: null,
			cache: null,
			throws: false,
			traditional: false,
			headers: {},
			*/

			accepts: {
				"*": allTypes,
				text: "text/plain",
				html: "text/html",
				xml: "application/xml, text/xml",
				json: "application/json, text/javascript"
			},

			contents: {
				xml: /\bxml\b/,
				html: /\bhtml/,
				json: /\bjson\b/
			},

			responseFields: {
				xml: "responseXML",
				text: "responseText",
				json: "responseJSON"
			},

			// Data converters
			// Keys separate source (or catchall "*") and destination types with a single space
			converters: {

				// Convert anything to text
				"* text": String,

				// Text to html (true = no transformation)
				"text html": true,

				// Evaluate text as a json expression
				"text json": jQuery.parseJSON,

				// Parse text as xml
				"text xml": jQuery.parseXML
			},

			// For options that shouldn't be deep extended:
			// you can add your own custom options here if
			// and when you create one that shouldn't be
			// deep extended (see ajaxExtend)
			flatOptions: {
				url: true,
				context: true
			}
		},

		// Creates a full fledged settings object into target
		// with both ajaxSettings and settings fields.
		// If target is omitted, writes into ajaxSettings.
		ajaxSetup: function( target, settings ) {
			return settings ?

				// Building a settings object
				ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

				// Extending ajaxSettings
				ajaxExtend( jQuery.ajaxSettings, target );
		},

		ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
		ajaxTransport: addToPrefiltersOrTransports( transports ),

		// Main method
		ajax: function( url, options ) {

			// If url is an object, simulate pre-1.5 signature
			if ( typeof url === "object" ) {
				options = url;
				url = undefined;
			}

			// Force options to be an object
			options = options || {};

			var transport,

				// URL without anti-cache param
				cacheURL,

				// Response headers
				responseHeadersString,
				responseHeaders,

				// timeout handle
				timeoutTimer,

				// Url cleanup var
				urlAnchor,

				// To know if global events are to be dispatched
				fireGlobals,

				// Loop variable
				i,

				// Create the final options object
				s = jQuery.ajaxSetup( {}, options ),

				// Callbacks context
				callbackContext = s.context || s,

				// Context for global events is callbackContext if it is a DOM node or jQuery collection
				globalEventContext = s.context &&
					( callbackContext.nodeType || callbackContext.jquery ) ?
						jQuery( callbackContext ) :
						jQuery.event,

				// Deferreds
				deferred = jQuery.Deferred(),
				completeDeferred = jQuery.Callbacks( "once memory" ),

				// Status-dependent callbacks
				statusCode = s.statusCode || {},

				// Headers (they are sent all at once)
				requestHeaders = {},
				requestHeadersNames = {},

				// The jqXHR state
				state = 0,

				// Default abort message
				strAbort = "canceled",

				// Fake xhr
				jqXHR = {
					readyState: 0,

					// Builds headers hashtable if needed
					getResponseHeader: function( key ) {
						var match;
						if ( state === 2 ) {
							if ( !responseHeaders ) {
								responseHeaders = {};
								while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
									responseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];
								}
							}
							match = responseHeaders[ key.toLowerCase() ];
						}
						return match == null ? null : match;
					},

					// Raw string
					getAllResponseHeaders: function() {
						return state === 2 ? responseHeadersString : null;
					},

					// Caches the header
					setRequestHeader: function( name, value ) {
						var lname = name.toLowerCase();
						if ( !state ) {
							name = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
							requestHeaders[ name ] = value;
						}
						return this;
					},

					// Overrides response content-type header
					overrideMimeType: function( type ) {
						if ( !state ) {
							s.mimeType = type;
						}
						return this;
					},

					// Status-dependent callbacks
					statusCode: function( map ) {
						var code;
						if ( map ) {
							if ( state < 2 ) {
								for ( code in map ) {

									// Lazy-add the new callback in a way that preserves old ones
									statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
								}
							} else {

								// Execute the appropriate callbacks
								jqXHR.always( map[ jqXHR.status ] );
							}
						}
						return this;
					},

					// Cancel the request
					abort: function( statusText ) {
						var finalText = statusText || strAbort;
						if ( transport ) {
							transport.abort( finalText );
						}
						done( 0, finalText );
						return this;
					}
				};

			// Attach deferreds
			deferred.promise( jqXHR ).complete = completeDeferred.add;
			jqXHR.success = jqXHR.done;
			jqXHR.error = jqXHR.fail;

			// Remove hash character (#7531: and string promotion)
			// Add protocol if not provided (prefilters might expect it)
			// Handle falsy url in the settings object (#10093: consistency with old signature)
			// We also use the url parameter if available
			s.url = ( ( url || s.url || location.href ) + "" ).replace( rhash, "" )
				.replace( rprotocol, location.protocol + "//" );

			// Alias method option to type as per ticket #12004
			s.type = options.method || options.type || s.method || s.type;

			// Extract dataTypes list
			s.dataTypes = jQuery.trim( s.dataType || "*" ).toLowerCase().match( rnotwhite ) || [ "" ];

			// A cross-domain request is in order when the origin doesn't match the current origin.
			if ( s.crossDomain == null ) {
				urlAnchor = document.createElement( "a" );

				// Support: IE8-11+
				// IE throws exception if url is malformed, e.g. http://example.com:80x/
				try {
					urlAnchor.href = s.url;

					// Support: IE8-11+
					// Anchor's host property isn't correctly set when s.url is relative
					urlAnchor.href = urlAnchor.href;
					s.crossDomain = originAnchor.protocol + "//" + originAnchor.host !==
						urlAnchor.protocol + "//" + urlAnchor.host;
				} catch ( e ) {

					// If there is an error parsing the URL, assume it is crossDomain,
					// it can be rejected by the transport if it is invalid
					s.crossDomain = true;
				}
			}

			// Convert data if not already a string
			if ( s.data && s.processData && typeof s.data !== "string" ) {
				s.data = jQuery.param( s.data, s.traditional );
			}

			// Apply prefilters
			inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

			// If request was aborted inside a prefilter, stop there
			if ( state === 2 ) {
				return jqXHR;
			}

			// We can fire global events as of now if asked to
			// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
			fireGlobals = jQuery.event && s.global;

			// Watch for a new set of requests
			if ( fireGlobals && jQuery.active++ === 0 ) {
				jQuery.event.trigger( "ajaxStart" );
			}

			// Uppercase the type
			s.type = s.type.toUpperCase();

			// Determine if request has content
			s.hasContent = !rnoContent.test( s.type );

			// Save the URL in case we're toying with the If-Modified-Since
			// and/or If-None-Match header later on
			cacheURL = s.url;

			// More options handling for requests with no content
			if ( !s.hasContent ) {

				// If data is available, append data to url
				if ( s.data ) {
					cacheURL = ( s.url += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data );

					// #9682: remove data so that it's not used in an eventual retry
					delete s.data;
				}

				// Add anti-cache in url if needed
				if ( s.cache === false ) {
					s.url = rts.test( cacheURL ) ?

						// If there is already a '_' parameter, set its value
						cacheURL.replace( rts, "$1_=" + nonce++ ) :

						// Otherwise add one to the end
						cacheURL + ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + nonce++;
				}
			}

			// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
			if ( s.ifModified ) {
				if ( jQuery.lastModified[ cacheURL ] ) {
					jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
				}
				if ( jQuery.etag[ cacheURL ] ) {
					jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
				}
			}

			// Set the correct header, if data is being sent
			if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
				jqXHR.setRequestHeader( "Content-Type", s.contentType );
			}

			// Set the Accepts header for the server, depending on the dataType
			jqXHR.setRequestHeader(
				"Accept",
				s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
					s.accepts[ s.dataTypes[ 0 ] ] +
						( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
					s.accepts[ "*" ]
			);

			// Check for headers option
			for ( i in s.headers ) {
				jqXHR.setRequestHeader( i, s.headers[ i ] );
			}

			// Allow custom headers/mimetypes and early abort
			if ( s.beforeSend &&
				( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {

				// Abort if not done already and return
				return jqXHR.abort();
			}

			// Aborting is no longer a cancellation
			strAbort = "abort";

			// Install callbacks on deferreds
			for ( i in { success: 1, error: 1, complete: 1 } ) {
				jqXHR[ i ]( s[ i ] );
			}

			// Get transport
			transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

			// If no transport, we auto-abort
			if ( !transport ) {
				done( -1, "No Transport" );
			} else {
				jqXHR.readyState = 1;

				// Send global event
				if ( fireGlobals ) {
					globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
				}

				// If request was aborted inside ajaxSend, stop there
				if ( state === 2 ) {
					return jqXHR;
				}

				// Timeout
				if ( s.async && s.timeout > 0 ) {
					timeoutTimer = window.setTimeout( function() {
						jqXHR.abort( "timeout" );
					}, s.timeout );
				}

				try {
					state = 1;
					transport.send( requestHeaders, done );
				} catch ( e ) {

					// Propagate exception as error if not done
					if ( state < 2 ) {
						done( -1, e );

					// Simply rethrow otherwise
					} else {
						throw e;
					}
				}
			}

			// Callback for when everything is done
			function done( status, nativeStatusText, responses, headers ) {
				var isSuccess, success, error, response, modified,
					statusText = nativeStatusText;

				// Called once
				if ( state === 2 ) {
					return;
				}

				// State is "done" now
				state = 2;

				// Clear timeout if it exists
				if ( timeoutTimer ) {
					window.clearTimeout( timeoutTimer );
				}

				// Dereference transport for early garbage collection
				// (no matter how long the jqXHR object will be used)
				transport = undefined;

				// Cache response headers
				responseHeadersString = headers || "";

				// Set readyState
				jqXHR.readyState = status > 0 ? 4 : 0;

				// Determine if successful
				isSuccess = status >= 200 && status < 300 || status === 304;

				// Get response data
				if ( responses ) {
					response = ajaxHandleResponses( s, jqXHR, responses );
				}

				// Convert no matter what (that way responseXXX fields are always set)
				response = ajaxConvert( s, response, jqXHR, isSuccess );

				// If successful, handle type chaining
				if ( isSuccess ) {

					// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
					if ( s.ifModified ) {
						modified = jqXHR.getResponseHeader( "Last-Modified" );
						if ( modified ) {
							jQuery.lastModified[ cacheURL ] = modified;
						}
						modified = jqXHR.getResponseHeader( "etag" );
						if ( modified ) {
							jQuery.etag[ cacheURL ] = modified;
						}
					}

					// if no content
					if ( status === 204 || s.type === "HEAD" ) {
						statusText = "nocontent";

					// if not modified
					} else if ( status === 304 ) {
						statusText = "notmodified";

					// If we have data, let's convert it
					} else {
						statusText = response.state;
						success = response.data;
						error = response.error;
						isSuccess = !error;
					}
				} else {

					// Extract error from statusText and normalize for non-aborts
					error = statusText;
					if ( status || !statusText ) {
						statusText = "error";
						if ( status < 0 ) {
							status = 0;
						}
					}
				}

				// Set data for the fake xhr object
				jqXHR.status = status;
				jqXHR.statusText = ( nativeStatusText || statusText ) + "";

				// Success/Error
				if ( isSuccess ) {
					deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
				} else {
					deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
				}

				// Status-dependent callbacks
				jqXHR.statusCode( statusCode );
				statusCode = undefined;

				if ( fireGlobals ) {
					globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
						[ jqXHR, s, isSuccess ? success : error ] );
				}

				// Complete
				completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

				if ( fireGlobals ) {
					globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

					// Handle the global AJAX counter
					if ( !( --jQuery.active ) ) {
						jQuery.event.trigger( "ajaxStop" );
					}
				}
			}

			return jqXHR;
		},

		getJSON: function( url, data, callback ) {
			return jQuery.get( url, data, callback, "json" );
		},

		getScript: function( url, callback ) {
			return jQuery.get( url, undefined, callback, "script" );
		}
	} );

	jQuery.each( [ "get", "post" ], function( i, method ) {
		jQuery[ method ] = function( url, data, callback, type ) {

			// Shift arguments if data argument was omitted
			if ( jQuery.isFunction( data ) ) {
				type = type || callback;
				callback = data;
				data = undefined;
			}

			// The url can be an options object (which then must have .url)
			return jQuery.ajax( jQuery.extend( {
				url: url,
				type: method,
				dataType: type,
				data: data,
				success: callback
			}, jQuery.isPlainObject( url ) && url ) );
		};
	} );


	jQuery._evalUrl = function( url ) {
		return jQuery.ajax( {
			url: url,

			// Make this explicit, since user can override this through ajaxSetup (#11264)
			type: "GET",
			dataType: "script",
			async: false,
			global: false,
			"throws": true
		} );
	};


	jQuery.fn.extend( {
		wrapAll: function( html ) {
			var wrap;

			if ( jQuery.isFunction( html ) ) {
				return this.each( function( i ) {
					jQuery( this ).wrapAll( html.call( this, i ) );
				} );
			}

			if ( this[ 0 ] ) {

				// The elements to wrap the target around
				wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

				if ( this[ 0 ].parentNode ) {
					wrap.insertBefore( this[ 0 ] );
				}

				wrap.map( function() {
					var elem = this;

					while ( elem.firstElementChild ) {
						elem = elem.firstElementChild;
					}

					return elem;
				} ).append( this );
			}

			return this;
		},

		wrapInner: function( html ) {
			if ( jQuery.isFunction( html ) ) {
				return this.each( function( i ) {
					jQuery( this ).wrapInner( html.call( this, i ) );
				} );
			}

			return this.each( function() {
				var self = jQuery( this ),
					contents = self.contents();

				if ( contents.length ) {
					contents.wrapAll( html );

				} else {
					self.append( html );
				}
			} );
		},

		wrap: function( html ) {
			var isFunction = jQuery.isFunction( html );

			return this.each( function( i ) {
				jQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );
			} );
		},

		unwrap: function() {
			return this.parent().each( function() {
				if ( !jQuery.nodeName( this, "body" ) ) {
					jQuery( this ).replaceWith( this.childNodes );
				}
			} ).end();
		}
	} );


	jQuery.expr.filters.hidden = function( elem ) {
		return !jQuery.expr.filters.visible( elem );
	};
	jQuery.expr.filters.visible = function( elem ) {

		// Support: Opera <= 12.12
		// Opera reports offsetWidths and offsetHeights less than zero on some elements
		// Use OR instead of AND as the element is not visible if either is true
		// See tickets #10406 and #13132
		return elem.offsetWidth > 0 || elem.offsetHeight > 0 || elem.getClientRects().length > 0;
	};




	var r20 = /%20/g,
		rbracket = /\[\]$/,
		rCRLF = /\r?\n/g,
		rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
		rsubmittable = /^(?:input|select|textarea|keygen)/i;

	function buildParams( prefix, obj, traditional, add ) {
		var name;

		if ( jQuery.isArray( obj ) ) {

			// Serialize array item.
			jQuery.each( obj, function( i, v ) {
				if ( traditional || rbracket.test( prefix ) ) {

					// Treat each array item as a scalar.
					add( prefix, v );

				} else {

					// Item is non-scalar (array or object), encode its numeric index.
					buildParams(
						prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
						v,
						traditional,
						add
					);
				}
			} );

		} else if ( !traditional && jQuery.type( obj ) === "object" ) {

			// Serialize object item.
			for ( name in obj ) {
				buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
			}

		} else {

			// Serialize scalar item.
			add( prefix, obj );
		}
	}

	// Serialize an array of form elements or a set of
	// key/values into a query string
	jQuery.param = function( a, traditional ) {
		var prefix,
			s = [],
			add = function( key, value ) {

				// If value is a function, invoke it and return its value
				value = jQuery.isFunction( value ) ? value() : ( value == null ? "" : value );
				s[ s.length ] = encodeURIComponent( key ) + "=" + encodeURIComponent( value );
			};

		// Set traditional to true for jQuery <= 1.3.2 behavior.
		if ( traditional === undefined ) {
			traditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
		}

		// If an array was passed in, assume that it is an array of form elements.
		if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

			// Serialize the form elements
			jQuery.each( a, function() {
				add( this.name, this.value );
			} );

		} else {

			// If traditional, encode the "old" way (the way 1.3.2 or older
			// did it), otherwise encode params recursively.
			for ( prefix in a ) {
				buildParams( prefix, a[ prefix ], traditional, add );
			}
		}

		// Return the resulting serialization
		return s.join( "&" ).replace( r20, "+" );
	};

	jQuery.fn.extend( {
		serialize: function() {
			return jQuery.param( this.serializeArray() );
		},
		serializeArray: function() {
			return this.map( function() {

				// Can add propHook for "elements" to filter or add form elements
				var elements = jQuery.prop( this, "elements" );
				return elements ? jQuery.makeArray( elements ) : this;
			} )
			.filter( function() {
				var type = this.type;

				// Use .is( ":disabled" ) so that fieldset[disabled] works
				return this.name && !jQuery( this ).is( ":disabled" ) &&
					rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
					( this.checked || !rcheckableType.test( type ) );
			} )
			.map( function( i, elem ) {
				var val = jQuery( this ).val();

				return val == null ?
					null :
					jQuery.isArray( val ) ?
						jQuery.map( val, function( val ) {
							return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
						} ) :
						{ name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
			} ).get();
		}
	} );


	jQuery.ajaxSettings.xhr = function() {
		try {
			return new window.XMLHttpRequest();
		} catch ( e ) {}
	};

	var xhrSuccessStatus = {

			// File protocol always yields status code 0, assume 200
			0: 200,

			// Support: IE9
			// #1450: sometimes IE returns 1223 when it should be 204
			1223: 204
		},
		xhrSupported = jQuery.ajaxSettings.xhr();

	support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
	support.ajax = xhrSupported = !!xhrSupported;

	jQuery.ajaxTransport( function( options ) {
		var callback, errorCallback;

		// Cross domain only allowed if supported through XMLHttpRequest
		if ( support.cors || xhrSupported && !options.crossDomain ) {
			return {
				send: function( headers, complete ) {
					var i,
						xhr = options.xhr();

					xhr.open(
						options.type,
						options.url,
						options.async,
						options.username,
						options.password
					);

					// Apply custom fields if provided
					if ( options.xhrFields ) {
						for ( i in options.xhrFields ) {
							xhr[ i ] = options.xhrFields[ i ];
						}
					}

					// Override mime type if needed
					if ( options.mimeType && xhr.overrideMimeType ) {
						xhr.overrideMimeType( options.mimeType );
					}

					// X-Requested-With header
					// For cross-domain requests, seeing as conditions for a preflight are
					// akin to a jigsaw puzzle, we simply never set it to be sure.
					// (it can always be set on a per-request basis or even using ajaxSetup)
					// For same-domain requests, won't change header if already provided.
					if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
						headers[ "X-Requested-With" ] = "XMLHttpRequest";
					}

					// Set headers
					for ( i in headers ) {
						xhr.setRequestHeader( i, headers[ i ] );
					}

					// Callback
					callback = function( type ) {
						return function() {
							if ( callback ) {
								callback = errorCallback = xhr.onload =
									xhr.onerror = xhr.onabort = xhr.onreadystatechange = null;

								if ( type === "abort" ) {
									xhr.abort();
								} else if ( type === "error" ) {

									// Support: IE9
									// On a manual native abort, IE9 throws
									// errors on any property access that is not readyState
									if ( typeof xhr.status !== "number" ) {
										complete( 0, "error" );
									} else {
										complete(

											// File: protocol always yields status 0; see #8605, #14207
											xhr.status,
											xhr.statusText
										);
									}
								} else {
									complete(
										xhrSuccessStatus[ xhr.status ] || xhr.status,
										xhr.statusText,

										// Support: IE9 only
										// IE9 has no XHR2 but throws on binary (trac-11426)
										// For XHR2 non-text, let the caller handle it (gh-2498)
										( xhr.responseType || "text" ) !== "text"  ||
										typeof xhr.responseText !== "string" ?
											{ binary: xhr.response } :
											{ text: xhr.responseText },
										xhr.getAllResponseHeaders()
									);
								}
							}
						};
					};

					// Listen to events
					xhr.onload = callback();
					errorCallback = xhr.onerror = callback( "error" );

					// Support: IE9
					// Use onreadystatechange to replace onabort
					// to handle uncaught aborts
					if ( xhr.onabort !== undefined ) {
						xhr.onabort = errorCallback;
					} else {
						xhr.onreadystatechange = function() {

							// Check readyState before timeout as it changes
							if ( xhr.readyState === 4 ) {

								// Allow onerror to be called first,
								// but that will not handle a native abort
								// Also, save errorCallback to a variable
								// as xhr.onerror cannot be accessed
								window.setTimeout( function() {
									if ( callback ) {
										errorCallback();
									}
								} );
							}
						};
					}

					// Create the abort callback
					callback = callback( "abort" );

					try {

						// Do send the request (this may raise an exception)
						xhr.send( options.hasContent && options.data || null );
					} catch ( e ) {

						// #14683: Only rethrow if this hasn't been notified as an error yet
						if ( callback ) {
							throw e;
						}
					}
				},

				abort: function() {
					if ( callback ) {
						callback();
					}
				}
			};
		}
	} );




	// Install script dataType
	jQuery.ajaxSetup( {
		accepts: {
			script: "text/javascript, application/javascript, " +
				"application/ecmascript, application/x-ecmascript"
		},
		contents: {
			script: /\b(?:java|ecma)script\b/
		},
		converters: {
			"text script": function( text ) {
				jQuery.globalEval( text );
				return text;
			}
		}
	} );

	// Handle cache's special case and crossDomain
	jQuery.ajaxPrefilter( "script", function( s ) {
		if ( s.cache === undefined ) {
			s.cache = false;
		}
		if ( s.crossDomain ) {
			s.type = "GET";
		}
	} );

	// Bind script tag hack transport
	jQuery.ajaxTransport( "script", function( s ) {

		// This transport only deals with cross domain requests
		if ( s.crossDomain ) {
			var script, callback;
			return {
				send: function( _, complete ) {
					script = jQuery( "<script>" ).prop( {
						charset: s.scriptCharset,
						src: s.url
					} ).on(
						"load error",
						callback = function( evt ) {
							script.remove();
							callback = null;
							if ( evt ) {
								complete( evt.type === "error" ? 404 : 200, evt.type );
							}
						}
					);

					// Use native DOM manipulation to avoid our domManip AJAX trickery
					document.head.appendChild( script[ 0 ] );
				},
				abort: function() {
					if ( callback ) {
						callback();
					}
				}
			};
		}
	} );




	var oldCallbacks = [],
		rjsonp = /(=)\?(?=&|$)|\?\?/;

	// Default jsonp settings
	jQuery.ajaxSetup( {
		jsonp: "callback",
		jsonpCallback: function() {
			var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce++ ) );
			this[ callback ] = true;
			return callback;
		}
	} );

	// Detect, normalize options and install callbacks for jsonp requests
	jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

		var callbackName, overwritten, responseContainer,
			jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
				"url" :
				typeof s.data === "string" &&
					( s.contentType || "" )
						.indexOf( "application/x-www-form-urlencoded" ) === 0 &&
					rjsonp.test( s.data ) && "data"
			);

		// Handle iff the expected data type is "jsonp" or we have a parameter to set
		if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

			// Get callback name, remembering preexisting value associated with it
			callbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
				s.jsonpCallback() :
				s.jsonpCallback;

			// Insert callback into url or form data
			if ( jsonProp ) {
				s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
			} else if ( s.jsonp !== false ) {
				s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
			}

			// Use data converter to retrieve json after script execution
			s.converters[ "script json" ] = function() {
				if ( !responseContainer ) {
					jQuery.error( callbackName + " was not called" );
				}
				return responseContainer[ 0 ];
			};

			// Force json dataType
			s.dataTypes[ 0 ] = "json";

			// Install callback
			overwritten = window[ callbackName ];
			window[ callbackName ] = function() {
				responseContainer = arguments;
			};

			// Clean-up function (fires after converters)
			jqXHR.always( function() {

				// If previous value didn't exist - remove it
				if ( overwritten === undefined ) {
					jQuery( window ).removeProp( callbackName );

				// Otherwise restore preexisting value
				} else {
					window[ callbackName ] = overwritten;
				}

				// Save back as free
				if ( s[ callbackName ] ) {

					// Make sure that re-using the options doesn't screw things around
					s.jsonpCallback = originalSettings.jsonpCallback;

					// Save the callback name for future use
					oldCallbacks.push( callbackName );
				}

				// Call if it was a function and we have a response
				if ( responseContainer && jQuery.isFunction( overwritten ) ) {
					overwritten( responseContainer[ 0 ] );
				}

				responseContainer = overwritten = undefined;
			} );

			// Delegate to script
			return "script";
		}
	} );




	// Argument "data" should be string of html
	// context (optional): If specified, the fragment will be created in this context,
	// defaults to document
	// keepScripts (optional): If true, will include scripts passed in the html string
	jQuery.parseHTML = function( data, context, keepScripts ) {
		if ( !data || typeof data !== "string" ) {
			return null;
		}
		if ( typeof context === "boolean" ) {
			keepScripts = context;
			context = false;
		}
		context = context || document;

		var parsed = rsingleTag.exec( data ),
			scripts = !keepScripts && [];

		// Single tag
		if ( parsed ) {
			return [ context.createElement( parsed[ 1 ] ) ];
		}

		parsed = buildFragment( [ data ], context, scripts );

		if ( scripts && scripts.length ) {
			jQuery( scripts ).remove();
		}

		return jQuery.merge( [], parsed.childNodes );
	};


	// Keep a copy of the old load method
	var _load = jQuery.fn.load;

	/**
	 * Load a url into a page
	 */
	jQuery.fn.load = function( url, params, callback ) {
		if ( typeof url !== "string" && _load ) {
			return _load.apply( this, arguments );
		}

		var selector, type, response,
			self = this,
			off = url.indexOf( " " );

		if ( off > -1 ) {
			selector = jQuery.trim( url.slice( off ) );
			url = url.slice( 0, off );
		}

		// If it's a function
		if ( jQuery.isFunction( params ) ) {

			// We assume that it's the callback
			callback = params;
			params = undefined;

		// Otherwise, build a param string
		} else if ( params && typeof params === "object" ) {
			type = "POST";
		}

		// If we have elements to modify, make the request
		if ( self.length > 0 ) {
			jQuery.ajax( {
				url: url,

				// If "type" variable is undefined, then "GET" method will be used.
				// Make value of this field explicit since
				// user can override it through ajaxSetup method
				type: type || "GET",
				dataType: "html",
				data: params
			} ).done( function( responseText ) {

				// Save response for use in complete callback
				response = arguments;

				self.html( selector ?

					// If a selector was specified, locate the right elements in a dummy div
					// Exclude scripts to avoid IE 'Permission Denied' errors
					jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

					// Otherwise use the full result
					responseText );

			// If the request succeeds, this function gets "data", "status", "jqXHR"
			// but they are ignored because response was set above.
			// If it fails, this function gets "jqXHR", "status", "error"
			} ).always( callback && function( jqXHR, status ) {
				self.each( function() {
					callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
				} );
			} );
		}

		return this;
	};




	// Attach a bunch of functions for handling common AJAX events
	jQuery.each( [
		"ajaxStart",
		"ajaxStop",
		"ajaxComplete",
		"ajaxError",
		"ajaxSuccess",
		"ajaxSend"
	], function( i, type ) {
		jQuery.fn[ type ] = function( fn ) {
			return this.on( type, fn );
		};
	} );




	jQuery.expr.filters.animated = function( elem ) {
		return jQuery.grep( jQuery.timers, function( fn ) {
			return elem === fn.elem;
		} ).length;
	};




	/**
	 * Gets a window from an element
	 */
	function getWindow( elem ) {
		return jQuery.isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
	}

	jQuery.offset = {
		setOffset: function( elem, options, i ) {
			var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
				position = jQuery.css( elem, "position" ),
				curElem = jQuery( elem ),
				props = {};

			// Set position first, in-case top/left are set even on static elem
			if ( position === "static" ) {
				elem.style.position = "relative";
			}

			curOffset = curElem.offset();
			curCSSTop = jQuery.css( elem, "top" );
			curCSSLeft = jQuery.css( elem, "left" );
			calculatePosition = ( position === "absolute" || position === "fixed" ) &&
				( curCSSTop + curCSSLeft ).indexOf( "auto" ) > -1;

			// Need to be able to calculate position if either
			// top or left is auto and position is either absolute or fixed
			if ( calculatePosition ) {
				curPosition = curElem.position();
				curTop = curPosition.top;
				curLeft = curPosition.left;

			} else {
				curTop = parseFloat( curCSSTop ) || 0;
				curLeft = parseFloat( curCSSLeft ) || 0;
			}

			if ( jQuery.isFunction( options ) ) {

				// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
				options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
			}

			if ( options.top != null ) {
				props.top = ( options.top - curOffset.top ) + curTop;
			}
			if ( options.left != null ) {
				props.left = ( options.left - curOffset.left ) + curLeft;
			}

			if ( "using" in options ) {
				options.using.call( elem, props );

			} else {
				curElem.css( props );
			}
		}
	};

	jQuery.fn.extend( {
		offset: function( options ) {
			if ( arguments.length ) {
				return options === undefined ?
					this :
					this.each( function( i ) {
						jQuery.offset.setOffset( this, options, i );
					} );
			}

			var docElem, win,
				elem = this[ 0 ],
				box = { top: 0, left: 0 },
				doc = elem && elem.ownerDocument;

			if ( !doc ) {
				return;
			}

			docElem = doc.documentElement;

			// Make sure it's not a disconnected DOM node
			if ( !jQuery.contains( docElem, elem ) ) {
				return box;
			}

			box = elem.getBoundingClientRect();
			win = getWindow( doc );
			return {
				top: box.top + win.pageYOffset - docElem.clientTop,
				left: box.left + win.pageXOffset - docElem.clientLeft
			};
		},

		position: function() {
			if ( !this[ 0 ] ) {
				return;
			}

			var offsetParent, offset,
				elem = this[ 0 ],
				parentOffset = { top: 0, left: 0 };

			// Fixed elements are offset from window (parentOffset = {top:0, left: 0},
			// because it is its only offset parent
			if ( jQuery.css( elem, "position" ) === "fixed" ) {

				// Assume getBoundingClientRect is there when computed position is fixed
				offset = elem.getBoundingClientRect();

			} else {

				// Get *real* offsetParent
				offsetParent = this.offsetParent();

				// Get correct offsets
				offset = this.offset();
				if ( !jQuery.nodeName( offsetParent[ 0 ], "html" ) ) {
					parentOffset = offsetParent.offset();
				}

				// Add offsetParent borders
				parentOffset.top += jQuery.css( offsetParent[ 0 ], "borderTopWidth", true );
				parentOffset.left += jQuery.css( offsetParent[ 0 ], "borderLeftWidth", true );
			}

			// Subtract parent offsets and element margins
			return {
				top: offset.top - parentOffset.top - jQuery.css( elem, "marginTop", true ),
				left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
			};
		},

		// This method will return documentElement in the following cases:
		// 1) For the element inside the iframe without offsetParent, this method will return
		//    documentElement of the parent window
		// 2) For the hidden or detached element
		// 3) For body or html element, i.e. in case of the html node - it will return itself
		//
		// but those exceptions were never presented as a real life use-cases
		// and might be considered as more preferable results.
		//
		// This logic, however, is not guaranteed and can change at any point in the future
		offsetParent: function() {
			return this.map( function() {
				var offsetParent = this.offsetParent;

				while ( offsetParent && jQuery.css( offsetParent, "position" ) === "static" ) {
					offsetParent = offsetParent.offsetParent;
				}

				return offsetParent || documentElement;
			} );
		}
	} );

	// Create scrollLeft and scrollTop methods
	jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
		var top = "pageYOffset" === prop;

		jQuery.fn[ method ] = function( val ) {
			return access( this, function( elem, method, val ) {
				var win = getWindow( elem );

				if ( val === undefined ) {
					return win ? win[ prop ] : elem[ method ];
				}

				if ( win ) {
					win.scrollTo(
						!top ? val : win.pageXOffset,
						top ? val : win.pageYOffset
					);

				} else {
					elem[ method ] = val;
				}
			}, method, val, arguments.length );
		};
	} );

	// Support: Safari<7-8+, Chrome<37-44+
	// Add the top/left cssHooks using jQuery.fn.position
	// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
	// Blink bug: https://code.google.com/p/chromium/issues/detail?id=229280
	// getComputedStyle returns percent when specified for top/left/bottom/right;
	// rather than make the css module depend on the offset module, just check for it here
	jQuery.each( [ "top", "left" ], function( i, prop ) {
		jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
			function( elem, computed ) {
				if ( computed ) {
					computed = curCSS( elem, prop );

					// If curCSS returns percentage, fallback to offset
					return rnumnonpx.test( computed ) ?
						jQuery( elem ).position()[ prop ] + "px" :
						computed;
				}
			}
		);
	} );


	// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
	jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
		jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },
			function( defaultExtra, funcName ) {

			// Margin is only for outerHeight, outerWidth
			jQuery.fn[ funcName ] = function( margin, value ) {
				var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
					extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

				return access( this, function( elem, type, value ) {
					var doc;

					if ( jQuery.isWindow( elem ) ) {

						// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there
						// isn't a whole lot we can do. See pull request at this URL for discussion:
						// https://github.com/jquery/jquery/pull/764
						return elem.document.documentElement[ "client" + name ];
					}

					// Get document width or height
					if ( elem.nodeType === 9 ) {
						doc = elem.documentElement;

						// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
						// whichever is greatest
						return Math.max(
							elem.body[ "scroll" + name ], doc[ "scroll" + name ],
							elem.body[ "offset" + name ], doc[ "offset" + name ],
							doc[ "client" + name ]
						);
					}

					return value === undefined ?

						// Get width or height on the element, requesting but not forcing parseFloat
						jQuery.css( elem, type, extra ) :

						// Set width or height on the element
						jQuery.style( elem, type, value, extra );
				}, type, chainable ? margin : undefined, chainable, null );
			};
		} );
	} );


	jQuery.fn.extend( {

		bind: function( types, data, fn ) {
			return this.on( types, null, data, fn );
		},
		unbind: function( types, fn ) {
			return this.off( types, null, fn );
		},

		delegate: function( selector, types, data, fn ) {
			return this.on( types, selector, data, fn );
		},
		undelegate: function( selector, types, fn ) {

			// ( namespace ) or ( selector, types [, fn] )
			return arguments.length === 1 ?
				this.off( selector, "**" ) :
				this.off( types, selector || "**", fn );
		},
		size: function() {
			return this.length;
		}
	} );

	jQuery.fn.andSelf = jQuery.fn.addBack;




	// Register as a named AMD module, since jQuery can be concatenated with other
	// files that may use define, but not via a proper concatenation script that
	// understands anonymous AMD modules. A named AMD is safest and most robust
	// way to register. Lowercase jquery is used because AMD module names are
	// derived from file names, and jQuery is normally delivered in a lowercase
	// file name. Do this after creating the global so that if an AMD module wants
	// to call noConflict to hide this version of jQuery, it will work.

	// Note that for maximum portability, libraries that are not jQuery should
	// declare themselves as anonymous modules, and avoid setting a global if an
	// AMD loader is present. jQuery is a special case. For more information, see
	// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

	if ( true ) {
		!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = function() {
			return jQuery;
		}.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__), __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	}



	var

		// Map over jQuery in case of overwrite
		_jQuery = window.jQuery,

		// Map over the $ in case of overwrite
		_$ = window.$;

	jQuery.noConflict = function( deep ) {
		if ( window.$ === jQuery ) {
			window.$ = _$;
		}

		if ( deep && window.jQuery === jQuery ) {
			window.jQuery = _jQuery;
		}

		return jQuery;
	};

	// Expose jQuery and $ identifiers, even in AMD
	// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
	// and CommonJS for browser emulators (#13566)
	if ( !noGlobal ) {
		window.jQuery = window.$ = jQuery;
	}

	return jQuery;
	}));


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

	/* WEBPACK VAR INJECTION */(function(global) {module.exports = global[""] = __webpack_require__(6);
	/* WEBPACK VAR INJECTION */}.call(exports, (function() { return this; }())))

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

	var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/*! VelocityJS.org (1.5.0). (C) 2014 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
	/*! VelocityJS.org jQuery Shim (1.0.1). (C) 2014 The jQuery Foundation. MIT @license: en.wikipedia.org/wiki/MIT_License. */
	!function(a){"use strict";function b(a){var b=a.length,d=c.type(a);return"function"!==d&&!c.isWindow(a)&&(!(1!==a.nodeType||!b)||("array"===d||0===b||"number"==typeof b&&b>0&&b-1 in a))}if(!a.jQuery){var c=function(a,b){return new c.fn.init(a,b)};c.isWindow=function(a){return a&&a===a.window},c.type=function(a){return a?"object"==typeof a||"function"==typeof a?e[g.call(a)]||"object":typeof a:a+""},c.isArray=Array.isArray||function(a){return"array"===c.type(a)},c.isPlainObject=function(a){var b;if(!a||"object"!==c.type(a)||a.nodeType||c.isWindow(a))return!1;try{if(a.constructor&&!f.call(a,"constructor")&&!f.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(d){return!1}for(b in a);return b===undefined||f.call(a,b)},c.each=function(a,c,d){var e=0,f=a.length,g=b(a);if(d){if(g)for(;e<f&&c.apply(a[e],d)!==!1;e++);else for(e in a)if(a.hasOwnProperty(e)&&c.apply(a[e],d)===!1)break}else if(g)for(;e<f&&c.call(a[e],e,a[e])!==!1;e++);else for(e in a)if(a.hasOwnProperty(e)&&c.call(a[e],e,a[e])===!1)break;return a},c.data=function(a,b,e){if(e===undefined){var f=a[c.expando],g=f&&d[f];if(b===undefined)return g;if(g&&b in g)return g[b]}else if(b!==undefined){var h=a[c.expando]||(a[c.expando]=++c.uuid);return d[h]=d[h]||{},d[h][b]=e,e}},c.removeData=function(a,b){var e=a[c.expando],f=e&&d[e];f&&(b?c.each(b,function(a,b){delete f[b]}):delete d[e])},c.extend=function(){var a,b,d,e,f,g,h=arguments[0]||{},i=1,j=arguments.length,k=!1;for("boolean"==typeof h&&(k=h,h=arguments[i]||{},i++),"object"!=typeof h&&"function"!==c.type(h)&&(h={}),i===j&&(h=this,i--);i<j;i++)if(f=arguments[i])for(e in f)f.hasOwnProperty(e)&&(a=h[e],d=f[e],h!==d&&(k&&d&&(c.isPlainObject(d)||(b=c.isArray(d)))?(b?(b=!1,g=a&&c.isArray(a)?a:[]):g=a&&c.isPlainObject(a)?a:{},h[e]=c.extend(k,g,d)):d!==undefined&&(h[e]=d)));return h},c.queue=function(a,d,e){if(a){d=(d||"fx")+"queue";var f=c.data(a,d);return e?(!f||c.isArray(e)?f=c.data(a,d,function(a,c){var d=c||[];return a&&(b(Object(a))?function(a,b){for(var c=+b.length,d=0,e=a.length;d<c;)a[e++]=b[d++];if(c!==c)for(;b[d]!==undefined;)a[e++]=b[d++];a.length=e,a}(d,"string"==typeof a?[a]:a):[].push.call(d,a)),d}(e)):f.push(e),f):f||[]}},c.dequeue=function(a,b){c.each(a.nodeType?[a]:a,function(a,d){b=b||"fx";var e=c.queue(d,b),f=e.shift();"inprogress"===f&&(f=e.shift()),f&&("fx"===b&&e.unshift("inprogress"),f.call(d,function(){c.dequeue(d,b)}))})},c.fn=c.prototype={init:function(a){if(a.nodeType)return this[0]=a,this;throw new Error("Not a DOM node.")},offset:function(){var b=this[0].getBoundingClientRect?this[0].getBoundingClientRect():{top:0,left:0};return{top:b.top+(a.pageYOffset||document.scrollTop||0)-(document.clientTop||0),left:b.left+(a.pageXOffset||document.scrollLeft||0)-(document.clientLeft||0)}},position:function(){var a=this[0],b=function(a){for(var b=a.offsetParent;b&&"html"!==b.nodeName.toLowerCase()&&b.style&&"static"===b.style.position;)b=b.offsetParent;return b||document}(a),d=this.offset(),e=/^(?:body|html)$/i.test(b.nodeName)?{top:0,left:0}:c(b).offset();return d.top-=parseFloat(a.style.marginTop)||0,d.left-=parseFloat(a.style.marginLeft)||0,b.style&&(e.top+=parseFloat(b.style.borderTopWidth)||0,e.left+=parseFloat(b.style.borderLeftWidth)||0),{top:d.top-e.top,left:d.left-e.left}}};var d={};c.expando="velocity"+(new Date).getTime(),c.uuid=0;for(var e={},f=e.hasOwnProperty,g=e.toString,h="Boolean Number String Function Array Date RegExp Object Error".split(" "),i=0;i<h.length;i++)e["[object "+h[i]+"]"]=h[i].toLowerCase();c.fn.init.prototype=c.fn,a.Velocity={Utilities:c}}}(window),function(a){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=a(): true?!(__WEBPACK_AMD_DEFINE_FACTORY__ = (a), __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ? (__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) : __WEBPACK_AMD_DEFINE_FACTORY__), __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)):a()}(function(){"use strict";return function(a,b,c,d){function e(a){for(var b=-1,c=a?a.length:0,d=[];++b<c;){var e=a[b];e&&d.push(e)}return d}function f(a){return u.isWrapped(a)?a=s.call(a):u.isNode(a)&&(a=[a]),a}function g(a){var b=o.data(a,"velocity");return null===b?d:b}function h(a,b){var c=g(a);c&&c.delayTimer&&!c.delayPaused&&(c.delayRemaining=c.delay-b+c.delayBegin,c.delayPaused=!0,clearTimeout(c.delayTimer.setTimeout))}function i(a,b){var c=g(a);c&&c.delayTimer&&c.delayPaused&&(c.delayPaused=!1,c.delayTimer.setTimeout=setTimeout(c.delayTimer.next,c.delayRemaining))}function j(a){return function(b){return Math.round(b*a)*(1/a)}}function k(a,c,d,e){function f(a,b){return 1-3*b+3*a}function g(a,b){return 3*b-6*a}function h(a){return 3*a}function i(a,b,c){return((f(b,c)*a+g(b,c))*a+h(b))*a}function j(a,b,c){return 3*f(b,c)*a*a+2*g(b,c)*a+h(b)}function k(b,c){for(var e=0;e<p;++e){var f=j(c,a,d);if(0===f)return c;c-=(i(c,a,d)-b)/f}return c}function l(){for(var b=0;b<t;++b)x[b]=i(b*u,a,d)}function m(b,c,e){var f,g,h=0;do{g=c+(e-c)/2,f=i(g,a,d)-b,f>0?e=g:c=g}while(Math.abs(f)>r&&++h<s);return g}function n(b){for(var c=0,e=1,f=t-1;e!==f&&x[e]<=b;++e)c+=u;--e;var g=(b-x[e])/(x[e+1]-x[e]),h=c+g*u,i=j(h,a,d);return i>=q?k(b,h):0===i?h:m(b,c,c+u)}function o(){y=!0,a===c&&d===e||l()}var p=4,q=.001,r=1e-7,s=10,t=11,u=1/(t-1),v="Float32Array"in b;if(4!==arguments.length)return!1;for(var w=0;w<4;++w)if("number"!=typeof arguments[w]||isNaN(arguments[w])||!isFinite(arguments[w]))return!1;a=Math.min(a,1),d=Math.min(d,1),a=Math.max(a,0),d=Math.max(d,0);var x=v?new Float32Array(t):new Array(t),y=!1,z=function(b){return y||o(),a===c&&d===e?b:0===b?0:1===b?1:i(n(b),c,e)};z.getControlPoints=function(){return[{x:a,y:c},{x:d,y:e}]};var A="generateBezier("+[a,c,d,e]+")";return z.toString=function(){return A},z}function l(a,b){var c=a;return u.isString(a)?y.Easings[a]||(c=!1):c=u.isArray(a)&&1===a.length?j.apply(null,a):u.isArray(a)&&2===a.length?z.apply(null,a.concat([b])):!(!u.isArray(a)||4!==a.length)&&k.apply(null,a),c===!1&&(c=y.Easings[y.defaults.easing]?y.defaults.easing:x),c}function m(a){if(a){var b=y.timestamp&&a!==!0?a:r.now(),c=y.State.calls.length;c>1e4&&(y.State.calls=e(y.State.calls),c=y.State.calls.length);for(var f=0;f<c;f++)if(y.State.calls[f]){var h=y.State.calls[f],i=h[0],j=h[2],k=h[3],l=!!k,q=null,s=h[5],t=h[6];if(k||(k=y.State.calls[f][3]=b-16),s){if(s.resume!==!0)continue;k=h[3]=Math.round(b-t-16),h[5]=null}t=h[6]=b-k;for(var v=Math.min(t/j.duration,1),w=0,x=i.length;w<x;w++){var z=i[w],B=z.element;if(g(B)){var D=!1;if(j.display!==d&&null!==j.display&&"none"!==j.display){if("flex"===j.display){var E=["-webkit-box","-moz-box","-ms-flexbox","-webkit-flex"];o.each(E,function(a,b){A.setPropertyValue(B,"display",b)})}A.setPropertyValue(B,"display",j.display)}j.visibility!==d&&"hidden"!==j.visibility&&A.setPropertyValue(B,"visibility",j.visibility);for(var F in z)if(z.hasOwnProperty(F)&&"element"!==F){var G,H=z[F],I=u.isString(H.easing)?y.Easings[H.easing]:H.easing;if(u.isString(H.pattern)){var J=1===v?function(a,b,c){var d=H.endValue[b];return c?Math.round(d):d}:function(a,b,c){var d=H.startValue[b],e=H.endValue[b]-d,f=d+e*I(v,j,e);return c?Math.round(f):f};G=H.pattern.replace(/{(\d+)(!)?}/g,J)}else if(1===v)G=H.endValue;else{var K=H.endValue-H.startValue;G=H.startValue+K*I(v,j,K)}if(!l&&G===H.currentValue)continue;if(H.currentValue=G,"tween"===F)q=G;else{var L;if(A.Hooks.registered[F]){L=A.Hooks.getRoot(F);var M=g(B).rootPropertyValueCache[L];M&&(H.rootPropertyValue=M)}var N=A.setPropertyValue(B,F,H.currentValue+(p<9&&0===parseFloat(G)?"":H.unitType),H.rootPropertyValue,H.scrollData);A.Hooks.registered[F]&&(A.Normalizations.registered[L]?g(B).rootPropertyValueCache[L]=A.Normalizations.registered[L]("extract",null,N[1]):g(B).rootPropertyValueCache[L]=N[1]),"transform"===N[0]&&(D=!0)}}j.mobileHA&&g(B).transformCache.translate3d===d&&(g(B).transformCache.translate3d="(0px, 0px, 0px)",D=!0),D&&A.flushTransformCache(B)}}j.display!==d&&"none"!==j.display&&(y.State.calls[f][2].display=!1),j.visibility!==d&&"hidden"!==j.visibility&&(y.State.calls[f][2].visibility=!1),j.progress&&j.progress.call(h[1],h[1],v,Math.max(0,k+j.duration-b),k,q),1===v&&n(f)}}y.State.isTicking&&C(m)}function n(a,b){if(!y.State.calls[a])return!1;for(var c=y.State.calls[a][0],e=y.State.calls[a][1],f=y.State.calls[a][2],h=y.State.calls[a][4],i=!1,j=0,k=c.length;j<k;j++){var l=c[j].element;b||f.loop||("none"===f.display&&A.setPropertyValue(l,"display",f.display),"hidden"===f.visibility&&A.setPropertyValue(l,"visibility",f.visibility));var m=g(l);if(f.loop!==!0&&(o.queue(l)[1]===d||!/\.velocityQueueEntryFlag/i.test(o.queue(l)[1]))&&m){m.isAnimating=!1,m.rootPropertyValueCache={};var n=!1;o.each(A.Lists.transforms3D,function(a,b){var c=/^scale/.test(b)?1:0,e=m.transformCache[b];m.transformCache[b]!==d&&new RegExp("^\\("+c+"[^.]").test(e)&&(n=!0,delete m.transformCache[b])}),f.mobileHA&&(n=!0,delete m.transformCache.translate3d),n&&A.flushTransformCache(l),A.Values.removeClass(l,"velocity-animating")}if(!b&&f.complete&&!f.loop&&j===k-1)try{f.complete.call(e,e)}catch(r){setTimeout(function(){throw r},1)}h&&f.loop!==!0&&h(e),m&&f.loop===!0&&!b&&(o.each(m.tweensContainer,function(a,b){if(/^rotate/.test(a)&&(parseFloat(b.startValue)-parseFloat(b.endValue))%360==0){var c=b.startValue;b.startValue=b.endValue,b.endValue=c}/^backgroundPosition/.test(a)&&100===parseFloat(b.endValue)&&"%"===b.unitType&&(b.endValue=0,b.startValue=100)}),y(l,"reverse",{loop:!0,delay:f.delay})),f.queue!==!1&&o.dequeue(l,f.queue)}y.State.calls[a]=!1;for(var p=0,q=y.State.calls.length;p<q;p++)if(y.State.calls[p]!==!1){i=!0;break}i===!1&&(y.State.isTicking=!1,delete y.State.calls,y.State.calls=[])}var o,p=function(){if(c.documentMode)return c.documentMode;for(var a=7;a>4;a--){var b=c.createElement("div");if(b.innerHTML="<!--[if IE "+a+"]><span></span><![endif]-->",b.getElementsByTagName("span").length)return b=null,a}return d}(),q=function(){var a=0;return b.webkitRequestAnimationFrame||b.mozRequestAnimationFrame||function(b){var c,d=(new Date).getTime();return c=Math.max(0,16-(d-a)),a=d+c,setTimeout(function(){b(d+c)},c)}}(),r=function(){var a=b.performance||{};if("function"!=typeof a.now){var c=a.timing&&a.timing.navigationStart?a.timing.navigationStart:(new Date).getTime();a.now=function(){return(new Date).getTime()-c}}return a}(),s=function(){var a=Array.prototype.slice;try{return a.call(c.documentElement),a}catch(b){return function(b,c){var d=this.length;if("number"!=typeof b&&(b=0),"number"!=typeof c&&(c=d),this.slice)return a.call(this,b,c);var e,f=[],g=b>=0?b:Math.max(0,d+b),h=c<0?d+c:Math.min(c,d),i=h-g;if(i>0)if(f=new Array(i),this.charAt)for(e=0;e<i;e++)f[e]=this.charAt(g+e);else for(e=0;e<i;e++)f[e]=this[g+e];return f}}}(),t=function(){return Array.prototype.includes?function(a,b){return a.includes(b)}:Array.prototype.indexOf?function(a,b){return a.indexOf(b)>=0}:function(a,b){for(var c=0;c<a.length;c++)if(a[c]===b)return!0;return!1}},u={isNumber:function(a){return"number"==typeof a},isString:function(a){return"string"==typeof a},isArray:Array.isArray||function(a){return"[object Array]"===Object.prototype.toString.call(a)},isFunction:function(a){return"[object Function]"===Object.prototype.toString.call(a)},isNode:function(a){return a&&a.nodeType},isWrapped:function(a){return a&&a!==b&&u.isNumber(a.length)&&!u.isString(a)&&!u.isFunction(a)&&!u.isNode(a)&&(0===a.length||u.isNode(a[0]))},isSVG:function(a){return b.SVGElement&&a instanceof b.SVGElement},isEmptyObject:function(a){for(var b in a)if(a.hasOwnProperty(b))return!1;return!0}},v=!1;if(a.fn&&a.fn.jquery?(o=a,v=!0):o=b.Velocity.Utilities,p<=8&&!v)throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.");if(p<=7)return void(jQuery.fn.velocity=jQuery.fn.animate);var w=400,x="swing",y={State:{isMobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),isAndroid:/Android/i.test(navigator.userAgent),isGingerbread:/Android 2\.3\.[3-7]/i.test(navigator.userAgent),isChrome:b.chrome,isFirefox:/Firefox/i.test(navigator.userAgent),prefixElement:c.createElement("div"),prefixMatches:{},scrollAnchor:null,scrollPropertyLeft:null,scrollPropertyTop:null,isTicking:!1,calls:[],delayedElements:{count:0}},CSS:{},Utilities:o,Redirects:{},Easings:{},Promise:b.Promise,defaults:{queue:"",duration:w,easing:x,begin:d,complete:d,progress:d,display:d,visibility:d,loop:!1,delay:!1,mobileHA:!0,_cacheValues:!0,promiseRejectEmpty:!0},init:function(a){o.data(a,"velocity",{isSVG:u.isSVG(a),isAnimating:!1,computedStyle:null,tweensContainer:null,rootPropertyValueCache:{},transformCache:{}})},hook:null,mock:!1,version:{major:1,minor:5,patch:0},debug:!1,timestamp:!0,pauseAll:function(a){var b=(new Date).getTime();o.each(y.State.calls,function(b,c){if(c){if(a!==d&&(c[2].queue!==a||c[2].queue===!1))return!0;c[5]={resume:!1}}}),o.each(y.State.delayedElements,function(a,c){c&&h(c,b)})},resumeAll:function(a){var b=(new Date).getTime();o.each(y.State.calls,function(b,c){if(c){if(a!==d&&(c[2].queue!==a||c[2].queue===!1))return!0;c[5]&&(c[5].resume=!0)}}),o.each(y.State.delayedElements,function(a,c){c&&i(c,b)})}};b.pageYOffset!==d?(y.State.scrollAnchor=b,y.State.scrollPropertyLeft="pageXOffset",y.State.scrollPropertyTop="pageYOffset"):(y.State.scrollAnchor=c.documentElement||c.body.parentNode||c.body,y.State.scrollPropertyLeft="scrollLeft",y.State.scrollPropertyTop="scrollTop");var z=function(){function a(a){return-a.tension*a.x-a.friction*a.v}function b(b,c,d){var e={x:b.x+d.dx*c,v:b.v+d.dv*c,tension:b.tension,friction:b.friction};return{dx:e.v,dv:a(e)}}function c(c,d){var e={dx:c.v,dv:a(c)},f=b(c,.5*d,e),g=b(c,.5*d,f),h=b(c,d,g),i=1/6*(e.dx+2*(f.dx+g.dx)+h.dx),j=1/6*(e.dv+2*(f.dv+g.dv)+h.dv);return c.x=c.x+i*d,c.v=c.v+j*d,c}return function d(a,b,e){var f,g,h,i={x:-1,v:0,tension:null,friction:null},j=[0],k=0;for(a=parseFloat(a)||500,b=parseFloat(b)||20,e=e||null,i.tension=a,i.friction=b,f=null!==e,f?(k=d(a,b),g=k/e*.016):g=.016;;)if(h=c(h||i,g),j.push(1+h.x),k+=16,!(Math.abs(h.x)>1e-4&&Math.abs(h.v)>1e-4))break;return f?function(a){return j[a*(j.length-1)|0]}:k}}();y.Easings={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2},spring:function(a){return 1-Math.cos(4.5*a*Math.PI)*Math.exp(6*-a)}},o.each([["ease",[.25,.1,.25,1]],["ease-in",[.42,0,1,1]],["ease-out",[0,0,.58,1]],["ease-in-out",[.42,0,.58,1]],["easeInSine",[.47,0,.745,.715]],["easeOutSine",[.39,.575,.565,1]],["easeInOutSine",[.445,.05,.55,.95]],["easeInQuad",[.55,.085,.68,.53]],["easeOutQuad",[.25,.46,.45,.94]],["easeInOutQuad",[.455,.03,.515,.955]],["easeInCubic",[.55,.055,.675,.19]],["easeOutCubic",[.215,.61,.355,1]],["easeInOutCubic",[.645,.045,.355,1]],["easeInQuart",[.895,.03,.685,.22]],["easeOutQuart",[.165,.84,.44,1]],["easeInOutQuart",[.77,0,.175,1]],["easeInQuint",[.755,.05,.855,.06]],["easeOutQuint",[.23,1,.32,1]],["easeInOutQuint",[.86,0,.07,1]],["easeInExpo",[.95,.05,.795,.035]],["easeOutExpo",[.19,1,.22,1]],["easeInOutExpo",[1,0,0,1]],["easeInCirc",[.6,.04,.98,.335]],["easeOutCirc",[.075,.82,.165,1]],["easeInOutCirc",[.785,.135,.15,.86]]],function(a,b){y.Easings[b[0]]=k.apply(null,b[1])});var A=y.CSS={RegEx:{isHex:/^#([A-f\d]{3}){1,2}$/i,valueUnwrap:/^[A-z]+\((.*)\)$/i,wrappedValueAlreadyExtracted:/[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,valueSplit:/([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi},Lists:{colors:["fill","stroke","stopColor","color","backgroundColor","borderColor","borderTopColor","borderRightColor","borderBottomColor","borderLeftColor","outlineColor"],transformsBase:["translateX","translateY","scale","scaleX","scaleY","skewX","skewY","rotateZ"],transforms3D:["transformPerspective","translateZ","scaleZ","rotateX","rotateY"],units:["%","em","ex","ch","rem","vw","vh","vmin","vmax","cm","mm","Q","in","pc","pt","px","deg","grad","rad","turn","s","ms"],colorNames:{aliceblue:"240,248,255",antiquewhite:"250,235,215",aquamarine:"127,255,212",aqua:"0,255,255",azure:"240,255,255",beige:"245,245,220",bisque:"255,228,196",black:"0,0,0",blanchedalmond:"255,235,205",blueviolet:"138,43,226",blue:"0,0,255",brown:"165,42,42",burlywood:"222,184,135",cadetblue:"95,158,160",chartreuse:"127,255,0",chocolate:"210,105,30",coral:"255,127,80",cornflowerblue:"100,149,237",cornsilk:"255,248,220",crimson:"220,20,60",cyan:"0,255,255",darkblue:"0,0,139",darkcyan:"0,139,139",darkgoldenrod:"184,134,11",darkgray:"169,169,169",darkgrey:"169,169,169",darkgreen:"0,100,0",darkkhaki:"189,183,107",darkmagenta:"139,0,139",darkolivegreen:"85,107,47",darkorange:"255,140,0",darkorchid:"153,50,204",darkred:"139,0,0",darksalmon:"233,150,122",darkseagreen:"143,188,143",darkslateblue:"72,61,139",darkslategray:"47,79,79",darkturquoise:"0,206,209",darkviolet:"148,0,211",deeppink:"255,20,147",deepskyblue:"0,191,255",dimgray:"105,105,105",dimgrey:"105,105,105",dodgerblue:"30,144,255",firebrick:"178,34,34",floralwhite:"255,250,240",forestgreen:"34,139,34",fuchsia:"255,0,255",gainsboro:"220,220,220",ghostwhite:"248,248,255",gold:"255,215,0",goldenrod:"218,165,32",gray:"128,128,128",grey:"128,128,128",greenyellow:"173,255,47",green:"0,128,0",honeydew:"240,255,240",hotpink:"255,105,180",indianred:"205,92,92",indigo:"75,0,130",ivory:"255,255,240",khaki:"240,230,140",lavenderblush:"255,240,245",lavender:"230,230,250",lawngreen:"124,252,0",lemonchiffon:"255,250,205",lightblue:"173,216,230",lightcoral:"240,128,128",lightcyan:"224,255,255",lightgoldenrodyellow:"250,250,210",lightgray:"211,211,211",lightgrey:"211,211,211",lightgreen:"144,238,144",lightpink:"255,182,193",lightsalmon:"255,160,122",lightseagreen:"32,178,170",lightskyblue:"135,206,250",lightslategray:"119,136,153",lightsteelblue:"176,196,222",lightyellow:"255,255,224",limegreen:"50,205,50",lime:"0,255,0",linen:"250,240,230",magenta:"255,0,255",maroon:"128,0,0",mediumaquamarine:"102,205,170",mediumblue:"0,0,205",mediumorchid:"186,85,211",mediumpurple:"147,112,219",mediumseagreen:"60,179,113",mediumslateblue:"123,104,238",mediumspringgreen:"0,250,154",mediumturquoise:"72,209,204",mediumvioletred:"199,21,133",midnightblue:"25,25,112",mintcream:"245,255,250",mistyrose:"255,228,225",moccasin:"255,228,181",navajowhite:"255,222,173",navy:"0,0,128",oldlace:"253,245,230",olivedrab:"107,142,35",olive:"128,128,0",orangered:"255,69,0",orange:"255,165,0",orchid:"218,112,214",palegoldenrod:"238,232,170",palegreen:"152,251,152",paleturquoise:"175,238,238",palevioletred:"219,112,147",papayawhip:"255,239,213",peachpuff:"255,218,185",peru:"205,133,63",pink:"255,192,203",plum:"221,160,221",powderblue:"176,224,230",purple:"128,0,128",red:"255,0,0",rosybrown:"188,143,143",royalblue:"65,105,225",saddlebrown:"139,69,19",salmon:"250,128,114",sandybrown:"244,164,96",seagreen:"46,139,87",seashell:"255,245,238",sienna:"160,82,45",silver:"192,192,192",skyblue:"135,206,235",slateblue:"106,90,205",slategray:"112,128,144",snow:"255,250,250",springgreen:"0,255,127",steelblue:"70,130,180",tan:"210,180,140",teal:"0,128,128",thistle:"216,191,216",tomato:"255,99,71",turquoise:"64,224,208",violet:"238,130,238",wheat:"245,222,179",whitesmoke:"245,245,245",white:"255,255,255",yellowgreen:"154,205,50",yellow:"255,255,0"}},Hooks:{templates:{textShadow:["Color X Y Blur","black 0px 0px 0px"],boxShadow:["Color X Y Blur Spread","black 0px 0px 0px 0px"],clip:["Top Right Bottom Left","0px 0px 0px 0px"],backgroundPosition:["X Y","0% 0%"],transformOrigin:["X Y Z","50% 50% 0px"],perspectiveOrigin:["X Y","50% 50%"]},registered:{},register:function(){for(var a=0;a<A.Lists.colors.length;a++){var b="color"===A.Lists.colors[a]?"0 0 0 1":"255 255 255 1";A.Hooks.templates[A.Lists.colors[a]]=["Red Green Blue Alpha",b]}var c,d,e;if(p)for(c in A.Hooks.templates)if(A.Hooks.templates.hasOwnProperty(c)){d=A.Hooks.templates[c],e=d[0].split(" ");var f=d[1].match(A.RegEx.valueSplit);"Color"===e[0]&&(e.push(e.shift()),f.push(f.shift()),A.Hooks.templates[c]=[e.join(" "),f.join(" ")])}for(c in A.Hooks.templates)if(A.Hooks.templates.hasOwnProperty(c)){d=A.Hooks.templates[c],e=d[0].split(" ");for(var g in e)if(e.hasOwnProperty(g)){var h=c+e[g],i=g;A.Hooks.registered[h]=[c,i]}}},getRoot:function(a){var b=A.Hooks.registered[a];return b?b[0]:a},getUnit:function(a,b){var c=(a.substr(b||0,5).match(/^[a-z%]+/)||[])[0]||"";return c&&t(A.Lists.units,c)?c:""},fixColors:function(a){return a.replace(/(rgba?\(\s*)?(\b[a-z]+\b)/g,function(a,b,c){return A.Lists.colorNames.hasOwnProperty(c)?(b?b:"rgba(")+A.Lists.colorNames[c]+(b?"":",1)"):b+c})},cleanRootPropertyValue:function(a,b){return A.RegEx.valueUnwrap.test(b)&&(b=b.match(A.RegEx.valueUnwrap)[1]),A.Values.isCSSNullValue(b)&&(b=A.Hooks.templates[a][1]),b},extractValue:function(a,b){var c=A.Hooks.registered[a];if(c){var d=c[0],e=c[1];return b=A.Hooks.cleanRootPropertyValue(d,b),b.toString().match(A.RegEx.valueSplit)[e]}return b},injectValue:function(a,b,c){var d=A.Hooks.registered[a];if(d){var e,f=d[0],g=d[1];return c=A.Hooks.cleanRootPropertyValue(f,c),e=c.toString().match(A.RegEx.valueSplit),e[g]=b,e.join(" ")}return c}},Normalizations:{registered:{clip:function(a,b,c){switch(a){case"name":return"clip";case"extract":var d;return A.RegEx.wrappedValueAlreadyExtracted.test(c)?d=c:(d=c.toString().match(A.RegEx.valueUnwrap),d=d?d[1].replace(/,(\s+)?/g," "):c),d;case"inject":return"rect("+c+")"}},blur:function(a,b,c){switch(a){case"name":return y.State.isFirefox?"filter":"-webkit-filter";case"extract":var d=parseFloat(c);if(!d&&0!==d){var e=c.toString().match(/blur\(([0-9]+[A-z]+)\)/i);d=e?e[1]:0}return d;case"inject":return parseFloat(c)?"blur("+c+")":"none"}},opacity:function(a,b,c){if(p<=8)switch(a){case"name":return"filter";case"extract":var d=c.toString().match(/alpha\(opacity=(.*)\)/i);return c=d?d[1]/100:1;case"inject":return b.style.zoom=1,parseFloat(c)>=1?"":"alpha(opacity="+parseInt(100*parseFloat(c),10)+")"}else switch(a){case"name":return"opacity";case"extract":return c;case"inject":return c}}},register:function(){function a(a,b,c){if("border-box"===A.getPropertyValue(b,"boxSizing").toString().toLowerCase()===(c||!1)){var d,e,f=0,g="width"===a?["Left","Right"]:["Top","Bottom"],h=["padding"+g[0],"padding"+g[1],"border"+g[0]+"Width","border"+g[1]+"Width"];for(d=0;d<h.length;d++)e=parseFloat(A.getPropertyValue(b,h[d])),isNaN(e)||(f+=e);return c?-f:f}return 0}function b(b,c){return function(d,e,f){switch(d){case"name":return b;case"extract":return parseFloat(f)+a(b,e,c);case"inject":return parseFloat(f)-a(b,e,c)+"px"}}}p&&!(p>9)||y.State.isGingerbread||(A.Lists.transformsBase=A.Lists.transformsBase.concat(A.Lists.transforms3D));for(var c=0;c<A.Lists.transformsBase.length;c++)!function(){var a=A.Lists.transformsBase[c];A.Normalizations.registered[a]=function(b,c,e){switch(b){case"name":return"transform";case"extract":return g(c)===d||g(c).transformCache[a]===d?/^scale/i.test(a)?1:0:g(c).transformCache[a].replace(/[()]/g,"");case"inject":var f=!1;switch(a.substr(0,a.length-1)){case"translate":f=!/(%|px|em|rem|vw|vh|\d)$/i.test(e);break;case"scal":case"scale":y.State.isAndroid&&g(c).transformCache[a]===d&&e<1&&(e=1),f=!/(\d)$/i.test(e);break;case"skew":f=!/(deg|\d)$/i.test(e);break;case"rotate":f=!/(deg|\d)$/i.test(e)}return f||(g(c).transformCache[a]="("+e+")"),g(c).transformCache[a]}}}();for(var e=0;e<A.Lists.colors.length;e++)!function(){var a=A.Lists.colors[e];A.Normalizations.registered[a]=function(b,c,e){switch(b){case"name":return a;case"extract":var f;if(A.RegEx.wrappedValueAlreadyExtracted.test(e))f=e;else{var g,h={black:"rgb(0, 0, 0)",blue:"rgb(0, 0, 255)",gray:"rgb(128, 128, 128)",green:"rgb(0, 128, 0)",red:"rgb(255, 0, 0)",white:"rgb(255, 255, 255)"};/^[A-z]+$/i.test(e)?g=h[e]!==d?h[e]:h.black:A.RegEx.isHex.test(e)?g="rgb("+A.Values.hexToRgb(e).join(" ")+")":/^rgba?\(/i.test(e)||(g=h.black),f=(g||e).toString().match(A.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g," ")}return(!p||p>8)&&3===f.split(" ").length&&(f+=" 1"),f;case"inject":return/^rgb/.test(e)?e:(p<=8?4===e.split(" ").length&&(e=e.split(/\s+/).slice(0,3).join(" ")):3===e.split(" ").length&&(e+=" 1"),(p<=8?"rgb":"rgba")+"("+e.replace(/\s+/g,",").replace(/\.(\d)+(?=,)/g,"")+")")}}}();A.Normalizations.registered.innerWidth=b("width",!0),A.Normalizations.registered.innerHeight=b("height",!0),A.Normalizations.registered.outerWidth=b("width"),A.Normalizations.registered.outerHeight=b("height")}},Names:{camelCase:function(a){return a.replace(/-(\w)/g,function(a,b){return b.toUpperCase()})},SVGAttribute:function(a){var b="width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";return(p||y.State.isAndroid&&!y.State.isChrome)&&(b+="|transform"),new RegExp("^("+b+")$","i").test(a)},prefixCheck:function(a){if(y.State.prefixMatches[a])return[y.State.prefixMatches[a],!0];for(var b=["","Webkit","Moz","ms","O"],c=0,d=b.length;c<d;c++){var e;if(e=0===c?a:b[c]+a.replace(/^\w/,function(a){return a.toUpperCase()}),u.isString(y.State.prefixElement.style[e]))return y.State.prefixMatches[a]=e,[e,!0]}return[a,!1]}},Values:{hexToRgb:function(a){var b,c=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i;return a=a.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(a,b,c,d){return b+b+c+c+d+d}),b=c.exec(a),b?[parseInt(b[1],16),parseInt(b[2],16),parseInt(b[3],16)]:[0,0,0]},isCSSNullValue:function(a){return!a||/^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(a)},getUnitType:function(a){return/^(rotate|skew)/i.test(a)?"deg":/(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(a)?"":"px"},getDisplayType:function(a){var b=a&&a.tagName.toString().toLowerCase();return/^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(b)?"inline":/^(li)$/i.test(b)?"list-item":/^(tr)$/i.test(b)?"table-row":/^(table)$/i.test(b)?"table":/^(tbody)$/i.test(b)?"table-row-group":"block"},addClass:function(a,b){if(a)if(a.classList)a.classList.add(b);else if(u.isString(a.className))a.className+=(a.className.length?" ":"")+b;else{var c=a.getAttribute(p<=7?"className":"class")||"";a.setAttribute("class",c+(c?" ":"")+b)}},removeClass:function(a,b){if(a)if(a.classList)a.classList.remove(b);else if(u.isString(a.className))a.className=a.className.toString().replace(new RegExp("(^|\\s)"+b.split(" ").join("|")+"(\\s|$)","gi")," ");else{var c=a.getAttribute(p<=7?"className":"class")||"";a.setAttribute("class",c.replace(new RegExp("(^|s)"+b.split(" ").join("|")+"(s|$)","gi")," "))}}},getPropertyValue:function(a,c,e,f){function h(a,c){var e=0;if(p<=8)e=o.css(a,c);else{var i=!1;/^(width|height)$/.test(c)&&0===A.getPropertyValue(a,"display")&&(i=!0,A.setPropertyValue(a,"display",A.Values.getDisplayType(a)));var j=function(){i&&A.setPropertyValue(a,"display","none")};if(!f){if("height"===c&&"border-box"!==A.getPropertyValue(a,"boxSizing").toString().toLowerCase()){var k=a.offsetHeight-(parseFloat(A.getPropertyValue(a,"borderTopWidth"))||0)-(parseFloat(A.getPropertyValue(a,"borderBottomWidth"))||0)-(parseFloat(A.getPropertyValue(a,"paddingTop"))||0)-(parseFloat(A.getPropertyValue(a,"paddingBottom"))||0);return j(),k}if("width"===c&&"border-box"!==A.getPropertyValue(a,"boxSizing").toString().toLowerCase()){var l=a.offsetWidth-(parseFloat(A.getPropertyValue(a,"borderLeftWidth"))||0)-(parseFloat(A.getPropertyValue(a,"borderRightWidth"))||0)-(parseFloat(A.getPropertyValue(a,"paddingLeft"))||0)-(parseFloat(A.getPropertyValue(a,"paddingRight"))||0);return j(),l}}var m;m=g(a)===d?b.getComputedStyle(a,null):g(a).computedStyle?g(a).computedStyle:g(a).computedStyle=b.getComputedStyle(a,null),"borderColor"===c&&(c="borderTopColor"),e=9===p&&"filter"===c?m.getPropertyValue(c):m[c],""!==e&&null!==e||(e=a.style[c]),j()}if("auto"===e&&/^(top|right|bottom|left)$/i.test(c)){var n=h(a,"position");("fixed"===n||"absolute"===n&&/top|left/i.test(c))&&(e=o(a).position()[c]+"px")}return e}var i;if(A.Hooks.registered[c]){var j=c,k=A.Hooks.getRoot(j);e===d&&(e=A.getPropertyValue(a,A.Names.prefixCheck(k)[0])),A.Normalizations.registered[k]&&(e=A.Normalizations.registered[k]("extract",a,e)),i=A.Hooks.extractValue(j,e)}else if(A.Normalizations.registered[c]){var l,m;l=A.Normalizations.registered[c]("name",a),"transform"!==l&&(m=h(a,A.Names.prefixCheck(l)[0]),A.Values.isCSSNullValue(m)&&A.Hooks.templates[c]&&(m=A.Hooks.templates[c][1])),i=A.Normalizations.registered[c]("extract",a,m)}if(!/^[\d-]/.test(i)){var n=g(a);if(n&&n.isSVG&&A.Names.SVGAttribute(c))if(/^(height|width)$/i.test(c))try{i=a.getBBox()[c]}catch(q){i=0}else i=a.getAttribute(c);else i=h(a,A.Names.prefixCheck(c)[0])}return A.Values.isCSSNullValue(i)&&(i=0),y.debug>=2&&console.log("Get "+c+": "+i),i},setPropertyValue:function(a,c,d,e,f){var h=c;if("scroll"===c)f.container?f.container["scroll"+f.direction]=d:"Left"===f.direction?b.scrollTo(d,f.alternateValue):b.scrollTo(f.alternateValue,d);else if(A.Normalizations.registered[c]&&"transform"===A.Normalizations.registered[c]("name",a))A.Normalizations.registered[c]("inject",a,d),h="transform",d=g(a).transformCache[c];else{if(A.Hooks.registered[c]){var i=c,j=A.Hooks.getRoot(c);e=e||A.getPropertyValue(a,j),d=A.Hooks.injectValue(i,d,e),c=j}if(A.Normalizations.registered[c]&&(d=A.Normalizations.registered[c]("inject",a,d),c=A.Normalizations.registered[c]("name",a)),h=A.Names.prefixCheck(c)[0],p<=8)try{a.style[h]=d}catch(l){y.debug&&console.log("Browser does not support ["+d+"] for ["+h+"]")}else{var k=g(a);k&&k.isSVG&&A.Names.SVGAttribute(c)?a.setAttribute(c,d):a.style[h]=d}y.debug>=2&&console.log("Set "+c+" ("+h+"): "+d)}return[h,d]},flushTransformCache:function(a){var b="",c=g(a);if((p||y.State.isAndroid&&!y.State.isChrome)&&c&&c.isSVG){var d=function(b){return parseFloat(A.getPropertyValue(a,b))},e={translate:[d("translateX"),d("translateY")],skewX:[d("skewX")],skewY:[d("skewY")],scale:1!==d("scale")?[d("scale"),d("scale")]:[d("scaleX"),d("scaleY")],rotate:[d("rotateZ"),0,0]};o.each(g(a).transformCache,function(a){/^translate/i.test(a)?a="translate":/^scale/i.test(a)?a="scale":/^rotate/i.test(a)&&(a="rotate"),e[a]&&(b+=a+"("+e[a].join(" ")+") ",delete e[a])})}else{var f,h;o.each(g(a).transformCache,function(c){if(f=g(a).transformCache[c],"transformPerspective"===c)return h=f,!0;9===p&&"rotateZ"===c&&(c="rotate"),b+=c+f+" "}),h&&(b="perspective"+h+" "+b)}A.setPropertyValue(a,"transform",b)}};A.Hooks.register(),A.Normalizations.register(),y.hook=function(a,b,c){var e;return a=f(a),o.each(a,function(a,f){if(g(f)===d&&y.init(f),c===d)e===d&&(e=A.getPropertyValue(f,b));else{var h=A.setPropertyValue(f,b,c);"transform"===h[0]&&y.CSS.flushTransformCache(f),e=h}}),e};var B=function(){function a(){return k?z.promise||null:p}function e(a,e){function f(f){var k,n;if(i.begin&&0===D)try{i.begin.call(r,r)}catch(V){setTimeout(function(){throw V},1)}if("scroll"===G){var p,q,w,x=/^x$/i.test(i.axis)?"Left":"Top",B=parseFloat(i.offset)||0;i.container?u.isWrapped(i.container)||u.isNode(i.container)?(i.container=i.container[0]||i.container,p=i.container["scroll"+x],w=p+o(a).position()[x.toLowerCase()]+B):i.container=null:(p=y.State.scrollAnchor[y.State["scrollProperty"+x]],q=y.State.scrollAnchor[y.State["scrollProperty"+("Left"===x?"Top":"Left")]],w=o(a).offset()[x.toLowerCase()]+B),j={scroll:{rootPropertyValue:!1,startValue:p,currentValue:p,endValue:w,unitType:"",easing:i.easing,scrollData:{container:i.container,direction:x,alternateValue:q}},element:a},y.debug&&console.log("tweensContainer (scroll): ",j.scroll,a)}else if("reverse"===G){if(!(k=g(a)))return;if(!k.tweensContainer)return void o.dequeue(a,i.queue);"none"===k.opts.display&&(k.opts.display="auto"),"hidden"===k.opts.visibility&&(k.opts.visibility="visible"),k.opts.loop=!1,k.opts.begin=null,k.opts.complete=null,v.easing||delete i.easing,v.duration||delete i.duration,i=o.extend({},k.opts,i),n=o.extend(!0,{},k?k.tweensContainer:null);for(var E in n)if(n.hasOwnProperty(E)&&"element"!==E){var F=n[E].startValue;n[E].startValue=n[E].currentValue=n[E].endValue,n[E].endValue=F,u.isEmptyObject(v)||(n[E].easing=i.easing),y.debug&&console.log("reverse tweensContainer ("+E+"): "+JSON.stringify(n[E]),a)}j=n}else if("start"===G){k=g(a),k&&k.tweensContainer&&k.isAnimating===!0&&(n=k.tweensContainer);var H=function(e,f){var g,l=A.Hooks.getRoot(e),m=!1,p=f[0],q=f[1],r=f[2]
	;if(!(k&&k.isSVG||"tween"===l||A.Names.prefixCheck(l)[1]!==!1||A.Normalizations.registered[l]!==d))return void(y.debug&&console.log("Skipping ["+l+"] due to a lack of browser support."));(i.display!==d&&null!==i.display&&"none"!==i.display||i.visibility!==d&&"hidden"!==i.visibility)&&/opacity|filter/.test(e)&&!r&&0!==p&&(r=0),i._cacheValues&&n&&n[e]?(r===d&&(r=n[e].endValue+n[e].unitType),m=k.rootPropertyValueCache[l]):A.Hooks.registered[e]?r===d?(m=A.getPropertyValue(a,l),r=A.getPropertyValue(a,e,m)):m=A.Hooks.templates[l][1]:r===d&&(r=A.getPropertyValue(a,e));var s,t,v,w=!1,x=function(a,b){var c,d;return d=(b||"0").toString().toLowerCase().replace(/[%A-z]+$/,function(a){return c=a,""}),c||(c=A.Values.getUnitType(a)),[d,c]};if(r!==p&&u.isString(r)&&u.isString(p)){g="";var z=0,B=0,C=[],D=[],E=0,F=0,G=0;for(r=A.Hooks.fixColors(r),p=A.Hooks.fixColors(p);z<r.length&&B<p.length;){var H=r[z],I=p[B];if(/[\d\.-]/.test(H)&&/[\d\.-]/.test(I)){for(var J=H,K=I,L=".",N=".";++z<r.length;){if((H=r[z])===L)L="..";else if(!/\d/.test(H))break;J+=H}for(;++B<p.length;){if((I=p[B])===N)N="..";else if(!/\d/.test(I))break;K+=I}var O=A.Hooks.getUnit(r,z),P=A.Hooks.getUnit(p,B);if(z+=O.length,B+=P.length,O===P)J===K?g+=J+O:(g+="{"+C.length+(F?"!":"")+"}"+O,C.push(parseFloat(J)),D.push(parseFloat(K)));else{var Q=parseFloat(J),R=parseFloat(K);g+=(E<5?"calc":"")+"("+(Q?"{"+C.length+(F?"!":"")+"}":"0")+O+" + "+(R?"{"+(C.length+(Q?1:0))+(F?"!":"")+"}":"0")+P+")",Q&&(C.push(Q),D.push(0)),R&&(C.push(0),D.push(R))}}else{if(H!==I){E=0;break}g+=H,z++,B++,0===E&&"c"===H||1===E&&"a"===H||2===E&&"l"===H||3===E&&"c"===H||E>=4&&"("===H?E++:(E&&E<5||E>=4&&")"===H&&--E<5)&&(E=0),0===F&&"r"===H||1===F&&"g"===H||2===F&&"b"===H||3===F&&"a"===H||F>=3&&"("===H?(3===F&&"a"===H&&(G=1),F++):G&&","===H?++G>3&&(F=G=0):(G&&F<(G?5:4)||F>=(G?4:3)&&")"===H&&--F<(G?5:4))&&(F=G=0)}}z===r.length&&B===p.length||(y.debug&&console.error('Trying to pattern match mis-matched strings ["'+p+'", "'+r+'"]'),g=d),g&&(C.length?(y.debug&&console.log('Pattern found "'+g+'" -> ',C,D,"["+r+","+p+"]"),r=C,p=D,t=v=""):g=d)}g||(s=x(e,r),r=s[0],v=s[1],s=x(e,p),p=s[0].replace(/^([+-\/*])=/,function(a,b){return w=b,""}),t=s[1],r=parseFloat(r)||0,p=parseFloat(p)||0,"%"===t&&(/^(fontSize|lineHeight)$/.test(e)?(p/=100,t="em"):/^scale/.test(e)?(p/=100,t=""):/(Red|Green|Blue)$/i.test(e)&&(p=p/100*255,t="")));if(/[\/*]/.test(w))t=v;else if(v!==t&&0!==r)if(0===p)t=v;else{h=h||function(){var d={myParent:a.parentNode||c.body,position:A.getPropertyValue(a,"position"),fontSize:A.getPropertyValue(a,"fontSize")},e=d.position===M.lastPosition&&d.myParent===M.lastParent,f=d.fontSize===M.lastFontSize;M.lastParent=d.myParent,M.lastPosition=d.position,M.lastFontSize=d.fontSize;var g={};if(f&&e)g.emToPx=M.lastEmToPx,g.percentToPxWidth=M.lastPercentToPxWidth,g.percentToPxHeight=M.lastPercentToPxHeight;else{var h=k&&k.isSVG?c.createElementNS("http://www.w3.org/2000/svg","rect"):c.createElement("div");y.init(h),d.myParent.appendChild(h),o.each(["overflow","overflowX","overflowY"],function(a,b){y.CSS.setPropertyValue(h,b,"hidden")}),y.CSS.setPropertyValue(h,"position",d.position),y.CSS.setPropertyValue(h,"fontSize",d.fontSize),y.CSS.setPropertyValue(h,"boxSizing","content-box"),o.each(["minWidth","maxWidth","width","minHeight","maxHeight","height"],function(a,b){y.CSS.setPropertyValue(h,b,"100%")}),y.CSS.setPropertyValue(h,"paddingLeft","100em"),g.percentToPxWidth=M.lastPercentToPxWidth=(parseFloat(A.getPropertyValue(h,"width",null,!0))||1)/100,g.percentToPxHeight=M.lastPercentToPxHeight=(parseFloat(A.getPropertyValue(h,"height",null,!0))||1)/100,g.emToPx=M.lastEmToPx=(parseFloat(A.getPropertyValue(h,"paddingLeft"))||1)/100,d.myParent.removeChild(h)}return null===M.remToPx&&(M.remToPx=parseFloat(A.getPropertyValue(c.body,"fontSize"))||16),null===M.vwToPx&&(M.vwToPx=parseFloat(b.innerWidth)/100,M.vhToPx=parseFloat(b.innerHeight)/100),g.remToPx=M.remToPx,g.vwToPx=M.vwToPx,g.vhToPx=M.vhToPx,y.debug>=1&&console.log("Unit ratios: "+JSON.stringify(g),a),g}();var S=/margin|padding|left|right|width|text|word|letter/i.test(e)||/X$/.test(e)||"x"===e?"x":"y";switch(v){case"%":r*="x"===S?h.percentToPxWidth:h.percentToPxHeight;break;case"px":break;default:r*=h[v+"ToPx"]}switch(t){case"%":r*=1/("x"===S?h.percentToPxWidth:h.percentToPxHeight);break;case"px":break;default:r*=1/h[t+"ToPx"]}}switch(w){case"+":p=r+p;break;case"-":p=r-p;break;case"*":p*=r;break;case"/":p=r/p}j[e]={rootPropertyValue:m,startValue:r,currentValue:r,endValue:p,unitType:t,easing:q},g&&(j[e].pattern=g),y.debug&&console.log("tweensContainer ("+e+"): "+JSON.stringify(j[e]),a)};for(var I in s)if(s.hasOwnProperty(I)){var J=A.Names.camelCase(I),K=function(b,c){var d,f,g;return u.isFunction(b)&&(b=b.call(a,e,C)),u.isArray(b)?(d=b[0],!u.isArray(b[1])&&/^[\d-]/.test(b[1])||u.isFunction(b[1])||A.RegEx.isHex.test(b[1])?g=b[1]:u.isString(b[1])&&!A.RegEx.isHex.test(b[1])&&y.Easings[b[1]]||u.isArray(b[1])?(f=c?b[1]:l(b[1],i.duration),g=b[2]):g=b[1]||b[2]):d=b,c||(f=f||i.easing),u.isFunction(d)&&(d=d.call(a,e,C)),u.isFunction(g)&&(g=g.call(a,e,C)),[d||0,f,g]}(s[I]);if(t(A.Lists.colors,J)){var L=K[0],O=K[1],P=K[2];if(A.RegEx.isHex.test(L)){for(var Q=["Red","Green","Blue"],R=A.Values.hexToRgb(L),S=P?A.Values.hexToRgb(P):d,T=0;T<Q.length;T++){var U=[R[T]];O&&U.push(O),S!==d&&U.push(S[T]),H(J+Q[T],U)}continue}}H(J,K)}j.element=a}j.element&&(A.Values.addClass(a,"velocity-animating"),N.push(j),k=g(a),k&&(""===i.queue&&(k.tweensContainer=j,k.opts=i),k.isAnimating=!0),D===C-1?(y.State.calls.push([N,r,i,null,z.resolver,null,0]),y.State.isTicking===!1&&(y.State.isTicking=!0,m())):D++)}var h,i=o.extend({},y.defaults,v),j={};switch(g(a)===d&&y.init(a),parseFloat(i.delay)&&i.queue!==!1&&o.queue(a,i.queue,function(b){y.velocityQueueEntryFlag=!0;var c=y.State.delayedElements.count++;y.State.delayedElements[c]=a;var d=function(a){return function(){y.State.delayedElements[a]=!1,b()}}(c);g(a).delayBegin=(new Date).getTime(),g(a).delay=parseFloat(i.delay),g(a).delayTimer={setTimeout:setTimeout(b,parseFloat(i.delay)),next:d}}),i.duration.toString().toLowerCase()){case"fast":i.duration=200;break;case"normal":i.duration=w;break;case"slow":i.duration=600;break;default:i.duration=parseFloat(i.duration)||1}if(y.mock!==!1&&(y.mock===!0?i.duration=i.delay=1:(i.duration*=parseFloat(y.mock)||1,i.delay*=parseFloat(y.mock)||1)),i.easing=l(i.easing,i.duration),i.begin&&!u.isFunction(i.begin)&&(i.begin=null),i.progress&&!u.isFunction(i.progress)&&(i.progress=null),i.complete&&!u.isFunction(i.complete)&&(i.complete=null),i.display!==d&&null!==i.display&&(i.display=i.display.toString().toLowerCase(),"auto"===i.display&&(i.display=y.CSS.Values.getDisplayType(a))),i.visibility!==d&&null!==i.visibility&&(i.visibility=i.visibility.toString().toLowerCase()),i.mobileHA=i.mobileHA&&y.State.isMobile&&!y.State.isGingerbread,i.queue===!1)if(i.delay){var k=y.State.delayedElements.count++;y.State.delayedElements[k]=a;var n=function(a){return function(){y.State.delayedElements[a]=!1,f()}}(k);g(a).delayBegin=(new Date).getTime(),g(a).delay=parseFloat(i.delay),g(a).delayTimer={setTimeout:setTimeout(f,parseFloat(i.delay)),next:n}}else f();else o.queue(a,i.queue,function(a,b){if(b===!0)return z.promise&&z.resolver(r),!0;y.velocityQueueEntryFlag=!0,f(a)});""!==i.queue&&"fx"!==i.queue||"inprogress"===o.queue(a)[0]||o.dequeue(a)}var j,k,p,q,r,s,v,x=arguments[0]&&(arguments[0].p||o.isPlainObject(arguments[0].properties)&&!arguments[0].properties.names||u.isString(arguments[0].properties));u.isWrapped(this)?(k=!1,q=0,r=this,p=this):(k=!0,q=1,r=x?arguments[0].elements||arguments[0].e:arguments[0]);var z={promise:null,resolver:null,rejecter:null};if(k&&y.Promise&&(z.promise=new y.Promise(function(a,b){z.resolver=a,z.rejecter=b})),x?(s=arguments[0].properties||arguments[0].p,v=arguments[0].options||arguments[0].o):(s=arguments[q],v=arguments[q+1]),!(r=f(r)))return void(z.promise&&(s&&v&&v.promiseRejectEmpty===!1?z.resolver():z.rejecter()));var C=r.length,D=0;if(!/^(stop|finish|finishAll|pause|resume)$/i.test(s)&&!o.isPlainObject(v)){var E=q+1;v={};for(var F=E;F<arguments.length;F++)u.isArray(arguments[F])||!/^(fast|normal|slow)$/i.test(arguments[F])&&!/^\d/.test(arguments[F])?u.isString(arguments[F])||u.isArray(arguments[F])?v.easing=arguments[F]:u.isFunction(arguments[F])&&(v.complete=arguments[F]):v.duration=arguments[F]}var G;switch(s){case"scroll":G="scroll";break;case"reverse":G="reverse";break;case"pause":var H=(new Date).getTime();return o.each(r,function(a,b){h(b,H)}),o.each(y.State.calls,function(a,b){var c=!1;b&&o.each(b[1],function(a,e){var f=v===d?"":v;return f!==!0&&b[2].queue!==f&&(v!==d||b[2].queue!==!1)||(o.each(r,function(a,d){if(d===e)return b[5]={resume:!1},c=!0,!1}),!c&&void 0)})}),a();case"resume":return o.each(r,function(a,b){i(b,H)}),o.each(y.State.calls,function(a,b){var c=!1;b&&o.each(b[1],function(a,e){var f=v===d?"":v;return f!==!0&&b[2].queue!==f&&(v!==d||b[2].queue!==!1)||(!b[5]||(o.each(r,function(a,d){if(d===e)return b[5].resume=!0,c=!0,!1}),!c&&void 0))})}),a();case"finish":case"finishAll":case"stop":o.each(r,function(a,b){g(b)&&g(b).delayTimer&&(clearTimeout(g(b).delayTimer.setTimeout),g(b).delayTimer.next&&g(b).delayTimer.next(),delete g(b).delayTimer),"finishAll"!==s||v!==!0&&!u.isString(v)||(o.each(o.queue(b,u.isString(v)?v:""),function(a,b){u.isFunction(b)&&b()}),o.queue(b,u.isString(v)?v:"",[]))});var I=[];return o.each(y.State.calls,function(a,b){b&&o.each(b[1],function(c,e){var f=v===d?"":v;if(f!==!0&&b[2].queue!==f&&(v!==d||b[2].queue!==!1))return!0;o.each(r,function(c,d){if(d===e)if((v===!0||u.isString(v))&&(o.each(o.queue(d,u.isString(v)?v:""),function(a,b){u.isFunction(b)&&b(null,!0)}),o.queue(d,u.isString(v)?v:"",[])),"stop"===s){var h=g(d);h&&h.tweensContainer&&f!==!1&&o.each(h.tweensContainer,function(a,b){b.endValue=b.currentValue}),I.push(a)}else"finish"!==s&&"finishAll"!==s||(b[2].duration=1)})})}),"stop"===s&&(o.each(I,function(a,b){n(b,!0)}),z.promise&&z.resolver(r)),a();default:if(!o.isPlainObject(s)||u.isEmptyObject(s)){if(u.isString(s)&&y.Redirects[s]){j=o.extend({},v);var J=j.duration,K=j.delay||0;return j.backwards===!0&&(r=o.extend(!0,[],r).reverse()),o.each(r,function(a,b){parseFloat(j.stagger)?j.delay=K+parseFloat(j.stagger)*a:u.isFunction(j.stagger)&&(j.delay=K+j.stagger.call(b,a,C)),j.drag&&(j.duration=parseFloat(J)||(/^(callout|transition)/.test(s)?1e3:w),j.duration=Math.max(j.duration*(j.backwards?1-a/C:(a+1)/C),.75*j.duration,200)),y.Redirects[s].call(b,b,j||{},a,C,r,z.promise?z:d)}),a()}var L="Velocity: First argument ("+s+") was not a property map, a known action, or a registered redirect. Aborting.";return z.promise?z.rejecter(new Error(L)):b.console&&console.log(L),a()}G="start"}var M={lastParent:null,lastPosition:null,lastFontSize:null,lastPercentToPxWidth:null,lastPercentToPxHeight:null,lastEmToPx:null,remToPx:null,vwToPx:null,vhToPx:null},N=[];o.each(r,function(a,b){u.isNode(b)&&e(b,a)}),j=o.extend({},y.defaults,v),j.loop=parseInt(j.loop,10);var O=2*j.loop-1;if(j.loop)for(var P=0;P<O;P++){var Q={delay:j.delay,progress:j.progress};P===O-1&&(Q.display=j.display,Q.visibility=j.visibility,Q.complete=j.complete),B(r,"reverse",Q)}return a()};y=o.extend(B,y),y.animate=B;var C=b.requestAnimationFrame||q;if(!y.State.isMobile&&c.hidden!==d){var D=function(){c.hidden?(C=function(a){return setTimeout(function(){a(!0)},16)},m()):C=b.requestAnimationFrame||q};D(),c.addEventListener("visibilitychange",D)}return a.Velocity=y,a!==b&&(a.fn.velocity=B,a.fn.velocity.defaults=y.defaults),o.each(["Down","Up"],function(a,b){y.Redirects["slide"+b]=function(a,c,e,f,g,h){var i=o.extend({},c),j=i.begin,k=i.complete,l={},m={height:"",marginTop:"",marginBottom:"",paddingTop:"",paddingBottom:""};i.display===d&&(i.display="Down"===b?"inline"===y.CSS.Values.getDisplayType(a)?"inline-block":"block":"none"),i.begin=function(){0===e&&j&&j.call(g,g);for(var c in m)if(m.hasOwnProperty(c)){l[c]=a.style[c];var d=A.getPropertyValue(a,c);m[c]="Down"===b?[d,0]:[0,d]}l.overflow=a.style.overflow,a.style.overflow="hidden"},i.complete=function(){for(var b in l)l.hasOwnProperty(b)&&(a.style[b]=l[b]);e===f-1&&(k&&k.call(g,g),h&&h.resolver(g))},y(a,m,i)}}),o.each(["In","Out"],function(a,b){y.Redirects["fade"+b]=function(a,c,e,f,g,h){var i=o.extend({},c),j=i.complete,k={opacity:"In"===b?1:0};0!==e&&(i.begin=null),i.complete=e!==f-1?null:function(){j&&j.call(g,g),h&&h.resolver(g)},i.display===d&&(i.display="In"===b?"auto":"none"),y(this,k,i)}}),y}(window.jQuery||window.Zepto||window,window,window?window.document:undefined)});

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

	var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/* WEBPACK VAR INJECTION */(function(global) {/*!
	 * smooth-scroll v9.3.2: Animate scrolling to anchor links
	 * (c) 2016 Chris Ferdinandi
	 * MIT License
	 * http://github.com/cferdinandi/smooth-scroll
	 */

	(function (root, factory) {
	  if (true) {
	    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory(root)), __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ? (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__), __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	  } else if (typeof exports === 'object') {
	    module.exports = factory(root);
	  } else {
	    root.smoothScroll = factory(root);
	  }
	})(typeof global !== 'undefined' ? global : this.window || this.global, function (root) {

	  'use strict';

	  //
	  // Variables
	  //

	  var smoothScroll = {}; // Object for public APIs
	  var supports = 'querySelector' in document && 'addEventListener' in root; // Feature test
	  var settings, eventTimeout, fixedHeader, headerHeight, animationInterval;

	  // Default settings
	  var defaults = {
	    selector: '[data-scroll]',
	    selectorHeader: '[data-scroll-header]',
	    speed: 500,
	    easing: 'easeInOutCubic',
	    offset: 0,
	    updateURL: false,
	    callback: function () {
	      //console.log("test");
	    }
	  };


	  //
	  // Methods
	  //

	  /**
	   * Merge two or more objects. Returns a new object.
	   * @private
	   * @param {Boolean}  deep     If true, do a deep (or recursive) merge [optional]
	   * @param {Object}   objects  The objects to merge together
	   * @returns {Object}          Merged values of defaults and options
	   */
	  var extend = function () {

	    // Variables
	    var extended = {};
	    var deep = false;
	    var i = 0;
	    var length = arguments.length;

	    // Check if a deep merge
	    if (Object.prototype.toString.call(arguments[0]) === '[object Boolean]') {
	      deep = arguments[0];
	      i++;
	    }

	    // Merge the object into the extended object
	    var merge = function (obj) {
	      for (var prop in obj) {
	        if (Object.prototype.hasOwnProperty.call(obj, prop)) {
	          // If deep merge and property is an object, merge properties
	          if (deep && Object.prototype.toString.call(obj[prop]) === '[object Object]') {
	            extended[prop] = extend(true, extended[prop], obj[prop]);
	          } else {
	            extended[prop] = obj[prop];
	          }
	        }
	      }
	    };

	    // Loop through each object and conduct a merge
	    for (; i < length; i++) {
	      var obj = arguments[i];
	      merge(obj);
	    }

	    return extended;

	  };

	  /**
	   * Get the height of an element.
	   * @private
	   * @param  {Node} elem The element to get the height of
	   * @return {Number}    The element's height in pixels
	   */
	  var getHeight = function (elem) {
	    return Math.max(elem.scrollHeight, elem.offsetHeight, elem.clientHeight);
	  };

	  /**
	   * Get the closest matching element up the DOM tree.
	   * @private
	   * @param  {Element} elem     Starting element
	   * @param  {String}  selector Selector to match against (class, ID, data attribute, or tag)
	   * @return {Boolean|Element}  Returns null if not match found
	   */
	  var getClosest = function (elem, selector) {

	    // Variables
	    var firstChar = selector.charAt(0);
	    var supports = 'classList' in document.documentElement;
	    var attribute, value;

	    // If selector is a data attribute, split attribute from value
	    if (firstChar === '[') {
	      selector = selector.substr(1, selector.length - 2);
	      attribute = selector.split('=');

	      if (attribute.length > 1) {
	        value = true;
	        attribute[1] = attribute[1].replace(/"/g, '').replace(/'/g, '');
	      }
	    }

	    // Get closest match
	    for (; elem && elem !== document && elem.nodeType === 1; elem = elem.parentNode) {

	      // If selector is a class
	      if (firstChar === '.') {
	        if (supports) {
	          if (elem.classList.contains(selector.substr(1))) {
	            return elem;
	          }
	        } else {
	          if (new RegExp('(^|\\s)' + selector.substr(1) + '(\\s|$)').test(elem.className)) {
	            return elem;
	          }
	        }
	      }

	      // If selector is an ID
	      if (firstChar === '#') {
	        if (elem.id === selector.substr(1)) {
	          return elem;
	        }
	      }

	      // If selector is a data attribute
	      if (firstChar === '[') {
	        if (elem.hasAttribute(attribute[0])) {
	          if (value) {
	            if (elem.getAttribute(attribute[0]) === attribute[1]) {
	              return elem;
	            }
	          } else {
	            return elem;
	          }
	        }
	      }

	      // If selector is a tag
	      if (elem.tagName.toLowerCase() === selector) {
	        return elem;
	      }

	    }

	    return null;

	  };

	  /**
	   * Escape special characters for use with querySelector
	   * @public
	   * @param {String} id The anchor ID to escape
	   * @author Mathias Bynens
	   * @link https://github.com/mathiasbynens/CSS.escape
	   */
	  smoothScroll.escapeCharacters = function (id) {

	    // Remove leading hash
	    if (id.charAt(0) === '#') {
	      id = id.substr(1);
	    }

	    var string = String(id);
	    var length = string.length;
	    var index = -1;
	    var codeUnit;
	    var result = '';
	    var firstCodeUnit = string.charCodeAt(0);
	    while (++index < length) {
	      codeUnit = string.charCodeAt(index);
	      // Note: there’s no need to special-case astral symbols, surrogate
	      // pairs, or lone surrogates.

	      // If the character is NULL (U+0000), then throw an
	      // `InvalidCharacterError` exception and terminate these steps.
	      if (codeUnit === 0x0000) {
	        throw new InvalidCharacterError(
	          'Invalid character: the input contains U+0000.'
	        );
	      }

	      if (
	        // If the character is in the range [\1-\1F] (U+0001 to U+001F) or is
	        // U+007F, […]
	        (codeUnit >= 0x0001 && codeUnit <= 0x001F) || codeUnit == 0x007F ||
	        // If the character is the first character and is in the range [0-9]
	        // (U+0030 to U+0039), […]
	        (index === 0 && codeUnit >= 0x0030 && codeUnit <= 0x0039) ||
	        // If the character is the second character and is in the range [0-9]
	        // (U+0030 to U+0039) and the first character is a `-` (U+002D), […]
	        (
	          index === 1 &&
	          codeUnit >= 0x0030 && codeUnit <= 0x0039 &&
	          firstCodeUnit === 0x002D
	        )
	      ) {
	        // http://dev.w3.org/csswg/cssom/#escape-a-character-as-code-point
	        result += '\\' + codeUnit.toString(16) + ' ';
	        continue;
	      }

	      // If the character is not handled by one of the above rules and is
	      // greater than or equal to U+0080, is `-` (U+002D) or `_` (U+005F), or
	      // is in one of the ranges [0-9] (U+0030 to U+0039), [A-Z] (U+0041 to
	      // U+005A), or [a-z] (U+0061 to U+007A), […]
	      if (
	        codeUnit >= 0x0080 ||
	        codeUnit === 0x002D ||
	        codeUnit === 0x005F ||
	        codeUnit >= 0x0030 && codeUnit <= 0x0039 ||
	        codeUnit >= 0x0041 && codeUnit <= 0x005A ||
	        codeUnit >= 0x0061 && codeUnit <= 0x007A
	      ) {
	        // the character itself
	        result += string.charAt(index);
	        continue;
	      }

	      // Otherwise, the escaped character.
	      // http://dev.w3.org/csswg/cssom/#escape-a-character
	      result += '\\' + string.charAt(index);

	    }

	    return '#' + result;

	  };

	  /**
	   * Calculate the easing pattern
	   * @private
	   * @link https://gist.github.com/gre/1650294
	   * @param {String} type Easing pattern
	   * @param {Number} time Time animation should take to complete
	   * @returns {Number}
	   */
	  var easingPattern = function (type, time) {
	    var pattern;
	    if (type === 'easeInQuad') pattern = time * time; // accelerating from zero velocity
	    if (type === 'easeOutQuad') pattern = time * (2 - time); // decelerating to zero velocity
	    if (type === 'easeInOutQuad') pattern = time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time; // acceleration until halfway, then deceleration
	    if (type === 'easeInCubic') pattern = time * time * time; // accelerating from zero velocity
	    if (type === 'easeOutCubic') pattern = (--time) * time * time + 1; // decelerating to zero velocity
	    if (type === 'easeInOutCubic') pattern = time < 0.5 ? 4 * time * time * time : (time - 1) * (2 * time - 2) * (2 * time - 2) + 1; // acceleration until halfway, then deceleration
	    if (type === 'easeInQuart') pattern = time * time * time * time; // accelerating from zero velocity
	    if (type === 'easeOutQuart') pattern = 1 - (--time) * time * time * time; // decelerating to zero velocity
	    if (type === 'easeInOutQuart') pattern = time < 0.5 ? 8 * time * time * time * time : 1 - 8 * (--time) * time * time * time; // acceleration until halfway, then deceleration
	    if (type === 'easeInQuint') pattern = time * time * time * time * time; // accelerating from zero velocity
	    if (type === 'easeOutQuint') pattern = 1 + (--time) * time * time * time * time; // decelerating to zero velocity
	    if (type === 'easeInOutQuint') pattern = time < 0.5 ? 16 * time * time * time * time * time : 1 + 16 * (--time) * time * time * time * time; // acceleration until halfway, then deceleration
	    return pattern || time; // no easing, no acceleration
	  };

	  /**
	   * Calculate how far to scroll
	   * @private
	   * @param {Element} anchor The anchor element to scroll to
	   * @param {Number} headerHeight Height of a fixed header, if any
	   * @param {Number} offset Number of pixels by which to offset scroll
	   * @returns {Number}
	   */
	  var getEndLocation = function (anchor, headerHeight, offset) {
	    var location = 0;
	    if (anchor.offsetParent) {
	      do {
	        location += anchor.offsetTop;
	        anchor = anchor.offsetParent;
	      } while (anchor);
	    }
	    location = Math.max(location - headerHeight - offset, 0);
	    return Math.min(location, getDocumentHeight() - getViewportHeight());
	  };

	  /**
	   * Determine the viewport's height
	   * @private
	   * @returns {Number}
	   */
	  var getViewportHeight = function () {
	    return Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
	  };

	  /**
	   * Determine the document's height
	   * @private
	   * @returns {Number}
	   */
	  var getDocumentHeight = function () {
	    return Math.max(
	      root.document.body.scrollHeight, root.document.documentElement.scrollHeight,
	      root.document.body.offsetHeight, root.document.documentElement.offsetHeight,
	      root.document.body.clientHeight, root.document.documentElement.clientHeight
	    );
	  };

	  /**
	   * Convert data-options attribute into an object of key/value pairs
	   * @private
	   * @param {String} options Link-specific options as a data attribute string
	   * @returns {Object}
	   */
	  var getDataOptions = function (options) {
	    return !options || !(typeof JSON === 'object' && typeof JSON.parse === 'function') ? {} : JSON.parse(options);
	  };

	  /**
	   * Update the URL
	   * @private
	   * @param {Element} anchor The element to scroll to
	   * @param {Boolean} url Whether or not to update the URL history
	   */
	  var updateUrl = function (anchor, url) {
	    if (root.history.pushState && (url || url === 'true') && root.location.protocol !== 'file:') {
	      root.history.pushState(null, null, [root.location.protocol, '//', root.location.host, root.location.pathname, root.location.search, anchor].join(''));
	    }
	  };

	  var getHeaderHeight = function (header) {
	    return header === null ? 0 : (getHeight(header) + header.offsetTop);
	  };

	  /**
	   * Start/stop the scrolling animation
	   * @public
	   * @param {Element} anchor The element to scroll to
	   * @param {Element} toggle The element that toggled the scroll event
	   * @param {Object} options
	   */
	  smoothScroll.animateScroll = function (anchor, toggle, options) {

	    // Options and overrides
	    var overrides = getDataOptions(toggle ? toggle.getAttribute('data-options') : null);
	    var animateSettings = extend(settings || defaults, options || {}, overrides); // Merge user options with defaults

	    // Selectors and variables
	    var isNum = Object.prototype.toString.call(anchor) === '[object Number]' ? true : false;
	    var hash = smoothScroll.escapeCharacters(anchor);
	    var anchorElem = isNum ? null : (hash === '#' ? root.document.documentElement : root.document.querySelector(hash));
	    if (!isNum && !anchorElem) return;
	    var startLocation = root.pageYOffset; // Current location on the page
	    if (!fixedHeader) {
	      fixedHeader = root.document.querySelector(animateSettings.selectorHeader);
	    } // Get the fixed header if not already set
	    if (!headerHeight) {
	      headerHeight = getHeaderHeight(fixedHeader);
	    } // Get the height of a fixed header if one exists and not already set
	    var endLocation = isNum ? anchor : getEndLocation(anchorElem, headerHeight, parseInt(animateSettings.offset, 10)); // Location to scroll to
	    var distance = endLocation - startLocation; // distance to travel
	    var documentHeight = getDocumentHeight();
	    var timeLapsed = 0;
	    var percentage, position;

	    // Update URL
	    if (!isNum) {
	      updateUrl(anchor, animateSettings.updateURL);
	    }

	    /**
	     * Stop the scroll animation when it reaches its target (or the bottom/top of page)
	     * @private
	     * @param {Number} position Current position on the page
	     * @param {Number} endLocation Scroll to location
	     * @param {Number} animationInterval How much to scroll on this loop
	     */
	    var stopAnimateScroll = function (position, endLocation, animationInterval) {
	      var currentLocation = root.pageYOffset;
	      if (position == endLocation || currentLocation == endLocation || ((root.innerHeight + currentLocation) >=

	          documentHeight)) {
	        clearInterval(animationInterval);

	        // If scroll target is an anchor, bring it into focus
	        if (!isNum) {
	          anchorElem.focus();
	          if (document.activeElement.id !== anchorElem.id) {
	            anchorElem.setAttribute('tabindex', '-1');
	            anchorElem.focus();
	            anchorElem.style.outline = 'none';
	          }
	        }
	        animateSettings.callback(anchor, toggle); // Run callbacks after animation complete
	      }
	    };

	    /**
	     * Loop scrolling animation
	     * @private
	     */
	    var loopAnimateScroll = function () {
	      timeLapsed += 16;
	      percentage = (timeLapsed / parseInt(animateSettings.speed, 10));
	      percentage = (percentage > 1) ? 1 : percentage;
	      position = startLocation + (distance * easingPattern(animateSettings.easing, percentage));
	      root.scrollTo(0, Math.floor(position));
	      stopAnimateScroll(position, endLocation, animationInterval);
	    };

	    /**
	     * Set interval timer
	     * @private
	     */
	    var startAnimateScroll = function () {
	      clearInterval(animationInterval);
	      animationInterval = setInterval(loopAnimateScroll, 16);
	    };

	    /**
	     * Reset position to fix weird iOS bug
	     * @link https://github.com/cferdinandi/smooth-scroll/issues/45
	     */
	    if (root.pageYOffset === 0) {
	      root.scrollTo(0, 0);
	    }

	    // Start scrolling animation
	    startAnimateScroll();

	  };

	  /**
	   * If smooth scroll element clicked, animate scroll
	   * @private
	   */
	  var eventHandler = function (event) {

	    // Don't run if right-click or command/control + click
	    if (event.button !== 0 || event.metaKey || event.ctrlKey) return;

	    // If a smooth scroll link, animate it
	    var toggle = getClosest(event.target, settings.selector);
	    if (toggle && toggle.tagName.toLowerCase() === 'a') {

	      // Check that link is an anchor and points to current page
	      if (toggle.origin !== location.origin || toggle.pathname !== location.pathname || !/#/.test(toggle.href)) return;

	      event.preventDefault(); // Prevent default click event
	      smoothScroll.animateScroll(toggle.hash, toggle, settings); // Animate scroll

	    }

	  };

	  /**
	   * On window scroll and resize, only run events at a rate of 15fps for better performance
	   * @private
	   * @param  {Function} eventTimeout Timeout function
	   * @param  {Object} settings
	   */
	  var eventThrottler = function (event) {
	    if (!eventTimeout) {
	      eventTimeout = setTimeout(function () {
	        eventTimeout = null; // Reset timeout
	        headerHeight = getHeaderHeight(fixedHeader); // Get the height of a fixed header if one exists
	      }, 66);
	    }
	  };

	  /**
	   * Destroy the current initialization.
	   * @public
	   */
	  smoothScroll.destroy = function () {

	    // If plugin isn't already initialized, stop
	    if (!settings) return;

	    // Remove event listeners
	    root.document.removeEventListener('click', eventHandler, false);
	    root.removeEventListener('resize', eventThrottler, false);

	    // Reset varaibles
	    settings = null;
	    eventTimeout = null;
	    fixedHeader = null;
	    headerHeight = null;
	    animationInterval = null;
	  };

	  /**
	   * Initialize Smooth Scroll
	   * @public
	   * @param {Object} options User settings
	   */
	  smoothScroll.init = function (options) {

	    // feature test
	    if (!supports) return;

	    // Destroy any existing initializations
	    smoothScroll.destroy();

	    // Selectors and variables
	    settings = extend(defaults, options || {}); // Merge user options with defaults
	    fixedHeader = root.document.querySelector(settings.selectorHeader); // Get the fixed header
	    headerHeight = getHeaderHeight(fixedHeader);

	    // When a toggle is clicked, run the click handler
	    root.document.addEventListener('click', eventHandler, false);
	    if (fixedHeader) {
	      root.addEventListener('resize', eventThrottler, false);
	    }

	  };


	  //
	  // Public APIs
	  //

	  return smoothScroll;

	});
	/* WEBPACK VAR INJECTION */}.call(exports, (function() { return this; }())))

/***/ }),
/* 8 */
/***/ (function(module, exports) {

	/*!
	*  - v1.2.2
	* Homepage: http://bqworks.com/slider-pro/
	* Author: bqworks
	* Author URL: http://bqworks.com/
	*/
	!function(a,b){"use strict";b.SliderPro={modules:[],addModule:function(a,c){this.modules.push(a),b.extend(d.prototype,c)}};var c=b.SliderPro.namespace="SliderPro",d=function(a,c){this.instance=a,this.$slider=b(this.instance),this.$slides=null,this.$slidesMask=null,this.$slidesContainer=null,this.slides=[],this.slidesOrder=[],this.options=c,this.settings={},this.originalSettings={},this.originalGotoSlide=null,this.selectedSlideIndex=0,this.previousSlideIndex=0,this.middleSlidePosition=0,this.supportedAnimation=null,this.vendorPrefix=null,this.transitionEvent=null,this.positionProperty=null,this.isIE=null,this.slidesPosition=0,this.slideWidth=0,this.slideHeight=0,this.slideSize=0,this.previousSlideWidth=0,this.previousSlideHeight=0,this.previousWindowWidth=0,this.previousWindowHeight=0,this.visibleOffset=0,this.allowResize=!0,this.uniqueId=(new Date).valueOf(),this.breakpoints=[],this.currentBreakpoint=-1,this.shuffledIndexes=[],this._init()};d.prototype={_init:function(){var d=this;this.supportedAnimation=f.getSupportedAnimation(),this.vendorPrefix=f.getVendorPrefix(),this.transitionEvent=f.getTransitionEvent(),this.isIE=f.checkIE(),this.$slider.removeClass("sp-no-js"),a.navigator.userAgent.match(/(iPad|iPhone|iPod)/g)&&this.$slider.addClass("ios");var e=/(msie) ([\w.]+)/,g=e.exec(a.navigator.userAgent.toLowerCase());this.isIE&&this.$slider.addClass("ie"),null!==g&&this.$slider.addClass("ie"+parseInt(g[2],10)),this.$slidesContainer=b('<div class="sp-slides-container"></div>').appendTo(this.$slider),this.$slidesMask=b('<div class="sp-mask"></div>').appendTo(this.$slidesContainer),this.$slides=this.$slider.find(".sp-slides").appendTo(this.$slidesMask),this.$slider.find(".sp-slide").appendTo(this.$slides);var h=b.SliderPro.modules;if("undefined"!=typeof h)for(var i=0;i<h.length;i++){var j=h[i].substring(0,1).toLowerCase()+h[i].substring(1)+"Defaults";"undefined"!=typeof this[j]&&b.extend(this.defaults,this[j])}if(this.settings=b.extend({},this.defaults,this.options),"undefined"!=typeof h)for(var k=0;k<h.length;k++)"undefined"!=typeof this["init"+h[k]]&&this["init"+h[k]]();if(this.originalSettings=b.extend({},this.settings),this.originalGotoSlide=this.gotoSlide,null!==this.settings.breakpoints){for(var l in this.settings.breakpoints)this.breakpoints.push({size:parseInt(l,10),properties:this.settings.breakpoints[l]});this.breakpoints=this.breakpoints.sort(function(a,b){return a.size>=b.size?1:-1})}if(this.selectedSlideIndex=this.settings.startSlide,this.settings.shuffle===!0){var m=this.$slides.find(".sp-slide"),n=[];m.each(function(a){d.shuffledIndexes.push(a)});for(var o=this.shuffledIndexes.length-1;o>0;o--){var p=Math.floor(Math.random()*(o+1)),q=this.shuffledIndexes[o];this.shuffledIndexes[o]=this.shuffledIndexes[p],this.shuffledIndexes[p]=q}b.each(this.shuffledIndexes,function(a,b){n.push(m[b])}),this.$slides.empty().append(n)}b(a).on("resize."+this.uniqueId+"."+c,function(){var c=b(a).width(),e=b(a).height();d.allowResize===!1||d.previousWindowWidth===c&&d.previousWindowHeight===e||(d.previousWindowWidth=c,d.previousWindowHeight=e,d.allowResize=!1,setTimeout(function(){d.resize(),d.allowResize=!0},200))}),this.on("update."+c,function(){d.previousSlideWidth=0,d.resize()}),this.update(),this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).addClass("sp-selected"),this.trigger({type:"init"}),b.isFunction(this.settings.init)&&this.settings.init.call(this,{type:"init"})},update:function(){var a=this;"horizontal"===this.settings.orientation?(this.$slider.removeClass("sp-vertical").addClass("sp-horizontal"),this.$slider.css({height:"","max-height":""}),this.$slides.find(".sp-slide").css("top","")):"vertical"===this.settings.orientation&&(this.$slider.removeClass("sp-horizontal").addClass("sp-vertical"),this.$slides.find(".sp-slide").css("left","")),this.positionProperty="horizontal"===this.settings.orientation?"left":"top",this.gotoSlide=this.originalGotoSlide;for(var c=this.slides.length-1;c>=0;c--)if(0===this.$slider.find('.sp-slide[data-index="'+c+'"]').length){var d=this.slides[c];d.destroy(),this.slides.splice(c,1)}this.slidesOrder.length=0,this.$slider.find(".sp-slide").each(function(c){var d=b(this);"undefined"==typeof d.attr("data-init")?a._createSlide(c,d):a.slides[c].setIndex(c),a.slidesOrder.push(c)}),this.middleSlidePosition=parseInt((a.slidesOrder.length-1)/2,10),this.settings.loop===!0&&this._updateSlidesOrder(),this.trigger({type:"update"}),b.isFunction(this.settings.update)&&this.settings.update.call(this,{type:"update"})},_createSlide:function(a,c){var d=new e(b(c),a,this.settings);this.slides.splice(a,0,d)},_updateSlidesOrder:function(){var a,c,d=b.inArray(this.selectedSlideIndex,this.slidesOrder)-this.middleSlidePosition;if(0>d)for(a=this.slidesOrder.splice(d,Math.abs(d)),c=a.length-1;c>=0;c--)this.slidesOrder.unshift(a[c]);else if(d>0)for(a=this.slidesOrder.splice(0,d),c=0;c<=a.length-1;c++)this.slidesOrder.push(a[c])},_updateSlidesPosition:function(){for(var a=parseInt(this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).css(this.positionProperty),10),b=0;b<this.slidesOrder.length;b++){var c=this.$slides.find(".sp-slide").eq(this.slidesOrder[b]);c.css(this.positionProperty,a+(b-this.middleSlidePosition)*(this.slideSize+this.settings.slideDistance))}},_resetSlidesPosition:function(){for(var a=0;a<this.slidesOrder.length;a++){var b=this.$slides.find(".sp-slide").eq(this.slidesOrder[a]);b.css(this.positionProperty,a*(this.slideSize+this.settings.slideDistance))}var c=-parseInt(this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).css(this.positionProperty),10)+this.visibleOffset;this._moveTo(c,!0)},resize:function(){var c=this;if(null!==this.settings.breakpoints&&this.breakpoints.length>0)if(b(a).width()>this.breakpoints[this.breakpoints.length-1].size&&-1!==this.currentBreakpoint)this.currentBreakpoint=-1,this._setProperties(this.originalSettings,!1);else for(var d=0,e=this.breakpoints.length;e>d;d++)if(b(a).width()<=this.breakpoints[d].size){if(this.currentBreakpoint!==this.breakpoints[d].size){var f={type:"breakpointReach",size:this.breakpoints[d].size,settings:this.breakpoints[d].properties};this.trigger(f),b.isFunction(this.settings.breakpointReach)&&this.settings.breakpointReach.call(this,f),this.currentBreakpoint=this.breakpoints[d].size;var g=b.extend({},this.originalSettings,this.breakpoints[d].properties);return void this._setProperties(g,!1)}break}this.settings.responsive===!0?"fullWidth"!==this.settings.forceSize&&"fullWindow"!==this.settings.forceSize||"auto"!==this.settings.visibleSize&&("auto"===this.settings.visibleSize||"vertical"!==this.settings.orientation)?this.$slider.css({width:"100%","max-width":this.settings.width,marginLeft:""}):(this.$slider.css("margin",0),this.$slider.css({width:b(a).width(),"max-width":"",marginLeft:-this.$slider.offset().left})):this.$slider.css({width:this.settings.width}),-1===this.settings.aspectRatio&&(this.settings.aspectRatio=this.settings.width/this.settings.height),this.slideWidth=this.$slider.width(),this.slideHeight="fullWindow"===this.settings.forceSize?b(a).height():isNaN(this.settings.aspectRatio)?this.settings.height:this.slideWidth/this.settings.aspectRatio,(this.previousSlideWidth!==this.slideWidth||this.previousSlideHeight!==this.slideHeight||"auto"!==this.settings.visibleSize||this.$slider.outerWidth()>this.$slider.parent().width()||this.$slider.width()!==this.$slidesMask.width())&&(this.previousSlideWidth=this.slideWidth,this.previousSlideHeight=this.slideHeight,this.slideSize="horizontal"===this.settings.orientation?this.slideWidth:this.slideHeight,this.visibleSlidesSize=this.slideSize,this.visibleOffset=0,b.each(this.slides,function(a,b){b.setSize(c.slideWidth,c.slideHeight)}),this.$slidesMask.css({width:this.slideWidth,height:this.slideHeight}),this.settings.autoHeight===!0?setTimeout(function(){c._resizeHeight()},1):this.$slidesMask.css(this.vendorPrefix+"transition",""),"auto"!==this.settings.visibleSize&&("horizontal"===this.settings.orientation?("fullWidth"===this.settings.forceSize||"fullWindow"===this.settings.forceSize?(this.$slider.css("margin",0),this.$slider.css({width:b(a).width(),"max-width":"",marginLeft:-this.$slider.offset().left})):this.$slider.css({width:this.settings.visibleSize,"max-width":"100%",marginLeft:0}),this.$slidesMask.css("width",this.$slider.width()),this.visibleSlidesSize=this.$slidesMask.width(),this.visibleOffset=Math.round((this.$slider.width()-this.slideWidth)/2)):(this.$slider.css("fullWindow"===this.settings.forceSize?{height:b(a).height(),"max-height":""}:{height:this.settings.visibleSize,"max-height":"100%"}),this.$slidesMask.css("height",this.$slider.height()),this.visibleSlidesSize=this.$slidesMask.height(),this.visibleOffset=Math.round((this.$slider.height()-this.slideHeight)/2))),this._resetSlidesPosition(),this.trigger({type:"sliderResize"}),b.isFunction(this.settings.sliderResize)&&this.settings.sliderResize.call(this,{type:"sliderResize"}))},_resizeHeight:function(){var a=this,b=this.getSlideAt(this.selectedSlideIndex),d=b.getSize();b.off("imagesLoaded."+c),b.on("imagesLoaded."+c,function(c){if(c.index===a.selectedSlideIndex){var d=b.getSize();a._resizeHeightTo(d.height)}}),"loading"!==d&&this._resizeHeightTo(d.height)},gotoSlide:function(a){if(a!==this.selectedSlideIndex&&"undefined"!=typeof this.slides[a]){var c=this;this.previousSlideIndex=this.selectedSlideIndex,this.selectedSlideIndex=a,this.$slides.find(".sp-selected").removeClass("sp-selected"),this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).addClass("sp-selected"),this.settings.loop===!0&&(this._updateSlidesOrder(),this._updateSlidesPosition()),this.settings.autoHeight===!0&&this._resizeHeight();var d=-parseInt(this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).css(this.positionProperty),10)+this.visibleOffset;this._moveTo(d,!1,function(){c.settings.loop===!0&&c._resetSlidesPosition(),c.trigger({type:"gotoSlideComplete",index:a,previousIndex:c.previousSlideIndex}),b.isFunction(c.settings.gotoSlideComplete)&&c.settings.gotoSlideComplete.call(c,{type:"gotoSlideComplete",index:a,previousIndex:c.previousSlideIndex})}),this.trigger({type:"gotoSlide",index:a,previousIndex:this.previousSlideIndex}),b.isFunction(this.settings.gotoSlide)&&this.settings.gotoSlide.call(this,{type:"gotoSlide",index:a,previousIndex:this.previousSlideIndex})}},nextSlide:function(){var a=this.selectedSlideIndex>=this.getTotalSlides()-1?0:this.selectedSlideIndex+1;this.gotoSlide(a)},previousSlide:function(){var a=this.selectedSlideIndex<=0?this.getTotalSlides()-1:this.selectedSlideIndex-1;this.gotoSlide(a)},_moveTo:function(a,b,c){var d=this,e={};if(a!==this.slidesPosition)if(this.slidesPosition=a,"css-3d"!==this.supportedAnimation&&"css-2d"!==this.supportedAnimation||this.isIE!==!1)e["margin-"+this.positionProperty]=a,"undefined"!=typeof b&&b===!0?this.$slides.css(e):(this.$slides.addClass("sp-animated"),this.$slides.animate(e,this.settings.slideAnimationDuration,function(){d.$slides.removeClass("sp-animated"),"function"==typeof c&&c()}));else{var f,g="horizontal"===this.settings.orientation?a:0,h="horizontal"===this.settings.orientation?0:a;e[this.vendorPrefix+"transform"]="css-3d"===this.supportedAnimation?"translate3d("+g+"px, "+h+"px, 0)":"translate("+g+"px, "+h+"px)","undefined"!=typeof b&&b===!0?f="":(this.$slides.addClass("sp-animated"),f=this.vendorPrefix+"transform "+this.settings.slideAnimationDuration/1e3+"s",this.$slides.on(this.transitionEvent,function(a){a.target===a.currentTarget&&(d.$slides.off(d.transitionEvent),d.$slides.removeClass("sp-animated"),"function"==typeof c&&c())})),e[this.vendorPrefix+"transition"]=f,this.$slides.css(e)}},_stopMovement:function(){var a={};if("css-3d"!==this.supportedAnimation&&"css-2d"!==this.supportedAnimation||this.isIE!==!1)this.$slides.stop(),this.slidesPosition=parseInt(this.$slides.css("margin-"+this.positionProperty),10);else{var b=this.$slides.css(this.vendorPrefix+"transform"),c=-1!==b.indexOf("matrix3d")?"matrix3d":"matrix",d=b.replace(c,"").match(/-?[0-9\.]+/g),e="matrix3d"===c?parseInt(d[12],10):parseInt(d[4],10),f="matrix3d"===c?parseInt(d[13],10):parseInt(d[5],10);a[this.vendorPrefix+"transform"]="css-3d"===this.supportedAnimation?"translate3d("+e+"px, "+f+"px, 0)":"translate("+e+"px, "+f+"px)",a[this.vendorPrefix+"transition"]="",this.$slides.css(a),this.$slides.off(this.transitionEvent),this.slidesPosition="horizontal"===this.settings.orientation?e:f}this.$slides.removeClass("sp-animated")},_resizeHeightTo:function(a){var c=this,d={height:a};"css-3d"===this.supportedAnimation||"css-2d"===this.supportedAnimation?(d[this.vendorPrefix+"transition"]="height "+this.settings.heightAnimationDuration/1e3+"s",this.$slidesMask.off(this.transitionEvent),this.$slidesMask.on(this.transitionEvent,function(a){a.target===a.currentTarget&&(c.$slidesMask.off(c.transitionEvent),c.trigger({type:"resizeHeightComplete"}),b.isFunction(c.settings.resizeHeightComplete)&&c.settings.resizeHeightComplete.call(c,{type:"resizeHeightComplete"}))}),this.$slidesMask.css(d)):this.$slidesMask.stop().animate(d,this.settings.heightAnimationDuration,function(){c.trigger({type:"resizeHeightComplete"}),b.isFunction(c.settings.resizeHeightComplete)&&c.settings.resizeHeightComplete.call(c,{type:"resizeHeightComplete"})})},destroy:function(){this.$slider.removeData("sliderPro"),this.$slider.removeAttr("style"),this.$slides.removeAttr("style"),this.off("update."+c),b(a).off("resize."+this.uniqueId+"."+c);var d=b.SliderPro.modules;if("undefined"!=typeof d)for(var e=0;e<d.length;e++)"undefined"!=typeof this["destroy"+d[e]]&&this["destroy"+d[e]]();b.each(this.slides,function(a,b){b.destroy()}),this.slides.length=0,this.$slides.prependTo(this.$slider),this.$slidesContainer.remove()},_setProperties:function(a,b){for(var c in a)this.settings[c]=a[c],b!==!1&&(this.originalSettings[c]=a[c]);this.update()},on:function(a,b){return this.$slider.on(a,b)},off:function(a){return this.$slider.off(a)},trigger:function(a){return this.$slider.triggerHandler(a)},getSlideAt:function(a){return this.slides[a]},getSelectedSlide:function(){return this.selectedSlideIndex},getTotalSlides:function(){return this.slides.length},defaults:{width:500,height:300,responsive:!0,aspectRatio:-1,imageScaleMode:"cover",centerImage:!0,allowScaleUp:!0,autoHeight:!1,startSlide:0,shuffle:!1,orientation:"horizontal",forceSize:"none",loop:!0,slideDistance:10,slideAnimationDuration:700,heightAnimationDuration:700,visibleSize:"auto",breakpoints:null,init:function(){},update:function(){},sliderResize:function(){},gotoSlide:function(){},gotoSlideComplete:function(){},resizeHeightComplete:function(){},breakpointReach:function(){}}};var e=function(a,b,c){this.$slide=a,this.$mainImage=null,this.$imageContainer=null,this.hasMainImage=!1,this.isMainImageLoaded=!1,this.isMainImageLoading=!1,this.hasImages=!1,this.areImagesLoaded=!1,this.width=0,this.height=0,this.settings=c,this.setIndex(b),this._init()};e.prototype={_init:function(){this.$slide.attr("data-init",!0),this.$mainImage=0!==this.$slide.find(".sp-image").length?this.$slide.find(".sp-image"):null,null!==this.$mainImage&&(this.hasMainImage=!0,this.$imageContainer=b('<div class="sp-image-container"></div>').prependTo(this.$slide),0!==this.$mainImage.parent("a").length?this.$mainImage.parent("a").appendTo(this.$imageContainer):this.$mainImage.appendTo(this.$imageContainer)),this.hasImages=0!==this.$slide.find("img").length?!0:!1},setSize:function(a,b){this.width=a,this.height=this.settings.autoHeight===!0?"auto":b,this.$slide.css({width:this.width,height:this.height}),this.hasMainImage===!0&&(this.$imageContainer.css({width:this.width,height:this.height}),"undefined"==typeof this.$mainImage.attr("data-src")&&this.resizeMainImage())},getSize:function(){var a,b=this;if(this.hasImages===!0&&this.areImagesLoaded===!1&&"undefined"==typeof this.$slide.attr("data-loading")){this.$slide.attr("data-loading",!0);var d=f.checkImagesComplete(this.$slide,function(){b.areImagesLoaded=!0,b.$slide.removeAttr("data-loading"),b.trigger({type:"imagesLoaded."+c,index:b.index})});return"complete"===d?(a=this.calculateSize(),{width:a.width,height:a.height}):"loading"}return a=this.calculateSize(),{width:a.width,height:a.height}},calculateSize:function(){var a=this.$slide.width(),c=this.$slide.height();return this.$slide.children().each(function(d,e){var f=b(e);if(f.is(":hidden")!==!0){var g=e.getBoundingClientRect(),h=f.position().top+(g.bottom-g.top),i=f.position().left+(g.right-g.left);h>c&&(c=h),i>a&&(a=i)}}),{width:a,height:c}},resizeMainImage:function(a){var b=this;if(a===!0&&(this.isMainImageLoaded=!1,this.isMainImageLoading=!1),this.isMainImageLoaded===!1&&this.isMainImageLoading===!1)return this.isMainImageLoading=!0,void f.checkImagesComplete(this.$mainImage,function(){b.isMainImageLoaded=!0,b.isMainImageLoading=!1,b.resizeMainImage(),b.trigger({type:"imagesLoaded."+c,index:b.index})});if(this.settings.allowScaleUp===!1){this.$mainImage.css({width:"",height:"",maxWidth:"",maxHeight:""});var d=this.$mainImage.width(),e=this.$mainImage.height();this.$mainImage.css({maxWidth:d,maxHeight:e})}this.settings.autoHeight===!0?this.$mainImage.css({width:"100%",height:"auto"}):"cover"===this.settings.imageScaleMode?this.$mainImage.css(this.$mainImage.width()/this.$mainImage.height()<=this.width/this.height?{width:"100%",height:"auto"}:{width:"auto",height:"100%"}):"contain"===this.settings.imageScaleMode?this.$mainImage.css(this.$mainImage.width()/this.$mainImage.height()>=this.width/this.height?{width:"100%",height:"auto"}:{width:"auto",height:"100%"}):"exact"===this.settings.imageScaleMode&&this.$mainImage.css({width:"100%",height:"100%"}),this.settings.centerImage===!0&&this.$mainImage.css({marginLeft:.5*(this.$imageContainer.width()-this.$mainImage.width()),marginTop:.5*(this.$imageContainer.height()-this.$mainImage.height())})},destroy:function(){this.$slide.removeAttr("style"),this.$slide.removeAttr("data-init"),this.$slide.removeAttr("data-index"),this.$slide.removeAttr("data-loaded"),this.hasMainImage===!0&&(this.$slide.find(".sp-image").removeAttr("style").appendTo(this.$slide),this.$slide.find(".sp-image-container").remove())},getIndex:function(){return this.index},setIndex:function(a){this.index=a,this.$slide.attr("data-index",this.index)},on:function(a,b){return this.$slide.on(a,b)},off:function(a){return this.$slide.off(a)},trigger:function(a){return this.$slide.triggerHandler(a)}},a.SliderPro=d,a.SliderProSlide=e,b.fn.sliderPro=function(a){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){if("undefined"==typeof b(this).data("sliderPro")){var e=new d(this,a);b(this).data("sliderPro",e)}else if("undefined"!=typeof a){var f=b(this).data("sliderPro");if("function"==typeof f[a])f[a].apply(f,c);else if("undefined"!=typeof f.settings[a]){var g={};g[a]=c[0],f._setProperties(g)}else"object"==typeof a?f._setProperties(a):b.error(a+" does not exist in sliderPro.")}})};var f={supportedAnimation:null,vendorPrefix:null,transitionEvent:null,isIE:null,getSupportedAnimation:function(){if(null!==this.supportedAnimation)return this.supportedAnimation;var a=document.body||document.documentElement,b=a.style,c="undefined"!=typeof b.transition||"undefined"!=typeof b.WebkitTransition||"undefined"!=typeof b.MozTransition||"undefined"!=typeof b.OTransition;if(c===!0){var d=document.createElement("div");if(("undefined"!=typeof d.style.WebkitPerspective||"undefined"!=typeof d.style.perspective)&&(this.supportedAnimation="css-3d"),"css-3d"===this.supportedAnimation&&"undefined"!=typeof d.styleWebkitPerspective){var e=document.createElement("style");e.textContent="@media (transform-3d),(-webkit-transform-3d){#test-3d{left:9px;position:absolute;height:5px;margin:0;padding:0;border:0;}}",document.getElementsByTagName("head")[0].appendChild(e),d.id="test-3d",document.body.appendChild(d),(9!==d.offsetLeft||5!==d.offsetHeight)&&(this.supportedAnimation=null),e.parentNode.removeChild(e),d.parentNode.removeChild(d)}null!==this.supportedAnimation||"undefined"==typeof d.style["-webkit-transform"]&&"undefined"==typeof d.style.transform||(this.supportedAnimation="css-2d")}else this.supportedAnimation="javascript";return this.supportedAnimation},getVendorPrefix:function(){if(null!==this.vendorPrefix)return this.vendorPrefix;var a=document.createElement("div"),b=["Webkit","Moz","ms","O"];if("transform"in a.style)return this.vendorPrefix="",this.vendorPrefix;for(var c=0;c<b.length;c++)if(b[c]+"Transform"in a.style){this.vendorPrefix="-"+b[c].toLowerCase()+"-";break}return this.vendorPrefix},getTransitionEvent:function(){if(null!==this.transitionEvent)return this.transitionEvent;var a=document.createElement("div"),b={transition:"transitionend",WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd"};for(var c in b)if(c in a.style){this.transitionEvent=b[c];break}return this.transitionEvent},checkImagesComplete:function(a,b){var c=this,d=this.checkImagesStatus(a);if("loading"===d)var e=setInterval(function(){d=c.checkImagesStatus(a),"complete"===d&&(clearInterval(e),"function"==typeof b&&b())},100);else"function"==typeof b&&b();return d},checkImagesStatus:function(a){var c="complete";return a.is("img")&&a[0].complete===!1?c="loading":a.find("img").each(function(){var a=b(this)[0];a.complete===!1&&(c="loading")}),c},checkIE:function(){if(null!==this.isIE)return this.isIE;{var b=a.navigator.userAgent;b.indexOf("MSIE")}return this.isIE=-1!==b.indexOf("MSIE")||b.match(/Trident.*rv\:11\./)?!0:!1,this.isIE}};a.SliderProUtils=f}(window,jQuery),function(a,b){"use strict";var c="Thumbnails."+b.SliderPro.namespace,d={$thumbnails:null,$thumbnailsContainer:null,thumbnails:null,selectedThumbnailIndex:0,thumbnailsSize:0,thumbnailsContainerSize:0,thumbnailsPosition:0,thumbnailsOrientation:null,thumbnailsPositionProperty:null,isThumbnailScroller:!1,initThumbnails:function(){var a=this;this.thumbnails=[],this.on("update."+c,b.proxy(this._thumbnailsOnUpdate,this)),this.on("sliderResize."+c,b.proxy(this._thumbnailsOnResize,this)),this.on("gotoSlide."+c,function(b){a._gotoThumbnail(b.index)})},_thumbnailsOnUpdate:function(){var a=this;if(0===this.$slider.find(".sp-thumbnail").length&&0===this.thumbnails.length)return void(this.isThumbnailScroller=!1);if(this.isThumbnailScroller=!0,null===this.$thumbnailsContainer&&(this.$thumbnailsContainer=b('<div class="sp-thumbnails-container"></div>').insertAfter(this.$slidesContainer)),null===this.$thumbnails)if(0!==this.$slider.find(".sp-thumbnails").length){if(this.$thumbnails=this.$slider.find(".sp-thumbnails").appendTo(this.$thumbnailsContainer),this.settings.shuffle===!0){var c=this.$thumbnails.find(".sp-thumbnail"),d=[];b.each(this.shuffledIndexes,function(a,e){var f=b(c[e]);0!==f.parent("a").length&&(f=f.parent("a")),d.push(f)}),this.$thumbnails.empty().append(d)}}else this.$thumbnails=b('<div class="sp-thumbnails"></div>').appendTo(this.$thumbnailsContainer);this.$slides.find(".sp-thumbnail").each(function(){var c=b(this),d=c.parents(".sp-slide").index(),e=a.$thumbnails.find(".sp-thumbnail").length-1;0!==c.parent("a").length&&(c=c.parent("a")),d>e?c.appendTo(a.$thumbnails):c.insertBefore(a.$thumbnails.find(".sp-thumbnail").eq(d))});for(var e=this.thumbnails.length-1;e>=0;e--)if(0===this.$thumbnails.find('.sp-thumbnail[data-index="'+e+'"]').length){var f=this.thumbnails[e];f.destroy(),this.thumbnails.splice(e,1)}this.$thumbnails.find(".sp-thumbnail").each(function(c){var d=b(this);"undefined"==typeof d.attr("data-init")?a._createThumbnail(d,c):a.thumbnails[c].setIndex(c)}),this.$thumbnailsContainer.removeClass("sp-top-thumbnails sp-bottom-thumbnails sp-left-thumbnails sp-right-thumbnails"),"top"===this.settings.thumbnailsPosition?(this.$thumbnailsContainer.addClass("sp-top-thumbnails"),this.thumbnailsOrientation="horizontal"):"bottom"===this.settings.thumbnailsPosition?(this.$thumbnailsContainer.addClass("sp-bottom-thumbnails"),this.thumbnailsOrientation="horizontal"):"left"===this.settings.thumbnailsPosition?(this.$thumbnailsContainer.addClass("sp-left-thumbnails"),this.thumbnailsOrientation="vertical"):"right"===this.settings.thumbnailsPosition&&(this.$thumbnailsContainer.addClass("sp-right-thumbnails"),this.thumbnailsOrientation="vertical"),this.settings.thumbnailPointer===!0?this.$thumbnailsContainer.addClass("sp-has-pointer"):this.$thumbnailsContainer.removeClass("sp-has-pointer"),this.selectedThumbnailIndex=this.selectedSlideIndex,this.$thumbnails.find(".sp-thumbnail-container").eq(this.selectedThumbnailIndex).addClass("sp-selected-thumbnail"),this.thumbnailsSize=0,b.each(this.thumbnails,function(b,c){c.setSize(a.settings.thumbnailWidth,a.settings.thumbnailHeight),a.thumbnailsSize+="horizontal"===a.thumbnailsOrientation?c.getSize().width:c.getSize().height}),"horizontal"===this.thumbnailsOrientation?(this.$thumbnails.css({width:this.thumbnailsSize,height:this.settings.thumbnailHeight}),this.$thumbnailsContainer.css("height",""),this.thumbnailsPositionProperty="left"):(this.$thumbnails.css({width:this.settings.thumbnailWidth,height:this.thumbnailsSize}),this.$thumbnailsContainer.css("width",""),this.thumbnailsPositionProperty="top"),this.trigger({type:"thumbnailsUpdate"}),b.isFunction(this.settings.thumbnailsUpdate)&&this.settings.thumbnailsUpdate.call(this,{type:"thumbnailsUpdate"})},_createThumbnail:function(a,b){var d=this,f=new e(a,this.$thumbnails,b);f.on("thumbnailClick."+c,function(a){d.gotoSlide(a.index)}),this.thumbnails.splice(b,0,f)},_thumbnailsOnResize:function(){if(this.isThumbnailScroller!==!1){var c,d=this;"horizontal"===this.thumbnailsOrientation?(this.thumbnailsContainerSize=Math.min(this.$slidesMask.width(),this.thumbnailsSize),this.$thumbnailsContainer.css("width",this.thumbnailsContainerSize),"fullWindow"===this.settings.forceSize&&(this.$slidesMask.css("height",this.$slidesMask.height()-this.$thumbnailsContainer.outerHeight(!0)),this.slideHeight=this.$slidesMask.height(),b.each(this.slides,function(a,b){b.setSize(d.slideWidth,d.slideHeight)}))):"vertical"===this.thumbnailsOrientation&&(this.$slidesMask.width()+this.$thumbnailsContainer.outerWidth(!0)>this.$slider.parent().width()&&("fullWidth"===this.settings.forceSize||"fullWindow"===this.settings.forceSize?this.$slider.css("max-width",b(a).width()-this.$thumbnailsContainer.outerWidth(!0)):this.$slider.css("max-width",this.$slider.parent().width()-this.$thumbnailsContainer.outerWidth(!0)),this.$slidesMask.css("width",this.$slider.width()),"horizontal"===this.settings.orientation?(this.visibleOffset=Math.round((this.$slider.width()-this.slideSize)/2),this.visibleSlidesSize=this.$slidesMask.width()):"vertical"===this.settings.orientation&&(this.slideWidth=this.$slider.width(),b.each(this.slides,function(a,b){b.setSize(d.slideWidth,d.slideHeight)})),this._resetSlidesPosition()),this.thumbnailsContainerSize=Math.min(this.$slidesMask.height(),this.thumbnailsSize),this.$thumbnailsContainer.css("height",this.thumbnailsContainerSize)),c=this.thumbnailsSize<=this.thumbnailsContainerSize||0===this.$thumbnails.find(".sp-selected-thumbnail").length?0:Math.max(-this.thumbnails[this.selectedThumbnailIndex].getPosition()[this.thumbnailsPositionProperty],this.thumbnailsContainerSize-this.thumbnailsSize),"top"===this.settings.thumbnailsPosition?this.$slider.css({paddingTop:this.$thumbnailsContainer.outerHeight(!0),paddingLeft:"",paddingRight:""}):"bottom"===this.settings.thumbnailsPosition?this.$slider.css({paddingTop:"",paddingLeft:"",paddingRight:""}):"left"===this.settings.thumbnailsPosition?this.$slider.css({paddingTop:"",paddingLeft:this.$thumbnailsContainer.outerWidth(!0),paddingRight:""}):"right"===this.settings.thumbnailsPosition&&this.$slider.css({paddingTop:"",paddingLeft:"",paddingRight:this.$thumbnailsContainer.outerWidth(!0)}),this._moveThumbnailsTo(c,!0)}},_gotoThumbnail:function(a){if(this.isThumbnailScroller!==!1&&"undefined"!=typeof this.thumbnails[a]){var c=this.selectedThumbnailIndex,d=this.thumbnailsPosition;if(this.selectedThumbnailIndex=a,this.$thumbnails.find(".sp-selected-thumbnail").removeClass("sp-selected-thumbnail"),this.$thumbnails.find(".sp-thumbnail-container").eq(this.selectedThumbnailIndex).addClass("sp-selected-thumbnail"),this.selectedThumbnailIndex>=c){var e=this.selectedThumbnailIndex===this.thumbnails.length-1?this.selectedThumbnailIndex:this.selectedThumbnailIndex+1,f=this.thumbnails[e],g="horizontal"===this.thumbnailsOrientation?f.getPosition().right:f.getPosition().bottom,h=-this.thumbnailsPosition+this.thumbnailsContainerSize;g>h&&(d=this.thumbnailsPosition-(g-h))}else if(this.selectedThumbnailIndex<c){var i=0===this.selectedThumbnailIndex?this.selectedThumbnailIndex:this.selectedThumbnailIndex-1,j=this.thumbnails[i],k="horizontal"===this.thumbnailsOrientation?j.getPosition().left:j.getPosition().top;k<-this.thumbnailsPosition&&(d=-k)}this._moveThumbnailsTo(d),this.trigger({type:"gotoThumbnail"}),b.isFunction(this.settings.gotoThumbnail)&&this.settings.gotoThumbnail.call(this,{type:"gotoThumbnail"})}},_moveThumbnailsTo:function(a,c,d){var e=this,f={};if(a!==this.thumbnailsPosition)if(this.thumbnailsPosition=a,"css-3d"===this.supportedAnimation||"css-2d"===this.supportedAnimation){var g,h="horizontal"===this.thumbnailsOrientation?a:0,i="horizontal"===this.thumbnailsOrientation?0:a;f[this.vendorPrefix+"transform"]="css-3d"===this.supportedAnimation?"translate3d("+h+"px, "+i+"px, 0)":"translate("+h+"px, "+i+"px)","undefined"!=typeof c&&c===!0?g="":(this.$thumbnails.addClass("sp-animated"),g=this.vendorPrefix+"transform 0.7s",this.$thumbnails.on(this.transitionEvent,function(a){a.target===a.currentTarget&&(e.$thumbnails.off(e.transitionEvent),e.$thumbnails.removeClass("sp-animated"),"function"==typeof d&&d(),e.trigger({type:"thumbnailsMoveComplete"}),b.isFunction(e.settings.thumbnailsMoveComplete)&&e.settings.thumbnailsMoveComplete.call(e,{type:"thumbnailsMoveComplete"}))})),f[this.vendorPrefix+"transition"]=g,this.$thumbnails.css(f)}else f["margin-"+this.thumbnailsPositionProperty]=a,"undefined"!=typeof c&&c===!0?this.$thumbnails.css(f):this.$thumbnails.addClass("sp-animated").animate(f,700,function(){e.$thumbnails.removeClass("sp-animated"),"function"==typeof d&&d(),e.trigger({type:"thumbnailsMoveComplete"}),b.isFunction(e.settings.thumbnailsMoveComplete)&&e.settings.thumbnailsMoveComplete.call(e,{type:"thumbnailsMoveComplete"})})},_stopThumbnailsMovement:function(){var a={};if("css-3d"===this.supportedAnimation||"css-2d"===this.supportedAnimation){var b=this.$thumbnails.css(this.vendorPrefix+"transform"),c=-1!==b.indexOf("matrix3d")?"matrix3d":"matrix",d=b.replace(c,"").match(/-?[0-9\.]+/g),e="matrix3d"===c?parseInt(d[12],10):parseInt(d[4],10),f="matrix3d"===c?parseInt(d[13],10):parseInt(d[5],10);a[this.vendorPrefix+"transform"]="css-3d"===this.supportedAnimation?"translate3d("+e+"px, "+f+"px, 0)":"translate("+e+"px, "+f+"px)",a[this.vendorPrefix+"transition"]="",this.$thumbnails.css(a),this.$thumbnails.off(this.transitionEvent),this.thumbnailsPosition="horizontal"===this.thumbnailsOrientation?parseInt(d[4],10):parseInt(d[5],10)}else this.$thumbnails.stop(),this.thumbnailsPosition=parseInt(this.$thumbnails.css("margin-"+this.thumbnailsPositionProperty),10);this.$thumbnails.removeClass("sp-animated")},destroyThumbnails:function(){var d=this;this.off("update."+c),this.isThumbnailScroller!==!1&&(this.off("sliderResize."+c),this.off("gotoSlide."+c),b(a).off("resize."+this.uniqueId+"."+c),this.$thumbnails.find(".sp-thumbnail").each(function(){var a=b(this),e=parseInt(a.attr("data-index"),10),f=d.thumbnails[e];f.off("thumbnailClick."+c),f.destroy()}),this.thumbnails.length=0,this.$thumbnails.appendTo(this.$slider),this.$thumbnailsContainer.remove(),this.$slider.css({paddingTop:"",paddingLeft:"",paddingRight:""}))},thumbnailsDefaults:{thumbnailWidth:100,thumbnailHeight:80,thumbnailsPosition:"bottom",thumbnailPointer:!1,thumbnailsUpdate:function(){},gotoThumbnail:function(){},thumbnailsMoveComplete:function(){}}},e=function(a,b,c){this.$thumbnail=a,this.$thumbnails=b,this.$thumbnailContainer=null,this.width=0,this.height=0,this.isImageLoaded=!1,this.setIndex(c),this._init()
	};e.prototype={_init:function(){var a=this;this.$thumbnail.attr("data-init",!0),this.$thumbnailContainer=b('<div class="sp-thumbnail-container"></div>').appendTo(this.$thumbnails),0!==this.$thumbnail.parent("a").length?this.$thumbnail.parent("a").appendTo(this.$thumbnailContainer):this.$thumbnail.appendTo(this.$thumbnailContainer),this.$thumbnailContainer.on("click."+c,function(){a.trigger({type:"thumbnailClick."+c,index:a.index})})},setSize:function(a,b){this.width=a,this.height=b,this.$thumbnailContainer.css({width:this.width,height:this.height}),this.$thumbnail.is("img")&&"undefined"==typeof this.$thumbnail.attr("data-src")&&this.resizeImage()},getSize:function(){return{width:this.$thumbnailContainer.outerWidth(!0),height:this.$thumbnailContainer.outerHeight(!0)}},getPosition:function(){return{left:this.$thumbnailContainer.position().left+parseInt(this.$thumbnailContainer.css("marginLeft"),10),right:this.$thumbnailContainer.position().left+parseInt(this.$thumbnailContainer.css("marginLeft"),10)+this.$thumbnailContainer.outerWidth(),top:this.$thumbnailContainer.position().top+parseInt(this.$thumbnailContainer.css("marginTop"),10),bottom:this.$thumbnailContainer.position().top+parseInt(this.$thumbnailContainer.css("marginTop"),10)+this.$thumbnailContainer.outerHeight()}},setIndex:function(a){this.index=a,this.$thumbnail.attr("data-index",this.index)},resizeImage:function(){var a=this;if(this.isImageLoaded===!1)return void SliderProUtils.checkImagesComplete(this.$thumbnailContainer,function(){a.isImageLoaded=!0,a.resizeImage()});this.$thumbnail=this.$thumbnailContainer.find(".sp-thumbnail");var b=this.$thumbnail.width(),c=this.$thumbnail.height();this.$thumbnail.css(b/c<=this.width/this.height?{width:"100%",height:"auto"}:{width:"auto",height:"100%"}),this.$thumbnail.css({marginLeft:.5*(this.$thumbnailContainer.width()-this.$thumbnail.width()),marginTop:.5*(this.$thumbnailContainer.height()-this.$thumbnail.height())})},destroy:function(){this.$thumbnailContainer.off("click."+c),this.$thumbnail.removeAttr("data-init"),this.$thumbnail.removeAttr("data-index"),0!==this.$thumbnail.parent("a").length?this.$thumbnail.parent("a").insertBefore(this.$thumbnailContainer):this.$thumbnail.insertBefore(this.$thumbnailContainer),this.$thumbnailContainer.remove()},on:function(a,b){return this.$thumbnailContainer.on(a,b)},off:function(a){return this.$thumbnailContainer.off(a)},trigger:function(a){return this.$thumbnailContainer.triggerHandler(a)}},b.SliderPro.addModule("Thumbnails",d)}(window,jQuery),function(a,b){"use strict";var c="ConditionalImages."+b.SliderPro.namespace,d={previousImageSize:null,currentImageSize:null,isRetinaScreen:!1,initConditionalImages:function(){this.currentImageSize=this.previousImageSize="default",this.isRetinaScreen="undefined"!=typeof this._isRetina&&this._isRetina()===!0,this.on("update."+c,b.proxy(this._conditionalImagesOnUpdate,this)),this.on("sliderResize."+c,b.proxy(this._conditionalImagesOnResize,this))},_conditionalImagesOnUpdate:function(){b.each(this.slides,function(a,c){var d=c.$slide;d.find("img:not([ data-default ])").each(function(){var a=b(this);"undefined"!=typeof a.attr("data-src")?a.attr("data-default",a.attr("data-src")):a.attr("data-default",a.attr("src"))})})},_conditionalImagesOnResize:function(){if(this.currentImageSize=this.slideWidth<=this.settings.smallSize?"small":this.slideWidth<=this.settings.mediumSize?"medium":this.slideWidth<=this.settings.largeSize?"large":"default",this.previousImageSize!==this.currentImageSize){var a=this;b.each(this.slides,function(c,d){var e=d.$slide;e.find("img").each(function(){var c=b(this),e="";a.isRetinaScreen===!0&&"undefined"!=typeof c.attr("data-retina"+a.currentImageSize)?(e=c.attr("data-retina"+a.currentImageSize),"undefined"!=typeof c.attr("data-retina")&&c.attr("data-retina")!==e&&c.attr("data-retina",e)):(a.isRetinaScreen===!1||a.isRetinaScreen===!0&&"undefined"==typeof c.attr("data-retina"))&&"undefined"!=typeof c.attr("data-"+a.currentImageSize)&&(e=c.attr("data-"+a.currentImageSize),"undefined"!=typeof c.attr("data-src")&&c.attr("data-src")!==e&&c.attr("data-src",e)),""!==e&&"undefined"==typeof c.attr("data-src")&&c.attr("src")!==e&&a._loadConditionalImage(c,e,function(a){a.hasClass("sp-image")&&(d.$mainImage=a,d.resizeMainImage(!0))})})}),this.previousImageSize=this.currentImageSize}},_loadConditionalImage:function(a,c,d){var e=b(new Image);e.attr("class",a.attr("class")),e.attr("style",a.attr("style")),b.each(a.data(),function(a,b){e.attr("data-"+a,b)}),"undefined"!=typeof a.attr("width")&&e.attr("width",a.attr("width")),"undefined"!=typeof a.attr("height")&&e.attr("height",a.attr("height")),"undefined"!=typeof a.attr("alt")&&e.attr("alt",a.attr("alt")),"undefined"!=typeof a.attr("title")&&e.attr("title",a.attr("title")),e.attr("src",c),e.insertAfter(a),a.remove(),a=null,"function"==typeof d&&d(e)},destroyConditionalImages:function(){this.off("update."+c),this.off("sliderResize."+c)},conditionalImagesDefaults:{smallSize:480,mediumSize:768,largeSize:1024}};b.SliderPro.addModule("ConditionalImages",d)}(window,jQuery),function(a,b){"use strict";var c="Retina."+b.SliderPro.namespace,d={initRetina:function(){this._isRetina()!==!1&&(this.on("update."+c,b.proxy(this._checkRetinaImages,this)),0!==this.$slider.find(".sp-thumbnail").length&&this.on("update.Thumbnails."+c,b.proxy(this._checkRetinaThumbnailImages,this)))},_isRetina:function(){return a.devicePixelRatio>=2?!0:a.matchMedia&&a.matchMedia("(-webkit-min-device-pixel-ratio: 2),(min-resolution: 2dppx)").matches?!0:!1},_checkRetinaImages:function(){var a=this;b.each(this.slides,function(c,d){var e=d.$slide;"undefined"==typeof e.attr("data-retina-loaded")&&(e.attr("data-retina-loaded",!0),e.find("img[data-retina]").each(function(){var c=b(this);"undefined"!=typeof c.attr("data-src")?c.attr("data-src",c.attr("data-retina")):a._loadRetinaImage(c,function(a){a.hasClass("sp-image")&&(d.$mainImage=a,d.resizeMainImage(!0))})}))})},_checkRetinaThumbnailImages:function(){var a=this;b.each(this.thumbnails,function(c,d){var e=d.$thumbnailContainer;"undefined"==typeof e.attr("data-retina-loaded")&&(e.attr("data-retina-loaded",!0),e.find("img[data-retina]").each(function(){var c=b(this);"undefined"!=typeof c.attr("data-src")?c.attr("data-src",c.attr("data-retina")):a._loadRetinaImage(c,function(a){a.hasClass("sp-thumbnail")&&d.resizeImage()})}))})},_loadRetinaImage:function(a,c){var d=!1,e="";if("undefined"!=typeof a.attr("data-retina")&&(d=!0,e=a.attr("data-retina")),"undefined"!=typeof a.attr("data-src")&&(d===!1&&(e=a.attr("data-src")),a.removeAttr("data-src")),""!==e){var f=b(new Image);f.attr("class",a.attr("class")),f.attr("style",a.attr("style")),b.each(a.data(),function(a,b){f.attr("data-"+a,b)}),"undefined"!=typeof a.attr("width")&&f.attr("width",a.attr("width")),"undefined"!=typeof a.attr("height")&&f.attr("height",a.attr("height")),"undefined"!=typeof a.attr("alt")&&f.attr("alt",a.attr("alt")),"undefined"!=typeof a.attr("title")&&f.attr("title",a.attr("title")),f.insertAfter(a),a.remove(),a=null,f.attr("src",e),"function"==typeof c&&c(f)}},destroyRetina:function(){this.off("update."+c),this.off("update.Thumbnails."+c)}};b.SliderPro.addModule("Retina",d)}(window,jQuery),function(a,b){"use strict";var c="LazyLoading."+b.SliderPro.namespace,d={allowLazyLoadingCheck:!0,initLazyLoading:function(){this.on("sliderResize."+c,b.proxy(this._lazyLoadingOnResize,this)),this.on("gotoSlide."+c,b.proxy(this._checkAndLoadVisibleImages,this)),this.on("thumbnailsUpdate."+c+" thumbnailsMoveComplete."+c,b.proxy(this._checkAndLoadVisibleThumbnailImages,this))},_lazyLoadingOnResize:function(){var a=this;this.allowLazyLoadingCheck!==!1&&(this.allowLazyLoadingCheck=!1,this._checkAndLoadVisibleImages(),0!==this.$slider.find(".sp-thumbnail").length&&this._checkAndLoadVisibleThumbnailImages(),setTimeout(function(){a.allowLazyLoadingCheck=!0},500))},_checkAndLoadVisibleImages:function(){if(0!==this.$slider.find(".sp-slide:not([ data-loaded ])").length){var a=this,c=this.settings.loop===!0?this.middleSlidePosition:this.selectedSlideIndex,d=Math.ceil((this.visibleSlidesSize-this.slideSize)/2/this.slideSize),e=c-d-1>0?c-d-1:0,f=c+d+1<this.getTotalSlides()-1?c+d+1:this.getTotalSlides()-1,g=this.slidesOrder.slice(e,f+1);b.each(g,function(c,d){var e=a.slides[d],f=e.$slide;"undefined"==typeof f.attr("data-loaded")&&(f.attr("data-loaded",!0),f.find("img[ data-src ]").each(function(){var c=b(this);a._loadImage(c,function(a){a.hasClass("sp-image")&&(e.$mainImage=a,e.resizeMainImage(!0))})}))})}},_checkAndLoadVisibleThumbnailImages:function(){if(0!==this.$slider.find(".sp-thumbnail-container:not([ data-loaded ])").length){var a=this,c=this.thumbnailsSize/this.thumbnails.length,d=Math.floor(Math.abs(this.thumbnailsPosition/c)),e=Math.floor((-this.thumbnailsPosition+this.thumbnailsContainerSize)/c),f=this.thumbnails.slice(d,e+1);b.each(f,function(c,d){var e=d.$thumbnailContainer;"undefined"==typeof e.attr("data-loaded")&&(e.attr("data-loaded",!0),e.find("img[ data-src ]").each(function(){var c=b(this);a._loadImage(c,function(){d.resizeImage()})}))})}},_loadImage:function(a,c){var d=b(new Image);d.attr("class",a.attr("class")),d.attr("style",a.attr("style")),b.each(a.data(),function(a,b){d.attr("data-"+a,b)}),"undefined"!=typeof a.attr("width")&&d.attr("width",a.attr("width")),"undefined"!=typeof a.attr("height")&&d.attr("height",a.attr("height")),"undefined"!=typeof a.attr("alt")&&d.attr("alt",a.attr("alt")),"undefined"!=typeof a.attr("title")&&d.attr("title",a.attr("title")),d.attr("src",a.attr("data-src")),d.removeAttr("data-src"),d.insertAfter(a),a.remove(),a=null,"function"==typeof c&&c(d)},destroyLazyLoading:function(){this.off("update."+c),this.off("gotoSlide."+c),this.off("sliderResize."+c),this.off("thumbnailsUpdate."+c),this.off("thumbnailsMoveComplete."+c)}};b.SliderPro.addModule("LazyLoading",d)}(window,jQuery),function(a,b){"use strict";var c="Layers."+b.SliderPro.namespace,d={layersGotoSlideReference:null,waitForLayersTimer:null,initLayers:function(){this.on("update."+c,b.proxy(this._layersOnUpdate,this)),this.on("sliderResize."+c,b.proxy(this._layersOnResize,this)),this.on("gotoSlide."+c,b.proxy(this._layersOnGotoSlide,this))},_layersOnUpdate:function(){var a=this;b.each(this.slides,function(a,c){c.$slide;this.$slide.find(".sp-layer:not([ data-layer-init ])").each(function(){var a=new f(b(this));"undefined"==typeof c.layers&&(c.layers=[]),c.layers.push(a),b(this).hasClass("sp-static")===!1&&("undefined"==typeof c.animatedLayers&&(c.animatedLayers=[]),c.animatedLayers.push(a))})}),this.settings.waitForLayers===!0&&(clearTimeout(this.waitForLayersTimer),this.waitForLayersTimer=setTimeout(function(){a.layersGotoSlideReference=a.gotoSlide,a.gotoSlide=a._layersGotoSlide},1)),this.showLayers(this.selectedSlideIndex)},_layersOnResize:function(){var a,c,d=this,e=this.settings.autoScaleLayers;this.settings.autoScaleLayers!==!1&&(-1===this.settings.autoScaleReference?"string"==typeof this.settings.width&&-1!==this.settings.width.indexOf("%")?e=!1:a=parseInt(this.settings.width,10):a=this.settings.autoScaleReference,c=e===!0&&this.slideWidth<a?d.slideWidth/a:1,b.each(this.slides,function(a,d){"undefined"!=typeof d.layers&&b.each(d.layers,function(a,b){b.scale(c)})}))},_layersGotoSlide:function(a){var b=this,d=this.slides[this.selectedSlideIndex].animatedLayers;this.$slider.hasClass("sp-swiping")||"undefined"==typeof d||0===d.length?this.layersGotoSlideReference(a):(this.on("hideLayersComplete."+c,function(){b.off("hideLayersComplete."+c),b.layersGotoSlideReference(a)}),this.hideLayers(this.selectedSlideIndex))},_layersOnGotoSlide:function(){this.previousSlideIndex!==this.selectedSlideIndex&&this.settings.waitForLayers===!1&&this.hideLayers(this.previousSlideIndex),this.showLayers(this.selectedSlideIndex)},showLayers:function(a){var c=this,d=this.slides[a].animatedLayers,e=0;"undefined"!=typeof d&&b.each(d,function(a,f){f.isVisible()===!0?(e++,e===d.length&&(c.trigger({type:"showLayersComplete",index:a}),b.isFunction(c.settings.showLayersComplete)&&c.settings.showLayersComplete.call(c,{type:"showLayersComplete",index:a}))):f.show(function(){e++,e===d.length&&(c.trigger({type:"showLayersComplete",index:a}),b.isFunction(c.settings.showLayersComplete)&&c.settings.showLayersComplete.call(c,{type:"showLayersComplete",index:a}))})})},hideLayers:function(a){var c=this,d=this.slides[a].animatedLayers,e=0;"undefined"!=typeof d&&b.each(d,function(a,f){f.isVisible()===!1?(e++,e===d.length&&(c.trigger({type:"hideLayersComplete",index:a}),b.isFunction(c.settings.hideLayersComplete)&&c.settings.hideLayersComplete.call(c,{type:"hideLayersComplete",index:a}))):f.hide(function(){e++,e===d.length&&(c.trigger({type:"hideLayersComplete",index:a}),b.isFunction(c.settings.hideLayersComplete)&&c.settings.hideLayersComplete.call(c,{type:"hideLayersComplete",index:a}))})})},destroyLayers:function(){this.off("update."+c),this.off("resize."+c),this.off("gotoSlide."+c),this.off("hideLayersComplete."+c)},layersDefaults:{waitForLayers:!1,autoScaleLayers:!0,autoScaleReference:-1,showLayersComplete:function(){},hideLayersComplete:function(){}}},e=a.SliderProSlide.prototype.destroy;a.SliderProSlide.prototype.destroy=function(){"undefined"!=typeof this.layers&&(b.each(this.layers,function(a,b){b.destroy()}),this.layers.length=0),"undefined"!=typeof this.animatedLayers&&(this.animatedLayers.length=0),e.apply(this)};var f=function(a){this.$layer=a,this.visible=!1,this.styled=!1,this.data=null,this.position=null,this.horizontalProperty=null,this.verticalProperty=null,this.horizontalPosition=null,this.verticalPosition=null,this.scaleRatio=1,this.supportedAnimation=SliderProUtils.getSupportedAnimation(),this.vendorPrefix=SliderProUtils.getVendorPrefix(),this.transitionEvent=SliderProUtils.getTransitionEvent(),this.stayTimer=null,this._init()};f.prototype={_init:function(){this.$layer.attr("data-layer-init",!0),this.$layer.hasClass("sp-static")?this._setStyle():this.$layer.css({visibility:"hidden",display:"none"})},_setStyle:function(){this.styled=!0,this.$layer.css("display",""),this.data=this.$layer.data(),"undefined"!=typeof this.data.width&&this.$layer.css("width",this.data.width),"undefined"!=typeof this.data.height&&this.$layer.css("height",this.data.height),"undefined"!=typeof this.data.depth&&this.$layer.css("z-index",this.data.depth),this.position=this.data.position?this.data.position.toLowerCase():"topleft",this.horizontalProperty=-1!==this.position.indexOf("right")?"right":-1!==this.position.indexOf("left")?"left":"center",this.verticalProperty=-1!==this.position.indexOf("bottom")?"bottom":-1!==this.position.indexOf("top")?"top":"center",this._setPosition(),this.scale(this.scaleRatio)},_setPosition:function(){var a=this.$layer.attr("style");this.horizontalPosition="undefined"!=typeof this.data.horizontal?this.data.horizontal:0,this.verticalPosition="undefined"!=typeof this.data.vertical?this.data.vertical:0,"center"===this.horizontalProperty?(this.$layer.is("img")===!1&&("undefined"==typeof a||"undefined"!=typeof a&&-1===a.indexOf("width"))&&(this.$layer.css("white-space","nowrap"),this.$layer.css("width",this.$layer.outerWidth(!0))),this.$layer.css({marginLeft:"auto",marginRight:"auto",left:this.horizontalPosition,right:0})):this.$layer.css(this.horizontalProperty,this.horizontalPosition),"center"===this.verticalProperty?(this.$layer.is("img")===!1&&("undefined"==typeof a||"undefined"!=typeof a&&-1===a.indexOf("height"))&&(this.$layer.css("white-space","nowrap"),this.$layer.css("height",this.$layer.outerHeight(!0))),this.$layer.css({marginTop:"auto",marginBottom:"auto",top:this.verticalPosition,bottom:0})):this.$layer.css(this.verticalProperty,this.verticalPosition)},scale:function(a){if(!this.$layer.hasClass("sp-no-scale")&&(this.scaleRatio=a,this.styled!==!1)){var b="center"===this.horizontalProperty?"left":this.horizontalProperty,c="center"===this.verticalProperty?"top":this.verticalProperty,d={};d[this.vendorPrefix+"transform-origin"]=this.horizontalProperty+" "+this.verticalProperty,d[this.vendorPrefix+"transform"]="scale("+this.scaleRatio+")","string"!=typeof this.horizontalPosition&&(d[b]=this.horizontalPosition*this.scaleRatio),"string"!=typeof this.verticalPosition&&(d[c]=this.verticalPosition*this.scaleRatio),"string"==typeof this.data.width&&-1!==this.data.width.indexOf("%")&&(d.width=(parseInt(this.data.width,10)/this.scaleRatio).toString()+"%"),"string"==typeof this.data.height&&-1!==this.data.height.indexOf("%")&&(d.height=(parseInt(this.data.height,10)/this.scaleRatio).toString()+"%"),this.$layer.css(d)}},show:function(a){if(this.visible!==!0){this.visible=!0,this.styled===!1&&this._setStyle();var b=this,c="undefined"!=typeof this.data.showOffset?this.data.showOffset:50,d="undefined"!=typeof this.data.showDuration?this.data.showDuration/1e3:.4,e="undefined"!=typeof this.data.showDelay?this.data.showDelay:10,f="undefined"!=typeof b.data.stayDuration?parseInt(b.data.stayDuration,10):-1;if("javascript"===this.supportedAnimation)this.$layer.stop().delay(e).css({opacity:0,visibility:"visible"}).animate({opacity:1},1e3*d,function(){-1!==f&&(b.stayTimer=setTimeout(function(){b.hide(),b.stayTimer=null},f)),"undefined"!=typeof a&&a()});else{var g={opacity:0,visibility:"visible"},h={opacity:1},i="";g[this.vendorPrefix+"transform"]="scale("+this.scaleRatio+")",h[this.vendorPrefix+"transform"]="scale("+this.scaleRatio+")",h[this.vendorPrefix+"transition"]="opacity "+d+"s","undefined"!=typeof this.data.showTransition&&("left"===this.data.showTransition?i=c+"px, 0":"right"===this.data.showTransition?i="-"+c+"px, 0":"up"===this.data.showTransition?i="0, "+c+"px":"down"===this.data.showTransition&&(i="0, -"+c+"px"),g[this.vendorPrefix+"transform"]+="css-3d"===this.supportedAnimation?" translate3d("+i+", 0)":" translate("+i+")",h[this.vendorPrefix+"transform"]+="css-3d"===this.supportedAnimation?" translate3d(0, 0, 0)":" translate(0, 0)",h[this.vendorPrefix+"transition"]+=", "+this.vendorPrefix+"transform "+d+"s"),this.$layer.on(this.transitionEvent,function(c){c.target===c.currentTarget&&(b.$layer.off(b.transitionEvent).css(b.vendorPrefix+"transition",""),-1!==f&&(b.stayTimer=setTimeout(function(){b.hide(),b.stayTimer=null},f)),"undefined"!=typeof a&&a())}),this.$layer.css(g),setTimeout(function(){b.$layer.css(h)},e)}}},hide:function(a){if(this.visible!==!1){var c=this,d="undefined"!=typeof this.data.hideOffset?this.data.hideOffset:50,e="undefined"!=typeof this.data.hideDuration?this.data.hideDuration/1e3:.4,f="undefined"!=typeof this.data.hideDelay?this.data.hideDelay:10;if(this.visible=!1,null!==this.stayTimer&&clearTimeout(this.stayTimer),"javascript"===this.supportedAnimation)this.$layer.stop().delay(f).animate({opacity:0},1e3*e,function(){b(this).css("visibility","hidden"),"undefined"!=typeof a&&a()});else{var g="",h={opacity:0};h[this.vendorPrefix+"transform"]="scale("+this.scaleRatio+")",h[this.vendorPrefix+"transition"]="opacity "+e+"s","undefined"!=typeof this.data.hideTransition&&("left"===this.data.hideTransition?g="-"+d+"px, 0":"right"===this.data.hideTransition?g=d+"px, 0":"up"===this.data.hideTransition?g="0, -"+d+"px":"down"===this.data.hideTransition&&(g="0, "+d+"px"),h[this.vendorPrefix+"transform"]+="css-3d"===this.supportedAnimation?" translate3d("+g+", 0)":" translate("+g+")",h[this.vendorPrefix+"transition"]+=", "+this.vendorPrefix+"transform "+e+"s"),this.$layer.on(this.transitionEvent,function(b){b.target===b.currentTarget&&(c.$layer.off(c.transitionEvent).css(c.vendorPrefix+"transition",""),c.visible===!1&&c.$layer.css("visibility","hidden"),"undefined"!=typeof a&&a())}),setTimeout(function(){c.$layer.css(h)},f)}}},isVisible:function(){return this.visible===!1||this.$layer.is(":hidden")?!1:!0},destroy:function(){this.$layer.removeAttr("style"),this.$layer.removeAttr("data-layer-init")}},b.SliderPro.addModule("Layers",d)}(window,jQuery),function(a,b){"use strict";var c="Fade."+b.SliderPro.namespace,d={fadeGotoSlideReference:null,initFade:function(){this.on("update."+c,b.proxy(this._fadeOnUpdate,this))},_fadeOnUpdate:function(){this.settings.fade===!0&&(this.fadeGotoSlideReference=this.gotoSlide,this.gotoSlide=this._fadeGotoSlide)},_fadeGotoSlide:function(a){if(a!==this.selectedSlideIndex)if(this.$slider.hasClass("sp-swiping"))this.fadeGotoSlideReference(a);else{var c,d,e=this,f=a;b.each(this.slides,function(a,b){var g=b.getIndex(),h=b.$slide;g===f?(h.css({opacity:0,left:0,top:0,"z-index":20}),c=h):g===e.selectedSlideIndex?(h.css({opacity:1,left:0,top:0,"z-index":10}),d=h):h.css("visibility","hidden")}),this.previousSlideIndex=this.selectedSlideIndex,this.selectedSlideIndex=a,this.$slides.find(".sp-selected").removeClass("sp-selected"),this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).addClass("sp-selected"),e.settings.loop===!0&&e._updateSlidesOrder(),this._moveTo(this.visibleOffset,!0),this.settings.fadeOutPreviousSlide===!0&&this._fadeSlideTo(d,0),this._fadeSlideTo(c,1,function(){b.each(e.slides,function(a,b){var c=b.$slide;c.css({visibility:"",opacity:"","z-index":""})}),e._resetSlidesPosition(),e.trigger({type:"gotoSlideComplete",index:a,previousIndex:e.previousSlideIndex}),b.isFunction(e.settings.gotoSlideComplete)&&e.settings.gotoSlideComplete.call(e,{type:"gotoSlideComplete",index:a,previousIndex:e.previousSlideIndex})}),this.settings.autoHeight===!0&&this._resizeHeight(),this.trigger({type:"gotoSlide",index:a,previousIndex:this.previousSlideIndex}),b.isFunction(this.settings.gotoSlide)&&this.settings.gotoSlide.call(this,{type:"gotoSlide",index:a,previousIndex:this.previousSlideIndex})}},_fadeSlideTo:function(a,b,c){var d=this;"css-3d"===this.supportedAnimation||"css-2d"===this.supportedAnimation?(setTimeout(function(){var c={opacity:b};c[d.vendorPrefix+"transition"]="opacity "+d.settings.fadeDuration/1e3+"s",a.css(c)},100),a.on(this.transitionEvent,function(b){b.target===b.currentTarget&&(a.off(d.transitionEvent),a.css(d.vendorPrefix+"transition",""),"function"==typeof c&&c())})):a.stop().animate({opacity:b},this.settings.fadeDuration,function(){"function"==typeof c&&c()})},destroyFade:function(){this.off("update."+c),null!==this.fadeGotoSlideReference&&(this.gotoSlide=this.fadeGotoSlideReference)},fadeDefaults:{fade:!1,fadeOutPreviousSlide:!0,fadeDuration:500}};b.SliderPro.addModule("Fade",d)}(window,jQuery),function(a,b){"use strict";var c="TouchSwipe."+b.SliderPro.namespace,d={touchStartPoint:{x:0,y:0},touchEndPoint:{x:0,y:0},touchDistance:{x:0,y:0},touchStartPosition:0,isTouchMoving:!1,touchSwipeEvents:{startEvent:"",moveEvent:"",endEvent:""},initTouchSwipe:function(){this.settings.touchSwipe!==!1&&(this.touchSwipeEvents.startEvent="touchstart."+c+" mousedown."+c,this.touchSwipeEvents.moveEvent="touchmove."+c+" mousemove."+c,this.touchSwipeEvents.endEvent="touchend."+this.uniqueId+"."+c+" mouseup."+this.uniqueId+"."+c,this.$slidesMask.on(this.touchSwipeEvents.startEvent,b.proxy(this._onTouchStart,this)),this.$slidesMask.on("dragstart."+c,function(a){a.preventDefault()}),this.$slidesMask.addClass("sp-grab"))},_onTouchStart:function(a){if(!(b(a.target).closest(".sp-selectable").length>=1)){var d="undefined"!=typeof a.originalEvent.touches?a.originalEvent.touches[0]:a.originalEvent;"undefined"==typeof a.originalEvent.touches&&a.preventDefault(),b(a.target).parents(".sp-slide").find("a").one("click."+c,function(a){a.preventDefault()}),this.touchStartPoint.x=d.pageX||d.clientX,this.touchStartPoint.y=d.pageY||d.clientY,this.touchStartPosition=this.slidesPosition,this.touchDistance.x=this.touchDistance.y=0,this.$slides.hasClass("sp-animated")&&(this.isTouchMoving=!0,this._stopMovement(),this.touchStartPosition=this.slidesPosition),this.$slidesMask.on(this.touchSwipeEvents.moveEvent,b.proxy(this._onTouchMove,this)),b(document).on(this.touchSwipeEvents.endEvent,b.proxy(this._onTouchEnd,this)),this.$slidesMask.removeClass("sp-grab").addClass("sp-grabbing"),this.$slider.addClass("sp-swiping")}},_onTouchMove:function(a){var b="undefined"!=typeof a.originalEvent.touches?a.originalEvent.touches[0]:a.originalEvent;this.isTouchMoving=!0,this.touchEndPoint.x=b.pageX||b.clientX,this.touchEndPoint.y=b.pageY||b.clientY,this.touchDistance.x=this.touchEndPoint.x-this.touchStartPoint.x,this.touchDistance.y=this.touchEndPoint.y-this.touchStartPoint.y;var c="horizontal"===this.settings.orientation?this.touchDistance.x:this.touchDistance.y,d="horizontal"===this.settings.orientation?this.touchDistance.y:this.touchDistance.x;Math.abs(c)>Math.abs(d)&&(a.preventDefault(),this.settings.loop===!1&&(this.slidesPosition>this.touchStartPosition&&0===this.selectedSlideIndex||this.slidesPosition<this.touchStartPosition&&this.selectedSlideIndex===this.getTotalSlides()-1)&&(c=.2*c),this._moveTo(this.touchStartPosition+c,!0))},_onTouchEnd:function(a){var d=this,e="horizontal"===this.settings.orientation?this.touchDistance.x:this.touchDistance.y;if(this.$slidesMask.off(this.touchSwipeEvents.moveEvent),b(document).off(this.touchSwipeEvents.endEvent),this.$slidesMask.removeClass("sp-grabbing").addClass("sp-grab"),(this.isTouchMoving===!1||this.isTouchMoving===!0&&Math.abs(this.touchDistance.x)<10&&Math.abs(this.touchDistance.y)<10)&&(b(a.target).parents(".sp-slide").find("a").off("click."+c),this.$slider.removeClass("sp-swiping")),setTimeout(function(){d.$slider.removeClass("sp-swiping")},1),this.isTouchMoving!==!1){this.isTouchMoving=!1,b(a.target).parents(".sp-slide").one("click",function(a){a.preventDefault()});var f=-parseInt(this.$slides.find(".sp-slide").eq(this.selectedSlideIndex).css(this.positionProperty),10)+this.visibleOffset;if(Math.abs(e)<this.settings.touchSwipeThreshold)this._moveTo(f);else{var g=e/(this.slideSize+this.settings.slideDistance);g=parseInt(g,10)+(g>0?1:-1);var h=this.slidesOrder[b.inArray(this.selectedSlideIndex,this.slidesOrder)-g];this.settings.loop===!0?this.gotoSlide(h):"undefined"!=typeof h?this.gotoSlide(h):this._moveTo(f)}}},destroyTouchSwipe:function(){this.$slidesMask.off(this.touchSwipeEvents.startEvent),this.$slidesMask.off(this.touchSwipeEvents.moveEvent),this.$slidesMask.off("dragstart."+c),b(document).off(this.touchSwipeEvents.endEvent),this.$slidesMask.removeClass("sp-grab")},touchSwipeDefaults:{touchSwipe:!0,touchSwipeThreshold:50}};b.SliderPro.addModule("TouchSwipe",d)}(window,jQuery),function(a,b){"use strict";var c="Caption."+b.SliderPro.namespace,d={$captionContainer:null,captionContent:"",initCaption:function(){this.on("update."+c,b.proxy(this._captionOnUpdate,this)),this.on("gotoSlide."+c,b.proxy(this._updateCaptionContent,this))},_captionOnUpdate:function(){this.$captionContainer=this.$slider.find(".sp-caption-container"),this.$slider.find(".sp-caption").length&&0===this.$captionContainer.length&&(this.$captionContainer=b('<div class="sp-caption-container"></div>').appendTo(this.$slider),this._updateCaptionContent()),this.$slides.find(".sp-caption").each(function(){b(this).css("display","none")})},_updateCaptionContent:function(){var a=this,b=this.$slider.find(".sp-slide").eq(this.selectedSlideIndex).find(".sp-caption"),c=0!==b.length?b.html():"";this.settings.fadeCaption===!0?""!==this.captionContent?(0===parseFloat(this.$captionContainer.css("opacity"),10)&&(this.$captionContainer.css(this.vendorPrefix+"transition",""),this.$captionContainer.css("opacity",1)),this._fadeCaptionTo(0,function(){a.captionContent=c,""!==c?(a.$captionContainer.html(a.captionContent),a._fadeCaptionTo(1)):a.$captionContainer.empty()})):(this.captionContent=c,this.$captionContainer.html(this.captionContent),this.$captionContainer.css("opacity",0),this._fadeCaptionTo(1)):(this.captionContent=c,this.$captionContainer.html(this.captionContent))},_fadeCaptionTo:function(a,b){var c=this;"css-3d"===this.supportedAnimation||"css-2d"===this.supportedAnimation?(setTimeout(function(){var b={opacity:a};b[c.vendorPrefix+"transition"]="opacity "+c.settings.captionFadeDuration/1e3+"s",c.$captionContainer.css(b)},1),this.$captionContainer.on(this.transitionEvent,function(a){a.target===a.currentTarget&&(c.$captionContainer.off(c.transitionEvent),c.$captionContainer.css(c.vendorPrefix+"transition",""),"function"==typeof b&&b())})):this.$captionContainer.stop().animate({opacity:a},this.settings.captionFadeDuration,function(){"function"==typeof b&&b()})},destroyCaption:function(){this.off("update."+c),this.off("gotoSlide."+c),this.$captionContainer.remove(),this.$slider.find(".sp-caption").each(function(){b(this).css("display","")})},captionDefaults:{fadeCaption:!0,captionFadeDuration:500}};b.SliderPro.addModule("Caption",d)}(window,jQuery),function(a,b){"use strict";var c="DeepLinking."+b.SliderPro.namespace,d={initDeepLinking:function(){var d=this;this.on("init."+c,function(){d._gotoHash(a.location.hash)}),this.on("gotoSlide."+c,function(b){if(d.settings.updateHash===!0){var c=d.$slider.find(".sp-slide").eq(b.index).attr("id");"undefined"==typeof c&&(c=b.index),a.location.hash=d.$slider.attr("id")+"/"+c}}),b(a).on("hashchange."+this.uniqueId+"."+c,function(){d._gotoHash(a.location.hash)})},_parseHash:function(a){if(""!==a){a=a.substring(1);var b=a.split("/"),c=b.pop(),d=a.slice(0,-c.toString().length-1);if(this.$slider.attr("id")===d)return{sliderID:d,slideId:c}}return!1},_gotoHash:function(a){var b=this._parseHash(a);if(b!==!1){var c=b.slideId,d=parseInt(c,10);if(isNaN(d)){var e=this.$slider.find(".sp-slide#"+c).index();-1!==e&&e!==this.selectedSlideIndex&&this.gotoSlide(e)}else d!==this.selectedSlideIndex&&this.gotoSlide(d)}},destroyDeepLinking:function(){this.off("init."+c),this.off("gotoSlide."+c),b(a).off("hashchange."+this.uniqueId+"."+c)},deepLinkingDefaults:{updateHash:!1}};b.SliderPro.addModule("DeepLinking",d)}(window,jQuery),function(a,b){"use strict";var c="Autoplay."+b.SliderPro.namespace,d={autoplayTimer:null,isTimerRunning:!1,isTimerPaused:!1,initAutoplay:function(){this.on("update."+c,b.proxy(this._autoplayOnUpdate,this))},_autoplayOnUpdate:function(){this.settings.autoplay===!0?(this.on("gotoSlide."+c,b.proxy(this._autoplayOnGotoSlide,this)),this.on("mouseenter."+c,b.proxy(this._autoplayOnMouseEnter,this)),this.on("mouseleave."+c,b.proxy(this._autoplayOnMouseLeave,this)),this.startAutoplay()):(this.off("gotoSlide."+c),this.off("mouseenter."+c),this.off("mouseleave."+c),this.stopAutoplay())},_autoplayOnGotoSlide:function(){this.isTimerRunning===!0&&this.stopAutoplay(),this.isTimerPaused===!1&&this.startAutoplay()},_autoplayOnMouseEnter:function(){!this.isTimerRunning||"pause"!==this.settings.autoplayOnHover&&"stop"!==this.settings.autoplayOnHover||(this.stopAutoplay(),this.isTimerPaused=!0)},_autoplayOnMouseLeave:function(){this.settings.autoplay===!0&&this.isTimerRunning===!1&&"stop"!==this.settings.autoplayOnHover&&(this.startAutoplay(),this.isTimerPaused=!1)},startAutoplay:function(){var a=this;this.isTimerRunning=!0,this.autoplayTimer=setTimeout(function(){"normal"===a.settings.autoplayDirection?a.nextSlide():"backwards"===a.settings.autoplayDirection&&a.previousSlide()},this.settings.autoplayDelay)},stopAutoplay:function(){this.isTimerRunning=!1,this.isTimerPaused=!1,clearTimeout(this.autoplayTimer)},destroyAutoplay:function(){clearTimeout(this.autoplayTimer),this.off("update."+c),this.off("gotoSlide."+c),this.off("mouseenter."+c),this.off("mouseleave."+c)},autoplayDefaults:{autoplay:!0,autoplayDelay:5e3,autoplayDirection:"normal",autoplayOnHover:"pause"}};b.SliderPro.addModule("Autoplay",d)}(window,jQuery),function(a,b){"use strict";var c="Keyboard."+b.SliderPro.namespace,d={initKeyboard:function(){var a=this,d=!1;this.settings.keyboard!==!1&&(this.$slider.on("focus."+c,function(){d=!0}),this.$slider.on("blur."+c,function(){d=!1}),b(document).on("keydown."+this.uniqueId+"."+c,function(b){(a.settings.keyboardOnlyOnFocus!==!0||d!==!1)&&(37===b.which?a.previousSlide():39===b.which?a.nextSlide():13===b.which&&a.$slider.find(".sp-slide").eq(a.selectedSlideIndex).find(".sp-image-container a")[0].click())}))},destroyKeyboard:function(){this.$slider.off("focus."+c),this.$slider.off("blur."+c),b(document).off("keydown."+this.uniqueId+"."+c)
	},keyboardDefaults:{keyboard:!0,keyboardOnlyOnFocus:!1}};b.SliderPro.addModule("Keyboard",d)}(window,jQuery),function(a,b){"use strict";var c="FullScreen."+b.SliderPro.namespace,d={isFullScreen:!1,$fullScreenButton:null,sizeBeforeFullScreen:{},initFullScreen:function(){(document.fullscreenEnabled||document.webkitFullscreenEnabled||document.mozFullScreenEnabled||document.msFullscreenEnabled)&&this.on("update."+c,b.proxy(this._fullScreenOnUpdate,this))},_fullScreenOnUpdate:function(){this.settings.fullScreen===!0&&null===this.$fullScreenButton?this._addFullScreen():this.settings.fullScreen===!1&&null!==this.$fullScreenButton&&this._removeFullScreen(),this.settings.fullScreen===!0&&(this.settings.fadeFullScreen===!0?this.$fullScreenButton.addClass("sp-fade-full-screen"):this.settings.fadeFullScreen===!1&&this.$fullScreenButton.removeClass("sp-fade-full-screen"))},_addFullScreen:function(){this.$fullScreenButton=b('<div class="sp-full-screen-button"></div>').appendTo(this.$slider),this.$fullScreenButton.on("click."+c,b.proxy(this._onFullScreenButtonClick,this)),document.addEventListener("fullscreenchange",b.proxy(this._onFullScreenChange,this)),document.addEventListener("mozfullscreenchange",b.proxy(this._onFullScreenChange,this)),document.addEventListener("webkitfullscreenchange",b.proxy(this._onFullScreenChange,this)),document.addEventListener("MSFullscreenChange",b.proxy(this._onFullScreenChange,this))},_removeFullScreen:function(){null!==this.$fullScreenButton&&(this.$fullScreenButton.off("click."+c),this.$fullScreenButton.remove(),this.$fullScreenButton=null,document.removeEventListener("fullscreenchange",this._onFullScreenChange),document.removeEventListener("mozfullscreenchange",this._onFullScreenChange),document.removeEventListener("webkitfullscreenchange",this._onFullScreenChange),document.removeEventListener("MSFullscreenChange",this._onFullScreenChange))},_onFullScreenButtonClick:function(){this.isFullScreen===!1?this.instance.requestFullScreen?this.instance.requestFullScreen():this.instance.mozRequestFullScreen?this.instance.mozRequestFullScreen():this.instance.webkitRequestFullScreen?this.instance.webkitRequestFullScreen():this.instance.msRequestFullscreen&&this.instance.msRequestFullscreen():document.exitFullScreen?document.exitFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen()},_onFullScreenChange:function(){this.isFullScreen=document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement?!0:!1,this.isFullScreen===!0?(this.sizeBeforeFullScreen={forceSize:this.settings.forceSize,autoHeight:this.settings.autoHeight},this.$slider.addClass("sp-full-screen"),this.settings.forceSize="fullWindow",this.settings.autoHeight=!1):(this.$slider.css("margin",""),this.$slider.removeClass("sp-full-screen"),this.settings.forceSize=this.sizeBeforeFullScreen.forceSize,this.settings.autoHeight=this.sizeBeforeFullScreen.autoHeight),this.resize()},destroyFullScreen:function(){this.off("update."+c),this._removeFullScreen()},fullScreenDefaults:{fullScreen:!1,fadeFullScreen:!0}};b.SliderPro.addModule("FullScreen",d)}(window,jQuery),function(a,b){"use strict";var c="Buttons."+b.SliderPro.namespace,d={$buttons:null,initButtons:function(){this.on("update."+c,b.proxy(this._buttonsOnUpdate,this))},_buttonsOnUpdate:function(){this.$buttons=this.$slider.find(".sp-buttons"),this.settings.buttons===!0&&this.getTotalSlides()>1&&0===this.$buttons.length?this._createButtons():this.settings.buttons===!0&&this.getTotalSlides()!==this.$buttons.find(".sp-button").length&&0!==this.$buttons.length?this._adjustButtons():(this.settings.buttons===!1||this.getTotalSlides()<=1&&0!==this.$buttons.length)&&this._removeButtons()},_createButtons:function(){var a=this;this.$buttons=b('<div class="sp-buttons"></div>').appendTo(this.$slider);for(var d=0;d<this.getTotalSlides();d++)b('<div class="sp-button"></div>').appendTo(this.$buttons);this.$buttons.on("click."+c,".sp-button",function(){a.gotoSlide(b(this).index())}),this.$buttons.find(".sp-button").eq(this.selectedSlideIndex).addClass("sp-selected-button"),this.on("gotoSlide."+c,function(b){a.$buttons.find(".sp-selected-button").removeClass("sp-selected-button"),a.$buttons.find(".sp-button").eq(b.index).addClass("sp-selected-button")}),this.$slider.addClass("sp-has-buttons")},_adjustButtons:function(){this.$buttons.empty();for(var a=0;a<this.getTotalSlides();a++)b('<div class="sp-button"></div>').appendTo(this.$buttons);this.$buttons.find(".sp-selected-button").removeClass("sp-selected-button"),this.$buttons.find(".sp-button").eq(this.selectedSlideIndex).addClass("sp-selected-button")},_removeButtons:function(){this.$buttons.off("click."+c,".sp-button"),this.off("gotoSlide."+c),this.$buttons.remove(),this.$slider.removeClass("sp-has-buttons")},destroyButtons:function(){this._removeButtons(),this.off("update."+c)},buttonsDefaults:{buttons:!0}};b.SliderPro.addModule("Buttons",d)}(window,jQuery),function(a,b){"use strict";var c="Arrows."+b.SliderPro.namespace,d={$arrows:null,$previousArrow:null,$nextArrow:null,initArrows:function(){this.on("update."+c,b.proxy(this._arrowsOnUpdate,this)),this.on("gotoSlide."+c,b.proxy(this._checkArrowsVisibility,this))},_arrowsOnUpdate:function(){var a=this;this.settings.arrows===!0&&null===this.$arrows?(this.$arrows=b('<div class="sp-arrows"></div>').appendTo(this.$slidesContainer),this.$previousArrow=b('<div class="sp-arrow sp-previous-arrow"></div>').appendTo(this.$arrows),this.$nextArrow=b('<div class="sp-arrow sp-next-arrow"></div>').appendTo(this.$arrows),this.$previousArrow.on("click."+c,function(){a.previousSlide()}),this.$nextArrow.on("click."+c,function(){a.nextSlide()}),this._checkArrowsVisibility()):this.settings.arrows===!1&&null!==this.$arrows&&this._removeArrows(),this.settings.arrows===!0&&(this.settings.fadeArrows===!0?this.$arrows.addClass("sp-fade-arrows"):this.settings.fadeArrows===!1&&this.$arrows.removeClass("sp-fade-arrows"))},_checkArrowsVisibility:function(){this.settings.arrows!==!1&&this.settings.loop!==!0&&(0===this.selectedSlideIndex?this.$previousArrow.css("display","none"):this.$previousArrow.css("display","block"),this.selectedSlideIndex===this.getTotalSlides()-1?this.$nextArrow.css("display","none"):this.$nextArrow.css("display","block"))},_removeArrows:function(){null!==this.$arrows&&(this.$previousArrow.off("click."+c),this.$nextArrow.off("click."+c),this.$arrows.remove(),this.$arrows=null)},destroyArrows:function(){this._removeArrows(),this.off("update."+c),this.off("gotoSlide."+c)},arrowsDefaults:{arrows:!1,fadeArrows:!0}};b.SliderPro.addModule("Arrows",d)}(window,jQuery),function(a,b){"use strict";var c="ThumbnailTouchSwipe."+b.SliderPro.namespace,d={thumbnailTouchStartPoint:{x:0,y:0},thumbnailTouchEndPoint:{x:0,y:0},thumbnailTouchDistance:{x:0,y:0},thumbnailTouchStartPosition:0,isThumbnailTouchMoving:!1,isThumbnailTouchSwipe:!1,thumbnailTouchSwipeEvents:{startEvent:"",moveEvent:"",endEvent:""},initThumbnailTouchSwipe:function(){this.on("update."+c,b.proxy(this._thumbnailTouchSwipeOnUpdate,this))},_thumbnailTouchSwipeOnUpdate:function(){this.isThumbnailScroller!==!1&&(this.settings.thumbnailTouchSwipe===!0&&this.isThumbnailTouchSwipe===!1&&(this.isThumbnailTouchSwipe=!0,this.thumbnailTouchSwipeEvents.startEvent="touchstart."+c+" mousedown."+c,this.thumbnailTouchSwipeEvents.moveEvent="touchmove."+c+" mousemove."+c,this.thumbnailTouchSwipeEvents.endEvent="touchend."+this.uniqueId+"."+c+" mouseup."+this.uniqueId+"."+c,this.$thumbnails.on(this.thumbnailTouchSwipeEvents.startEvent,b.proxy(this._onThumbnailTouchStart,this)),this.$thumbnails.on("dragstart."+c,function(a){a.preventDefault()}),this.$thumbnails.addClass("sp-grab")),b.each(this.thumbnails,function(a,b){b.off("thumbnailClick")}))},_onThumbnailTouchStart:function(a){if(!(b(a.target).closest(".sp-selectable").length>=1)){var d="undefined"!=typeof a.originalEvent.touches?a.originalEvent.touches[0]:a.originalEvent;"undefined"==typeof a.originalEvent.touches&&a.preventDefault(),b(a.target).parents(".sp-thumbnail-container").find("a").one("click."+c,function(a){a.preventDefault()}),this.thumbnailTouchStartPoint.x=d.pageX||d.clientX,this.thumbnailTouchStartPoint.y=d.pageY||d.clientY,this.thumbnailTouchStartPosition=this.thumbnailsPosition,this.thumbnailTouchDistance.x=this.thumbnailTouchDistance.y=0,this.$thumbnails.hasClass("sp-animated")&&(this.isThumbnailTouchMoving=!0,this._stopThumbnailsMovement(),this.thumbnailTouchStartPosition=this.thumbnailsPosition),this.$thumbnails.on(this.thumbnailTouchSwipeEvents.moveEvent,b.proxy(this._onThumbnailTouchMove,this)),b(document).on(this.thumbnailTouchSwipeEvents.endEvent,b.proxy(this._onThumbnailTouchEnd,this)),this.$thumbnails.removeClass("sp-grab").addClass("sp-grabbing"),this.$thumbnailsContainer.addClass("sp-swiping")}},_onThumbnailTouchMove:function(a){var b="undefined"!=typeof a.originalEvent.touches?a.originalEvent.touches[0]:a.originalEvent;this.isThumbnailTouchMoving=!0,this.thumbnailTouchEndPoint.x=b.pageX||b.clientX,this.thumbnailTouchEndPoint.y=b.pageY||b.clientY,this.thumbnailTouchDistance.x=this.thumbnailTouchEndPoint.x-this.thumbnailTouchStartPoint.x,this.thumbnailTouchDistance.y=this.thumbnailTouchEndPoint.y-this.thumbnailTouchStartPoint.y;var c="horizontal"===this.thumbnailsOrientation?this.thumbnailTouchDistance.x:this.thumbnailTouchDistance.y,d="horizontal"===this.thumbnailsOrientation?this.thumbnailTouchDistance.y:this.thumbnailTouchDistance.x;if(Math.abs(c)>Math.abs(d)){if(a.preventDefault(),this.thumbnailsPosition>=0){var e=-this.thumbnailTouchStartPosition;c=e+.2*(c-e)}else if(this.thumbnailsPosition<=-this.thumbnailsSize+this.thumbnailsContainerSize){var f=this.thumbnailsSize-this.thumbnailsContainerSize+this.thumbnailTouchStartPosition;c=-f+.2*(c+f)}this._moveThumbnailsTo(this.thumbnailTouchStartPosition+c,!0)}},_onThumbnailTouchEnd:function(a){{var d=this;"horizontal"===this.thumbnailsOrientation?this.thumbnailTouchDistance.x:this.thumbnailTouchDistance.y}if(this.$thumbnails.off(this.thumbnailTouchSwipeEvents.moveEvent),b(document).off(this.thumbnailTouchSwipeEvents.endEvent),this.$thumbnails.removeClass("sp-grabbing").addClass("sp-grab"),this.isThumbnailTouchMoving===!1||this.isThumbnailTouchMoving===!0&&Math.abs(this.thumbnailTouchDistance.x)<10&&Math.abs(this.thumbnailTouchDistance.y)<10){var e=b(a.target).hasClass("sp-thumbnail-container")?b(a.target):b(a.target).parents(".sp-thumbnail-container"),f=e.index();return void(0!==b(a.target).parents("a").length?(b(a.target).parents("a").off("click."+c),this.$thumbnailsContainer.removeClass("sp-swiping")):f!==this.selectedThumbnailIndex&&-1!==f&&this.gotoSlide(f))}this.isThumbnailTouchMoving=!1,b(a.target).parents(".sp-thumbnail").one("click",function(a){a.preventDefault()}),setTimeout(function(){d.$thumbnailsContainer.removeClass("sp-swiping")},1),this.thumbnailsPosition>0?this._moveThumbnailsTo(0):this.thumbnailsPosition<this.thumbnailsContainerSize-this.thumbnailsSize&&this._moveThumbnailsTo(this.thumbnailsContainerSize-this.thumbnailsSize),this.trigger({type:"thumbnailsMoveComplete"}),b.isFunction(this.settings.thumbnailsMoveComplete)&&this.settings.thumbnailsMoveComplete.call(this,{type:"thumbnailsMoveComplete"})},destroyThumbnailTouchSwipe:function(){this.off("update."+c),this.isThumbnailScroller!==!1&&(this.$thumbnails.off(this.thumbnailTouchSwipeEvents.startEvent),this.$thumbnails.off(this.thumbnailTouchSwipeEvents.moveEvent),this.$thumbnails.off("dragstart."+c),b(document).off(this.thumbnailTouchSwipeEvents.endEvent),this.$thumbnails.removeClass("sp-grab"))},thumbnailTouchSwipeDefaults:{thumbnailTouchSwipe:!0}};b.SliderPro.addModule("ThumbnailTouchSwipe",d)}(window,jQuery),function(a,b){"use strict";var c="ThumbnailArrows."+b.SliderPro.namespace,d={$thumbnailArrows:null,$previousThumbnailArrow:null,$nextThumbnailArrow:null,initThumbnailArrows:function(){var a=this;this.on("update."+c,b.proxy(this._thumbnailArrowsOnUpdate,this)),this.on("sliderResize."+c+" thumbnailsMoveComplete."+c,function(){a.isThumbnailScroller===!0&&a.settings.thumbnailArrows===!0&&a._checkThumbnailArrowsVisibility()})},_thumbnailArrowsOnUpdate:function(){var a=this;this.isThumbnailScroller!==!1&&(this.settings.thumbnailArrows===!0&&null===this.$thumbnailArrows?(this.$thumbnailArrows=b('<div class="sp-thumbnail-arrows"></div>').appendTo(this.$thumbnailsContainer),this.$previousThumbnailArrow=b('<div class="sp-thumbnail-arrow sp-previous-thumbnail-arrow"></div>').appendTo(this.$thumbnailArrows),this.$nextThumbnailArrow=b('<div class="sp-thumbnail-arrow sp-next-thumbnail-arrow"></div>').appendTo(this.$thumbnailArrows),this.$previousThumbnailArrow.on("click."+c,function(){var b=Math.min(0,a.thumbnailsPosition+a.thumbnailsContainerSize);a._moveThumbnailsTo(b)}),this.$nextThumbnailArrow.on("click."+c,function(){var b=Math.max(a.thumbnailsContainerSize-a.thumbnailsSize,a.thumbnailsPosition-a.thumbnailsContainerSize);a._moveThumbnailsTo(b)})):this.settings.thumbnailArrows===!1&&null!==this.$thumbnailArrows&&this._removeThumbnailArrows(),this.settings.thumbnailArrows===!0&&(this.settings.fadeThumbnailArrows===!0?this.$thumbnailArrows.addClass("sp-fade-thumbnail-arrows"):this.settings.fadeThumbnailArrows===!1&&this.$thumbnailArrows.removeClass("sp-fade-thumbnail-arrows"),this._checkThumbnailArrowsVisibility()))},_checkThumbnailArrowsVisibility:function(){0===this.thumbnailsPosition?this.$previousThumbnailArrow.css("display","none"):this.$previousThumbnailArrow.css("display","block"),this.thumbnailsPosition===this.thumbnailsContainerSize-this.thumbnailsSize?this.$nextThumbnailArrow.css("display","none"):this.$nextThumbnailArrow.css("display","block")},_removeThumbnailArrows:function(){null!==this.$thumbnailArrows&&(this.$previousThumbnailArrow.off("click."+c),this.$nextThumbnailArrow.off("click."+c),this.$thumbnailArrows.remove(),this.$thumbnailArrows=null)},destroyThumbnailArrows:function(){this._removeThumbnailArrows(),this.off("update."+c),this.off("sliderResize."+c),this.off("thumbnailsMoveComplete."+c)},thumbnailArrowsDefaults:{thumbnailArrows:!1,fadeThumbnailArrows:!0}};b.SliderPro.addModule("ThumbnailArrows",d)}(window,jQuery),function(a,b){"use strict";var c="Video."+b.SliderPro.namespace,d={initVideo:function(){this.on("update."+c,b.proxy(this._videoOnUpdate,this)),this.on("gotoSlideComplete."+c,b.proxy(this._videoOnGotoSlideComplete,this))},_videoOnUpdate:function(){var a=this;this.$slider.find(".sp-video").not("a, [data-video-init]").each(function(){var c=b(this);a._initVideo(c)}),this.$slider.find("a.sp-video").not("[data-video-preinit]").each(function(){var c=b(this);a._preinitVideo(c)})},_initVideo:function(a){var d=this;a.attr("data-video-init",!0).videoController(),a.on("videoPlay."+c,function(){"stopAutoplay"===d.settings.playVideoAction&&"undefined"!=typeof d.stopAutoplay&&(d.stopAutoplay(),d.settings.autoplay=!1);var c={type:"videoPlay",video:a};d.trigger(c),b.isFunction(d.settings.videoPlay)&&d.settings.videoPlay.call(d,c)}),a.on("videoPause."+c,function(){"startAutoplay"===d.settings.pauseVideoAction&&"undefined"!=typeof d.startAutoplay&&(d.startAutoplay(),d.settings.autoplay=!0);var c={type:"videoPause",video:a};d.trigger(c),b.isFunction(d.settings.videoPause)&&d.settings.videoPause.call(d,c)}),a.on("videoEnded."+c,function(){"startAutoplay"===d.settings.endVideoAction&&"undefined"!=typeof d.startAutoplay?(d.startAutoplay(),d.settings.autoplay=!0):"nextSlide"===d.settings.endVideoAction?d.nextSlide():"replayVideo"===d.settings.endVideoAction&&a.videoController("replay");var c={type:"videoEnd",video:a};d.trigger(c),b.isFunction(d.settings.videoEnd)&&d.settings.videoEnd.call(d,c)})},_preinitVideo:function(a){var d=this;a.attr("data-video-preinit",!0),a.on("click."+c,function(c){if(!d.$slider.hasClass("sp-swiping")){c.preventDefault();var e,f,g,h,i,j,k,l=a.attr("href"),m=a.children("img").attr("width"),n=a.children("img").attr("height");-1!==l.indexOf("youtube")||-1!==l.indexOf("youtu.be")?f="youtube":-1!==l.indexOf("vimeo")&&(f="vimeo"),g="youtube"===f?/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/:/http:\/\/(www\.)?vimeo.com\/(\d+)/,h=l.match(g),i=h[2],j="youtube"===f?"http://www.youtube.com/embed/"+i+"?enablejsapi=1&wmode=opaque":"http://player.vimeo.com/video/"+i+"?api=1",k=l.split("?")[1],"undefined"!=typeof k&&(k=k.split("&"),b.each(k,function(a,b){-1===b.indexOf(i)&&(j+="&"+b)})),e=b("<iframe></iframe>").attr({src:j,width:m,height:n,"class":a.attr("class"),frameborder:0}).insertBefore(a),d._initVideo(e),e.videoController("play"),a.css("display","none")}})},_videoOnGotoSlideComplete:function(a){var b=this.$slides.find(".sp-slide").eq(a.previousIndex).find(".sp-video[data-video-init]");if(-1!==a.previousIndex&&0!==b.length&&("stopVideo"===this.settings.leaveVideoAction?b.videoController("stop"):"pauseVideo"===this.settings.leaveVideoAction?b.videoController("pause"):"removeVideo"===this.settings.leaveVideoAction&&(0!==b.siblings("a.sp-video").length?(b.siblings("a.sp-video").css("display",""),b.videoController("destroy"),b.remove()):b.videoController("stop"))),"playVideo"===this.settings.reachVideoAction){var d=this.$slides.find(".sp-slide").eq(a.index).find(".sp-video[data-video-init]"),e=this.$slides.find(".sp-slide").eq(a.index).find(".sp-video[data-video-preinit]");0!==d.length?d.videoController("play"):0!==e.length&&e.trigger("click."+c)}},destroyVideo:function(){this.$slider.find(".sp-video[ data-video-preinit ]").each(function(){var a=b(this);a.removeAttr("data-video-preinit"),a.off("click."+c)}),this.$slider.find(".sp-video[ data-video-init ]").each(function(){var a=b(this);a.removeAttr("data-video-init"),a.off("Video"),a.videoController("destroy")}),this.off("update."+c),this.off("gotoSlideComplete."+c)},videoDefaults:{reachVideoAction:"none",leaveVideoAction:"pauseVideo",playVideoAction:"stopAutoplay",pauseVideoAction:"none",endVideoAction:"none",videoPlay:function(){},videoPause:function(){},videoEnd:function(){}}};b.SliderPro.addModule("Video",d)}(window,jQuery),function(a){"use strict";var b=window.navigator.userAgent.match(/(iPad|iPhone|iPod)/g)?!0:!1,c=function(b,c){this.$video=a(b),this.options=c,this.settings={},this.player=null,this._init()};c.prototype={_init:function(){this.settings=a.extend({},this.defaults,this.options);var b=this,c=a.VideoController.players,d=this.$video.attr("id");for(var e in c)if("undefined"!=typeof c[e]&&c[e].isType(this.$video)){this.player=new c[e](this.$video);break}if(null!==this.player){var f=["ready","start","play","pause","ended"];a.each(f,function(c,e){var f="video"+e.charAt(0).toUpperCase()+e.slice(1);b.player.on(e,function(){b.trigger({type:f,video:d}),a.isFunction(b.settings[f])&&b.settings[f].call(b,{type:f,video:d})})})}},play:function(){b===!0&&this.player.isStarted()===!1||"playing"===this.player.getState()||this.player.play()},stop:function(){b===!0&&this.player.isStarted()===!1||"stopped"===this.player.getState()||this.player.stop()},pause:function(){b===!0&&this.player.isStarted()===!1||"paused"===this.player.getState()||this.player.pause()},replay:function(){(b!==!0||this.player.isStarted()!==!1)&&this.player.replay()},on:function(a,b){return this.$video.on(a,b)},off:function(a){return this.$video.off(a)},trigger:function(a){return this.$video.triggerHandler(a)},destroy:function(){this.player.isStarted()===!0&&this.stop(),this.player.off("ready"),this.player.off("start"),this.player.off("play"),this.player.off("pause"),this.player.off("ended"),this.$video.removeData("videoController")},defaults:{videoReady:function(){},videoStart:function(){},videoPlay:function(){},videoPause:function(){},videoEnded:function(){}}},a.VideoController={players:{},addPlayer:function(a,b){this.players[a]=b}},a.fn.videoController=function(b){var d=Array.prototype.slice.call(arguments,1);return this.each(function(){if("undefined"==typeof a(this).data("videoController")){var e=new c(this,b);a(this).data("videoController",e)}else if("undefined"!=typeof b){var f=a(this).data("videoController");"function"==typeof f[b]?f[b].apply(f,d):a.error(b+" does not exist in videoController.")}})};var d=function(b){this.$video=b,this.player=null,this.ready=!1,this.started=!1,this.state="",this.events=a({}),this._init()};d.prototype={_init:function(){},play:function(){},pause:function(){},stop:function(){},replay:function(){},isType:function(){},isReady:function(){return this.ready},isStarted:function(){return this.started},getState:function(){return this.state},on:function(a,b){return this.events.on(a,b)},off:function(a){return this.events.off(a)},trigger:function(a){return this.events.triggerHandler(a)}};var e={youtubeAPIAdded:!1,youtubeVideos:[]},f=function(b){this.init=!1;var c=window.YT&&window.YT.Player;if("undefined"!=typeof c)d.call(this,b);else if(e.youtubeVideos.push({video:b,scope:this}),e.youtubeAPIAdded===!1){e.youtubeAPIAdded=!0;var f=document.createElement("script");f.src="http://www.youtube.com/player_api";var g=document.getElementsByTagName("script")[0];g.parentNode.insertBefore(f,g),window.onYouTubePlayerAPIReady=function(){a.each(e.youtubeVideos,function(a,b){d.call(b.scope,b.video)})}}};f.prototype=new d,f.prototype.constructor=f,a.VideoController.addPlayer("YoutubeVideo",f),f.isType=function(a){if(a.is("iframe")){var b=a.attr("src");if(-1!==b.indexOf("youtube.com")||-1!==b.indexOf("youtu.be"))return!0}return!1},f.prototype._init=function(){this.init=!0,this._setup()},f.prototype._setup=function(){var a=this;this.player=new YT.Player(this.$video[0],{events:{onReady:function(){a.trigger({type:"ready"}),a.ready=!0},onStateChange:function(b){switch(b.data){case YT.PlayerState.PLAYING:a.started===!1&&(a.started=!0,a.trigger({type:"start"})),a.state="playing",a.trigger({type:"play"});break;case YT.PlayerState.PAUSED:a.state="paused",a.trigger({type:"pause"});break;case YT.PlayerState.ENDED:a.state="ended",a.trigger({type:"ended"})}}}})},f.prototype.play=function(){var a=this;if(this.ready===!0)this.player.playVideo();else var b=setInterval(function(){a.ready===!0&&(clearInterval(b),a.player.playVideo())},100)},f.prototype.pause=function(){b===!0?this.stop():this.player.pauseVideo()},f.prototype.stop=function(){this.player.seekTo(1),this.player.stopVideo(),this.state="stopped"},f.prototype.replay=function(){this.player.seekTo(1),this.player.playVideo()},f.prototype.on=function(a,b){var c=this;if(this.init===!0)d.prototype.on.call(this,a,b);else var e=setInterval(function(){c.init===!0&&(clearInterval(e),d.prototype.on.call(c,a,b))},100)};var g={vimeoAPIAdded:!1,vimeoVideos:[]},h=function(b){if(this.init=!1,"undefined"!=typeof window.Froogaloop)d.call(this,b);else if(g.vimeoVideos.push({video:b,scope:this}),g.vimeoAPIAdded===!1){g.vimeoAPIAdded=!0;var c=document.createElement("script");c.src="http://a.vimeocdn.com/js/froogaloop2.min.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(c,e);var f=setInterval(function(){"undefined"!=typeof window.Froogaloop&&(clearInterval(f),a.each(g.vimeoVideos,function(a,b){d.call(b.scope,b.video)}))},100)}};h.prototype=new d,h.prototype.constructor=h,a.VideoController.addPlayer("VimeoVideo",h),h.isType=function(a){if(a.is("iframe")){var b=a.attr("src");if(-1!==b.indexOf("vimeo.com"))return!0}return!1},h.prototype._init=function(){this.init=!0,this._setup()},h.prototype._setup=function(){var a=this;this.player=$f(this.$video[0]),this.player.addEvent("ready",function(){a.ready=!0,a.trigger({type:"ready"}),a.player.addEvent("play",function(){a.started===!1&&(a.started=!0,a.trigger({type:"start"})),a.state="playing",a.trigger({type:"play"})}),a.player.addEvent("pause",function(){a.state="paused",a.trigger({type:"pause"})}),a.player.addEvent("finish",function(){a.state="ended",a.trigger({type:"ended"})})})},h.prototype.play=function(){var a=this;if(this.ready===!0)this.player.api("play");else var b=setInterval(function(){a.ready===!0&&(clearInterval(b),a.player.api("play"))},100)},h.prototype.pause=function(){this.player.api("pause")},h.prototype.stop=function(){this.player.api("seekTo",0),this.player.api("pause"),this.state="stopped"},h.prototype.replay=function(){this.player.api("seekTo",0),this.player.api("play")},h.prototype.on=function(a,b){var c=this;if(this.init===!0)d.prototype.on.call(this,a,b);else var e=setInterval(function(){c.init===!0&&(clearInterval(e),d.prototype.on.call(c,a,b))},100)};var i=function(a){d.call(this,a)};i.prototype=new d,i.prototype.constructor=i,a.VideoController.addPlayer("HTML5Video",i),i.isType=function(a){return a.is("video")&&a.hasClass("video-js")===!1&&a.hasClass("sublime")===!1?!0:!1},i.prototype._init=function(){var a=this;this.player=this.$video[0],this.ready=!0,this.player.addEventListener("play",function(){a.started===!1&&(a.started=!0,a.trigger({type:"start"})),a.state="playing",a.trigger({type:"play"})}),this.player.addEventListener("pause",function(){a.state="paused",a.trigger({type:"pause"})}),this.player.addEventListener("ended",function(){a.state="ended",a.trigger({type:"ended"})})},i.prototype.play=function(){this.player.play()},i.prototype.pause=function(){this.player.pause()},i.prototype.stop=function(){this.player.currentTime=0,this.player.pause(),this.state="stopped"},i.prototype.replay=function(){this.player.currentTime=0,this.player.play()};var j=function(a){d.call(this,a)};j.prototype=new d,j.prototype.constructor=j,a.VideoController.addPlayer("VideoJSVideo",j),j.isType=function(a){return"undefined"==typeof a.attr("data-videojs-id")&&!a.hasClass("video-js")||"undefined"==typeof videojs?!1:!0},j.prototype._init=function(){var a=this,b=this.$video.attr(this.$video.hasClass("video-js")?"id":"data-videojs-id");this.player=videojs(b),this.player.ready(function(){a.ready=!0,a.trigger({type:"ready"}),a.player.on("play",function(){a.started===!1&&(a.started=!0,a.trigger({type:"start"})),a.state="playing",a.trigger({type:"play"})}),a.player.on("pause",function(){a.state="paused",a.trigger({type:"pause"})}),a.player.on("ended",function(){a.state="ended",a.trigger({type:"ended"})})})},j.prototype.play=function(){this.player.play()},j.prototype.pause=function(){this.player.pause()},j.prototype.stop=function(){this.player.currentTime(0),this.player.pause(),this.state="stopped"},j.prototype.replay=function(){this.player.currentTime(0),this.player.play()};var k=function(a){d.call(this,a)};k.prototype=new d,k.prototype.constructor=k,a.VideoController.addPlayer("SublimeVideo",k),k.isType=function(a){return a.hasClass("sublime")&&"undefined"!=typeof sublime?!0:!1},k.prototype._init=function(){var a=this;sublime.ready(function(){a.player=sublime.player(a.$video.attr("id")),a.ready=!0,a.trigger({type:"ready"}),a.player.on("play",function(){a.started===!1&&(a.started=!0,a.trigger({type:"start"})),a.state="playing",a.trigger({type:"play"})}),a.player.on("pause",function(){a.state="paused",a.trigger({type:"pause"})}),a.player.on("stop",function(){a.state="stopped",a.trigger({type:"stop"})}),a.player.on("end",function(){a.state="ended",a.trigger({type:"ended"})})})},k.prototype.play=function(){this.player.play()},k.prototype.pause=function(){this.player.pause()},k.prototype.stop=function(){this.player.stop()},k.prototype.replay=function(){this.player.stop(),this.player.play()};var l=function(a){d.call(this,a)};l.prototype=new d,l.prototype.constructor=l,a.VideoController.addPlayer("JWPlayerVideo",l),l.isType=function(a){return"undefined"==typeof a.attr("data-jwplayer-id")&&!a.hasClass("jwplayer")&&0===a.find("object[data*='jwplayer']").length||"undefined"==typeof jwplayer?!1:!0},l.prototype._init=function(){var a,b=this;this.$video.hasClass("jwplayer")?a=this.$video.attr("id"):"undefined"!=typeof this.$video.attr("data-jwplayer-id")?a=this.$video.attr("data-jwplayer-id"):0!==this.$video.find("object[data*='jwplayer']").length&&(a=this.$video.find("object").attr("id")),this.player=jwplayer(a),this.player.onReady(function(){b.ready=!0,b.trigger({type:"ready"}),b.player.onPlay(function(){b.started===!1&&(b.started=!0,b.trigger({type:"start"})),b.state="playing",b.trigger({type:"play"})}),b.player.onPause(function(){b.state="paused",b.trigger({type:"pause"})}),b.player.onComplete(function(){b.state="ended",b.trigger({type:"ended"})})})},l.prototype.play=function(){this.player.play(!0)},l.prototype.pause=function(){this.player.pause(!0)},l.prototype.stop=function(){this.player.stop(),this.state="stopped"},l.prototype.replay=function(){this.player.seek(0),this.player.play(!0)}}(jQuery);

/***/ }),
/* 9 */
/***/ (function(module, exports) {

	$(function () {

	  $(".HeaderMenu a,.HeaderGnav a").on("click", function () {
	    $(".HeaderMenu,.HeaderGnav").toggleClass('open');
	    return;
	  });

	});

/***/ }),
/* 10 */
/***/ (function(module, exports) {

	$(function () {

	    if (Modernizr.touchevents) {
	        var thisAnchor;
	        var linkTouchStart = function () {
	            thisAnchor = $(this);
	            var touchPos = thisAnchor.offset().top;
	            var moveCheck = function () {
	                var nowPos = thisAnchor.offset().top;
	                if (touchPos == nowPos) {
	                    thisAnchor.addClass("touch");
	                    console.log("addtouch");
	                }
	            };
	            setTimeout(moveCheck, 100);
	        };
	        var linkTouchEnd = function () {
	            thisAnchor = $(this);
	            var hoverRemove = function () {
	                thisAnchor.removeClass("touch");
	                console.log("removetouch");
	            };
	            setTimeout(hoverRemove, 200);
	        };
	        $(document).on('touchstart', 'a', linkTouchStart);
	        $(document).on('touchend', 'a', linkTouchEnd);
	    };

	});


/***/ }),
/* 11 */
/***/ (function(module, exports) {

	$(function () {

	  var amount = 100;
	  var $pagetop = $("#pagetop a");
	  $pagetop.hide();

	  $(window).on("load scroll resize", function () {
	    var scrollSize = $(window).scrollTop();
	    if (scrollSize < amount) {
	      $pagetop.fadeOut();
	    } else if (scrollSize > amount) {
	      $pagetop.fadeIn();
	    }
	  });

	});

	smoothScroll.init({
	  speed: 500,
	  updateURL: false,
	  //offset: 100
	});

/***/ }),
/* 12 */
/***/ (function(module, exports) {

	
	$(document).ready(function() {

	    //input type=hidden のバリデーション
	    $("input:hidden").each(function(i, e) {
	        validate(e);
	    });

	    $("input,textarea").change(function() {
	        validate(this);
	    });

	    $("input,textarea").focus(function() {
	        var me = this;
	        var flag = true;
	        $("input,textarea").each(function(i, e) {
	            //focusした自分のところに来たら、その位置をcounterに格納
	            if (me == e) {
	                flag = false;
	            }
	            validate(e, flag);
	        });
	    });

	    //enterキー殺す
	    $("input").keydown(function(e) {
	        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
	            return false;
	        } else {
	            return true;
	        }
	    });

	    $(".formBtn-submit").removeClass("ok").prop("disabled", true);
	    $(".submitbutton").addClass("error");
	});

	function validate(e, flag) {
	  if(flag === undefined){
	    flag =true;
	  }
	    if (e.type == "text" || e.tagName == "TEXTAREA" || e.type == "hidden") {
	        $(e).parent().children("p.warning").each(function(i, item) {
	            if ($(item).hasClass("required")) {
	                if (e.value == "") {
	                    if(flag){
	                      $(item).addClass("error");
	                    }
	                    $(item).addClass("error_count");
	                    return false; //eachを抜ける
	                } else {
	                    $(item).removeClass("error");
	                    $(item).removeClass("error_count");
	                }
	            } else if ($(item).hasClass("postal")) {
	                if (e.value != "" && !e.value.match(/^[0-9]{3}-*[0-9]{4}$/)) {
	                  if(flag){
	                    $(item).addClass("error");
	                  }
	                  $(item).addClass("error_count");
	                } else {
	                    $(item).removeClass("error");
	                    $(item).removeClass("error_count");
	                }
	              } else if ($(item).hasClass("number")) {
	                  if (e.value != "" && !e.value.match(/^[0-9]+$/)) {
	                    if(flag){
	                      $(item).addClass("error");
	                    }
	                    $(item).addClass("error_count");
	                  } else {
	                      $(item).removeClass("error");
	                      $(item).removeClass("error_count");
	                  }
	            } else if ($(item).hasClass("tel")) {
	              if (e.value != "" && !e.value.match(/^[0-9\-+]+$/)) {
	                if(flag){
	                  $(item).addClass("error");
	                }
	                $(item).addClass("error_count");
	              } else {
	                  $(item).removeClass("error");
	                  $(item).removeClass("error_count");
	              }
	            } else if ($(item).hasClass("email")) {
	                if (e.value != "" && !e.value.match(/^[A-Za-z0-9]+[\w-]+@[\w\.-]+\.\w{2,}$/)) {
	                  if(flag){
	                    $(item).addClass("error");
	                  }
	                  $(item).addClass("error_count");
	                } else {
	                    $(item).removeClass("error");
	                    $(item).removeClass("error_count");
	                }
	            } else if ($(item).hasClass("katakana")) {
	                if (e.value != "" && !e.value.match(/^[\u30A0-\u30FF　 ]+$/)) {
	                  if(flag){
	                    $(item).addClass("error");
	                  }
	                  $(item).addClass("error_count");
	                } else {
	                    $(item).removeClass("error");
	                    $(item).removeClass("error_count");
	                }
	            } else if ($(item).hasClass("email-equal")) {
	              if($("input[name=email]").val()!=$("input[name=email2]").val()){
	                if(flag){
	                  $(item).addClass("error");
	                }
	                $(item).addClass("error_count");
	              }else{
	                $(item).removeClass("error");
	                $(item).removeClass("error_count");
	              }
	            }
	        });
	    } else if (e.type == "radio") {
	        $(e).parent().parent().children("p.warning").each(function(i, item) {
	            if ($(item).hasClass("required")) {
	                if ($(e).parent().parent().children().children("input:radio:checked").length == 0) {
	                  if(flag){
	                    $(item).addClass("error");
	                  }
	                  $(item).addClass("error_count");
	                } else {
	                    $(item).removeClass("error");
	                    $(item).removeClass("error_count");
	                }
	            }else if (custom = item.className.match(/custom-(\w+)-(\w+)-(\w+)/)) {
	                if($("input["+custom[1]+"="+custom[2]+"]").val()=="" && $("#"+custom[3]+":checked").val()){
	                  if(flag){
	                    $(item).addClass("error");
	                  }
	                  $(item).addClass("error_count");
	                } else {
	                    $(item).removeClass("error");
	                    $(item).removeClass("error_count");
	                }
	            }
	        });

	    } else if (e.type == "checkbox") {
	        $(e).parent().parent().children("p.warning").each(function(i, item) {
	            if ($(item).hasClass("required")) {
	              if ($(e).parent().parent().children().children("input:checkbox:checked").length == 0) {
	                if(flag){
	                  $(item).addClass("error");
	                }
	                $(item).addClass("error_count");
	              } else {
	                  $(item).removeClass("error");
	                  $(item).removeClass("error_count");
	              }
	            }else if ($(item).hasClass("nomorethan-3")) {
	              if ($(e).parent().parent().children().children("input:checkbox:checked").length > 3) {
	                if(flag){
	                  $(item).addClass("error");
	                }
	                $(item).addClass("error_count");
	              } else {
	                  $(item).removeClass("error");
	                  $(item).removeClass("error_count");
	              }
	            }
	        });
	    }

	    if ($(".warning.error_count").length > 0) {
	        $(".formBtn-submit").removeClass("ok").prop("disabled", true);
	        $(".submitbutton").addClass("error");
	    } else {
	        $(".formBtn-submit").addClass("ok").prop("disabled", false);
	        $(".submitbutton").removeClass("error");
	    }
	    return true;
	}


/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

	// style-loader: Adds some css to the DOM by adding a <style> tag

	// load the styles
	var content = __webpack_require__(14);
	if(typeof content === 'string') content = [[module.id, content, '']];
	// add the styles to the DOM
	var update = __webpack_require__(16)(content, {});
	if(content.locals) module.exports = content.locals;
	// Hot Module Replacement
	if(false) {
		// When the styles change, update the <style> tags
		if(!content.locals) {
			module.hot.accept("!!../../css-loader/index.js!./magnific-popup.css", function() {
				var newContent = require("!!../../css-loader/index.js!./magnific-popup.css");
				if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
				update(newContent);
			});
		}
		// When the module is disposed, remove the <style> tags
		module.hot.dispose(function() { update(); });
	}

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

	exports = module.exports = __webpack_require__(15)();
	// imports


	// module
	exports.push([module.id, "/* Magnific Popup CSS */\n.mfp-bg {\n  top: 0;\n  left: 0;\n  width: 100%;\n  height: 100%;\n  z-index: 1042;\n  overflow: hidden;\n  position: fixed;\n  background: #0b0b0b;\n  opacity: 0.8; }\n\n.mfp-wrap {\n  top: 0;\n  left: 0;\n  width: 100%;\n  height: 100%;\n  z-index: 1043;\n  position: fixed;\n  outline: none !important;\n  -webkit-backface-visibility: hidden; }\n\n.mfp-container {\n  text-align: center;\n  position: absolute;\n  width: 100%;\n  height: 100%;\n  left: 0;\n  top: 0;\n  padding: 0 8px;\n  box-sizing: border-box; }\n\n.mfp-container:before {\n  content: '';\n  display: inline-block;\n  height: 100%;\n  vertical-align: middle; }\n\n.mfp-align-top .mfp-container:before {\n  display: none; }\n\n.mfp-content {\n  position: relative;\n  display: inline-block;\n  vertical-align: middle;\n  margin: 0 auto;\n  text-align: left;\n  z-index: 1045; }\n\n.mfp-inline-holder .mfp-content,\n.mfp-ajax-holder .mfp-content {\n  width: 100%;\n  cursor: auto; }\n\n.mfp-ajax-cur {\n  cursor: progress; }\n\n.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {\n  cursor: -moz-zoom-out;\n  cursor: -webkit-zoom-out;\n  cursor: zoom-out; }\n\n.mfp-zoom {\n  cursor: pointer;\n  cursor: -webkit-zoom-in;\n  cursor: -moz-zoom-in;\n  cursor: zoom-in; }\n\n.mfp-auto-cursor .mfp-content {\n  cursor: auto; }\n\n.mfp-close,\n.mfp-arrow,\n.mfp-preloader,\n.mfp-counter {\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  user-select: none; }\n\n.mfp-loading.mfp-figure {\n  display: none; }\n\n.mfp-hide {\n  display: none !important; }\n\n.mfp-preloader {\n  color: #CCC;\n  position: absolute;\n  top: 50%;\n  width: auto;\n  text-align: center;\n  margin-top: -0.8em;\n  left: 8px;\n  right: 8px;\n  z-index: 1044; }\n  .mfp-preloader a {\n    color: #CCC; }\n    .mfp-preloader a:hover {\n      color: #FFF; }\n\n.mfp-s-ready .mfp-preloader {\n  display: none; }\n\n.mfp-s-error .mfp-content {\n  display: none; }\n\nbutton.mfp-close,\nbutton.mfp-arrow {\n  overflow: visible;\n  cursor: pointer;\n  background: transparent;\n  border: 0;\n  -webkit-appearance: none;\n  display: block;\n  outline: none;\n  padding: 0;\n  z-index: 1046;\n  box-shadow: none;\n  touch-action: manipulation; }\n\nbutton::-moz-focus-inner {\n  padding: 0;\n  border: 0; }\n\n.mfp-close {\n  width: 44px;\n  height: 44px;\n  line-height: 44px;\n  position: absolute;\n  right: 0;\n  top: 0;\n  text-decoration: none;\n  text-align: center;\n  opacity: 0.65;\n  padding: 0 0 18px 10px;\n  color: #FFF;\n  font-style: normal;\n  font-size: 28px;\n  font-family: Arial, Baskerville, monospace; }\n  .mfp-close:hover,\n  .mfp-close:focus {\n    opacity: 1; }\n  .mfp-close:active {\n    top: 1px; }\n\n.mfp-close-btn-in .mfp-close {\n  color: #333; }\n\n.mfp-image-holder .mfp-close,\n.mfp-iframe-holder .mfp-close {\n  color: #FFF;\n  right: -6px;\n  text-align: right;\n  padding-right: 6px;\n  width: 100%; }\n\n.mfp-counter {\n  position: absolute;\n  top: 0;\n  right: 0;\n  color: #CCC;\n  font-size: 12px;\n  line-height: 18px;\n  white-space: nowrap; }\n\n.mfp-arrow {\n  position: absolute;\n  opacity: 0.65;\n  margin: 0;\n  top: 50%;\n  margin-top: -55px;\n  padding: 0;\n  width: 90px;\n  height: 110px;\n  -webkit-tap-highlight-color: transparent; }\n  .mfp-arrow:active {\n    margin-top: -54px; }\n  .mfp-arrow:hover,\n  .mfp-arrow:focus {\n    opacity: 1; }\n  .mfp-arrow:before,\n  .mfp-arrow:after {\n    content: '';\n    display: block;\n    width: 0;\n    height: 0;\n    position: absolute;\n    left: 0;\n    top: 0;\n    margin-top: 35px;\n    margin-left: 35px;\n    border: medium inset transparent; }\n  .mfp-arrow:after {\n    border-top-width: 13px;\n    border-bottom-width: 13px;\n    top: 8px; }\n  .mfp-arrow:before {\n    border-top-width: 21px;\n    border-bottom-width: 21px;\n    opacity: 0.7; }\n\n.mfp-arrow-left {\n  left: 0; }\n  .mfp-arrow-left:after {\n    border-right: 17px solid #FFF;\n    margin-left: 31px; }\n  .mfp-arrow-left:before {\n    margin-left: 25px;\n    border-right: 27px solid #3F3F3F; }\n\n.mfp-arrow-right {\n  right: 0; }\n  .mfp-arrow-right:after {\n    border-left: 17px solid #FFF;\n    margin-left: 39px; }\n  .mfp-arrow-right:before {\n    border-left: 27px solid #3F3F3F; }\n\n.mfp-iframe-holder {\n  padding-top: 40px;\n  padding-bottom: 40px; }\n  .mfp-iframe-holder .mfp-content {\n    line-height: 0;\n    width: 100%;\n    max-width: 900px; }\n  .mfp-iframe-holder .mfp-close {\n    top: -40px; }\n\n.mfp-iframe-scaler {\n  width: 100%;\n  height: 0;\n  overflow: hidden;\n  padding-top: 56.25%; }\n  .mfp-iframe-scaler iframe {\n    position: absolute;\n    display: block;\n    top: 0;\n    left: 0;\n    width: 100%;\n    height: 100%;\n    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);\n    background: #000; }\n\n/* Main image in popup */\nimg.mfp-img {\n  width: auto;\n  max-width: 100%;\n  height: auto;\n  display: block;\n  line-height: 0;\n  box-sizing: border-box;\n  padding: 40px 0 40px;\n  margin: 0 auto; }\n\n/* The shadow behind the image */\n.mfp-figure {\n  line-height: 0; }\n  .mfp-figure:after {\n    content: '';\n    position: absolute;\n    left: 0;\n    top: 40px;\n    bottom: 40px;\n    display: block;\n    right: 0;\n    width: auto;\n    height: auto;\n    z-index: -1;\n    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);\n    background: #444; }\n  .mfp-figure small {\n    color: #BDBDBD;\n    display: block;\n    font-size: 12px;\n    line-height: 14px; }\n  .mfp-figure figure {\n    margin: 0; }\n\n.mfp-bottom-bar {\n  margin-top: -36px;\n  position: absolute;\n  top: 100%;\n  left: 0;\n  width: 100%;\n  cursor: auto; }\n\n.mfp-title {\n  text-align: left;\n  line-height: 18px;\n  color: #F3F3F3;\n  word-wrap: break-word;\n  padding-right: 36px; }\n\n.mfp-image-holder .mfp-content {\n  max-width: 100%; }\n\n.mfp-gallery .mfp-image-holder .mfp-figure {\n  cursor: pointer; }\n\n@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {\n  /**\n       * Remove all paddings around the image on small screen\n       */\n  .mfp-img-mobile .mfp-image-holder {\n    padding-left: 0;\n    padding-right: 0; }\n  .mfp-img-mobile img.mfp-img {\n    padding: 0; }\n  .mfp-img-mobile .mfp-figure:after {\n    top: 0;\n    bottom: 0; }\n  .mfp-img-mobile .mfp-figure small {\n    display: inline;\n    margin-left: 5px; }\n  .mfp-img-mobile .mfp-bottom-bar {\n    background: rgba(0, 0, 0, 0.6);\n    bottom: 0;\n    margin: 0;\n    top: auto;\n    padding: 3px 5px;\n    position: fixed;\n    box-sizing: border-box; }\n    .mfp-img-mobile .mfp-bottom-bar:empty {\n      padding: 0; }\n  .mfp-img-mobile .mfp-counter {\n    right: 5px;\n    top: 3px; }\n  .mfp-img-mobile .mfp-close {\n    top: 0;\n    right: 0;\n    width: 35px;\n    height: 35px;\n    line-height: 35px;\n    background: rgba(0, 0, 0, 0.6);\n    position: fixed;\n    text-align: center;\n    padding: 0; } }\n\n@media all and (max-width: 900px) {\n  .mfp-arrow {\n    -webkit-transform: scale(0.75);\n    transform: scale(0.75); }\n  .mfp-arrow-left {\n    -webkit-transform-origin: 0;\n    transform-origin: 0; }\n  .mfp-arrow-right {\n    -webkit-transform-origin: 100%;\n    transform-origin: 100%; }\n  .mfp-container {\n    padding-left: 6px;\n    padding-right: 6px; } }\n", ""]);

	// exports


/***/ }),
/* 15 */
/***/ (function(module, exports) {

	/*
		MIT License http://www.opensource.org/licenses/mit-license.php
		Author Tobias Koppers @sokra
	*/
	// css base code, injected by the css-loader
	module.exports = function() {
		var list = [];

		// return the list of modules as css string
		list.toString = function toString() {
			var result = [];
			for(var i = 0; i < this.length; i++) {
				var item = this[i];
				if(item[2]) {
					result.push("@media " + item[2] + "{" + item[1] + "}");
				} else {
					result.push(item[1]);
				}
			}
			return result.join("");
		};

		// import a list of modules into the list
		list.i = function(modules, mediaQuery) {
			if(typeof modules === "string")
				modules = [[null, modules, ""]];
			var alreadyImportedModules = {};
			for(var i = 0; i < this.length; i++) {
				var id = this[i][0];
				if(typeof id === "number")
					alreadyImportedModules[id] = true;
			}
			for(i = 0; i < modules.length; i++) {
				var item = modules[i];
				// skip already imported module
				// this implementation is not 100% perfect for weird media query combinations
				//  when a module is imported multiple times with different media queries.
				//  I hope this will never occur (Hey this way we have smaller bundles)
				if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
					if(mediaQuery && !item[2]) {
						item[2] = mediaQuery;
					} else if(mediaQuery) {
						item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
					}
					list.push(item);
				}
			}
		};
		return list;
	};


/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

	/*
		MIT License http://www.opensource.org/licenses/mit-license.php
		Author Tobias Koppers @sokra
	*/
	var stylesInDom = {},
		memoize = function(fn) {
			var memo;
			return function () {
				if (typeof memo === "undefined") memo = fn.apply(this, arguments);
				return memo;
			};
		},
		isOldIE = memoize(function() {
			return /msie [6-9]\b/.test(self.navigator.userAgent.toLowerCase());
		}),
		getHeadElement = memoize(function () {
			return document.head || document.getElementsByTagName("head")[0];
		}),
		singletonElement = null,
		singletonCounter = 0,
		styleElementsInsertedAtTop = [];

	module.exports = function(list, options) {
		if(false) {
			if(typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
		}

		options = options || {};
		// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
		// tags it will allow on a page
		if (typeof options.singleton === "undefined") options.singleton = isOldIE();

		// By default, add <style> tags to the bottom of <head>.
		if (typeof options.insertAt === "undefined") options.insertAt = "bottom";

		var styles = listToStyles(list);
		addStylesToDom(styles, options);

		return function update(newList) {
			var mayRemove = [];
			for(var i = 0; i < styles.length; i++) {
				var item = styles[i];
				var domStyle = stylesInDom[item.id];
				domStyle.refs--;
				mayRemove.push(domStyle);
			}
			if(newList) {
				var newStyles = listToStyles(newList);
				addStylesToDom(newStyles, options);
			}
			for(var i = 0; i < mayRemove.length; i++) {
				var domStyle = mayRemove[i];
				if(domStyle.refs === 0) {
					for(var j = 0; j < domStyle.parts.length; j++)
						domStyle.parts[j]();
					delete stylesInDom[domStyle.id];
				}
			}
		};
	}

	function addStylesToDom(styles, options) {
		for(var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];
			if(domStyle) {
				domStyle.refs++;
				for(var j = 0; j < domStyle.parts.length; j++) {
					domStyle.parts[j](item.parts[j]);
				}
				for(; j < item.parts.length; j++) {
					domStyle.parts.push(addStyle(item.parts[j], options));
				}
			} else {
				var parts = [];
				for(var j = 0; j < item.parts.length; j++) {
					parts.push(addStyle(item.parts[j], options));
				}
				stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
			}
		}
	}

	function listToStyles(list) {
		var styles = [];
		var newStyles = {};
		for(var i = 0; i < list.length; i++) {
			var item = list[i];
			var id = item[0];
			var css = item[1];
			var media = item[2];
			var sourceMap = item[3];
			var part = {css: css, media: media, sourceMap: sourceMap};
			if(!newStyles[id])
				styles.push(newStyles[id] = {id: id, parts: [part]});
			else
				newStyles[id].parts.push(part);
		}
		return styles;
	}

	function insertStyleElement(options, styleElement) {
		var head = getHeadElement();
		var lastStyleElementInsertedAtTop = styleElementsInsertedAtTop[styleElementsInsertedAtTop.length - 1];
		if (options.insertAt === "top") {
			if(!lastStyleElementInsertedAtTop) {
				head.insertBefore(styleElement, head.firstChild);
			} else if(lastStyleElementInsertedAtTop.nextSibling) {
				head.insertBefore(styleElement, lastStyleElementInsertedAtTop.nextSibling);
			} else {
				head.appendChild(styleElement);
			}
			styleElementsInsertedAtTop.push(styleElement);
		} else if (options.insertAt === "bottom") {
			head.appendChild(styleElement);
		} else {
			throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
		}
	}

	function removeStyleElement(styleElement) {
		styleElement.parentNode.removeChild(styleElement);
		var idx = styleElementsInsertedAtTop.indexOf(styleElement);
		if(idx >= 0) {
			styleElementsInsertedAtTop.splice(idx, 1);
		}
	}

	function createStyleElement(options) {
		var styleElement = document.createElement("style");
		styleElement.type = "text/css";
		insertStyleElement(options, styleElement);
		return styleElement;
	}

	function createLinkElement(options) {
		var linkElement = document.createElement("link");
		linkElement.rel = "stylesheet";
		insertStyleElement(options, linkElement);
		return linkElement;
	}

	function addStyle(obj, options) {
		var styleElement, update, remove;

		if (options.singleton) {
			var styleIndex = singletonCounter++;
			styleElement = singletonElement || (singletonElement = createStyleElement(options));
			update = applyToSingletonTag.bind(null, styleElement, styleIndex, false);
			remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true);
		} else if(obj.sourceMap &&
			typeof URL === "function" &&
			typeof URL.createObjectURL === "function" &&
			typeof URL.revokeObjectURL === "function" &&
			typeof Blob === "function" &&
			typeof btoa === "function") {
			styleElement = createLinkElement(options);
			update = updateLink.bind(null, styleElement);
			remove = function() {
				removeStyleElement(styleElement);
				if(styleElement.href)
					URL.revokeObjectURL(styleElement.href);
			};
		} else {
			styleElement = createStyleElement(options);
			update = applyToTag.bind(null, styleElement);
			remove = function() {
				removeStyleElement(styleElement);
			};
		}

		update(obj);

		return function updateStyle(newObj) {
			if(newObj) {
				if(newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap)
					return;
				update(obj = newObj);
			} else {
				remove();
			}
		};
	}

	var replaceText = (function () {
		var textStore = [];

		return function (index, replacement) {
			textStore[index] = replacement;
			return textStore.filter(Boolean).join('\n');
		};
	})();

	function applyToSingletonTag(styleElement, index, remove, obj) {
		var css = remove ? "" : obj.css;

		if (styleElement.styleSheet) {
			styleElement.styleSheet.cssText = replaceText(index, css);
		} else {
			var cssNode = document.createTextNode(css);
			var childNodes = styleElement.childNodes;
			if (childNodes[index]) styleElement.removeChild(childNodes[index]);
			if (childNodes.length) {
				styleElement.insertBefore(cssNode, childNodes[index]);
			} else {
				styleElement.appendChild(cssNode);
			}
		}
	}

	function applyToTag(styleElement, obj) {
		var css = obj.css;
		var media = obj.media;

		if(media) {
			styleElement.setAttribute("media", media)
		}

		if(styleElement.styleSheet) {
			styleElement.styleSheet.cssText = css;
		} else {
			while(styleElement.firstChild) {
				styleElement.removeChild(styleElement.firstChild);
			}
			styleElement.appendChild(document.createTextNode(css));
		}
	}

	function updateLink(linkElement, obj) {
		var css = obj.css;
		var sourceMap = obj.sourceMap;

		if(sourceMap) {
			// http://stackoverflow.com/a/26603875
			css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
		}

		var blob = new Blob([css], { type: "text/css" });

		var oldSrc = linkElement.href;

		linkElement.href = URL.createObjectURL(blob);

		if(oldSrc)
			URL.revokeObjectURL(oldSrc);
	}


/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

	var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*! Magnific Popup - v1.1.0 - 2016-02-20
	* http://dimsemenov.com/plugins/magnific-popup/
	* Copyright (c) 2016 Dmitry Semenov; */
	;(function (factory) { 
	if (true) { 
	 // AMD. Register as an anonymous module. 
	 !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(4)], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory), __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ? (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__), __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)); 
	 } else if (typeof exports === 'object') { 
	 // Node/CommonJS 
	 factory(require('jquery')); 
	 } else { 
	 // Browser globals 
	 factory(window.jQuery || window.Zepto); 
	 } 
	 }(function($) { 

	/*>>core*/
	/**
	 * 
	 * Magnific Popup Core JS file
	 * 
	 */


	/**
	 * Private static constants
	 */
	var CLOSE_EVENT = 'Close',
		BEFORE_CLOSE_EVENT = 'BeforeClose',
		AFTER_CLOSE_EVENT = 'AfterClose',
		BEFORE_APPEND_EVENT = 'BeforeAppend',
		MARKUP_PARSE_EVENT = 'MarkupParse',
		OPEN_EVENT = 'Open',
		CHANGE_EVENT = 'Change',
		NS = 'mfp',
		EVENT_NS = '.' + NS,
		READY_CLASS = 'mfp-ready',
		REMOVING_CLASS = 'mfp-removing',
		PREVENT_CLOSE_CLASS = 'mfp-prevent-close';


	/**
	 * Private vars 
	 */
	/*jshint -W079 */
	var mfp, // As we have only one instance of MagnificPopup object, we define it locally to not to use 'this'
		MagnificPopup = function(){},
		_isJQ = !!(window.jQuery),
		_prevStatus,
		_window = $(window),
		_document,
		_prevContentType,
		_wrapClasses,
		_currPopupType;


	/**
	 * Private functions
	 */
	var _mfpOn = function(name, f) {
			mfp.ev.on(NS + name + EVENT_NS, f);
		},
		_getEl = function(className, appendTo, html, raw) {
			var el = document.createElement('div');
			el.className = 'mfp-'+className;
			if(html) {
				el.innerHTML = html;
			}
			if(!raw) {
				el = $(el);
				if(appendTo) {
					el.appendTo(appendTo);
				}
			} else if(appendTo) {
				appendTo.appendChild(el);
			}
			return el;
		},
		_mfpTrigger = function(e, data) {
			mfp.ev.triggerHandler(NS + e, data);

			if(mfp.st.callbacks) {
				// converts "mfpEventName" to "eventName" callback and triggers it if it's present
				e = e.charAt(0).toLowerCase() + e.slice(1);
				if(mfp.st.callbacks[e]) {
					mfp.st.callbacks[e].apply(mfp, $.isArray(data) ? data : [data]);
				}
			}
		},
		_getCloseBtn = function(type) {
			if(type !== _currPopupType || !mfp.currTemplate.closeBtn) {
				mfp.currTemplate.closeBtn = $( mfp.st.closeMarkup.replace('%title%', mfp.st.tClose ) );
				_currPopupType = type;
			}
			return mfp.currTemplate.closeBtn;
		},
		// Initialize Magnific Popup only when called at least once
		_checkInstance = function() {
			if(!$.magnificPopup.instance) {
				/*jshint -W020 */
				mfp = new MagnificPopup();
				mfp.init();
				$.magnificPopup.instance = mfp;
			}
		},
		// CSS transition detection, http://stackoverflow.com/questions/7264899/detect-css-transitions-using-javascript-and-without-modernizr
		supportsTransitions = function() {
			var s = document.createElement('p').style, // 's' for style. better to create an element if body yet to exist
				v = ['ms','O','Moz','Webkit']; // 'v' for vendor

			if( s['transition'] !== undefined ) {
				return true; 
			}
				
			while( v.length ) {
				if( v.pop() + 'Transition' in s ) {
					return true;
				}
			}
					
			return false;
		};



	/**
	 * Public functions
	 */
	MagnificPopup.prototype = {

		constructor: MagnificPopup,

		/**
		 * Initializes Magnific Popup plugin. 
		 * This function is triggered only once when $.fn.magnificPopup or $.magnificPopup is executed
		 */
		init: function() {
			var appVersion = navigator.appVersion;
			mfp.isLowIE = mfp.isIE8 = document.all && !document.addEventListener;
			mfp.isAndroid = (/android/gi).test(appVersion);
			mfp.isIOS = (/iphone|ipad|ipod/gi).test(appVersion);
			mfp.supportsTransition = supportsTransitions();

			// We disable fixed positioned lightbox on devices that don't handle it nicely.
			// If you know a better way of detecting this - let me know.
			mfp.probablyMobile = (mfp.isAndroid || mfp.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent) );
			_document = $(document);

			mfp.popupsCache = {};
		},

		/**
		 * Opens popup
		 * @param  data [description]
		 */
		open: function(data) {

			var i;

			if(data.isObj === false) { 
				// convert jQuery collection to array to avoid conflicts later
				mfp.items = data.items.toArray();

				mfp.index = 0;
				var items = data.items,
					item;
				for(i = 0; i < items.length; i++) {
					item = items[i];
					if(item.parsed) {
						item = item.el[0];
					}
					if(item === data.el[0]) {
						mfp.index = i;
						break;
					}
				}
			} else {
				mfp.items = $.isArray(data.items) ? data.items : [data.items];
				mfp.index = data.index || 0;
			}

			// if popup is already opened - we just update the content
			if(mfp.isOpen) {
				mfp.updateItemHTML();
				return;
			}
			
			mfp.types = []; 
			_wrapClasses = '';
			if(data.mainEl && data.mainEl.length) {
				mfp.ev = data.mainEl.eq(0);
			} else {
				mfp.ev = _document;
			}

			if(data.key) {
				if(!mfp.popupsCache[data.key]) {
					mfp.popupsCache[data.key] = {};
				}
				mfp.currTemplate = mfp.popupsCache[data.key];
			} else {
				mfp.currTemplate = {};
			}



			mfp.st = $.extend(true, {}, $.magnificPopup.defaults, data ); 
			mfp.fixedContentPos = mfp.st.fixedContentPos === 'auto' ? !mfp.probablyMobile : mfp.st.fixedContentPos;

			if(mfp.st.modal) {
				mfp.st.closeOnContentClick = false;
				mfp.st.closeOnBgClick = false;
				mfp.st.showCloseBtn = false;
				mfp.st.enableEscapeKey = false;
			}
			

			// Building markup
			// main containers are created only once
			if(!mfp.bgOverlay) {

				// Dark overlay
				mfp.bgOverlay = _getEl('bg').on('click'+EVENT_NS, function() {
					mfp.close();
				});

				mfp.wrap = _getEl('wrap').attr('tabindex', -1).on('click'+EVENT_NS, function(e) {
					if(mfp._checkIfClose(e.target)) {
						mfp.close();
					}
				});

				mfp.container = _getEl('container', mfp.wrap);
			}

			mfp.contentContainer = _getEl('content');
			if(mfp.st.preloader) {
				mfp.preloader = _getEl('preloader', mfp.container, mfp.st.tLoading);
			}


			// Initializing modules
			var modules = $.magnificPopup.modules;
			for(i = 0; i < modules.length; i++) {
				var n = modules[i];
				n = n.charAt(0).toUpperCase() + n.slice(1);
				mfp['init'+n].call(mfp);
			}
			_mfpTrigger('BeforeOpen');


			if(mfp.st.showCloseBtn) {
				// Close button
				if(!mfp.st.closeBtnInside) {
					mfp.wrap.append( _getCloseBtn() );
				} else {
					_mfpOn(MARKUP_PARSE_EVENT, function(e, template, values, item) {
						values.close_replaceWith = _getCloseBtn(item.type);
					});
					_wrapClasses += ' mfp-close-btn-in';
				}
			}

			if(mfp.st.alignTop) {
				_wrapClasses += ' mfp-align-top';
			}

		

			if(mfp.fixedContentPos) {
				mfp.wrap.css({
					overflow: mfp.st.overflowY,
					overflowX: 'hidden',
					overflowY: mfp.st.overflowY
				});
			} else {
				mfp.wrap.css({ 
					top: _window.scrollTop(),
					position: 'absolute'
				});
			}
			if( mfp.st.fixedBgPos === false || (mfp.st.fixedBgPos === 'auto' && !mfp.fixedContentPos) ) {
				mfp.bgOverlay.css({
					height: _document.height(),
					position: 'absolute'
				});
			}

			

			if(mfp.st.enableEscapeKey) {
				// Close on ESC key
				_document.on('keyup' + EVENT_NS, function(e) {
					if(e.keyCode === 27) {
						mfp.close();
					}
				});
			}

			_window.on('resize' + EVENT_NS, function() {
				mfp.updateSize();
			});


			if(!mfp.st.closeOnContentClick) {
				_wrapClasses += ' mfp-auto-cursor';
			}
			
			if(_wrapClasses)
				mfp.wrap.addClass(_wrapClasses);


			// this triggers recalculation of layout, so we get it once to not to trigger twice
			var windowHeight = mfp.wH = _window.height();

			
			var windowStyles = {};

			if( mfp.fixedContentPos ) {
	            if(mfp._hasScrollBar(windowHeight)){
	                var s = mfp._getScrollbarSize();
	                if(s) {
	                    windowStyles.marginRight = s;
	                }
	            }
	        }

			if(mfp.fixedContentPos) {
				if(!mfp.isIE7) {
					windowStyles.overflow = 'hidden';
				} else {
					// ie7 double-scroll bug
					$('body, html').css('overflow', 'hidden');
				}
			}

			
			
			var classesToadd = mfp.st.mainClass;
			if(mfp.isIE7) {
				classesToadd += ' mfp-ie7';
			}
			if(classesToadd) {
				mfp._addClassToMFP( classesToadd );
			}

			// add content
			mfp.updateItemHTML();

			_mfpTrigger('BuildControls');

			// remove scrollbar, add margin e.t.c
			$('html').css(windowStyles);
			
			// add everything to DOM
			mfp.bgOverlay.add(mfp.wrap).prependTo( mfp.st.prependTo || $(document.body) );

			// Save last focused element
			mfp._lastFocusedEl = document.activeElement;
			
			// Wait for next cycle to allow CSS transition
			setTimeout(function() {
				
				if(mfp.content) {
					mfp._addClassToMFP(READY_CLASS);
					mfp._setFocus();
				} else {
					// if content is not defined (not loaded e.t.c) we add class only for BG
					mfp.bgOverlay.addClass(READY_CLASS);
				}
				
				// Trap the focus in popup
				_document.on('focusin' + EVENT_NS, mfp._onFocusIn);

			}, 16);

			mfp.isOpen = true;
			mfp.updateSize(windowHeight);
			_mfpTrigger(OPEN_EVENT);

			return data;
		},

		/**
		 * Closes the popup
		 */
		close: function() {
			if(!mfp.isOpen) return;
			_mfpTrigger(BEFORE_CLOSE_EVENT);

			mfp.isOpen = false;
			// for CSS3 animation
			if(mfp.st.removalDelay && !mfp.isLowIE && mfp.supportsTransition )  {
				mfp._addClassToMFP(REMOVING_CLASS);
				setTimeout(function() {
					mfp._close();
				}, mfp.st.removalDelay);
			} else {
				mfp._close();
			}
		},

		/**
		 * Helper for close() function
		 */
		_close: function() {
			_mfpTrigger(CLOSE_EVENT);

			var classesToRemove = REMOVING_CLASS + ' ' + READY_CLASS + ' ';

			mfp.bgOverlay.detach();
			mfp.wrap.detach();
			mfp.container.empty();

			if(mfp.st.mainClass) {
				classesToRemove += mfp.st.mainClass + ' ';
			}

			mfp._removeClassFromMFP(classesToRemove);

			if(mfp.fixedContentPos) {
				var windowStyles = {marginRight: ''};
				if(mfp.isIE7) {
					$('body, html').css('overflow', '');
				} else {
					windowStyles.overflow = '';
				}
				$('html').css(windowStyles);
			}
			
			_document.off('keyup' + EVENT_NS + ' focusin' + EVENT_NS);
			mfp.ev.off(EVENT_NS);

			// clean up DOM elements that aren't removed
			mfp.wrap.attr('class', 'mfp-wrap').removeAttr('style');
			mfp.bgOverlay.attr('class', 'mfp-bg');
			mfp.container.attr('class', 'mfp-container');

			// remove close button from target element
			if(mfp.st.showCloseBtn &&
			(!mfp.st.closeBtnInside || mfp.currTemplate[mfp.currItem.type] === true)) {
				if(mfp.currTemplate.closeBtn)
					mfp.currTemplate.closeBtn.detach();
			}


			if(mfp.st.autoFocusLast && mfp._lastFocusedEl) {
				$(mfp._lastFocusedEl).focus(); // put tab focus back
			}
			mfp.currItem = null;	
			mfp.content = null;
			mfp.currTemplate = null;
			mfp.prevHeight = 0;

			_mfpTrigger(AFTER_CLOSE_EVENT);
		},
		
		updateSize: function(winHeight) {

			if(mfp.isIOS) {
				// fixes iOS nav bars https://github.com/dimsemenov/Magnific-Popup/issues/2
				var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
				var height = window.innerHeight * zoomLevel;
				mfp.wrap.css('height', height);
				mfp.wH = height;
			} else {
				mfp.wH = winHeight || _window.height();
			}
			// Fixes #84: popup incorrectly positioned with position:relative on body
			if(!mfp.fixedContentPos) {
				mfp.wrap.css('height', mfp.wH);
			}

			_mfpTrigger('Resize');

		},

		/**
		 * Set content of popup based on current index
		 */
		updateItemHTML: function() {
			var item = mfp.items[mfp.index];

			// Detach and perform modifications
			mfp.contentContainer.detach();

			if(mfp.content)
				mfp.content.detach();

			if(!item.parsed) {
				item = mfp.parseEl( mfp.index );
			}

			var type = item.type;

			_mfpTrigger('BeforeChange', [mfp.currItem ? mfp.currItem.type : '', type]);
			// BeforeChange event works like so:
			// _mfpOn('BeforeChange', function(e, prevType, newType) { });

			mfp.currItem = item;

			if(!mfp.currTemplate[type]) {
				var markup = mfp.st[type] ? mfp.st[type].markup : false;

				// allows to modify markup
				_mfpTrigger('FirstMarkupParse', markup);

				if(markup) {
					mfp.currTemplate[type] = $(markup);
				} else {
					// if there is no markup found we just define that template is parsed
					mfp.currTemplate[type] = true;
				}
			}

			if(_prevContentType && _prevContentType !== item.type) {
				mfp.container.removeClass('mfp-'+_prevContentType+'-holder');
			}

			var newContent = mfp['get' + type.charAt(0).toUpperCase() + type.slice(1)](item, mfp.currTemplate[type]);
			mfp.appendContent(newContent, type);

			item.preloaded = true;

			_mfpTrigger(CHANGE_EVENT, item);
			_prevContentType = item.type;

			// Append container back after its content changed
			mfp.container.prepend(mfp.contentContainer);

			_mfpTrigger('AfterChange');
		},


		/**
		 * Set HTML content of popup
		 */
		appendContent: function(newContent, type) {
			mfp.content = newContent;

			if(newContent) {
				if(mfp.st.showCloseBtn && mfp.st.closeBtnInside &&
					mfp.currTemplate[type] === true) {
					// if there is no markup, we just append close button element inside
					if(!mfp.content.find('.mfp-close').length) {
						mfp.content.append(_getCloseBtn());
					}
				} else {
					mfp.content = newContent;
				}
			} else {
				mfp.content = '';
			}

			_mfpTrigger(BEFORE_APPEND_EVENT);
			mfp.container.addClass('mfp-'+type+'-holder');

			mfp.contentContainer.append(mfp.content);
		},


		/**
		 * Creates Magnific Popup data object based on given data
		 * @param  {int} index Index of item to parse
		 */
		parseEl: function(index) {
			var item = mfp.items[index],
				type;

			if(item.tagName) {
				item = { el: $(item) };
			} else {
				type = item.type;
				item = { data: item, src: item.src };
			}

			if(item.el) {
				var types = mfp.types;

				// check for 'mfp-TYPE' class
				for(var i = 0; i < types.length; i++) {
					if( item.el.hasClass('mfp-'+types[i]) ) {
						type = types[i];
						break;
					}
				}

				item.src = item.el.attr('data-mfp-src');
				if(!item.src) {
					item.src = item.el.attr('href');
				}
			}

			item.type = type || mfp.st.type || 'inline';
			item.index = index;
			item.parsed = true;
			mfp.items[index] = item;
			_mfpTrigger('ElementParse', item);

			return mfp.items[index];
		},


		/**
		 * Initializes single popup or a group of popups
		 */
		addGroup: function(el, options) {
			var eHandler = function(e) {
				e.mfpEl = this;
				mfp._openClick(e, el, options);
			};

			if(!options) {
				options = {};
			}

			var eName = 'click.magnificPopup';
			options.mainEl = el;

			if(options.items) {
				options.isObj = true;
				el.off(eName).on(eName, eHandler);
			} else {
				options.isObj = false;
				if(options.delegate) {
					el.off(eName).on(eName, options.delegate , eHandler);
				} else {
					options.items = el;
					el.off(eName).on(eName, eHandler);
				}
			}
		},
		_openClick: function(e, el, options) {
			var midClick = options.midClick !== undefined ? options.midClick : $.magnificPopup.defaults.midClick;


			if(!midClick && ( e.which === 2 || e.ctrlKey || e.metaKey || e.altKey || e.shiftKey ) ) {
				return;
			}

			var disableOn = options.disableOn !== undefined ? options.disableOn : $.magnificPopup.defaults.disableOn;

			if(disableOn) {
				if($.isFunction(disableOn)) {
					if( !disableOn.call(mfp) ) {
						return true;
					}
				} else { // else it's number
					if( _window.width() < disableOn ) {
						return true;
					}
				}
			}

			if(e.type) {
				e.preventDefault();

				// This will prevent popup from closing if element is inside and popup is already opened
				if(mfp.isOpen) {
					e.stopPropagation();
				}
			}

			options.el = $(e.mfpEl);
			if(options.delegate) {
				options.items = el.find(options.delegate);
			}
			mfp.open(options);
		},


		/**
		 * Updates text on preloader
		 */
		updateStatus: function(status, text) {

			if(mfp.preloader) {
				if(_prevStatus !== status) {
					mfp.container.removeClass('mfp-s-'+_prevStatus);
				}

				if(!text && status === 'loading') {
					text = mfp.st.tLoading;
				}

				var data = {
					status: status,
					text: text
				};
				// allows to modify status
				_mfpTrigger('UpdateStatus', data);

				status = data.status;
				text = data.text;

				mfp.preloader.html(text);

				mfp.preloader.find('a').on('click', function(e) {
					e.stopImmediatePropagation();
				});

				mfp.container.addClass('mfp-s-'+status);
				_prevStatus = status;
			}
		},


		/*
			"Private" helpers that aren't private at all
		 */
		// Check to close popup or not
		// "target" is an element that was clicked
		_checkIfClose: function(target) {

			if($(target).hasClass(PREVENT_CLOSE_CLASS)) {
				return;
			}

			var closeOnContent = mfp.st.closeOnContentClick;
			var closeOnBg = mfp.st.closeOnBgClick;

			if(closeOnContent && closeOnBg) {
				return true;
			} else {

				// We close the popup if click is on close button or on preloader. Or if there is no content.
				if(!mfp.content || $(target).hasClass('mfp-close') || (mfp.preloader && target === mfp.preloader[0]) ) {
					return true;
				}

				// if click is outside the content
				if(  (target !== mfp.content[0] && !$.contains(mfp.content[0], target))  ) {
					if(closeOnBg) {
						// last check, if the clicked element is in DOM, (in case it's removed onclick)
						if( $.contains(document, target) ) {
							return true;
						}
					}
				} else if(closeOnContent) {
					return true;
				}

			}
			return false;
		},
		_addClassToMFP: function(cName) {
			mfp.bgOverlay.addClass(cName);
			mfp.wrap.addClass(cName);
		},
		_removeClassFromMFP: function(cName) {
			this.bgOverlay.removeClass(cName);
			mfp.wrap.removeClass(cName);
		},
		_hasScrollBar: function(winHeight) {
			return (  (mfp.isIE7 ? _document.height() : document.body.scrollHeight) > (winHeight || _window.height()) );
		},
		_setFocus: function() {
			(mfp.st.focus ? mfp.content.find(mfp.st.focus).eq(0) : mfp.wrap).focus();
		},
		_onFocusIn: function(e) {
			if( e.target !== mfp.wrap[0] && !$.contains(mfp.wrap[0], e.target) ) {
				mfp._setFocus();
				return false;
			}
		},
		_parseMarkup: function(template, values, item) {
			var arr;
			if(item.data) {
				values = $.extend(item.data, values);
			}
			_mfpTrigger(MARKUP_PARSE_EVENT, [template, values, item] );

			$.each(values, function(key, value) {
				if(value === undefined || value === false) {
					return true;
				}
				arr = key.split('_');
				if(arr.length > 1) {
					var el = template.find(EVENT_NS + '-'+arr[0]);

					if(el.length > 0) {
						var attr = arr[1];
						if(attr === 'replaceWith') {
							if(el[0] !== value[0]) {
								el.replaceWith(value);
							}
						} else if(attr === 'img') {
							if(el.is('img')) {
								el.attr('src', value);
							} else {
								el.replaceWith( $('<img>').attr('src', value).attr('class', el.attr('class')) );
							}
						} else {
							el.attr(arr[1], value);
						}
					}

				} else {
					template.find(EVENT_NS + '-'+key).html(value);
				}
			});
		},

		_getScrollbarSize: function() {
			// thx David
			if(mfp.scrollbarSize === undefined) {
				var scrollDiv = document.createElement("div");
				scrollDiv.style.cssText = 'width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;';
				document.body.appendChild(scrollDiv);
				mfp.scrollbarSize = scrollDiv.offsetWidth - scrollDiv.clientWidth;
				document.body.removeChild(scrollDiv);
			}
			return mfp.scrollbarSize;
		}

	}; /* MagnificPopup core prototype end */




	/**
	 * Public static functions
	 */
	$.magnificPopup = {
		instance: null,
		proto: MagnificPopup.prototype,
		modules: [],

		open: function(options, index) {
			_checkInstance();

			if(!options) {
				options = {};
			} else {
				options = $.extend(true, {}, options);
			}

			options.isObj = true;
			options.index = index || 0;
			return this.instance.open(options);
		},

		close: function() {
			return $.magnificPopup.instance && $.magnificPopup.instance.close();
		},

		registerModule: function(name, module) {
			if(module.options) {
				$.magnificPopup.defaults[name] = module.options;
			}
			$.extend(this.proto, module.proto);
			this.modules.push(name);
		},

		defaults: {

			// Info about options is in docs:
			// http://dimsemenov.com/plugins/magnific-popup/documentation.html#options

			disableOn: 0,

			key: null,

			midClick: false,

			mainClass: '',

			preloader: true,

			focus: '', // CSS selector of input to focus after popup is opened

			closeOnContentClick: false,

			closeOnBgClick: true,

			closeBtnInside: true,

			showCloseBtn: true,

			enableEscapeKey: true,

			modal: false,

			alignTop: false,

			removalDelay: 0,

			prependTo: null,

			fixedContentPos: 'auto',

			fixedBgPos: 'auto',

			overflowY: 'auto',

			closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',

			tClose: 'Close (Esc)',

			tLoading: 'Loading...',

			autoFocusLast: true

		}
	};



	$.fn.magnificPopup = function(options) {
		_checkInstance();

		var jqEl = $(this);

		// We call some API method of first param is a string
		if (typeof options === "string" ) {

			if(options === 'open') {
				var items,
					itemOpts = _isJQ ? jqEl.data('magnificPopup') : jqEl[0].magnificPopup,
					index = parseInt(arguments[1], 10) || 0;

				if(itemOpts.items) {
					items = itemOpts.items[index];
				} else {
					items = jqEl;
					if(itemOpts.delegate) {
						items = items.find(itemOpts.delegate);
					}
					items = items.eq( index );
				}
				mfp._openClick({mfpEl:items}, jqEl, itemOpts);
			} else {
				if(mfp.isOpen)
					mfp[options].apply(mfp, Array.prototype.slice.call(arguments, 1));
			}

		} else {
			// clone options obj
			options = $.extend(true, {}, options);

			/*
			 * As Zepto doesn't support .data() method for objects
			 * and it works only in normal browsers
			 * we assign "options" object directly to the DOM element. FTW!
			 */
			if(_isJQ) {
				jqEl.data('magnificPopup', options);
			} else {
				jqEl[0].magnificPopup = options;
			}

			mfp.addGroup(jqEl, options);

		}
		return jqEl;
	};

	/*>>core*/

	/*>>inline*/

	var INLINE_NS = 'inline',
		_hiddenClass,
		_inlinePlaceholder,
		_lastInlineElement,
		_putInlineElementsBack = function() {
			if(_lastInlineElement) {
				_inlinePlaceholder.after( _lastInlineElement.addClass(_hiddenClass) ).detach();
				_lastInlineElement = null;
			}
		};

	$.magnificPopup.registerModule(INLINE_NS, {
		options: {
			hiddenClass: 'hide', // will be appended with `mfp-` prefix
			markup: '',
			tNotFound: 'Content not found'
		},
		proto: {

			initInline: function() {
				mfp.types.push(INLINE_NS);

				_mfpOn(CLOSE_EVENT+'.'+INLINE_NS, function() {
					_putInlineElementsBack();
				});
			},

			getInline: function(item, template) {

				_putInlineElementsBack();

				if(item.src) {
					var inlineSt = mfp.st.inline,
						el = $(item.src);

					if(el.length) {

						// If target element has parent - we replace it with placeholder and put it back after popup is closed
						var parent = el[0].parentNode;
						if(parent && parent.tagName) {
							if(!_inlinePlaceholder) {
								_hiddenClass = inlineSt.hiddenClass;
								_inlinePlaceholder = _getEl(_hiddenClass);
								_hiddenClass = 'mfp-'+_hiddenClass;
							}
							// replace target inline element with placeholder
							_lastInlineElement = el.after(_inlinePlaceholder).detach().removeClass(_hiddenClass);
						}

						mfp.updateStatus('ready');
					} else {
						mfp.updateStatus('error', inlineSt.tNotFound);
						el = $('<div>');
					}

					item.inlineElement = el;
					return el;
				}

				mfp.updateStatus('ready');
				mfp._parseMarkup(template, {}, item);
				return template;
			}
		}
	});

	/*>>inline*/

	/*>>ajax*/
	var AJAX_NS = 'ajax',
		_ajaxCur,
		_removeAjaxCursor = function() {
			if(_ajaxCur) {
				$(document.body).removeClass(_ajaxCur);
			}
		},
		_destroyAjaxRequest = function() {
			_removeAjaxCursor();
			if(mfp.req) {
				mfp.req.abort();
			}
		};

	$.magnificPopup.registerModule(AJAX_NS, {

		options: {
			settings: null,
			cursor: 'mfp-ajax-cur',
			tError: '<a href="%url%">The content</a> could not be loaded.'
		},

		proto: {
			initAjax: function() {
				mfp.types.push(AJAX_NS);
				_ajaxCur = mfp.st.ajax.cursor;

				_mfpOn(CLOSE_EVENT+'.'+AJAX_NS, _destroyAjaxRequest);
				_mfpOn('BeforeChange.' + AJAX_NS, _destroyAjaxRequest);
			},
			getAjax: function(item) {

				if(_ajaxCur) {
					$(document.body).addClass(_ajaxCur);
				}

				mfp.updateStatus('loading');

				var opts = $.extend({
					url: item.src,
					success: function(data, textStatus, jqXHR) {
						var temp = {
							data:data,
							xhr:jqXHR
						};

						_mfpTrigger('ParseAjax', temp);

						mfp.appendContent( $(temp.data), AJAX_NS );

						item.finished = true;

						_removeAjaxCursor();

						mfp._setFocus();

						setTimeout(function() {
							mfp.wrap.addClass(READY_CLASS);
						}, 16);

						mfp.updateStatus('ready');

						_mfpTrigger('AjaxContentAdded');
					},
					error: function() {
						_removeAjaxCursor();
						item.finished = item.loadError = true;
						mfp.updateStatus('error', mfp.st.ajax.tError.replace('%url%', item.src));
					}
				}, mfp.st.ajax.settings);

				mfp.req = $.ajax(opts);

				return '';
			}
		}
	});

	/*>>ajax*/

	/*>>image*/
	var _imgInterval,
		_getTitle = function(item) {
			if(item.data && item.data.title !== undefined)
				return item.data.title;

			var src = mfp.st.image.titleSrc;

			if(src) {
				if($.isFunction(src)) {
					return src.call(mfp, item);
				} else if(item.el) {
					return item.el.attr(src) || '';
				}
			}
			return '';
		};

	$.magnificPopup.registerModule('image', {

		options: {
			markup: '<div class="mfp-figure">'+
						'<div class="mfp-close"></div>'+
						'<figure>'+
							'<div class="mfp-img"></div>'+
							'<figcaption>'+
								'<div class="mfp-bottom-bar">'+
									'<div class="mfp-title"></div>'+
									'<div class="mfp-counter"></div>'+
								'</div>'+
							'</figcaption>'+
						'</figure>'+
					'</div>',
			cursor: 'mfp-zoom-out-cur',
			titleSrc: 'title',
			verticalFit: true,
			tError: '<a href="%url%">The image</a> could not be loaded.'
		},

		proto: {
			initImage: function() {
				var imgSt = mfp.st.image,
					ns = '.image';

				mfp.types.push('image');

				_mfpOn(OPEN_EVENT+ns, function() {
					if(mfp.currItem.type === 'image' && imgSt.cursor) {
						$(document.body).addClass(imgSt.cursor);
					}
				});

				_mfpOn(CLOSE_EVENT+ns, function() {
					if(imgSt.cursor) {
						$(document.body).removeClass(imgSt.cursor);
					}
					_window.off('resize' + EVENT_NS);
				});

				_mfpOn('Resize'+ns, mfp.resizeImage);
				if(mfp.isLowIE) {
					_mfpOn('AfterChange', mfp.resizeImage);
				}
			},
			resizeImage: function() {
				var item = mfp.currItem;
				if(!item || !item.img) return;

				if(mfp.st.image.verticalFit) {
					var decr = 0;
					// fix box-sizing in ie7/8
					if(mfp.isLowIE) {
						decr = parseInt(item.img.css('padding-top'), 10) + parseInt(item.img.css('padding-bottom'),10);
					}
					item.img.css('max-height', mfp.wH-decr);
				}
			},
			_onImageHasSize: function(item) {
				if(item.img) {

					item.hasSize = true;

					if(_imgInterval) {
						clearInterval(_imgInterval);
					}

					item.isCheckingImgSize = false;

					_mfpTrigger('ImageHasSize', item);

					if(item.imgHidden) {
						if(mfp.content)
							mfp.content.removeClass('mfp-loading');

						item.imgHidden = false;
					}

				}
			},

			/**
			 * Function that loops until the image has size to display elements that rely on it asap
			 */
			findImageSize: function(item) {

				var counter = 0,
					img = item.img[0],
					mfpSetInterval = function(delay) {

						if(_imgInterval) {
							clearInterval(_imgInterval);
						}
						// decelerating interval that checks for size of an image
						_imgInterval = setInterval(function() {
							if(img.naturalWidth > 0) {
								mfp._onImageHasSize(item);
								return;
							}

							if(counter > 200) {
								clearInterval(_imgInterval);
							}

							counter++;
							if(counter === 3) {
								mfpSetInterval(10);
							} else if(counter === 40) {
								mfpSetInterval(50);
							} else if(counter === 100) {
								mfpSetInterval(500);
							}
						}, delay);
					};

				mfpSetInterval(1);
			},

			getImage: function(item, template) {

				var guard = 0,

					// image load complete handler
					onLoadComplete = function() {
						if(item) {
							if (item.img[0].complete) {
								item.img.off('.mfploader');

								if(item === mfp.currItem){
									mfp._onImageHasSize(item);

									mfp.updateStatus('ready');
								}

								item.hasSize = true;
								item.loaded = true;

								_mfpTrigger('ImageLoadComplete');

							}
							else {
								// if image complete check fails 200 times (20 sec), we assume that there was an error.
								guard++;
								if(guard < 200) {
									setTimeout(onLoadComplete,100);
								} else {
									onLoadError();
								}
							}
						}
					},

					// image error handler
					onLoadError = function() {
						if(item) {
							item.img.off('.mfploader');
							if(item === mfp.currItem){
								mfp._onImageHasSize(item);
								mfp.updateStatus('error', imgSt.tError.replace('%url%', item.src) );
							}

							item.hasSize = true;
							item.loaded = true;
							item.loadError = true;
						}
					},
					imgSt = mfp.st.image;


				var el = template.find('.mfp-img');
				if(el.length) {
					var img = document.createElement('img');
					img.className = 'mfp-img';
					if(item.el && item.el.find('img').length) {
						img.alt = item.el.find('img').attr('alt');
					}
					item.img = $(img).on('load.mfploader', onLoadComplete).on('error.mfploader', onLoadError);
					img.src = item.src;

					// without clone() "error" event is not firing when IMG is replaced by new IMG
					// TODO: find a way to avoid such cloning
					if(el.is('img')) {
						item.img = item.img.clone();
					}

					img = item.img[0];
					if(img.naturalWidth > 0) {
						item.hasSize = true;
					} else if(!img.width) {
						item.hasSize = false;
					}
				}

				mfp._parseMarkup(template, {
					title: _getTitle(item),
					img_replaceWith: item.img
				}, item);

				mfp.resizeImage();

				if(item.hasSize) {
					if(_imgInterval) clearInterval(_imgInterval);

					if(item.loadError) {
						template.addClass('mfp-loading');
						mfp.updateStatus('error', imgSt.tError.replace('%url%', item.src) );
					} else {
						template.removeClass('mfp-loading');
						mfp.updateStatus('ready');
					}
					return template;
				}

				mfp.updateStatus('loading');
				item.loading = true;

				if(!item.hasSize) {
					item.imgHidden = true;
					template.addClass('mfp-loading');
					mfp.findImageSize(item);
				}

				return template;
			}
		}
	});

	/*>>image*/

	/*>>zoom*/
	var hasMozTransform,
		getHasMozTransform = function() {
			if(hasMozTransform === undefined) {
				hasMozTransform = document.createElement('p').style.MozTransform !== undefined;
			}
			return hasMozTransform;
		};

	$.magnificPopup.registerModule('zoom', {

		options: {
			enabled: false,
			easing: 'ease-in-out',
			duration: 300,
			opener: function(element) {
				return element.is('img') ? element : element.find('img');
			}
		},

		proto: {

			initZoom: function() {
				var zoomSt = mfp.st.zoom,
					ns = '.zoom',
					image;

				if(!zoomSt.enabled || !mfp.supportsTransition) {
					return;
				}

				var duration = zoomSt.duration,
					getElToAnimate = function(image) {
						var newImg = image.clone().removeAttr('style').removeAttr('class').addClass('mfp-animated-image'),
							transition = 'all '+(zoomSt.duration/1000)+'s ' + zoomSt.easing,
							cssObj = {
								position: 'fixed',
								zIndex: 9999,
								left: 0,
								top: 0,
								'-webkit-backface-visibility': 'hidden'
							},
							t = 'transition';

						cssObj['-webkit-'+t] = cssObj['-moz-'+t] = cssObj['-o-'+t] = cssObj[t] = transition;

						newImg.css(cssObj);
						return newImg;
					},
					showMainContent = function() {
						mfp.content.css('visibility', 'visible');
					},
					openTimeout,
					animatedImg;

				_mfpOn('BuildControls'+ns, function() {
					if(mfp._allowZoom()) {

						clearTimeout(openTimeout);
						mfp.content.css('visibility', 'hidden');

						// Basically, all code below does is clones existing image, puts in on top of the current one and animated it

						image = mfp._getItemToZoom();

						if(!image) {
							showMainContent();
							return;
						}

						animatedImg = getElToAnimate(image);

						animatedImg.css( mfp._getOffset() );

						mfp.wrap.append(animatedImg);

						openTimeout = setTimeout(function() {
							animatedImg.css( mfp._getOffset( true ) );
							openTimeout = setTimeout(function() {

								showMainContent();

								setTimeout(function() {
									animatedImg.remove();
									image = animatedImg = null;
									_mfpTrigger('ZoomAnimationEnded');
								}, 16); // avoid blink when switching images

							}, duration); // this timeout equals animation duration

						}, 16); // by adding this timeout we avoid short glitch at the beginning of animation


						// Lots of timeouts...
					}
				});
				_mfpOn(BEFORE_CLOSE_EVENT+ns, function() {
					if(mfp._allowZoom()) {

						clearTimeout(openTimeout);

						mfp.st.removalDelay = duration;

						if(!image) {
							image = mfp._getItemToZoom();
							if(!image) {
								return;
							}
							animatedImg = getElToAnimate(image);
						}

						animatedImg.css( mfp._getOffset(true) );
						mfp.wrap.append(animatedImg);
						mfp.content.css('visibility', 'hidden');

						setTimeout(function() {
							animatedImg.css( mfp._getOffset() );
						}, 16);
					}

				});

				_mfpOn(CLOSE_EVENT+ns, function() {
					if(mfp._allowZoom()) {
						showMainContent();
						if(animatedImg) {
							animatedImg.remove();
						}
						image = null;
					}
				});
			},

			_allowZoom: function() {
				return mfp.currItem.type === 'image';
			},

			_getItemToZoom: function() {
				if(mfp.currItem.hasSize) {
					return mfp.currItem.img;
				} else {
					return false;
				}
			},

			// Get element postion relative to viewport
			_getOffset: function(isLarge) {
				var el;
				if(isLarge) {
					el = mfp.currItem.img;
				} else {
					el = mfp.st.zoom.opener(mfp.currItem.el || mfp.currItem);
				}

				var offset = el.offset();
				var paddingTop = parseInt(el.css('padding-top'),10);
				var paddingBottom = parseInt(el.css('padding-bottom'),10);
				offset.top -= ( $(window).scrollTop() - paddingTop );


				/*

				Animating left + top + width/height looks glitchy in Firefox, but perfect in Chrome. And vice-versa.

				 */
				var obj = {
					width: el.width(),
					// fix Zepto height+padding issue
					height: (_isJQ ? el.innerHeight() : el[0].offsetHeight) - paddingBottom - paddingTop
				};

				// I hate to do this, but there is no another option
				if( getHasMozTransform() ) {
					obj['-moz-transform'] = obj['transform'] = 'translate(' + offset.left + 'px,' + offset.top + 'px)';
				} else {
					obj.left = offset.left;
					obj.top = offset.top;
				}
				return obj;
			}

		}
	});



	/*>>zoom*/

	/*>>iframe*/

	var IFRAME_NS = 'iframe',
		_emptyPage = '//about:blank',

		_fixIframeBugs = function(isShowing) {
			if(mfp.currTemplate[IFRAME_NS]) {
				var el = mfp.currTemplate[IFRAME_NS].find('iframe');
				if(el.length) {
					// reset src after the popup is closed to avoid "video keeps playing after popup is closed" bug
					if(!isShowing) {
						el[0].src = _emptyPage;
					}

					// IE8 black screen bug fix
					if(mfp.isIE8) {
						el.css('display', isShowing ? 'block' : 'none');
					}
				}
			}
		};

	$.magnificPopup.registerModule(IFRAME_NS, {

		options: {
			markup: '<div class="mfp-iframe-scaler">'+
						'<div class="mfp-close"></div>'+
						'<iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe>'+
					'</div>',

			srcAction: 'iframe_src',

			// we don't care and support only one default type of URL by default
			patterns: {
				youtube: {
					index: 'youtube.com',
					id: 'v=',
					src: '//www.youtube.com/embed/%id%?autoplay=1'
				},
				vimeo: {
					index: 'vimeo.com/',
					id: '/',
					src: '//player.vimeo.com/video/%id%?autoplay=1'
				},
				gmaps: {
					index: '//maps.google.',
					src: '%id%&output=embed'
				}
			}
		},

		proto: {
			initIframe: function() {
				mfp.types.push(IFRAME_NS);

				_mfpOn('BeforeChange', function(e, prevType, newType) {
					if(prevType !== newType) {
						if(prevType === IFRAME_NS) {
							_fixIframeBugs(); // iframe if removed
						} else if(newType === IFRAME_NS) {
							_fixIframeBugs(true); // iframe is showing
						}
					}// else {
						// iframe source is switched, don't do anything
					//}
				});

				_mfpOn(CLOSE_EVENT + '.' + IFRAME_NS, function() {
					_fixIframeBugs();
				});
			},

			getIframe: function(item, template) {
				var embedSrc = item.src;
				var iframeSt = mfp.st.iframe;

				$.each(iframeSt.patterns, function() {
					if(embedSrc.indexOf( this.index ) > -1) {
						if(this.id) {
							if(typeof this.id === 'string') {
								embedSrc = embedSrc.substr(embedSrc.lastIndexOf(this.id)+this.id.length, embedSrc.length);
							} else {
								embedSrc = this.id.call( this, embedSrc );
							}
						}
						embedSrc = this.src.replace('%id%', embedSrc );
						return false; // break;
					}
				});

				var dataObj = {};
				if(iframeSt.srcAction) {
					dataObj[iframeSt.srcAction] = embedSrc;
				}
				mfp._parseMarkup(template, dataObj, item);

				mfp.updateStatus('ready');

				return template;
			}
		}
	});



	/*>>iframe*/

	/*>>gallery*/
	/**
	 * Get looped index depending on number of slides
	 */
	var _getLoopedId = function(index) {
			var numSlides = mfp.items.length;
			if(index > numSlides - 1) {
				return index - numSlides;
			} else  if(index < 0) {
				return numSlides + index;
			}
			return index;
		},
		_replaceCurrTotal = function(text, curr, total) {
			return text.replace(/%curr%/gi, curr + 1).replace(/%total%/gi, total);
		};

	$.magnificPopup.registerModule('gallery', {

		options: {
			enabled: false,
			arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
			preload: [0,2],
			navigateByImgClick: true,
			arrows: true,

			tPrev: 'Previous (Left arrow key)',
			tNext: 'Next (Right arrow key)',
			tCounter: '%curr% of %total%'
		},

		proto: {
			initGallery: function() {

				var gSt = mfp.st.gallery,
					ns = '.mfp-gallery';

				mfp.direction = true; // true - next, false - prev

				if(!gSt || !gSt.enabled ) return false;

				_wrapClasses += ' mfp-gallery';

				_mfpOn(OPEN_EVENT+ns, function() {

					if(gSt.navigateByImgClick) {
						mfp.wrap.on('click'+ns, '.mfp-img', function() {
							if(mfp.items.length > 1) {
								mfp.next();
								return false;
							}
						});
					}

					_document.on('keydown'+ns, function(e) {
						if (e.keyCode === 37) {
							mfp.prev();
						} else if (e.keyCode === 39) {
							mfp.next();
						}
					});
				});

				_mfpOn('UpdateStatus'+ns, function(e, data) {
					if(data.text) {
						data.text = _replaceCurrTotal(data.text, mfp.currItem.index, mfp.items.length);
					}
				});

				_mfpOn(MARKUP_PARSE_EVENT+ns, function(e, element, values, item) {
					var l = mfp.items.length;
					values.counter = l > 1 ? _replaceCurrTotal(gSt.tCounter, item.index, l) : '';
				});

				_mfpOn('BuildControls' + ns, function() {
					if(mfp.items.length > 1 && gSt.arrows && !mfp.arrowLeft) {
						var markup = gSt.arrowMarkup,
							arrowLeft = mfp.arrowLeft = $( markup.replace(/%title%/gi, gSt.tPrev).replace(/%dir%/gi, 'left') ).addClass(PREVENT_CLOSE_CLASS),
							arrowRight = mfp.arrowRight = $( markup.replace(/%title%/gi, gSt.tNext).replace(/%dir%/gi, 'right') ).addClass(PREVENT_CLOSE_CLASS);

						arrowLeft.click(function() {
							mfp.prev();
						});
						arrowRight.click(function() {
							mfp.next();
						});

						mfp.container.append(arrowLeft.add(arrowRight));
					}
				});

				_mfpOn(CHANGE_EVENT+ns, function() {
					if(mfp._preloadTimeout) clearTimeout(mfp._preloadTimeout);

					mfp._preloadTimeout = setTimeout(function() {
						mfp.preloadNearbyImages();
						mfp._preloadTimeout = null;
					}, 16);
				});


				_mfpOn(CLOSE_EVENT+ns, function() {
					_document.off(ns);
					mfp.wrap.off('click'+ns);
					mfp.arrowRight = mfp.arrowLeft = null;
				});

			},
			next: function() {
				mfp.direction = true;
				mfp.index = _getLoopedId(mfp.index + 1);
				mfp.updateItemHTML();
			},
			prev: function() {
				mfp.direction = false;
				mfp.index = _getLoopedId(mfp.index - 1);
				mfp.updateItemHTML();
			},
			goTo: function(newIndex) {
				mfp.direction = (newIndex >= mfp.index);
				mfp.index = newIndex;
				mfp.updateItemHTML();
			},
			preloadNearbyImages: function() {
				var p = mfp.st.gallery.preload,
					preloadBefore = Math.min(p[0], mfp.items.length),
					preloadAfter = Math.min(p[1], mfp.items.length),
					i;

				for(i = 1; i <= (mfp.direction ? preloadAfter : preloadBefore); i++) {
					mfp._preloadItem(mfp.index+i);
				}
				for(i = 1; i <= (mfp.direction ? preloadBefore : preloadAfter); i++) {
					mfp._preloadItem(mfp.index-i);
				}
			},
			_preloadItem: function(index) {
				index = _getLoopedId(index);

				if(mfp.items[index].preloaded) {
					return;
				}

				var item = mfp.items[index];
				if(!item.parsed) {
					item = mfp.parseEl( index );
				}

				_mfpTrigger('LazyLoad', item);

				if(item.type === 'image') {
					item.img = $('<img class="mfp-img" />').on('load.mfploader', function() {
						item.hasSize = true;
					}).on('error.mfploader', function() {
						item.hasSize = true;
						item.loadError = true;
						_mfpTrigger('LazyLoadError', item);
					}).attr('src', item.src);
				}


				item.preloaded = true;
			}
		}
	});

	/*>>gallery*/

	/*>>retina*/

	var RETINA_NS = 'retina';

	$.magnificPopup.registerModule(RETINA_NS, {
		options: {
			replaceSrc: function(item) {
				return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
			},
			ratio: 1 // Function or number.  Set to 1 to disable.
		},
		proto: {
			initRetina: function() {
				if(window.devicePixelRatio > 1) {

					var st = mfp.st.retina,
						ratio = st.ratio;

					ratio = !isNaN(ratio) ? ratio : ratio();

					if(ratio > 1) {
						_mfpOn('ImageHasSize' + '.' + RETINA_NS, function(e, item) {
							item.img.css({
								'max-width': item.img[0].naturalWidth / ratio,
								'width': '100%'
							});
						});
						_mfpOn('ElementParse' + '.' + RETINA_NS, function(e, item) {
							item.src = st.replaceSrc(item, ratio);
						});
					}
				}

			}
		}
	});

	/*>>retina*/
	 _checkInstance(); }));

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

	var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;// jQuery Scrollstop Plugin v1.2.0
	// https://github.com/ssorallen/jquery-scrollstop

	(function (factory) {
	  // UMD[2] wrapper for jQuery plugins to work in AMD or in CommonJS.
	  //
	  // [2] https://github.com/umdjs/umd

	  if (true) {
	    // AMD. Register as an anonymous module.
	    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(4)], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory), __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ? (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__), __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	  } else if (typeof exports === 'object') {
	    // Node/CommonJS
	    module.exports = factory(require('jquery'));
	  } else {
	    // Browser globals
	    factory(jQuery);
	  }
	}(function ($) {
	  // $.event.dispatch was undocumented and was deprecated in jQuery 1.7[1]. It
	  // was replaced by $.event.handle in jQuery 1.9.
	  //
	  // Use the first of the available functions to support jQuery <1.8.
	  //
	  // [1] https://github.com/jquery/jquery-migrate/blob/master/src/event.js#L25
	  var dispatch = $.event.dispatch || $.event.handle;

	  var special = $.event.special,
	      uid1 = 'D' + (+new Date()),
	      uid2 = 'D' + (+new Date() + 1);

	  special.scrollstart = {
	    setup: function(data) {
	      var _data = $.extend({
	        latency: special.scrollstop.latency
	      }, data);

	      var timer,
	          handler = function(evt) {
	            var _self = this,
	                _args = arguments;

	            if (timer) {
	              clearTimeout(timer);
	            } else {
	              evt.type = 'scrollstart';
	              dispatch.apply(_self, _args);
	            }

	            timer = setTimeout(function() {
	              timer = null;
	            }, _data.latency);
	          };

	      $(this).bind('scroll', handler).data(uid1, handler);
	    },
	    teardown: function() {
	      $(this).unbind('scroll', $(this).data(uid1));
	    }
	  };

	  special.scrollstop = {
	    latency: 250,
	    setup: function(data) {
	      var _data = $.extend({
	        latency: special.scrollstop.latency
	      }, data);

	      var timer,
	          handler = function(evt) {
	            var _self = this,
	                _args = arguments;

	            if (timer) {
	              clearTimeout(timer);
	            }

	            timer = setTimeout(function() {
	              timer = null;
	              evt.type = 'scrollstop';
	              dispatch.apply(_self, _args);
	            }, _data.latency);
	          };

	      $(this).bind('scroll', handler).data(uid2, handler);
	    },
	    teardown: function() {
	      $(this).unbind('scroll', $(this).data(uid2));
	    }
	  };
	}));


/***/ }),
/* 19 */
/***/ (function(module, exports) {

	(function($) {
	var panelFirstConfig = {latency: 600};
	$(window)
	  .on("scrollstart", function() {
	    $(".toIndexConts >.indexWord").hide();
	    $(".toIndexConts").addClass('hide');
	    console.log("sc_test");
	  })
	  .on('scrollstop', panelFirstConfig, function() {
	    $(".toIndexConts").removeClass('hide');
	    $(".indexWord").animate({width:'show'});
	    console.log("sc_tes");
	  });
	})(jQuery);



/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

	__webpack_require__(21);

	$(document).on('ready', function () {

	  //m-から始まるclassを取得
	  $.extend($.expr[":"], {
	    "m-": function (el) {
	      return el.className.match(/\m-\S+/g);
	    }
	  });

	  //inview設定1
	  $(':m-').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
	    var $this = $(this);
	    if (isInView) {
	      $this.addClass('inview');
	    } else {
	      $this.removeClass('inview');
	    }
	  });

	  //inview設定２
	  $('.inViewBlock').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
	    var $this = $(this);
	    //console.log($this);
	    if (isInView) {
	      $this.parent().addClass('inview');
	    }else{
	      $this.parent().removeClass('inview');
	    }
	  });


	});

/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

	var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/**
	 * author Christopher Blum
	 *    - based on the idea of Remy Sharp, http://remysharp.com/2009/01/26/element-in-view-event-plugin/
	 *    - forked from http://github.com/zuk/jquery.inview/
	 */
	(function (factory) {
	  if (true) {
	    // AMD
	    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(4)], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory), __WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ? (__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__), __WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	  } else if (typeof exports === 'object') {
	    // Node, CommonJS
	    module.exports = factory(require('jquery'));
	  } else {
	      // Browser globals
	    factory(jQuery);
	  }
	}(function ($) {

	  var inviewObjects = [], viewportSize, viewportOffset,
	      d = document, w = window, documentElement = d.documentElement, timer;

	  $.event.special.inview = {
	    add: function(data) {
	      inviewObjects.push({ data: data, $element: $(this), element: this });
	      // Use setInterval in order to also make sure this captures elements within
	      // "overflow:scroll" elements or elements that appeared in the dom tree due to
	      // dom manipulation and reflow
	      // old: $(window).scroll(checkInView);
	      //
	      // By the way, iOS (iPad, iPhone, ...) seems to not execute, or at least delays
	      // intervals while the user scrolls. Therefore the inview event might fire a bit late there
	      //
	      // Don't waste cycles with an interval until we get at least one element that
	      // has bound to the inview event.
	      if (!timer && inviewObjects.length) {
	         timer = setInterval(checkInView, 250);
	      }
	    },

	    remove: function(data) {
	      for (var i=0; i<inviewObjects.length; i++) {
	        var inviewObject = inviewObjects[i];
	        if (inviewObject.element === this && inviewObject.data.guid === data.guid) {
	          inviewObjects.splice(i, 1);
	          break;
	        }
	      }

	      // Clear interval when we no longer have any elements listening
	      if (!inviewObjects.length) {
	         clearInterval(timer);
	         timer = null;
	      }
	    }
	  };

	  function getViewportSize() {
	    var mode, domObject, size = { height: w.innerHeight, width: w.innerWidth };

	    // if this is correct then return it. iPad has compat Mode, so will
	    // go into check clientHeight/clientWidth (which has the wrong value).
	    if (!size.height) {
	      mode = d.compatMode;
	      if (mode || !$.support.boxModel) { // IE, Gecko
	        domObject = mode === 'CSS1Compat' ?
	          documentElement : // Standards
	          d.body; // Quirks
	        size = {
	          height: domObject.clientHeight,
	          width:  domObject.clientWidth
	        };
	      }
	    }

	    return size;
	  }

	  function getViewportOffset() {
	    return {
	      top:  w.pageYOffset || documentElement.scrollTop   || d.body.scrollTop,
	      left: w.pageXOffset || documentElement.scrollLeft  || d.body.scrollLeft
	    };
	  }

	  function checkInView() {
	    if (!inviewObjects.length) {
	      return;
	    }

	    var i = 0, $elements = $.map(inviewObjects, function(inviewObject) {
	      var selector  = inviewObject.data.selector,
	          $element  = inviewObject.$element;
	      return selector ? $element.find(selector) : $element;
	    });

	    viewportSize   = viewportSize   || getViewportSize();
	    viewportOffset = viewportOffset || getViewportOffset();

	    for (; i<inviewObjects.length; i++) {
	      // Ignore elements that are not in the DOM tree
	      if (!$.contains(documentElement, $elements[i][0])) {
	        continue;
	      }

	      var $element      = $($elements[i]),
	          elementSize   = { height: $element[0].offsetHeight, width: $element[0].offsetWidth },
	          elementOffset = $element.offset(),
	          inView        = $element.data('inview');

	      // Don't ask me why because I haven't figured out yet:
	      // viewportOffset and viewportSize are sometimes suddenly null in Firefox 5.
	      // Even though it sounds weird:
	      // It seems that the execution of this function is interferred by the onresize/onscroll event
	      // where viewportOffset and viewportSize are unset
	      if (!viewportOffset || !viewportSize) {
	        return;
	      }

	      if (elementOffset.top + elementSize.height > viewportOffset.top &&
	          elementOffset.top < viewportOffset.top + viewportSize.height &&
	          elementOffset.left + elementSize.width > viewportOffset.left &&
	          elementOffset.left < viewportOffset.left + viewportSize.width) {
	        if (!inView) {
	          $element.data('inview', true).trigger('inview', [true]);
	        }
	      } else if (inView) {
	        $element.data('inview', false).trigger('inview', [false]);
	      }
	    }
	  }

	  $(w).bind("scroll resize scrollstop", function() {
	    viewportSize = viewportOffset = null;
	  });

	  // IE < 9 scrolls to focused elements without firing the "scroll" event
	  if (!documentElement.addEventListener && documentElement.attachEvent) {
	    documentElement.attachEvent("onfocusin", function() {
	      viewportOffset = null;
	    });
	  }
	}));


/***/ }),
/* 22 */
/***/ (function(module, exports) {

	$(function () {

	  $(".cat2").css("display", "none");

	  $(".cat1").mouseover(function (event) {
	    $(".cat1").css("display", "none");
	    $(".cat2").css("display", "table");
	  });
	  $(".cat2").mouseout(function (event) {
	    $(".cat1").css("display", "table");
	    $(".cat2").css("display", "none");
	  });

	  $(".cat3").css("display", "none");

	  $(".cat1").mouseover(function (event) {
	    $(".cat1").css("display", "none");
	    $(".cat3").css("display", "table");
	  });
	  $(".cat3").mouseout(function (event) {
	    $(".cat1").css("display", "table");
	    $(".cat3").css("display", "none");
	  });

	  $(".cat4").css("display", "none");

	  $(".cat1").mouseover(function (event) {
	    $(".cat1").css("display", "none");
	    $(".cat4").css("display", "table");
	  });
	  $(".cat4").mouseout(function (event) {
	    $(".cat1").css("display", "table");
	    $(".cat4").css("display", "none");
	  });

	  $(".cat5").css("display", "none");

	  $(".cat1").mouseover(function (event) {
	    $(".cat1").css("display", "none");
	    $(".cat5").css("display", "table");
	  });
	  $(".cat5").mouseout(function (event) {
	    $(".cat1").css("display", "table");
	    $(".cat5").css("display", "none");
	  });
	});

/***/ }),
/* 23 */
/***/ (function(module, exports) {

	$(window).on("load pjax:load", function(){
	  console.log("test");

	  $('#slider_main').sliderPro({

	    width: 720, //横幅
	    height: 400,
	    arrows: true, //左右の矢印
	    fadeArrows: false,
	    buttons: false, //ナビゲーションボタン
	    slideDistance: 8, //スライド同士の距離
	    visibleSize: '100%', //前後のスライドを表示
	    touchSwipe: false, //タッチスワイプをするか否か 初期:true

	  });
	  
	  $(".sp-image").fadeIn("slow");

	});

/***/ })
/******/ ]);